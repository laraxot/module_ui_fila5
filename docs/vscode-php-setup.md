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
<<<<<<< .merge_file_OByZtZ
            "    public function getFormSchema(): array",
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
            "    public function getFormSchema(): array",
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
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
<<<<<<< .merge_file_OByZtZ
                "/ tasks.json
=======
<<<<<<< HEAD
                "/ tasks.json
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                "/ tasks.json
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
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
<<<<<<< .merge_file_K4hITk
=======
=======
<<<<<<< HEAD
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
                "/var/www/html/base_<nome progetto>": "${workspaceFolder}"
            }
        }
    ]
}
```

## Tasks Personalizzati

```json
// tasks.json
<<<<<<< .merge_file_OByZtZ
                "/ tasks.json
=======
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
>>>>>>> .merge_file_k4w0o2
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
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                "/ tasks.json
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
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

<<<<<<< .merge_file_OByZtZ
## Tasks Personalizzati
```json
// tasks.json
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
## Tasks Personalizzati
```json
// tasks.json
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
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
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
- [Filament Documentation](https://filamentphp.com/docs)
# Configurazione VSCode per PHP e Filament
## Estensioni Essenziali
<<<<<<< .merge_file_OByZtZ
=======

<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
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
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
### 1. PHP
- PHP Intelephense
- PHP Debug
- PHP DocBlocker
- PHP Namespace Resolver
- PHP Constructor
- Better PHPUnit
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
### 2. Filament
- Filament PHP
- Laravel Blade Formatter
- Laravel Blade Snippets
- Laravel Extra Intellisense
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
### 3. Utilità
- Git Lens
- Git History
- EditorConfig
- DotENV
- Error Lens
<<<<<<< .merge_file_OByZtZ
## Configurazione PHP
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS

## Configurazione PHP
>>>>>>> .merge_file_k4w0o2

=======
<<<<<<< HEAD
## Configurazione PHP
=======
<<<<<<< HEAD

<<<<<<< .merge_file_K4hITk
=======
## Configurazione PHP
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
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
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
    // PHP DocBlocker
    "php-docblocker.useShortNames": true,
    "php-docblocker.qualifyClassNames": true,
    "php-docblocker.author": {
        "name": "il progetto Team",
        "email": "dev@<nome progetto>.com"
    },
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
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
<<<<<<< .merge_file_OByZtZ
## Configurazione Filament
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2

## Configurazione Filament

```json
// settings.json
{
<<<<<<< .merge_file_K4hITk
=======
## Configurazione Filament
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
    // Filament Plugin
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top",
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
    // Blade
    "[blade]": {
        "editor.defaultFormatter": "shufo.vscode-blade-formatter",
        "editor.formatOnSave": true
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
    },
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
}
```

## Snippets Personalizzati

```json
// filament.code-snippets
{
<<<<<<< .merge_file_K4hITk
=======
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
    "bladeFormatter.format.sortTailwindcssClasses": true,
    "bladeFormatter.format.sortHtmlAttributes": "alphabetical"
## Snippets Personalizzati
// filament.code-snippets
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
    "Filament Resource": {
        "prefix": "fil-resource",
        "body": [
            "<?php",
            "",
            "namespace ${1:Namespace};",
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
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
<<<<<<< .merge_file_K4hITk
=======
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
            "use Modules\\\\Xot\\\\Filament\\\\Resources\\\\XotBaseResource;",
            "use Filament\\\\Forms;",
            "use Filament\\\\Tables;",
            "class ${2:Name}Resource extends XotBaseResource",
            "{",
            "    protected static ?string \\$model = ${2:Name}::class;",
            "    public static function getFormSchema(): array",
            "    public function getFormSchema(): array",
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
            "    {",
            "        return [",
            "            $0",
            "        ];",
            "    }",
            "}",
            ""
        ]
<<<<<<< .merge_file_OByZtZ
## Debug Configuration
// launch.json
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
    }
}
```

## Debug Configuration

```json
// launch.json
{
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
>>>>>>> .merge_file_k4w0o2
=======
## Debug Configuration
// launch.json
>>>>>>> laraxot/dev
<<<<<<< .merge_file_K4hITk
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/ tasks.json
<<<<<<< .merge_file_OByZtZ
    "version": "2.0.0",
    "tasks": [
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
{
    "version": "2.0.0",
    "tasks": [
        {
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
>>>>>>> .merge_file_k4w0o2
=======
    "version": "2.0.0",
    "tasks": [
>>>>>>> laraxot/dev
<<<<<<< .merge_file_K4hITk
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
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
<<<<<<< .merge_file_OByZtZ
    ]
## Best Practices
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
        }
    ]
}
```

## Best Practices

<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
>>>>>>> .merge_file_k4w0o2
=======
    ]
