# Indice della Documentazione - Tema Zero

> **Nota 2026-07-24**: indice storico senza frontmatter, ridondante rispetto a
> [00-index.md](./00-index.md) (canonico, aggiornato 2026-03-28). Usare `00-index.md` come riferimento
> primario; questo file non è stato consolidato per evitare di perdere la prosa introduttiva italiana.

## Panoramica
Questo documento serve come indice centrale per il tema Zero, fornendo una guida per la personalizzazione e l'utilizzo del tema all'interno dell'applicazione Laravel. Il tema Zero è un tema basato su TailwindCSS con supporto per Vite e componenti Blade moderni.

## Principi Chiave
1. **Semplicità**: Il tema Zero è progettato per essere semplice e leggero
2. **Personalizzabilità**: Consente facile personalizzazione attraverso configurazioni e sovrascrittura di componenti
3. **Performance**: Ottimizzato per prestazioni elevate con asset minimizzati
4. **Responsive**: Completamente responsive per tutti i dispositivi

## Funzionalità Principali
- **TailwindCSS**: Framework CSS utility-first per uno styling moderno e coerente
- **Vite**: Bundler moderno per la compilazione degli assets
- **Componenti Blade**: Libreria di componenti riutilizzabili per l'interfaccia frontend
- **Layout Flessibili**: Sistema di layout adattivo per diverse tipologie di pagina
- **Traduzioni**: Supporto multilingua integrato
- **Temi Personalizzabili**: Sistema di estensione per creare varianti del tema
- **Integrazione Filament**: Compatibilità completa con i componenti Filament

## Collegamenti Correlati
- [AI Methodologies](./ai-methodologies.md)
- [Documentazione Generale Progetto](../../../docs/README.md) (docs: replace project-specific references with generic placeholders across documentation)
- [Collegamenti Documentazione](../../../docs/collegamenti-documentazione.md)
- [Standard di Documentazione](../../../docs/DOCUMENTATION_STANDARDS.md)
- [Modulo UI](../../Modules/UI/docs/README.md)
- [Modulo Xot](../../Modules/Xot/docs/README.md)

### Moduli Integrati
- [Performance Actions Reference](./performance-actions-reference.md) - Riferimento action calcolo performance

## Categorie Principali

### Architettura e Struttura
- [README](./README.md) - Panoramica generale del tema
- [Architettura](./architecture.md) - Architettura generale del tema
- [Struttura](./layouts.md) - Struttura delle directory e dei layout
- [Componenti](./components.md) - Componenti Blade disponibili

### Personalizzazione
- [Personalizzazione](./customization.md) - Guida alla personalizzazione del tema
- [Readonly Field Styling](./readonly-field-styling.md) - Pattern UI/UX per campi readonly/calcolati
- [Esempi](./examples.md) - Esempi pratici di personalizzazione
- [Autenticazione](./authentication.md) - Componenti di autenticazione
- [Esempi Autenticazione](./auth-examples.md) - Esempi di pagine di autenticazione

### Sviluppo e Configurazione
- [Configurazione](./env-development-configuration.md) - Configurazione del tema
- [Compilazione Assets](./binary-assets.md) - Guida alla compilazione degli assets
- [TailwindCSS](./packages-integration.md) - Configurazione e personalizzazione Tailwind
- [Vite](./packages-integration.md) - Configurazione e ottimizzazione Vite

### Traduzioni
- [Sistema Traduzioni](./translations.md) - Sistema di traduzioni del tema
- [File Lingua](./translations.md) - Gestione dei file di traduzione
- [Localizzazione](./translations.md) - Localizzazione del tema

### Testing e Qualità
- [Testing](./php-quality-gates-rule.md) - Strategie e approcci per il testing del tema
- [ide-helper-phpdoc-boundary](./ide-helper-phpdoc-boundary.md) - Confine PHPDoc moduli ↔ tema
- [Performance](./performance-actions-reference.md) - Ottimizzazioni e analisi performance
- [Accessibilità](./roadmap/accessibility-standards.md) - Linee guida per l'accessibilità

## Linee Guida per l'Implementazione

### 1. Struttura del Tema
Il tema Zero segue una struttura standard con directory per componenti, risorse e configurazioni:

```
Zero/
├── app/
│   ├── View/
│   │   └── Components/
├── lang/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── components/
│       ├── layouts/
│       └── pages/
└── docs/
```

### 2. Personalizzazione del Tema
Per personalizzare il tema Zero:

1. **Sovrascrivere i componenti**:
   ```bash
   # Copiare un componente esistente
   cp resources/views/components/button.blade.php resources/views/components/custom-button.blade.php
   ```

