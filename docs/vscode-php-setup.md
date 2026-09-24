# Configurazione VSCode per PHP e Filament

## Estensioni Essenziali

### 1. PHP
- PHP Intelephense
- PHP Debug
- PHP DocBlocker
- PHP Namespace Resolver
- PHP Constructor
- Better PHPUnit

### 2. Filament
- Filament PHP
- Laravel Blade Formatter
- Laravel Blade Snippets
- Laravel Extra Intellisense

### 3. Utilità
- Git Lens
- Git History
- EditorConfig
- DotENV
- Error Lens

## Configurazione PHP

```json
// settings.json
{
    // PHP Intelephense
    "intelephense.files.maxSize": 5000000,
    "intelephense.environment.phpVersion": "8.2",
    "intelephense.completion.insertUseDeclaration": true,
    "intelephense.completion.fullyQualifyGlobalConstantsAndFunctions": false,
    "intelephense.trace.server": "messages",
    "intelephense.diagnostics.undefinedTypes": false,
    "intelephense.diagnostics.undefinedFunctions": false,
    "intelephense.diagnostics.undefinedConstants": false,
    "intelephense.diagnostics.undefinedClassConstants": false,
    "intelephense.diagnostics.undefinedMethods": false,
    "intelephense.diagnostics.undefinedProperties": false,
    "intelephense.diagnostics.undefinedVariables": false,

    // PHP DocBlocker
    "php-docblocker.useShortNames": true,
    "php-docblocker.qualifyClassNames": true,
    "php-docblocker.author": {
        "name": "il progetto Team",
        "email": "dev@<nome progetto>.com"
    },

    // PHP Format
    "php.suggest.basic": false,
    "php.validate.enable": false,
    "[php]": {
        "editor.defaultFormatter": "bmewburn.vscode-intelephense-client",
        "editor.formatOnSave": true,
        "editor.formatOnPaste": true,
        "editor.codeActionsOnSave": {
            "source.fixAll.php": true
        }
    }
}
```

## Configurazione Filament

```json
// settings.json
{
    // Filament Plugin
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top",

    // Blade
    "[blade]": {
        "editor.defaultFormatter": "shufo.vscode-blade-formatter",
        "editor.formatOnSave": true
    },
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
}
```

## Snippets Personalizzati

```json
// filament.code-snippets
{
    "Filament Resource": {
        "prefix": "fil-resource",
        "body": [
            "<?php",
            "",
            "namespace ${1:Namespace};",
            "",
            "use Modules\\\\Xot\\\\Filament\\\\Resources\\\\XotBaseResource;",
            "use Filament\\\\Forms;",
            "use Filament\\\\Tables;",
            "",
            "class ${2:Name}Resource extends XotBaseResource",
            "{",
            "    protected static ?string \\$model = ${2:Name}::class;",
            "",
            "    public static function getFormSchema(): array",
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
            "    public function getFormSchema(): array",
=======
<<<<<<< HEAD
=======
            "    public function getFormSchema(): array",
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            "    public function getFormSchema(): array",
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            "    {",
            "        return [",
            "            $0",
            "        ];",
            "    }",
            "}",
            ""
        ]
    }
}
```

## Debug Configuration

```json
// launch.json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
<<<<<<< HEAD
<<<<<<< HEAD
                "/ tasks.json
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                "/ tasks.json
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                "/ tasks.json
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> .merge_file_Zi4meD
                "/var/www/html/base_<nome progetto>": "${workspaceFolder}"
            }
        }
    ]
}
```

## Tasks Personalizzati

```json
// tasks.json
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
                "/ tasks.json
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                "/ tasks.json
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                "/ tasks.json
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
                "/ tasks.json
>>>>>>> 0dadab4 (Lint)
{
    "version": "2.0.0",
    "tasks": [
        {
            "label": "Run PHPUnit Test",
            "type": "shell",
            "command": "./vendor/bin/phpunit ${file}",
            "group": {
                "kind": "test",
                "isDefault": true
            },
            "presentation": {
                "reveal": "always",
                "panel": "new"
            }
        }
    ]
}
```

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_Zi4meD
## Tasks Personalizzati
```json
// tasks.json
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
## Tasks Personalizzati
```json
// tasks.json
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
## Best Practices

### 1. Organizzazione Workspace
```plaintext
.vscode/
├── settings.json
├── launch.json
├── tasks.json
└── snippets/
    ├── php.code-snippets
    └── filament.code-snippets
```

