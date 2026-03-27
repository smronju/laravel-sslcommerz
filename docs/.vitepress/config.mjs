import { defineConfig } from 'vitepress'

export default defineConfig({
  base: '/laravel-sslcommerz/',
  title: "SSLCommerz Laravel",
  description: "The official documentation for smronju/laravel-sslcommerz",
  themeConfig: {
    logo: '/banner.png',
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Documentation', link: '/guide/01-overview' },
      { text: 'GitHub', link: 'https://github.com/smronju/laravel-sslcommerz' },
    ],
    sidebar: [
      {
        text: 'Documentation',
        items: [
          { text: '01 Overview', link: '/guide/01-overview' },
          { text: '02 Installation', link: '/guide/02-installation' },
          { text: '03 Configuration', link: '/guide/03-configuration' },
          { text: '04 Routes', link: '/guide/04-routes' },
          { text: '05 Payment Flow', link: '/guide/05-payment-flow' },
          { text: '06 Complete Controller', link: '/guide/06-complete-controller' },
          { text: '07 Refunds', link: '/guide/07-refunds' },
          { text: '08 API Reference', link: '/guide/08-api-reference' },
          { text: '09 Response Objects', link: '/guide/09-response-objects' },
        ]
      }
    ],
    socialLinks: [
      { icon: 'github', link: 'https://github.com/smronju/laravel-sslcommerz' }
    ],
    footer: {
      message: 'Released under the MIT License.',
      copyright: 'Copyright © 2026-present Mohammad Shoriful Islam Ronju'
    }
  }
})
