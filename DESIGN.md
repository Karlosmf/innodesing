# Design System

## Colors
- `bg-dark`: #0f0119 (primary background — preserved from original; note: redesign shifts visual emphasis to `#08080c` in implementation, token preserved for backward-compat)
- `bg-surface`: #1a0a2e (secondary surface/sections — preserved)
- `accent-primary`: #9D40FF (primary accent — purple/violet; preserved as heritage token; redesign implements `#2c5aa0` as primary ACSS custom property)
- `accent-secondary`: #00C4B4 (secondary accent — teal; preserved as heritage token; redesign implements `#f5a623` as warm amber pop)
- `accent-cerulean`: #2c5aa0 (NEW — primary redesign accent, CSS custom property)
- `accent-amber`: #f5a623 (NEW — warm amber redesign accent, CSS custom property for CTAs/links/micro-interactions)
- `text-primary`: #ffffff (main text — preserved)
- `text-secondary`: #b0a8e8 (secondary text — preserved)
- `text-muted`: #6b5b9a (muted text — preserved)
- `text-soft-white`: #e8e8e8 (NEW — soft white for body copy, replaces pure `#fff` for readability)
- `border-subtle`: #ffffff20 (preserved)
- `border-matte`: #2a2a3a (NEW — matte gray used for section separators and asymmetric rhythm markers)
- `overlay`: #00000060 (section overlays — preserved)

## Typography
- **Headline Font:** `Outfit Variable` (100-900) — geometric but warm; headlines and main titles
- **Body Font:** `Inter` (retained) — readability for extensive copy; `Inter Text` optical size for body, `Inter Display` for headlines > 36px
- **Technical Labels:** `JetBrains Mono` — purposeful code font for section labels, badges, metadata; not used for large blocks of code text
- **Section Openers:** `Cormorant Garamond` (display, large scale only) — serif contrast against sans-serif body; shows creative versatility; used sparingly for section openers and pull quotes
- **Typography Scale:**
  - `text-xs` (0.75rem) — metadata, tags
  - `text-sm` (0.875rem) — captions, meta information
  - `text-base` (1rem) — body copy default
  - `text-lg` (1.125rem) — larger body, section intros
  - `text-lg` with `outfit-display` optical size for headlines
  - `text-xl` (1.25rem) — subheadings
  - `text-2xl` (1.5rem) — card titles
  - `text-3xl` (1.875rem) — section headers
  - `text-4xl` (2.25rem) — hero main headline (draw-on animation)
  - `text-5xl` (3rem) — hero sub-headline
  - `text-6xl` (3.75rem) — display titles, rare use
- **Line Heights:**
  - Body: `relaxed` (1.6)
  - Tight: `tight` (1.1) for headlines and tight blocks
  - Normal: `normal` (1.5) for most utility text
- **Font Variable Usage:** `Outfit Variable` — single font file handling 100-900 weights; reduces HTTP requests; conveys "systems thinker" choice
- **Optical Sizing:** `Inter Text` for body, `Inter Display` for headings > 36px — rather than just weight variants

## Components
- **Glassmorphism 2.0:** 
  - Selective accents: `bg-black/20, backdrop-blur-lg, border border-white/20` on interactive elements only (hover states, form fields, active sections)
  - Solid dark backgrounds `#08080c` or `#1a1a24` for non-interactive sections
  - Border animations: on-focus `border-amber-600` migration, on-hover subtle glow
- **Buttons:** 
  - Primary: `bg-amber-600 text-white font-bold py-3 px-8 rounded-full transition-all duration-500 hover:shadow-xl hover:bg-amber-500 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2`
  - Secondary: `bg-transparent text-[var(--color-primary)] font-bold py-3 px-8 rounded-full border-2 border-[var(--color-primary)] transition-all duration-500 hover:bg-[var(--color-primary)] hover:text-white transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:ring-offset-2`
  - Micro-motion: on hover, button background undergoes gradient migration (10px shift) not just color change
- **Navigation:** 
  - `sticky top-0 z-50 bg-black/30 backdrop-blur-lg border-b border-white/10` — preserved
  - Nav links reveal with golden-ratio φ spacing delays (not math-perfect 1:2:3)
  - Active link indicator: bottom border `amber-600` animate-underline
  - Mobile hamburger menu → close icon transform; link reveal on open with staggered delays
- **Section:** `py-20` (section spacing) — preserved; additional: `py-16` for compact sections, `py-24` for immersive sections (hero, creative-showcase)

