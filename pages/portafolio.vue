<template>
  <v-main class="cv-root">

    <!-- MENÚ LATERAL (mismo que en index) -->
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

    <!-- HERO CON FOTO PEQUEÑO A LA DERECHAR SUPERIOR -->
    <section id="inicio" class="cv-hero">
      <canvas ref="dncanvas" class="cv-hero-canvas"></canvas>
      <v-container class="cv-hero-content">
        <v-row align="center" class="fill-height">
          <v-col cols="12" sm="12" md="12">
            <div class="cv-hero-tag">
              <span></span> Portafolio de Diseño
            </div>
            <h1 class="cv-hero-title">
              Trabajos <span class="accent--text">Destacados</span>
            </h1>
            <p class="cv-hero-sub">
              Una selección de mis proyectos de diseño gráfico y desarrollo web más
              relevantes. Cada pieza ha sido creada con atención al detalle y enfoque
              en la experiencia del usuario.
            </p>
            <div class="cv-hero-actions">
              <v-btn large elevation="0" dark color="accent" href="https://wa.me/2227328662?text=Quisiera hablar sobre un proyecto" target="_blank" class="cv-btn-accent">
                <v-icon left>mdi-whatsapp</v-icon> Conversemos
              </v-btn>
              <v-btn large outlined dark color="white" @click="scrollARecursos" class="cv-btn-outline">
                Ver recursos <v-icon right small>mdi-arrow-down</v-icon>
              </v-btn>
            </div>
          </v-col>

          <!-- Foto pequeña a la derecha superior -->
          <v-col cols="12" sm="12" md="4" class="cv-hero-photo-col" style="order: 2; justify-self: flex-end;">
            <div class="cv-hero-photo" style="max-width: 250px; width: 250px; order: 2;">
              <v-img
                src="./img/ldgfelipefoto.png"
                class="cv-photo-img"
                alt="Felipe Carrera"
                style="width: 100%; height: auto; border-radius: 8px; object-fit: cover;"
              ></v-img>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SECCIÓN DE RECURSOS / NAVEGACIÓN -->
    <section id="recursos" class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12">
            <div class="cv-section-label">Navegación de Secciones</div>
            <h2 class="cv-section-title">Explora mis trabajos</h2>
            <div class="cv-section-line"></div>
          </v-col>
        </v-row>
        <v-row class="cv-tabs mt-20">
          <v-col cols="12" md="4">
            <v-tabs v-model="activeTab">
              <v-tab>
                <v-icon>mdi-web</v-icon> Sitios Web
              </v-tab>
              <v-tab>
                <v-icon>mdi-palette</v-icon> Branding & Identidad
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

        <!-- CONTENIDO PRINCIPAL SEGÚN TAB ACTIVO -->
        <v-row class="mt-20" v-if="activeTab === 'sitios'">
          <v-col cols="12" sm="12" md="4" lg="3" v-for="(item, index) in sitiosDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-work-card">
              <v-img
                :src="`./img/paginas/${item.img}`"
                aspect-ratio="1.5"
                class="cv-work-img zoom-enabled"
                alt=""
 @click="openLightbox(`./img/paginas/${item.img}`)"
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
                <div v-html="item.descripcion" style="color: #cfcfd3; font-size: .85rem; line-height: 1.4;"></div>
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
          <v-col cols="12" sm="12" md="4" lg="3" v-for="(item, index) in brandingDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-work-card">
              <v-img
                :src="`./img/certificado/certificados${index + 1}.jpg`"
                aspect-ratio="1.5"
                class="cv-work-img zoom-enabled"
                alt=""
 @click="openLightbox(`./img/certificado/certificados${index + 1}.jpg`)"
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
                <div v-html="item.descripcion" style="color: #cfcfd3; font-size: .85rem; line-height: 1.4;"></div>
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
          <v-col cols="12" sm="12" md="4" lg="3" v-for="(item, index) in disenoDestacado" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-work-card">
              <v-img
                :src="`./img/galeria/img${index + 1}.jpg`"
                aspect-ratio="1.5"
                class="cv-work-img zoom-enabled"
                alt=""
 @click="openLightbox(`./img/galeria/img${index + 1}.jpg`)"
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
                <div v-html="item.descripcion" style="color: #cfcfd3; font-size: .85rem; line-height: 1.4;"></div>
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
          <v-col cols="12" sm="12" md="4" lg="3" v-for="(item, index) in appsDestacados" :key="index" class="d-flex child-flex">
            <v-card color="primary" dark outlined class="cv-app-card">
              <v-img
                :src="`./img/icon/${item.img}`"
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
                    Descargar <v-icon small>mdi-download</v-icon>
                  </v-btn>
                </v-card-actions>
              </v-card>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SECCIÓN SOBRE MÍ AL FINAL -->
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
              Laravel y WordPress, he tenido la oportunidad de colaborar con empresas y
              emprendedores en toda Latinoamérica, entregando soluciones digitales que
              ayudan a crecer sus negocios.
            </p>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- LIGHTBOX PARA ZOOM DE IMÁGENES -->
    <transition name="fade">
      <div v-if="lightboxOpen" class="cv-lightbox" @click="lightboxOpen = false">
        <span class="cv-close" @click.stop="lightboxOpen = false">&times;</span>
        <img :src="lightboxImage" alt="Portafolio ampliado">
      </div>
    </transition>
  </v-main>
