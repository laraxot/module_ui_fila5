---
title: Getting Started
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

# Getting Started {#getting-started}

This is a starter template for creating a beautiful, customizable documentation site for your project with minimal effort. You’ll only have to change a few settings and you’re ready to go.

## Configuration {#getting-started-configuration}

As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/docs/site-variables/) to learn more.

```php
// config.php
return [
    'baseUrl' => 'https://my-awesome-jigsaw-site.com/',
    'production' => false,
    'siteName' => 'My Site',
    'siteDescription' => 'Give your documentation a boost with Jigsaw.',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'navigation' => require_once('navigation.php'),
];
```

> Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts). Check out the official [Jigsaw documentation](https://jigsaw.tighten.co/docs/collections/) to learn more.

---

### Adding Content {#getting-started-adding-content}

You can write your content using a [variety of file types](http://jigsaw.tighten.co/docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in [navigation.php](/docs/navigation.php).

[Read more about navigation.](/docs/navigation)

The first section of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---
```

[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/docs/content-blade/)

---

### Adding Assets {#getting-started-adding-assets}

Any assets that need to be compiled (such as JavaScript, Less, or Sass files) can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run dev` or `npm run prod`. The processed assets will be stored in `/source/assets/build/` (note there is no underscore on this second `assets` directory).

Then, when Jigsaw builds your site, the entire `/source/assets/` directory containing your built files (and any other directories containing static assets, such as images or fonts, that you choose to store there) will be copied to the destination build folders (`build_local`, on your local machine).

Files that don't require processing (such as images and fonts) can be added directly to `/source/assets/`.

[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/docs/compiling-assets/)

---

## Building Your Site {#getting-started-building-your-site}

Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.

```bash
<<<<<<< .merge_file_kSusGQ

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======

=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_zuQ9ms
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
<<<<<<< .merge_file_kSusGQ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_zuQ9ms

# options: dev, prod
npm run dev
```

### Versione HEAD

## Collegamenti tra versioni di getting-started.md
<<<<<<< .merge_file_kSusGQ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< .merge_file_MaCa13
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
* [getting-started.md](../../../Gdpr/project_docs/getting-started.md)
* [getting-started.md](../../../Xot/project_docs/getting-started.md)
* [getting-started.md](../../../UI/project_docs/getting-started.md)
* [getting-started.md](../../../Tenant/project_docs/it/getting-started.md)
* [getting-started.md](../../../Cms/project_docs/getting-started.md)
# options: dev, prod
npm run dev
```
### Versione HEAD


## Collegamenti tra versioni di getting-started.md
* [getting-started.md](../../../Gdpr/docs/getting-started.md)
* [getting-started.md](../../../Xot/docs/getting-started.md)
* [getting-started.md](../../../UI/docs/getting-started.md)
* [getting-started.md](../../../Tenant/docs/it/getting-started.md)
* [getting-started.md](../../../Cms/docs/getting-started.md)
=======
>>>>>>> .merge_file_iHCEop
>>>>>>> .merge_file_Az5GNX
* [getting-started.md](../../../gdpr/project_docs/getting-started.md)
* [getting-started.md](../../../xot/project_docs/getting-started.md)
* [getting-started.md](../../../ui/project_docs/getting-started.md)
* [getting-started.md](../../../tenant/project_docs/it/getting-started.md)
* [getting-started.md](../../../cms/project_docs/getting-started.md)
* [getting-started.md](../../../gdpr/docs/getting-started.md)
* [getting-started.md](../../../xot/docs/getting-started.md)
* [getting-started.md](../../../ui/docs/getting-started.md)
* [getting-started.md](../../../tenant/docs/it/getting-started.md)
* [getting-started.md](../../../cms/docs/getting-started.md)
<<<<<<< .merge_file_9tc7vA
=======
=======
<<<<<<< .merge_file_MaCa13
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> .merge_file_zuQ9ms
* [getting-started.md](../../../Gdpr/project_docs/getting-started.md)
* [getting-started.md](../../../Xot/project_docs/getting-started.md)
* [getting-started.md](../../../UI/project_docs/getting-started.md)
* [getting-started.md](../../../Tenant/project_docs/it/getting-started.md)
* [getting-started.md](../../../Cms/project_docs/getting-started.md)
# options: dev, prod
npm run dev
```
### Versione HEAD


## Collegamenti tra versioni di getting-started.md
* [getting-started.md](../../../Gdpr/docs/getting-started.md)
* [getting-started.md](../../../Xot/docs/getting-started.md)
* [getting-started.md](../../../UI/docs/getting-started.md)
* [getting-started.md](../../../Tenant/docs/it/getting-started.md)
* [getting-started.md](../../../Cms/docs/getting-started.md)
<<<<<<< .merge_file_kSusGQ
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_iHCEop
>>>>>>> .merge_file_Az5GNX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_zuQ9ms

### Versione Incoming

---
---
title: Getting Started
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

# Getting Started {#getting-started}

This is a starter template for creating a beautiful, customizable documentation site for your project with minimal effort. You’ll only have to change a few settings and you’re ready to go.

## Configuration {#getting-started-configuration}

As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/project_docs/site-variables/) to learn more.

<<<<<<< .merge_file_kSusGQ
```

=======
<<<<<<< HEAD
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< .merge_file_MaCa13
=======
<<<<<<< HEAD
```

=======
<<<<<<< HEAD
>>>>>>> .merge_file_Az5GNX
=======
```

>>>>>>> laraxot/dev
<<<<<<< .merge_file_9tc7vA
=======
>>>>>>> laraxot/dev
=======
```

=======
>>>>>>> .merge_file_iHCEop
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> .merge_file_zuQ9ms
```php
// config.php
return [
    'baseUrl' => 'https://my-awesome-jigsaw-site.com/',
    'production' => false,
    'siteName' => 'My Site',
    'siteDescription' => 'Give your documentation a boost with Jigsaw.',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'navigation' => require_once('navigation.php'),
];
```

> Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts). Check out the official [Jigsaw documentation](https://jigsaw.tighten.co/project_docs/collections/) to learn more.

---

### Adding Content {#getting-started-adding-content}

You can write your content using a [variety of file types](http://jigsaw.tighten.co/project_docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in [navigation.php](/project_docs/navigation.php).

[Read more about navigation.](/project_docs/navigation)

The first section of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---
```

[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/project_docs/content-blade/)
[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/project_docs/content-blade/)
[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/project_docs/content-blade/)

---

### Adding Assets {#getting-started-adding-assets}

Any assets that need to be compiled (such as JavaScript, Less, or Sass files) can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run dev` or `npm run prod`. The processed assets will be stored in `/source/assets/build/` (note there is no underscore on this second `assets` directory).

Then, when Jigsaw builds your site, the entire `/source/assets/` directory containing your built files (and any other directories containing static assets, such as images or fonts, that you choose to store there) will be copied to the destination build folders (`build_local`, on your local machine).

Files that don't require processing (such as images and fonts) can be added directly to `/source/assets/`.

[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/project_docs/compiling-assets/)
[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/project_docs/compiling-assets/)
[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/project_docs/compiling-assets/)

---

## Building Your Site {#getting-started-building-your-site}

Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.

```bash
<<<<<<< .merge_file_kSusGQ
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_9tc7vA
>>>>>>> 92912795 (.)
=======
<<<<<<< HEAD
>>>>>>> 92912795 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_zuQ9ms
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options: dev, prod
npm run dev
```
### Versione HEAD

<<<<<<< .merge_file_kSusGQ
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9tc7vA
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> .merge_file_zuQ9ms
## Collegamenti tra versioni di getting-started.md
* [getting-started.md](../../../Gdpr/docs/getting-started.md)
* [getting-started.md](../../../Xot/docs/getting-started.md)
* [getting-started.md](../../../UI/docs/getting-started.md)
* [getting-started.md](../../../Tenant/docs/it/getting-started.md)
* [getting-started.md](../../../Cms/docs/getting-started.md)
* [getting-started.md](../../../Gdpr/project_docs/getting-started.md)
* [getting-started.md](../../../Xot/project_docs/getting-started.md)
* [getting-started.md](../../../UI/project_docs/getting-started.md)
* [getting-started.md](../../../Tenant/project_docs/it/getting-started.md)
* [getting-started.md](../../../Cms/project_docs/getting-started.md)

### Versione Incoming

---
<<<<<<< .merge_file_kSusGQ
=======
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_MaCa13
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Az5GNX
>>>>>>> .merge_file_zuQ9ms

### Versione Incoming

<<<<<<< .merge_file_kSusGQ

---
### Versione Incoming
=======
---
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
<<<<<<< .merge_file_9tc7vA
=======
=======
>>>>>>> .merge_file_iHCEop
>>>>>>> .merge_file_Az5GNX

### Versione Incoming


<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< .merge_file_MaCa13
>>>>>>> .merge_file_Az5GNX
<<<<<<< HEAD
---
### Versione Incoming
=======
<<<<<<< HEAD
---
=======
<<<<<<< HEAD
---
=======
### Versione Incoming

---
>>>>>>> laraxot/dev
=======
---
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9tc7vA
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
---
### Versione Incoming
=======
>>>>>>> .merge_file_iHCEop
>>>>>>> .merge_file_Az5GNX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_zuQ9ms
