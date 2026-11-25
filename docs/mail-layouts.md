---
title: "Theme Zero — layout email"
type: concept
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero mail layouts email base.html christmas-professional spatie database mail templates body placeholder mustache GetMailLayoutAction Notify"
merged_from:
  - bmad/mail-layouts.md
---

# Theme Zero — layout email

## Scopo

Il tema fornisce l'involucro HTML delle email; il contenuto arriva dal database
(`spatie/laravel-database-mail-templates`, tabella `mail_templates`) tramite il modulo Notify.

## Come funziona

- File: `resources/mail-layouts/base.html` (layout istituzionale) e
  `resources/mail-layouts/christmas-professional.html` (variante stagionale).
- `Modules/Notify/app/Actions/Mail/GetMailLayoutAction.php` risolve
  `base_path('Themes/'.$pub_theme.'/resources/mail-layouts')`: il layout segue il `pub_theme`.
- Segnaposto Mustache presenti in `base.html`: `{{{ body }}}` (**obbligatorio**, contenuto del
  template), `{{ subject }}`, `{{ preheader_text }}`, `{{ logo_header }}`, `{{ logo_svg }}`,
  `{{ company_name }}`, `{{ company_address }}`, `{{ site_url }}`, `{{ unsubscribe_url }}`,
  `{{ facebook_url }}`, `{{ twitter_url }}`, `{{ linkedin_url }}`, `{{ year }}`.
- Stile ispirato al Design System Italiano (blu `#0066CC`), CSS inline, responsive.

## Regole

- Tre graffe solo per `body` (HTML gia' sanificato dal template); il resto con due graffe.
- Nuovo layout: nuovo file `.html` nella stessa cartella, nessun PHP nel tema.
- Il logo SVG predefinito vive in `Modules/Notify/resources/svg/logo.svg`.

## Insidie

- I client email ignorano gran parte del CSS moderno: niente variabili CSS ne' flex/grid critici.
