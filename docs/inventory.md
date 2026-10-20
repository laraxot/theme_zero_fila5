---
title: "Inventario della documentazione - Tema Zero"
type: note
module: Zero
status: active
updated: "2026-10-20"
id: zero-docs-inventory
slug: inventory
description: "Questa nota descrive la struttura reale di laravel/Themes/Zero/docs/ al"
document_type: note
category: documentation
tags: []
created: "2026-10-08"
qmd: "inventario della documentazione - tema zero"
issues: []
discussions: []
---

# Inventario della documentazione - Tema Zero

Questa nota descrive la struttura reale di `laravel/Themes/Zero/docs/` al
2026-10-20 (aggiornata dalla story [docs-temi-audit-organizzazione](./stories/docs-temi-audit-organizzazione.story.md); i conteggi del 2026-10-08 sono nella story [zero-docs-health](./stories/zero-docs-health.story.md)). È un riferimento operativo: non sposta, rinomina o sostituisce i
documenti storici.

## Punti di ingresso

- [README](./README.md): entrypoint mantenuto per la navigazione umana.
- [Wiki index](./wiki/index.md): catalogo della conoscenza curata e caricata
  on-demand.
- [BMAD index](./bmad/00-index.md): guide, decisioni e artefatti di
  pianificazione del tema.
- [Changelog](./changelog.md): cronologia documentata.
- [Stories](./stories/): attività e audit incrementali.

## Struttura reale

| Percorso | Ruolo | Documenti Markdown |
|---|---|---:|
| `bmad/` | pianificazione, architettura, guide e report | 125 |
| `wiki/` | conoscenza curata, regole, how-to e fonti | 55 |
| `stories/` | storie operative e audit | 6 |
| `concepts/` | concetti specifici del tema | 1 |
| `skills/` | note sulle skill | 1 |
| `_archive/` | materiale storico non canonico (19 copie piu' l'indice [README](./_archive/README.md)) | 20 |
| root (`docs/`) | entrypoint, cronologia e due indici storici superseded (`index.md`, `index-pointer.md`) | 5 |

La directory `wiki/` contiene inoltre le aree `commands`, `comparisons`,
`concepts`, `decisions`, `entities`, `glossary`, `how-to`, `lint`, `memories`,
`overviews`, `queries`, `raw`, `reference`, `rules`, `screenshots`, `skills`,
`sources` e `summaries`. Alcune sono predisposte con `.gitkeep` e non hanno
ancora pagine.

## Stato dei controlli

Misurati il 2026-10-20 con `python3 -I`, `rg -P` e `find`, ogni zero confrontato con un caso positivo noto. Totale **213** file Markdown (210 al 2026-10-08, piu' `_archive/README.md`, la story `docs-temi-audit-organizzazione` e `index-pointer.md` al posto di `INDEX.md`).

- Front matter YAML leggibile, con `title` e `qmd`: **213/213**. Id duplicati: 0. Chiavi duplicate nel front matter: 0 (erano 3).
- Nomi: 0 con data o suffisso numerico (erano 5, tutte story); 0 coppie che differiscono solo per la maiuscola (erano 2: `bmad/readme.md`, `index.md`). Attenzione: `md-filenames.py check --paths` accetta solo file `.md`, con una cartella stampa `0` senza controllare niente.
- Marker di conflitto Git nei file committati: **0**. Nella copia di lavoro del 2026-10-20 ce ne sono in 4 file per un merge del repository del tema ancora aperto (vedi la story).
- Link relativi fuori dai blocchi di codice: **1.275** controllati, **448** non risolti (erano 1.223 e 515). Cause: 132 verso `docs/` di root del repository, 120 verso moduli esistenti con pagina assente, 67 verso moduli che non esistono qui (Performance, Sigma, Ptv, Rating, ...), 51 pagine del tema mai esistite o spostate, il resto cartelle, nomi ambigui e codice.
- File `superseded`: 7. File in `_archive/` con `canonical:`: 19. Pagine con nota di verifica per codice inesistente: 11.
- Gli entrypoint operativi `README.md`, `bmad/README.md`, `_archive/README.md`, `wiki/index.md`, `index-pointer.md` e `inventory.md` non hanno link locali non risolti.

## Regola per i prossimi incrementi

Usare `README.md`, `wiki/index.md` o `bmad/00-index.md` in base al tipo di
contenuto. Aggiungere una pagina nella directory più specifica già esistente,
aggiornare il relativo indice e lasciare `_archive/` immutato salvo una
richiesta esplicita di riconciliazione storica.
