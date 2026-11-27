---
<<<<<<< .merge_file_35tsCG
title: "ADR del tema Zero"
type: index
tags: [adr, decisioni, zero]
created: 2026-11-19
updated: 2026-11-24
---

# ADR del tema Zero

Zero e' il "vestito" pubblico: le sue decisioni dicono cosa resta **fuori** dal tema (classi PHP, modelli, logica) e come
il tema ospita comunque i widget dei moduli, come il login. Le decisioni di business restano negli ADR dei moduli.

**Quando leggerli:** prima di aggiungere una classe PHP al tema, una query in una Blade, o un form che esiste gia' come
widget di un modulo. Formato: [regola del canon](../../../../Modules/Xot/docs/rules/action-behavioral-contract.md).

## Decisioni

- [Nessuna classe PHP nel tema](theme-as-dress-no-php.md) — `app/` vuota; dati e interazioni arrivano da widget, Action e Cms dei moduli.
- [Auth con widget del modulo User](auth-pages-render-module-widgets-with-panel-css.md) — `LoginWidget` dentro il layout del tema, con il CSS compilato del pannello Filament.
=======
title: "ADR — Theme Zero"
type: index
owner: Zero
updated: 2026-11-24
qmd: "Theme Zero ADR architecture decision record MADR formato asset Vite symlink"
---

# ADR — Theme Zero

Un ADR del tema Zero registra una scelta difficile da invertire, sorprendente o frutto di un trade-off reale su struttura del tema, build degli asset e confini tra tema e moduli. Ogni affermazione ha un file di prova. Le decisioni di business restano negli ADR del modulo interessato. Template condiviso: [0000-template](../../../../Modules/Xot/docs/adr/0000-template.md).

## Formato MADR

Frontmatter (`title`, `type: decision`, `status`, `created`, `updated`, `decision-makers`, `module`, `qmd`) e sezioni nell'ordine: `## Contesto`, `## Driver della decisione`, `## Alternative scartate`, `## Decisione`, `## Conseguenze`, `## Conferma`. Nome file in kebab-case senza data né numero.

## ADR presenti

Elenco con stato: [INDEX.md](INDEX.md). Presente: [theme-assets-are-built-in-theme-and-served-by-symlink](0003-theme-assets-are-built-in-theme-and-served-by-symlink.md).
>>>>>>> .merge_file_qkoEo3
