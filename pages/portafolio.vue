<template>
  <v-main class="cv-root">

    <!-- MENÚ LATERAL -->
    <v-dialog v-model="menuOpen" max-width="320" content-class="cv-menu" persistent>
      <v-card class="cv-menu-card">
        <v-card-title class="justify-space-between align-center">
          <span class="cv-menu-brand">LDG<span class="accent--text">.</span></span>
          <v-btn icon @click="closemenu(false)"><v-icon>mdi-close</v-icon></v-btn>
        </v-card-title>
        <v-card-text>
          <v-list dense>
            <v-list-item v-for="(item, i) in listamenu" :key="i" @click="navegar(item.id)">
              <v-list-item-icon>
                <v-icon v-text="item.icon" color="accent"></v-icon>
              </v-list-item-icon>
              <v-list-item-content>
                <v-list-item-title class="cv-menu-item" v-text="item.text"></v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list>
        </v-card-text>
      </v-card>
    </v-dialog>

    <!-- HERO CON BOTÓN PARA VOLVER INICIO -->
    <section id="inicio" class="cv-hero">
      <canvas ref="dncanvas" class="cv-hero-canvas"></canvas>
      <v-container class="cv-hero-content">
        <v-row align="center" class="fill-height">
          <v-col cols="12" md="7">
            <div class="cv-hero-tag">
              <span></span> Portafolio de Diseño
            </div>
            <h1 class="cv-hero-title">
              Trabajos <span class="accent--text">Destacados</span>
            </h1>
            <p class="cv-hero-sub">
              Selección de mis proyectos de diseño gráfico y desarrollo web más relevantes.
            </p>
            <div class="cv-hero-actions">
              <v-btn large elevation="0" dark color="accent" href="https://wa.me/2227328662?text=Quisiera hablar sobre un proyecto" target="_blank" class="cv-btn-accent">
                <v-icon left>mdi-whatsapp</v-icon> Conversemos
              </v-btn>
              <v-btn large outlined dark color="white" @click="$router.push('/portafolio')" class="cv-btn-outline">
                Portafolios <v-icon right small>mdi-gallery</v-icon>
              </v-btn>
              <v-btn large outlined dark color="white" @click="scrollARecursos" class="cv-btn-outline">
                Ver proyectos <v-icon right small>mdi-arrow-down</v-icon>
              </v-btn>
            </div>
          </v-col>

          <!-- Foto pequeña a la derecha superior, 250px -->
          <v-col cols="12" md="5" class="cv-hero-photo-col">
            <div class="cv-hero-photo">
              <v-img src="./img/ldgfelipefoto.png" class="cv-photo-img" alt="Felipe Carrera"></v-img>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SECCIÓN PRINCIPAL DE PORTAFOLIO -->
    <section id="recursos" class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12">
            <div class="cv-section-label">Navegación de Secciones</div>
            <h2 class="cv-section-title">Explora mis trabajos</div>
            <div class="cv-section-line"></div>
          </v-col>
        </v-row>

        <!-- Tabs de navegación -->
        <v-row class="cv-tabs mt-20">
          <v-col cols="12" md="8">
            <v-tabs v-model="activeTab">
              <v-tab>
                <v-icon>mdi-web</v-icon> Sitios Web
              </v-tab>
              <v-tab>
                <v-icon>mdi-palette</v-icon> Branding e Identidad
              </v-tab>
              <v-tab>
                <v-icon>mdi-image</v-icon> Diseño Gráfico
              </v-tab>
              <v-tab>
                <v-icon>mdi-code-json</v-icon> Aplicaciones
              </v-tab>
            </v-tabs>
          </v-col>
        </v-row>

        <!-- CONTENIDO POR CATEGORÍA -->
        <v-row class="mt-20" v-if="activeTab === 'sitios'">
          <v-col cols="12" sm="12" md="6" lg="4" v-for="(item, index) in proyectosDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-work-card">
              <v-img
                :src="getImgSrc(item, 'sitios')"
                aspect-ratio="1.5"
                class="cv-work-img"
                alt=""
              >
                <template v-slot:placeholder>
                  <v-row class="fill-height ma-0 align-center justify-center">
                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                  </v-row>
                </template>
              </v-img>
              <v-card-title primary class="text-center">
                <h4 class="cv-work-body">{{item.titulo}}</h4>
              </v-card-title>
              <v-card-text class="cv-work-body">
                <div class="cv-work-leng">{{item.leng}}</div>
                <div v-html="item.descripcion" style="color: #5a5a5e; font-size: .85rem; line-height: 1.4;"></div>
              </v-card-text>
              <v-card-actions class="cv-work-actions text-center">
                <v-btn
                  text
                  small
                  :href="item.enlace"
                  target="_blank"
                  class="cv-work-btn"
                >
                  Visitar <v-icon small>mdi-arrow-right</v-icon>
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>

        <v-row class="mt-20" v-else-if="activeTab === 'branding'">
          <v-col cols="12" sm="12" md="6" lg="4" v-for="(item, index) in proyectosDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-work-card">
              <v-img
                :src="getImgSrc(item, 'branding')"
                aspect-ratio="1.5"
                class="cv-work-img"
                alt=""
              >
                <template v-slot:placeholder>
                  <v-row class="fill-height ma-0 align-center justify-center">
                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                  </v-row>
                </template>
              </v-img>
              <v-card-title primary class="text-center">
                <h4 class="cv-work-body">{{item.titulo}}</h4>
              </v-card-title>
              <v-card-text class="cv-work-body">
                <div class="cv-work-leng">{{item.leng}}</div>
                <div v-html="item.descripcion" style="color: #5a5a5e; font-size: .85rem; line-height: 1.4;"></div>
              </v-card-text>
              <v-card-actions class="cv-work-actions text-center">
                <v-btn
                  text
                  small
                  :href="item.enlace"
                  target="_blank"
                  class="cv-work-btn"
                >
                  Ver proyecto <v-icon small>mdi-arrow-right</v-icon>
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>

        <v-row class="mt-20" v-else-if="activeTab === 'disenio'">
          <v-col cols="12" sm="12" md="6" lg="4" v-for="(item, index) in proyectosDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-work-card">
              <v-img
                :src="getImgSrc(item, 'disenio')"
                aspect-ratio="1.5"
                class="cv-work-img"
                alt=""
              >
                <template v-slot:placeholder>
                  <v-row class="fill-height ma-0 align-center justify-center">
                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                  </v-row>
                </template>
              </v-img>
              <v-card-title primary class="text-center">
                <h4 class="cv-work-body">{{item.titulo}}</h4>
              </v-card-title>
              <v-card-text class="cv-work-body">
                <div class="cv-work-leng">{{item.leng}}</div>
                <div v-html="item.descripcion" style="color: #5a5a5e; font-size: .85rem; line-height: 1.4;"></div>
              </v-card-text>
              <v-card-actions class="cv-work-actions text-center">
                <v-btn
                  text
                  small
                  :href="item.enlace"
                  target="_blank"
                  class="cv-work-btn"
                >
                  Ver proyecto <v-icon small>mdi-arrow-right</v-icon>
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>

        <v-row class="mt-20" v-else-if="activeTab === 'apps'">
          <v-col cols="12" sm="12" md="6" lg="4" v-for="(item, index) in proyectosDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-app-card">
              <v-img
                :src="getImgSrc(item, 'apps')"
                class="app-img"
                alt=""
              >
                <v-card-title primary class="text-center">
                  <h4 class="app-title">{{item.titulo}}</h4>
                </v-card-title>
                <v-card-text>
                  <p class="app-desc">{{item.descripcion}}</p>
                </v-card-text>
                <v-card-actions class="text-center">
                  <v-btn
                    text
                    small
                    :href="item.enlace"
                    target="_blank"
                    class="cv-work-btn"
                  >
                    Ver <v-icon small>mdi-arrow-right</v-icon>
                  </v-btn>
                </v-card-actions>
              </v-card>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SECCIÓN SOBRE MÍ -->
    <section id="acerca" class="cv-section cv-section-dark">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">01 — Perfil</div>
            <h2 class="cv-section-title">Sobre mis trabajos</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <p class="cv-about-text">
              Mis proyectos de diseño combinan estética visual con funcionalidad técnica.
              Cada trabajo comienza con una investigación profunda del objetivo del cliente,
              definiendo la identidad visual, la arquitectura de información y la experiencia
              de usuario antes de pasar al desarrollo. Me especializo en crear marcas coherentes
              y sitios web que no solo se ven bien, sino que convierten y generan confianza.
            </p>
            <p class="cv-about-text">
              Con más de 6 años de experiencia trabajando con tecnologías como Vue.js, PHP,
              Laravel y WordPress,he tenido la oportunidad de colaborar con empresas y
              emprendedores en toda Latinoamérica, entregando soluciones digitales que
              ayudan a crecer sus negocios.
            </p>
          </v-col>
        </v-row>
      </v-container>
    </section>
  </v-main>
