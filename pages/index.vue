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
              <span></span> Diseñador &amp; Desarrollador Web
            </div>
            <h1 class="cv-hero-title">
              FELIPE DE JESÚS<br />
              CARRERA <span class="accent--text">RENDÓN</span>
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
              <v-btn large outlined dark color="white" @click="navegar('trabajos')" class="cv-btn-outline">
                Ver proyectos <v-icon right small>mdi-arrow-down</v-icon>
              </v-btn>
            </div>

            <v-row class="cv-metrics mt-10">
              <v-col cols="4" class="cv-metric">
                <div class="cv-metric-value"><counter :value="6" suffix="+"></counter></div>
                <div class="cv-metric-label">Años de<br />experiencia</div>
              </v-col>
              <v-col cols="4" class="cv-metric">
                <div class="cv-metric-value"><counter :value="25" suffix="+"></counter></div>
                <div class="cv-metric-label">Proyectos<br />entregados</div>
              </v-col>
              <v-col cols="4" class="cv-metric">
                <div class="cv-metric-value"><counter :value="100" suffix="%"></counter></div>
                <div class="cv-metric-label">Compromiso<br />con el detalle</div>
              </v-col>
            </v-row>
          </v-col>

          <v-col cols="12" md="5" class="cv-hero-photo-col">
            <div class="cv-hero-photo">
              <v-img src="./img/ldgfelipefoto.png" class="cv-photo-img" alt="Felipe Carrera"></v-img>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- ACERCA DE MÍ -->
    <section id="acerca" class="cv-section">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">01 — Perfil</div>
            <h2 class="cv-section-title">Acerca de mí</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <p class="cv-about-text">
              Soy diseñador gráfico y desarrollador web con más de <strong>6 años de experiencia</strong>
              creando soluciones digitales que <strong>comunican, venden y generan confianza</strong>.
            </p>
            <p class="cv-about-text">
              Combino el diseño visual con la lógica de programación para construir marcas coherentes
              y sitios web que no solo se ven bien, sino que <strong>resuelven problemas reales de negocio</strong>.
              Trabajo con emprendedores, PYMES y startups en Latinoamérica como diseñador, desarrollador
              y consultor tecnológico.
            </p>
            <v-row class="cv-about-contact">
              <v-col cols="12" md="6">
                <v-icon small class="accent--text">mdi-email</v-icon>
                <a href="mailto:ldgfelipecarrera@gmail.com" class="cv-link">ldgfelipecarrera@gmail.com</a>
              </v-col>
              <v-col cols="12" md="6">
                <v-icon small class="accent--text">mdi-map-marker</v-icon> Puebla, México
              </v-col>
              <v-col cols="12" md="6">
                <v-icon small class="accent--text">mdi-whatsapp</v-icon>
                <a href="https://wa.me/2227328662" target="_blank" class="cv-link">+52 222 732 8662</a>
              </v-col>
              <v-col cols="12" md="6">
                <v-icon small class="accent--text">mdi-file-pdf-box</v-icon>
                <a href="download/CV LDG Felipe de Jesus Carrera Rendon 2025.pdf" target="_blank" class="cv-link">Descargar CV en PDF</a>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- HABILIDADES -->
    <section id="habilidades" class="cv-section cv-section-dark">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">02 — Capacidades</div>
            <h2 class="cv-section-title white--text">Habilidades técnicas</h2>
            <div class="cv-section-line"></div>
            <p class="cv-section-desc white--text">
              Stack orientado a resultados: desarrollo a la medida, administración
              de sistemas y soluciones cloud para proyectos escalables.
            </p>
          </v-col>
          <v-col cols="12" md="7">
            <v-row>
              <v-col v-for="s in skills" :key="s.t" cols="6" md="4" class="text-center cv-skill">
                <progresscircular :valor="s.v" :titulo="s.t" color="accent" />
              </v-col>
            </v-row>
            <v-row class="cv-chips">
              <v-col cols="12">
                <v-chip v-for="c in stack" :key="c" small outlined class="cv-chip white--text mr-2 mb-2">{{ c }}</v-chip>
              </v-col>
            </v-row>
          </v-col>
        </v-row>

        <v-row class="mt-10">
          <v-col cols="12" md="6">
            <div class="cv-lang white--text">
              <h4>Idiomas</h4>
              <progresslinear :height="8" :valor="100" titulo="Español" color="accent" />
              <progresslinear :height="8" :valor="60" titulo="Inglés" color="accent" />
            </div>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- EXPERIENCIA -->
    <section id="experiencia" class="cv-section">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">03 — Trayectoria</div>
            <h2 class="cv-section-title">Experiencia profesional</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <v-timeline dense>
              <v-timeline-item
                v-for="(job, i) in experiencia"
                :key="i"
                small
                color="accent"
                class="cv-timeline-item"
              >
                <div class="cv-job">
                  <div class="cv-job-period">{{ job.periodo }}</div>
                  <h3>{{ job.empresa }}</h3>
                  <p v-html="job.descripcion"></p>
                </div>
              </v-timeline-item>
            </v-timeline>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- EDUCACIÓN -->
    <section id="educacion" class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">04 — Formación</div>
            <h2 class="cv-section-title">Educación</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <v-row>
              <v-col cols="12" md="6">
                <div class="cv-card">
                  <h3>Universidad Alva Edison</h3>
                  <p class="cv-card-sub">Licenciatura en Diseño Gráfico</p>
                </div>
              </v-col>
              <v-col cols="12" md="6">
                <div class="cv-card">
                  <h3>Universidad Alva Edison</h3>
                  <p class="cv-card-sub">Técnico en Sistemas Computacionales</p>
                </div>
              </v-col>
            </v-row>
            <div class="cv-cedula">
              <v-icon small class="accent--text">mdi-card-account-details-outline</v-icon>
              <a href="http://cedula.buholegal.com/6188950/" target="_blank" class="cv-link">
                Cédula Profesional 6188950
              </a>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- TRABAJOS -->
    <section id="trabajos" class="cv-section cv-section-dark">
      <v-container>
        <v-row class="mb-6">
          <v-col cols="12" md="5">
            <div class="cv-section-label">05 — Portafolio</div>
            <h2 class="cv-section-title white--text">Trabajos destacados</h2>
            <div class="cv-section-line"></div>
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

    <!-- CONTACTO -->
    <section id="contacto" class="cv-section">
      <v-container>
        <v-row align="center">
          <v-col cols="12" md="7">
            <div class="cv-section-label">06 — Contacto</div>
            <h2 class="cv-section-title">¿Hablamos de tu próximo proyecto?</h2>
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

        <v-row class="cv-social mt-8">
          <v-col cols="12" class="cv-social-row">
            <span class="cv-social-label">Sígueme</span>
            <a href="https://github.com/ldgfelipe" target="_blank"><v-icon>mdi-github</v-icon></a>
            <a href="https://www.linkedin.com/in/ldgfelipecarrera" target="_blank"><v-icon>mdi-linkedin</v-icon></a>
            <a href="https://facebook.com/Ldgfelipe" target="_blank"><v-icon>mdi-facebook</v-icon></a>
            <a href="https://twitter.com/ldgframe" target="_blank"><v-icon>mdi-twitter</v-icon></a>
            <a href="https://3dwarehouse.sketchup.com/by/ldgfelipecarrera" target="_blank"><v-icon>mdi-cube-outline</v-icon></a>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- WhatsApp flotante -->
    <div class="cv-whatsapp">
      <v-btn
        fab
        elevation="4"
        color="accent"
        dark
        href="https://wa.me/2227328662?text=Hola vi tu CV y quisiera que me ayudaras en mi proyecto o idea"
        target="_blank"
      >
        <v-icon>mdi-whatsapp</v-icon>
      </v-btn>
    </div>
  </v-main>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Archivo+Black&display=swap');

