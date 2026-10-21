---
title: "Inventario della documentazione - Tema Zero"
type: note
module: Zero
status: active
<<<<<<< HEAD
updated: "2026-10-08"
=======
updated: "2026-10-20"
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
2026-10-08. È un riferimento operativo: non sposta, rinomina o sostituisce i
=======
2026-10-20 (aggiornata dalla story [docs-temi-audit-organizzazione](./stories/docs-temi-audit-organizzazione.story.md); i conteggi del 2026-10-08 sono nella story [zero-docs-health](./stories/zero-docs-health.story.md)). È un riferimento operativo: non sposta, rinomina o sostituisce i
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
| `stories/` | storie operative e audit | 5 |
| `concepts/` | concetti specifici del tema | 1 |
| `skills/` | note sulle skill | 1 |
| `_archive/` | materiale storico non canonico | 19 |
| root (`docs/`) | entrypoint e cronologia | 4 |
=======
| `stories/` | storie operative e audit | 6 |
| `concepts/` | concetti specifici del tema | 1 |
| `skills/` | note sulle skill | 1 |
| `_archive/` | materiale storico non canonico (19 copie piu' l'indice [README](./_archive/README.md)) | 20 |
| root (`docs/`) | entrypoint, cronologia e due indici storici superseded (`index.md`, `index-pointer.md`) | 5 |
>>>>>>> laraxot/dev

La directory `wiki/` contiene inoltre le aree `commands`, `comparisons`,
`concepts`, `decisions`, `entities`, `glossary`, `how-to`, `lint`, `memories`,
`overviews`, `queries`, `raw`, `reference`, `rules`, `screenshots`, `skills`,
`sources` e `summaries`. Alcune sono predisposte con `.gitkeep` e non hanno
ancora pagine.

## Stato dei controlli

<<<<<<< HEAD
Misurati a fine sessione del 2026-10-08 con le classi di `bashscripts/quality-gates/audit-module-docs.sh` applicate alla sola cartella Zero.

- Totale: **210** file Markdown.
- Front matter completo (`id`, `slug`, `title`, `description`, `document_type`, `category`, `status`): **210/210**. All'inizio della sessione 0/209 (25 senza front matter, 184 incompleti).
- Marker di conflitto Git: **0 file**. All'inizio 95 file / 501 righe: 65 file risolti per intero da questa sessione senza perdita (un lato vuoto o lati identici), piu' i blocchi banali di altri 7; i 30 file rimasti, con lati divergenti o annidati, sono stati risolti scegliendo un lato da un altro attore.
- Link relativi: **1.215** controllati, **509** non risolti. All'inizio 1.406 e 968. Cause: percorsi di altri moduli, nomi ambigui, file mai esistiti.
- File `superseded`: 6. File in `_archive/` con `canonical:`: 19. Id duplicati: 0.
- Gli entrypoint operativi `README.md`, `bmad/README.md`, `inventory.md` e `wiki/index.md` non hanno link locali non risolti.
=======
Misurati il 2026-10-20 con `python3 -I`, `rg -P` e `find`, ogni zero confrontato con un caso positivo noto. Totale **213** file Markdown (210 al 2026-10-08, piu' `_archive/README.md`, la story `docs-temi-audit-organizzazione` e `index-pointer.md` al posto di `INDEX.md`).

- Front matter YAML leggibile, con `title` e `qmd`: **213/213**. Id duplicati: 0. Chiavi duplicate nel front matter: 0 (erano 3).
- Nomi: 0 con data o suffisso numerico (erano 5, tutte story); 0 coppie che differiscono solo per la maiuscola (erano 2: `bmad/readme.md`, `index.md`). Attenzione: `md-filenames.py check --paths` accetta solo file `.md`, con una cartella stampa `0` senza controllare niente.
- Marker di conflitto Git nei file committati: **0**. Nella copia di lavoro del 2026-10-20 ce ne sono in 4 file per un merge del repository del tema ancora aperto (vedi la story).
- Link relativi fuori dai blocchi di codice: **1.275** controllati, **448** non risolti (erano 1.223 e 515). Cause: 132 verso `docs/` di root del repository, 120 verso moduli esistenti con pagina assente, 67 verso moduli che non esistono qui (Performance, Sigma, Ptv, Rating, ...), 51 pagine del tema mai esistite o spostate, il resto cartelle, nomi ambigui e codice.
- File `superseded`: 7. File in `_archive/` con `canonical:`: 19. Pagine con nota di verifica per codice inesistente: 11.
- Gli entrypoint operativi `README.md`, `bmad/README.md`, `_archive/README.md`, `wiki/index.md`, `index-pointer.md` e `inventory.md` non hanno link locali non risolti.
>>>>>>> laraxot/dev

## Regola per i prossimi incrementi

Usare `README.md`, `wiki/index.md` o `bmad/00-index.md` in base al tipo di
contenuto. Aggiungere una pagina nella directory più specifica già esistente,
aggiornare il relativo indice e lasciare `_archive/` immutato salvo una
richiesta esplicita di riconciliazione storica.
