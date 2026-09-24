<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
>>>>>>> .merge_file_VQLtDP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> .merge_file_VQLtDP
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
---
title: "Sistema di Theming"
type: concept
tags: [theme, system]
created: 2026-07-14
updated: 2026-07-14
qmd: "theme-system sistema di theming"
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./00-index-1.md"
  - "./00-index.md"
  - "./00-overview.md"
  - "./01-current-state.md"
  - "./01-now.md"
  - "./02-goals.md"
  - "./02-next.md"
  - "./03-later.md"
---
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
>>>>>>> .merge_file_VQLtDP
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
# Sistema di Theming

## 📊 Stato Implementazione
Completamento: 40%

## 🎯 Obiettivi
1. Sistema di theming flessibile e tipizzato
2. Supporto per temi multi-tenant
3. Dark/Light mode automatico
4. Customizzazione component-level

## 🤔 Sfide di Design

### 1. Theme Configuration
- Gestione gerarchica dei temi
- Override per tenant specifici
- Tipizzazione configurazioni

### 2. Runtime Theming
- Switch tema dinamico
- Caching configurazioni
- Performance ottimizzazione

### 3. Component Integration
- Theme props injection
- Styled components
- CSS-in-JS solution

## 💡 Soluzioni Proposte

### 1. Theme Registry
```php
class ThemeRegistry
{
    /** @var array<string, Theme> */
    protected array $themes = [];
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
>>>>>>> .merge_file_VQLtDP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_spqRKK
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
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
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
    
    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];
    
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
>>>>>>> .merge_file_VQLtDP
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg

    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];

<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
    public function register(Theme $theme): void
    {
        $this->themes[$theme->getName()] = $theme;
    }
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    
=======

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
    public function override(string $tenant, array $config): void
    {
        $this->overrides[$tenant] = $config;
    }
}
```

### 2. Theme Configuration
```php
class Theme
{
    public function __construct(
        protected string $name,
        protected array $config,
        protected ?string $parent = null
    ) {}
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    
=======

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
    public function resolve(string $path, $default = null)
    {
        return Arr::get($this->config, $path, $default);
    }
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    
=======

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
    public function extend(array $overrides): self
    {
        return new self(
            $this->name,
            array_merge($this->config, $overrides),
            $this->parent
        );
    }
}
```

## 📝 Steps Implementazione

### Fase 1: Core (✅ Completato)
1. ✅ Theme registry
2. ✅ Base configuration
3. ✅ Theme inheritance
4. ✅ Basic overrides

### Fase 2: Features (🏗️ In Progress)
1. ✅ Dark/Light mode
2. ✅ Tenant overrides
3. 🏗️ Component theming
4. 🏗️ Runtime switching
5. 📝 CSS-in-JS

### Fase 3: Advanced
1. 📝 Theme presets
2. 📝 Custom schemes
3. 📝 Theme builder
4. 📝 Export/Import
5. 📝 Theme preview

## 🎭 Edge Cases

1. **Theme Inheritance**
```php
// Problema: Risoluzione conflitti
$theme->resolve('button.primary.color')

// Soluzione: Cascade resolver
class ThemeResolver
{
    public function resolve(Theme $theme, string $path)
    {
        $value = $theme->resolve($path);
        if ($value === null && $theme->hasParent()) {
            return $this->resolve(
                $theme->getParent(),
                $path
            );
        }
        return $value;
    }
}
```

2. **Runtime Changes**
```php
// Problema: Cache invalidation
$theme->updateConfig(['color' => 'blue'])

// Soluzione: Version-based cache
class ThemeCache
{
    public function get(Theme $theme): array
    {
        $version = $theme->getVersion();
        return Cache::tags(['theme'])
            ->remember(
                "theme:{$theme->getName()}:$version",
                now()->addDay(),
                fn() => $theme->all()
            );
    }
}
```

## ✅ Code Review Checklist

1. Configuration
   - [ ] Theme structure
   - [ ] Inheritance chain
   - [ ] Override system

2. Performance
   - [ ] Cache strategy
   - [ ] CSS optimization
   - [ ] Runtime switching

3. Integration
   - [ ] Component support
   - [ ] Tenant handling
   - [ ] Mode switching

## 🚀 Performance Considerations

1. **Theme Caching**
```php
class CachedTheme extends Theme
{
    protected function resolveValue(string $path): mixed
    {
        return Cache::tags(['theme', $this->name])
            ->remember(
                "theme:{$this->name}:$path",
                now()->addHour(),
                fn() => parent::resolveValue($path)
            );
    }
}
```

