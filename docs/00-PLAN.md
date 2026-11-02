# AURUM - MASTER PLAN

## Interpretation of the Specification
AURUM is a comprehensive, production-grade, multi-surface platform for a gold-mining and general mining consultation company. It includes:
- A public website (trilingual, 3D elements, CMS driven).
- A customer portal (project tracking, lab orders, billing).
- An internal staff system (CRM, HR, LIMS, Operations, Finance, etc.).
- The system must be trilingual (English, Arabic, Somali) natively.
- The UI MUST NOT use gradients, blur, or hover animations (strict flat, Fluent-inspired design).
- The tech stack includes Laravel 12.x, Vue 3 + Inertia, Tailwind CSS v4, MySQL 8.4, and Reverb.

## Final Package List with Versions
- **Backend:**
  - PHP 8.4+
  - Laravel 12.x (latest stable)
  - spatie/laravel-permission
  - spatie/laravel-translatable
  - spatie/laravel-activitylog
  - spatie/laravel-medialibrary
  - spatie/laravel-pdf
  - brick/money
  - symfony/expression-language
  - maatwebsite/excel
  - laravel/reverb
  - laravel/fortify
  - laravel/sanctum
  - meilisearch/meilisearch-php
- **Frontend:**
  - Node 22 LTS+
  - Vue 3.5+
  - @inertiajs/vue3 (Inertia.js v2)
  - tailwindcss v4
  - unplugin-icons (Fluent UI System Icons)
  - reka-ui (headless primitives)
  - vee-validate + zod
  - @tanstack/vue-table
  - vue-i18n
  - vue-chartjs + chart.js
  - three.js
  - gsap
- **Infrastructure:**
  - MySQL 8.4
  - Redis 7+
  - Meilisearch
  - Qdrant
  - Docker Compose

## Repository Tree
```
aurum/
├─ app/
│  ├─ Domain/
│  ├─ Http/
│  ├─ Support/
│  └─ Providers/
├─ bootstrap/, config/, database/
├─ lang/{en,ar,so}/
├─ resources/
│  ├─ views/
│  ├─ js/
│  ├─ css/
│  └─ fonts/
├─ routes/
├─ docker/
├─ whatsapp-gateway/
├─ docs/
├─ tests/
└─ .github/workflows/
```

## Phase Plan
- Phase 0: Foundation & Design System
- Phase 1: Identity, RBAC, Audit, Settings
- Phase 2: Public Website + CMS
- Phase 3: CRM, Leads, Quotes, Contracts, Partners
- Phase 4: LIMS Core (the flagship)
- Phase 5: Customer Portal
- Phase 6: Projects & Operations
- Phase 7: Finance
- Phase 8: HR & Payroll
- Phase 9: Communications Hub, WhatsApp (OpenWA), AI, Automation
- Phase 10: Mobile & Offline
- Phase 11: Reports, Analytics, Market Prices, Polish
- Phase 12: Hardening, Documentation, Handover

## Assumptions
- We will use standard Composer and NPM for dependency management.
- We will start by generating a fresh Laravel 12.x project as the foundation.
- We will execute as much of the phase plan as possible within the constraints of our autonomous execution environment, prioritizing Phase 0 and Phase 1 to establish the core architecture.
