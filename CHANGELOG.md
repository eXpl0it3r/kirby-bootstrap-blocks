# Changelog

## [2.0.0](https://github.com/eXpl0it3r/kirby-bootstrap-blocks/compare/1.1.0...2.0.0) - 2026-10-04

Switches the alerts to Bootstrap 5.3. Sites that still use Bootstrap 3.4 should stay on version 1.x.

### Added

- Primary, secondary, light and dark alert types

### Changed

- Use the Bootstrap 5 markup for the alerts, i.e. `btn-close`, `data-bs-dismiss`, `fade show` and `role="alert"`
- Use the Bootstrap 5 colors in the Panel preview
- Pick the alert type with toggles instead of a dropdown, which can be unreadable in the dark mode of Kirby 5
- More spacing around and inside the Panel preview
- Screenshot in the README with all alert types

### Removed

- Support for Bootstrap 3.4

## [1.1.0](https://github.com/eXpl0it3r/kirby-bootstrap-blocks/compare/1.0.0...1.1.0) - 2026-10-04

### Added

- Support for Kirby 4 and 5
- Screenshot in the README

### Changed

- Require PHP 8.1
- Build the Panel preview with kirbyup 3

### Fixed

- Install the plugin into `site/plugins` with Composer
- Readable text of the Panel preview in the dark mode of Kirby 5
- Nested paragraphs in the Panel preview
- Escape the alert type in the snippet
- Remove the invalid `index.css`

## [1.0.0](https://github.com/eXpl0it3r/kirby-bootstrap-blocks/releases/tag/1.0.0) - 2023-06-01

First release for Kirby 3 and Bootstrap 3.4.

### Added

- Alert block with a type, an optional dismiss button and formatted text
- Panel preview in the colors of the alert type
