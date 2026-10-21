---
<<<<<<< HEAD
title: Theme Zero — indice documentazione
type: index
tags: [docs, theme, zero]
qmd: "Theme Zero indice documentazione BMAD wiki"
---

# Theme Zero — indice documentazione

L'ingresso attivo è [README.md](README.md). Questo indice è mantenuto come
compatibilità per i link storici e non introduce una seconda fonte di verità.

- [README](README.md)
- [BMAD](bmad/)
- [Wiki](wiki/)
- [Stories](stories/)
=======
title: "Zero — Indice canonico docs"
status: canonical
module: Zero
updated: 2026-10-20
---

<!--
GateGuard facts:
1. Supersedes broken relative link ../../Xot/... (path inesistente da Themes/Zero) con ../../../Modules/Xot/docs/conventions/docs-organization.md; chiarisce README ingresso attivo e no domain logic nel tema.
2. Linked from Themes/Zero/docs/README.md e conventions docs-organization; spine tema.
3. Edit existing INDEX.md — not a new file.
4. User verbatim: "aggiorna studia e migliora e organizza meglio le cartelle docs dentro i moduli e dentro i temi e migliora il tuo second brain"
-->

> Indice canonico. Indici storici alternativí: `README.md` (attivo, ingresso primario), `index.md` (superseded, 2026-09-24, mantiene prosa introduttiva), `index-pointer.md` (punto di compatibilità, ex INDEX.md, rinominato 2026-10-20 per evitare collizione case-insensitive). Nessun file in `_archive/` cancellato.

> Convenzione: [Docs Organization — Modules & Themes](../../../Modules/Xot/docs/conventions/docs-organization.md)

# Zero — Indice docs (Tema Zero)

Tema frontend unico del monorepo (`pub`, `theme.json`). Solo presentazione: Blade,
asset, traduzioni. `app/` vuota — nessuna business logic di dominio (quella vive
nei moduli). Stack: Filament 5.x, Tailwind 3.4, Alpine 3, Flowbite 4, Vite 6.

## Panoramica
- [README.md](./README.md) — **ingresso attivo** (scopo, mappa, regole)
- [inventory.md](./inventory.md) — inventario documenti
- [changelog.md](./changelog.md) — cronologia modifiche
- [bmad/scopo.md](./bmad/scopo.md) / [bmad/purpose.md](./bmad/purpose.md) — scopo del tema (IT / EN)
- [wiki/readme-legacy-snapshot.md](./wiki/readme-legacy-snapshot.md) — snapshot ex `wiki/readme.md`

## Struttura (sottocartelle)
- [`_archive/`](./_archive/) — archivio storico (mantenuto intatto; non cancellare né rinominare)
- [`bmad/`](./bmad/) — dossier BMAD (scopo, architettura, componenti, layout, decisioni, stories, performance)
- [`concepts/`](./concepts/) — concetti architetturali (theme-zero-operating-focus, etc.)
- [`skills/`](./skills/) — competenze e guide operative
- [`stories/`](./stories/) — storie feature (es. docs-temi-audit-organizzazione)
- [`wiki/`](./wiki/) — wiki (index.md, log.md, concepts/, rules/, memories/, commands/, overviews/)

## Qualità / Standard
- [bmad/quality-audit.md](./bmad/quality-audit.md) / [bmad/php-quality-gates-rule.md](./bmad/php-quality-gates-rule.md) — porte qualità e coerenza con Xot
- Nessun file `.neon` creato (regola utente, solo `laravel/phpstan.neon` modificabile)

## Note sui duplicati mantenuti
- `index.md` (superseded da README.md, 2026-09-24) — mantenuto per compatibilità; non cancellato.
- `index-pointer.md` (ex INDEX.md) — mantenuto come puntatore; rinominato per evitare collisione su filesystem case-insensitive.
- `_archive/` — preservato integralmente.
- `README.md` — ingresso primario, attivo (`status: active`).

---
*Aggiornato: 2026-10-20 — conforme a `docs-organization.md`; `INDEX.md` nuovo canonico; `README.md` resta ingresso primario; `index.md` e `index-pointer.md` mantenuti; `_archive/` intatto; nessun file cancellato.*
>>>>>>> laraxot/dev
