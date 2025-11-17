# Copilot Instructions: Форсаж Автошкола

## Project Overview
Static HTML/PHP website for driving school "Форсаж" in Voronezh. Architecture is **transition-ready for 1C-Bitrix CMS** integration—all dynamic content areas are marked with `<!-- bx:* -->` placeholder comments for future component replacement.

## Architecture & Structure

### Core Pattern: PHP Includes + Bitrix Placeholders
- **PHP files** in root (`index.php`, `about.php`, etc.) are page templates
- **Includes** (`includes/*.php`) are reusable UI blocks with `<!-- bx:component-name -->` markers
- Current flow: `<?php include __DIR__ . '/includes/header.php'; ?>` → Future: replaced by Bitrix components

**Critical**: Never hardcode URLs/paths. Use relative paths or prepare for Bitrix template variables (`SITE_TEMPLATE_PATH`).

### Key Includes
- `header.php` / `header-index.php` / `header-inner.php` — Three header variants (yellow bg main page vs white inner pages)
- `footer.php` — Footer with CTA using `assets/bg/button.svg` background
- `categories_and_prices.php` — Card slider with custom JS (`js-categories-slider`)
- `form_consult.php` — Consultation form (name, phone fields)
- `steps.php` — Learning stages numbered list
- `breadcrumbs.php` — Breadcrumb navigation

**ID Collision Issue**: Includes like `categories_and_prices.php` have hardcoded `id="categories-title"`. When reused on same page (e.g., `fast_courses.php`), creates duplicate IDs breaking aria-labelledby and anchor links. Solution: parameterize IDs or use unique prefixes when including multiple times.

## CSS Architecture

### Files & Organization
**Модульная структура** (разделена в ноябре 2024):
- `assets/css/styles.css` — Главный файл с импортами всех модулей
- `assets/css/base.css` — CSS-переменные, reset, утилиты, тёмная тема
- `assets/css/layout.css` — Header, footer, навигация
- `assets/css/components/` — Переиспользуемые компоненты (mobile-menu, home-hero, steps, categories, breadcrumbs, form-consult)
- `assets/css/pages/` — Стили страниц (fast-courses, about, faq, gallery, news, price, contacts, search, autodrome, error, etc.)
- `assets/css/media.css` — Responsive breakpoints (mobile-first)

**Важно**: `styles.css.backup` — резервная копия оригинального монолитного файла (4760 строк). Не редактировать.

### Key Conventions
- **BEM naming**: `.category-card`, `.category-card__title`, `.category-card--featured`
- **JS hooks**: `.js-*` prefix (`.js-categories-slider`, `.js-price-tabs`) — no styles on these classes
- **Utilities**: `.u-*` prefix (`.u-visually-hidden`, `.u-text-center`, `.u-container`)
- **CSS Variables**: All colors/spacing in `:root` (`--color-accent: #f2d502`, `--container-max: 1320px`)
- **Units**: Use `rem`/`em` for type/spacing, `clamp()` for responsive sizing. Avoid px except fixed dimensions.
- **Breakpoints**: `768px`, `992px`, `1200px`, `1440px`, `1920px`

### Known Issues (from `docs/css-review.md`)
- Hardcoded colors still exist (migrate to CSS vars)
- Duplicate `@media (max-width: 1024px)` rules across files
- Dark theme (`.theme-dark`) incomplete—only basic colors switched
- Missing `:focus-visible` states on interactive elements

## JavaScript Patterns

### Module Structure (`assets/js/app.js`)
- **No framework** — Vanilla ES6 modular code
- Init on `DOMContentLoaded`
- **No inline handlers** (`onclick`) — attach via JS only
- Data passed through `data-*` attributes

### Components
1. **Theme Toggle** (`[data-action="toggle-theme"]`)
   - Stores to `localStorage.theme` (light/dark)
   - Swaps images via `data-logo-light`/`data-logo-dark` attributes
   - Updates `.theme-dark` class on `<html>`

