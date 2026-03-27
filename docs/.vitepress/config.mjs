import { defineConfig } from 'vitepress'

export default defineConfig({
  base: '/laravel-sslcommerz/',
  title: "SSLCommerz Laravel",
  description: "The official documentation for smronju/laravel-sslcommerz",
  themeConfig: {
    logo: '/banner.png',
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Guide', link: '/guide/installation' },
    ],
    sidebar: [
      {
        text: 'Getting Started',
        items: [
          { text: 'Installation', link: '/guide/installation' },
          { text: 'Configuration', link: '/guide/configuration' },
        ]
      },
      {
        text: 'Usage',
        items: [
          { text: 'Initiate Payment', link: '/guide/initiate-payment' },
          { text: 'Validate Payment', link: '/guide/validate-payment' },
          { text: 'Refunds', link: '/guide/refunds' },
          { text: 'Callbacks & IPN', link: '/guide/callbacks' },
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
