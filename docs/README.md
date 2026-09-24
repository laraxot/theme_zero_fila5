---
title: "Zero Theme — Documentation"
type: index
tags: [documentation, index, theme, zero]
updated: 2026-09-17
related:
  - ./index.md
  - ./CHANGELOG.md
---

# Tema Zero — Documentazione

Front door di `Themes/Zero/docs/`. Overview del tema piu' indice completo, organizzato per
argomento, di tutti i file rimasti in questa cartella. Link relativi. Policy: mai cancellare o
rinominare file per riorganizzare l'indice — le eccezioni gia' cancellate in questa sessione
(duplicati byte-identici) sono elencate in [Storico / da consolidare](#storico--da-consolidare)
con nota esplicita, non semplicemente rimosse dai link. Vedi
[docs-archive-policy.md](./docs-archive-policy.md).

## Gestionale / replica

Tema alternativo/sperimentale. Hub: gestionale-docs-index.md e tenant-modules-navigation-discipline.md
(link rimossi 2026-09-17: target non trovati in questo checkout, verosimilmente propri di un
repo/org sorella nello stesso ecosistema Laraxot — vedi [multi-org-sync-laraxot-provtv.md](./multi-org-sync-laraxot-provtv.md);
non verificabili qui, non ricreati) · [panels vs Zero](./gestionale-panels-vs-themes.md).

## Overview

Il tema **Zero** è il tema principale di default per l'applicazione Laraxot PTVX.

## Scopo (business)

- **Frontoffice**: layout e pagine base, con convenzioni condivise.
- **Coerenza**: integrazione con `UI` per componenti, e con `Xot` per regole architetturali.

## Struttura

Verificata contro il filesystem reale (2026-09-17): il tema non ha `config/` ne'
`routes/` propri, e `app/` e' vuota (solo `.gitkeep`, nessun namespace PSR-4 in
`composer.json`) — nessuna classe PHP vive in questo tema, solo viste/asset. Se
in futuro serve un `ServiceProvider` o una `View\Composer`, `app/` e' il posto
giusto, ma oggi e' riservata/non popolata.

```
Zero/
├── app/                 # vuota (.gitkeep), riservata per futuro codice PHP
├── docs/
├── lang/{it,en,de}/
├── public/assets/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── components/  # blocks/ + layouts/ + ui/ + navigation partials
│       ├── filament/widgets/auth/
│       ├── layouts/
│       └── pages/       # Folio: home.blade.php, index.blade.php, auth/login.blade.php
├── composer.json        # nessun autoload PSR-4
├── theme.json
└── vite.config.js
```

## Configurazione

### Regole Fondamentali

