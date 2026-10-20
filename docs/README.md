---
id: zero-docs-readme
slug: readme
title: "Documentazione del tema Zero"
description: "Punto di ingresso della docs del tema Zero: scopo del tema, mappa delle cartelle, documenti chiave e regole di manutenzione."
document_type: index
type: index
category: documentation
status: active
module: Zero
tags: [zero, tema, docs, indice]
created: "2026-09-24"
updated: "2026-10-20"
qmd: "tema zero docs indice mappa cartelle bmad wiki stories archivio frontmatter duplicati"
issues: []
discussions: []
related:
  - ./inventory.md
  - ./wiki/index.md
  - ./bmad/00-index.md
  - ./stories/docs-temi-audit-organizzazione.story.md
---

# Documentazione del tema Zero

## Scopo del tema

`laravel/Themes/Zero` e' l'unico tema frontend del monorepo (tipo `pub`, vedi `theme.json`). Contiene solo presentazione: viste Blade, asset e traduzioni. La cartella `app/` e' vuota.

| Parte | Cosa c'e' | Dove |
|---|---|---|
| Viste | layout `app`, pagine `home`, `index`, login, componenti `layouts`, `blocks`, `ui`, override Filament per il login | `resources/views/` |
| Asset | Tailwind 3.4, Alpine 3, Flowbite 4, Vite 6 con `laravel-vite-plugin`; build in `public/` | `resources/css`, `resources/js`, `vite.config.js` |
| Mail | layout HTML `base`, `clean`, `christmas-professional` | `resources/mail-layouts/` |
| Lingue | `navigation` e `ui` in it, en, de | `lang/` |

Il tema non contiene logica di dominio. Survey, autorizzazione e dati Pulse sono del modulo Quaeris: contratto in [Quaeris docs, BMAD](../../../Modules/Quaeris/docs/bmad/README.md). Non copiare nel tema metriche o decisioni di dominio.

## Mappa delle cartelle

| Percorso | Ruolo | Ingresso |
|---|---|---|
| [`bmad/`](bmad/) | guide, architettura, report e pianificazione del tema (la parte piu' grande) | [`bmad/00-index.md`](bmad/00-index.md), [`bmad/README.md`](bmad/README.md), panoramica lunga [`bmad/theme-overview.md`](bmad/theme-overview.md) |
| [`wiki/`](wiki/) | conoscenza curata per gli agenti: concetti, regole, how-to, memorie, fonti | [`wiki/index.md`](wiki/index.md) |
| [`stories/`](stories/) | story BMAD del tema (posizione prevista dalla policy) | vedi sotto |
| [`bmad/stories/`](bmad/stories/) | altre due story, nate prima della policy | vedi sotto |
| [`concepts/`](concepts/) | vincolo XotBase al posto di Filament | [`xotbase-never-extend-filament.md`](concepts/xotbase-never-extend-filament.md) |
| [`skills/`](skills/) | note sulle skill del tema | [`readme.md`](skills/readme.md) |
| [`_archive/`](_archive/) | copie storiche, non canoniche; ogni file ha `canonical:` verso il documento vivo | [`README.md`](_archive/README.md) (tabella copia e canonico) |

File nella radice: [`changelog.md`](changelog.md) (cronologia), [`inventory.md`](inventory.md) (conteggi verificati), [`index.md`](index.md) e [`index-pointer.md`](index-pointer.md) (indici storici, `status: superseded`: usare questa pagina; `index-pointer.md` si chiamava `INDEX.md`).

## Documenti chiave

- Architettura: [`bmad/architecture.md`](bmad/architecture.md), [`wiki/rules/architecture-rules.md`](wiki/rules/architecture-rules.md), [`concepts/xotbase-never-extend-filament.md`](concepts/xotbase-never-extend-filament.md).
- Viste e UI: [`bmad/layouts.md`](bmad/layouts.md), [`bmad/components.md`](bmad/components.md), [`bmad/customization.md`](bmad/customization.md), [`bmad/mail-layouts.md`](bmad/mail-layouts.md).
- Grafici: [`bmad/filament-chart-integration.md`](bmad/filament-chart-integration.md), [`wiki/concepts/jpgraph-guide.md`](wiki/concepts/jpgraph-guide.md).
- Qualita': [`bmad/phpstan-dry-kiss-theme-guidelines.md`](bmad/phpstan-dry-kiss-theme-guidelines.md), [`bmad/php-quality-gates-rule.md`](bmad/php-quality-gates-rule.md).

## Story

- In `stories/`: [audit e organizzazione delle docs dei temi, 2026-10-20](stories/docs-temi-audit-organizzazione.story.md), [salute della docs, 2026-10-08](stories/zero-docs-health.story.md), [audit documentazione](stories/docs-theme-zero-audit.story.md), [audit indice](stories/docs-index-audit.story.md), [pulizia marker di conflitto](stories/zero-conflict-markers-cleanup.story.md), [restyling login](stories/auth-login-ui-ux-redesign.story.md).
- In `bmad/stories/`: [gate PHPStan e swarm](bmad/stories/quality-gates-phpstan-swarm.story.md), [dedup e frontmatter](bmad/stories/theme-docs-dedup-frontmatter.story.md).

## Regole di manutenzione

1. Ogni `.md` apre con front matter completo (`id`, `slug`, `title`, `description`, `document_type`, `category`, `status`); regola in `bashscripts/ai/wiki/rules/markdown-file-naming-and-frontmatter.md`.
2. Un solo canonico per argomento. Il duplicato resta ma con `status: superseded` e `superseded_by`, oppure sta in `_archive/` con `canonical:`. Non cancellare, non rinumerare le story.
3. Nomi in kebab-case senza date ne' suffissi numerici, story comprese (regola dell'utente 2026-10-15); la data sta nel front matter. Verifica: `python3 -I bashscripts/tools/docs/md-filenames.py check --paths <file>...` con i file `.md` elencati uno per uno (passando una cartella il comando stampa "0" senza controllare niente).
4. Nuove pagine nella cartella piu' specifica gia' esistente, con link dall'indice di quella cartella.

## Debito noto

- Marker di conflitto Git: 0 file, verificato il 2026-10-20 con `rg -nP '^(<{7}|={7}|>{7})( |$)'` e con un caso positivo noto (la nota precedente su 30 file era superata).
- Link relativi che non risolvono: conteggio e cause in [`inventory.md`](inventory.md). La maggior parte punta a moduli o pagine di altri progetti della famiglia Laraxot (Performance, Sigma, Ptv, Rating, docs di root) e non sono correggibili senza riscrivere il contenuto.
- Dieci pagine di `bmad/` e `wiki/concepts/` citano moduli che non esistono in questo repository: ognuna ha in testa una "Nota di verifica 2026-10-20" e il contenuto non e' stato riscritto.
- Le guide in `bmad/` citano Tailwind v4, Livewire 4 e Flux UI; il tema reale usa Tailwind 3.4, Alpine e Flowbite. Allineare quando si tocca la guida.
- Nomi che differivano solo per la maiuscola (collidono su filesystem case-insensitive): `bmad/readme.md` e' diventato [`bmad/theme-overview.md`](bmad/theme-overview.md) e `INDEX.md` e' diventato [`index-pointer.md`](index-pointer.md). Il controllo `find docs -type f | tr A-Z a-z | sort | uniq -d` oggi non stampa nulla (prima stampava `bmad/readme.md` e `index.md`). Restano `index.md` e `index-pointer.md`, entrambi superseded.