## Best Practices
>>>>>>> laraxot/dev
<<<<<<< .merge_file_K4hITk
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
### 1. Organizzazione Workspace
```plaintext
.vscode/
├── settings.json
├── launch.json
├── tasks.json
└── snippets/
    ├── php.code-snippets
    └── filament.code-snippets
<<<<<<< .merge_file_OByZtZ
### 2. Keybindings Consigliati
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
```

### 2. Keybindings Consigliati
```json
<<<<<<< .merge_file_K4hITk
=======
### 2. Keybindings Consigliati
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
// keybindings.json
[
    {
        "key": "ctrl+shift+i",
        "command": "namespaceResolver.import",
        "when": "editorTextFocus"
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jRQndR
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
]
### 3. Workspace Esclusioni
<<<<<<< .merge_file_OByZtZ
=======
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
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
<<<<<<< .merge_file_K4hITk
=======
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
        "key": "ctrl+shift+s",
        "command": "namespaceResolver.sort",
]
### 3. Workspace Esclusioni
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
    "files.exclude": {
        "vendor/": true,
        "node_modules/": true,
        ".phpunit.cache/": true,
        "bootstrap/cache/": true
<<<<<<< .merge_file_OByZtZ
    "search.exclude": {
        "node_modules/": true
## Troubleshooting
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
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
>>>>>>> .merge_file_k4w0o2
    },
    "search.exclude": {
        "vendor/": true,
        "node_modules/": true
    }
}
```

## Troubleshooting

<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
<<<<<<< HEAD
=======
>>>>>>> .merge_file_k4w0o2
=======
    "search.exclude": {
        "node_modules/": true
## Troubleshooting
>>>>>>> laraxot/dev
<<<<<<< .merge_file_K4hITk
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
### 1. Performance
- Disabilita estensioni non necessarie
- Aumenta memoria disponibile per VSCode
- Usa workspace esclusioni
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
### 2. Debug
- Verifica configurazione Xdebug
- Controlla mappatura path
- Usa Error Lens per debug visuale
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
### 3. Intellisense
- Rigenera index Intelephense
- Verifica configurazione namespace
- Controlla file composer.json
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
## Collegamenti
- [VSCode Filament Plugin](vscode-filament-plugin.md)
- [Development Tools](development-tools.md)
- [Coding Standards](coding-standards.md)
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk

=======
>>>>>>> laraxot/dev
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
## Vedi Anche
- [VSCode Documentation](https://code.visualstudio.com/docs)
- [PHP Intelephense](https://intelephense.com)
- [Filament Documentation](https://filamentphp.com/docs)
<<<<<<< .merge_file_OByZtZ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
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
>>>>>>> .merge_file_k4w0o2
>>>>>>> .merge_file_jRQndR
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
<<<<<<< .merge_file_OByZtZ
=======
=======
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< .merge_file_o7LEDS
>>>>>>> .merge_file_k4w0o2
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
<<<<<<< .merge_file_K4hITk
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Zi4meD
>>>>>>> .merge_file_k4w0o2
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jRQndR
