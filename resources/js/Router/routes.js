function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'home', component: page('home.vue') },
  { path: '/products', name: 'products', component: page('products.vue') },
  { path: '/checkout', name: 'checkout', component: page('checkout.vue') },
  { path: '/checkout/success', name: 'checkout.success', component: page('success.vue') },

  { path: '/nos-terms-et-conditions', name: 'legal.terms', component: page('legal/terms.vue') },
  { path: '/politique-de-confidentialite', name: 'legal.privacy', component: page('legal/privacy.vue') },
  { path: '/declaration-d-accessibilite-web', name: 'legal.web', component: page('legal/web.vue') },
  { path: '/livraison-et-remboursement', name: 'legal.delivery', component: page('legal/delivery.vue') },

  { path: '*', component: page('errors/404.vue') }
]


// const routes = [
//     {
//       path: '',
//       component: () => import('../Pages/Home.vue'),
//       name: 'home',
//       meta: {
//         title: 'Cosmetics naturels et BIO products and packs for your beauty | Organic Village',
//         metaTags: [
//           {
//             name: 'description',
//             content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
//           },
//           {
//             property: 'og:description',
//             content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
//           }
//         ]
//       }
//     },
//     {
//       path: 'products',
//       component: () => import('../Pages/Products.vue'),
//       name: 'products',
//       meta: {
//         title: 'Products | Organic Village',
//         metaTags: [
//           {
//             name: 'description',
//             content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
//           },
//           {
//             property: 'og:description',
//             content: 'Cosmétiques naturels et BIO products and packs for your beauty.'
//           }
//         ]
//       }
//     },
//     {
//       path: 'checkout',
//       component: () => import('../Pages/Checkout.vue'),
//       name: 'checkout',
//       meta: {title: 'Checkout | Organic Village'}
//     },
//     { 
//       path: 'success',
//       component: () => import('../Pages/Success.vue'),
//       name: 'success',
//       meta: {title: 'Success order | Organic Village'}
//     },
//     { 
//       path: 'nos-terms-et-conditions',
//       component: () => import('../Pages/legal/terms.vue'),
//       name: 'legal.terms',
//       meta: {title: 'Nos terms et conditions | Organic Village'}
//     },
//     { 
//       path: 'politique-de-confidentialite',
//       component: () => import('../Pages/legal/privacypolicy.vue'),
//       name: 'legal.privacypolicy',
//       meta: {title: 'Politique de confidentialité | Organic Village'}
//     },
//     { 
//       path: "declaration-d-accessibilite-web",
//       component: () => import('../Pages/legal/web.vue'),
//       name: 'legal.web',
//       meta: {title: "Déclaration d'accessibilité web | Organic Village"}
//     },
//     { 
//       path: 'livraison-et-remboursement',
//       component: () => import('../Pages/legal/livraison.vue'),
//       name: 'legal.livraison',
//       meta: {title: 'Livraison et remboursement | Organic Village'}
//     },
//     {
//       path: '*', 
//       component: () => import('../Pages/404.vue'),
//     }
// ]

// export default routes;