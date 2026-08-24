---
title: "PHPStan Configuration - Theme Zero"
type: guide
tags: ['laravel', 'phpstan']
created: 2026-07-14
updated: 2026-08-24
qmd: "phpstan theme zero solo laravel/phpstan.neon modules gate no --level"
related:
  - "./00-index.md"
---

# PHPStan Configuration - Theme Zero

## Regola Fondamentale

**SOLO `laravel/phpstan.neon` è la configurazione valida.**

```bash
cd laravel
./vendor/bin/phpstan analyse Modules --memory-limit=-1 --no-progress
```

**Solo** `laravel/phpstan.neon`, con il suo `level: max`. Agenti: niente neon temp,
niente `--level`, baseline, esclusioni o `@phpstan-ignore`. I test fanno parte del gate.

I file di output PHPStan (es: `phpstan_themes_zero_filtered.json`) sono:
- File temporanei di analisi
- Da escludere nel `.gitignore`
- **MAI committati nel repository**

## .gitignore Aggiornamento

Aggiungere al `.gitignore` del tema:
```
# PHPStan output files
phpstan*.json
```

- Fixare **codice** del tema se un consumer in `Modules/` lo analizza
- PHP del tema: risalire al tipo al boundary; `mixed` non è una scorciatoia — [Xot phpstan-rules](../../../../Modules/Xot/docs/quality/phpstan-rules.md)
- Dettaglio storico: [phpstan-level10-analysis.md](./phpstan-level10-analysis.md)

## Stato e prove

Le vecchie note “Level 10” e “0 errori” sono storiche. Lo stato corrente esiste solo
come output datato del comando canonico e come evidenza nella story proprietaria; un
conteggio ottenuto con `analyse Themes` o `--level=<n>` non aggiorna questo gate.
