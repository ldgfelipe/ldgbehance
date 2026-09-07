const routes=[
    {path:"/",component:httpVueLoader('./pages/index.vue')},
    {path:"/quiensoy",component:httpVueLoader('./pages/quiensoy.vue')},
    {path:"/avisodeprivacidad",component:httpVueLoader('./pages/avisodeprivacidad.vue')},
]
const router=new VueRouter({
    routes:routes
})

Vue.directive('scroll',{
  inserted:function (el,binding){
    let f=function (evt){
      if(binding.value(evt,el)){
        window.removeEventListener('scroll',f)
      }
    }
    window.addEventListener('scroll',f)
  }
})


new Vue({
    el:"#app",
    data(){
      return {
        menuact:false
      }
    },
    methods:{
      enviogral(p){
        this.menuact=p
      }
    },
    router,
    vuetify: new Vuetify({
        theme: {
          themes: {
            light: {
              primary: '#111111',
              secondary: '#FFFFFF',
              accent: '#FF6B00',
              success: '#00A859',
              error: '#ED3237',
            },
          },
        },
        icons: {
            iconfont:['mdi'],
          },
      }),
    components:{
        'cabecera':httpVueLoader('./layout/cabecera.vue'),
        'piedepagina':httpVueLoader('./layout/piedepagina.vue')
    }
})