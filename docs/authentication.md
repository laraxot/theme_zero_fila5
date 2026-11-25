---
title: "Theme Zero — pagine di autenticazione"
type: concept
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero login autenticazione folio auth/login LoginWidget modulo User filamentStyles css pannello layouts.auth layouts.main google fonts"
merged_from:
  - bmad/authentication.md
  - bmad/auth-examples.md
  - bmad/auth-login-ui-ux.md
---

# Theme Zero — pagine di autenticazione

## Scopo

Il login del front office ha la grafica del tema ma la logica (validazione, rate limit,
autenticazione) del modulo User. Decisione:
[ADR auth-pages-render-module-widgets-with-panel-css](./adr/0001-auth-pages-render-module-widgets-with-panel-css.md).

## Come funziona

- Route Folio: `resources/views/pages/auth/login.blade.php` → `/auth/login`.
- La pagina usa `<x-layouts.main>` (slot `title`/`description`) e monta
  `@livewire(\Modules\User\Filament\Widgets\Auth\LoginWidget::class)`. Il tema non ha un form proprio.
- La vista del widget e' sovrascritta in `resources/views/filament/widgets/auth/login.blade.php`.
- Testi: `lang/<locale>/auth.php` (`pub_theme::auth.login.heading.title`,
  `auth.actions.login.label`, `auth.consent.*`).
- `<x-layouts.auth>` carica `@livewireStyles`, `@filamentStyles` e il CSS compilato del pannello
  (`asset('css/filament/filament/app.css')`, generato da `php artisan filament:assets`): fuori da
  un pannello `@filamentStyles` emette solo variabili colore, non le classi `.fi-*`.

Guardia: `tests/Unit/ThemeBoundariesTest.php` verifica `@filamentStyles` + CSS del pannello nel
layout auth e il `LoginWidget` nella pagina di login.

## Regole

- Niente form di login in Blade/Volt nel tema e niente copia delle classi `.fi-*` in Tailwind.
- Registrazione, reset password e logout: stessi principi (widget/route del modulo User); oggi il
  tema ha solo la pagina di login. I link a `terms`/`privacy` sono commentati (route assenti).

## Insidie note

- **Incongruenza da verificare**: `pages/auth/login.blade.php` usa `layouts.main`, che ha
  `@filamentStyles` ma non il CSS del pannello; `layouts.auth` (che lo carica) oggi non e'
  usato da nessuna vista. Il test passa comunque perche' controlla i due file separatamente.
- `layouts.auth` carica Google Fonts da `fonts.googleapis.com` prima del consenso cookie.
- Le guide precedenti descrivevano direzioni visive di altri progetti (es. "Restaurant"
  hospitality) e pagine register/forgot-password inesistenti.
