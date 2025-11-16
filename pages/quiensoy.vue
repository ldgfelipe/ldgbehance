<template>
  <v-main class="secondary">
    <v-container class="primary white--text elevation-23">
      <v-row>
        <!-- COLUMNA IZQUIERDA: Información personal + contacto -->
        <v-col cols="12" md="6" class="text-center">
          <h2>FELIPE DE JESÚS CARRERA RENDÓN</h2>
          <h1>DISEÑADOR + DESARROLLADOR WEB</h1>
          <p class="text--secondary mb-6">
            Creo experiencias digitales con propósito: identidad de marca, sitios web funcionales y sistemas a medida.
          </p>

          <!-- Redes sociales -->
          <v-row justify="center" class="mb-6">
            <v-col cols="auto">
              <a href="https://facebook.com/Ldgfelipe" target="_blank" class="secondary--text">
                <img src="./img/icon/fb.png" style="width: 50px; height: 50px" />
              </a>
            </v-col>
            <v-col cols="auto">
              <a href="https://twitter.com/ldgframe" target="_blank" class="secondary--text">
                <img src="./img/icon/tw.png" style="width: 50px; height: 50px" />
              </a>
            </v-col>
            <v-col cols="auto">
              <a href="https://github.com/ldgfelipe" target="_blank" class="secondary--text">
                <img src="./img/icon/gh.png" style="width: 50px; height: 50px" />
              </a>
            </v-col>
            <v-col cols="auto">
              <a href="https://www.youtube.com/@ldgbehance" target="_blank" class="secondary--text">
                <img src="./img/icon/youtube.png" style="width: 50px; height: 50px" />
              </a>
            </v-col>
            <v-col cols="auto">
              <a href="https://www.linkedin.com/in/ldgfelipecarrera" target="_blank" class="secondary--text">
                <img src="./img/icon/linkedin.png" style="width: 50px; height: 50px" />
              </a>

             </v-col>
            
          </v-row>

          <!-- Información de contacto destacada -->
          <div
            style="border-radius: 15px; width: 100%"
            class="secondary primary--text text-left pa-6"
          >
            <v-row>
              <v-col cols="12" md="6" class="pa-2">
                <v-icon small>mdi-email</v-icon>
                <a href="mailto:ldgfelipecarrera@gmail.com" class="primary--text">ldgfelipecarrera@gmail.com</a>
              </v-col>
              <v-col cols="12" md="6" class="pa-2">
                <v-icon small>mdi-whatsapp</v-icon>
                <a href="https://wa.me/5212218177358" target="_blank" class="primary--text">+52 221 817 7358</a>
              </v-col>
              <v-col cols="12" class="pa-2">
                <v-icon small>mdi-map-marker</v-icon> Puebla, México
              </v-col>
                <v-col cols="12" class="pa-2">
              <a  href="/download/CV LDG Felipe de Jesus Carrera Rendon 2025.pdf" target="_blank" class="secondary--text">
                <v-icon>mdi-file-pdf-box</v-icon>
              </a>
              </v-col>
              <v-col cols="12" class="pa-2 text-center">
                <v-btn
                  color="primary"
                  dark
                  href="mailto:ldgfelipecarrera@gmail.com?subject=Quisiera hablar sobre un proyecto"
                  class="mt-2"
                >
                  <v-icon left>mdi-send</v-icon> ¿Trabajamos juntos?
                </v-btn>
              </v-col>
            </v-row>
          </div>
        </v-col>

        <!-- COLUMNA DERECHA: Foto -->
        <v-col cols="12" md="1"></v-col>
        <v-col cols="12" md="5">
          <transition name="slide-fade">
            <v-img
              v-if="show"
              src="./img/ldgfelipefoto.png"
              style="max-width: 550px; width: 100%"
              class="img-responsive"
            />
          </transition>
        </v-col>

        <!-- ACERCA DE MÍ (reescrito con enfoque estratégico) -->
        <v-col cols="12" md="6" class="secondary--text">
          <div class="secondary primary--text text-center" style="border-radius: 0px 10px 10px 0px;">
            <h2>ACERCA DE MÍ</h2>
          </div>
          <p style="text-align: justify" class="pa-4">
            Soy diseñador gráfico y desarrollador web con más de 6 años de experiencia creando soluciones digitales que
            <strong>comunican, venden y generan confianza</strong>.
            <br /><br />
            Combino diseño visual con lógica de programación para construir marcas coherentes y sitios web que no solo se ven bien,
            sino que <strong>resuelven problemas reales de negocio</strong>.
            <br /><br />
            Trabajo con emprendedores, PYMES y startups en Latinoamérica. Soy autodidacta, meticuloso y apasionado por el detalle.
          </p>
        </v-col>

        <!-- EDUCACIÓN -->
        <v-col cols="12" md="6" class="secondary--text text-right">
          <div class="secondary primary--text text-center" style="border-radius: 10px 0px 0px 10px;">
            <h2>EDUCACIÓN</h2>
          </div>
          <div class="pa-4">
            <h3>Universidad Alva Edison</h3>
            <p>Licenciatura en Diseño Gráfico</p>
            <h3>Universidad Alva Edison</h3>
            <p>Técnico en Sistemas Computacionales</p>
            <p>
              <v-icon x-small>mdi-card-account-details-outline</v-icon>
              <a
                href="http://cedula.buholegal.com/6188950/"
                target="_blank"
                class="primary--text"
              >
                Cédula Profesional 6188950
              </a>
            </p>
          </div>
        </v-col>

        <!-- EXPERIENCIA (mejor formateada) -->
        <v-col cols="12" md="6" class="secondary--text text-right">
          <div class="secondary primary--text text-center" style="border-radius: 0px 10px 10px 0px;">
            <h2>EXPERIENCIA</h2>
          </div>
          <div class="pa-4">
            <div v-for="(job, i) in experiencia" :key="i" class="mb-4">
              <h3>{{ job.empresa }}</h3>
              <h4>{{ job.periodo }}</h4>
              <p v-html="job.descripcion"></p>
            </div>
          </div>

          <!-- Idiomas -->
          <div class="secondary primary--text text-left pa-6" style="border-radius: 15px">
            <h2>Idiomas</h2>
            <v-row>
              <v-col cols="12">
                <progresslinear :height="10" :valor="60" titulo="Inglés" />
              </v-col>
              <v-col cols="12">
                <progresslinear :height="10" :valor="100" titulo="Español" />
              </v-col>
            </v-row>
          </div>
        </v-col>

        <!-- SKILLS -->
        <v-col cols="12" md="6" class="secondary primary--text" style="border-radius: 10px">
          <h2 class="text-center">Habilidades Técnicas</h2>
          <v-row>
            <!-- Tus progresscircular aquí (sin cambios) -->
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="90" titulo="PHP" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="85" titulo="JAVASCRIPT" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="100" titulo="HTML" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="75" titulo="MYSQL" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="75" titulo="CSS" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="90" titulo="VUEJS" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="50" titulo="REACTJS" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="50" titulo="MONGODB" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="50" titulo="FIREBASE" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="70" titulo="AWS" />
            </v-col>
            <v-col cols="12" md="6" class="text-center">
              <progresscircular :valor="50" titulo="GO" />
            </v-col>
          </v-row>
        </v-col>

        <!-- GALERÍA (sin cambios estructurales, solo corrección de typo en target) -->
        <v-col cols="12" md="12">
          <v-col cols="12" md="12">
  <div class="secondary primary--text text-center" style="border-radius: 0px 10px 10px 0px;">
    <h2>Trabajos Destacados</h2>
  </div>

  <v-tabs centered show-arrows>
    <v-tab>Certificados</v-tab>
    <v-tab>Sitios Web</v-tab>
    <v-tab>Diseño Gráfico</v-tab>
    <v-tab>Vídeos</v-tab>
    <v-tab>Apps</v-tab>
    <v-tab>3D</v-tab>

    <!-- Certificados -->
    <v-tab-item>
      <v-carousel
        cycle
        height="400"
        hide-delimiter-background
        show-arrows-on-hover
        delimiter-icon="mdi-circle"
        class="elevation-2"
      >
        <v-carousel-item
          v-for="n in 12"
          :key="'cert-'+n"
          :src="`./img/certificado/certificados${n}.jpg`"
          reverse-transition="fade-transition"
          transition="fade-transition"
        ></v-carousel-item>
      </v-carousel>
    </v-tab-item>

    <!-- Sitios Web -->
    <v-tab-item>
      <v-carousel
        cycle
        height="500"
        hide-delimiter-background
        show-arrows-on-hover
        delimiter-icon="mdi-circle"
        class="elevation-2"
      >
        <v-carousel-item
          v-for="(site, index) in sitiosActivos"
          :key="'site-'+index"
          class="pa-4"
        >
          <v-card class="mx-auto" max-width="800" outlined>
            <v-img
              :src="'./img/paginas/' + site.sitio + '.png'"
              height="250"
              :alt="site.sitio"
              @error="replaceWithErrorImage"
            ></v-img>
            <v-card-title class="primary--text">{{ site.sitio }}</v-card-title>
            <v-card-text>
              <div v-html="site.leng"></div>
              <v-btn
                :href="site.enlace"
                target="_blank"
                color="primary"
                outlined
                small
                class="mt-2"
              >
                Visitar sitio
              </v-btn>
            </v-card-text>
          </v-card>
        </v-carousel-item>
      </v-carousel>
    </v-tab-item>

    <!-- Diseño Gráfico / Publicaciones -->
    <v-tab-item>
      <v-carousel
        cycle
        height="500"
        hide-delimiter-background
        show-arrows-on-hover
        delimiter-icon="mdi-circle"
        class="elevation-2"
      >
        <v-carousel-item
          v-for="n in 12"
          :key="'pub-'+n"
          :src="`./img/galeria/img${n}.jpg`"
          reverse-transition="fade-transition"
          transition="fade-transition"
        ></v-carousel-item>
      </v-carousel>
    </v-tab-item>

    <!-- Vídeos -->
    <v-tab-item>
      <v-carousel
        cycle
        height="400"
        hide-delimiter-background
        show-arrows-on-hover
        delimiter-icon="mdi-circle"
        class="elevation-2"
      >
        <v-carousel-item
          v-for="(video, i) in videos"
          :key="'vid-'+i"
          class="d-flex align-center justify-center"
        >
          <iframe
            :src="video.url"
            width="100%"
            height="315"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            style="max-width: 600px"
          ></iframe>
        </v-carousel-item>
      </v-carousel>
    </v-tab-item>

    <!-- Apps -->
    <v-tab-item>
      <v-carousel
        cycle
        height="400"
        hide-delimiter-background
        show-arrows-on-hover
        delimiter-icon="mdi-circle"
        class="elevation-2"
      >
        <v-carousel-item
          v-for="(app, i) in apps"
          :key="'app-'+i"
          class="d-flex flex-column align-center justify-center pa-4"
        >
          <a :href="app.link" target="_blank">
            <v-img
              :src="app.img"
              max-width="200"
              class="mb-4"
              alt="App"
            ></v-img>
          </a>
          <span class="text-h6 primary--text">{{ app.name }}</span>
          <v-btn
            :href="app.link"
            target="_blank"
            color="primary"
            outlined
            small
            class="mt-2"
          >
            Descargar APK
          </v-btn>
        </v-carousel-item>
      </v-carousel>
    </v-tab-item>

    <!-- 3D -->
    <v-tab-item>
      <v-carousel
        cycle
        height="400"
        hide-delimiter-background
        show-arrows-on-hover
        delimiter-icon="mdi-circle"
        class="elevation-2"
      >
        <v-carousel-item
          v-for="(model, i) in modelos3d"
          :key="'3d-'+i"
          class="d-flex flex-column align-center justify-center pa-2"
        >
          <a
            :href="model.profile"
            target="_blank"
            class="mb-4 primary--text font-weight-bold"
          >
            Ver en 3D Warehouse
          </a>
          <iframe
            :src="model.embed"
            frameborder="0"
            scrolling="no"
            width="100%"
            height="300"
            allowfullscreen
            style="max-width: 600px"
          ></iframe>
        </v-carousel-item>
      </v-carousel>
    </v-tab-item>
  </v-tabs>
