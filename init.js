const routes=[
    {path:"/",component:httpVueLoader('./pages/index.vue')}
]
const router=new VueRouter({
    routes:routes
})


new Vue({
    el:"#app",
    router,
    vuetify: new Vuetify({
        theme: {
          themes: {
            light: {
              primary: '#294255',
              secondary: '#E8F1F2',
              accent: '#8c9eff',
              success:'#00A859',
              error: '#ED3237',
            },
          },
        },
        icons: {
            iconfont: 'md', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
          },
      }),
    components:{
        'cabecera':httpVueLoader('./layout/cabecera.vue'),
        'piedepagina':httpVueLoader('./layout/piedepagina.vue')
    }
})