---
title: "Theme Zero — confini tema/moduli"
type: concept
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero confini tema moduli niente modelli migrazioni composer laravel 13 spatie permission team ide-helper phpdoc campi gg calcolati performance progressioni ptv sigma"
merged_from:
  - bmad/model-usage-in-themes.md
  - model-usage-in-themes.md
  - bmad/one-migration-themes-boundary.md
  - bmad/laravel-13-composer-boundary.md
  - laravel-13-composer-boundary.md
  - bmad/laravel-13-upgrade.md
  - laravel-13-upgrade.md
  - bmad/composer-modules-not-themes.md
  - wiki/sources/laravel13-theme-zero-composer-audit.md
  - bmad/spatie-permission-team-context.md
  - bmad/spatie-permission-teams-boundary.md
  - spatie-permission-teams-boundary.md
  - bmad/ide-helper-phpdoc-boundary.md
  - bmad/database-governance.md
  - bmad/model-docs-governance.md
  - bmad/accessor-delegation-pattern.md
  - bmad/schemaless-attributes.md
  - wiki/concepts/criteri-gg-theme-boundary-audit.md
  - wiki/concepts/gg-integ-params-no-asz-theme-boundary.md
  - wiki/concepts/platform-leaf-dependency-and-theme.md
  - wiki/concepts/module-directory-structure-boundary.md
  - wiki/concepts/organizzativa-money.md
  - bmad/performance-actions-reference.md
  - bmad/performance-calcolo-quota-troubleshooting.md
---

# Theme Zero — confini tema/moduli

## Perche'

Lo stesso tema serve installazioni diverse (One ne riusa la build): cio' che porta logica di
dominio non si trasferisce e non si testa nelle Blade. Decisione:
[ADR theme-as-dress-no-php](./adr/theme-as-dress-no-php.md).

## Regole

- **Niente PHP in `app/`** (`.gitkeep` soltanto) — test `the theme ships no PHP classes`.
- **Niente modelli, migration, policy, Action** nel tema: "1 modello = 1 migrazione" vive nel
  modulo owner; colonne nuove con `tableUpdate()` + `hasColumn()` nella migration del modulo.
- **Dati nelle viste**: via widget Filament del modulo, dati passati dalla pagina o view composer
  registrato dal modulo. Mai query o `Model::` nelle Blade.
- **Direzione dipendenze**: Xot → Ptv → leaf (Progressioni, Indennita*, Performance). Il tema
  sta fuori e non fa `use Modules\<Dominio>\Models\...`.
- **Valori calcolati** (giorni presenza `gg_*`, quote Performance, criteri): il tema **mostra**
  campi gia' materializzati dai moduli e non ricalcola ne' inventa sinonimi. Discrepanze di
  calcolo si indagano nel modulo (es. `Modules/Performance/docs/bmad/discrepanza-calcolo-quota.md`,
  contratto `Modules/Performance/docs/contracts/update-gg-presenza-dalal-action.md`).
- **Accessor e schemaless attributes**: si leggono dal modello del modulo; il tema non aggiunge
  `@property` ne' rigenera PHPDoc (ide-helper gira sui moduli).
- **Composer**: `Themes/Zero/composer.json` ha solo metadati (`laraxot/theme_zero`, nessun
  `require`/`autoload`): resta fuori dal merge-plugin finche' non servono dipendenze PHP.
  Le dipendenze frontend stanno in `package.json`. Debugbar resta in Xot.
- **Autorizzazioni**: ruoli/permessi/team li configura il modulo User (Spatie Permission 7:
  `permission.models.team`; `TeamModelNotConfigured` → config + `config:clear`). Il tema li consuma.
- **Struttura**: niente cartelle maiuscole in root, niente `_docs/`, `lang/lang/`, probe PHPStan.

## Insidie note

- Molte pagine storiche citavano moduli di altri progetti (`healthcare_app`, `ModuloEsempio`,
  Cms, Chart, Limesurvey) o li davano per assenti quando qui esistono (Performance, Ptv,
  Progressioni, Sigma): verificare sempre con `ls laravel/Modules`.
