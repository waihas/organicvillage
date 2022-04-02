const routes = [
    {
      path: '',
      component: () => import('../Pages/Home.vue'),
      name: 'home',
      meta: {
        title: 'Cosmetics naturels et BIO products and packs for your beauty | Organic Village',
        metaTags: [
          {
            name: 'description',
            content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
          },
          {
            property: 'og:description',
            content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
          }
        ]
      }
    },
    {
      path: 'products',
      component: () => import('../Pages/Products.vue'),
      name: 'products',
      meta: {
        title: 'Products | Organic Village',
        metaTags: [
          {
            name: 'description',
            content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
          },
          {
            property: 'og:description',
            content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
          }
        ]
      }
    },
    {
      path: 'checkout',
      component: () => import('../Pages/Checkout.vue'),
      name: 'checkout',
      meta: {title: 'Checkout | Organic Village'}
    },
    { 
      path: 'success',
      component: () => import('../Pages/Success.vue'),
      name: 'success',
      meta: {title: 'Success order | Organic Village'}
    },
    { 
      path: 'nos-terms-et-conditions',
      component: () => import('../Pages/legal/terms.vue'),
      name: 'legal.terms',
      meta: {title: 'Nos terms et conditions | Organic Village'}
    },
    { 
      path: 'politique-de-confidentialite',
      component: () => import('../Pages/legal/privacypolicy.vue'),
      name: 'legal.privacypolicy',
      meta: {title: 'Politique de confidentialité | Organic Village'}
    },
    { 
      path: "declaration-d-accessibilite-web",
      component: () => import('../Pages/legal/web.vue'),
      name: 'legal.web',
      meta: {title: "Déclaration d'accessibilité web | Organic Village"}
    },
    { 
      path: 'livraison-et-remboursement',
      component: () => import('../Pages/legal/livraison.vue'),
      name: 'legal.livraison',
      meta: {title: 'Livraison et remboursement | Organic Village'}
    },
    {
      path: '*', 
      component: () => import('../Pages/404.vue'),
    }
]

export default routes;