# Panth Checkout Success

[![Magento 2.4.4 - 2.4.8](https://img.shields.io/badge/Magento-2.4.4%20--%202.4.8-orange)]()
[![PHP 8.1 - 8.4](https://img.shields.io/badge/PHP-8.1%20--%208.4-blue)]()
[![License: Proprietary](https://img.shields.io/badge/License-Proprietary-red)]()

**Modern, fully configurable checkout success page** for Magento 2.
Replaces the default, bare-bones order confirmation with a polished
layout that displays everything the customer needs — order details, item
thumbnails, addresses, totals, payment/shipping method, and more — all
controlled from the admin panel.

---

## Features

- **Two layout modes** — Two Column (details + summary sidebar) or
  Single Column (centered). Selectable from admin config.
- **Order details card** — order number, date, payment method, and
  shipping method displayed in a clean meta grid.
- **Ordered items with thumbnails** — product images, names, SKUs,
  quantities, and row totals.
- **Shipping & billing addresses** — rendered via Magento's address
  renderer. Billing address shown only when it differs from shipping.
- **Order totals summary** — subtotal, shipping, tax, discount, and
  grand total.
- **Guest account creation** — prompts guest customers to create an
  account for easier order tracking.
- **Continue Shopping button** — configurable visibility.
- **Invoice PDF download** — link shown to logged-in customers when
  invoices are available.
- **CMS block slot** — drop any CMS block below the order details
  (trust signals, upsells, social links, etc.).
- **Custom tracking scripts** — inject HTML/JS with order variable
  placeholders (`{{orderId}}`, `{{orderTotal}}`, `{{customerEmail}}`,
  etc.) for GA4, Facebook Pixel, or any conversion tracker.
- **Per-section visibility toggles** — show/hide each section
  independently from admin config.
- **Custom thank-you title and message** — fully configurable per
  store view.
- **Data patch** — installs a sample "Trust Signals" CMS block with
  free returns, fast shipping, 24/7 support, and secure payments
  icons.

---

## Installation

### Composer (recommended)

```bash
composer require mage2kishan/module-checkout-success
bin/magento module:enable Panth_CheckoutSuccess
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:flush
```

### Manual zip

1. Download the extension package zip
2. Extract to `app/code/Panth/CheckoutSuccess`
3. Run the same `module:enable ... cache:flush` commands above

---

## Requirements

| | Required |
|---|---|
| Magento | 2.4.4 — 2.4.8 (Open Source / Commerce / Cloud) |
| PHP | 8.1 / 8.2 / 8.3 / 8.4 |
| Panth Core | mage2kishan/module-core ^1.0 |

---

## Configuration

Open **Stores > Configuration > Panth Extensions > Checkout Success Page**.

### General

| Setting | Default | Description |
|---|---|---|
| Enable Custom Success Page | Yes | Replace the default Magento success page |

### Content Sections

| Setting | Default | Description |
|---|---|---|
| Show Order Number | Yes | Display order number in details card |
| Show Order Date | Yes | Display order date in details card |
| Show Ordered Items | Yes | Display items with thumbnails |
| Show Order Totals | Yes | Display totals summary sidebar |
| Show Shipping Address | Yes | Display shipping/billing addresses |
| Show Payment Method | Yes | Display payment method name |
| Show Create Account | Yes | Guest account creation prompt |
| Show Continue Shopping | Yes | Continue Shopping button |
| Additional CMS Block | None | CMS block rendered below order details |

### Appearance

| Setting | Default | Description |
|---|---|---|
| Page Layout | Two Column | Two Column or Single Column layout |
| Thank You Title | Thank you for your order! | Main heading text |
| Thank You Message | (configurable) | Subheading message text |

### Tracking & Scripts

| Setting | Default | Description |
|---|---|---|
| Custom Scripts | (empty) | HTML/JS with order variable placeholders |

**Available placeholders:** `{{orderId}}`, `{{orderTotal}}`,
`{{orderSubtotal}}`, `{{orderCurrency}}`, `{{customerEmail}}`,
`{{paymentTitle}}`, `{{shippingTitle}}`, `{{couponCode}}`,
`{{orderItemCount}}`, `{{shippingAmount}}`, `{{taxAmount}}`,
`{{discountAmount}}`

---

## Support

| Channel | Contact |
|---|---|
| Email | kishansavaliyakb@gmail.com |
| Website | https://kishansavaliya.com |
| WhatsApp | +91 84012 70422 |

---

## License

Proprietary — see `LICENSE.txt`. One license per production domain.

---

## About the developer

Built and maintained by **Kishan Savaliya** — https://kishansavaliya.com.
Builds high-quality, security-focused Magento 2 extensions and themes
for both Hyva and Luma storefronts.
