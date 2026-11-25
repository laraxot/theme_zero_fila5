---
title: "Theme Zero — build frontend e asset"
type: how-to
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero vite build tailwind 3.4 alpine flowbite postcss outDir public manifest symlink xot:theme-link public_html themes Zero asset binari no git lfs"
merged_from:
  - bmad/document-root-public-html.md
  - wiki/memories/public-path-public-html.md
  - wiki/rules/binary-assets.md
  - bmad/no-git-lfs.md
  - bmad/tech-spec.md
  - bmad/troubleshooting.md
  - wiki/concepts/context-overflow-prevention.md
---

# Theme Zero — build frontend e asset

## Scopo

Come si compilano CSS/JS del tema e come arrivano al browser. Decisione registrata:
[ADR theme-assets-are-built-in-theme-and-served-by-symlink](./adr/0003-theme-assets-are-built-in-theme-and-served-by-symlink.md).

## Stack (da `package.json`)

| Pacchetto | Versione |
|---|---|
| `vite` | ^6.3 |
| `laravel-vite-plugin` | ^1.0 |
| `tailwindcss` | ^3.4 (+ `@tailwindcss/forms`, `@tailwindcss/typography`) |
| `postcss` | ^8.5 (+ `postcss-import`, `postcss-nesting`, `autoprefixer`) |
| `alpinejs` | ^3.13 (+ `@alpinejs/collapse`, `@alpinejs/focus`) |
| `flowbite` | ^1.8 |
| `axios` | ^1.9 |

`resources/js/app.js` importa `./bootstrap`, avvia Alpine e importa `flowbite`.

## Come funziona

1. Sorgenti: `resources/css/app.css` (`@tailwind base/components/utilities` + variabili
   colore) e `resources/js/app.js`.
2. `vite.config.js`: `build.outDir: './public'`, `emptyOutDir: false`,
   `manifest: 'manifest.json'` → `Themes/Zero/public/manifest.json`.
3. `php artisan xot:theme-link` crea `public_html/themes/Zero` → `laravel/Themes/Zero/public`
   (`Modules/Xot/app/Console/Commands/ThemeLinkCommand.php`).
4. I layout caricano `@vite(['resources/css/app.css','resources/js/app.js'], 'themes/Zero')`.

```bash
cd laravel/Themes/Zero && npm install && npm run build
cd laravel && php artisan xot:theme-link --theme=Zero --dry-run
```

`tailwind.config.js` scansiona anche `Modules/**/Filament/**/*.php`,
`Modules/**/resources/views/**/*.blade.php`, `vendor/filament/**` e `node_modules/flowbite`:
classi usate dai moduli finiscono nel CSS del tema.

## Regole

- `public_path()` = `{repo}/public_html/`, **mai** `laravel/public/` (override in
  `laravel/app/Application.php`). SSoT:
  `bashscripts/ai/wiki/memories/frontend-themes-css.md#public-path-is-public-html`.
- Niente copia manuale degli asset in `public_html/` (il vecchio `npm run copy` e' stato
  rimosso: rompeva il symlink).
- Binari (immagini, font, PDF) come blob git normali: **niente Git LFS** (`filter=lfs`,
  `git lfs track`, file pointer). Canon: `bashscripts/ai/wiki/rules/git-workflow.md`.

## Insidie note

- `emptyOutDir: false` lascia in `public/` build vecchie: pulizia manuale.
- Il symlink va creato in ogni installazione; senza, `@vite(..., 'themes/Zero')` non risolve.
- Theme One non ha build propria: dipende da questa. Cambiare il manifest o la cartella
  rompe anche One.
- "Unable to locate file in Vite manifest" → manca `npm run build` o il symlink.
