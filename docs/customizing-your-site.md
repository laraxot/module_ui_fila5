---
<<<<<<< .merge_file_I6oC74
=======
<<<<<<< HEAD
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< .merge_file_zy8dGv
>>>>>>> .merge_file_nWzrJl
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
<<<<<<< .merge_file_P2kzAO
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
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl
>>>>>>> .merge_file_OEQ6C2
module: theme
topic: customizing_your_site
canonical: ../../../Themes/docs/shared-components/customizing-your-site_1.md
---

<<<<<<< .merge_file_I6oC74
See canonical documentation: ../../../Themes/docs/shared-components/customizing-your-site_1.md
=======
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< .merge_file_zy8dGv
>>>>>>> .merge_file_nWzrJl
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/customizing-your-site_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/customizing-your-site_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/customizing-your-site_1.md
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/customizing-your-site_1.md
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OEQ6C2
title: Customizing Your Site
description: Customizing your Jigsaw docs site
extends: _layouts.documentation
section: content
---
# Customizing Your Site {#customizing}
<<<<<<< .merge_file_I6oC74
=======
<<<<<<< HEAD
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< .merge_file_zy8dGv
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Styles
This starter template comes pre-loaded with [Tailwind CSS](https://tailwindcss.com), a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base Sass files in the `/source/_assets/sass` folder, set up with the expectation that you can add any custom CSS into `_documentation.scss`.
> You can re-work the architecture of the Sass includes any way you’d like; just make sure to keep the `@tailwind` references in your final files.
```scss
// source/_assets/sass/main.scss
@tailwind preflight;
@tailwind components;
// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlight.js/styles/a11y-light.css';
@import 'base';
@import 'navigation';
@import 'documentation';
@tailwind utilities;
```
## Typography Styles {#customizing-typography}
Here’s a quick preview of what some of the basic type styles will look like in this starter template:
<div markdown="1" class="example pt-6">
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl

## Styles

This starter template comes pre-loaded with [Tailwind CSS](https://tailwindcss.com), a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base Sass files in the `/source/_assets/sass` folder, set up with the expectation that you can add any custom CSS into `_documentation.scss`.

> You can re-work the architecture of the Sass includes any way you’d like; just make sure to keep the `@tailwind` references in your final files.

```scss
// source/_assets/sass/main.scss

@tailwind preflight;
@tailwind components;

// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlight.js/styles/a11y-light.css';

@import 'base';
@import 'navigation';
@import 'documentation';

@tailwind utilities;
```

---

## Typography Styles {#customizing-typography}

Here’s a quick preview of what some of the basic type styles will look like in this starter template:

<div markdown="1" class="example pt-6">

<<<<<<< .merge_file_P2kzAO
=======
=======
<<<<<<< .merge_file_zy8dGv
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
>>>>>>> .merge_file_OEQ6C2
## Styles
This starter template comes pre-loaded with [Tailwind CSS](https://tailwindcss.com), a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base Sass files in the `/source/_assets/sass` folder, set up with the expectation that you can add any custom CSS into `_documentation.scss`.
> You can re-work the architecture of the Sass includes any way you’d like; just make sure to keep the `@tailwind` references in your final files.
```scss
// source/_assets/sass/main.scss
@tailwind preflight;
@tailwind components;
// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlight.js/styles/a11y-light.css';
@import 'base';
@import 'navigation';
@import 'documentation';
@tailwind utilities;
```
## Typography Styles {#customizing-typography}
Here’s a quick preview of what some of the basic type styles will look like in this starter template:
<div markdown="1" class="example pt-6">
<<<<<<< .merge_file_I6oC74
=======
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OEQ6C2
# h1 Heading
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
<<<<<<< .merge_file_I6oC74
=======
<<<<<<< HEAD
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< .merge_file_zy8dGv
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OEQ6C2
###### h6 Heading
The quick brown fox jumps over the lazy dog
<s>The quick brown fox jumps over the lazy dog</s>
<u>The quick brown fox jumps over the lazy dog</u>
_The quick brown fox jumps over the lazy dog_
**The quick brown fox jumps over the lazy dog**
`The quick brown fox jumps over the lazy dog`
<small>The quick brown fox jumps over the lazy dog</small>
> The quick brown fox jumps over the lazy dog
[The quick brown fox jumps over the lazy dog](#)
<<<<<<< .merge_file_I6oC74
=======
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl

## h2 Heading

### h3 Heading

#### h4 Heading

##### h5 Heading

###### h6 Heading

The quick brown fox jumps over the lazy dog

<s>The quick brown fox jumps over the lazy dog</s>

<u>The quick brown fox jumps over the lazy dog</u>

_The quick brown fox jumps over the lazy dog_

**The quick brown fox jumps over the lazy dog**

`The quick brown fox jumps over the lazy dog`

<small>The quick brown fox jumps over the lazy dog</small>

> The quick brown fox jumps over the lazy dog

[The quick brown fox jumps over the lazy dog](#)

<<<<<<< .merge_file_P2kzAO
=======
=======
<<<<<<< .merge_file_zy8dGv
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
###### h6 Heading
The quick brown fox jumps over the lazy dog
<s>The quick brown fox jumps over the lazy dog</s>
<u>The quick brown fox jumps over the lazy dog</u>
_The quick brown fox jumps over the lazy dog_
**The quick brown fox jumps over the lazy dog**
`The quick brown fox jumps over the lazy dog`
<small>The quick brown fox jumps over the lazy dog</small>
> The quick brown fox jumps over the lazy dog
[The quick brown fox jumps over the lazy dog](#)
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OEQ6C2
```php
class Foo extends bar
{
    public function fooBar()
    {
        //
    }
}
<<<<<<< .merge_file_I6oC74
=======
<<<<<<< HEAD
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< .merge_file_zy8dGv
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OEQ6C2
</div>
### Versione HEAD
## Collegamenti tra versioni di customizing-your-site.md
* [customizing-your-site.md](../../../Gdpr/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Xot/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../UI/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Tenant/project_docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../Cms/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Gdpr/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Xot/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../UI/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Tenant/docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../Cms/docs/customizing-your-site.md)
### Versione Incoming

```
<<<<<<< .merge_file_I6oC74
=======
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl
```

</div>

### Versione HEAD

## Collegamenti tra versioni di customizing-your-site.md
* [customizing-your-site.md](../../../gdpr/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../xot/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../ui/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../tenant/project_docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../cms/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../gdpr/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../xot/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../ui/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../tenant/docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../cms/docs/customizing-your-site.md)

### Versione Incoming

---
---
title: Customizing Your Site
description: Customizing your Jigsaw docs site
extends: _layouts.documentation
section: content
---
# Customizing Your Site {#customizing}

## Styles

This starter template comes pre-loaded with [Tailwind CSS](https://tailwindcss.com), a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base Sass files in the `/source/_assets/sass` folder, set up with the expectation that you can add any custom CSS into `_documentation.scss`.

> You can re-work the architecture of the Sass includes any way you’d like; just make sure to keep the `@tailwind` references in your final files.

```scss
// source/_assets/sass/main.scss

@tailwind preflight;
@tailwind components;

// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlight.js/styles/a11y-light.css';

@import 'base';
@import 'navigation';
@import 'documentation';

@tailwind utilities;
```
<<<<<<< .merge_file_P2kzAO
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
</div>
### Versione HEAD
## Collegamenti tra versioni di customizing-your-site.md
* [customizing-your-site.md](../../../Gdpr/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Xot/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../UI/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Tenant/project_docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../Cms/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Gdpr/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Xot/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../UI/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Tenant/docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../Cms/docs/customizing-your-site.md)
### Versione Incoming

```
<<<<<<< HEAD
=======
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev

---

## Typography Styles {#customizing-typography}

Here’s a quick preview of what some of the basic type styles will look like in this starter template:

<div markdown="1" class="example pt-6">

# h1 Heading
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading

The quick brown fox jumps over the lazy dog

<s>The quick brown fox jumps over the lazy dog</s>

<u>The quick brown fox jumps over the lazy dog</u>

_The quick brown fox jumps over the lazy dog_

**The quick brown fox jumps over the lazy dog**

`The quick brown fox jumps over the lazy dog`

<small>The quick brown fox jumps over the lazy dog</small>

> The quick brown fox jumps over the lazy dog

[The quick brown fox jumps over the lazy dog](#)

```php
class Foo extends bar
{
    public function fooBar()
    {
        //
    }
}
```

</div>
<<<<<<< HEAD
<<<<<<< .merge_file_P2kzAO
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
* [customizing-your-site.md](../../../gdpr/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../xot/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../ui/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../tenant/docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../cms/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../gdpr/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../xot/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../ui/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../tenant/project_docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../cms/project_docs/customizing-your-site.md)
<<<<<<< .merge_file_P2kzAO
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
* [customizing-your-site.md](../../../Gdpr/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Xot/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../UI/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Tenant/docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../Cms/docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Gdpr/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Xot/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../UI/project_docs/customizing-your-site.md)
* [customizing-your-site.md](../../../Tenant/project_docs/it/customizing-your-site.md)
* [customizing-your-site.md](../../../Cms/project_docs/customizing-your-site.md)
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev

### Versione Incoming

---
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< .merge_file_zy8dGv
>>>>>>> .merge_file_nWzrJl
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/customizing-your-site_1.md
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_P2kzAO
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Aft2AC
>>>>>>> .merge_file_nWzrJl
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OEQ6C2