### 2. Keybindings Consigliati
```json
// keybindings.json
[
    {
        "key": "ctrl+shift+i",
        "command": "namespaceResolver.import",
        "when": "editorTextFocus"
    },
    {
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
        "when": "editorTextFocus"
    }
]
```

### 3. Workspace Esclusioni
```json
// settings.json
{
    "files.exclude": {
        "vendor/": true,
        "node_modules/": true,
        ".phpunit.cache/": true,
        "bootstrap/cache/": true
    },
    "search.exclude": {
        "vendor/": true,
        "node_modules/": true
    }
}
```

## Troubleshooting

### 1. Performance
- Disabilita estensioni non necessarie
- Aumenta memoria disponibile per VSCode
- Usa workspace esclusioni

### 2. Debug
- Verifica configurazione Xdebug
- Controlla mappatura path
- Usa Error Lens per debug visuale

### 3. Intellisense
- Rigenera index Intelephense
- Verifica configurazione namespace
- Controlla file composer.json

## Collegamenti
- [VSCode Filament Plugin](vscode-filament-plugin.md)
- [Development Tools](development-tools.md)
- [Coding Standards](coding-standards.md)

## Vedi Anche
- [VSCode Documentation](https://code.visualstudio.com/docs)
- [PHP Intelephense](https://intelephense.com)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
- [Filament Documentation](https://filamentphp.com/docs)
# Configurazione VSCode per PHP e Filament
<<<<<<< HEAD
## Estensioni Essenziali
=======

## Estensioni Essenziali

<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- [Filament Documentation](https://filamentphp.com/docs) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Filament Documentation](https://filamentphp.com/docs) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Filament Documentation](https://filamentphp.com/docs) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Filament Documentation](https://filamentphp.com/docs)
# Configurazione VSCode per PHP e Filament
## Estensioni Essenziali
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
- [Filament Documentation](https://filamentphp.com/docs)
# Configurazione VSCode per PHP e Filament

## Estensioni Essenziali

>>>>>>> 0dadab4 (Lint)
### 1. PHP
- PHP Intelephense
- PHP Debug
- PHP DocBlocker
- PHP Namespace Resolver
- PHP Constructor
- Better PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 2. Filament
- Filament PHP
- Laravel Blade Formatter
- Laravel Blade Snippets
- Laravel Extra Intellisense
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 3. Utilità
- Git Lens
- Git History
- EditorConfig
- DotENV
- Error Lens
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

## Configurazione PHP

=======
<<<<<<< HEAD
## Configurazione PHP
=======
<<<<<<< HEAD

## Configurazione PHP

=======
## Configurazione PHP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Configurazione PHP
=======

## Configurazione PHP

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

## Configurazione PHP

>>>>>>> 0dadab4 (Lint)
```json
// settings.json
{
    // PHP Intelephense
    "intelephense.files.maxSize": 5000000,
    "intelephense.environment.phpVersion": "8.2",
    "intelephense.completion.insertUseDeclaration": true,
    "intelephense.completion.fullyQualifyGlobalConstantsAndFunctions": false,
    "intelephense.trace.server": "messages",
    "intelephense.diagnostics.undefinedTypes": false,
    "intelephense.diagnostics.undefinedFunctions": false,
    "intelephense.diagnostics.undefinedConstants": false,
    "intelephense.diagnostics.undefinedClassConstants": false,
    "intelephense.diagnostics.undefinedMethods": false,
    "intelephense.diagnostics.undefinedProperties": false,
    "intelephense.diagnostics.undefinedVariables": false,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    // PHP DocBlocker
    "php-docblocker.useShortNames": true,
    "php-docblocker.qualifyClassNames": true,
    "php-docblocker.author": {
        "name": "il progetto Team",
        "email": "dev@<nome progetto>.com"
    },
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    // PHP Format
    "php.suggest.basic": false,
    "php.validate.enable": false,
    "[php]": {
        "editor.defaultFormatter": "bmewburn.vscode-intelephense-client",
        "editor.formatOnSave": true,
        "editor.formatOnPaste": true,
        "editor.codeActionsOnSave": {
            "source.fixAll.php": true
        }
    }
}
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
## Configurazione Filament
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Configurazione Filament
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)

## Configurazione Filament

```json
// settings.json
{
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
## Configurazione Filament
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    // Filament Plugin
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top",
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    // Blade
    "[blade]": {
        "editor.defaultFormatter": "shufo.vscode-blade-formatter",
        "editor.formatOnSave": true
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
## Snippets Personalizzati
// filament.code-snippets
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
    },
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
}
```

## Snippets Personalizzati

```json
// filament.code-snippets
{
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
## Snippets Personalizzati
// filament.code-snippets
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    "Filament Resource": {
        "prefix": "fil-resource",
        "body": [
            "<?php",
            "",
            "namespace ${1:Namespace};",
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
            "use Modules\\\\Xot\\\\Filament\\\\Resources\\\\XotBaseResource;",
            "use Filament\\\\Forms;",
            "use Filament\\\\Tables;",
            "class ${2:Name}Resource extends XotBaseResource",
            "{",
            "    protected static ?string \\$model = ${2:Name}::class;",
            "    public static function getFormSchema(): array",
            "    public function getFormSchema(): array",
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
            "",
            "use Modules\\\\Xot\\\\Filament\\\\Resources\\\\XotBaseResource;",
            "use Filament\\\\Forms;",
            "use Filament\\\\Tables;",
            "",
            "class ${2:Name}Resource extends XotBaseResource",
            "{",
            "    protected static ?string \\$model = ${2:Name}::class;",
            "",
            "    public static function getFormSchema(): array",
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
            "use Modules\\\\Xot\\\\Filament\\\\Resources\\\\XotBaseResource;",
            "use Filament\\\\Forms;",
            "use Filament\\\\Tables;",
            "class ${2:Name}Resource extends XotBaseResource",
            "{",
            "    protected static ?string \\$model = ${2:Name}::class;",
            "    public static function getFormSchema(): array",
            "    public function getFormSchema(): array",
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            "    {",
            "        return [",
            "            $0",
            "        ];",
            "    }",
            "}",
            ""
        ]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
## Debug Configuration
// launch.json
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Debug Configuration
// launch.json
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
    }
}
```

## Debug Configuration

```json
// launch.json
{
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
## Debug Configuration
// launch.json
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/ tasks.json
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
    "version": "2.0.0",
    "tasks": [
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    "version": "2.0.0",
    "tasks": [
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
{
    "version": "2.0.0",
    "tasks": [
        {
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
    "version": "2.0.0",
    "tasks": [
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            "label": "Run PHPUnit Test",
            "type": "shell",
            "command": "./vendor/bin/phpunit ${file}",
            "group": {
                "kind": "test",
                "isDefault": true
            },
            "presentation": {
                "reveal": "always",
                "panel": "new"
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
    ]
## Best Practices
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    ]
## Best Practices
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
        }
    ]
}
```

## Best Practices

<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
    ]
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
### 1. Organizzazione Workspace
```plaintext
.vscode/
├── settings.json
├── launch.json
├── tasks.json
└── snippets/
    ├── php.code-snippets
    └── filament.code-snippets
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
### 2. Keybindings Consigliati
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 2. Keybindings Consigliati
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
```

### 2. Keybindings Consigliati
```json
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
### 2. Keybindings Consigliati
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
// keybindings.json
[
    {
        "key": "ctrl+shift+i",
        "command": "namespaceResolver.import",
        "when": "editorTextFocus"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
]
### 3. Workspace Esclusioni
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
    },
    {
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
        "when": "editorTextFocus"
    }
]
```

### 3. Workspace Esclusioni
```json
// settings.json
{
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
]
### 3. Workspace Esclusioni
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    "files.exclude": {
        "vendor/": true,
        "node_modules/": true,
        ".phpunit.cache/": true,
        "bootstrap/cache/": true
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_Zi4meD
    "search.exclude": {
        "node_modules/": true
## Troubleshooting
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 0dadab4 (Lint)
    },
    "search.exclude": {
        "vendor/": true,
        "node_modules/": true
    }
}
```

## Troubleshooting

<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
    "search.exclude": {
        "node_modules/": true
## Troubleshooting
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
### 1. Performance
- Disabilita estensioni non necessarie
- Aumenta memoria disponibile per VSCode
- Usa workspace esclusioni
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 2. Debug
- Verifica configurazione Xdebug
- Controlla mappatura path
- Usa Error Lens per debug visuale
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 3. Intellisense
- Rigenera index Intelephense
- Verifica configurazione namespace
- Controlla file composer.json
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
## Collegamenti
- [VSCode Filament Plugin](vscode-filament-plugin.md)
- [Development Tools](development-tools.md)
- [Coding Standards](coding-standards.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
## Vedi Anche
- [VSCode Documentation](https://code.visualstudio.com/docs)
- [PHP Intelephense](https://intelephense.com)
- [Filament Documentation](https://filamentphp.com/docs)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
# Configurazione VSCode per PHP e Filament
## Estensioni Essenziali
### 1. PHP
- PHP Intelephense
- PHP Debug
- PHP DocBlocker
- PHP Namespace Resolver
- PHP Constructor
- Better PHPUnit
### 2. Filament
- Filament PHP
- Laravel Blade Formatter
- Laravel Blade Snippets
- Laravel Extra Intellisense
### 3. Utilità
- Git Lens
- Git History
- EditorConfig
- DotENV
- Error Lens
## Configurazione PHP
```json
// settings.json
{
    // PHP Intelephense
    "intelephense.files.maxSize": 5000000,
    "intelephense.environment.phpVersion": "8.2",
    "intelephense.completion.insertUseDeclaration": true,
    "intelephense.completion.fullyQualifyGlobalConstantsAndFunctions": false,
    "intelephense.trace.server": "messages",
    "intelephense.diagnostics.undefinedTypes": false,
    "intelephense.diagnostics.undefinedFunctions": false,
    "intelephense.diagnostics.undefinedConstants": false,
    "intelephense.diagnostics.undefinedClassConstants": false,
    "intelephense.diagnostics.undefinedMethods": false,
    "intelephense.diagnostics.undefinedProperties": false,
    "intelephense.diagnostics.undefinedVariables": false,
    // PHP DocBlocker
    "php-docblocker.useShortNames": true,
    "php-docblocker.qualifyClassNames": true,
    "php-docblocker.author": {
        "name": "il progetto Team",
        "email": "dev@<nome progetto>.com"
    },
    // PHP Format
    "php.suggest.basic": false,
    "php.validate.enable": false,
    "[php]": {
        "editor.defaultFormatter": "bmewburn.vscode-intelephense-client",
        "editor.formatOnSave": true,
        "editor.formatOnPaste": true,
        "editor.codeActionsOnSave": {
            "source.fixAll.php": true
        }
```
## Configurazione Filament
    // Filament Plugin
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top",
    // Blade
    "[blade]": {
        "editor.defaultFormatter": "shufo.vscode-blade-formatter",
        "editor.formatOnSave": true
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
## Snippets Personalizzati
// filament.code-snippets
    "Filament Resource": {
        "prefix": "fil-resource",
        "body": [
            "<?php",
            "",
            "namespace ${1:Namespace};",
            "use Modules\\\\Xot\\\\Filament\\\\Resources\\\\XotBaseResource;",
            "use Filament\\\\Forms;",
            "use Filament\\\\Tables;",
            "class ${2:Name}Resource extends XotBaseResource",
            "{",
            "    protected static ?string \\$model = ${2:Name}::class;",
            "    public static function getFormSchema(): array",
            "    public function getFormSchema(): array",
            "    {",
            "        return [",
            "            $0",
            "        ];",
            "    }",
            "}",
            ""
        ]
## Debug Configuration
// launch.json
    "version": "0.2.0",
    "configurations": [
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/ tasks.json
    "version": "2.0.0",
    "tasks": [
            "label": "Run PHPUnit Test",
            "type": "shell",
            "command": "./vendor/bin/phpunit ${file}",
            "group": {
                "kind": "test",
                "isDefault": true
            "presentation": {
                "reveal": "always",
                "panel": "new"
## Best Practices
### 1. Organizzazione Workspace
```plaintext
.vscode/
├── settings.json
├── launch.json
├── tasks.json
└── snippets/
    ├── php.code-snippets
    └── filament.code-snippets
### 2. Keybindings Consigliati
// keybindings.json
[
        "key": "ctrl+shift+i",
        "command": "namespaceResolver.import",
        "when": "editorTextFocus"
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
### 3. Workspace Esclusioni
    "files.exclude": {
        "vendor/": true,
        "node_modules/": true,
        ".phpunit.cache/": true,
        "bootstrap/cache/": true
    "search.exclude": {
        "node_modules/": true
## Troubleshooting
### 1. Performance
- Disabilita estensioni non necessarie
- Aumenta memoria disponibile per VSCode
- Usa workspace esclusioni
### 2. Debug
- Verifica configurazione Xdebug
- Controlla mappatura path
- Usa Error Lens per debug visuale
### 3. Intellisense
- Rigenera index Intelephense
- Verifica configurazione namespace
- Controlla file composer.json
## Collegamenti
- [VSCode Filament Plugin](vscode-filament-plugin.md)
- [Development Tools](development-tools.md)
- [Coding Standards](coding-standards.md)
## Vedi Anche
- [VSCode Documentation](https://code.visualstudio.com/docs)
- [PHP Intelephense](https://intelephense.com)

```
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Filament Documentation](https://filamentphp.com/docs) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
