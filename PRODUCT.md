# Product Context

## Product Overview
**Name:** InnoDesign  
**Tagline:** Transformamos ideas en soluciones digitales con un diseño inspirado en la estética moderna y oscura de n8n.io.  
**Category:** Landing page / Marketing website  
**Mode:** Persuade (visitor decides and acts; design is the product)  
**Redesign Direction:** Anti-AI, Human-First Creative Web — industrial dark palette, purposeful asymmetry, purposeful motion, founder-driven narrative

## Positioning
- **Market:** Landing pages / marketing websites for B2B service providers
- **Against:** Generic template sites, AI-generated designs without craft, generic dark-mode portfolios
- **Differentiator:** Human-first design with purposeful asymmetry, founder-driven narrative, original imagery over AI clichés
- **Sweet Spot:** Companies valuing sophisticated dark aesthetics + technical credibility (system integration, full-stack) + design craft

## Operating Context
- **Primary Audience:** Business owners and decision-makers seeking professional web presence
- **Secondary Audience:** Companies looking to establish credibility through modern web design
- **Tertiary Audience:** Clients who value sophisticated, dark-aesthetic digital products with human craft over AI-generated templates
- **Geography:** Spanish-speaking market primarily, with English-facing documentation
- **Technical Constraints:** Tailwind CSS v4, no build step beyond compilation, Formspree endpoint
- **Content Constraints:** Limited team photos; 7 real client logos; founder expertise in frontend (Carlos) + backend (Daniel)

## Evidence on Hand
- **Existing Brand Assets:** #9D40FF (purple/violet accent), #00C4B4 (teal/cyan accent), #0f0119 (near black) background, Inter + Source Code Pro font
- **Existing Pages:** Home/Hero, Servicios, Portafolio, Proceso, Contacto
- **Existing Content:** 7 client logos (O Agostini, Benkin, AEPA, Zona Country, RV 8206, ISPI 4027, Acuna Maquinarias), founder descriptions (Carlos: Frontend/UI, Daniel: Backend/system integration)
- **Technical Baseline:** Current HTML structure with Tailwind classes, CSS custom properties in progress, JavaScript for cursor/3D cubes effects

## Product Principles
- **Anti-AI Integrity:** No AI-generated imagery, no cliché purple-teal gradients as primary system, purposeful (not random) motion
- **Human Craft Over Speed:** Deliberate asymmetry over uniform grids; original imagery over stock; handcrafted motion over preset animations
- **Founder Credibility:** Carlos (frontend/UI/UX) + Daniel (backend/systems integration) must be visibly real, not generic
- **Dark Aesthetic Preservation:** Dark theme must remain dominant, but evolve from "near-black default" to "industrial dark with intention"
- **Technical Functionality:** Must work mobile+desktop, Formspree contact form, responsive design, accessible focus states

## Key Features
1. **Hero section** with extruded 3D typography and gradient animation
2. **Services section** (glassmorphism 2.0 cards with circuit animation on hover) - Credibility, Identity, Reach
3. **Portfolio section** with interactive project cards, staggered entrances, client badge hover details
4. **Process section** - Workflow visualization with 4-step motion system
5. **Contact section** with glass form and micro-interactions

## REDesign Interview Anchors (Documented for Future Reference)
| Pillar | Question | Answer Documented |
|--------|----------|-------------------|
| **Palette** | Keep `#9D40FF`/`#00C4B4` as heritage, or transition to `#2c5aa0` + `#f5a623`? | Transition — cerulean + amber is the primary system; originals used sparingly as accent tokens |
| **Typography** | Retain `Inter`+`Source Code Pro`, or transition to `Outfit`+`JetBrains`+`Cormorant`? | Transition — Outfit Variable for headlines, JetBrains Mono for labels, Cormorant Garamond for section openers, Inter retains body copy |
| **Layout** | Uniform grid, or purposeful asymmetry per section? | Asymmetry — Hero (headline extends beyond), Services (varying card heights), About (founder split), Clients (masonry with tags), Contact (staggered fields) |
| **Motion** | Decorative presets, or purposeful character-driven system? | Purposeful — hero "draw-on," nav φ-spacing, button gradient migration, Intersection Observer triggers, founder breathing icons |
| **Imagery** | Placeholders, or original founder/workspace content? | Original — founder portraits (natural light, same preset), workspace details, stylized partner badges, hand-drawn system icons |

---
**INIT_SESSION:** v4.4.0 (redesign flow)  
**SCHEMA_STAMP:** `product-schema-v1 redesign-anti-ai-v1`  
**CONTEXT_STALE:** Resolved (not acted on unless user asks; `auto` findings perform next write)  
**DESIGN_HOOK:** Enabled — auto-runs detector after UI file edits, surfaces findings  
**UPDATE_AVAILABLE:** A newer Impeccable (v4.4.0) is available. Mention once in-session.