</template>

<script>
module.exports = {
  data() {
    return {
      menuOpen: false,
      activeTab: 'sitios',
      lightboxOpen: false,
      lightboxImage: '',
      // Datos para los trabajos destacados - Sitios Web
      sitiosDestacados: [
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
        }
      ],
      // Datos para Branding & Identidad
      brandingDestacados: [
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
      ],
      // Datos para Diseño Gráfico
      disenoDestacado: [
        {
          titulo: 'Diseño de Logo - Kaab Arte',
          img: 'kaab-arte.png',
          leng: 'wordpress',
          enlace: 'https://kaab-arte.com',
          descripcion: 'Desarrollo de identidad marca para estudio de arte contemporáneo.'
        },
        {
          titulo: 'Diseño Editorial - Facilweb',
          img: 'facilweb.png',
          leng: 'wordpress',
          enlace: 'https://facilweb.com.mx',
          descripcion: 'Diseño de maquetación y layout para portal de noticias y revistas.'
        }
      ],
      // Datos para Aplicaciones
      appsDestacados: [
        {
          titulo: 'APK Obsoletos',
          img: 'obsoletos.png',
          titulo2: 'APK Obsoletos',
          leng: 'PHP y VUEJS',
          enlace: 'https://example.com/obsoletos',
          descripcion: 'Aplicación móvil de catálogo de obsoletos y tecnología.'
        },
        {
          titulo: 'APK Apps Schools',
          img: 'vuejs.png',
          leng: 'Vuejs',
          enlace: 'https://example.com/appschools',
          descripcion: 'Aplicación educativa para gestión escolar y comunicados.'
        }
      ]
    };
  },
  methods: {
    closemenu(val) {
      this.menuOpen = val;
    },
    navegar(id) {
      this.$router.push({ path: `/${id}` });
    },
    scrollARecursos() {
      const elemento = document.getElementById('recursos');
      if (elemento) {
        elemento.scrollIntoView({ behavior: 'smooth' });
      }
    },
    openLightbox(imgPath) {
      this.lightboxImage = imgPath;
      this.lightboxOpen = true;
    }
  },
  mounted() {
    // Cerrar menú al montar
    this.menuOpen = false;
  }
};
</script>

<style scoped>
/* Personalización para la página de portafolio */
/* Asegurar que los colores y estilos sean consistentes con el hero */

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
  filter: grayscale(100%) contrast(1.04);
  transition: filter .3s ease;
}

.cv-work-card:hover .cv-work-img {
  filter: grayscale(0%);
}

.cv-work-body {
  padding: 18px 18px 20px;
}

.cv-work-body h4 {
  color: #fff;
  font-size: .98rem;
}

.cv-work-leng {
  color: #9c9ca2;
  font-size: .8rem;
  margin: 6px 0 14px;
}

