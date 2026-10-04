# Bootstrap Blocks

A [Kirby](https://getkirby.com/) plugin implementing [Bootstrap Components](https://getbootstrap.com/docs/5.3/components/) as [Blocks](https://getkirby.com/docs/reference/panel/blocks).

![The Panel showing alert blocks in the eight Bootstrap colors](screenshot.png)

## Requirements

- Kirby 3.10, 4 or 5
- PHP 8.1 or newer, note that Kirby 5 needs PHP 8.2
- Bootstrap 5.3, which your site has to load itself (CSS and JS)

Version 2.0 switched from Bootstrap 3.4 to 5.3, which renamed a few classes, e.g. the close button. If your site still uses Bootstrap 3.4, stay on version 1.x of the plugin.

## Supported Components

- [Alerts](https://getbootstrap.com/docs/5.3/components/alerts/)

## Installation

### Composer

```
composer require expl0it3r/kirby-bootstrap-blocks
```

### Git Submodule

```
git submodule add https://github.com/eXpl0it3r/kirby-bootstrap-blocks.git site/plugins/kirby-bootstrap-blocks
```

### Download

[Download](https://github.com/eXpl0it3r/kirby-bootstrap-blocks/archive/master.zip) the repository and extract its content to `site/plugins/kirby-bootstrap-blocks`.

## Usage

Add the `alert` block to the fieldsets of your blocks field:

```yml
fields:
  text:
    type: blocks
    label: Text
    fieldsets:
      - heading
      - text
      - list
      - image
      - alert
```

An alert has a type (primary, secondary, success, danger, warning, info, light or dark), can be dismissible and its text supports bold and italic. The dismiss button uses Bootstrap's `data-bs-dismiss="alert"`, as such it needs Bootstrap's JavaScript.

## Development

The Panel preview is a Vue component in `src/` that gets built to `index.js`. Run the following commands in the plugin directory:

- `npm run dev` watches the files in `src/` and builds on every change
- `npm run build` builds the files in `src/` once

Note that the build uses kirbyup 3, as the Panel of Kirby 3, 4 and 5 still runs on Vue 2.

## Credits

- Built with the [Custom Block Type](https://getkirby.com/docs/cookbook/panel/custom-block-type) cookbook article
- A million thanks to the whole Kirby Team! ❤
