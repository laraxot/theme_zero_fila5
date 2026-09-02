# Theme Documentation

This directory contains documentation for the theme.

## Structure

- **customization.md** - Theme customization
- **README.md** - This file

## Guidelines

Documentation should be:
- Clear and concise
- Updated with theme changes
- Use Markdown format (.md)
# Tema Zero - Documentazione

<<<<<<< .merge_file_TsU77R
=======

# Tema Zero - Documentazione

## Gestionale / replica

Tema alternativo/sperimentale. Hub: [gestionale-docs-index.md](../../docs/gestionale-docs-index.md) · [tenant-modules-navigation-discipline.md](../../docs/tenant-modules-navigation-discipline.md) · [panels vs Zero](./gestionale-panels-vs-themes.md).

>>>>>>> .merge_file_OjluFU
## Overview

Il tema **Zero** è il tema principale di default per l'applicazione Laraxot PTVX.

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

<<<<<<< .merge_file_TsU77R
=======
## Repo indipendente

Path `laravel/Themes/Zero` → remote `laraxot/theme_zero_fila5` (da `git remote -v`; il vecchio `gitmodules.ini` è stato rimosso il 2 set 2026, non era un file letto da git). Entrare con `cd`, non trattarlo come submodule della root. Protocollo: [17-gitmodules-path-iteration.md](../../../../bashscripts/tools/prompts/17-gitmodules-path-iteration.md).

>>>>>>> .merge_file_OjluFU
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