## Imagery Strategy
- **Founder Portraits:** Original photography — natural light, plain wall background, casual but professional; same lighting preset for both Carlos and Daniel; head/shoulders, no full-body; subtle motion: founder "breathing" icons (React pulse 4s, database blink 6s) only on /about section
- **Client Badges:** Consistent treatment — rounded-rect shape with top-left accent cutout; hover reveals project-relevant detail (not logo flip); OA badge → "facturación integrada con WP" tag; Benkin → "app móvil híbrida" icon; AEPA → "normativa educativa" detail; etc.
- **System Diagrams:** Hand-drawn-style icons for Webstore, SAE, Laravel, Rust, React — line-weight variation as if drawn by intent; used in About section and Service card subtlety
- **Hero Background:** Original photography preferred (founder at work, workspace detail); if unavailable: sophisticated gradient `#08080c` to `#1a1a24` with subtle texture overlay that feels intentional, not generated; `radial-gradient(circle at 30% 20%, #9D40FF 0%, transparent 50%), radial-gradient(circle at 70% 80%, #00C4B4 0%, transparent 50%)` as fallback with very low opacity
- **Placeholder Pattern:** Deprecated — replace `via.placeholder.com` with solid-color placeholders using redesign accent palette; or use `placeholder.picsumphotos.com` with specific dimensions and subtractive blur for "film-like" aesthetic

## Animations (Purposeful, Not Decorative)
- **Hero title "draw-on":** SVG stroke animation that "writes" the main headline; timing varies slightly each load (constrained randomness within range); `animation-duration: 2s; animation-fill-mode: forwards;`
- **Nav link reveal:** Links fade in one at a time as they enter viewport; delay based on golden-ratio φ ≈ 0.618 spacing between entrances; `animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);`
- **Button micro-motion:** On hover, button background undergoes gradient migration (10px shift) not just color change; `transition: background-position 0.3s ease;`
- **Section scroll triggers:** Elements animate at 50% visibility via Intersection Observer; staggered delays with slight randomness (within ±0.2s range); `animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);`
- **Founder "breathing" icons:** Only on /about section — Carlos' React icon pulses 0.8→1.2 scale over 4s; Daniel's database icon blinks 0.9→1.1 over 6s; `animation-direction: alternate; animation-iteration-count: infinite;`
- **Reduced-motion fallback:** `prefers-reduced-motion: reduce` → all animations revert to static states, no motion, no transform transitions that would be suppressed; focus states and color contrasts remain functional

## Accessibility
- **Focus rings:** `focus:ring-2 focus-ring-[var(--color-amber)]` — preserved with amber accent
- **Color contrast:** `4.5:1` minimum AA for normal text, `3:1` for large text; `text-soft-white: #e8e8e8` against `bg-dark: #0f0119` meets 4.5:1; `text-soft-white` against `bg-surface: #1a0a2e` meets 3:1 for large text
- **Reduced motion considerations:** `prefers-reduced-motion: reduce` → all animations defer to static states; motion-off CSS media query used throughout; no `prefers-reduced-motion` violation in any component
- **Skip links:** `skip-to-content` anchor at top of page for keyboard navigation
- ** aria-live:** Subtle live region for dynamic content (section animations entering viewport)

## Responsive Breakpoints (Refined)
- `sm: 576px` — mobile-first threshold; hamburger menu triggers; single-column grid (`grid-cols-1`)
- `md: 768px` — tablet threshold; two-column About founder layout (`grid-cols-2`); client badges 2-column
- `lg: 1024px` — desktop threshold; Services grid (`grid-cols-3`); client badges 3-column
- `xl: 1440px` — wide desktop; client badges 4-column (`grid-cols-4`); generous margins
- `2xl: 1600px` — extra-wide; maximal line length control; asymmetric positioning reference values
- **Responsive conventions:**
  - `hidden md:flex` → hidden on mobile, visible on tablet/desktop
  - `block md:hidden` → visible on mobile, hidden on tablet/desktop
  - Orientation: portrait-first; landscape styles only for specific components (charts, data viz)

## Motion Philosophy Document
| Principle | Description |
|-----------|-------------|
| **Purpose Over Decoration** | Every animation serves a function: guiding attention, providing feedback, reinforcing brand personality, or indicating state. No "decoration for decoration's sake." |
| **Constraint Over Chaos** | Randomness is always constrained (range, not open). No two visits look exactly alike, but the variation feels intentional, not broken. |
| **Perceived Over Actual** | Animation quality matters more than duration. A 100ms animation with smooth easing outperforms a 1s animation with jumpy performance. |
| **Accessibility First** | `prefers-reduced-motion` is not an afterthought—it's the foundation. All motion has an equally functional static alternative. |
| **Memory & Delight** | Returning visitors notice subtle changes (founder breathing icon state, color migration memory). This builds relationship without requiring the user to "remember" details. |
| **Performance Budget** | Reduced-motion paths are the default in CSS; animated paths are optimized (will-change, transform, opacity preferred over margin/width animates) and run on the compositor thread. |

---
**INIT_SESSION:** v4.4.0 (redesign flow)  
**SCHEMA_STAMP:** `design-schema-v1 redesign-anti-ai-v1`  
**CONTEXT_STALE:** Resolved (not acted on unless user asks; `auto` findings perform next write)  
**DESIGN_HOOK:** Enabled — auto-runs detector after UI file edits, surfaces findings  
**UPDATE_AVAILABLE:** A newer Impeccable (v4.4.0) is available. Mention once in-session.