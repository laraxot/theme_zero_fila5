---
title: "Theme Zero - PHP Quality Gates Rule"
type: rule
qmd: "php quality gates rule theme zero"
---
# Theme Zero - PHP Quality Gates Rule

## Regola tema
- Ogni modifica PHP nel tema deve passare:
  - `phpstan`
  - `phpmd`
  - `phpinsights`

## Test
- Quando testabile, coprire con test Pest o aggiornare test esistenti.
