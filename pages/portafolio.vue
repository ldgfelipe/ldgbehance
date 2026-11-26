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
              <span></span> Portafolio de Diseño
            </div>
            <h1 class="cv-hero-title">
              Trabajos <span class="accent--text">Destacados</span>
            </h1>
            <p class="cv-hero-sub">
              Desarrollo Web &amp; IA | Optimización de Tiempos. Una selección
              completa de mis proyectos de diseño, desarrollo web y sistemas.
            </p>
            <div class="cv-hero-actions">
              <v-btn large elevation="0" dark color="accent" href="https://wa.me/2227328662?text=Quisiera hablar sobre un proyecto" target="_blank" class="cv-btn-accent">
                <v-icon left>mdi-whatsapp</v-icon> Conversemos
              </v-btn>
              <v-btn large outlined dark color="white" @click="$router.push('/')" class="cv-btn-outline">
                Inicio <v-icon right small>mdi-home</v-icon>
              </v-btn>
              <v-btn large outlined dark color="white" @click="scrollA('galeria')" class="cv-btn-outline">
                Ver proyectos <v-icon right small>mdi-arrow-down</v-icon>
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

    <!-- GALERÍA DE TRABAJOS (mismo contenido que Trabajos Destacados del inicio) -->
    <section id="galeria" class="cv-section cv-section-dark">
      <v-container>
        <v-row class="mb-6">
          <v-col cols="12" md="5">
            <div class="cv-section-label">Portafolio</div>
            <h2 class="cv-section-title">Trabajos destacados</h2>
            <p class="cv-section-subtitle">Desarrollo Web &amp; IA | Optimización de Tiempos</p>
            <div class="cv-section-line"></div>
            <p class="cv-section-desc">
              Mi portafolio exhibe una selección de proyectos diseñados y desarrollados con
              Vue.js, abarcando soluciones web corporativas, aplicaciones interactivas y
              trabajos de diseño gráfico.
            </p>
          </v-col>
          <v-col cols="12" md="7">
            <v-tabs center-active class="cv-tabs">
              <v-tab v-for="(tab, i) in tabs" :key="i" class="cv-tab">
                <v-icon left small v-text="tab.icon"></v-icon>{{ tab.label }}
              </v-tab>

              <!-- Sitios Web -->
              <v-tab-item>
                <v-row>
                  <v-col cols="12" md="6" v-for="(site, idx) in sitiosActivos" :key="'ws-' + idx" class="cv-works-col">
                    <div class="cv-work-card">
                      <v-img
                        :src="'./img/paginas/' + site.img"
                        height="170"
                        class="cv-work-img"
                        @error="replaceWithErrorImage"
                      ></v-img>
                      <div class="cv-work-body">
                        <h4>{{ site.sitio }}</h4>
                        <div class="cv-work-leng" v-html="site.leng"></div>
                        <v-btn small outlined color="accent" :href="site.enlace" target="_blank" class="cv-work-btn">
                          Visitar sitio <v-icon right x-small>mdi-open-in-new</v-icon>
                        </v-btn>
                      </div>
                    </div>
                  </v-col>
                </v-row>
              </v-tab-item>

              <!-- Diseño -->
              <v-tab-item>
                <v-carousel cycle height="430" hide-delimiter-background show-arrows-on-hover class="cv-carousel">
                  <v-carousel-item v-for="n in 29" :key="'pub-' + n">
                    <v-img :src="`./img/galeria/diseño/img${n}.jpg`" contain height="100%" class="rounded"></v-img>
                  </v-carousel-item>
                </v-carousel>
              </v-tab-item>

              <!-- Apps -->
              <v-tab-item>
                <v-row>
                  <v-col cols="12" md="4" v-for="(app, idx) in apps" :key="'app-' + idx" class="cv-works-col">
                    <div class="cv-work-card cv-app-card">
                      <v-img :src="app.img" contain max-height="90"></v-img>
                      <h4>{{ app.name }}</h4>
                      <v-btn small outlined color="accent" :href="app.link" target="_blank" class="cv-work-btn">
                        <v-icon left x-small>mdi-download</v-icon> Descargar APK
                      </v-btn>
                    </div>
                  </v-col>
                </v-row>
              </v-tab-item>

              <!-- Vídeos -->
              <v-tab-item>
                <v-row>
                  <v-col cols="12" md="6" lg="4" v-for="(vid, idx) in videos" :key="'vid-' + idx" class="cv-works-col">
                    <div class="cv-video-card" @click="abrevideo(vid)">
                      <div class="cv-video-thumb">
                        <v-icon large class="accent--text">mdi-youtube</v-icon>
                      </div>
                      <h4>{{ vid.name }}</h4>
                    </div>
                  </v-col>
                </v-row>
                <v-dialog v-model="visorvid" max-width="760">
                  <v-card>
                    <v-card-title class="cv-dialog-title">
                      {{ vidView.name }} <v-spacer></v-spacer>
                      <v-btn icon color="accent" @click="visorvid = false"><v-icon>mdi-close</v-icon></v-btn>
                    </v-card-title>
                    <v-card-text>
                      <iframe
                        width="100%" height="420"
                        :src="'https://www.youtube.com/embed/' + vidView.url"
                        frameborder="0" allowfullscreen
                        referrerpolicy="strict-origin-when-cross-origin"
                      ></iframe>
                    </v-card-text>
                  </v-card>
                </v-dialog>
              </v-tab-item>

              <!-- 3D -->
              <v-tab-item>
                <v-row>
                  <v-col cols="12" md="6" lg="4" v-for="(model, idx) in modelos3d" :key="'3d-' + idx" class="cv-works-col">
                    <div class="cv-work-card">
                      <v-img :src="model.img" height="150" class="cv-work-img"></v-img>
                      <div class="cv-work-body">
                        <h4>{{ model.name }}</h4>
                        <v-btn small outlined color="accent" @click="abremodelo(model)" class="cv-work-btn">
                          Ver modelo 3D
                        </v-btn>
                      </div>
                    </div>
                  </v-col>
                </v-row>
                <v-dialog v-model="visor3d" width="1120px" max-width="94vw">
                  <v-card>
                    <v-card-title class="cv-dialog-title">
                      {{ v3d.name }} <v-spacer></v-spacer>
                      <v-btn icon color="accent" @click="visor3d = false"><v-icon>mdi-close</v-icon></v-btn>
                    </v-card-title>
                    <v-card-text>
                      <div v-html="v3d.url"></div>
                    </v-card-text>
                  </v-card>
                </v-dialog>
              </v-tab-item>

              <!-- Certificados -->
              <v-tab-item>
                <v-carousel cycle height="430" hide-delimiter-background show-arrows-on-hover class="cv-carousel">
                  <v-carousel-item v-for="n in 12" :key="'cert-' + n">
                    <v-img :src="`./img/certificado/certificados${n}.jpg`" contain height="100%" class="rounded"></v-img>
                  </v-carousel-item>
                </v-carousel>
              </v-tab-item>

              <!-- Impresos -->
              <v-tab-item>
                <v-row>
                  <v-col cols="6" sm="4" md="3" v-for="(n, idx) in impresos" :key="'imp-' + n" class="cv-works-col">
                    <div class="cv-print-card">
                      <v-img :src="`./img/galeria/diseño/img${n}.jpg`" height="170" contain class="rounded"></v-img>
                    </div>
                  </v-col>
                </v-row>
              </v-tab-item>
            </v-tabs>
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
      visor3d: false,
      v3d: {},
      visorvid: false,
      vidView: {},
      // Menú lateral del portafolio
      listamenu: [
        { text: 'Inicio', icon: 'mdi-home', id: 'inicio' },
        { text: 'Ver CV', icon: 'mdi-account', id: 'cv' },
      ],
      tabs: [
        { label: 'Web', icon: 'mdi-web' },
        { label: 'Diseño', icon: 'mdi-camera-image' },
        { label: 'Apps', icon: 'mdi-application' },
        { label: 'Vídeos', icon: 'mdi-youtube' },
        { label: '3D', icon: 'mdi-video-3d' },
        { label: 'Certificados', icon: 'mdi-certificate' },
        { label: 'Impresos', icon: 'mdi-printer' },
      ],
      videos: [
        { url: "Ez6LalbP3v0", name: "Chimeneas Puebla: Promoción Buen fin 2025" },
        { url: "14EcCG7Q0lc", name: "Kumon: Las Matemáticas ayuda a tomar mejores decisiones" }
      ],
      apps: [
        { name: "Obsoletos", img: "./img/icon/obsoletos.png", link: "./download/obsoletos.apk" },
        { name: "AppSchools", img: "./img/icon/vuejs.png", link: "./download/appschools.apk" },
        { name: "Intersom", img: "./img/icon/intersom.jpeg", link: "./download/intersom.apk" },
      ],
      impresos: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29],
      modelos3d: [
        { name: 'Deshidratador Solar V0.01', img: 'img/galeria/3d/desh2.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/60735ee6-5388-45df-a0b3-0a1e18d5a9cf?token=II39JzVUGL0=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>' },
        { name: 'Deshidratador Solar V0.2', img: 'img/galeria/3d/desh1.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/9e4a2179-c982-42ab-8dfe-22eb1bc56d8a?token=ZXkXQ7FbJO8=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>' },
        { name: 'Kaskarita v0.1', img: 'img/galeria/3d/kaskarita1.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/2ee86659-f571-4c8c-80d7-ec21ee1b5108?token=o6Q3TouIBnM=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>' },
        { name: 'Luminaria Solar Optima24', img: 'img/galeria/3d/lum1.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/fcfdd774-002a-44d4-9689-93b3f7106be2?token=h16NOCk6TFA=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>' },
        { name: 'Luminaria Solar Urban', img: 'img/galeria/3d/lum2.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/9e8c2cb9-7473-4fef-acd3-fc9ea940e8b3?token=q0sFXKLL31s=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>' },
      ],
      sitiosar: [
        { sitio: "Planeta preescolar", enlace: "https://planetapreescolar.com", img: "Planeta preescolar.png", leng: "VUEJS", active: true },
        { sitio: "ASLife Seguros", enlace: "https://aslife.web.app/", img: "aslife.png", leng: "VUEJS", active: true },
        { sitio: "Vanderbilt", enlace: "https://vanderbilt.edu.mx", img: "Vanderbilt.png", leng: "wordpress", active: true },
        { sitio: "Sistema Administración Kumon", enlace: "https://kumonsistem.web.app/", img: "Sistema Arministración Kumon.png", leng: "vuejs firebase -en desarrollo-", active: true },
        { sitio: "profetit", enlace: "https://profetit.org", img: "profetit.png", leng: "php laravel", active: true },
        { sitio: "Distribuidora Santa Fe", enlace: "https://santafedistribuidora.com", img: "Distribuidora Santa Fe.png", leng: "wordpress", active: true },
        { sitio: "easythinx", enlace: "https://easythinx.com", img: "easythinx.png", leng: "Laravel y Vuejs", active: true },
        { sitio: "comunidad MediWork", enlace: "https://comunidadmediwork.com.mx", img: "comunidad mediwork.png", leng: "WordPress + directorio médico e IA", active: true },
        { sitio: "Luminarias Solares", enlace: "https://luminarias.saecsa.com", img: "luminarias-solares.png", leng: "WordPress - e-commerce solar", active: true },
        { sitio: "Calentadores Solares", enlace: "https://saecsa.com/venta-de-calentadores-solares", img: "calentadores-solares.png", leng: "HTML, PHP, JS + MercadoPago", active: true },
      ],
    };
  },
  computed: {
    sitiosActivos() {
      return this.sitiosar.filter(s => s.active === true);
    },
  },
  methods: {
    closemenu(p) {
      this.menuOpen = p;
    },
    navegar(id) {
      if (id === 'cv') {
        this.$router.push('/');
        return;
      }
      this.$router.push('/');
    },
    scrollA(id) {
      var el = document.getElementById(id);
      if (el) el.scrollIntoView({ behavior: 'smooth' });
    },
    abrevideo(vid) {
      this.vidView = vid;
      this.visorvid = true;
    },
    abremodelo(m) {
      this.v3d = m;
      this.visor3d = true;
    },
    replaceWithErrorImage(e) {
      e.target.src = './img/icon/vuejs.png';
    },
  },
  mounted() {
    this.menuOpen = false;
  }
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Archivo+Black&display=swap');

