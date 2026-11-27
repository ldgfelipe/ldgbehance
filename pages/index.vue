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

    <!-- HERO -->
    <section id="inicio" class="cv-hero">
      <canvas ref="dncanvas" class="cv-hero-canvas"></canvas>
      <v-container class="cv-hero-content">
        <v-row align="center" class="fill-height">
          <v-col cols="12" md="7">
            <div class="cv-hero-tag">
              <span></span> Diseñador & Desarrollador Web
            </div>
            <h1 class="cv-hero-title">
              FELIPE DE JESÚS<br />
              CARRERA RENDÓN
            </h1>
            <p class="cv-hero-sub">
              Construyo productos digitales que comunican, venden y generan
              confianza. Más de 6 años creando soluciones de marca, desarrollo
              web y sistemas a medida para empresas en Latinoamérica.
            </p>
            <div class="cv-hero-actions">
              <v-btn large elevation="0" dark color="accent" href="https://wa.me/2227328662?text=Quisiera hablar sobre un proyecto" target="_blank" class="cv-btn-accent">
                <v-icon left>mdi-whatsapp</v-icon> Conversemos
              </v-btn>
              <v-btn large outlined dark color="white" @click="$router.push('/cv')" class="cv-btn-outline">
                Ver CV <v-icon right small>mdi-account</v-icon>
              </v-btn>
              <v-btn large outlined dark color="white" @click="$router.push('/portafolio')" class="cv-btn-outline">
                Ver portafolio <v-icon right small>mdi-gallery</v-icon>
              </v-btn>
            </div>
          </v-col>

          <v-col cols="12" md="5" class="cv-hero-photo-col">
            <div class="cv-hero-photo">
              <v-img src="./img/ldgfelipefoto.png" class="cv-photo-img" alt="Felipe Carrera"></v-img>
            </div>
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
      listamenu: [
        { text: 'CV', icon: 'mdi-account', id: 'cv' },
        { text: 'Portafolio', icon: 'mdi-gallery', id: 'portafolio' },
        { text: 'Acerca de mí', icon: 'mdi-account-circle', id: 'acerca' },
        { text: 'Experiencia', icon: 'mdi-briefcase', id: 'experiencia' },
        { text: 'Contacto', icon: 'mdi-email', id: 'contacto' },
      ],
    };
  },
  methods: {
    closemenu(val) {
      this.menuOpen = val;
    },
    navegar(id) {
      if (id === 'cv') {
        this.$router.push('/');
        return;
      }
      if (id === 'portafolio') {
        this.$router.push('/portafolio');
        return;
      }
      if (id === 'contacto') {
        this.$router.push('/contacto');
        return;
      }
      var el = document.getElementById(id);
      if (el) el.scrollIntoView({ behavior: 'smooth' });
    },
    scrollA(id) {
      var el = document.getElementById(id);
      if (el) el.scrollIntoView({ behavior: 'smooth' });
    },
  },
  mounted() {
    this.menuOpen = false;
  },
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

.cv-btn-accent, .cv-btn-outline { border-radius: 6px; font-weight: 600; text-transform: none; letter-spacing: .3px; }

.cv-hero-photo-col { text-align: center; }

.cv-hero-photo {
  position: relative;
  display: inline-block;
  border-radius: 6px;
  overflow: hidden;
  border: 1px solid rgba(255,255,255,.14);
}

.cv-hero-photo::after {
  content: '';
  position: absolute;
  inset: auto 0 0 0;
  height: 3px;
  background: var(--naranja);
}

.cv-photo-img { filter: grayscale(100%) contrast(1.05); }

/* Ajustes responsivos */
@media (max-width: 960px) {
  .cv-hero { min-height: 80vh; }
}
</style>