1. **PHPStan**: Configurazione centralizzata in `laravel/phpstan.neon`
2. **Output files**: `phpstan*.json` ignorati (NON committare)
3. **Namespace**: `Themes\Zero\`

## Repo indipendente

Path in `gitmodules.ini`: `laravel/Themes/Zero` → remote `laraxot/theme_zero_fila5`. Entrare con `cd`, non trattarlo come submodule della root. Protocollo: [17-gitmodules-path-iteration.md](../../../../bashscripts/docs/prompts/17-gitmodules-path-iteration.md).

## Backlinks

- [Xot Module](../../../Modules/Xot/docs/)
- [UI Module](../../../Modules/UI/docs/)

---

## Indice completo per argomento

### Overview e punti di ingresso

- [readme-en.md](./readme-en.md) — English overview (canonical; the uppercase `README-en.md` twin, stale/mismatched content, was deleted 2026-09-17 — see Storico)
- [philosophy.md](./philosophy.md) — theme philosophy
- [scopo.md](./scopo.md) — scope, boundaries and how to use the theme (partially cross-repo, see its 2026-09-17 correction note)
- [purpose.md](./purpose.md) — was not linked from any index; largely describes a sibling checkout, see its 2026-09-17 correction note
- [second-brain.md](./second-brain.md) — pointer to the module second-brain workflow
- [docs-archive-policy.md](./docs-archive-policy.md) — archive/duplication policy for this docs tree
- [docs-confidence-audit.md](./docs-confidence-audit.md) — docs confidence audit
- [docs-deduplication.md](./docs-deduplication.md) — docs deduplication notes
- [doc-first-workflow.md](./doc-first-workflow.md) — doc-first workflow
- [model-docs-governance.md](./model-docs-governance.md) — naming and docs hygiene rules
- [theme-documentation.md](./theme-documentation.md) — theme documentation guide
- [theme-documentation-standard.md](./theme-documentation-standard.md) — documentation standard
- [naming-conventions.md](./naming-conventions.md) — naming conventions
- [CHANGELOG.md](./CHANGELOG.md) — version history (kept uppercase; `changelog.md` is now a bridge stub pointing here)

### Architecture and theme structure

- [architecture.md](./architecture.md) — theme architecture ("vestito" pattern)
- [ARCHITECTURE.md](./ARCHITECTURE.md) — different content than `architecture.md` despite the matching name; not byte-identical (verified 2026-09-17, see Storico), kept separately pending a real content merge
- [architecture-rules.md](./architecture-rules.md) — architecture rules
- [modern-theme-architecture.md](./modern-theme-architecture.md) — modern stack (Livewire, Volt, Flux UI)
- [theme-architecture-best-practices.md](./theme-architecture-best-practices.md) — best practices
- [themes-system-complete-guide.md](./themes-system-complete-guide.md) — themes system guide ("il vestito di Laraxot")
- [comprehensive-theme-analysis.md](./comprehensive-theme-analysis.md) — comprehensive theme analysis (canonical; `analisi-completa-tema.md`, byte-identical twin, deleted 2026-09-17)
- [gestionale-panels-vs-themes.md](./gestionale-panels-vs-themes.md) — panels SRC vs themes
- [concepts/xotbase-never-extend-filament.md](./concepts/xotbase-never-extend-filament.md) — always XotBase*, never Filament* directly
- [accessor-delegation-pattern.md](./accessor-delegation-pattern.md) — accessor delegation and auto-persistence
- [model-usage-in-themes.md](./model-usage-in-themes.md) — model usage rules in themes
- [components.md](./components.md) — component catalog (component tree corrected 2026-09-17 against the real `resources/views/components/` filesystem)
- [layouts.md](./layouts.md) — layout system
- [mail-layouts.md](./mail-layouts.md) — mail layouts
- [manage-related-records.md](./manage-related-records.md) — ManageRelatedRecords styling
- [schemaless-attributes.md](./schemaless-attributes.md) — schemaless attributes in themes
- [binary-assets.md](./binary-assets.md) — binary assets
- [readonly-field-styling.md](./readonly-field-styling.md) — readonly field styling pattern
- [customization.md](./customization.md) — theme customization
- [folio-pages-structure.md](./folio-pages-structure.md) — Folio pages structure (verified against `resources/views/pages/`: `home.blade.php`, `index.blade.php`, `auth/login.blade.php`; duplicated "Provenienza" section cleaned up 2026-09-17)
- [schema.md](./schema.md) — module schema

### Filament and UI patterns

- [filament-version.md](./filament-version.md) — Filament version declaration
- [filament-table-architecture.md](./filament-table-architecture.md) — where a resource table is configured
- [filament-resource-schemas-tables.md](./filament-resource-schemas-tables.md) — resource schemas and tables
- [filament-infolist-pattern.md](./filament-infolist-pattern.md) — infolist pattern
- [filament-admin-sub-navigation.md](./filament-admin-sub-navigation.md) — admin panel sub navigation
- [filament-chart-integration.md](./filament-chart-integration.md) — ChartWidget integration
- [filament-5-nested-resources-complete-guide.md](./filament-5-nested-resources-complete-guide.md) — nested resources, complete guide
- [filament-5-nested-resources.md](./filament-5-nested-resources.md) — nested resources (shorter variant, see Storico)

### Navigation and translations (theme boundary)

- [navigation-integration.md](./navigation-integration.md) — navigation contract: labels/groups come from
  the owning module's `lang/`, never a `resource.navigation` fallback in the theme
- [navigation-translations.md](./navigation-translations.md) — companion rule for navigation translations
  (both files relate to a separate navigation-translation-fix effort scoped to `Modules/User/lang/`; kept
  as-is, cross-referenced here rather than rewritten)

### Charts: Chart.js and JPGraph

- [chartjs-datalabels-background-styling.md](./chartjs-datalabels-background-styling.md)
- [chartjs-datalabels-filament5-implementation.md](./chartjs-datalabels-filament5-implementation.md)
- [chartjs-datalabels-multiple-labels-complete-guide.md](./chartjs-datalabels-multiple-labels-complete-guide.md)
- [chartjs-datalabels-theme-integration.md](./chartjs-datalabels-theme-integration.md)
- [chartjs-export-theme-integration.md](./chartjs-export-theme-integration.md)
- [chartjs-plugin-datalabels-filament5.md](./chartjs-plugin-datalabels-filament5.md)
- [dual-label-chart-widget-implementation.md](./dual-label-chart-widget-implementation.md) — canonical (`simplechartwidget-quality-analysis.md`, byte-identical twin, deleted 2026-09-17)
- [simplechartwidget-problems-analysis.md](./simplechartwidget-problems-analysis.md)
- [jpgraph-guide.md](./jpgraph-guide.md)
- [jpgraph-integration-guide.md](./jpgraph-integration-guide.md)
- [jpgraph-chartjs-theme-integration.md](./jpgraph-chartjs-theme-integration.md)
- [jpgraph-class-reference-comprehensive-analysis.md](./jpgraph-class-reference-comprehensive-analysis.md)
- [limesurvey-charts-pdf-integration.md](./limesurvey-charts-pdf-integration.md)
- [wiki/concepts/jpgraph-guide.md](./wiki/concepts/jpgraph-guide.md) — wiki copy, different content than the top-level guide, see Storico

### Code quality, PHPStan and DRY/KISS

- [phpstan.md](./phpstan.md)
- [phpstan-compliance-status.md](./phpstan-compliance-status.md)
- [phpstan-level10-analysis.md](./phpstan-level10-analysis.md)
- [phpstan-level10-theme-compliance.md](./phpstan-level10-theme-compliance.md)
- [phpstan-merge-conflicts.md](./phpstan-merge-conflicts.md)
- [phpstan-dry-kiss-theme-guidelines.md](./phpstan-dry-kiss-theme-guidelines.md)
- [phpstan-dry-kiss-guidelines.md](./phpstan-dry-kiss-guidelines.md) — canonical (`phpstan-dry-kiss-theme-guidelines-historic.md`, byte-identical twin, deleted 2026-09-17)
- [php-quality-gates-rule.md](./php-quality-gates-rule.md)
- [no-phpstan-probe-policy.md](./no-phpstan-probe-policy.md)
- [dry-kiss-analysis.md](./dry-kiss-analysis.md)
- [dry-kiss-best-practices.md](./dry-kiss-best-practices.md) — canonical (`dry-kiss-best-practices-historic.md`, byte-identical twin, deleted 2026-09-17)
- [code-quality-improvement-report.md](./code-quality-improvement-report.md)
- [code-quality-improvements.md](./code-quality-improvements.md)
- [code-quality-report.md](./code-quality-report.md)
- [code-redundancy-audit.md](./code-redundancy-audit.md)
- [duplicate-methods.md](./duplicate-methods.md)
- [duplicate-methods-report.md](./duplicate-methods-report.md)
- [METODI-DUPLICATI-ANALISI.md](./METODI-DUPLICATI-ANALISI.md) / [metodi-duplicati-analisi.md](./metodi-duplicati-analisi.md) — two different documents despite similar names, not byte-identical (verified 2026-09-17; the real byte-identical twin was `_archive/metodi-duplicati-analisi.md`, deleted); a real content merge is still open, see Storico
- [quality-audit.md](./quality-audit.md)
- [quality-roadmap.md](./quality-roadmap.md)
- [wiki/concepts/code-redundancy-theme.md](./wiki/concepts/code-redundancy-theme.md)
- [wiki/concepts/duplicate-method-bodies.md](./wiki/concepts/duplicate-method-bodies.md)
- [wiki/concepts/method-name-homonyms.md](./wiki/concepts/method-name-homonyms.md)
- [wiki/concepts/php-method-name-homonyms-theme-impact.md](./wiki/concepts/php-method-name-homonyms-theme-impact.md)

### Product and planning

- [prd.md](./prd.md) / [PRD.md](./PRD.md) — two different documents despite the matching name, not byte-identical (verified 2026-09-17); see [product-requirements.md](./product-requirements.md) too
- [product-requirements.md](./product-requirements.md)
- [tech-spec.md](./tech-spec.md) — canonical (`TECH_SPEC.md`, byte-identical twin, deleted 2026-09-17)
- [product-launch-plan.md](./product-launch-plan.md)
- [launch-plan.md](./launch-plan.md) — short companion note
- [product-roadmap.md](./product-roadmap.md)
- [roadmap.md](./roadmap.md) — short roadmap note (different scope than product-roadmap.md)
- [product-strategy.md](./product-strategy.md)
- [strategy.md](./strategy.md) — short companion note
- [sprint-planning.md](./sprint-planning.md)
- [sprint-planning-meeting.md](./sprint-planning-meeting.md)
- [user-research.md](./user-research.md)
- [release-marketing-standard.md](./release-marketing-standard.md)
- [cosa-migliorare.md](./cosa-migliorare.md)
- [epics/zero-epics-and-stories.md](./epics/zero-epics-and-stories.md)
- [roadmap/accessibility-standards.md](./roadmap/accessibility-standards.md)
- [roadmap/advanced-features.md](./roadmap/advanced-features.md)
- [roadmap/component-library.md](./roadmap/component-library.md)
- [roadmap/performance-optimization.md](./roadmap/performance-optimization.md)
- [roadmap/responsive-system.md](./roadmap/responsive-system.md)
- [roadmap/theme-customization.md](./roadmap/theme-customization.md)
- [wiki/sources/theme-zero-product-and-roadmap-docs.md](./wiki/sources/theme-zero-product-and-roadmap-docs.md)

### Rules, boundaries and governance

- [database-governance.md](./database-governance.md)
- [composer-modules-not-themes.md](./composer-modules-not-themes.md)
- [one-migration-themes-boundary.md](./one-migration-themes-boundary.md)
- [laravel-13-composer-boundary.md](./laravel-13-composer-boundary.md)
- [laravel-13-upgrade.md](./laravel-13-upgrade.md)
- [ide-helper-phpdoc-boundary.md](./ide-helper-phpdoc-boundary.md)
- [no-ai-tool-scaffold-dirs.md](./no-ai-tool-scaffold-dirs.md)
- [no-git-lfs.md](./no-git-lfs.md)
- [spatie-permission-team-context.md](./spatie-permission-team-context.md)
- [spatie-permission-teams-boundary.md](./spatie-permission-teams-boundary.md)
- [document-root-public-html.md](./document-root-public-html.md)
- [public-path-public-html.md](./public-path-public-html.md)
- [packages-integration.md](./packages-integration.md)
- [wiki/concepts/criteri-gg-theme-boundary-audit.md](./wiki/concepts/criteri-gg-theme-boundary-audit.md)
- [wiki/concepts/gg-integ-params-no-asz-theme-boundary.md](./wiki/concepts/gg-integ-params-no-asz-theme-boundary.md)
- [wiki/concepts/module-directory-structure-boundary.md](./wiki/concepts/module-directory-structure-boundary.md)
- [wiki/concepts/platform-leaf-dependency-and-theme.md](./wiki/concepts/platform-leaf-dependency-and-theme.md)
- [wiki/concepts/filament-nested-resources.md](./wiki/concepts/filament-nested-resources.md)
- [wiki/concepts/filament-v5-schema-not-form.md](./wiki/concepts/filament-v5-schema-not-form.md)
- [wiki/concepts/organizzativa-money.md](./wiki/concepts/organizzativa-money.md)
- [wiki/sources/laravel13-theme-zero-composer-audit.md](./wiki/sources/laravel13-theme-zero-composer-audit.md)

### AI tooling, agents and automation

- [ai-development-guide.md](./ai-development-guide.md)
- [ai-handoff.md](./ai-handoff.md)
- [ai-methodologies.md](./ai-methodologies.md)
- [ai-tooling.md](./ai-tooling.md)
- [agent-confidence-discipline.md](./agent-confidence-discipline.md)
- [agent-confidence-protocol.md](./agent-confidence-protocol.md)
- [agent-edit-discipline.md](./agent-edit-discipline.md)
- [frameworks.md](./frameworks.md) / [FRAMEWORKS.md](./FRAMEWORKS.md) — caveman/graphify/bmad-method/headroom/ponytail integration notes; the two are not byte-identical despite the matching name (verified 2026-09-17; the real byte-identical twin was `_archive/FRAMEWORKS.md`, deleted)
- [graphify-map.md](./graphify-map.md)
- [graphify/README.md](./graphify/README.md) — note: `graphify/graphify-out/graphify-out/` is doubly-nested generated cache (AST/manifest JSON), not hand-written documentation; left untouched (see CHANGELOG and story for this pass)
- [prompts/push.md](./prompts/push.md)
- [outputs/README.md](./outputs/README.md)
- [raw/README.md](./raw/README.md)
- [skills/README.md](./skills/README.md)
- [headroom/README.md](./headroom/README.md)
- [wiki/concepts/context-overflow-prevention.md](./wiki/concepts/context-overflow-prevention.md)
- [wiki/concepts/ponytail-audit.md](./wiki/concepts/ponytail-audit.md)
- [wiki/concepts/ponytail-docs-lifecycle.md](./wiki/concepts/ponytail-docs-lifecycle.md)
- [wiki/concepts/second-brain-local-discipline.md](./wiki/concepts/second-brain-local-discipline.md)
- [wiki/concepts/theme-zero-operating-focus.md](./wiki/concepts/theme-zero-operating-focus.md)
- [wiki/sources/context-compression-and-retrieval.md](./wiki/sources/context-compression-and-retrieval.md)
- [wiki/bmad-method.md](./wiki/bmad-method.md)

### Git conflicts and multi-org sync history

- [conflict-resolution.md](./conflict-resolution.md)
- [conflict-resolution-summary.md](./conflict-resolution-summary.md)
- [CONFLICT-RESOLUTION-SUMMARY.md](./CONFLICT-RESOLUTION-SUMMARY.md) — historic canonical variant of the "conflict resolution summary" family (see Storico for the rest of that family, mostly deleted 2026-09-17)
- [git-conflict-resolution-2026-07-31.md](./git-conflict-resolution-2026-07-31.md)
- [git-collision-audit-bashscripts.md](./git-collision-audit-bashscripts.md)
- [git-collisions-bashscripts-audit.md](./git-collisions-bashscripts-audit.md) — near duplicate of git-collision-audit-bashscripts.md, see Storico
- [git-multi-org-sync-handoff.md](./git-multi-org-sync-handoff.md)
- [multi-org-sync-laraxot-provtv.md](./multi-org-sync-laraxot-provtv.md)
- [wiki/how-to/gitmodules-sync-session.md](./wiki/how-to/gitmodules-sync-session.md)
- [wiki/memories/github-remote-theme-resolve.md](./wiki/memories/github-remote-theme-resolve.md)
- [root-md-files/conflict-resolution-summary.md](./root-md-files/conflict-resolution-summary.md) — archived holding-pen copy; its sibling `-relocated.md` twin (byte-identical) was deleted 2026-09-17
- [archive/duplicates/conflict_resolution_summary.md](./archive/duplicates/conflict_resolution_summary.md) — a third, distinct variant of the same topic (not byte-identical to the others), kept as-is

### Environment, auth, translations, troubleshooting

- [env-development-configuration.md](./env-development-configuration.md)
- [authentication.md](./authentication.md)
- [auth-examples.md](./auth-examples.md)
- [translations.md](./translations.md)
- [troubleshooting.md](./troubleshooting.md)
- [examples.md](./examples.md)
- [performance-actions-reference.md](./performance-actions-reference.md)
- [performance-calcolo-quota-troubleshooting.md](./performance-calcolo-quota-troubleshooting.md)

### Screenshots and feature analyses

- [screenshots/f1-world-champion-2026-theme-analysis.md](./screenshots/f1-world-champion-2026-theme-analysis.md)
- [screenshots/f1-world-champion-theme-analysis.md](./screenshots/f1-world-champion-theme-analysis.md) — duplicate topic, see Storico
- Screenshots referenced by these analyses (`f1-detail-desktop-1920x1080.png`, `f1-detail-tablet-768x1024.png`, `f1-detail-mobile-375x812.png`, `f1-world-champion-2026-detail-page.png`) live alongside them in `screenshots/`

### Wiki (second brain)

The `wiki/` subtree is a self-contained second-brain catalog with its own index.
Entry point: [wiki/index.md](./wiki/index.md) (see also [wiki/overview.md](./wiki/overview.md)
and [wiki/log.md](./wiki/log.md)). Concepts, sources, how-to and memories referenced above are
linked individually by topic; the remaining wiki navigation files are:

- [wiki/commands/index.md](./wiki/commands/index.md)
- [wiki/concepts/index.md](./wiki/concepts/index.md)
- [wiki/memories/index.md](./wiki/memories/index.md)
- [wiki/rules/index.md](./wiki/rules/index.md)
- [wiki/skills/index.md](./wiki/skills/index.md)
- [wiki/schema.md](./wiki/schema.md)

Every `wiki/*/INDEX.md` uppercase twin (`commands`, `concepts`, `memories`, `rules`, `skills`,
plus `wiki/INDEX.md` and `wiki/SCHEMA.md`) is now a one-paragraph bridge stub pointing at its
lowercase `index.md`/`schema.md` sibling (converted 2026-09-17); several had a broken relative
link to the root Trigger Map (wrong `../` depth) that only the lowercase file had fixed.

## Storico / da consolidare

Questi file non vengono cancellati ne' rinominati salvo dove esplicitamente notato (duplicati
byte-identici verificati con md5sum, rimossi 2026-09-17): sono varianti duplicate, stub deprecati
o indici superati, raggruppati qui per evitare di inquinare la navigazione principale. I file
non cancellati restano raggiungibili ai path indicati.

### Indici superati (sostituiti da questo README.md)
- [index.md](./index.md) — era il precedente front door topic-organized; convertito in bridge stub 2026-09-17, il suo contenuto e' stato fuso qui
- [00-index.md](./00-index.md) — bridge stub verso index.md dal 2026-09-17, ora punta a questo README.md
- [00-INDEX.md](./00-INDEX.md) — bridge stub verso index.md dal 2026-09-17, ora punta a questo README.md
- [INDEX.md](./INDEX.md) — bridge stub verso index.md dal 2026-09-17, ora punta a questo README.md
- [index-consolidated.md](./index-consolidated.md) — bridge stub verso index.md dal 2026-09-17, ora punta a questo README.md
- [wiki/commands/INDEX.md](./wiki/commands/INDEX.md), [wiki/concepts/INDEX.md](./wiki/concepts/INDEX.md), [wiki/memories/INDEX.md](./wiki/memories/INDEX.md), [wiki/rules/INDEX.md](./wiki/rules/INDEX.md), [wiki/skills/INDEX.md](./wiki/skills/INDEX.md), [wiki/INDEX.md](./wiki/INDEX.md), [wiki/SCHEMA.md](./wiki/SCHEMA.md) — bridge stubs toward their lowercase siblings

### Duplicati byte-identici rimossi 2026-09-17 (verificati con md5sum, non solo per nome)
- `TECH_SPEC.md` → canonico [tech-spec.md](./tech-spec.md)
- `PANDOC_GUIDE.md` → canonico [pandoc-guide.md](./pandoc-guide.md)
- `README-en.md` (top-level, contenuto errato/non pertinente) → canonico [readme-en.md](./readme-en.md); una copia archiviata resta in `_archive/README-en.md`
- `dry-kiss-best-practices-historic.md` → canonico [dry-kiss-best-practices.md](./dry-kiss-best-practices.md)
- `phpstan-dry-kiss-theme-guidelines-historic.md` → canonico [phpstan-dry-kiss-guidelines.md](./phpstan-dry-kiss-guidelines.md)
- `analisi-completa-tema.md` → canonico [comprehensive-theme-analysis.md](./comprehensive-theme-analysis.md)
- `simplechartwidget-quality-analysis.md` → canonico [dual-label-chart-widget-implementation.md](./dual-label-chart-widget-implementation.md)
- `_archive/FRAMEWORKS.md` → canonico [FRAMEWORKS.md](./FRAMEWORKS.md)
- `_archive/metodi-duplicati-analisi.md` → canonico [metodi-duplicati-analisi.md](./metodi-duplicati-analisi.md)
- `_archive/conflict-resolution-summary.md`, `_archive/conflict_resolution_summary.md`, `_archive/root-md-files/CONFLICT_RESOLUTION_SUMMARY.md` → canonico [root-md-files/CONFLICT_RESOLUTION_SUMMARY.md](./root-md-files/CONFLICT_RESOLUTION_SUMMARY.md) (the now-empty `_archive/root-md-files/` directory was also removed)
- `root-md-files/conflict-resolution-summary-relocated.md` → canonico [root-md-files/conflict-resolution-summary.md](./root-md-files/conflict-resolution-summary.md)

### Claim precedenti corrette 2026-09-17 (NON erano duplicati byte-identici nonostante il nome)
Un md5sum reale su tutti i 293 file di questa cartella ha smentito alcune coppie che una
consolidazione precedente elencava come "duplicati uppercase/lowercase esatti": il contenuto
in questi casi differisce davvero, non solo per case del filename. Restano entrambe attive
in attesa di un vero merge di contenuto (fuori scope per questa sessione):
- [ARCHITECTURE.md](./ARCHITECTURE.md) vs [architecture.md](./architecture.md)
- [FRAMEWORKS.md](./FRAMEWORKS.md) vs [frameworks.md](./frameworks.md)
- [PRD.md](./PRD.md) vs [prd.md](./prd.md)
- [METODI-DUPLICATI-ANALISI.md](./METODI-DUPLICATI-ANALISI.md) vs [metodi-duplicati-analisi.md](./metodi-duplicati-analisi.md)
- [changelog.md](./changelog.md) vs [CHANGELOG.md](./CHANGELOG.md) — close but not byte-identical (3 lines of drift); resolved by making `changelog.md` a bridge stub to `CHANGELOG.md` rather than claiming false byte-equality
- [wiki/schema.md](./wiki/schema.md) vs [wiki/SCHEMA.md](./wiki/SCHEMA.md) — 2 lines of drift (a stray self-reference in the uppercase file); resolved the same way

### Stub deprecati (snake_case, auto-dichiarati "deprecated", rimandano alla versione kebab-case)
Contenuto reale e diverso da quello canonico (non semplici puntatori), gia' verificato e
lasciato intenzionalmente separato da una story precedente (2026-09-11): non ripetuto qui.
- [duplicate_methods.md](./duplicate_methods.md) → [duplicate-methods.md](./duplicate-methods.md)
- [duplicate_methods_report.md](./duplicate_methods_report.md) → [duplicate-methods-report.md](./duplicate-methods-report.md)
- [METODI_DUPLICATI_ANALISI.md](./METODI_DUPLICATI_ANALISI.md) → [METODI-DUPLICATI-ANALISI.md](./METODI-DUPLICATI-ANALISI.md)
- [conflict_resolution_summary.md](./conflict_resolution_summary.md) → [CONFLICT-RESOLUTION-SUMMARY.md](./CONFLICT-RESOLUTION-SUMMARY.md)
- [CONFLICT_RESOLUTION_SUMMARY.md](./CONFLICT_RESOLUTION_SUMMARY.md) → [CONFLICT-RESOLUTION-SUMMARY.md](./CONFLICT-RESOLUTION-SUMMARY.md)
- [product_launch_plan.md](./product_launch_plan.md) → [product-launch-plan.md](./product-launch-plan.md)
- [product_roadmap.md](./product_roadmap.md) → [product-roadmap.md](./product-roadmap.md)
- [product_strategy.md](./product_strategy.md) → [product-strategy.md](./product-strategy.md)
- [sprint_planning.md](./sprint_planning.md) → [sprint-planning.md](./sprint-planning.md)
- [user_research.md](./user_research.md) → [user-research.md](./user-research.md)

### Famiglia "conflict resolution summary" (storia residua)
- [CONFLICT-RESOLUTION-SUMMARY.md](./CONFLICT-RESOLUTION-SUMMARY.md) — variante canonica storica, vedi [conflict-resolution-summary.md](./conflict-resolution-summary.md) nella sezione Git
- [archive/duplicates/conflict_resolution_summary.md](./archive/duplicates/conflict_resolution_summary.md) — variante distinta, non byte-identica alle altre
- [root-md-files/conflict-resolution-summary.md](./root-md-files/conflict-resolution-summary.md) — unica copia rimasta dell'ex-quartetto byte-identico (le altre 3 cancellate 2026-09-17)

### Altri contenuti duplicati o storici (stesso argomento, versione alternativa/piu' vecchia)
- [filament-5-nested-resources.md](./filament-5-nested-resources.md) — superseded by [filament-5-nested-resources-complete-guide.md](./filament-5-nested-resources-complete-guide.md)
- [wiki/concepts/jpgraph-guide.md](./wiki/concepts/jpgraph-guide.md) — different content than the top-level [jpgraph-guide.md](./jpgraph-guide.md), not merged

## AI Workflows
- [AI Methodologies](./ai-methodologies.md)
