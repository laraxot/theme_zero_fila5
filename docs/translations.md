---
title: "Theme Zero — traduzioni"
type: concept
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero traduzioni lang pub_theme namespace it en de es navigation ui auth home blocks layout welcome parita chiavi nessuna stringa hardcoded"
merged_from:
  - bmad/translations.md
  - bmad/navigation-integration.md
  - bmad/navigation-translations.md
---

# Theme Zero — traduzioni

## Cosa vive qui

`lang/<locale>/` contiene solo stringhe che esistono perche' il tema le disegna. Namespace
nelle Blade: `__('pub_theme::<file>.<chiave>')`.

| File | Contenuto | Lingue |
|---|---|---|
| `auth.php` | pagina di login | it, en, de, es |
| `home.php` | home pubblica | it, en, de, es |
| `welcome.php` | pagina `index` | it, en, de, es |
| `blocks.php` | testi dei blocchi | it, en, de, es |
| `layout.php` | header/footer/meta | it, en, de, es |
| `navigation.php` | menu pubblico, `site_title` | it, en, de |
| `ui.php` | etichette condivise | it, en, de |

## Regole

1. Stringa di dominio (utente, team, grafico) → file del modulo; stringa di sola presentazione → qui.
2. `lang/*/navigation.php` del tema = menu del sito pubblico; non c'entra con
   `navigation.group` dei moduli (gruppi menu Filament). Il tema non definisce chiavi `.navigation`
   di Resource.
3. Stesse chiavi in tutte le lingue nello stesso commit; mai valore uguale alla chiave.
4. `navigation.site_title` e' un segnaposto neutro (il tema e' condiviso fra progetti): si
   sovrascrive a livello di progetto.

## Verifica

```bash
cd laravel
for f in auth home welcome blocks layout navigation ui; do for l in it en de es; do
  [ -f Themes/Zero/lang/$l/$f.php ] || echo "manca $l/$f"; done; done
```

## Insidie

- `es` manca di `navigation.php` e `ui.php`: le chiavi appaiono grezze in spagnolo.