.cv-root { background: #ffffff; }

/* ---------- Tipografía ---------- */
h1, h2, h3, h4 {
  font-family: 'Archivo Black', sans-serif;
  letter-spacing: -0.5px;
}
h4 { font-family: 'Inter', sans-serif; font-weight: 700; margin-bottom: 0.4rem; }
a { text-decoration: none; color: inherit; }

/* ---------- Hero ---------- */
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
  position: absolute; top: 0; left: 0; width: 100%; height: 100%;
  display: block; pointer-events: none;
}
.cv-hero-content { position: relative; z-index: 2; padding-top: 48px; padding-bottom: 48px; }
.cv-hero-tag {
  display: inline-flex; align-items: center; gap: 10px;
  text-transform: uppercase; letter-spacing: 3px; font-size: 12px;
  font-weight: 600; color: #b9b9bd; margin-bottom: 22px;
  border: 1px solid rgba(255,255,255,.18); padding: 8px 14px; border-radius: 999px;
}
.cv-hero-tag span { width: 22px; height: 2px; background: var(--naranja); display: inline-block; }
.cv-hero-title { font-size: clamp(2.4rem, 6vw, 4.2rem); line-height: 1.04; margin-bottom: 24px; }
.cv-hero-title .accent--text { color: var(--naranja) !important; }
.cv-hero-sub {
  max-width: 560px; color: #c7c7cc; font-size: 1.08rem;
  font-weight: 300; line-height: 1.7; margin-bottom: 32px;
}
.cv-hero-actions { display: flex; gap: 14px; flex-wrap: wrap; }
.cv-btn-accent, .cv-btn-outline { border-radius: 6px; font-weight: 600; text-transform: none; letter-spacing: .3px; }
.cv-hero-photo-col { text-align: center; }
.cv-hero-photo {
  position: relative; display: inline-block; border-radius: 6px; overflow: hidden;
  border: 1px solid rgba(255,255,255,.14);
  max-width: 250px;
}
.cv-hero-photo::after {
  content: ''; position: absolute; inset: auto 0 0 0; height: 3px; background: var(--naranja);
}
.cv-photo-img { filter: grayscale(100%) contrast(1.05); }

