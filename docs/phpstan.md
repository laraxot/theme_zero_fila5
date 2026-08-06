---
title: "PHPStan — Theme Zero"
type: guide
tags: [laravel, phpstan, theme-zero]
created: 2026-07-14
updated: 2026-08-18
qmd: "phpstan theme zero solo laravel/phpstan.neon modules gate no --level"
related:
  - "./00-index.md"
---

# PHPStan Configuration - Theme Zero

## Perché

Il tema serve il FO (login, layout). PHPStan **non** è il Job dell'utente: è il gate degli agenti. `laravel/phpstan.neon` ha `paths: Modules/` — analizzare **solo** il tema produce ignore unmatched e rumore. Il gate verde è:

```bash
cd ./laravel
./vendor/bin/phpstan analyse
```

**Solo** `laravel/phpstan.neon`. Agenti: niente neon temp, niente `--level`, niente baseline.

- [PHPStan Level 10 Guidelines](../../../../docs/phpstan-level10.md)
- [Root phpstan.neon](../../../../laravel/phpstan.neon)
