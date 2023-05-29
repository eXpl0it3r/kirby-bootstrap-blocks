# Bootstrap Blocks

A [Kirby 3](https://getkirby.com/) plugin implementing [Bootstrap Components](https://getbootstrap.com/) as [Block](https://getkirby.com/docs/reference/panel/blocks).

## Prerequisites

- Currently only **Bootstrap 3.4** is supported, this will be upgraded over time
- It's assumed that Bootstrap (CSS & JS) is already loaded

## Supported Components

- [Alerts](https://getbootstrap.com/docs/3.4/components/#alerts)

## Usage

### Blueprint

Add the `alert` block to your set of fields:

```yml
fields:
  type: blocks
  label: Text
  fieldsets:
    - heading
    - text
    - list
    - image
    - gallery
    - video
    - code
    - markdown
    - alert
```

## Installation

### Download

- [Download](/archive/master.zip) the repository
- Extract the content to `site/plugins/kirby-bootstrap-blocks`

### Git Submodule

Add the plugin as Git submodule:

```
git submodule add https://github.com/eXpl0it3r/kirby-bootstrap-blocks.git site/plugins/kirby-bootstrap-blocks
```

### Composer

_Not supported currently_

## Credits

- Build with the [Custom Block Type](https://getkirby.com/docs/cookbook/panel/custom-block-type) Cookbook article
- A million thanks to the whole Kirby Team! ❤
