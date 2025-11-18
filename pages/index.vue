<template>
  <v-main class="secondary">

    <v-dialog v-model="menuaction" max-width="300">
      <v-card>
        <v-card-title>
          <v-spacer></v-spacer>
          <v-btn class="secondary primary--text" @click="closemenu(false)"><v-icon>mdi-close</v-icon></v-btn>
        </v-card-title>
        <v-card-text>

          <v-list dense>
            <v-subheader>Menu General</v-subheader>
            <v-list-item-group v-model="selectedItem" color="primary">
              <v-list-item v-for="(item, i) in listamenu" :key="i" @click="navegar(item.link)">
                <v-list-item-icon>
                  <v-icon v-text="item.icon"></v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                  <v-list-item-title v-text="item.text"></v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list-item-group>
          </v-list>




        </v-card-text>
      </v-card>
    </v-dialog>

      <!-- HERO -->
    <v-container class="py-16">
      <v-row align="center" justify="space-between">
        
        <!-- Texto -->
             <v-col cols="12" md="12" >
              <v-img src="img/logo.png" style="width:100%; max-width:700px; margin:0 auto; padding:10px;" />
             </v-col>
        <v-col cols="12" md="6">
          <h1 class="text-h2 font-weight-bold mb-4">
            Transformo ideas en productos digitales<br>
            <span class="text-primary">rápidos, funcionales y escalables.</span>
          </h1>

          <p class="text-body-1 mb-6">
            Soy Felipe Reyes, desarrollador full-stack y consultor de tecnología.
            Ayudo a empresas, startups y profesionales independientes a construir
            soluciones digitales que generan resultados reales: optimización,
            automatización y crecimiento.
          </p>

          <v-btn color="primary" large class="mr-4" href="https://wa.me/2227328662?text=Quisiera agendar una reunion" target="_blank">
            Agendar una reunión
          </v-btn>

        </v-col>

        <!-- Imagen o ilustración -->
        <v-col cols="12" md="5" class="text-center">
          <v-img
            src="https://cdn.dribbble.com/users/1162077/screenshots/3848914/programmer.gif"
            max-width="380"
            class="mx-auto"
          />
        </v-col>

      </v-row>
    </v-container>

    <!-- SECCION DE SERVICIOS -->
    <v-container class="py-14">
      <h2 class="text-h4 text-center font-weight-bold mb-10">
        Servicios profesionales
      </h2>

      <v-row>
        <v-col cols="12" md="4">
          <v-card elevation="4" class="pa-6 rounded-xl">
            <h3 class="text-h6 font-weight-bold mb-2">Desarrollo Web & Sistemas</h3>
            <p>
              Diseño y desarrollo de plataformas, sistemas administrativos,
              dashboards, landing pages y aplicaciones personalizadas.
            </p>
          </v-card>
        </v-col>

        <v-col cols="12" md="4">
          <v-card elevation="4" class="pa-6 rounded-xl">
            <h3 class="text-h6 font-weight-bold mb-2">Automatización & IA</h3>
            <p>
              Implemento flujos automatizados, asistentes AI, bots de atención,
              clasificadores y procesos inteligentes adaptados a tu negocio.
            </p>
          </v-card>
        </v-col>

        <v-col cols="12" md="4">
          <v-card elevation="4" class="pa-6 rounded-xl">
            <h3 class="text-h6 font-weight-bold mb-2">Consultoría Tecnológica</h3>
            <p>
              Acompañamiento estratégico para ejecutar proyectos, optimizar recursos,
              elegir tecnologías adecuadas y ejecutar soluciones reales.
            </p>
          </v-card>
        </v-col>
      </v-row>
    </v-container>

    <!-- PORTAFOLIO / PROYECTOS -->
    <v-container class="py-14">
      <h2 class="text-h4 text-center font-weight-bold mb-10">
        Proyectos recientes
      </h2>

      <v-row>
        <v-col cols="12" md="4">
          <v-card elevation="4" class="rounded-xl" >
            <v-img src="img/inicio/agenda.jpg"  />
            <v-card-text class="secondary--text">
              <h3 class="text-h6 font-weight-bold black--text">Sistema Médico</h3>
              <p class="black--text">Agenda, reseñas, automatización y panel administrativo completo.</p>
            </v-card-text>
          </v-card>
        </v-col>

        <v-col cols="12" md="4">
          <v-card elevation="4" class="rounded-xl">
            <v-img src="img/inicio/ecommerce.jpg" />
            <v-card-text>
              <h3 class="text-h6 font-weight-bold">E-commerce personalizado</h3>
              <p>Checkout optimizado, inventarios y automatización de pedidos.</p>
            </v-card-text>
          </v-card>
        </v-col>

        <v-col cols="12" md="4">
          <v-card elevation="4" class="rounded-xl">
            <v-img src="img/inicio/ia-empresas.jpg" />
            <v-card-text>
              <h3 class="text-h6 font-weight-bold">Asistente IA para empresas</h3>
              <p>Consultas inteligentes, clasificación automática y CRM conectado.</p>
            </v-card-text>
          </v-card>
        </v-col>

      </v-row>
    </v-container>

    <!-- CTA FINAL -->
    <v-container class="py-16 text-center">
      <h2 class="text-h4 font-weight-bold mb-4">
        ¿Listo para impulsar tu proyecto?
      </h2>
      <p class="text-body-1 mb-6">
        Agenda una llamada y diseñemos la solución perfecta para tu idea o empresa.
      </p>

      <v-btn color="primary" large class="px-10 py-5" href="https://wa.me/2227328662?text=Quisiera una cotización sobre un proyecto" target="_blank">
        Contactar ahora
      </v-btn>
    </v-container>
    <!---HERO------>




    <v-container class="primary white--text elevation-23">
       <div style="position:fixed; bottom:10px; right:10px; z-index:999999999999999999999999;">
      <v-alert v-model="anuncio" @click="ocultaranuncio()" style="width:150px; height:90px; padding:8px; border-radius:10px; box-shadow:1px 1px 5px #000; background-color:#fff; text-align:center;" class="primary--text">
        ¿Quieres que te ayude con algún proyecto?
      </v-alert>
        <v-btn href="https://wa.me/2227328662?&text=Hola vi tu CV y quisiera que me ayudaras en mi proyecto o idea" target="_blank" class="green--text"><v-icon  style="font-size:25px;">mdi-whatsapp</v-icon></v-btn>
      </div>
    </v-container>

      
  </v-main>
