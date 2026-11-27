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

    <!-- HERO CV -->
    <section id="inicio" class="cv-hero">
      <canvas ref="dncanvas" class="cv-hero-canvas"></canvas>
      <v-container class="cv-hero-content">
        <v-row align="center" class="fill-height">
          <v-col cols="12" md="7">
            <div class="cv-hero-tag">
              <span></span> CV Profesional
            </div>
            <h1 class="cv-hero-title">
              Felipe De Jesús<br />
              Carrera Rendón
            </h1>
            <p class="cv-hero-sub">
              Diseñador y Desarrollador Web con más de 6 años de experiencia creando
              soluciones digitales que comunican, venden y generan confianza para
              empresas en Latinoamérica.
            </p>
            <div class="cv-hero-actions">
              <v-btn large elevation="0" dark color="accent" href="https://wa.me/2227328662?text=Quisiera hablar sobre un proyecto" target="_blank" class="cv-btn-accent">
                <v-icon left>mdi-whatsapp</v-icon> Conversemos
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

    <!-- SECCIÓN SOBRE MÍ -->
    <section id="acerca" class="cv-section cv-section-dark">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">01 — Perfil</div>
            <h2 class="cv-section-title">Sobre mí</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <p class="cv-about-text">
              Diseñador gráfico y desarrollador web con más de 6 años de experiencia
              creando soluciones digitales que comunican, venden y generan confianza.
              Combino el diseño visual con la lógica de programación para construir
              marcas coherentes y sitios web que no solo se ven bien, sino que
              resuelven problemas reales de negocio.
            </p>
            <p class="cv-about-text">
              He trabajado con emprendedores, PYMES y startups en Latinoamérica,
              entregando soluciones digitales que ayudan a crecer sus negocios.
              Mis áreas principales son: diseño gráfico, desarrollo web con Vue.js,
              PHP, Laravel y WordPress.
            </p>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SECCIÓN EXPERIENCIA -->
    <section id="experiencia" class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">03 — Experiencia</div>
            <h2 class="cv-section-title">Experiencia profesional</div>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <p class="cv-about-text">
              He tenido la oportunidad de colaborar con empresas y emprendedores en
              toda Latinoamérica, entregando soluciones digitales que ayudan a crecer
              sus negocios. Mis principales empleos han sido:
            </p>
            <ul class="cv-experience-list">
              <li><strong>SAECSA Energía Solar</strong> (Mar 2022 – Actual): Diseño gráfico y desarrollo web. Gestión de identidad visual, edición fotográfica y mantenimiento de sitios web.</li>
              <li><strong>Pavific / We Love Paving</strong> (Ene 2026 – Sep 2026): Diseño web WordPress, desarrollo de plugin, integración de IA, manejo de tracking y estrategia. Desarrollo de aplicaciones para marketing digital.</li>
              <li><strong>Freelance</strong> (Mar 2020 – Actual): Diseño de marca, desarrollo web con Vue.js/PHP y soporte técnico para clientes en Latinoamérica.</li>
              <li><strong>Código 46</strong> (Ene 2020 – Mar 2020): Diseño y programación de sistema de ventas usando Vue.js y PHP para franquicias de análisis genético.</li>
              <li><strong>Válvulas ROS</strong> (Oct 2018 – Oct 2019): Desarrollo web con Vue.js para empresa dedicada a la venta de válvulas industriales.</li>
            </ul>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SECCIÓN FORMA DE CONTACTO -->
    <section id="contacto" class="cv-section cv-section-dark">
      <v-container>
        <v-row align="center">
          <v-col cols="12" md="7">
            <div class="cv-section-label">05 — Contacto</div>
            <h2 class="cv-section-title">Hablemos de tu próximo proyecto</h2>
            <p class="cv-section-desc">
              Agenda una reunión y diseñemos juntos la solución digital perfecta
              para tu idea o empresa.
            </p>
          </v-col>
          <v-col cols="12" md="5" class="text-md-right">
            <v-btn large elevation="0" color="accent" dark href="https://wa.me/2227328662?text=Quisiera una cotización sobre un proyecto" target="_blank" class="cv-btn-accent cv-btn-big">
              <v-icon left>mdi-whatsapp</v-icon> Contactar ahora
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- FORMULARIO SLAT XI -->
    <section id="formulario-contacto" class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12">
            <div class="cv-section-label">06 — Solicita Presupuesto</div>
            <h2 class="cv-section-title">Presupuesto y Propuesta</h2>
            <p class="cv-section-desc">
              Completa el formulario abajo y te responderé en menos de 24 horas con
              una propuesta personalizada para tu proyecto.
            </p>
          </v-col>
        </v-row>
      </v-container>
      
      <!-- Formulario Slat xI -->
      <div id="slt-form-container">
        <script src="https://slt-xi.vercel.app/slt-form.js" data-form-id="6e416375-3658-4b6c-a65c-846c0cc23bd1" async></script>
      </div>
    </section>
  </v-main>
</template>

<script>
module.exports = {
  data() {
    return {
      menuOpen: false,
      // Menú lateral del CV
      listamenu: [
        { text: 'Inicio', icon: 'mdi-home', id: 'inicio' },
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
  }
};
</script>

<style scoped>
/* CV Hero styles */
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

.cv-hero-photo::after {
  content: '';
  position: absolute;
  inset: auto 0 0 0;
  height: 3px;
  background: var(--naranja);
}

.cv-photo-img { filter: grayscale(100%) contrast(1.05); }

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

.cv-section-title { font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; color: #fff; }

.cv-section-subtitle { margin-top: 8px; font-size: .95rem; color: #b9b9bd; font-weight: 300; }

.cv-section-line {
  width: 56px; height: 3px; background: var(--naranja);
  margin-top: 18px;
}

.cv-section-desc { margin-top: 18px; font-weight: 300; line-height: 1.7; color: #b9b9bd; }

/* Listas */
.cv-experience-list { margin-top: 20px; }
.cv-experience-list li { margin-bottom: 12px; padding-left: 20px; position: relative; }
.cv-experience-list li::before { content: ''; position: absolute; left: 0; top: 8px; width: 8px; height: 8px; background: var(--naranja); border-radius: 50%; }

/* Formulario */
#slt-form-container { margin-top: 40px; }

/* Ajustes responsivos */
@media (max-width: 960px) {
  .cv-section { padding: 64px 0; }
  .cv-hero-photo { max-width: 220px; }
}
</style>