:root {
  --negro: #0b0b0c;
  --grafito: #161719;
  --gris-soft: #f4f4f3;
  --gris-borde: #e6e6e4;
  --naranja: #ff6b00;
}

.cv-root { background: #ffffff; }

/* ---------- Tipografía ---------- */
h1, h2, h3, h4 {
  font-family: 'Archivo Black', sans-serif;
  letter-spacing: -0.5px;
}
h4 { font-family: 'Inter', sans-serif; font-weight: 700; margin-bottom: 0.4rem; }
a { text-decoration: none; color: inherit; }
.cv-link { color: #222; border-bottom: 1px solid rgba(255,107,0,.4); transition: border-color .2s; }
.cv-link:hover { border-color: var(--naranja); }

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
.cv-metrics { max-width: 560px; }
.cv-metric { border-left: 1px solid rgba(255,255,255,.15); padding-left: 18px; }
.cv-metric-value {
  font-family: 'Archivo Black', sans-serif;
  font-size: 2rem;
  color: var(--naranja);
  line-height: 1;
}
.cv-metric-label { color: #a9a9ae; font-size: .72rem; margin-top: 6px; letter-spacing: 1px; text-transform: uppercase; line-height: 1.4; }
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

/* ---------- Secciones ---------- */
.cv-section { padding: 96px 0; }
.cv-section-gray { background: var(--gris-soft); }
.cv-section-dark { background: var(--negro); color: #fff; }
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

/* ---------- Acerca ---------- */
.cv-about-text { font-size: 1.05rem; line-height: 1.8; color: #3c3c40; margin-bottom: 18px; text-align: justify; }
.cv-about-text strong { font-weight: 700; }
.cv-about-contact { margin-top: 26px; }
.cv-about-contact .v-icon { margin-right: 8px; }
.cv-about-contact a { font-size: .95rem; }

/* ---------- Habilidades ---------- */
.cv-skill { margin-bottom: 8px; }
.cv-chips { margin-top: 28px; }
.cv-chip { border-radius: 4px; font-size: .78rem; background: rgba(255,255,255,.06) !important; border-color: rgba(255,255,255,.22) !important; }
.cv-lang h4 { color: #fff; opacity: .8; margin-bottom: 14px; }
.cv-lang >>> .progresslinear { margin-bottom: 18px; }

/* ---------- Experiencia ---------- */
.cv-timeline-item >>> .v-timeline-item__body { padding-bottom: 28px; }
.cv-job .cv-job-period {
  font-size: .72rem;
  font-weight: 600;
  color: var(--naranja);
  text-transform: uppercase;
  letter-spacing: 1.6px;
  margin-bottom: 4px;
}
.cv-job h3 { font-size: 1.1rem; }
.cv-job p { color: #56565a; line-height: 1.7; font-size: .95rem; margin-top: 6px; }

/* ---------- Educación ---------- */
.cv-card {
  background: #fff;
  border: 1px solid var(--gris-borde);
  border-radius: 8px;
  padding: 24px;
  height: 100%;
  box-shadow: 0 1px 2px rgba(0,0,0,.04);
}
.cv-card h3 { font-size: 1.05rem; margin-bottom: 6px; }
.cv-card-sub { color: #66666b; font-size: .92rem; }
.cv-cedula { margin-top: 22px; }
.cv-cedula .v-icon { margin-right: 6px; }

/* ---------- Trabajos ---------- */
.cv-tabs >>> .v-slide-group__content { justify-content: flex-start; flex-wrap: wrap; }
.cv-tabs >>> .v-tab {
  text-transform: none;
  font-weight: 600;
  font-size: .82rem;
  letter-spacing: .4px;
  background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.14);
  border-radius: 6px;
  margin: 0 8px 8px 0;
  color: #cfcfd3;
}
.cv-tabs >>> .v-tab--active {
  background: var(--naranja);
  border-color: var(--naranja);
  color: #fff;
}
.cv-tabs >>> .v-tab--active .v-icon { color: #fff; }
.cv-works-col { padding-bottom: 20px; }
.cv-work-card {
  background: #121315;
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px;
  overflow: hidden;
  height: 100%;
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
  background: #121315;
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px;
  padding: 24px;
  text-align: center;
  cursor: pointer;
  transition: transform .25s ease, border-color .25s ease;
  height: 100%;
}
.cv-video-card:hover { transform: translateY(-4px); border-color: var(--naranja); }
.cv-video-thumb { margin-bottom: 12px; font-size: 3rem; line-height: 1; }
.cv-video-card h4 { color: #fff; font-size: .95rem; }
.cv-carousel { border-radius: 8px; overflow: hidden; }
.cv-print-card {
  background: #121315;
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 10px;
  overflow: hidden;
  transition: transform .25s ease, border-color .25s ease;
}
.cv-print-card:hover { transform: translateY(-4px); border-color: var(--naranja); }
.cv-print-card .v-image { filter: grayscale(100%) contrast(1.04); transition: filter .3s ease; }
.cv-print-card:hover .v-image { filter: grayscale(0%); }
.cv-dialog-title { font-family: 'Inter', sans-serif; font-weight: 700; }

/* ---------- Contacto ---------- */
.cv-btn-big { padding: 0 32px; }
.cv-social-row { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
.cv-social-label {
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: .72rem;
  color: #8a8a8f;
  margin-right: 8px;
}
.cv-social-row a {
  width: 44px; height: 44px;
  border: 1px solid var(--gris-borde);
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all .2s ease;
  color: #333;
}
.cv-social-row a:hover { background: var(--negro); color: #fff; border-color: var(--negro); }

/* ---------- Menú ---------- */
.cv-menu-card { border-radius: 10px; }
.cv-menu-brand { font-family: 'Archivo Black', sans-serif; font-size: 1.3rem; }
.cv-menu-item { font-weight: 600; }
.cv-menu >>> .v-list-item--active { color: var(--naranja); }

/* ---------- WhatsApp flotante ---------- */
.cv-whatsapp {
  position: fixed;
  bottom: 24px;
  right: 24px;
  z-index: 9999;
}

/* ---------- Responsive ---------- */
@media (max-width: 960px) {
  .cv-section { padding: 64px 0; }
  .cv-metric { padding-left: 10px; }
  .cv-metric-value { font-size: 1.5rem; }
  .cv-hero-photo { max-width: 280px; }
}
</style>

<script>
module.exports = {
  data() {
    return {
      anuncio: true,
      show: false,
      visor3d: false,
      v3d: {},
      visorvid: false,
      vidView: {},
      dnCtx: null,
      dnWidth: 0,
      dnHeight: 0,
      dnNodes: [],
      dnRaf: null,
      dnLinkDistance: 140,
      dpr: 1,
      listamenu: [
        { text: 'Inicio', icon: 'mdi-home', id: 'inicio' },
        { text: 'Acerca de mí', icon: 'mdi-account-circle', id: 'acerca' },
        { text: 'Habilidades', icon: 'mdi-network', id: 'habilidades' },
        { text: 'Experiencia', icon: 'mdi-briefcase', id: 'experiencia' },
        { text: 'Educación', icon: 'mdi-school', id: 'educacion' },
        { text: 'Trabajos', icon: 'mdi-book-open', id: 'trabajos' },
        { text: 'Contacto', icon: 'mdi-email', id: 'contacto' },
      ],
      skills: [
        { t: 'PHP', v: 90 },
        { t: 'JAVASCRIPT', v: 85 },
        { t: 'HTML', v: 100 },
        { t: 'CSS', v: 75 },
        { t: 'MYSQL', v: 75 },
        { t: 'VUEJS', v: 90 },
        { t: 'REACTJS', v: 50 },
        { t: 'MONGODB', v: 50 },
        { t: 'FIREBASE', v: 50 },
        { t: 'AWS', v: 70 },
        { t: 'GO', v: 50 },
      ],
      stack: [
        'PHP', 'Laravel', 'CodeIgniter', 'Vue.js', 'React', 'Node.js',
        'MySQL', 'MongoDB', 'Firebase', 'AWS', 'WordPress', 'jQuery',
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
      experiencia: [
        { empresa: "Pavific / We Love Paving", periodo: "Ene 2026 – Sep 2026",
          descripcion: "Diseño web WordPress, desarrollo de plugin, integración de IA, manejo de tracking y estrategia. Desarrollo de aplicaciones para marketing digital de la empresa." },
        { empresa: "SAECSA Energía Solar", periodo: "Mar 2022 – Actual",
          descripcion: "Diseño gráfico y desarrollo web. Gestión de identidad visual, edición fotográfica y mantenimiento de sitios web." },
        { empresa: "Freelance", periodo: "Mar 2020 – Actual",
          descripcion: "Diseño de marca, desarrollo web con Vue.js/PHP y soporte técnico para clientes en Latinoamérica." },
        { empresa: "Código 46", periodo: "Ene 2020 – Mar 2020",
          descripcion: "Diseño y programación de sistema de ventas usando Vue.js y PHP para franquicias de análisis genético." },
        { empresa: "Válvulas ROS", periodo: "Oct 2018 – Oct 2019",
          descripcion: "Desarrollo web con Vue.js para empresa dedicada a la venta de válvulas industriales." },
        { empresa: "Grupo Comercial Panasa", periodo: "Ene 2014 – Ene 2018",
          descripcion: "Diseño y programación web con PHP, MySQL y jQuery para e-commerce de autopartes." },
        { empresa: "Agua Inmaculada", periodo: "Ene 2008 – Ene 2014",
          descripcion: "Jefe de Diseño y Sistemas: gestión de marca, desarrollo de sistemas internos y soporte TI." },
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
    menuOpen: {
      get() { return this.menuaction === true; },
      set(v) { this.$emit('closemenu', v); },
    },
  },
  methods: {
    navegar(id) {
      var el = document.getElementById(id);
      if (el) el.scrollIntoView({ behavior: 'smooth' });
      this.$emit('closemenu', false);
    },
    abrevideo(vid) {
      this.vidView = vid;
      this.visorvid = true;
    },
    abremodelo(m) {
      this.v3d = m;
      this.visor3d = true;
    },
    closemenu(p) {
      this.$emit('closemenu', p);
    },
    replaceWithErrorImage(e) {
      e.target.src = './img/icon/vuejs.png';
    },
    dnResize() {
      const canvas = this.$refs.dncanvas;
      if (!canvas) return;
      const wrap = canvas.parentElement;
      this.dpr = window.devicePixelRatio || 1;
      this.dnWidth = wrap.clientWidth;
      this.dnHeight = wrap.clientHeight;
      canvas.width = this.dnWidth * this.dpr;
      canvas.height = this.dnHeight * this.dpr;
      canvas.style.width = this.dnWidth + 'px';
      canvas.style.height = this.dnHeight + 'px';
      this.dnCtx.setTransform(this.dpr, 0, 0, this.dpr, 0, 0);
      if (this.dnNodes.length) this.dnBuild();
    },
    dnBuild() {
      this.dnNodes = [];
      const n = this.dnWidth < 768 ? 34 : 60;
      for (let i = 0; i < n; i++) {
        this.dnNodes.push({
          x: Math.random() * this.dnWidth,
          y: Math.random() * this.dnHeight,
          vx: (Math.random() - 0.5) * 0.45,
          vy: (Math.random() - 0.5) * 0.45,
          r: Math.random() * 2 + 0.8,
        });
      }
    },
    dnAnimate() {
      const ctx = this.dnCtx;
      const width = this.dnWidth;
      const height = this.dnHeight;
      ctx.clearRect(0, 0, width, height);
      ctx.lineWidth = 0.6;
      for (let i = 0; i < this.dnNodes.length; i++) {
        const a = this.dnNodes[i];
        for (let j = i + 1; j < this.dnNodes.length; j++) {
          const b = this.dnNodes[j];
          const dx = a.x - b.x;
          const dy = a.y - b.y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < this.dnLinkDistance) {
            const alpha = (1 - dist / this.dnLinkDistance) * 0.35;
            ctx.strokeStyle = 'rgba(255, 107, 0, ' + alpha + ')';
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.stroke();
          }
        }
      }
      for (let i = 0; i < this.dnNodes.length; i++) {
        const n = this.dnNodes[i];
        n.x += n.vx;
        n.y += n.vy;
        if (n.x < 0 || n.x > width) n.vx *= -1;
        if (n.y < 0 || n.y > height) n.vy *= -1;
        ctx.beginPath();
        ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
        ctx.fillStyle = '#FF6B00';
        ctx.fill();
        if (i === 0 || i === Math.floor(this.dnNodes.length / 2)) {
          ctx.beginPath();
          ctx.arc(n.x, n.y, n.r + 1.4, 0, Math.PI * 2);
          ctx.strokeStyle = 'rgba(255, 107, 0, 0.5)';
          ctx.lineWidth = 1;
          ctx.stroke();
        }
      }
      this.dnRaf = requestAnimationFrame(this.dnAnimate);
    },
  },
  components: {
    'counter': {
      props: { value: { type: Number, default: 0 }, suffix: { type: String, default: '' } },
      data() { return { shown: 0, started: false, count: null }; },
      mounted() {
        var vm = this;
        var el = this.$el;
        if (!('IntersectionObserver' in window)) { this.shown = this.value; return; }
        var ob = new IntersectionObserver(function (entries) {
          entries.forEach(function (en) {
            if (en.isIntersecting && !vm.started) {
              vm.started = true;
              vm.run();
              ob.disconnect();
            }
          });
        }, { threshold: 0.4 });
        ob.observe(el);
      },
      methods: {
        run() {
          var vm = this;
          var start = null;
          function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / 1600, 1);
            vm.shown = Math.round(vm.value * (1 - Math.pow(1 - p, 3)));
            if (p < 1) vm.count = requestAnimationFrame(step);
            else vm.shown = vm.value;
          }
          vm.count = requestAnimationFrame(step);
        },
      },
      beforeDestroy() { cancelAnimationFrame(this.count); },
      template: '<span>{{ shown }}{{ suffix }}</span>',
    },
    progresscircular: httpVueLoader("../components/progressloader/progressloader.vue"),
    progresslinear: httpVueLoader("../components/progresslinear/progresslinear.vue"),
  },
  props: {
    menuaction: Boolean,
  },
  mounted() {
    const canvas = this.$refs.dncanvas;
    if (canvas && canvas.getContext) {
      this.dnCtx = canvas.getContext('2d');
      this.dnResize();
      this.dnBuild();
      this.dnAnimate();
      window.addEventListener('resize', this.dnResize);
      this.$once('hook:beforeDestroy', function () {
        window.removeEventListener('resize', this.dnResize);
        cancelAnimationFrame(this.dnRaf);
      });
    }
  },
};
</script>