---
title: "PHPStan — Theme Zero"
type: guide
tags: [laravel, phpstan, theme-zero]
created: 2026-07-14
updated: 2026-08-18
qmd: "phpstan theme zero solo laravel/phpstan.neon modules gate no --level"
related:
  - "./phpstan-level10-analysis.md"
  - "../../../../Modules/Xot/docs/stories/5.7.phpstan-modules-green.story.md"
---

# PHPStan — Theme Zero

## Perché

Il tema serve il FO (login, layout). PHPStan **non** è il Job dell'utente: è il gate degli agenti. `laravel/phpstan.neon` ha `paths: Modules/` — analizzare **solo** il tema produce ignore unmatched e rumore. Il gate verde è:

```bash
cd laravel && ./vendor/bin/phpstan clear-result-cache
cd laravel && ./vendor/bin/phpstan analyse Modules --memory-limit=-1 --no-progress
```

**Solo** `laravel/phpstan.neon`. Agenti: niente neon temp, niente `--level`, niente baseline.

## Vietato

- `phpstan*.neon` / `phpstan*.json` nel tema (tranne output temporanei gitignored)
- `analyse Themes` da solo

## Permesso

- Fixare **codice** del tema se un consumer in `Modules/` lo analizza
- PHP del tema: `mixed` ultima spiaggia — [Xot phpstan-rules](../../../../Modules/Xot/docs/quality/phpstan-rules.md)
- Dettaglio storico: [phpstan-level10-analysis.md](./phpstan-level10-analysis.md)
