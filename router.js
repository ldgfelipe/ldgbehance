const router = new VueRouter({
    routes:[
        {
            path: "/",
            component: httpVueLoader(httpVueLoader("pages/ini.vue")
        }
    ]
})