</template>

<script>
module.exports = {
  data() {
    return {
      menuOpen: false,
      activeTab: 'sitios',
      // Menú lateral del portafolio
      listamenu: [
        { text: 'CV', icon: 'mdi-account', id: 'cv' },
        { text: 'Portafolio', icon: 'mdi-gallery', id: 'portafolio' },
      ],
      // Proyectos destacados - todos los proyectos en un solo lugar
      proyectosDestacados: [
        // Sitios Web
        {
          titulo: 'Planeta Preescolar',
          img: 'Planeta preescolar.png',
          leng: 'VUEJS',
          enlace: 'https://planetapreescolar.com',
          descripcion: 'Sitio web institucional para preescolar con enfoque educativo y diseño infantil.'
        },
        {
          titulo: 'Auto Seguros LDG',
          img: 'Auto Seguros LDG.png',
          leng: 'VUEJS',
          enlace: 'https://autosegurosldg.web.app/',
          descripcion: 'Aplicación web de cotización y gestión de seguros automovilísticos.'
        },
        {
          titulo: 'Vanderbilt Comunidad',
          img: 'Vanderbilt Comunidad.png',
          leng: 'VUEJS y Codeigniter',
          enlace: 'https://vanderbilt.edu.mx/comunidad',
          descripcion: 'Plataforma comunitaria para la red de antiguos alumnos Vanderbilt.'
        },
        {
          titulo: 'Sistema Administración Kumon',
          img: 'Sistema Arministración Kumon.png',
          leng: 'vuejs firebase',
          enlace: 'https://kumonsistem.web.app/',
          descripcion: 'Sistema de gestión educativa para centros Kumon con base en Firebase.'
        },
        // Branding e Identidad
        {
          titulo: 'Identidad Visual - Obsoletos',
          img: 'Obsoletos.png',
          leng: 'PHP y VUEJS',
          enlace: 'https://obsoletos.com.mx',
          descripcion: 'Rediseño completo de identidad visual incluyendo logo, paleta y materiales corporativos.'
        },
        {
          titulo: 'Sitio Web - Mind Publicidad',
          img: 'mind-publicidad.png',
          leng: 'wordpress y VUEJS',
          enlace: 'http://mind-publicidad.com/',
          descripcion: 'Portal de noticias y portfolio para agencia de publicidad con CMS WordPress.'
        }
        // Aplicaciones (comentadas por ahora - se pueden agregar después)
        // {
        //   titulo: 'APK Obsoletos',
        //   img: 'obsoletos.png',
        //   leng: 'PHP y VUEJS',
        //   enlace: 'https://example.com/obsoletos',
        //   descripcion: 'Aplicación móvil de catálogo de obsoletos y tecnología.'
        // },
        // {
        //   titulo: 'APK Apps Schools',
        //   img: 'vuejs.png',
        //   leng: 'Vuejs',
        //   enlace: 'https://example.com/appschools',
        //   descripcion: 'Aplicación educativa para gestión escolar y comunicados.'
        // }
      ],
      // Método para obtener la ruta de la imagen según la categoría
      getImgSrc: function(item, categoria) {
        const basePath = './img';
        const nombreImg = item.img;
        
        // Mapeo de categorías a carpetas
        const carpetas = {
          'sitios': 'paginas',
          'branding': 'certificado',
          'disenio': 'galeria',
          'apps': 'icon'
        };
        
        const carpeta = carpetas[categoria] || 'paginas';
        return `${basePath}/${carpeta}/${nombreImg}`;
      }
    }
  },
  methods: {
    closemenu(val) {
      this.menuOpen = val;
    },
    navegar(id) {
      if (id === 'cv') {
        this.$router.push('/');
      } else {
        this.$router.push({ path: `/${id}` });
      }
    },
    scrollARecursos() {
      const elemento = document.getElementById('recursos');
      if (elemento) {
        elemento.scrollIntoView({ behavior: 'smooth' });
      }
    }
  },
  mounted() {
    this.menuOpen = false;
  }
};
</script>