/* ---------- Secciones ---------- */
.cv-section { padding: 96px 0; }
.cv-section-dark { background: var(--negro); color: #fff; }
.cv-section-label {
  color: var(--naranja); font-weight: 700; text-transform: uppercase;
  letter-spacing: 3px; font-size: 12px; margin-bottom: 12px;
}
.cv-section-title { font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; color: #fff; }
.cv-section-subtitle { margin-top: 8px; font-size: .95rem; color: #b9b9bd; font-weight: 300; }
.cv-section-line { width: 56px; height: 3px; background: var(--naranja); margin-top: 18px; }
.cv-section-desc { margin-top: 18px; font-weight: 300; line-height: 1.7; color: #b9b9bd; }

/* ---------- Tabs ---------- */
.cv-tabs >>> .v-slide-group__content { justify-content: flex-start; flex-wrap: wrap; }
.cv-tabs >>> .v-tab {
  text-transform: none; font-weight: 600; font-size: .82rem; letter-spacing: .4px;
  background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.14);
  border-radius: 6px; margin: 0 8px 8px 0; color: #cfcfd3;
}
.cv-tabs >>> .v-tab--active { background: var(--naranja); border-color: var(--naranja); color: #fff; }
.cv-tabs >>> .v-tab--active .v-icon { color: #fff; }

/* ---------- Tarjetas ---------- */
.cv-works-col { padding-bottom: 20px; }
.cv-work-card {
  background: #121315; border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px; overflow: hidden; height: 100%;
  transition: transform .25s ease, border-color .25s ease;
}
.cv-work-card:hover { transform: translateY(-4px); border-color: var(--naranja); }
.cv-work-img { filter: grayscale(100%) contrast(1.04); transition: filter .3s ease; }
.cv-work-card:hover .cv-work-img { filter: grayscale(0%); }
.cv-work-body { padding: 18px 18px 20px; }
.cv-work-body h4 { color: #fff; font-size: .98rem; }
.cv-work-leng { color: #9c9ca2; font-size: .8rem; margin: 6px 0 14px; }
.cv-work-btn { border-radius: 5px; font-weight: 600; text-transform: none; font-size: .78rem; }
.cv-app-card { padding: 24px; display: flex; flex-direction: column; align-items: center; gap: 12px; text-align: center; }
.cv-app-card h4 { color: #fff; }
.cv-video-card {
  background: #121315; border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px; padding: 24px; text-align: center; cursor: pointer;
  transition: transform .25s ease, border-color .25s ease; height: 100%;
}
.cv-video-card:hover { transform: translateY(-4px); border-color: var(--naranja); }
.cv-video-thumb { margin-bottom: 12px; font-size: 3rem; line-height: 1; }
.cv-video-card h4 { color: #fff; font-size: .95rem; }
.cv-carousel { border-radius: 8px; overflow: hidden; }
.cv-print-card {
  background: #121315; border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px; overflow: hidden;
  transition: transform .25s ease, border-color .25s ease;
}
.cv-print-card:hover { transform: translateY(-4px); border-color: var(--naranja); }
.cv-print-card .v-image { filter: grayscale(100%) contrast(1.04); transition: filter .3s ease; }
.cv-print-card:hover .v-image { filter: grayscale(0%); }
.cv-dialog-title { font-family: 'Inter', sans-serif; font-weight: 700; }

/* ---------- Responsive ---------- */
@media (max-width: 960px) {
  .cv-section { padding: 64px 0; }
  .cv-hero-photo { max-width: 220px; }
}
</style>