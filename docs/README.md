---
title: "Theme Zero — scopo"
type: readme
theme: Zero
status: active
updated: 2026-11-25
qmd: "theme zero scopo tema pubblico attivo pub_theme adm_theme vestito blade tailwind alpine flowbite vite nessun php folio login widget mail layouts"
merged_from:
  - bmad/scopo.md
  - bmad/purpose.md
  - bmad/README.md
  - bmad/readme-en.md
  - bmad/theme-overview.md
  - bmad/philosophy.md
  - bmad/comprehensive-theme-analysis.md
  - analisi-completa-tema.md
  - bmad/theme-documentation.md
  - bmad/themes-system-complete-guide.md
  - wiki/concepts/theme-zero-operating-focus.md
  - wiki/overview.md
  - wiki/overviews/overview.md
  - wiki/README.md
  - glossary.md
  - concepts/README.md
  - architecture/README.md
---

# Theme Zero — scopo

## Perche' esiste

**Zero e' il "vestito" del front office PTVX**: markup Blade, token di stile, pipeline Vite,
layout email e testi di interfaccia. Non decide cosa e' una pagina ne' quale dato mostrare:
dati e interazioni arrivano dai moduli (in primis il `LoginWidget` del modulo User).
Filosofia in una riga: **tema = vestito, moduli = corpo, Xot = ossatura**.

## Dove si usa

- `theme.json`: `name: Zero`, `type: pub`, `active: true`.
- `config/local/ptvx/xra.php` e `config/local/ptvx-mono/xra.php`: `$adm_theme = 'Zero'`,
  `$pub_theme = $adm_theme` → Zero e' sia tema pubblico sia tema admin degli host PTVX.
- Theme One riusa la **build** di Zero: `@vite([...], 'themes/Zero')` nei suoi layout.
- Theme Three e' un guscio senza codice (vedi `../../Three/docs/README.md`).

## Cosa contiene (verificato 2026-11-25)

| Parte | Contenuto | Dove |
|---|---|---|
| Layout | `layouts.main`, `layouts.guest`, `layouts.auth`, `layouts.app` + `layouts/app.blade.php` | `resources/views/components/layouts/`, `resources/views/layouts/` |
| Pagine Folio | `index`, `home`, `auth/login` | `resources/views/pages/` |
| Blocchi | hero, cta, features, stats, testimonials, links, navigation, sidebar | `resources/views/components/blocks/` |
| Componenti | `navigation`, `nav-link`, `responsive-nav-link`, `ui/logo` | `resources/views/components/` |
| Override Filament | vista del widget di login | `resources/views/filament/widgets/auth/login.blade.php` |
| Asset | Tailwind 3.4, Alpine 3, Flowbite (`^1.8.1`), Vite 6; build in `public/` | `resources/css/app.css`, `resources/js/app.js`, `vite.config.js` |
| Mail | `base.html`, `christmas-professional.html` | `resources/mail-layouts/` |
| Lingue | it, en, de (completi), es (parziale) | `lang/` |
| PHP | nessuno: `app/` contiene solo `.gitkeep` | test `tests/Unit/ThemeBoundariesTest.php` |

## Regole in breve

1. Solo presentazione: Blade, CSS/JS, mail-layouts, traduzioni. Niente Action/modelli in `app/`.
2. Comportamento Filament nuovo: prima il mirror `XotBase*` in Xot, poi l'override di vista qui.
3. Niente testo hardcoded: `__('pub_theme::<file>.<chiave>')`.
4. Lo stack reale e' Tailwind **3.4** + Alpine + Flowbite: non documentare Tailwind 4 / Flux.

## Documentazione

Mappa completa: [00-INDEX.md](./00-INDEX.md). Punti d'ingresso:
[architecture](./architecture.md) · [frontend-build](./frontend-build.md) ·
[authentication](./authentication.md) · [theme-boundaries](./theme-boundaries.md) ·
[ADR](./adr/README.md).