2. **Modificare i layout**:
   ```bash
   # Creare un layout personalizzato
   cp resources/views/layouts/app.blade.php resources/views/layouts/custom.blade.php
   ```

3. **Aggiungere stili personalizzati**:
   ```css
   /* resources/css/custom.css */
   .custom-class {
       @apply bg-blue-500 text-white rounded-lg;
   }
   ```

### 3. Compilazione Assets
```bash
# Sviluppo
npm run dev

# Produzione
npm run build

# Watch mode
npm run watch
```

### 4. Configurazione Tailwind
```javascript
// tailwind.config.js
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#3B82F6',
                secondary: '#10B981',
            },
        },
    },
    plugins: [],
}
```

## Problemi Comuni e Soluzioni
- **Assets non caricati**: Verificare che `npm run build` sia stato eseguito
- **Stili non applicati**: Controllare la configurazione di TailwindCSS
- **Componenti mancanti**: Verificare la registrazione corretta dei componenti Blade
- **Traduzioni mancanti**: Controllare la presenza dei file di traduzione

## Documentazione e Aggiornamenti
- Documentare qualsiasi personalizzazione o modifica al tema nella cartella di documentazione
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al tema Zero

## Collegamenti alla Documentazione Correlata
- [Panoramica Architettura](./architecture.md)
- [Personalizzazione](./customization.md)
- [Componenti](./components.md)
- [Esempi](./examples.md)
- [Troubleshooting](./troubleshooting.md)

## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al tema, consultare la documentazione pertinente e aggiornare i documenti correlati.

