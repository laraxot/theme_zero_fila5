# Zero: il tema che trasforma complessita in vantaggio operativo

[![Module](https://img.shields.io/badge/Module-Zero: il tema che trasforma complessita in vantaggio operativo-8B0000.svg)]()
[![Laravel 12](https://img.shields.io/badge/Laravel-12-red.svg)](https://laravel.com/)
[![Filament 5](https://img.shields.io/badge/Filament-5-ffab00.svg)](https://filamentphp.com/)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4+-777BB4.svg)](https://php.net/)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![PSR-12](https://img.shields.io/badge/Code-PSR--12-blue.svg)](https://www.php-fig.org/psr/psr-12/)
[![Architecture-Modular](https://img.shields.io/badge/Architecture-Modular-purple.svg)]()
[![FixCity Platform](https://img.shields.io/badge/Platform-FixCity-008758.svg)]()

> **Core module for the FixCity Platform.**

## Perché esiste

Core module for the FixCity Platform.

Questo tema non e solo codice: e una vetrina operativa. Mostra dove intervenire, cosa leggere, come rilasciare e come mantenere alta la confidenza tecnica.

## Release automation

- Workflow: [Semantic Release](./.github/workflows/semantic-release.yml)
- Config: [.releaserc.json](./.releaserc.json)
- Changelog: [changelog.md](./changelog.md)


## Documentazione tecnica

- [Indice docs](./docs/README.md) — mappa knowledge base locale (wiki, audit, regole)

## Documentazione essenziale

- [Second brain locale](./docs/wiki/index.md)
- [Audit ridondanza](./docs/code-redundancy-audit.md)
- [Protocollo confidenza](./docs/agent-confidence-protocol.md)
- [Disciplina agenti](./docs/agent-edit-discipline.md)
- [00 Index](./docs/00-index.md)
- [Conflict Resolution Summary](./docs/conflict-resolution-summary.md)
- [Accessor Delegation Pattern](./docs/accessor-delegation-pattern.md)
- [Ai Development Guide](./docs/ai-development-guide.md)
- [Ai Handoff](./docs/ai-handoff.md)
- [Analisi Completa Tema](./docs/analisi-completa-tema.md)

## Scopo e confini

Zero è il guscio pubblico del portale: il markup di pagina, i token di stile e la
pipeline che li compila. È l'unico dei tre temi con una build vera (`vite.config.js`,
`tailwind.config.js`, `postcss.config.js`, `package.json`) ed è quello che gli host di
produzione selezionano (`pub_theme` e `adm_theme` = `Zero` in
`config/local/tv/prov/personale2022/xra.php` e `personale2019`). Non contiene PHP:
`app/` ha solo `.gitkeep`. Due confini rotti misurati il 2026-09-02: gli asset
compilati finiscono in `Themes/Zero/public/` e nessuno li copia in
`public_html/themes/Zero`, che infatti non esiste; e le tre pagine sotto
`resources/views/pages/` non sono montate da alcun `Folio::path`.

Misure e cinque mosse concrete: [`docs/scopo.md`](./docs/scopo.md).

## Filosofia

Scopo prima del codice. DRY prima dell'orgoglio. KISS prima dell'astrazione. La release automatica non sostituisce il giudizio: lo rende tracciabile.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# base_healthcare_app_fila5_mono
# healthcare_app Fila3 Mono Project

## Overview

healthcare_app Fila3 Mono is a comprehensive Laravel-based modular application built on the Laraxot framework. This project implements a complete authorization system with policies for all models across all modules.

## Key Features

- **Modular Architecture**: Built using Laravel Modules for clean separation of concerns
- **Comprehensive Authorization**: Complete policy system for all models
- **Automatic Policy Registration**: Policies are automatically discovered and registered
- **Multi-Tenant Support**: Full multi-tenancy with tenant-aware policies
- **Filament Integration**: Modern admin panel with policy-aware interfaces

## Documentazione

| Lingua | Link |
|--------|------|
| 🇮🇹 Presentazione | Questo file (`README.md`) |
| 🇬🇧 Business card | [docs/readme-en.md](./docs/readme-en.md) |
| 📚 Wiki tecnica | [./docs/wiki/](./docs/) |

---

**Modulo** `Zero` · **Laraxot** · **FixCity Platform** · PHPStan 10 · Filament 5
