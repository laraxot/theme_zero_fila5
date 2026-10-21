---
title: "PHPStan — Theme Zero"
type: guide
tags: [laravel, phpstan, theme-zero]
created: 2026-07-14
<<<<<<< HEAD
updated: 2026-08-24
qmd: "phpstan theme zero solo laravel/phpstan.neon modules gate no --level"
related:
  - "./phpstan-level10-analysis.md"
  - "../../../../Modules/Xot/docs/stories/5.7.phpstan-modules-green.story.md"
=======
updated: 2026-10-20
qmd: "phpstan theme zero solo laravel/phpstan.neon modules gate no --level phpstan configuration immutabile umano"
related:
  - "./phpstan-level10-analysis.md"
  - "../../../../Modules/Xot/docs/stories/5.7.phpstan-modules-green.story.md"
  - "../../../../Modules/Xot/docs/wiki/memories/phpstan-single-neon-config.md"
  - "../../../../../bashscripts/ai/wiki/rules/phpstan-neon-immutable.md"
>>>>>>> laraxot/dev
id: zero-docs-bmad-phpstan
slug: phpstan
description: "Il tema serve il FO (login, layout). PHPStan non è il Job dell'utente: è il gate degli agenti. laravel/phpstan.neon ha paths: Modules/ - analizzare solo il tema produce ignore..."
document_type: guide
category: static-analysis
status: active
issues: []
discussions: []
---

<<<<<<< HEAD
=======
<!-- gateguard: update existing Theme Zero phpstan guide; linked from README/bmad; user: "devi utilizzare laravel/phpstan.neon e solo io posso modificarlo, non puoi creare altri .neon" -->

>>>>>>> laraxot/dev
# PHPStan — Theme Zero

## Perché

Il tema serve il FO (login, layout). PHPStan **non** è il Job dell'utente: è il gate degli agenti. `laravel/phpstan.neon` ha `paths: Modules/` — analizzare **solo** il tema produce ignore unmatched e rumore. Il gate verde è:

```bash
cd laravel
./vendor/bin/phpstan analyse Modules --memory-limit=-1 --no-progress
```

<<<<<<< HEAD
**Solo** `laravel/phpstan.neon`, con il suo `level: max`. Agenti: niente neon temp,
niente `--level`, baseline, esclusioni o `@phpstan-ignore`. I test fanno parte del gate.
=======
**Solo** `laravel/phpstan.neon`, con il suo `level: max`. Solo l'**umano** lo
modifica. Agenti: niente neon temp, niente creazione di altri `.neon`, niente
`-c`, `--level`, baseline, esclusioni o `@phpstan-ignore`. I test fanno parte
del gate. Memoria:
[phpstan-single-neon-config](../../../../Modules/Xot/docs/wiki/memories/phpstan-single-neon-config.md).
>>>>>>> laraxot/dev

## Vietato

- `phpstan*.neon` / `phpstan*.json` nel tema (tranne output temporanei gitignored)
<<<<<<< HEAD
=======
- creare o usare neon di modulo (`Modules/*/phpstan*.neon*`) come gate
>>>>>>> laraxot/dev
- `analyse Themes` da solo

## Permesso

- Fixare **codice** del tema se un consumer in `Modules/` lo analizza
- PHP del tema: risalire al tipo al boundary; `mixed` non è una scorciatoia — [Xot phpstan-rules](../../../../Modules/Xot/docs/quality/phpstan-rules.md)
- Dettaglio storico: [phpstan-level10-analysis.md](./phpstan-level10-analysis.md)

## Stato e prove

Le vecchie note “Level 10” e “0 errori” sono storiche. Lo stato corrente esiste solo
come output datato del comando canonico e come evidenza nella story proprietaria; un
conteggio ottenuto con `analyse Themes` o `--level=<n>` non aggiorna questo gate.

<<<<<<< HEAD
title: "PHPStan Configuration - Theme Zero"
type: guide
tags: ['laravel', 'phpstan']
created: 2026-07-14
updated: 2026-07-14
qmd: "phpstan configuration - theme zero"
related:
  - "./00-index.md"
=======
>>>>>>> laraxot/dev
---

# PHPStan Configuration - Theme Zero

## Regola Fondamentale

**SOLO `laravel/phpstan.neon` è la configurazione valida.**

### ❌ VIETATO
- Creare file `phpstan*.json` nei temi
- Creare configurazioni alternative `phpstan.neon.dist`
- Committare file di output PHPStan

### ✅ PERMESSO
- Usare `laravel/phpstan.neon` (configurazione centralizzata)
- File di output temporanei (esclusi da .gitignore)

## Configurazione Centralizzata

```
laravel/
└── phpstan.neon          # UNICA configurazione valida
```

## Output Files

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

## Esecuzione Analisi

```bash
cd ./laravel
./vendor/bin/phpstan analyse --level=10
```

## Riferimenti

- [PHPStan Level 10 Guidelines](../../../docs/phpstan-level10.md)
<<<<<<< HEAD
- [Root phpstan.neon](../../../laravel/phpstan.neon)
=======
- [Root phpstan.neon](../../../../phpstan.neon)
>>>>>>> laraxot/dev
