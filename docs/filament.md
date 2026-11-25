---
title: "Theme Zero — Filament nel tema"
type: concept
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero filament 5 xotbase mai estendere filament schema non form table class getTableColumns final infolist nested resources sub navigation override viste widget frontoffice"
merged_from:
  - concepts/xotbase-never-extend-filament.md
  - bmad/filament-version.md
  - filament-version.md
  - bmad/filament-blueprint.md
  - bmad/filament-admin-sub-navigation.md
  - bmad/filament-table-architecture.md
  - bmad/filament-resource-schemas-tables.md
  - bmad/filament-infolist-pattern.md
  - bmad/filament-5-nested-resources.md
  - bmad/filament-5-nested-resources-complete-guide.md
  - wiki/concepts/filament-nested-resources.md
  - wiki/concepts/filament-v5-schema-not-form.md
  - bmad/gestionale-panels-vs-themes.md
  - manage-related-records.md
  - readonly-field-styling.md
---

# Theme Zero — Filament nel tema

## Scopo

Zero non ha Resource, pagine o widget PHP. Tocca Filament solo in due modi: **override di viste**
in `resources/views/filament/` (oggi `widgets/auth/login.blade.php`) e **montaggio** di widget dei
moduli nelle pagine Folio (`@livewire(...)`). Stack: Filament 5, Livewire 4.

## Regole

- Ogni classe Filament nuova nasce in un modulo ed estende il mirror Xot
  (`XotBaseResource`, `XotBasePage`, `XotBaseWidget`, `XotBaseSchemaWidget`,
  `XotBaseInfolistWidget`...), mai `Filament\...` diretto. Canon:
  `bashscripts/ai/wiki/rules/xotbase-inheritance.md`.
- Filament 5: il tipo e' `Filament\Schemas\Schema`, non `Filament\Forms\Form`.
- Resource: form/infolist/tabella in classi dedicate (`Schemas/*Form`, `*Infolist`,
  `Tables/<Plurale>Table` che estende `XotBaseResourceTable`). Mai `getTable*` sulla pagina List:
  `XotBaseListRecords::getTableColumns()` e' `final`. Eccezione: `XotBaseManageRelatedRecords`.
  Canon: `laravel/Modules/Xot/docs/wiki/memories/tabella-appartiene-alla-resource-non-alla-pagina.md`.
- Tab sopra la pagina di record = sub navigation decisa dalla Resource del modulo
  (`getRecordSubNavigation()`), non dal tema.
- Nessuna `->label('...')`: le label arrivano dai file lingua del modulo owner.
- Widget frontoffice montati esplicitamente; niente `discoverWidgets` per il chrome del tema.
- Gate per override di viste: `php artisan view:cache`.

## Insidie note

- Fuori dal pannello mancano le classi `.fi-*`: vedi [authentication](./authentication.md).
- Le guide precedenti su nested resources, infolist e campi readonly descrivevano Resource di
  moduli (o di altri progetti) come se fossero del tema: la documentazione di quelle Resource
  sta nel modulo owner.
- Documenti di conflitti git storici descrivevano una migrazione "Schema → Form": e' l'opposto
  del canon v5.
