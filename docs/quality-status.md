---
title: "Theme Zero — stato qualita' e gate"
type: audit
theme: Zero
status: active
updated: 2026-11-25
qmd: "zero qualita phpstan gate laravel/phpstan.neon solo Modules no probe phpmd phpinsights test pest ThemeBoundariesTest dry kiss metodi duplicati omonimi ridondanza completamento"
merged_from:
  - bmad/phpstan.md
  - phpstan.md
  - bmad/phpstan-compliance-status.md
  - bmad/phpstan-dry-kiss-theme-guidelines.md
  - phpstan-dry-kiss-guidelines.md
  - bmad/phpstan-level10-analysis.md
  - bmad/phpstan-level10-theme-compliance.md
  - bmad/phpstan-merge-conflicts.md
  - phpstan-merge-conflicts.md
  - bmad/no-phpstan-probe-policy.md
  - bmad/php-quality-gates-rule.md
  - php-quality-gates-rule.md
  - bmad/quality-audit.md
  - bmad/quality-roadmap.md
  - bmad/code-quality-improvement-report.md
  - bmad/code-quality-improvements.md
  - bmad/code-quality-report.md
  - bmad/code-redundancy-audit.md
  - bmad/dry-kiss-analysis.md
  - bmad/dry-kiss-best-practices.md
  - bmad/duplicate-methods.md
  - wiki/concepts/duplicate-method-bodies.md
  - wiki/concepts/method-name-homonyms.md
  - wiki/concepts/php-method-name-homonyms-theme-impact.md
  - wiki/concepts/code-redundancy-theme.md
  - wiki/summaries/cosa-migliorare.md
  - completion-status.md
  - project-completion-gaps.md
  - bmad/docs-confidence-audit.md
  - wiki/concepts/ponytail-audit.md
---

# Theme Zero — stato qualita' e gate

## Misura (2026-11-25)

| Indicatore | Valore |
|---|---:|
| Blade (fuori `docs/`) | 25 |
| PHP in `app/` | 0 (solo `.gitkeep`) |
| File lingua PHP | 26 |
| Test | 1 file: `tests/Unit/ThemeBoundariesTest.php` (2 casi, sorgente senza app) |
| TODO/FIXME in `resources/`, `lang/` | 0 |
| Metodi duplicati / omonimi | 0 (nessuna classe) |

Le note storiche "PHPStan level 10, 0 errori, PHPInsights 100%" sono vere ma non misurano nulla:
il tema non ha classi.

## Gate

```bash
cd laravel
php -d memory_limit=2G ./vendor/bin/phpstan analyse          # solo laravel/phpstan.neon, paths = Modules/
./vendor/bin/pest Themes/Zero/tests                           # test di confine, senza DB
php artisan view:cache                                        # compila le Blade del tema
```

- Un solo neon: `laravel/phpstan.neon`, lo modifica solo l'umano. Vietati neon/json PHPStan nel
  tema, `analyse Themes` da solo, `--level`, baseline, probe (`app/Phpstan`,
  `*PhpstanProbeModel.php`).
- PHPMD va puntato su `app/`, non sulla root (una classe anonima nei test fa abortire e stampa 0).

## Ridondanza con One

One e Zero condividono `@livewire(LoginWidget)` e `blocks/links/grid` (md5 identico, anche in
Three). Due temi non sono duplicati sbagliati se servono UX diverse; lo diventano quando il diff
e' zero e nessuno documenta perche'. Candidato: partial comune del login se il markup converge.

## Cosa manca

- Coverage mai misurata (ha senso solo per i test di confine).
- Verifica a runtime della catena build → symlink → `@vite` (vedi [frontend-build](./frontend-build.md)).
- Coerenza layout login (vedi [authentication](./authentication.md#insidie-note)).

## Insidie

- Tree fermo e `vendor/` completo prima di fidarsi di un numero (autoloader dimezzato = misure false, set. 2026).
- Il DB di test remoto puo' essere irraggiungibile: test saltati non sono test verdi.
