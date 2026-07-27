# Tema Zero - Documentazione

## Gestionale / replica

Tema alternativo/sperimentale. Hub: [gestionale-docs-index.md](../../docs/gestionale-docs-index.md) · [tenant-modules-navigation-discipline.md](../../docs/tenant-modules-navigation-discipline.md) · [panels vs Zero](./gestionale-panels-vs-themes.md).

## Overview

Il tema **Zero** è il tema principale di default per l'applicazione Laraxot PTVX.

> **GitHub remote (GRAVE):** prima di link issue/discussion nei docs → `cd laravel/Themes/Zero && git remote -v` (`laraxot/theme_zero_fila5`). Mai `base_techplanner` / `base_workorder`. Vedi [code-quality-improvement-report.md](./code-quality-improvement-report.md).

> **PHPStan (2026-07-27):** gate `analyse Modules` → 0. Non usare `analyse Themes` da solo (ignore unmatched neon) — [phpstan-stale-ignore-pattern](../../../../docs/wiki/troubleshooting/phpstan-stale-ignore-pattern.md).

## Scopo (business)

- **Frontoffice**: layout e pagine base, con convenzioni condivise.
- **Coerenza**: integrazione con `UI` per componenti, e con `Xot` per regole architetturali.

## Struttura

```
Zero/
├── app/
│   ├── Http/
│   ├── View/
│   └── ...
├── config/
├── docs/
├── lang/
├── resources/
│   ├── views/
│   └── svg/
└── routes/
```

## Configurazione

### Regole Fondamentali

1. **PHPStan**: Configurazione centralizzata in `laravel/phpstan.neon`
2. **Output files**: `phpstan*.json` ignorati (NON committare)
3. **Namespace**: `Themes\Zero\`

## Repo indipendente

Path in `gitmodules.ini`: `laravel/Themes/Zero` → remote `laraxot/theme_zero_fila5`. Entrare con `cd`, non trattarlo come submodule della root. Protocollo: [17-gitmodules-path-iteration.md](../../../../bashscripts/tools/prompts/17-gitmodules-path-iteration.md).

## Collegamenti

- [PHPStan Docs](./phpstan.md)
- [Configurazione Root](../../../docs/THEME_ZERO.md)
- [Metodologia GSD](../../../../docs/project/gsd-methodology.md)
- [GSD templates locali](../../../../.gsd/README.md)

## Backlinks

- [Xot Module](../../Modules/Xot/docs/)
- [UI Module](../../Modules/UI/docs/)

## AI Workflows
- [AI Methodologies](./ai-methodologies.md)
