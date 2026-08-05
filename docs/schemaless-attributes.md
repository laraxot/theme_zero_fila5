<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 099e856 (sync)
=======
>>>>>>> 2cb7d4f (.)
---
title: "🧬 Schemaless Attributes in Themes"
type: rule
tags: ['filament', 'permission']
created: 2026-07-14
updated: 2026-07-14
qmd: "schemaless attributes in themes"
related:
  - "./00-INDEX.md"
  - "./00-index.md"
---

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2cb7d4f (.)
# 🧬 Schemaless Attributes in Themes

**Status:** ✅ STANDARD
**Central Reference:** [Xot Schemaless Guide](../../../laravel/Modules/Xot/docs/spatie-schemaless-attributes.md)
<<<<<<< HEAD
=======
=======
>>>>>>> 11674ce (.)
# 🧬 Schemaless Attributes in Themes

**Status:** ✅ STANDARD
**Central Reference:** [Xot Schemaless Guide](../../Modules/Xot/docs/spatie-schemaless-attributes.md)
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
# 🧬 Schemaless Attributes in Themes

**Status:** ✅ STANDARD
**Central Reference:** [Xot Schemaless Guide](../../../laravel/Modules/Xot/docs/spatie-schemaless-attributes.md)
>>>>>>> 099e856 (sync)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)

---

## 🎨 Usage in Themes

Themes can use models that implement Schemaless Attributes (e.g., `Profile`, `Extra`).

### Safe Access in Blade Views

```blade
{{-- ✅ CORRECT — with default value --}}
{{ $model->extra_attributes->get('color', 'default-blue') }}

{{-- ✅ CORRECT — null-safe check --}}
@if($model->extra_attributes?->get('show_banner'))
    <div class="banner">...</div>
@endif

{{-- ❌ RISKY — may throw on null --}}
{{ $model->extra_attributes->color }}
```

### Safe Access in Livewire Components

```php
// ✅ Type-safe in component
/** @var string $theme */
$theme = $profile->extra_attributes->get('theme', 'zero');

// ✅ Check before use
$preferences = $profile->extra_attributes->get('user_preferences', []);
if (is_array($preferences)) {
    // use preferences
}
```

### Forms with Schemaless Attributes

```php
// Filament Form — dot notation for nested JSON
TextInput::make('extra_attributes.custom_setting')
    ->label(__('Custom Setting'));

// Set in action
$record->extra_attributes->set('custom_setting', $data['custom_setting']);
$record->save();
```

---

## Key Rules

1. **Always use `->get('key', default)`** — never dynamic property access
2. **Always call `->save()`** after setting attributes
3. **Type-check values** before using them in views
4. **Use defaults** for all optional attributes

---

## References

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Xot Schemaless Guide](../../../laravel/Modules/Xot/docs/spatie-schemaless-attributes.md)
- [UI Themes Detailed Guide](../../../laravel/Modules/UI/docs/themes/schemaless-attributes-guide.md)
- [Rating Schemaless Docs](../../../laravel/Modules/Rating/docs/schemaless-attributes.md)
=======
- [Xot Schemaless Guide](../../Modules/Xot/docs/spatie-schemaless-attributes.md)
- [UI Themes Detailed Guide](../../Modules/UI/docs/themes/schemaless-attributes-guide.md)
- [Rating Schemaless Docs](../../Modules/Rating/docs/schemaless-attributes.md)
>>>>>>> 11674ce (.)
=======
- [Xot Schemaless Guide](../../../laravel/Modules/Xot/docs/spatie-schemaless-attributes.md)
- [UI Themes Detailed Guide](../../../laravel/Modules/UI/docs/themes/schemaless-attributes-guide.md)
- [Rating Schemaless Docs](../../../laravel/Modules/Rating/docs/schemaless-attributes.md)
>>>>>>> 099e856 (sync)
=======
- [Xot Schemaless Guide](../../../laravel/Modules/Xot/docs/spatie-schemaless-attributes.md)
- [UI Themes Detailed Guide](../../../laravel/Modules/UI/docs/themes/schemaless-attributes-guide.md)
- [Rating Schemaless Docs](../../../laravel/Modules/Rating/docs/schemaless-attributes.md)
>>>>>>> 2cb7d4f (.)
=======
- [Xot Schemaless Guide](../../Modules/Xot/docs/spatie-schemaless-attributes.md)
- [UI Themes Detailed Guide](../../Modules/UI/docs/themes/schemaless-attributes-guide.md)
- [Rating Schemaless Docs](../../Modules/Rating/docs/schemaless-attributes.md)
>>>>>>> 11674ce (.)
