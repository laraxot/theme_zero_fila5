---
title: "Tema Zero - Tema Principale Laraxot PTVX"
type: documentation
tags: [theme, documentation, frontend, gestionale, ui]
created: 2026-06-05
updated: 2026-07-28
---

# 🎨 Tema Zero - Tema Principale Laraxot

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 5.x](https://img.shields.io/badge/Filament-5.x-blue.svg)](https://filamentphp.com/)
[![PHP 8.4](https://img.shields.io/badge/PHP-8.4-blueviolet.svg)](https://www.php.net/)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![DaisyUI](https://img.shields.io/badge/DaisyUI-v5-1FB881.svg)](https://daisyui.com/)

> **Tema Zero**: Tema principale e di default per applicazioni Laraxot PTVX, con gestionale integrato.

## 📋 Overview

Il tema **Zero** è il tema di default per l'ecosistema Laraxot PTVX, fornendo:

- **Gestionale integrato**: Dashboard e UI completamente funzionali
- **Layout standardizzato**: Componenti e layout per coerenza visiva
- **Design system**: Integrazione con UI Module e DaisyUI
- **Filament integration**: Pannelli amministrativi e risorse
- **Responsive design**: Mobile-first approach con Tailwind CSS

### Principi di Design

- **Coerenza**: Utilizza componenti standardizzati da UI Module
- **Accessibilità**: WCAG 2.1 AA compliance
- **Performance**: Ottimizzazione CSS/JS, lazy loading
- **Estensibilità**: Facilmente customizzabile per specifici layout

## 🏗️ Architettura

### Directory Structure

```
Themes/Zero/
├── app/
│   ├── Http/
│   │   └── Controllers/          # Controllers specifici tema
│   ├── View/
│   │   └── Components/           # Livewire components
│   ├── Filament/
│   │   ├── Pages/               # Custom pages
│   │   └── Widgets/             # Custom widgets
│   └── Providers/
│       └── ZeroThemeProvider.php
├── config/
│   └── theme.php                # Configurazione tema
├── resources/
│   ├── views/
│   │   ├── layouts/            # Layout principali
│   │   ├── components/         # Blade components
│   │   └── pages/              # Page templates
│   ├── css/
│   │   ├── app.css            # Tailwind + custom
│   │   └── theme-variables.css # CSS variables
│   └── js/
│       ├── app.js             # Bundle principale
│       └── alpine-components.js
├── routes/
│   ├── web.php                # Routes web pubbliche
│   └── filament.php           # Routes admin panel
├── lang/
│   └── it/
│       └── messages.php        # Traduzioni
├── docs/
│   ├── README.md              # Questo file
│   ├── components.md          # Componenti disponibili
│   ├── layout-guide.md        # Guide layout
│   ├── customization.md       # Guida customizzazione
│   └── wiki/                  # Knowledge base
├── stubs/
│   └── [Component stubs]
└── composer.json              # Dipendenze tema
```

## 🎯 Componenti Principali

### Layout Components

#### `app.blade.php`
Layout principale per tutte le pagine pubbliche.

```php
@extends('zero::layouts.app')

@section('content')
    <div class="container">
        <!-- Page content -->
    </div>
@endsection
```

#### `guest.blade.php`
Layout per pagine guest (login, register).

```php
@extends('zero::layouts.guest')

@section('content')
    <!-- Guest content -->
@endsection
```

#### `admin.blade.php`
Layout per panel amministrativo (integrato con Filament).

### Blade Components

Componenti riusabili per layout comuni:

```php
<x-zero::button>Clicca qui</x-zero::button>
<x-zero::card title="Titolo">Contenuto card</x-zero::card>
<x-zero::alert type="success">Messaggio di successo</x-zero::alert>
<x-zero::form-group label="Email">
    <input type="email" name="email" />
</x-zero::form-group>
```

### Filament Integration

#### Panel Configuration

```php
// app/Providers/Filament/AdminPanelProvider.php
use Filament\FilamentServiceProvider;

class AdminPanelProvider extends FilamentServiceProvider
{
    public function register()
    {
        $this->app['filament']->registerPanel(
            AdminPanel::make()
                ->id('admin')
                ->path('admin')
                ->theme('Zero')
        );
    }
}
```

#### Custom Pages

```php
namespace Themes\Zero\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'zero::filament.pages.dashboard';
}
```

## 🎨 Styling & Theming

### Tailwind CSS Configuration

```javascript
// tailwind.config.js
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './app/Http/Livewire/**/*.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: 'var(--color-primary)',
                secondary: 'var(--color-secondary)',
            },
        },
    },
    plugins: [require('daisyui')],
}
```

### CSS Variables

Definiti in `resources/css/theme-variables.css`:

```css
:root {
    --color-primary: #3b82f6;
    --color-secondary: #8b5cf6;
    --color-success: #10b981;
    --color-warning: #f59e0b;
    --color-danger: #ef4444;
}
```

## 🔗 Integrazioni Cross-Module

### UI Module
Utilizza componenti standardizzati:

```php
use Modules\UI\Components\Badge;
use Modules\UI\Components\Button;
use Modules\UI\Components\Alert;
```

### Xot Module
Estende base classes e trait:

```php
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Traits\HasXotTable;
```

### Activity Module
Traccia modifiche UI tramite Activity Log:

```php
activity('tema')
    ->performedOn($model)
    ->withProperties(['action' => 'page_visited'])
    ->log('User visited dashboard');
```

## 🚀 Utilizzo Comune

### Creare una Pagina Pubblica

```php
// routes/web.php
Route::get('/landing', function () {
    return view('zero::pages.landing');
});

// resources/views/pages/landing.blade.php
@extends('zero::layouts.app')

@section('content')
    <section class="hero">
        <h1>Benvenuto in Laraxot</h1>
        <p>Ecosistema modulare per applicazioni enterprise</p>
    </section>
@endsection
```

### Aggiungere un Widget Filament

```php
namespace Themes\Zero\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class SalesChart extends ChartWidget
{
    protected static ?string $heading = 'Vendite Mensili';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Vendite',
                    'data' => [12, 19, 3, 5, 2, 3],
                ],
            ],
            'labels' => ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
```

## 📦 Configurazione

### theme.php

```php
// config/theme.php
return [
    'name' => 'Zero',
    'version' => '1.0.0',
    'colors' => [
        'primary' => '#3b82f6',
        'secondary' => '#8b5cf6',
    ],
    'fonts' => [
        'sans' => 'Inter, sans-serif',
        'mono' => 'Fira Code, monospace',
    ],
];
```

### Registrazione Provider

```php
namespace Themes\Zero\Providers;

class ZeroThemeProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'zero');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}
```

## 🧪 Testing

```bash
# Unit tests per componenti
php artisan test Themes/Zero/Tests/Unit

# Feature tests per routes
php artisan test Themes/Zero/Tests/Feature

# Visual regression testing
npm run test:visual
```

## 🐛 Troubleshooting

### Stili non caricati
1. Ricompilare Tailwind: `npm run build`
2. Cache clear: `php artisan view:clear`
3. Verificare percorsi in `tailwind.config.js`

### Componenti non trovati
1. Verificare namespace: `Themes\Zero` vs `zero::`
2. Controllare che views siano caricate nel provider
3. Verificare case-sensitivity (Linux!)

## 📊 Repository

**GitHub Remote:** `laraxot/theme_zero_fila5`

```bash
cd laravel/Themes/Zero
git remote -v  # Verificare che sia corretto
```

> ⚠️ **CRITICAL:** Non usare `base_techplanner` / `base_workorder` per Zero. Consultare [code-quality-improvement-report.md](./code-quality-improvement-report.md).

## 📚 Documentazione Aggiuntiva

- [Componenti Disponibili](./components.md)
- [Guide Layout](./layout-guide.md)
- [Guida Customizzazione](./customization.md)
- [Performance Optimization](./performance.md)

## 📖 Vedi anche

- [Tema One](../One/docs/README.md) — Tema alternativo
- [Tema Three](../Three/docs/README.md) — Tema sperimentale
- [UI Module](../../Modules/UI/docs/README.md) — Componenti
- [Xot Module](../../Modules/Xot/docs/README.md) — Framework base
- [Filament Documentation](https://filamentphp.com/)
- [DaisyUI Documentation](https://daisyui.com/)

## 📄 License & Authors

**Authors:**
- Marco Sottana <marco.sottana@gmail.com>

**License:** MIT

---

**Last Updated:** 2026-07-28 — Documentazione aggiornata a standard EXCELLENT
