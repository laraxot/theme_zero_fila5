---
title: "Theme Zero — operazioni sul repo, tooling e disciplina docs"
type: how-to
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero git sync multi org laraxot provtv remote push no-thin unshallow unrelated histories conflitti marker collisioni release semantic agenti ai second brain bmad graphify docs policy"
merged_from:
  - bmad/git-multi-org-sync-handoff.md
  - bmad/multi-org-sync-laraxot-provtv.md
  - wiki/how-to/gitmodules-sync-session.md
  - wiki/how-to/git-push.md
  - wiki/memories/github-remote-theme-resolve.md
  - bmad/conflict-resolution.md
  - conflict-resolution.md
  - bmad/conflict-resolution-summary.md
  - bmad/git-collision-audit-bashscripts.md
  - bmad/git-collisions-bashscripts-audit.md
  - bmad/git-conflict-resolution-audit.md
  - bmad/release-marketing-standard.md
  - release-marketing-standard.md
  - bmad/pandoc-guide.md
  - bmad/ai-development-guide.md
  - ai-development-guide.md
  - ai-handoff.md
  - wiki/concepts/ai-handoff.md
  - wiki/concepts/ai-tooling.md
  - wiki/how-to/ai-methodologies.md
  - wiki/concepts/bmad-method.md
  - bmad/graphify-map.md
  - bmad/frameworks.md
  - bmad/second-brain.md
  - second-brain.md
  - wiki/concepts/second-brain-local-discipline.md
  - agent-confidence-discipline.md
  - agent-confidence-protocol.md
  - agent-edit-discipline.md
  - wiki/rules/agent-confidence-discipline.md
  - wiki/rules/agent-confidence-protocol.md
  - wiki/rules/agent-edit-discipline.md
  - bmad/docs-archive-policy.md
  - docs-archive-policy.md
  - bmad/docs-deduplication.md
  - docs-deduplication.md
  - bmad/doc-first-workflow.md
  - bmad/theme-documentation-standard.md
  - bmad/schema.md
  - bmad/no-ai-tool-scaffold-dirs.md
  - skills/README.md
  - wiki/concepts/ponytail-docs-lifecycle.md
  - wiki/sources/context-compression-and-retrieval.md
  - wiki/sources/theme-zero-product-and-roadmap-docs.md
---

# Theme Zero — operazioni sul repo

## Sync multi-organizzazione

Remote: `laraxot` (`git@github.com:laraxot/theme_zero_fila5.git`, upstream) e `provtv`, branch
`dev`. Prompt di progetto: `bashscripts/tools/prompts/02-gitmodules-sync.md`.

1. `git remote -v` sempre: in un conflitto fra URL `base_<a>_*` e `base_<b>_*` possono essere
   false entrambe le parti.
2. `git fetch --all --prune`; modifiche locali committate prima del merge (mai
   stash/reset/restore/checkout/force).
3. `git rev-list --left-right --count HEAD...<remote>/dev`: `N 0` push; secondo > 0 merge
   forward-only; chiusura `0 0` su ogni remote e tree pulito.
4. `did not receive expected object` / `unpack failed` → `git fetch --unshallow` o
   `git push --no-thin`. Storie scollegate → `--allow-unrelated-histories` con revisione dei
   conflitti add/add.

## Conflitti e marker

Risoluzione manuale forward-only. Euristica per blocchi committati: lato non vuoto, poi
superset, poi `updated` piu' recente, poi HEAD. Verifica: `rg -nP '^(<{7}|={7}|>{7})( |$)'` = 0.
La storia della migrazione Filament 5 nei conflitti va letta con
[filament](./filament.md#insidie-note): il canon v5 e' `Schema`.

## Release

`.releaserc.json` (semantic-release) nel root del tema; changelog di release `../CHANGELOG.md`.
Il README del tema descrive solo cio' che il codice fa.

## Agenti e documentazione

- Regole agenti, BMAD, second brain, compressione contesto: progetto, non tema
  (`bashscripts/ai/wiki/rules/00-TRIGGER_MAP.md`, `bashscripts/ai/wiki/rules/second-brain.md`).
  Prima di lavorare su Zero: [README](./README.md) → pagina d'argomento → codice.
- Una pagina per argomento, nomi kebab-case senza date, frontmatter con `qmd`; niente
  `archive/`, `legacy/`, `_archive/`: lo storico e' git. Schema wiki: [wiki/SCHEMA.md](./wiki/SCHEMA.md).
- Niente cartelle di scaffold di tool AI/CI nella root del tema (`scripts/`, `bashscripts/`,
  `test-results/`, `.devcontainer/`): ogni tema e' un repo git indipendente.
- graphify: per 25 Blade la lettura diretta costa meno di un grafo dedicato.
- Pandoc per export docs: `~/.local/bin/pandoc`, nessuna config di tema.
