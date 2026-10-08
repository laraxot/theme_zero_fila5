---
title: "Documentazione — Tema Zero"
type: index
module: Zero
status: active
updated: '2026-10-07'
---

# Documentazione del tema Zero

Questo è l’entrypoint pulito per i documenti del tema. `index.md` conserva marcatori di conflitto e storia di merge: è stato lasciato intatto; per navigare usare questa pagina e il catalogo wiki in `wiki/index.md`.

## Aree

| Percorso | Contenuto |
|---|---|
| [`wiki/index.md`](wiki/index.md) | catalogo wiki e riferimenti on-demand |
| [`wiki/overviews/overview.md`](wiki/overviews/overview.md) | overview del tema |
| [`wiki/rules/architecture-rules.md`](wiki/rules/architecture-rules.md) | confini architetturali e regole |
| [`concepts/xotbase-never-extend-filament.md`](concepts/xotbase-never-extend-filament.md) | vincolo del tema sulle classi base Filament |
| [`stories/`](stories/) | storie del tema: [audit documentazione](stories/docs-theme-zero-audit-2026-09-11.story.md), [audit indice](stories/docs-index-audit.story.md), [pulizia marker di conflitto](stories/zero-conflict-markers-cleanup-2026-09-22.story.md) e [restyling login](stories/auth-login-ui-ux-redesign-2026-09-17.story.md) |
| [`bmad/stories/`](bmad/stories/) | [gate PHPStan e swarm](bmad/stories/quality-gates-phpstan-swarm-2026-09-23.story.md) e [deduplicazione/frontmatter docs](bmad/stories/theme-docs-dedup-frontmatter.story.md) |
| [`changelog.md`](changelog.md) | cronologia documentata del tema |
| [`inventory.md`](inventory.md) | inventario verificato della struttura e dei controlli |
| [`_archive/`](_archive/) | documentazione storica conservata, non canonica |

Le pagine di dettaglio per categorie (regole, concetti, skill, memorie e comandi) sono raggiungibili dal [catalogo wiki](wiki/index.md). Gli indici duplicati in maiuscolo/minuscolo restano da riallineare.

## Confine con i moduli

Il tema possiede presentazione, asset, layout e componenti visuali. La logica survey, l’autorizzazione e i dati Pulse sono proprietà del modulo Quaeris; il relativo contratto è in [`Quaeris docs / BMAD`](../../../Modules/Quaeris/docs/bmad/README.md). Non copiare metriche o decisioni di dominio nel tema.

## Manutenzione

Aggiornare questo indice solo per documenti verificati esistenti. Restano in backlog la riconciliazione dei marcatori di conflitto in [index.md](index.md) e negli indici duplicati, oltre alla verifica dei link storici nel [README del tema](../README.md). Non spostare o cancellare in blocco gli archivi; correggere i conflitti Git in un’attività dedicata, preservando entrambe le parti e la storia.