## Risoluzione Conflitti e Standard
- **Gennaio 2025**: Risoluzione sistematica di tutti i conflitti Git nei file di documentazione
- Il file `lang/it/zero_theme.php` è stato risolto manualmente mantenendo PSR-12, strict_types, array short syntax e solo chiavi effettive, come richiesto dagli standard PHPStan livello 10
- **Filosofia di risoluzione**: Approccio olistico con analisi manuale approfondita, mantenimento integrità architetturale, documentazione bidirezionale aggiornata
- Vedi anche: [../../../docs/README.md](../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".

*Ultimo aggiornamento: Gennaio 2025*
- **Aggiunto**: Sistema di documentazione automatica moduli
- **Integrato**: Refresh intelligente form reattivi
- **Migliorato**: Sistema di tracking e audit trail

---

<!-- Merged from INDEX.md, which collided with this file on case-insensitive filesystems. -->

---
title: "Documentation Index — Theme Zero"
type: index
tags: [documentation, index, theme]
created: 2026-07-14
updated: 2026-07-14
qmd: "theme zero documentation index"
related:
  - "./README.md"
---

# Documentation Index — Theme Zero

> **Note 2026-07-24**: this index is redundant with [00-index.md](./00-index.md) (canonical, updated
> 2026-03-28, aligned with current stack: Filament 5, Livewire 4, Volt, Tailwind v4). Kept only for the
> `archive/duplicates` links below which are not referenced elsewhere.

## Archive
- [archive/duplicates/conflict-resolution-summary](./archive/duplicates/conflict_resolution_summary.md)

## Legacy
- [legacy/duplicates/conflict-resolution-summary](./archive/duplicates/conflict_resolution_summary.md)

## Outputs
- [outputs/README](./outputs/README.md)

## Raw
- [raw/README](./raw/README.md)

## Roadmap
- [roadmap/accessibility-standards](./roadmap/accessibility-standards.md)
- [roadmap/advanced-features](./roadmap/advanced-features.md)
- [roadmap/component-library](./roadmap/component-library.md)
- [roadmap/performance-optimization](./roadmap/performance-optimization.md)
- [roadmap/responsive-system](./roadmap/responsive-system.md)
- [roadmap/theme-customization](./roadmap/theme-customization.md)

## Root
- [CHANGELOG](./changelog.md)
- [CONFLICT-RESOLUTION-SUMMARY](./CONFLICT-RESOLUTION-SUMMARY.md)
- [CONFLICT-RESOLUTION-SUMMARY](./CONFLICT_RESOLUTION_SUMMARY.md)
- [METODI-DUPLICATI-ANALISI](./METODI-DUPLICATI-ANALISI.md)
- [METODI-DUPLICATI-ANALISI](./METODI_DUPLICATI_ANALISI.md)
- [accessor-delegation-pattern](./accessor-delegation-pattern.md)
- [agent-confidence-discipline](./agent-confidence-discipline.md)
- [agent-confidence-protocol](./agent-confidence-protocol.md)
- [agent-edit-discipline](./agent-edit-discipline.md)
- [ai-development-guide](./ai-development-guide.md)
- [ai-handoff](./ai-handoff.md)
- [ai-methodologies](./ai-methodologies.md)
- [analisi-completa-tema](./analisi-completa-tema.md)
- [architecture-rules](./architecture-rules.md)
- [architecture](./architecture.md)
- [auth-examples](./auth-examples.md)
- [authentication](./authentication.md)
- [changelog](./changelog.md)
- [chartjs-datalabels-background-styling](./chartjs-datalabels-background-styling.md)
- [chartjs-datalabels-filament5-implementation](./chartjs-datalabels-filament5-implementation.md)
- [chartjs-datalabels-multiple-labels-complete-guide](./chartjs-datalabels-multiple-labels-complete-guide.md)
- [chartjs-datalabels-theme-integration](./chartjs-datalabels-theme-integration.md)
- [chartjs-export-theme-integration](./chartjs-export-theme-integration.md)
- [chartjs-plugin-datalabels-filament5](./chartjs-plugin-datalabels-filament5.md)
- [code-quality-improvements](./code-quality-improvements.md)
- [code-redundancy-audit](./code-redundancy-audit.md)
- [components](./components.md)
- [comprehensive-theme-analysis](./comprehensive-theme-analysis.md)
- [conflict-resolution-summary](./conflict-resolution-summary.md)
- [conflict-resolution](./conflict-resolution.md)
- [customization](./customization.md)
- [database-governance](./database-governance.md)
- [doc-first-workflow](./doc-first-workflow.md)
- [docs-archive-policy](./docs-archive-policy.md)
- [docs-confidence-audit](./docs-confidence-audit.md)
- [docs-deduplication](./docs-deduplication.md)
- [dry-kiss-analysis](./dry-kiss-analysis.md)
- [dry-kiss-best-practices-historic](./dry-kiss-best-practices-historic.md)
- [dry-kiss-best-practices](./dry-kiss-best-practices.md)
- [dual-label-chart-widget-implementation](./dual-label-chart-widget-implementation.md)
- [duplicate-methods-report](./duplicate-methods-report.md)
- [duplicate-methods](./duplicate-methods.md)
- [duplicate-methods](./duplicate_methods.md)
- [duplicate-methods-report](./duplicate_methods_report.md)
- [env-development-configuration](./env-development-configuration.md)
- [examples](./examples.md)
- [filament-5-nested-resources-complete-guide](./filament-5-nested-resources-complete-guide.md)
- [filament-chart-integration](./filament-chart-integration.md)
- [filament-infolist-pattern](./filament-infolist-pattern.md)
- [filament-resource-schemas-tables](./filament-resource-schemas-tables.md)
- [filament-version](./filament-version.md)
- [index-consolidated](./index-consolidated.md)
- [jpgraph-chartjs-theme-integration](./jpgraph-chartjs-theme-integration.md)
- [jpgraph-class-reference-comprehensive-analysis](./jpgraph-class-reference-comprehensive-analysis.md)
- [jpgraph-integration-guide](./jpgraph-integration-guide.md)
- [laravel-13-composer-boundary](./laravel-13-composer-boundary.md)
- [laravel-13-upgrade](./laravel-13-upgrade.md)
- [launch-plan](./launch-plan.md)
- [layouts](./layouts.md)
- [limesurvey-charts-pdf-integration](./limesurvey-charts-pdf-integration.md)
- [mail-layouts](./mail-layouts.md)
- [manage-related-records](./manage-related-records.md)
- [model-docs-governance](./model-docs-governance.md)
- [model-usage-in-themes](./model-usage-in-themes.md)
- [modern-theme-architecture](./modern-theme-architecture.md)
- [naming-conventions](./naming-conventions.md)
- [no-phpstan-probe-policy](./no-phpstan-probe-policy.md)
- [packages-integration](./packages-integration.md)
- [performance-actions-reference](./performance-actions-reference.md)
- [performance-calcolo-quota-troubleshooting](./performance-calcolo-quota-troubleshooting.md)
- [philosophy](./philosophy.md)
- [php-quality-gates-rule](./php-quality-gates-rule.md)
- [phpstan-compliance-status](./phpstan-compliance-status.md)
- [phpstan-dry-kiss-guidelines](./phpstan-dry-kiss-guidelines.md)
- [phpstan-dry-kiss-theme-guidelines-historic](./phpstan-dry-kiss-theme-guidelines-historic.md)
- [phpstan-dry-kiss-theme-guidelines](./phpstan-dry-kiss-theme-guidelines.md)
- [phpstan-level10-analysis](./phpstan-level10-analysis.md)
- [phpstan-level10-theme-compliance](./phpstan-level10-theme-compliance.md)
- [phpstan-merge-conflicts](./phpstan-merge-conflicts.md)
- [phpstan](./phpstan.md)
- [prd](./prd.md)
- [product-launch-plan](./product-launch-plan.md)
- [product-requirements](./product-requirements.md)
- [product-roadmap](./product-roadmap.md)
- [product-strategy](./product-strategy.md)
- [product-launch-plan](./product_launch_plan.md)
- [product-roadmap](./product_roadmap.md)
- [product-strategy](./product_strategy.md)
- [readonly-field-styling](./readonly-field-styling.md)
- [release-marketing-standard](./release-marketing-standard.md)
- [roadmap](./roadmap.md)
- [schema](./schema.md)
- [schemaless-attributes](./schemaless-attributes.md)
- [second-brain](./second-brain.md)
- [simplechartwidget-problems-analysis](./simplechartwidget-problems-analysis.md)
- [simplechartwidget-quality-analysis](./simplechartwidget-quality-analysis.md)
- [spatie-permission-team-context](./spatie-permission-team-context.md)
- [spatie-permission-teams-boundary](./spatie-permission-teams-boundary.md)
- [sprint-planning-meeting](./sprint-planning-meeting.md)
- [sprint-planning](./sprint-planning.md)
- [sprint-planning](./sprint_planning.md)
- [strategy](./strategy.md)
- [theme-architecture-best-practices](./theme-architecture-best-practices.md)
- [theme-documentation-standard](./theme-documentation-standard.md)
- [theme-documentation](./theme-documentation.md)
- [themes-system-complete-guide](./themes-system-complete-guide.md)
- [troubleshooting](./troubleshooting.md)
- [user-research](./user-research.md)
- [user-research](./user_research.md)

## Root-Md-Files
- [root-md-files/conflict-resolution-summary-relocated](./root-md-files/conflict-resolution-summary-relocated.md)
- [root-md-files/conflict-resolution-summary](./root-md-files/conflict-resolution-summary.md)

## Screenshots
- [screenshots/f1-world-champion-2026-theme-analysis](./screenshots/f1-world-champion-2026-theme-analysis.md)
- [screenshots/f1-world-champion-theme-analysis](./screenshots/f1-world-champion-theme-analysis.md)

## Skills
- [skills/README](./skills/README.md)

## Wiki
- [wiki/SCHEMA](./wiki/schema.md)
- [wiki/bmad-method](./wiki/bmad-method.md)
- [wiki/commands/INDEX](./wiki/commands/index.md)
- [wiki/concepts/INDEX](./wiki/concepts/index.md)
- [wiki/concepts/code-redundancy-theme](./wiki/concepts/code-redundancy-theme.md)
- [wiki/concepts/context-overflow-prevention](./wiki/concepts/context-overflow-prevention.md)
- [wiki/concepts/method-name-homonyms](./wiki/concepts/method-name-homonyms.md)
- [wiki/concepts/module-directory-structure-boundary](./wiki/concepts/module-directory-structure-boundary.md)
- [wiki/concepts/organizzativa-money](./wiki/concepts/organizzativa-money.md)
- [wiki/concepts/php-method-name-homonyms-theme-impact](./wiki/concepts/php-method-name-homonyms-theme-impact.md)
- [wiki/concepts/ponytail-audit](./wiki/concepts/ponytail-audit.md)
- [wiki/concepts/ponytail-docs-lifecycle](./wiki/concepts/ponytail-docs-lifecycle.md)
- [wiki/concepts/second-brain-local-discipline](./wiki/concepts/second-brain-local-discipline.md)
- [wiki/concepts/theme-zero-operating-focus](./wiki/concepts/theme-zero-operating-focus.md)
- [wiki/index](./wiki/index.md)
- [wiki/log](./wiki/log.md)
- [wiki/memories/INDEX](./wiki/memories/index.md)
- [wiki/overview](./wiki/overview.md)
- [wiki/rules/INDEX](./wiki/rules/index.md)
- [wiki/skills/INDEX](./wiki/skills/index.md)
- [wiki/sources/context-compression-and-retrieval](./wiki/sources/context-compression-and-retrieval.md)
- [wiki/sources/laravel13-theme-zero-composer-audit](./wiki/sources/laravel13-theme-zero-composer-audit.md)
- [wiki/sources/theme-zero-product-and-roadmap-docs](./wiki/sources/theme-zero-product-and-roadmap-docs.md)
---
title: "Zero Theme — Documentation Index"
type: index
status: superseded
canonical: ./00-index.md
---

# Indice (puntatore — vietato duplicare)

SSoT: [00-index.md](./00-index.md).

Questo file era un indice storico duplicato (648 righe, marker di conflitto mai
risolti tra due varianti in italiano). La nota nella versione HEAD lo dichiarava
già ridondante rispetto a `00-index.md` (canonico). Consolidato qui come
puntatore per non rompere i link esistenti.

## Inventario completo dei documenti

Elenco generato dal filesystem (243 file Markdown). I percorsi sono relativi a `docs/` e restano tutti tracciati; per lo scopo e i criteri di archiviazione vedere [docs-archive-policy.md](./docs-archive-policy.md).

### Root

- [00-INDEX.md](./00-INDEX.md)
- [00-index.md](./00-index.md)
- [ARCHITECTURE.md](./ARCHITECTURE.md)
- [CHANGELOG.md](./CHANGELOG.md)
- [CONFLICT-RESOLUTION-SUMMARY.md](./CONFLICT-RESOLUTION-SUMMARY.md)
- [CONFLICT_RESOLUTION_SUMMARY.md](./CONFLICT_RESOLUTION_SUMMARY.md)
- [FRAMEWORKS.md](./FRAMEWORKS.md)
- [INDEX.md](./INDEX.md)
- [METODI-DUPLICATI-ANALISI.md](./METODI-DUPLICATI-ANALISI.md)
- [METODI_DUPLICATI_ANALISI.md](./METODI_DUPLICATI_ANALISI.md)
- [PANDOC_GUIDE.md](./PANDOC_GUIDE.md)
- [PRD.md](./PRD.md)
- [README-en.md](./README-en.md)
- [README.md](./README.md)
- [TECH_SPEC.md](./TECH_SPEC.md)
- [accessor-delegation-pattern.md](./accessor-delegation-pattern.md)
- [agent-confidence-discipline.md](./agent-confidence-discipline.md)
- [agent-confidence-protocol.md](./agent-confidence-protocol.md)
- [agent-edit-discipline.md](./agent-edit-discipline.md)
- [ai-development-guide.md](./ai-development-guide.md)
- [ai-handoff.md](./ai-handoff.md)
- [ai-methodologies.md](./ai-methodologies.md)
- [ai-tooling.md](./ai-tooling.md)
- [analisi-completa-tema.md](./analisi-completa-tema.md)
- [architecture-rules.md](./architecture-rules.md)
- [architecture.md](./architecture.md)
- [auth-examples.md](./auth-examples.md)
- [auth-login-ui-ux.md](./auth-login-ui-ux.md)
- [authentication.md](./authentication.md)
- [binary-assets.md](./binary-assets.md)
- [changelog.md](./changelog.md)
- [chartjs-datalabels-background-styling.md](./chartjs-datalabels-background-styling.md)
- [chartjs-datalabels-filament5-implementation.md](./chartjs-datalabels-filament5-implementation.md)
- [chartjs-datalabels-multiple-labels-complete-guide.md](./chartjs-datalabels-multiple-labels-complete-guide.md)
- [chartjs-datalabels-theme-integration.md](./chartjs-datalabels-theme-integration.md)
- [chartjs-export-theme-integration.md](./chartjs-export-theme-integration.md)
- [chartjs-plugin-datalabels-filament5.md](./chartjs-plugin-datalabels-filament5.md)
- [code-quality-improvement-report.md](./code-quality-improvement-report.md)
- [code-quality-improvements.md](./code-quality-improvements.md)
- [code-quality-report.md](./code-quality-report.md)
- [code-redundancy-audit.md](./code-redundancy-audit.md)
- [components.md](./components.md)
- [composer-modules-not-themes.md](./composer-modules-not-themes.md)
- [comprehensive-theme-analysis.md](./comprehensive-theme-analysis.md)
- [conflict-resolution-summary.md](./conflict-resolution-summary.md)
- [conflict-resolution.md](./conflict-resolution.md)
- [conflict_resolution_summary.md](./conflict_resolution_summary.md)
- [cosa-migliorare.md](./cosa-migliorare.md)
- [customization.md](./customization.md)
- [database-governance.md](./database-governance.md)
- [doc-first-workflow.md](./doc-first-workflow.md)
- [docs-archive-policy.md](./docs-archive-policy.md)
- [docs-confidence-audit.md](./docs-confidence-audit.md)
- [docs-deduplication.md](./docs-deduplication.md)
- [document-root-public-html.md](./document-root-public-html.md)
- [dry-kiss-analysis.md](./dry-kiss-analysis.md)
- [dry-kiss-best-practices-historic.md](./dry-kiss-best-practices-historic.md)
- [dry-kiss-best-practices.md](./dry-kiss-best-practices.md)
- [dual-label-chart-widget-implementation.md](./dual-label-chart-widget-implementation.md)
- [duplicate-methods-report.md](./duplicate-methods-report.md)
- [duplicate-methods.md](./duplicate-methods.md)
- [duplicate_methods.md](./duplicate_methods.md)
- [duplicate_methods_report.md](./duplicate_methods_report.md)
- [env-development-configuration.md](./env-development-configuration.md)
- [examples.md](./examples.md)
- [filament-5-nested-resources-complete-guide.md](./filament-5-nested-resources-complete-guide.md)
- [filament-5-nested-resources.md](./filament-5-nested-resources.md)
- [filament-admin-sub-navigation.md](./filament-admin-sub-navigation.md)
- [filament-chart-integration.md](./filament-chart-integration.md)
- [filament-infolist-pattern.md](./filament-infolist-pattern.md)
- [filament-resource-schemas-tables.md](./filament-resource-schemas-tables.md)
- [filament-table-architecture.md](./filament-table-architecture.md)
- [filament-version.md](./filament-version.md)
- [folio-pages-structure.md](./folio-pages-structure.md)
- [frameworks.md](./frameworks.md)
- [gestionale-panels-vs-themes.md](./gestionale-panels-vs-themes.md)
- [git-collision-audit-bashscripts.md](./git-collision-audit-bashscripts.md)
- [git-collisions-bashscripts-audit.md](./git-collisions-bashscripts-audit.md)
- [git-conflict-resolution-2026-07-31.md](./git-conflict-resolution-2026-07-31.md)
- [git-multi-org-sync-handoff.md](./git-multi-org-sync-handoff.md)
- [graphify-map.md](./graphify-map.md)
- [ide-helper-phpdoc-boundary.md](./ide-helper-phpdoc-boundary.md)
- [index-consolidated.md](./index-consolidated.md)
- [index.md](./index.md)
- [jpgraph-chartjs-theme-integration.md](./jpgraph-chartjs-theme-integration.md)
- [jpgraph-class-reference-comprehensive-analysis.md](./jpgraph-class-reference-comprehensive-analysis.md)
- [jpgraph-guide.md](./jpgraph-guide.md)
- [jpgraph-integration-guide.md](./jpgraph-integration-guide.md)
- [laravel-13-composer-boundary.md](./laravel-13-composer-boundary.md)
- [laravel-13-upgrade.md](./laravel-13-upgrade.md)
- [launch-plan.md](./launch-plan.md)
- [layouts.md](./layouts.md)
- [limesurvey-charts-pdf-integration.md](./limesurvey-charts-pdf-integration.md)
- [mail-layouts.md](./mail-layouts.md)
- [manage-related-records.md](./manage-related-records.md)
- [metodi-duplicati-analisi.md](./metodi-duplicati-analisi.md)
- [model-docs-governance.md](./model-docs-governance.md)
- [model-usage-in-themes.md](./model-usage-in-themes.md)
- [modern-theme-architecture.md](./modern-theme-architecture.md)
- [multi-org-sync-laraxot-provtv.md](./multi-org-sync-laraxot-provtv.md)
- [naming-conventions.md](./naming-conventions.md)
- [navigation-integration.md](./navigation-integration.md)
- [navigation-translations.md](./navigation-translations.md)
- [no-ai-tool-scaffold-dirs.md](./no-ai-tool-scaffold-dirs.md)
- [no-git-lfs.md](./no-git-lfs.md)
- [no-phpstan-probe-policy.md](./no-phpstan-probe-policy.md)
- [one-migration-themes-boundary.md](./one-migration-themes-boundary.md)
- [packages-integration.md](./packages-integration.md)
- [pandoc-guide.md](./pandoc-guide.md)
- [performance-actions-reference.md](./performance-actions-reference.md)
- [performance-calcolo-quota-troubleshooting.md](./performance-calcolo-quota-troubleshooting.md)
- [philosophy.md](./philosophy.md)
- [php-quality-gates-rule.md](./php-quality-gates-rule.md)
- [phpstan-compliance-status.md](./phpstan-compliance-status.md)
- [phpstan-dry-kiss-guidelines.md](./phpstan-dry-kiss-guidelines.md)
- [phpstan-dry-kiss-theme-guidelines-historic.md](./phpstan-dry-kiss-theme-guidelines-historic.md)
- [phpstan-dry-kiss-theme-guidelines.md](./phpstan-dry-kiss-theme-guidelines.md)
- [phpstan-level10-analysis.md](./phpstan-level10-analysis.md)
- [phpstan-level10-theme-compliance.md](./phpstan-level10-theme-compliance.md)
- [phpstan-merge-conflicts.md](./phpstan-merge-conflicts.md)
- [phpstan.md](./phpstan.md)
- [prd.md](./prd.md)
- [product-launch-plan.md](./product-launch-plan.md)
- [product-requirements.md](./product-requirements.md)
- [product-roadmap.md](./product-roadmap.md)
- [product-strategy.md](./product-strategy.md)
- [product_launch_plan.md](./product_launch_plan.md)
- [product_roadmap.md](./product_roadmap.md)
- [product_strategy.md](./product_strategy.md)
- [public-path-public-html.md](./public-path-public-html.md)
- [purpose.md](./purpose.md)
- [quality-audit.md](./quality-audit.md)
- [quality-roadmap.md](./quality-roadmap.md)
- [readme-en.md](./readme-en.md)
- [readonly-field-styling.md](./readonly-field-styling.md)
- [release-marketing-standard.md](./release-marketing-standard.md)
- [roadmap.md](./roadmap.md)
- [schema.md](./schema.md)
- [schemaless-attributes.md](./schemaless-attributes.md)
- [scopo.md](./scopo.md)
- [second-brain.md](./second-brain.md)
- [simplechartwidget-problems-analysis.md](./simplechartwidget-problems-analysis.md)
- [simplechartwidget-quality-analysis.md](./simplechartwidget-quality-analysis.md)
- [spatie-permission-team-context.md](./spatie-permission-team-context.md)
- [spatie-permission-teams-boundary.md](./spatie-permission-teams-boundary.md)
- [sprint-planning-meeting.md](./sprint-planning-meeting.md)
- [sprint-planning.md](./sprint-planning.md)
- [sprint_planning.md](./sprint_planning.md)
- [strategy.md](./strategy.md)
- [tech-spec.md](./tech-spec.md)
- [theme-architecture-best-practices.md](./theme-architecture-best-practices.md)
- [theme-documentation-standard.md](./theme-documentation-standard.md)
- [theme-documentation.md](./theme-documentation.md)
- [themes-system-complete-guide.md](./themes-system-complete-guide.md)
- [translations.md](./translations.md)
- [troubleshooting.md](./troubleshooting.md)
- [user-research.md](./user-research.md)
- [user_research.md](./user_research.md)

### _archive

- [00-INDEX.md](./_archive/00-INDEX.md)
- [CHANGELOG.md](./_archive/CHANGELOG.md)
- [FRAMEWORKS.md](./_archive/FRAMEWORKS.md)
- [METODI_DUPLICATI_ANALISI.md](./_archive/METODI_DUPLICATI_ANALISI.md)
- [README-en.md](./_archive/README-en.md)
- [architecture.md](./_archive/architecture.md)
- [conflict-resolution-summary.md](./_archive/conflict-resolution-summary.md)
- [conflict_resolution_summary.md](./_archive/conflict_resolution_summary.md)
- [duplicate_methods_report.md](./_archive/duplicate_methods_report.md)
- [index.md](./_archive/index.md)
- [metodi-duplicati-analisi.md](./_archive/metodi-duplicati-analisi.md)
- [prd.md](./_archive/prd.md)

### _archive/root-md-files

- [CONFLICT_RESOLUTION_SUMMARY.md](./_archive/root-md-files/CONFLICT_RESOLUTION_SUMMARY.md)

### _archive/wiki

- [schema.md](./_archive/wiki/schema.md)

### _archive/wiki/commands

- [INDEX.md](./_archive/wiki/commands/INDEX.md)

### _archive/wiki/concepts

- [INDEX.md](./_archive/wiki/concepts/INDEX.md)

### _archive/wiki/memories

- [INDEX.md](./_archive/wiki/memories/INDEX.md)

### _archive/wiki/rules

- [INDEX.md](./_archive/wiki/rules/INDEX.md)

### _archive/wiki/skills

- [INDEX.md](./_archive/wiki/skills/INDEX.md)

### archive/duplicates

- [conflict_resolution_summary.md](./archive/duplicates/conflict_resolution_summary.md)

### bmad/stories

- [quality-gates-phpstan-swarm-2026-09-23.story.md](./bmad/stories/quality-gates-phpstan-swarm-2026-09-23.story.md)
- [theme-docs-dedup-frontmatter.story.md](./bmad/stories/theme-docs-dedup-frontmatter.story.md)

### concepts

- [xotbase-never-extend-filament.md](./concepts/xotbase-never-extend-filament.md)

### epics

- [zero-epics-and-stories.md](./epics/zero-epics-and-stories.md)

### graphify

- [README.md](./graphify/README.md)

### headroom

- [README.md](./headroom/README.md)

### mysql-remote

- [README.md](./mysql-remote/README.md)

### outputs

- [README.md](./outputs/README.md)

### prompts

- [push.md](./prompts/push.md)

### raw

- [README.md](./raw/README.md)

### roadmap

- [accessibility-standards.md](./roadmap/accessibility-standards.md)
- [advanced-features.md](./roadmap/advanced-features.md)
- [component-library.md](./roadmap/component-library.md)
- [performance-optimization.md](./roadmap/performance-optimization.md)
- [responsive-system.md](./roadmap/responsive-system.md)
- [theme-customization.md](./roadmap/theme-customization.md)

### root-md-files

- [CONFLICT_RESOLUTION_SUMMARY.md](./root-md-files/CONFLICT_RESOLUTION_SUMMARY.md)
- [conflict-resolution-summary-relocated.md](./root-md-files/conflict-resolution-summary-relocated.md)
- [conflict-resolution-summary.md](./root-md-files/conflict-resolution-summary.md)

### screenshots

- [f1-world-champion-2026-theme-analysis.md](./screenshots/f1-world-champion-2026-theme-analysis.md)
- [f1-world-champion-theme-analysis.md](./screenshots/f1-world-champion-theme-analysis.md)

### skills

- [README.md](./skills/README.md)

### stories

- [auth-login-ui-ux-redesign-2026-09-17.story.md](./stories/auth-login-ui-ux-redesign-2026-09-17.story.md)
- [docs-index-audit.story.md](./stories/docs-index-audit.story.md)
- [docs-theme-zero-audit-2026-09-11.story.md](./stories/docs-theme-zero-audit-2026-09-11.story.md)
- [zero-conflict-markers-cleanup-2026-09-22.story.md](./stories/zero-conflict-markers-cleanup-2026-09-22.story.md)

### wiki

- [INDEX.md](./wiki/INDEX.md)
- [SCHEMA.md](./wiki/SCHEMA.md)
- [bmad-method.md](./wiki/bmad-method.md)
- [index.md](./wiki/index.md)
- [log.md](./wiki/log.md)
- [overview.md](./wiki/overview.md)
- [schema.md](./wiki/schema.md)

### wiki/commands

- [INDEX.md](./wiki/commands/INDEX.md)
- [index.md](./wiki/commands/index.md)

### wiki/concepts

- [INDEX.md](./wiki/concepts/INDEX.md)
- [code-redundancy-theme.md](./wiki/concepts/code-redundancy-theme.md)
- [context-overflow-prevention.md](./wiki/concepts/context-overflow-prevention.md)
- [criteri-gg-theme-boundary-audit.md](./wiki/concepts/criteri-gg-theme-boundary-audit.md)
- [duplicate-method-bodies.md](./wiki/concepts/duplicate-method-bodies.md)
- [filament-nested-resources.md](./wiki/concepts/filament-nested-resources.md)
- [filament-v5-schema-not-form.md](./wiki/concepts/filament-v5-schema-not-form.md)
- [gg-integ-params-no-asz-theme-boundary.md](./wiki/concepts/gg-integ-params-no-asz-theme-boundary.md)
- [index.md](./wiki/concepts/index.md)
- [jpgraph-guide.md](./wiki/concepts/jpgraph-guide.md)
- [method-name-homonyms.md](./wiki/concepts/method-name-homonyms.md)
- [module-directory-structure-boundary.md](./wiki/concepts/module-directory-structure-boundary.md)
- [organizzativa-money.md](./wiki/concepts/organizzativa-money.md)
- [php-method-name-homonyms-theme-impact.md](./wiki/concepts/php-method-name-homonyms-theme-impact.md)
- [platform-leaf-dependency-and-theme.md](./wiki/concepts/platform-leaf-dependency-and-theme.md)
- [ponytail-audit.md](./wiki/concepts/ponytail-audit.md)
- [ponytail-docs-lifecycle.md](./wiki/concepts/ponytail-docs-lifecycle.md)
- [second-brain-local-discipline.md](./wiki/concepts/second-brain-local-discipline.md)
- [theme-zero-operating-focus.md](./wiki/concepts/theme-zero-operating-focus.md)

### wiki/how-to

- [gitmodules-sync-session.md](./wiki/how-to/gitmodules-sync-session.md)

### wiki/memories

- [INDEX.md](./wiki/memories/INDEX.md)
- [github-remote-theme-resolve.md](./wiki/memories/github-remote-theme-resolve.md)
- [index.md](./wiki/memories/index.md)

### wiki/rules

- [INDEX.md](./wiki/rules/INDEX.md)
- [index.md](./wiki/rules/index.md)

### wiki/skills

- [INDEX.md](./wiki/skills/INDEX.md)
- [index.md](./wiki/skills/index.md)

### wiki/sources

- [context-compression-and-retrieval.md](./wiki/sources/context-compression-and-retrieval.md)
- [laravel13-theme-zero-composer-audit.md](./wiki/sources/laravel13-theme-zero-composer-audit.md)
- [theme-zero-product-and-roadmap-docs.md](./wiki/sources/theme-zero-product-and-roadmap-docs.md)