<style scoped>
/* Hero section styles */
.cv-hero {
  position: relative;
  background: linear-gradient(135deg, #0b0b0c 0%, #17181a 100%);
  color: #fff;
  overflow: hidden;
  min-height: 92vh;
  display: flex;
  align-items: center;
}

.cv-hero-canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  pointer-events: none;
}

.cv-hero-content { position: relative; z-index: 2; padding-top: 48px; padding-bottom: 48px; }

.cv-hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  font-weight: 600;
  color: #b9b9bd;
  margin-bottom: 22px;
  border: 1px solid rgba(255,255,255,.18);
  padding: 8px 14px;
  border-radius: 999px;
}

.cv-hero-tag span {
  width: 22px; height: 2px; background: var(--naranja); display: inline-block;
}

.cv-hero-title {
  font-size: clamp(2.4rem, 6vw, 4.2rem);
  line-height: 1.04;
  margin-bottom: 24px;
}

.cv-hero-title .accent--text { color: var(--naranja) !important; }

.cv-hero-sub {
  max-width: 560px;
  color: #c7c7cc;
  font-size: 1.08rem;
  font-weight: 300;
  line-height: 1.7;
  margin-bottom: 32px;
}

.cv-hero-actions { display: flex; gap: 16px; flex-wrap: wrap; }

