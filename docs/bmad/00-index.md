---
title: "Zero Theme - Documentation Index"
type: concept
tags: ['filament', 'laravel', 'charts', 'testing']
created: 2026-07-14
<<<<<<< HEAD
updated: 2026-07-14
qmd: "zero theme - documentation index"
related:
  - "./00-index.md"
id: zero-docs-bmad-00-index
slug: 00-index
description: "Theme documentation conforming to Laraxot standards"
=======
updated: 2026-10-20
qmd: "zero theme documentation index bmad scopo purpose phpstan modules gate stack reale"
related:
  - "./scopo.md"
  - "./purpose.md"
  - "../README.md"
id: zero-docs-bmad-00-index
slug: 00-index
description: "Indice BMAD del tema Zero. Ingresso docs: ../README.md. Nome 00-index.md minuscolo (niente gemello 00-INDEX.md)."
>>>>>>> laraxot/dev
document_type: concept
category: documentation
status: active
issues: []
discussions: []
---

<<<<<<< HEAD
# Zero Theme - Documentation Index

**Last Update**: 2026-03-28
**Status**: Available
**Theme Version**: 1.0

## Quick Navigation

### Essential Reading
1. [readme.md](./readme.md) - Theme overview
2. [architecture.md](./architecture.md) - Theme architecture ("vestito" pattern)
3. [modern-theme-architecture.md](./modern-theme-architecture.md) - Modern stack (Livewire 4, Volt, Flux UI)
4. [packages-integration.md](./packages-integration.md) - Package integration (Flux UI, Volt, Vite, Tailwind v4)
5. [model-docs-governance.md](./model-docs-governance.md) - Naming and docs hygiene rules

### Development Guides
- [ai-development-guide.md](./ai-development-guide.md) - AI-assisted development workflows
- [accessor-delegation-pattern.md](./accessor-delegation-pattern.md) - Accessor delegation & auto-persistence (SACRO)
- [filament-chart-integration.md](./filament-chart-integration.md) - Filament 5.x ChartWidget integration
- [phpstan-dry-kiss-theme-guidelines.md](./phpstan-dry-kiss-theme-guidelines.md) - PHPStan Level 10 + DRY/KISS for themes
- [components.md](./components.md) - Component catalog
- [layouts.md](./layouts.md) - Layout system
- [authentication.md](./authentication.md) - Auth integration
- [customization.md](./customization.md) - Theme customization

### Product & Planning
- [product-requirements.md](./product-requirements.md) - PRD
- [roadmap.md](./roadmap.md) - Theme roadmap
- [changelog.md](./changelog.md) - Version history

### Stack Reference
| Technology | Version | Purpose |
|------------|---------|---------|
| Laravel | 12 | Core framework |
| Filament | 5.x | Admin panel & widgets |
| Livewire | 4.x | Reactive components |
| Tailwind CSS | v4 | Utility-first CSS |
| Vite | v6 | Build tool |
| Flux UI | latest | Accessible UI components |
| Volt | latest | Livewire functional/class components |

### Anti-Patterns
- QuestionChartAnswersTripleChartWidget — why multi-chart widgets should be avoided (link removed 2026-07-24: target doc not found in repo, could not verify)
- **[QuestionChartAnswersTripleChartWidget](../../Modules/docs/anti-pattern-question-chart-answers-triple-widget.md)** - Why multi-chart widgets should be avoided

### Theme Characteristics
- **Style**: Ultra-minimalist
- **Target**: Lightweight applications
- **Framework**: Minimal CSS via Tailwind v4

### Related Resources

- [UI Module](../../../Modules/UI/docs/README.md) - Shared UI components
- [Xot Module](../../../Modules/Xot/docs/00-index.md) - Base classes
- [AGENTS.md](../../../AGENTS.md) - Project guidelines

---

*Theme documentation conforming to Laraxot standards*
=======
# Zero Theme — indice BMAD

**Aggiornato**: 2026-10-20  
**Ingresso docs del tema**: [../README.md](../README.md)  
**Nome file**: `00-index.md` (lowercase). Non creare `00-INDEX.md`: collisione su FS case-insensitive e regola nomi minuscoli (eccezione solo `README.md`).

## Perche' / confini (leggere prima)

1. [scopo.md](./scopo.md) — perche' Zero esiste in questo repo (IT, misurato)
2. [purpose.md](./purpose.md) — bridge EN verso `scopo.md`
3. [../wiki/concepts/theme-zero-operating-focus.md](../wiki/concepts/theme-zero-operating-focus.md) — focus agenti
4. [../concepts/xotbase-never-extend-filament.md](../concepts/xotbase-never-extend-filament.md) — confini Filament/Xot

## Navigazione rapida

### Essenziali
1. [theme-overview.md](./theme-overview.md) — panoramica lunga
2. [architecture.md](./architecture.md) — pattern "vestito"
3. [layouts.md](./layouts.md) / [components.md](./components.md) / [customization.md](./customization.md)
4. [model-docs-governance.md](./model-docs-governance.md) — igiene nomi/docs

### Sviluppo
- [filament-chart-integration.md](./filament-chart-integration.md)
- [phpstan.md](./phpstan.md) — gate agenti su **Modules** (vietato analyse solo-tema; policy [single-neon](../../../Modules/Xot/docs/wiki/memories/phpstan-single-neon-config.md))
- [phpstan-dry-kiss-theme-guidelines.md](./phpstan-dry-kiss-theme-guidelines.md)
- Evidenza gate Modules: [Xot phpstan-modules-zero-wave3](../../../Modules/Xot/docs/stories/phpstan-modules-zero-wave3.story.md) — il tema non ha PHP di dominio in `app/`
- **Boy scout post-zero:** dopo Modules a zero continua solo igiene docs/viste/asset (`app/` vuota); niente PHPStan theme-only. Story: [docs-temi-audit-organizzazione](../stories/docs-temi-audit-organizzazione.story.md). Ingresso: [../README.md](../README.md).
- [authentication.md](./authentication.md) / [mail-layouts.md](./mail-layouts.md)

### Stack reale del tema (package.json + codice)

| Technology | Version | Role in Zero |
|------------|---------|--------------|
| Tailwind CSS | 3.4.x | Utility CSS |
| Alpine.js | 3.x | Interattivita' leggera |
| Flowbite | 4.x | Componenti UI JS |
| Vite | 6.x | Build assets |
| Laravel / Filament | monorepo | Usati dai moduli; Zero fornisce view/override |

Guide che ancora citano Tailwind v4 / Flux / Volt come stack del tema sono **debito**: allineare quando si tocca quella guida. Dettaglio: [scopo.md](./scopo.md).

### Risorse correlate

- [Cms — scopo](../../../Modules/Cms/docs/scopo.md) — risoluzione pagina/blocchi
- [Lang — scopo](../../../Modules/Lang/docs/scopo.md) — i18n
- [Xot — indice](../../../Modules/Xot/docs/00-index.md) — foundation
- [AGENTS.md](../../../../AGENTS.md) — linee guida monorepo (root, non wiki tema)
>>>>>>> laraxot/dev