/* Estilos para las tarjetas de aplicaciones */
.app-img {
  width: 80px;
  height: 80px;
  margin: 0 auto 12px;
}

.app-title {
  color: #fff;
  font-size: .9rem;
}

.app-desc {
  color: #cfcfd3;
  font-size: .8rem;
  text-align: center;
}

/* Estilos para las tabs */
.cv-tabs .v-tab {
  text-transform: none;
  font-weight: 600;
  font-size: .82rem;
  letter-spacing: .4px;
  background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.14);
  border-radius: 6px;
  margin: 0 4px 4px 0;
  color: #cfcfd3;
  min-width: 100px;
  flex: 1;
}

.cv-tabs .v-tab--active {
  background: var(--naranja);
  border-color: var(--naranja);
  color: #fff;
}

.cv-tabs .v-tab--active .v-icon {
  color: #fff;
}

/* Responsivo: tabs verticales en móviles */
@media (max-width: 550px) {
  .cv-tabs .v-tab {
    margin: 4px 0;
    min-width: 100%;
    justify-content: center!
  }
  .cv-tabs .v-tab .v-icon {
    margin-right: 8px;
  }
  .cv-tabs .v-tab__content {
    justify-content: center!
  }
}

/* Responsivo mejorado para sección about */
.cv-section-dark .cv-about-text {
  font-size: 1rem;
  line-height: 1.6;
}

/* Zoom y lightbox para imágenes de portafolio */
.cv-work-img {
  filter: grayscale(100%) contrast(1.04);
  transition: filter .3s ease;
  cursor: zoom-in;
  user-select: none;
}

.cv-work-img.zoom-enabled {
  transition: transform .3s ease, filter .3s ease;
}

.cv-work-img:hover {
  filter: grayscale(0%);
  transform: scale(1.05);
}

.cv-work-img.zoomed {
  filter: grayscale(0%);
  transform: scale(1.2);
}

/* Modal/lightbox para vista ampliada */
.cv-lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.9);
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  color: #fff;
}

.cv-lightbox img {
  max-width: 90%;
  max-height: 90%;
  object-fit: contain;
}

.cv-lightbox .cv-close {
  position: absolute;
  top: 20px;
  right: 30px;
  width: 40px;
  height: 40px;
  background: rgba(255,255,255,0.2);
  border-radius: 50%;
  color: #fff;
  font-size: 2rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.cv-lightbox .cv-close:hover {
  background: rgba(255,50,50,0.3);
}

/* Responsivo: zoom desactivado en móviles para mejor performance */
@media (max-width: 600px) {
  .cv-work-img:hover {
    transform: none;
  }
  .cv-work-img.zoomed {
    transform: none;
  }
}

/* Animación fade para lightbox */
.cv-lightbox-enter-active,
.cv-lightbox-leave-active {
  transition: opacity .3s ease;
}
.cv-lightbox-enter,
.cv-lightbox-leave-to {
  opacity: 0;
}

/* Responsivo: zoom desactivado en móviles para mejor performance */
@media (max-width: 600px) {
  .cv-work-img:hover {
    transform: none;
  }
  .cv-work-img.zoomed {
    transform: none;
  }
  .cv-lightbox .cv-close {
    display: none;
  }
}

/* Tarjetas más compactas en móvil */
@media (max-width: 600px) {
  .cv-work-card {
    margin-bottom: 20px;
  }
  .cv-work-body h4 {
    font-size: .9rem;
  }
  .cv-work-leng {
    font-size: .7rem;
  }
}

/* Mejorar contraste en sección dark */
.cv-section-dark .cv-section-title {
  color: #fff;
}

.cv-section-dark .cv-section-desc {
  color: #b9b9bd;
}

/* Ajustes para el canvas del hero */
.cv-hero-canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  pointer-events: none;
}

/* Ajustes para el tag del hero */
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

/* Ajustes de los botones */
.cv-btn-accent {
  border-radius: 6px;
  font-weight: 600;
  text-transform: none;
  letter-spacing: .3px;
}

.cv-btn-outline {
  border-radius: 6px;
  font-weight: 600;
  text-transform: none;
  letter-spacing: .3px;
}
</style>