2. **CSS Generation**
```php
class ThemeCompiler
{
    public function compile(Theme $theme): string
    {
        return Cache::tags(['theme-css'])
            ->remember(
                "theme-css:{$theme->getName()}",
                now()->addDay(),
                fn() => $this->generateCSS($theme)
            );
    }
}
```

## 📚 Lessons Learned

1. Importanza della cache per performance
2. Necessità di type safety in configurazione
3. Flessibilità per multi-tenant
4. Ottimizzazione CSS runtime

## 🔗 Resources

- [Theme Architecture](docs/architecture/themes.md)
- [Configuration Guide](docs/themes/config.md)
- [Component Theming](docs/themes/components.md)
- [Performance Tips](docs/themes/performance.md)

## 🤝 Contributing

1. Crea nuovi preset
2. Migliora performance
3. Aggiungi features
4. Documenta uso
5. Testa compatibilità

## ⚠️ Known Issues

1. **CSS Generation**
   - Memory usage con molti temi
   - Solution: Chunked compilation

2. **Theme Switching**
   - Flash of unstyled content
   - Solution: Critical CSS injection

## 🎯 Next Steps

1. Completare component theming
2. Implementare CSS-in-JS
3. Ottimizzare caching
4. Aggiungere theme builder
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
5. Migliorare documentazione
# Sistema di Theming
<<<<<<< HEAD
## 📊 Stato Implementazione
Completamento: 40%
=======

## 📊 Stato Implementazione
Completamento: 40%

<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
5. Migliorare documentazione 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
5. Migliorare documentazione 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
5. Migliorare documentazione 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
5. Migliorare documentazione
# Sistema di Theming
## 📊 Stato Implementazione
Completamento: 40%
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
## 🎯 Obiettivi
1. Sistema di theming flessibile e tipizzato
2. Supporto per temi multi-tenant
3. Dark/Light mode automatico
4. Customizzazione component-level
<<<<<<< .merge_file_66Jsiv
## 🤔 Sfide di Design
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

## 🤔 Sfide di Design

=======
## 🤔 Sfide di Design
=======
<<<<<<< .merge_file_oQU1yA

## 🤔 Sfide di Design

=======
<<<<<<< HEAD
## 🤔 Sfide di Design
=======
<<<<<<< HEAD

## 🤔 Sfide di Design

=======
## 🤔 Sfide di Design
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## 🤔 Sfide di Design
=======

## 🤔 Sfide di Design

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
### 1. Theme Configuration
- Gestione gerarchica dei temi
- Override per tenant specifici
- Tipizzazione configurazioni
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
### 2. Runtime Theming
- Switch tema dinamico
- Caching configurazioni
- Performance ottimizzazione
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
### 3. Component Integration
- Theme props injection
- Styled components
- CSS-in-JS solution
<<<<<<< .merge_file_66Jsiv
## 💡 Soluzioni Proposte
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA

## 💡 Soluzioni Proposte
=======
## 💡 Soluzioni Proposte
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

=======
<<<<<<< HEAD
## 💡 Soluzioni Proposte
=======
<<<<<<< HEAD

<<<<<<< .merge_file_spqRKK
=======
## 💡 Soluzioni Proposte
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_oQU1yA
## 💡 Soluzioni Proposte

=======
## 💡 Soluzioni Proposte
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
### 1. Theme Registry
```php
class ThemeRegistry
{
    /** @var array<string, Theme> */
    protected array $themes = [];
<<<<<<< .merge_file_66Jsiv
    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];

<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
>>>>>>> .merge_file_VQLtDP
=======
    /** @var array<string, array<string, mixed>> */
    protected array $overrides = [];
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
    public function register(Theme $theme): void
    {
        $this->themes[$theme->getName()] = $theme;
    }
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UUxzhg
    public function override(string $tenant, array $config): void
        $this->overrides[$tenant] = $config;
}
```
### 2. Theme Configuration
class Theme
<<<<<<< .merge_file_66Jsiv
=======
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

    public function override(string $tenant, array $config): void
    {
        $this->overrides[$tenant] = $config;
    }
}
```

### 2. Theme Configuration
```php
class Theme
{
<<<<<<< .merge_file_spqRKK
=======
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
    public function override(string $tenant, array $config): void
        $this->overrides[$tenant] = $config;
}
```
### 2. Theme Configuration
class Theme
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
    public function __construct(
        protected string $name,
        protected array $config,
        protected ?string $parent = null
    ) {}
<<<<<<< .merge_file_66Jsiv
    public function resolve(string $path, $default = null)
        return Arr::get($this->config, $path, $default);
    public function extend(array $overrides): self
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_jIxECU
    public function resolve(string $path, $default = null)
        return Arr::get($this->config, $path, $default);
    public function extend(array $overrides): self
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

    public function resolve(string $path, $default = null)
    {
        return Arr::get($this->config, $path, $default);
    }

    public function extend(array $overrides): self
    {
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
>>>>>>> .merge_file_VQLtDP
=======
    public function resolve(string $path, $default = null)
        return Arr::get($this->config, $path, $default);
    public function extend(array $overrides): self
>>>>>>> laraxot/dev
<<<<<<< .merge_file_spqRKK
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
        return new self(
            $this->name,
            array_merge($this->config, $overrides),
            $this->parent
        );
<<<<<<< .merge_file_66Jsiv
## 📝 Steps Implementazione
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
## 📝 Steps Implementazione
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 📝 Steps Implementazione
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
    }
}
```