</v-col>
        </v-col>
      </v-row>
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
.slide-fade-enter, .slide-fade-leave-to {
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
      videos: [
  { url: "https://www.youtube.com/embed/1AzbzaRY4F0" },
  { url: "https://www.youtube.com/embed/WpW8V3-Inp8" },
  { url: "https://www.youtube.com/embed/FWx6j0ogHB4" },
  { url: "https://www.youtube.com/embed/dXrFOOmnsEA" }
],
apps: [
  { name: "Obsoletos", img: "./img/icon/obsoletos.png", link: "./download/obsoletos.apk" },
  { name: "AppSchools", img: "./img/icon/vuejs.png", link: "./download/appschools.apk" },
  { name: "Intersom", img: "./img/icon/intersom.jpeg", link: "./download/intersom.apk" }
],
modelos3d: [
  {
    profile: "https://3dwarehouse.sketchup.com/user/d84c526e-abe6-4d2c-905a-6f22ea6c1d4c",
    embed: "https://3dwarehouse.sketchup.com/embed/9e4a2179-c982-42ab-8dfe-22eb1bc56d8a?token=QQ9tApBYYmM=&binaryName=s21"
  },
  {
    embed: "https://3dwarehouse.sketchup.com/embed/2ee86659-f571-4c8c-80d7-ec21ee1b5108?token=OgyMn75F630=&binaryName=s21"
  },
  {
    embed: "https://3dwarehouse.sketchup.com/embed/60735ee6-5388-45df-a0b3-0a1e18d5a9cf?token=CcJvRdk4M6s=&binaryName=s21"
  },
  {
    embed: "https://3dwarehouse.sketchup.com/embed/fcfdd774-002a-44d4-9689-93b3f7106be2?token=P8Rv6lCP-ZQ=&binaryName=s21"
  },
  {
    embed: "https://3dwarehouse.sketchup.com/embed/9e8c2cb9-7473-4fef-acd3-fc9ea940e8b3?token=ACn7-8vESEw=&binaryName=s21"
  }
],
      show: false,

      // Experiencia profesional mejor formateada
      experiencia: [
        {
          empresa: "SAECSA Energía Solar",
          periodo: "Mar 2022 – Actual",
          descripcion: "Diseño gráfico y desarrollo web. Gestión de identidad visual, edición fotográfica y mantenimiento de sitios web."
        },
        {
          empresa: "Freelance",
          periodo: "Mar 2020 – Actual",
          descripcion: "Diseño de marca, desarrollo web con Vue.js/PHP, y soporte técnico para clientes en Latinoamérica."
        },
        {
          empresa: "Código 46",
          periodo: "Ene 2020 – Mar 2020",
          descripcion: "Diseño y programación de sistema de ventas usando Vue.js y PHP para franquicias de análisis genético."
        },
        {
          empresa: "Válvulas ROS",
          periodo: "Oct 2018 – Oct 2019",
          descripcion: "Desarrollo web con Vue.js para empresa dedicada a la venta de válvulas industriales."
        },
        {
          empresa: "Grupo Comercial Panasa",
          periodo: "Ene 2014 – Ene 2018",
          descripcion: "Diseño y programación web con PHP, MySQL y jQuery para e-commerce de autopartes."
        },
        {
          empresa: "Agua Inmaculada",
          periodo: "Ene 2008 – Ene 2014",
          descripcion: "Jefe de Diseño y Sistemas: gestión de marca, desarrollo de sistemas internos y soporte TI."
        }
      ],

      // Cabeceras para tabla (aunque no se usa actualmente)
      cabsitio: [
        { text: "Sitio", value: "sitio" },
        { text: "Url", value: "enlace" },
        { text: "Desarrollo", value: "leng" },
        { text: "Visitar", value: "visitar" },
      ],

      // Lista de sitios web (mantenida intacta)
      sitiosar: [
        {
          sitio: "Planeta preescolar",
          enlace: "https://planetapreescolar.com",
          leng: "VUEJS",
          active: true
        },
        {
          sitio: "Auto Seguros LDG",
          enlace: "https://autosegurosldg.web.app/",
          leng: "VUEJS",
          active: true
        },
        {
          sitio: "Vanderbilt",
          enlace: "https://vanderbilt.edu.mx",
          leng: "wordpress",
          active: true
        },
        {
          sitio: "Vanderbilt Comunidad",
          enlace: "https://vanderbilt.edu.mx/comunidad",
          leng: "VUEJS y Codeigniter",
          active: false
        },
        {
          sitio: "Obsoletos",
          enlace: "https://obsoletos.com.mx",
          leng: "PHP y VUEJS",
          active: false
        },
        {
          sitio: "mind-publicidad",
          enlace: "http://mind-publicidad.com/",
          leng: "wordpress y VUEJS",
          active: false
        },
        {
          sitio: "algiocontrol",
          enlace: "http://algiocontrol.ml/",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "barbershopmasterclass",
          enlace: "http://barbershopmasterclass.ml/",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "mejorproducto",
          enlace: "http://mejorproducto.ml/",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "neurociencia",
          enlace: "http://neurociencia.ml/",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "ortopedistapuebla",
          enlace: "http://ortopedistapuebla.ml/",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "tienda colegiodiscovery",
          enlace: "https://colegiodiscovery.edu.mx/",
          leng: "wordpress",
          active: true
        },
        {
          sitio: "Sistema Arministración Kumon",
          enlace: "https://kumonsistem.web.app/",
          leng: "vuejs firebase <i>en desarrollo</i>",
          active: true
        },
        {
          sitio: "profetit",
          enlace: "https://profetit.org",
          leng: "php laravel <i>en desarrollo</i>",
          active: true
        },
        {
          sitio: "Torre Helea",
          enlace: "https://torrehelea.com",
          leng: "php laravel <i>en desarrollo</i>",
          active: false
        },
        {
          sitio: "pixzu",
          enlace: "https://pixzu.com.mx",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "kaab-arte",
          enlace: "https://kaab-arte.com",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "Distribuidora Santa Fe",
          enlace: "https://santafedistribuidora.com",
          leng: "wordpress",
          active: true
        },
        {
          sitio: "easythinx",
          enlace: "https://easythinx.com",
          leng: "Laravel y Vuejs",
          active: true
        },
        {
          sitio: "facilweb",
          enlace: "https://facilweb.com.mx",
          leng: "wordpress",
          active: false
        },
      ],
    };
  },
  computed: {
  sitiosActivos() {
    return this.sitiosar.filter(s => s.active === true);
  }
},
  methods: {
     replaceWithErrorImage(e) {
    e.target.src = './img/icon/vuejs.png'; // imagen fallback
  },
    scrollMethod() {
      // Puedes usarlo más adelante si añades scroll suave
    }
  },
  components: {
    progresscircular: httpVueLoader("../components/progressloader/progressloader.vue"),
    progresslinear: httpVueLoader("../components/progresslinear/progresslinear.vue")
  },
  mounted() {
    setTimeout(() => {
      this.show = true;
    }, 1500);
  },
};
</script>