.cv-hero-photo-col { text-align: center; }

.cv-hero-photo {
  position: relative;
  display: inline-block;
  border-radius: 6px;
  overflow: hidden;
  border: 1px solid rgba(255,255,255,.14);
}

/* Secciones */
.cv-section { padding: 96px 0; }

.cv-section-gray { background: #f8f9fa; }

.cv-section-dark { background: #121315; color: #fff; }

.cv-section-label {
  color: var(--naranja);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 12px;
  margin-bottom: 12px;
}

.cv-section-title { font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; }

.cv-section-line {
  width: 56px; height: 3px; background: var(--naranja);
  margin-top: 18px;
}

.cv-section-desc { margin-top: 18px; font-weight: 300; line-height: 1.7; color: #5a5a5e; }

.cv-section-dark .cv-section-desc { color: #b9b9bd; }

/* Tarjetas de trabajo */
.cv-work-card {
  background: #121315;
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px;
  overflow: hidden;
  height: 100%;
  transition: transform .25s ease, border-color .25s ease;
}

.cv-work-card:hover {
  transform: translateY(-4px);
  border-color: var(--naranja);
}

.cv-work-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: filter .3s ease;
}

.cv-work-card:hover .cv-work-img {
  filter: grayscale(0%);
}

/* Contenido de la tarjeta */
.cv-work-body { padding: 18px 18px 20px; }

.cv-work-body h4 {
  color: #fff;
  font-size: .98rem;
  margin-bottom: 4px;
}

.cv-work-body h4 a {
  color: #fff;
  text-decoration: none;
}

.cv-work-leng {
  color: #9c9ca2;
  font-size: .8rem;
  margin: 6px 0 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Tarjetas de aplicaciones */
.app-img {
  width: 80px;
  height: 80px;
  margin: 0 auto 12px;
  background: #333;
}

.app-title {
  color: #fff;
  font-size: .9rem;
  text-align: center;
}

.app-desc {
  color: #cfcfd3;
  font-size: .8rem;
  text-align: center;
  margin-top: 4px;
}

/* Tabs */
.cv-tabs .v-tab {
  text-transform: none;
  font-weight: 600;
  font-size: .82rem;
  letter-spacing: .4px;
  background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.14);
  border-radius: 6px;
  margin: 0 4px 4px 0;
  color: #5a5a5e;
  min-width: 100px;
  padding: 8px 16px;
}

.cv-tabs .v-tab--active {
  background: var(--naranja);
  border-color: var(--naranja);
  color: #fff;
}

.cv-tabs .v-tab--active .v-icon {
  color: #fff;
}

/* About section dark */
.cv-section-dark .cv-section-title { color: #fff; }

.cv-about-text {
  font-size: 1.05rem;
  line-height: 1.8;
  color: #3c3c40;
  margin-bottom: 18px;

}

.cv-about-text strong { font-weight: 700; }
</style>