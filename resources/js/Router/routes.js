const routes = [
    {
      path: '',
      component: () => import('../Pages/Home.vue'),
      name: 'home'
    },
    {
      path: 'products',
      component: () => import('../Pages/Products.vue'),
      name: 'products'
    },
    {
      path: 'checkout',
      component: () => import('../Pages/Checkout.vue'),
      name: 'checkout'
    },
    { 
      path: 'success',
      component: () => import('../Pages/Success.vue'),
      name: 'success'
    },
]

export default routes;