## 📝 Steps Implementazione

<<<<<<< .merge_file_spqRKK
=======
## 📝 Steps Implementazione
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
## 📝 Steps Implementazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
### Fase 1: Core (✅ Completato)
1. ✅ Theme registry
2. ✅ Base configuration
3. ✅ Theme inheritance
4. ✅ Basic overrides
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
### Fase 2: Features (🏗️ In Progress)
1. ✅ Dark/Light mode
2. ✅ Tenant overrides
3. 🏗️ Component theming
4. 🏗️ Runtime switching
5. 📝 CSS-in-JS
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
### Fase 3: Advanced
1. 📝 Theme presets
2. 📝 Custom schemes
3. 📝 Theme builder
4. 📝 Export/Import
5. 📝 Theme preview
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UUxzhg
## 🎭 Edge Cases
1. **Theme Inheritance**
// Problema: Risoluzione conflitti
$theme->resolve('button.primary.color')
// Soluzione: Cascade resolver
class ThemeResolver
    public function resolve(Theme $theme, string $path)
<<<<<<< .merge_file_66Jsiv
=======
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

## 🎭 Edge Cases

1. **Theme Inheritance**
```php
// Problema: Risoluzione conflitti
$theme->resolve('button.primary.color')

// Soluzione: Cascade resolver
class ThemeResolver
{
    public function resolve(Theme $theme, string $path)
    {
<<<<<<< .merge_file_spqRKK
=======
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
## 🎭 Edge Cases
1. **Theme Inheritance**
// Problema: Risoluzione conflitti
$theme->resolve('button.primary.color')
// Soluzione: Cascade resolver
class ThemeResolver
    public function resolve(Theme $theme, string $path)
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
        $value = $theme->resolve($path);
        if ($value === null && $theme->hasParent()) {
            return $this->resolve(
                $theme->getParent(),
                $path
            );
        }
        return $value;
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UUxzhg
2. **Runtime Changes**
// Problema: Cache invalidation
$theme->updateConfig(['color' => 'blue'])
// Soluzione: Version-based cache
class ThemeCache
    public function get(Theme $theme): array
<<<<<<< .merge_file_66Jsiv
=======
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
    }
}
```

2. **Runtime Changes**
```php
// Problema: Cache invalidation
$theme->updateConfig(['color' => 'blue'])

// Soluzione: Version-based cache
class ThemeCache
{
    public function get(Theme $theme): array
    {
<<<<<<< .merge_file_spqRKK
=======
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
2. **Runtime Changes**
// Problema: Cache invalidation
$theme->updateConfig(['color' => 'blue'])
// Soluzione: Version-based cache
class ThemeCache
    public function get(Theme $theme): array
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
        $version = $theme->getVersion();
        return Cache::tags(['theme'])
            ->remember(
                "theme:{$theme->getName()}:$version",
                now()->addDay(),
                fn() => $theme->all()
<<<<<<< .merge_file_66Jsiv
## ✅ Code Review Checklist
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
## ✅ Code Review Checklist
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## ✅ Code Review Checklist
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
            );
    }
}
```

## ✅ Code Review Checklist

<<<<<<< .merge_file_spqRKK
=======
## ✅ Code Review Checklist
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
## ✅ Code Review Checklist
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
1. Configuration
   - [ ] Theme structure
   - [ ] Inheritance chain
   - [ ] Override system
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
2. Performance
   - [ ] Cache strategy
   - [ ] CSS optimization
   - [ ] Runtime switching
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

=======
=======
<<<<<<< .merge_file_oQU1yA

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
3. Integration
   - [ ] Component support
   - [ ] Tenant handling
   - [ ] Mode switching
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UUxzhg
## 🚀 Performance Considerations
1. **Theme Caching**
class CachedTheme extends Theme
    protected function resolveValue(string $path): mixed
        return Cache::tags(['theme', $this->name])
                "theme:{$this->name}:$path",
                now()->addHour(),
                fn() => parent::resolveValue($path)
