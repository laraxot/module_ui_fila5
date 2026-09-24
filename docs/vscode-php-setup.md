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
<<<<<<< .merge_file_Vqyvyw
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
=======
            "    public function getFormSchema(): array",
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
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
                "/ tasks.json
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 804451c (Lint)
                "/var/www/html/base_<nome progetto>": "${workspaceFolder}"
            }
        }
    ]
}
```

## Tasks Personalizzati

```json
// tasks.json
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                "/ tasks.json
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
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

<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
## Tasks Personalizzati
```json
// tasks.json
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
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
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
- [Filament Documentation](https://filamentphp.com/docs)
# Configurazione VSCode per PHP e Filament

## Estensioni Essenziali

<<<<<<< .merge_file_Vqyvyw
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Filament Documentation](https://filamentphp.com/docs)
# Configurazione VSCode per PHP e Filament

## Estensioni Essenziali

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
### 1. PHP
- PHP Intelephense
- PHP Debug
- PHP DocBlocker
- PHP Namespace Resolver
- PHP Constructor
- Better PHPUnit
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
### 2. Filament
- Filament PHP
- Laravel Blade Formatter
- Laravel Blade Snippets
- Laravel Extra Intellisense
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
### 3. Utilità
- Git Lens
- Git History
- EditorConfig
- DotENV
- Error Lens
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS

## Configurazione PHP
=======
>>>>>>> .merge_file_OOUFPe

## Configurazione PHP
<<<<<<< .merge_file_Vqyvyw
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

## Configurazione PHP

=======
## Configurazione PHP
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Configurazione PHP
=======

## Configurazione PHP

>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_OOUFPe
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
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
    // PHP DocBlocker
    "php-docblocker.useShortNames": true,
    "php-docblocker.qualifyClassNames": true,
    "php-docblocker.author": {
        "name": "il progetto Team",
        "email": "dev@<nome progetto>.com"
    },
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
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
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe

## Configurazione Filament

```json
// settings.json
{
<<<<<<< .merge_file_Vqyvyw
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
=======
## Configurazione Filament
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
    // Filament Plugin
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top",
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
    // Blade
    "[blade]": {
        "editor.defaultFormatter": "shufo.vscode-blade-formatter",
        "editor.formatOnSave": true
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
    },
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
}
```

## Snippets Personalizzati

```json
// filament.code-snippets
{
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
## Snippets Personalizzati
// filament.code-snippets
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
    "Filament Resource": {
        "prefix": "fil-resource",
        "body": [
            "<?php",
            "",
            "namespace ${1:Namespace};",
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
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
>>>>>>> 804451c (Lint)
=======
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
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> .merge_file_OOUFPe
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
<<<<<<< .merge_file_Vqyvyw
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
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
            "    {",
            "        return [",
            "            $0",
            "        ];",
            "    }",
            "}",
            ""
        ]
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
    }
}
```

## Debug Configuration

```json
// launch.json
{
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
## Debug Configuration
// launch.json
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/ tasks.json
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
{
    "version": "2.0.0",
    "tasks": [
        {
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
    "version": "2.0.0",
    "tasks": [
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
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
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
        }
    ]
}
```

## Best Practices

<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
    ]
## Best Practices
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
### 1. Organizzazione Workspace
```plaintext
.vscode/
├── settings.json
├── launch.json
├── tasks.json
└── snippets/
    ├── php.code-snippets
    └── filament.code-snippets
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
```

### 2. Keybindings Consigliati
```json
<<<<<<< .merge_file_Vqyvyw
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
=======
### 2. Keybindings Consigliati
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
// keybindings.json
[
    {
        "key": "ctrl+shift+i",
        "command": "namespaceResolver.import",
        "when": "editorTextFocus"
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
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
<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
]
### 3. Workspace Esclusioni
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
    "files.exclude": {
        "vendor/": true,
        "node_modules/": true,
        ".phpunit.cache/": true,
        "bootstrap/cache/": true
<<<<<<< .merge_file_Vqyvyw
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
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
    },
    "search.exclude": {
        "vendor/": true,
        "node_modules/": true
    }
}
```

## Troubleshooting

<<<<<<< .merge_file_Vqyvyw
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
    "search.exclude": {
        "node_modules/": true
## Troubleshooting
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOUFPe
### 1. Performance
- Disabilita estensioni non necessarie
- Aumenta memoria disponibile per VSCode
- Usa workspace esclusioni
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
### 2. Debug
- Verifica configurazione Xdebug
- Controlla mappatura path
- Usa Error Lens per debug visuale
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
### 3. Intellisense
- Rigenera index Intelephense
- Verifica configurazione namespace
- Controlla file composer.json
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
## Collegamenti
- [VSCode Filament Plugin](vscode-filament-plugin.md)
- [Development Tools](development-tools.md)
- [Coding Standards](coding-standards.md)
<<<<<<< .merge_file_Vqyvyw
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
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_OOUFPe
## Vedi Anche
- [VSCode Documentation](https://code.visualstudio.com/docs)
- [PHP Intelephense](https://intelephense.com)
- [Filament Documentation](https://filamentphp.com/docs)
<<<<<<< .merge_file_Vqyvyw
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
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
<<<<<<< .merge_file_o7LEDS
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OOUFPe
