---
title: "Theme Zero — architettura delle viste"
type: architecture
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero architettura layout main guest auth app componenti blocchi folio pages home index pages_cms_quarantine container0 slug0 tema vestito pub_theme XotData"
merged_from:
  - bmad/architecture.md
  - bmad/modern-theme-architecture.md
  - bmad/theme-architecture-best-practices.md
  - bmad/layouts.md
  - bmad/components.md
  - bmad/customization.md
  - bmad/examples.md
  - bmad/folio-pages-structure.md
  - bmad/packages-integration.md
  - wiki/rules/architecture-rules.md
  - architecture-rules.md
  - wiki/concepts/component-library.md
  - wiki/concepts/responsive-system.md
  - wiki/how-to/theme-customization.md
  - wiki/overviews/advanced-features.md
  - wiki/rules/accessibility-standards.md
  - wiki/rules/performance-optimization.md
  - bmad/manage-related-records.md
  - bmad/readonly-field-styling.md
---

# Theme Zero — architettura delle viste

## Scopo

Descrivere come sono fatte le viste del tema e come vengono risolte, cosi' che una modifica
tocchi il file giusto. Per i confini con i moduli: [theme-boundaries](./theme-boundaries.md).

## Risoluzione del tema

Il nome del tema viene da `XotData::make()->pub_theme` (config `xra.php` per host). Le viste
si risolvono in `Themes/<pub_theme>/resources/views`, le traduzioni nel namespace
`pub_theme::`. Se il tema non e' registrabile (manca la cartella) la prima view fallisce su
`realpath`.

## Layout

| Componente | Uso | Note |
|---|---|---|
| `<x-layouts.main>` | pagine pubbliche (`home`, `auth/login`) | slot `title`, `description`; meta OG; `@livewireStyles`, `@filamentStyles`, `@filamentScripts(withCore: true)`; `@vite(..., 'themes/Zero')` |
| `<x-layouts.guest>` | pagine ospite | meta OG con `og_image`, stesso `@vite` |
| `<x-layouts.auth>` | pagine auth | carica anche il CSS compilato del pannello Filament (vedi [authentication](./authentication.md)) |
| `<x-layouts.app>` | layout minimo (`pages/index`) | 15 righe |
| `layouts/app.blade.php` | layout classico `@extends` | `@vite(..., 'themes/Zero')` |

## Pagine Folio

```text
resources/views/pages/
├── index.blade.php        # <x-layouts.app>, testi pub_theme::welcome
├── home.blade.php         # <x-layouts.main>, testi pub_theme::home
└── auth/login.blade.php   # <x-layouts.main> + @livewire(LoginWidget)
```

`pages/` e' la shell del tema, non un albero di domini editoriali: niente cartelle semantiche
(`dashboard/`, `profile/`...). Guardia di progetto: `bashscripts/tools/verify-no-semantic-folio-pages.sh`.

Le pagine dinamiche `[container0]/index` e `[container0]/[slug0]/index` sono state spostate in
`resources/views/pages_cms_quarantine/`: dipendono dal modulo Cms, assente in questo repo, e
fuori da `pages/` Folio non le registra.

## Componenti e blocchi

- `components/navigation`, `nav-link`, `responsive-nav-link` (stato attivo via `:active`),
  `ui/logo`.
- `components/blocks/<tipo>/<variante>.blade.php`: `hero/main`, `cta/banner`,
  `features/grid`, `stats/overview`, `testimonials/carousel`, `links/grid`,
  `navigation/simple`, `sidebar/quick-links`, `sidebar/system-info`. Sono blocchi anonimi
  pensati per contenuti JSON resi dal Cms; i testi stanno in `lang/*/blocks.php`.
- `links/grid` e' identico (md5) in One e Three.

## Personalizzazione

- Colori: variabili CSS `--color-primary-*` in `resources/css/app.css`, mappate in
  `tailwind.config.js` (`primary`, `danger`, ...) come `rgb(var(--color-...) / <alpha-value>)`.
- `darkMode: 'class'`.
- Nuovo blocco: `components/blocks/<tipo>/<variante>.blade.php` + chiavi in tutte le lingue.

## Insidie note

- Le guide precedenti descrivevano componenti inesistenti (`ui/card`, `x-zero.*`, theme
  service provider, dark-mode toggle, export): non reintrodurli senza codice.
- Pagine Filament admin (ManageRelatedRecords, campi readonly) **non** passano dal tema:
  lo stile si cambia nelle classi del modulo o con CSS del tema, mai con PHP nel tema.
