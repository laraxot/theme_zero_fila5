---
title: second brain — puntatore modulo
type: reference
qmd: second brain modulo wiki locale laravel
updated: 2026-07-29
id: zero-docs-bmad-second-brain
slug: second-brain
description: "Puntatore al second brain: strati input, wiki compilata e regole globali, con la disciplina nella wiki di progetto."
document_type: reference
category: documentation
status: active
tags: []
created: "2026-10-06"
issues: []
discussions: []
---

# Second brain (modulo)

Stub **puntatore**: disciplina e link esterni curati stanno nella wiki di progetto.

| Strato | Dove in questo package |
|--------|-------------------------|
| Input / note grezze | questa cartella `docs/` (escluso `docs/wiki/`) |
| Wiki compilata | `docs/wiki/` del modulo |
| Regole globali | wiki root del monorepo |

## Link operativi (relativi al repo)

- Modello: [../../../../../bashscripts/ai/wiki/concepts/second-brain-llm-wiki.md#second-brain-operating-model](../../../../../bashscripts/ai/wiki/concepts/second-brain-llm-wiki.md#second-brain-operating-model)
- Guida wiki modulo: [../../../../../bashscripts/ai/wiki/how-to/wiki-qmd-search.md#module-wiki-documentation](../../../../../bashscripts/ai/wiki/how-to/wiki-qmd-search.md#module-wiki-documentation)
- Benchmark lettura esterna (Karpathy, Obsidian, PARA, …): [../../../../../bashscripts/ai/wiki/sources/sources.md#second-brain-external-benchmarks](../../../../../bashscripts/ai/wiki/sources/sources.md#second-brain-external-benchmarks)
- **Filament (stack attuale): v5** — non v4. Policy: [../../../../docs/wiki/memories/filament-version-policy.md](../../../../docs/wiki/memories/filament-version-policy.md) · Xot: [../../../laravel/Modules/Xot/docs/filament-5-laraxot-rules.md](../../../Modules/Xot/docs/filament-5-laraxot-rules.md)

## Nota operativa 2026-07-29

Per sync multi-org del tema:

1. leggere sempre `git remote -v` dentro `laravel/Themes/Zero`;
2. fare `git fetch --all --prune`;
3. verificare `git rev-list --left-right --count HEAD...<remote>/dev`;
4. fare push solo quando il secondo numero e' `0`;
5. se QMD non trova la collection locale, usare wiki file-based e annotare il degrado nel report.
- Modello: [../../../../../bashscripts/ai/wiki/concepts/second-brain-llm-wiki.md#second-brain-operating-model](../../../../../bashscripts/ai/wiki/concepts/second-brain-llm-wiki.md#second-brain-operating-model)
- Guida wiki modulo: [../../../../../bashscripts/ai/wiki/how-to/wiki-qmd-search.md#module-wiki-documentation](../../../../../bashscripts/ai/wiki/how-to/wiki-qmd-search.md#module-wiki-documentation)
- Benchmark lettura esterna (Karpathy, Obsidian, PARA, …): [../../../../../bashscripts/ai/wiki/sources/sources.md#second-brain-external-benchmarks](../../../../../bashscripts/ai/wiki/sources/sources.md#second-brain-external-benchmarks)
- **Filament (stack attuale): v5** — non v4. Policy: [../../../../docs/wiki/memories/filament-version-policy.md](../../../../docs/wiki/memories/filament-version-policy.md) · Xot: [../../Modules/Xot/docs/filament-5-laraxot-rules.md](../../../Modules/Xot/docs/filament-5-laraxot-rules.md)
