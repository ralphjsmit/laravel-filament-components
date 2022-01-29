# A collection of reusable components for Filament.

This packages is a collection of handy components for you to use in all your Filament projects. It provides handy components that can be used in almost any project, like sidebars, timestamps & more.

## Installation

You can install the package via composer:

```bash
composer require ralphjsmit/laravel-filament-components
```

## Usage

Currently, the following components are available:

1. [Sidebar](#sidebar)
2. [Timestamps](#timestamps)
3. [UpdatedAt](#updated_at)
4. [CreatedAt](#created_at)

### Sidebar

You can use the `Sidebar` component to split the form into two distinct sections, like a sidebar:

```php
use RalphJSmit\Filament\Components\Forms\Sidebar;

Sidebar::new()->schema([
    // Components for the main section here
],[
    // Components for the sidebar section here
])->getSchema()[0]
```

If you're using it in the Admin panel, you can directly return the `Sidebar` component from the `form()` in your resource:

```php
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use RalphJSmit\Filament\Components\Forms\Timestamps;
use RalphJSmit\Filament\Components\Forms\Sidebar;

public static function form(Form $form): Form
{
    return Sidebar::new($form)->schema([
        Card::new([
            TextInput::make('title')->label('Title'),
            // ...
        ]),
        // ...
    ], [
        Card::new([
            Timestamps::new(),
            // ...
        ]),
        // ...
    ]);
}
```

Sidebars work very nicely with the card component to define distinct and easily scannable sections in your interface.

## Timestamps

Use the `Timestamps` component to display a 'Created at' and 'Updated at' timestamp for your record:

```php
use RalphJSmit\Filament\Components\Forms\Timestamps;

return $form->schema([
    ...Timestamps::new(),
    //
]);
```

The `Timestamps` component returns an array with the `CreatedAt` and `UpdatedAt` components below, so you should use array spreading like in the example to merge the components into your own array.

## CreatedAt

Use the `CreatedAt` component to display the 'Created at' timestamp for your record:

```php
use RalphJSmit\Filament\Components\Forms\CreatedAt;

return $form->schema([
    CreatedAt::new(),
    //
]);
```

## UpdatedAt

Use the `UpdatedAt` component to display the 'Created at' timestamp for your record:

```php
use RalphJSmit\Filament\Components\Forms\UpdatedAt;

return $form->schema([
    UpdatedAt::new(),
    //
]);
```

## General

🐞 If you spot a bug, please submit a detailed issue and I'll try to fix it as soon as possible.

🔐 If you discover a vulnerability, please review [our security policy](../../security/policy).

🙌 If you want to contribute, please submit a pull request. All PRs will be fully credited. If you're unsure whether I'd accept your idea, feel free to contact me!

🙋‍♂️ [Ralph J. Smit](https://ralphjsmit.com)
