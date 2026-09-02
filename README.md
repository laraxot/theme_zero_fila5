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

## Superpoteri

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

### Content Management
- **Cms**: Content management system with pages, menus, and sections
- **Media**: File and media management
- **FormBuilder**: Dynamic form creation and management

### Geographic and Location
- **Geo**: Geographic data management (countries, regions, cities, addresses)
- **Tenant**: Multi-tenant architecture support

### Survey and Analytics
- **healthcare_app**: Survey management and analytics
- **Limesurvey**: Integration with LimeSurvey platform
- **Chart**: Data visualization and charting

### Workflow and Processing
- **Job**: Background job management and scheduling
- **Activity**: Activity logging and tracking
- **Notify**: Notification system

### Additional Modules
- **CloudStorage**: Cloud storage integration
- **DbForge**: Database schema management
- **Gdpr**: GDPR compliance tools
- **Lang**: Internationalization and translation management
- **Setting**: Application configuration management

## Policy System

### Automatic Registration
All policies are automatically discovered and registered through the `XotBaseServiceProvider`. Each module scans its models and registers corresponding policies.

### Policy Structure
Each module has its own base policy class:
```php
abstract class ModuleNameBasePolicy
{
    use HandlesAuthorization;

    public function before(UserContract $user, string $ability): ?bool
    {
        if ($user->hasRole('super-admin')) {
            return true;
        }
        return null;
    }
}
```

### Permission Naming
Consistent permission naming across all modules:
- `model_name.viewAny` - View any records
- `model_name.view` - View specific record
- `model_name.create` - Create new records
- `model_name.update` - Update records
- `model_name.delete` - Delete records
- `model_name.restore` - Restore soft-deleted records
- `model_name.forceDelete` - Permanently delete records

## Installation

1. Clone the repository
2. Install dependencies: `composer install`
3. Configure environment variables
4. Run migrations: `php artisan migrate`
5. Seed permissions and roles: `php artisan db:seed`

## Usage

### Policy Usage in Controllers
```php
public function show(Model $model)
{
    $this->authorize('view', $model);
    return view('model.show', compact('model'));
}
```

### Policy Usage in Blade
```blade
@can('update', $model)
    <a href="{{ route('model.edit', $model) }}">Edit</a>
@endcan
```

### Policy Usage in Filament
```php
Tables\Actions\EditAction::make()
    ->visible(fn ($record) => auth()->user()->can('update', $record))
```

## Development Guidelines

### Code Quality
- PHPStan Level 10 compliance required
- Strict type declarations in all files
- Comprehensive PHPDoc for all methods
- Follow PSR-12 coding standards

### Policy Development
- Extend appropriate base policy class
- Implement all standard CRUD methods
- Use permission-based authorization
- Consider model ownership and relationships
- Include comprehensive tests

### Module Development
- Follow Laraxot module structure
- Implement policies for all models
- Use proper namespace conventions
- Maintain comprehensive documentation

## Security

### Authorization
- All access controlled through policies
- Permission-based system with role hierarchy
- Super admin override for all policies
- Default deny approach for security

### Multi-Tenancy
- Tenant-aware policies
- Data isolation between tenants
- Tenant-specific permissions

## Documentation

- [Policy Implementation Guide](docs/policies_implementation.md)
- [User Module Documentation](../../Modules/User/docs/README.md)
- [Module-specific documentation in each module's docs folder]

## Contributing

1. Follow the established coding standards
2. Implement policies for all new models
3. Add comprehensive tests
4. Update documentation
5. Ensure PHPStan Level 10 compliance

## License

This project is proprietary software. All rights reserved.

## Support

For support and questions, please refer to the project documentation or contact the development team.

*Last updated: January 2025*
# base_healthcare_app_fila5_mono