2. **CSS Generation**
class ThemeCompiler
    public function compile(Theme $theme): string
        return Cache::tags(['theme-css'])
                "theme-css:{$theme->getName()}",
                fn() => $this->generateCSS($theme)
## 📚 Lessons Learned
<<<<<<< .merge_file_66Jsiv
=======
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

## 🚀 Performance Considerations

1. **Theme Caching**
```php
class CachedTheme extends Theme
{
    protected function resolveValue(string $path): mixed
    {
        return Cache::tags(['theme', $this->name])
            ->remember(
                "theme:{$this->name}:$path",
                now()->addHour(),
                fn() => parent::resolveValue($path)
            );
    }
}
```

2. **CSS Generation**
```php
class ThemeCompiler
{
    public function compile(Theme $theme): string
    {
        return Cache::tags(['theme-css'])
            ->remember(
                "theme-css:{$theme->getName()}",
                now()->addDay(),
                fn() => $this->generateCSS($theme)
            );
    }
}
```

## 📚 Lessons Learned

<<<<<<< .merge_file_spqRKK
=======
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
## 🚀 Performance Considerations
1. **Theme Caching**
class CachedTheme extends Theme
    protected function resolveValue(string $path): mixed
        return Cache::tags(['theme', $this->name])
                "theme:{$this->name}:$path",
                now()->addHour(),
                fn() => parent::resolveValue($path)
2. **CSS Generation**
class ThemeCompiler
    public function compile(Theme $theme): string
        return Cache::tags(['theme-css'])
                "theme-css:{$theme->getName()}",
                fn() => $this->generateCSS($theme)
## 📚 Lessons Learned
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
1. Importanza della cache per performance
2. Necessità di type safety in configurazione
3. Flessibilità per multi-tenant
4. Ottimizzazione CSS runtime
<<<<<<< .merge_file_66Jsiv
## 🔗 Resources
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

## 🔗 Resources

=======
## 🔗 Resources
=======
<<<<<<< .merge_file_oQU1yA

## 🔗 Resources

=======
<<<<<<< HEAD
## 🔗 Resources
=======
<<<<<<< HEAD

## 🔗 Resources

=======
## 🔗 Resources
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## 🔗 Resources
=======

## 🔗 Resources

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
- [Theme Architecture](docs/architecture/themes.md)
- [Configuration Guide](docs/themes/config.md)
- [Component Theming](docs/themes/components.md)
- [Performance Tips](docs/themes/performance.md)
<<<<<<< .merge_file_66Jsiv
## 🤝 Contributing
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK

## 🤝 Contributing

=======
## 🤝 Contributing
=======
<<<<<<< .merge_file_oQU1yA

## 🤝 Contributing

=======
<<<<<<< HEAD
## 🤝 Contributing
=======
<<<<<<< HEAD

## 🤝 Contributing

=======
## 🤝 Contributing
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## 🤝 Contributing
=======

## 🤝 Contributing

>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
1. Crea nuovi preset
2. Migliora performance
3. Aggiungi features
4. Documenta uso
5. Testa compatibilità
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< .merge_file_oQU1yA
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## ⚠️ Known Issues
1. **CSS Generation**
   - Memory usage con molti temi
   - Solution: Chunked compilation
2. **Theme Switching**
   - Flash of unstyled content
   - Solution: Critical CSS injection
## 🎯 Next Steps
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP

## ⚠️ Known Issues

1. **CSS Generation**
   - Memory usage con molti temi
   - Solution: Chunked compilation

2. **Theme Switching**
   - Flash of unstyled content
   - Solution: Critical CSS injection

## 🎯 Next Steps

<<<<<<< .merge_file_spqRKK
=======
=======
<<<<<<< .merge_file_oQU1yA
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_VQLtDP
>>>>>>> .merge_file_UUxzhg
## ⚠️ Known Issues
1. **CSS Generation**
   - Memory usage con molti temi
   - Solution: Chunked compilation
2. **Theme Switching**
   - Flash of unstyled content
   - Solution: Critical CSS injection
## 🎯 Next Steps
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< .merge_file_spqRKK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
1. Completare component theming
2. Implementare CSS-in-JS
3. Ottimizzare caching
4. Aggiungere theme builder
<<<<<<< .merge_file_66Jsiv
=======
<<<<<<< HEAD
<<<<<<< .merge_file_spqRKK
5. Migliorare documentazione
=======
<<<<<<< HEAD
=======
5. Migliorare documentazione
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
5. Migliorare documentazione 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_oQU1yA
5. Migliorare documentazione
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
5. Migliorare documentazione
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
5. Migliorare documentazione
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
5. Migliorare documentazione 
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
=======
5. Migliorare documentazione
>>>>>>> .merge_file_jIxECU
>>>>>>> .merge_file_VQLtDP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_UUxzhg
