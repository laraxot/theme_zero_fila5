---
<<<<<<< .merge_file_vlUAU3
title: "Contratti del tema Zero"
type: index
tags: [contracts, zero]
created: 2026-11-19
updated: 2026-11-24
---

# Contratti del tema Zero

Zero **non ha Action ne' classi PHP** (`app/` contiene solo `.gitkeep`, verificato da `tests/Unit/ThemeBoundariesTest.php`):
non promette comportamenti, quindi questa cartella non contiene contratti. E' l'unico indice della cartella (il vecchio
`INDEX.md`, con una riga «da scrivere», e' stato unito qui).

**Dove stanno i contratti applicativi:** nei moduli che il tema ospita, es. autenticazione e `LoginWidget`
(`Modules/User/docs/contracts/`), risoluzione delle pagine `[container0]` (`Modules/Cms/docs/contracts/`), consensi
(`Modules/Gdpr/docs/contracts/`).

**Quando leggere questa cartella:** mai per il tema in se'; se qualcuno aggiunge al tema una classe con effetti
collaterali, prima va rivisto l'[ADR](../adr/theme-as-dress-no-php.md), poi il contratto va qui nel formato del
[canon](../../../../Modules/Xot/docs/rules/action-behavioral-contract.md). Glossario del tema: [../glossary.md](../glossary.md).

## Contratti

Nessuno (il tema non ha Action).
=======
title: "Contratti — Theme Zero"
type: index
owner: Zero
updated: 2026-11-24
qmd: "Theme Zero contract presentation-contract assenti viste Blade anonime"
---

# Contratti — Theme Zero

Standard: [contract-authoring-standard](../../../../Modules/Xot/docs/contracts/contract-authoring-standard.md) (sezione «Contratti non-Action»).

## Stato

**Nessun contract in Zero.** Motivo: il tema non ha Action di dominio (`app/` contiene solo `.gitkeep`) e le sue superfici sono viste Blade anonime (`resources/views/components/layouts/*`, `components/blocks/*`, `pages/*`) senza classe PHP: un `presentation-contract` richiede `contract: <FQCN>` e un `@see` dalla classe, che qui non esistono. I contratti applicativi stanno nei moduli. Il vecchio segnaposto `BC-T01` («Render layout autenticato», «da scrivere») è stato rimosso dall'indice perché non descriveva comportamento implementato.

Se una vista del tema diventasse un componente con classe (`View\Components\...`), scrivere allora un `presentation-contract` con `type: presentation-contract` e `contract: <FQCN>`.

## File presenti

- [INDEX.md](INDEX.md): registro operativo e backlog
>>>>>>> .merge_file_Km8rl8
