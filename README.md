# Utility Billing Dashboard

Laravel application for managing properties, tenants, utility charges, and Ratio Utility Billing System (RUBS) invoices.

## Planned capabilities

- Multiple properties with property-specific utility settings
- Admin-created tenant accounts and password recovery
- Water, sewer, trash, pest control, internet, and configurable services
- RUBS charge calculation, review, approval, and invoice history
- Tenant dashboard for invoices and billing details

## Local development

This project requires PHP 8.3+, Composer, and Node.js. After installing those tools:

```bash
composer run setup
npm run dev
```

Run the test suite with:

```bash
composer test
```

The initial commit contains the Laravel application scaffold. Billing rules, property management, authentication roles, and tenant workflows will be added incrementally.
