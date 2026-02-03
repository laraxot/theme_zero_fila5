# Tema Zero - Documentazione

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

## Collegamenti

- [PHPStan Docs](./phpstan.md)
- [Configurazione Root](../../../docs/THEME_ZERO.md)
- [Metodologia GSD](../../../../docs/project/gsd-methodology.md)
- [GSD templates locali](../../../../.gsd/README.md)

## Backlinks

## 🔁 CI & Semantic Versioning
Il tema include il workflow locale in `.github/workflows/semantic-versioning.yml`.
Include anche l’attestazione build provenance con `actions/attest-build-provenance@v3`.