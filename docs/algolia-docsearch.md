---
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
module: theme
topic: algolia_docsearch
canonical: ../../../Themes/docs/shared-components/algolia-docsearch_1.md
---

<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/algolia-docsearch_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/algolia-docsearch_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/algolia-docsearch_1.md
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/algolia-docsearch_1.md
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_x2KEYD
title: Algolia DocSearch
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _layouts.documentation
section: content
---
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_loDZZE
# Algolia DocSearch {#algolia-docsearch}
This starter template includes support for [DocSearch](https://community.algolia.com/docsearch/), a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in `config.php`. Algolia will then crawl your documentation regularly, and index all your content.
[Get your DocSearch credentials here.](https://community.algolia.com/docsearch/#join-docsearch-program)
=======
<<<<<<< .merge_file_6uOCr6
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_x2KEYD

# Algolia DocSearch {#algolia-docsearch}

This starter template includes support for [DocSearch](https://community.algolia.com/docsearch/), a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in `config.php`. Algolia will then crawl your documentation regularly, and index all your content.

[Get your DocSearch credentials here.](https://community.algolia.com/docsearch/#join-docsearch-program)

<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
# Algolia DocSearch {#algolia-docsearch}
This starter template includes support for [DocSearch](https://community.algolia.com/docsearch/), a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in `config.php`. Algolia will then crawl your documentation regularly, and index all your content.
[Get your DocSearch credentials here.](https://community.algolia.com/docsearch/#join-docsearch-program)
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_loDZZE
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_x2KEYD
```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.
<img class="block m-auto" src="/assets/img/docsearch.png" alt="Screenshot of search results" />
To help Algolia index your pages correctly, it's good practice to add a unique `id` or `name` attribute to each heading tag (`<h1>`, `<h2>`, etc.). By doing so, a user will be taken directly to the appropriate section of the page when they click a search result.
## Adding Custom Styles {#algolia-adding-custom-styles}
If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_x2KEYD

Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.

<img class="block m-auto" src="/assets/img/docsearch.png" alt="Screenshot of search results" />

To help Algolia index your pages correctly, it's good practice to add a unique `id` or `name` attribute to each heading tag (`<h1>`, `<h2>`, etc.). By doing so, a user will be taken directly to the appropriate section of the page when they click a search result.

---

## Adding Custom Styles {#algolia-adding-custom-styles}

If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:

<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.
<img class="block m-auto" src="/assets/img/docsearch.png" alt="Screenshot of search results" />
To help Algolia index your pages correctly, it's good practice to add a unique `id` or `name` attribute to each heading tag (`<h1>`, `<h2>`, etc.). By doing so, a user will be taken directly to the appropriate section of the page when they click a search result.
## Adding Custom Styles {#algolia-adding-custom-styles}
If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_x2KEYD
```css
/* Main dropdown wrapper */
.algolia-autocomplete .ds-dropdown-menu {
  width: 500px;
}
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_loDZZE
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_x2KEYD
/* Main category (eg. Getting Started) */
.algolia-autocomplete .algolia-docsearch-suggestion--category-header {
  color: darkgray;
  border: 1px solid gray;
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_loDZZE
/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
=======
<<<<<<< .merge_file_6uOCr6
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_x2KEYD
}

/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
}

<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_loDZZE
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_x2KEYD
/* Title (eg. Bootstrap CDN) */
.algolia-autocomplete .algolia-docsearch-suggestion--title {
  font-weight: bold;
  color: black;
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
For more details, visit the [official Algolia DocSearch documentation.](https://community.algolia.com/docsearch/what-is-docsearch.html)
### Versione HEAD
## Collegamenti tra versioni di algolia-docsearch.md
* [algolia-docsearch.md](../../../Chart/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Gdpr/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Xot/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../UI/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Cms/docs/algolia-docsearch.md)
### Versione Incoming
* [algolia-docsearch.md](../../../Chart/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Gdpr/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Xot/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../UI/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Cms/project_docs/algolia-docsearch.md)

```
=======
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_x2KEYD
}

/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
  color: gray;
}

/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
}
```

---

For more details, visit the [official Algolia DocSearch documentation.](https://community.algolia.com/docsearch/what-is-docsearch.html)
### Versione HEAD

## Collegamenti tra versioni di algolia-docsearch.md
* [algolia-docsearch.md](../../../chart/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../gdpr/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../xot/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../ui/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../cms/docs/algolia-docsearch.md)

### Versione Incoming

---
---
title: Algolia DocSearch
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _layouts.documentation
section: content
---

# Algolia DocSearch {#algolia-docsearch}

This starter template includes support for [DocSearch](https://community.algolia.com/docsearch/), a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in `config.php`. Algolia will then crawl your documentation regularly, and index all your content.

[Get your DocSearch credentials here.](https://community.algolia.com/docsearch/#join-docsearch-program)

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.

<img class="block m-auto" src="/assets/img/docsearch.png" alt="Screenshot of search results" />

To help Algolia index your pages correctly, it's good practice to add a unique `id` or `name` attribute to each heading tag (`<h1>`, `<h2>`, etc.). By doing so, a user will be taken directly to the appropriate section of the page when they click a search result.

---

## Adding Custom Styles {#algolia-adding-custom-styles}

If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:

```css
/* Main dropdown wrapper */
.algolia-autocomplete .ds-dropdown-menu {
  width: 500px;
}

/* Main category (eg. Getting Started) */
.algolia-autocomplete .algolia-docsearch-suggestion--category-header {
  color: darkgray;
  border: 1px solid gray;
}

/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
}

/* Title (eg. Bootstrap CDN) */
.algolia-autocomplete .algolia-docsearch-suggestion--title {
  font-weight: bold;
  color: black;
}

/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
  color: gray;
}

/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
}
```

---

For more details, visit the [official Algolia DocSearch documentation.](https://community.algolia.com/docsearch/what-is-docsearch.html)
### Versione HEAD

## Collegamenti tra versioni di algolia-docsearch.md
* [algolia-docsearch.md](../../../chart/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../gdpr/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../xot/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../ui/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../cms/project_docs/algolia-docsearch.md)

### Versione Incoming

---
<<<<<<< .merge_file_mc9wOH
<<<<<<< HEAD
<<<<<<< .merge_file_6uOCr6
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
For more details, visit the [official Algolia DocSearch documentation.](https://community.algolia.com/docsearch/what-is-docsearch.html)
### Versione HEAD
## Collegamenti tra versioni di algolia-docsearch.md
* [algolia-docsearch.md](../../../Chart/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Gdpr/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Xot/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../UI/docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Cms/docs/algolia-docsearch.md)
### Versione Incoming
* [algolia-docsearch.md](../../../Chart/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Gdpr/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Xot/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../UI/project_docs/algolia-docsearch.md)
* [algolia-docsearch.md](../../../Cms/project_docs/algolia-docsearch.md)

<<<<<<< HEAD
```
=======
### Versione Incoming

---
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/algolia-docsearch_1.md
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
>>>>>>> .merge_file_loDZZE
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_x2KEYD