</template>
<style scoped>
/* Importar fuentes desde Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Archivo+Black&display=swap');

/* Reset y base */
* {
  box-sizing: border-box;
}

/* Tipografía global */
body {
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  line-height: 1.6;
}

/* Títulos con impacto visual */
h1,
h2,
h3,
h4 {
  font-family: 'Archivo Black', sans-serif;
  font-weight: 900;
  letter-spacing: -0.5px;
  margin-bottom: 0.5rem;
}

h1 {
  font-size: 2.2rem;
  line-height: 1.2;
}

h2 {
  font-size: 1.6rem;
}

h3 {
  font-size: 1.25rem;
  margin-top: 1.2rem;
}

h4 {
  font-size: 1rem;
  font-weight: 600;
  color: #bbb;
  margin-top: 0.6rem;
  margin-bottom: 0.4rem;
}

/* Enlaces */
a {
  color: inherit;
  text-decoration: none;
  transition: opacity 0.2s ease;
}

a:hover {
  opacity: 0.85;
}

/* Botones */
.v-btn {
  font-weight: 600;
  text-transform: none;
  border-radius: 8px;
  padding: 0 16px;
  height: 40px;
  font-size: 1rem;
}

/* Imágenes responsivas */
.img-responsive {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

/* Tarjetas de contacto y secciones */
.v-container .secondary {
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.18);
}

/* Padding interno consistente */
.pa-4,
.pa-6 {
  padding: 1.25rem !important;
}

/* Animación de aparición de foto */
.slide-fade-enter-active {
  transition: all 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.slide-fade-leave-active {
  transition: all 0.2s ease;
}

.slide-fade-enter,
.slide-fade-leave-to {
  transform: translateY(10px);
  opacity: 0;
}

/* Responsive: ajustes para móviles */
@media (max-width: 960px) {
  h1 {
    font-size: 1.8rem;
  }

  h2 {
    font-size: 1.4rem;
  }

  .v-col-md-6 {
    padding: 8px !important;
  }

  .v-container {
    padding: 12px !important;
  }

  .img-responsive {
    margin: 0 auto 24px;
  }
}

/* Iconos más alineados */
.v-icon {
  margin-right: 6px;
  font-size: 18px;
}
</style>

<script>
module.exports = {
  data() {
    return {
    anuncio:true,
      listamenu: [
        {
          text: 'Acercade mi',
          icon: 'mdi-account-circle',
          link: 'quiensoy'
        },
  
        

      ],
      selectedItem:1,
    };
  },
  computed: {
 
  },
  methods: {
    
    navegar(p){
      this.$router.push(p)
      this.$emit('closemenu', false)
    },
     ocultaranuncio(){
      this.anuncio===true ? this.anuncio=false : this.anuncio=true
    },
      closemenu(p) {
      this.$emit('closemenu', p)
    }

  },
  components: {
    progresscircular: httpVueLoader("../components/progressloader/progressloader.vue"),
    progresslinear: httpVueLoader("../components/progresslinear/progresslinear.vue")
  },
  props: {
    menuaction: false
  },
  mounted() {
    setTimeout(() => {
      this.show = true;
    }, 1500);
  },
};
</script>