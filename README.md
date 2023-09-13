![laravel-filament-components](https://github.com/ralphjsmit/laravel-filament-components/blob/main/docs/images/laravel-filament-components.jpg)

# A collection of reusable components for Filament.

This package is a collection of handy components for you to use in all your Filament projects. It provides handy components that can be used in almost any project, like sidebars, timestamps & more.

**PRs are welcome, so if you've made a handy component yourself, feel free to send a pull request!**

## Installation

You can install the package via composer:

```bash
composer require ralphjsmit/laravel-filament-components
```

## Usage

Currently, the following components are available:

1. [Sidebar](#sidebar)
2. [Timestamps](#timestamps)
3. [UpdatedAt](#updatedat)
4. [CreatedAt](#createdat)
5. [DeletedAt](#deletedat)
6. [Timestamp](#timestamp)

### Sidebar

You can use the `Sidebar` component to split the form into two distinct sections, like a sidebar:

```php
use RalphJSmit\Filament\Components\Forms\Sidebar;

Sidebar::make([
    // Components for the main section here
],[
    // Components for the sidebar section here
])
```

If you're using it in the Admin panel, you can use the `Sidebar` in your `form()` method:

```php
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use RalphJSmit\Filament\Components\Forms\Timestamps;
use RalphJSmit\Filament\Components\Forms\Sidebar;

public static function form(Form $form): Form
{
    return $form->schema([
        Sidebar::make([
            Section::make()->schema([
                TextInput::make('title')->label('Title'),
                // ...
            ]),
            // ...
        ], [
            Section::make()->schema([
                ...Timestamps::make(),
                // ...
            ]),
            // ...
        ]),
    ]);
}
```

Sidebars work very nicely with the Section component to define distinct and easily scannable sections in your interface.

## Timestamps

Use the `Timestamps` component to display a 'Created at' and 'Updated at' timestamp for your record:

```php
use RalphJSmit\Filament\Components\Forms\Timestamps;

return $form->schema([
    ...Timestamps::make(),
    //
]);
```

The `Timestamps` component returns an array with the `CreatedAt` and `UpdatedAt` components below, so you should use array spreading like in the example to merge the components into your own array.

## CreatedAt

Use the `CreatedAt` component to display the `created_at` timestamp for your record:

```php
use RalphJSmit\Filament\Components\Forms\CreatedAt;

return $form->schema([
    CreatedAt::make(),
    //
]);
```

## UpdatedAt

Use the `UpdatedAt` component to display the `updated_at` timestamp for your record:

```php
use RalphJSmit\Filament\Components\Forms\UpdatedAt;

return $form->schema([
    UpdatedAt::make(),
    //
]);
```

## DeletedAt

Use the `DeletedAt` component to display the `deleted_at` timestamp for your soft-delete record:

```php
use RalphJSmit\Filament\Components\Forms\DeletedAt;

return $form->schema([
    DeletedAt::make(),
    //
]);
```

## Timestamp

Use the `Timestamp` component to display a custom timestamp for your record. Internally, all of the above timestamps
use this component.

```php
use RalphJSmit\Filament\Components\Forms\Timestamp;

return $form->schema([
    Timestamp::make('email_verified_at'),
    //
]);
```

## General

🐞 If you spot a bug, please submit a detailed issue and I'll try to fix it as soon as possible.

🔐 If you discover a vulnerability, please review [our security policy](../../security/policy).

🙌 If you want to contribute, please submit a pull request. All PRs will be fully credited. If you're unsure whether I'd accept your idea, feel free to contact me!

🙋‍♂️ [Ralph J. Smit](https://ralphjsmit.com)
