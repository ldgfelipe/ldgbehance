const router = new VueRouter({
    routes: [
        {
            path: "/",
            component: httpVueLoader("pages/ini.vue"),
          },
    ],
});