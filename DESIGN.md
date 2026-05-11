---
name: AgroTech Digital Portal
colors:
  surface: '#f8f9fa'
  surface-dim: '#d9dadb'
  surface-bright: '#f8f9fa'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f5'
  surface-container: '#edeeef'
  surface-container-high: '#e7e8e9'
  surface-container-highest: '#e1e3e4'
  on-surface: '#191c1d'
  on-surface-variant: '#3d4a3f'
  inverse-surface: '#2e3132'
  inverse-on-surface: '#f0f1f2'
  outline: '#6d7a6e'
  outline-variant: '#bccabc'
  surface-tint: '#006d37'
  primary: '#006d37'
  on-primary: '#ffffff'
  primary-container: '#27ae60'
  on-primary-container: '#00391a'
  inverse-primary: '#61de8a'
  secondary: '#4e6073'
  on-secondary: '#ffffff'
  secondary-container: '#cfe2f9'
  on-secondary-container: '#526478'
  tertiary: '#006397'
  on-tertiary: '#ffffff'
  tertiary-container: '#3e9fe3'
  on-tertiary-container: '#003351'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#7efba4'
  primary-fixed-dim: '#61de8a'
  on-primary-fixed: '#00210c'
  on-primary-fixed-variant: '#005228'
  secondary-fixed: '#d1e4fb'
  secondary-fixed-dim: '#b5c8df'
  on-secondary-fixed: '#091d2e'
  on-secondary-fixed-variant: '#36485b'
  tertiary-fixed: '#cce5ff'
  tertiary-fixed-dim: '#92ccff'
  on-tertiary-fixed: '#001d31'
  on-tertiary-fixed-variant: '#004b73'
  background: '#f8f9fa'
  on-background: '#191c1d'
  surface-variant: '#e1e3e4'
typography:
  display-lg:
    fontFamily: Metropolis
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Metropolis
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Metropolis
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: JetBrains Mono
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
    letterSpacing: 0.02em
  headline-lg-mobile:
    fontFamily: Metropolis
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 36px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  stack-sm: 8px
  stack-md: 16px
  stack-lg: 32px
  section-padding: 80px
---

## Brand & Style

The brand identity centers on the intersection of biological growth and technological precision. As an academic graduation project, the visual language must communicate both the organic nature of agriculture and the rigorous, data-driven nature of modern engineering.

The chosen style is **Modern Corporate Minimalism** with subtle **Glassmorphism** influences. This approach uses generous whitespace to ensure high readability of technical documentation, while employing blurred background imagery of lush greenery to ground the high-tech UI in its natural context. The emotional response should be one of "Reliable Innovation"—trustworthy, efficient, and forward-thinking.

## Colors

The palette leverages a high-contrast relationship between organic vitality and corporate stability.

- **Primary (Vibrant Nature Green):** Used for primary actions, success states, and key data points related to plant health. It signifies growth and the "active" state of the irrigation system.
- **Secondary (Corporate Dark Gray):** Used for typography, navigation bars, and technical hardware specifications. It provides the "professional" weight required for an academic project.
- **Backgrounds:** A tiered approach using pure white for the main canvas and a very light gray (#f8f9fa) for secondary content sections to create subtle visual grouping without heavy borders.
- **Accents:** A technical blue is reserved for links and GitHub integrations to maintain industry-standard mental models.

## Typography

The typography strategy focuses on clarity and technical hierarchy. 

**Metropolis** is utilized for headlines to provide a geometric, structured feel that echoes architectural and engineering blueprints. **Inter** is the workhorse for all body copy and documentation, chosen for its exceptional legibility in data-heavy contexts. For hardware IDs, sensor readings, and code snippets, **JetBrains Mono** provides a distinct "developer" aesthetic that reinforces the technological nature of the portal.

Line heights are intentionally kept airy (1.5x for body) to reduce cognitive load during long reading sessions of project documentation.

## Layout & Spacing

The system follows a **Fixed Grid** philosophy for desktop to maintain a structured, editorial feel, transitioning to a fluid single-column layout for mobile devices.

- **Desktop:** 12-column grid with a 1280px max-width. Gutters are fixed at 24px to ensure breathing room between data cards.
- **Spacing Rhythm:** Based on an 8px scale. Vertical stacking of elements should follow the `stack-` variables to maintain consistent visual momentum.
- **Sectioning:** Use large 80px vertical padding between major project chapters (e.g., from "System Architecture" to "Hardware Inventory") to clearly signal content shifts.

## Elevation & Depth

Hierarchy is established through **Ambient Shadows** and **Tonal Layering**. 

Cards containing plant guides or hardware data use a soft, diffused shadow (0px 4px 20px rgba(44, 62, 80, 0.08)) to appear slightly lifted from the light gray background. This "Soft Elevation" creates a tactile feel without the clutter of heavy lines. 

When imagery is used, a background blur (10px to 20px) is applied to the image layer, with sharp UI elements placed on top in high-contrast white containers. This ensures that the aesthetic "Agrotech" photos do not interfere with the readability of the data.

## Shapes

The design system uses a **Rounded** shape language to soften the "industrial" feel of the technology and align with the organic theme of agriculture.

- **Standard Elements:** 8px (0.5rem) radius for input fields, small buttons, and tags.
- **Large Elements:** 16px (1rem) radius for plant guide cards and hardware inventory blocks.
- **Interactive States:** Subtle expansion (1.02x scale) on hover for cards to emphasize interactivity.

## Components

### Buttons
- **Primary CTA (PDF Download):** High-contrast Vibrant Green background with White text. Includes a leading "Download" icon. Uses `rounded-lg` for a prominent, friendly appearance.
- **Secondary (GitHub):** Dark Gray outline with an icon. Ghost-style background that fills on hover.

### Structured Data Cards
- **Plant Guides:** Feature a small thumbnail image at the top with a 16px corner radius, followed by title and brief stats (e.g., "Humidity: 60%").
- **Hardware Inventory:** Uses a "Spec-Sheet" style. A `label-md` (monospaced) font for technical IDs, with a status indicator (Green dot for "Online").

### Form Fields
- Minimalist design with a 1px border (#d1d5db). 
- On focus, the border transitions to Primary Green with a soft 4px outer glow in the same color.

### Navigation Bar
- Sticky top positioning.
- Semi-transparent white background with a backdrop-filter (blur: 10px) to allow content to scroll underneath while maintaining legibility.
- Integration of icon-only links for GitHub and PDF downloads on the far right.
