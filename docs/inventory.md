---
title: "Inventario della documentazione — Tema Zero"
type: note
module: Zero
status: active
updated: "2026-10-08"
---

# Inventario della documentazione — Tema Zero

Questa nota descrive la struttura reale di `laravel/Themes/Zero/docs/` al
2026-10-08. È un riferimento operativo: non sposta, rinomina o sostituisce i
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
| `stories/` | storie operative e audit | 4 |
| `concepts/` | concetti specifici del tema | 1 |
| `skills/` | note sulle skill | 1 |
| `_archive/` | materiale storico non canonico | 19 |
| root (`docs/`) | entrypoint e cronologia | 4 |

La directory `wiki/` contiene inoltre le aree `commands`, `comparisons`,
`concepts`, `decisions`, `entities`, `glossary`, `how-to`, `lint`, `memories`,
`overviews`, `queries`, `raw`, `reference`, `rules`, `screenshots`, `skills`,
`sources` e `summaries`. Alcune sono predisposte con `.gitkeep` e non hanno
ancora pagine.

## Stato dei controlli

- Totale: **209** file Markdown.
- Marker di conflitto presenti: **95 file / 501 righe**. Sono concentrati
  soprattutto in documenti storici e in `bmad/`; questa nota non li risolve
  perché richiederebbe una riconciliazione contenutistica per file.
- Link relativi controllati: **1.406**.
- Target relativi non risolti: **964**, principalmente riferimenti ereditati
  da indici storici, percorsi di altri moduli e nomi mai presenti nella
  struttura corrente.
- Gli entrypoint operativi `README.md`, `inventory.md` e `wiki/index.md` non
  hanno link locali non risolti.

## Regola per i prossimi incrementi

Usare `README.md`, `wiki/index.md` o `bmad/00-index.md` in base al tipo di
contenuto. Aggiungere una pagina nella directory più specifica già esistente,
aggiornare il relativo indice e lasciare `_archive/` immutato salvo una
richiesta esplicita di riconciliazione storica.
