---
<<<<<<< HEAD
title: "Theme Zero Operating Focus"
module: "Zero"
type: concept
created: "2026-04-29T00:00:00Z"
updated: "2026-04-29T07:22:00Z"
related:
  - "[[Theme Zero Product and Roadmap Docs]]"
id: zero-docs-wiki-concepts-theme-zero-operating-focus
slug: theme-zero-operating-focus
description: "Stable summary of Theme Zero as the baseline visual system for the repository."
document_type: concept
category: documentation
status: active
tags: []
qmd: "theme zero operating focus"
=======
title: "Theme Zero — focus operativo"
module: "Zero"
type: concept
created: "2026-04-29T00:00:00Z"
updated: "2026-10-20"
related:
  - ../../bmad/scopo.md
  - ../../README.md
  - ../../concepts/xotbase-never-extend-filament.md
id: zero-docs-wiki-concepts-theme-zero-operating-focus
slug: theme-zero-operating-focus
description: "Perche Zero e' il tema baseline FO: confini verso Cms/Xot, doc come handoff, niente logica di dominio."
document_type: concept
category: documentation
status: active
tags: [zero, scopo, confini, agent-handoff]
qmd: "theme zero operating focus scopo confini cms xot presentazione"
>>>>>>> laraxot/dev
issues: []
discussions: []
---

<<<<<<< HEAD
# Theme Zero Operating Focus

> Stable summary of Theme Zero as the baseline visual system for the repository.

## Positioning

Theme Zero is documented as the default and foundational theme. Its primary value is not visual novelty, but providing a reusable, coherent frontoffice base that other themes and modules can rely on.

## Guardrails

- Keep Theme Zero minimal, reusable, and truthful to the actual implementation.
- Prioritize foundation, scope clarity, and docs-code alignment over cosmetic expansion.
- Reuse UI and Xot abstractions rather than introducing parallel frontend patterns.
- Treat docs as an agent handoff layer, not only as product collateral.

## Current Documentation Reality

Theme Zero has a richer raw documentation layer than Theme One and already carries governance, strategy, architecture, and chart/PDF integration material. That makes it strategically important, but also increases the chance of drift.

## Retrieval Heuristic

Start from this page, then use the product and roadmap summary page. Open raw docs only for the specific frontend capability being touched, such as layout, charts, documentation workflow, or PHPStan quality gates.

## Theme Zero-local Second Brain Loop

For frontoffice and baseline UX tasks:

1. Start from Theme Zero wiki pages to validate scope and baseline responsibilities.
2. Open only the raw docs needed by the current UI decision.
3. Distill the result into one concise page update focused on why the decision exists.
4. Record the operation in local `log.md` and keep `index.md` discoverable.
5. Promote shared design/system rules to root `docs/wiki/` when they impact other themes or modules.

## References

- [[Theme Zero Product and Roadmap Docs]]
- `../../README.md`
- `../../product-strategy.md`
- `../../roadmap.md`
=======
# Theme Zero — focus operativo

> Perche toccare Zero: tenere un frontoffice minimo, vero rispetto al codice, e leave domain ai moduli.

## Posizionamento

In `base_quaeris_fila5` Zero e' l'unico tema. Vale come guscio pubblico (`pub`), non come pannello gestionale. Dettaglio e misure: [scopo](../../bmad/scopo.md).

## Guardrail (KISS)

- Solo presentazione: Blade, CSS/JS, mail-layouts, `lang/*/navigation|ui`.
- `app/` resta vuoto: niente Actions/Services nel tema.
- Domanda "chi decide la pagina?" → [Cms scopo](../../../../Modules/Cms/docs/scopo.md).
- Domanda "quale classe Filament estendo?" → [Xot](../../../../Modules/Xot/docs/00-index.md) + [mai Filament*](../../concepts/xotbase-never-extend-filament.md).
- Docs = handoff per agenti: aggiornare `scopo` / README quando cambia il perche', non solo il come.

## Heuristica di lettura

1. [../../README.md](../../README.md) — mappa docs
2. [../../bmad/scopo.md](../../bmad/scopo.md) — perche' e confini
3. Layout/componenti/chart solo se il task e' UI
4. wiki `raw/` sola lettura; nuove regole condivise → wiki di progetto, non duplicare qui

## Non e' focus di Zero

- Metriche Pulse / survey / RBAC di dominio (moduli)
- Inventare temi gemelli "One/Three" in docs: in questo repo non esistono
- Citare Tailwind v4 / Flux come stack del tema (reale: TW 3.4, Alpine, Flowbite)
>>>>>>> laraxot/dev