2. **Mobile Menu** (`#site-menu`)
   - Focus trap implementation
   - Keyboard navigation (Esc to close)
   - State management via `data-state="opening|open|closing|closed"`
   - Body class `.is-menu-open` prevents scroll

3. **Price Tabs** (`.js-price-tabs`)
   - ARIA tablist pattern with keyboard navigation
   - Arrow keys, Home/End support

4. **Category Slider** (`.js-categories-slider`)
   - Custom carousel using CSS Grid + transforms
   - Calculates slides via CSS variable `--categories-per-view`
   - Touch/pointer events for swipe
   - ResizeObserver for responsive recalculation
   - Controls: `[data-role="prev|next"]`, progress bar, pagination

## Semantic HTML & Accessibility

### Non-Negotiables
- **One `<h1>` per page** in `<main>` (currently missing on `index.php`—should be in hero)
- Don't skip heading levels
- Links (`<a>`) for navigation, buttons (`<button>`) for actions
- All interactive elements need visible `:focus` (not removed without replacement)
- Forms: `<label for="...">` paired with `<input id="...">`
- Images: meaningful alt text or empty `alt=""` for decorative

### ARIA Usage
- `aria-label` on nav regions
- `aria-labelledby` linking sections to headings
- `aria-hidden="true"` on decorative elements
- `aria-live="polite"` for dynamic status updates (slider)
- **Watch for**: Duplicate IDs break `aria-labelledby` references

## Image Strategy

### Required Pattern
```html
<picture>
  <source type="image/avif" srcset="/assets/img/hero.avif" />
  <source type="image/webp" srcset="/assets/img/hero.webp" />
  <img src="/assets/img/hero.jpg" alt="…" loading="lazy" width="…" height="…" />
</picture>
```
- Always specify `width`/`height` to prevent layout shift
- Use `loading="lazy"` except above-fold images (`loading="eager"`)
- Icons: SVG (inline or sprite at `assets/icons/`)—no raster icons for UI

## Testing & Quality

### Before Commit
- UTF-8 without BOM, LF line endings
- No `!important` except utilities (with comment explaining why)
- No empty wrapper `<div>`s without semantic purpose
- Validate unique IDs across page after includes
- Check keyboard navigation works (Tab, Shift+Tab, Enter, Esc)
- Verify WCAG 2.1 AA contrast (4.5:1 text, 3:1 large/icons)

### Known Gaps (from `docs/html-seo-review.md`)
- Missing meta tags: `description`, `robots`, `canonical`, Open Graph
- No schema.org structured data (Organization, Breadcrumbs, Course)
- Main pages lack unique `<h1>` (index.php has hero but no h1)

## Bitrix Integration Prep

### Current Placeholder Format
```html
<!-- bx:breadcrumb -->
<!-- bx:main-menu -->
<!-- bx:categories-slider -->
<!-- bx:footer-cta -->
```

### When Migrating
1. Replace `<?php include ... ?>` with Bitrix component calls
2. Convert hardcoded content in includes to component parameters
3. Move CSS/JS to `/local/templates/forsazh/`
4. Replace static paths with `<?= SITE_TEMPLATE_PATH ?>/assets/...`
5. Add template-level meta tag management

## Anti-Patterns to Avoid
❌ Inline styles/scripts or `onclick` attributes  
❌ Hardcoded full URLs/domains  
❌ jQuery or UI frameworks (project is vanilla JS)  
❌ Removing `:focus` outlines without replacement  
❌ Images for text/UI icons  
❌ Duplicate IDs from repeated includes  
❌ Generic BEM blocks without semantic HTML wrapper

## Quick Reference

**Start new page**: Copy `index.php` structure, swap includes as needed  
**Add component**: Create in `includes/`, mark dynamic areas with `<!-- bx:name -->`  
**Modify styles**: Edit `assets/css/styles.css`, use existing CSS vars  
**Add JS behavior**: Extend modules in `assets/js/app.js`, use `data-action="..."` triggers  
**Check accessibility**: Run keyboard-only test, verify focus states, validate heading hierarchy
