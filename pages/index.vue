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

    <!-- HERO DE VENTAS -->
    <section id="inicio" class="cv-hero">
      <v-container class="cv-hero-content">
        <v-row align="center" class="fill-height">
          <v-col cols="12" md="7">
            <div class="cv-hero-tag">
              <span></span> Diseñador &amp; Desarrollador Web — Puebla, México
            </div>
            <h1 class="cv-hero-title">
              Tu web debería traerte clientes, <span class="accent--text">no solo existir.</span>
            </h1>
            <p class="cv-hero-sub">
              Sitios web que venden, sistemas a medida y automatización con IA
              para PYMES y startups en Latinoamérica. Diseño y desarrollo en el
              mismo lugar, con medición desde el primer día.
            </p>
            <div class="cv-hero-actions">
              <v-btn large elevation="0" dark color="accent" @click="navegar('contacto')" class="cv-btn-accent">
                <v-icon left>mdi-calendar-check</v-icon> Agenda una llamada de 30 min
              </v-btn>
              <v-btn large outlined dark color="white" @click="navegar('casos')" class="cv-btn-outline">
                Ver casos reales <v-icon right small>mdi-arrow-down</v-icon>
              </v-btn>
            </div>
            <p class="cv-hero-note">
              Llamada de diagnóstico sin costo. Sin compromiso.
            </p>

            <v-row class="cv-metrics mt-10">
              <v-col cols="4" class="cv-metric">
                <div class="cv-metric-value">6+</div>
                <div class="cv-metric-label">Años de<br />experiencia</div>
              </v-col>
              <v-col cols="4" class="cv-metric">
                <div class="cv-metric-value">25+</div>
                <div class="cv-metric-label">Proyectos<br />entregados</div>
              </v-col>
              <v-col cols="4" class="cv-metric">
                <div class="cv-metric-value">2022</div>
                <div class="cv-metric-label">Cliente SAECSA<br />desde</div>
              </v-col>
            </v-row>
          </v-col>

          <v-col cols="12" md="5" class="cv-hero-photo-col">
            <div class="cv-hero-photo">
              <v-img src="./img/ldgfelipefoto.png" class="cv-photo-img" alt="Felipe Carrera, diseñador y desarrollador web"></v-img>
            </div>
            <p class="cv-hero-caption">Felipe de Jesús Carrera Rendón<br />Diseñador gráfico y desarrollador web</p>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- PARA QUIÉN ES -->
    <section class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">Para quién es</div>
            <h2 class="cv-section-title">Para empresas que ya venden y quieren vender más</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <p class="cv-about-text">
              Trabajo con <strong>PYMES y startups en Latinoamérica</strong> que ya tienen
              clientes y necesitan una web o un sistema que les ahorre tiempo o les
              traiga leads. Si tu operación hoy vive en Excel y WhatsApp, o tu web
              no explica qué vendes ni genera contactos, este trabajo es para ti.
            </p>
            <p class="cv-about-text">
              No trabajo por volumen ni por precio bajo. Trabajo pocos proyectos
              a la vez, con diseño y desarrollo en el mismo lugar, para que lo que
              se diseña se construya bien y se pueda medir.
            </p>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- SERVICIOS -->
    <section id="servicios" class="cv-section">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">01 — Servicios</div>
            <h2 class="cv-section-title">Qué puedes contratar</h2>
            <div class="cv-section-line"></div>
            <p class="cv-section-desc">
              Tres servicios, con alcance claro. El precio y el tiempo se cotizan
              después de la llamada de diagnóstico, según tu proyecto.
            </p>
          </v-col>
          <v-col cols="12" md="7">
            <v-row>
              <v-col cols="12" md="4" v-for="(s, i) in servicios" :key="i">
                <div class="cv-service-card">
                  <v-img :src="s.img" height="140" class="cv-service-img" :alt="s.titulo"></v-img>
                  <div class="cv-service-body">
                    <h3>{{ s.titulo }}</h3>
                    <p>{{ s.desc }}</p>
                    <p class="cv-service-incluye">{{ s.incluye }}</p>
                    <v-btn small elevation="0" color="accent" dark @click="navegar('contacto')" class="cv-btn-accent">
                      Quiero este servicio
                    </v-btn>
                  </div>
                </div>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- CASOS -->
    <section id="casos" class="cv-section cv-section-dark">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">02 — Casos</div>
            <h2 class="cv-section-title">Trabajo real, en producción</h2>
            <div class="cv-section-line"></div>
            <p class="cv-section-desc">
              Una muestra de proyectos con clientes reales. El portafolio
              completo, con sitios web, apps, vídeos, diseño y 3D, está en la
              sección de Portafolio.
            </p>
            <v-btn large outlined dark color="white" @click="navegar('portafolio')" class="cv-btn-outline mt-4">
              Ver portafolio completo <v-icon right small>mdi-gallery</v-icon>
            </v-btn>
          </v-col>
          <v-col cols="12" md="7">
            <v-row>
              <v-col cols="12" v-for="(c, i) in casos" :key="i">
                <div class="cv-case-card">
                  <div class="cv-case-period">{{ c.periodo }}</div>
                  <h3>{{ c.titulo }}</h3>
                  <p><strong>Problema:</strong> {{ c.problema }}</p>
                  <p><strong>Solución:</strong> {{ c.solucion }}</p>
                  <v-btn v-if="c.enlace" small outlined color="accent" :href="c.enlace" target="_blank" class="cv-work-btn" @click="track('click_portafolio', 'caso')">
                    Visitar sitio <v-icon right x-small>mdi-open-in-new</v-icon>
                  </v-btn>
                </div>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- PROCESO -->
    <section id="proceso" class="cv-section">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">03 — Proceso</div>
            <h2 class="cv-section-title">Así trabajamos, sin sorpresas</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <v-row>
              <v-col cols="12" md="6" v-for="(p, i) in pasos" :key="i">
                <div class="cv-step-card">
                  <div class="cv-step-num">{{ i + 1 }}</div>
                  <h3>{{ p.titulo }}</h3>
                  <p>{{ p.desc }}</p>
                </div>
              </v-col>
            </v-row>
          </v-col>
        </v-row>

        <v-row class="mt-10">
          <v-col cols="12">
            <div class="cv-section-label">Clientes</div>
            <v-row align="center">
              <v-col cols="6" md="2" v-for="(logo, i) in clientes" :key="i" class="text-center">
                <v-img :src="logo.img" height="60" contain class="cv-logo-img" :alt="logo.nombre"></v-img>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section id="faq" class="cv-section cv-section-gray">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">04 — Preguntas frecuentes</div>
            <h2 class="cv-section-title">Antes de escribirme</h2>
            <div class="cv-section-line"></div>
          </v-col>
          <v-col cols="12" md="7">
            <div v-for="(f, i) in faqs" :key="i" class="cv-faq">
              <h3>{{ f.pregunta }}</h3>
              <p>{{ f.respuesta }}</p>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </section>

    <!-- CONTACTO / FORMULARIO SLT -->
    <section id="contacto" class="cv-section">
      <v-container>
        <v-row>
          <v-col cols="12" md="5">
            <div class="cv-section-label">05 — Contacto</div>
            <h2 class="cv-section-title">¿Hablamos de tu próximo proyecto?</h2>
            <p class="cv-section-desc">
              Cuéntame de tu proyecto en el formulario. Te contacto para agendar
              la llamada de diagnóstico de 30 minutos.
            </p>
            <p class="cv-about-text">
              <v-icon small class="accent--text">mdi-email</v-icon>
              <a href="mailto:ldgfelipecarrera@gmail.com" class="cv-link">ldgfelipecarrera@gmail.com</a><br />
              <v-icon small class="accent--text">mdi-whatsapp</v-icon>
              <a href="https://wa.me/2227328662" target="_blank" class="cv-link" @click="track('click_whatsapp', 'contacto')">+52 222 732 8662</a><br />
              <v-icon small class="accent--text">mdi-map-marker</v-icon> Puebla, México
            </p>
            <p class="cv-section-desc">
              ¿Prefieres ver mi CV completo?
              <a href="#/cv" class="cv-link" @click="navegar('cv')">Ver CV</a>
              · <a href="download/CVLDGFCR2026.pdf" target="_blank" class="cv-link" @click="track('descarga_cv', 'contacto')">Descargar CV en PDF</a>
            </p>
          </v-col>
          <v-col cols="12" md="7">
            <div id="slt-form-captacion" class="slt-form-wrap"></div>
            <p class="cv-form-note">
              Al enviar, tu mensaje queda registrado y te contacto por WhatsApp o correo.
              También puedes escribirme directo por
              <a href="https://wa.me/2227328662?text=Quisiera%20hablar%20sobre%20un%20proyecto" target="_blank" class="cv-link" @click="track('click_whatsapp', 'formulario')">WhatsApp</a>.
            </p>
          </v-col>
        </v-row>

        <v-row class="cv-social mt-8">
          <v-col cols="12" class="cv-social-row">
            <span class="cv-social-label">Sígueme</span>
            <a href="https://www.instagram.com/ldgfelipecarrera" target="_blank" aria-label="Instagram"><v-icon>mdi-instagram</v-icon></a>
            <a href="https://github.com/ldgfelipe" target="_blank" aria-label="GitHub"><v-icon>mdi-github</v-icon></a>
            <a href="https://www.linkedin.com/in/ldgfelipecarrera" target="_blank" aria-label="LinkedIn"><v-icon>mdi-linkedin</v-icon></a>
            <a href="https://facebook.com/Ldgfelipe" target="_blank" aria-label="Facebook"><v-icon>mdi-facebook</v-icon></a>
            <a href="https://twitter.com/ldgframe" target="_blank" aria-label="X / Twitter"><v-icon>mdi-twitter</v-icon></a>
            <a href="https://3dwarehouse.sketchup.com/by/ldgfelipecarrera" target="_blank" aria-label="Sketchfab / 3D Warehouse"><v-icon>mdi-cube-outline</v-icon></a>
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
        href="https://wa.me/2227328662?text=Hola%20vi%20tu%20p%C3%A1gina%20y%20quisiera%20que%20me%20ayudaras%20en%20mi%20proyecto%20o%20idea"
        target="_blank"
        @click="track('click_whatsapp', 'flotante')"
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
h1, h2, h3, h4 {
  font-family: 'Archivo Black', sans-serif;
  letter-spacing: -0.5px;
}
h4 { font-family: 'Inter', sans-serif; font-weight: 700; margin-bottom: 0.4rem; }
a { text-decoration: none; color: inherit; }
.cv-link { color: #222; border-bottom: 1px solid rgba(255,107,0,.4); transition: border-color .2s; }
.cv-link:hover { border-color: var(--naranja); }

.cv-hero {
  position: relative;
  background: linear-gradient(135deg, #0b0b0c 0%, #17181a 100%);
  color: #fff;
  overflow: hidden;
  min-height: 92vh;
  display: flex;
  align-items: center;
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
.cv-hero-tag span { width: 22px; height: 2px; background: var(--naranja); display: inline-block; }
.cv-hero-title { font-size: clamp(2.4rem, 6vw, 4.2rem); line-height: 1.04; margin-bottom: 24px; }
.cv-hero-title .accent--text { color: var(--naranja) !important; }
.cv-hero-sub { max-width: 560px; color: #c7c7cc; font-size: 1.08rem; font-weight: 300; line-height: 1.7; margin-bottom: 32px; }
.cv-hero-note { color: #a9a9ae; font-size: .85rem; margin-top: 14px; }
.cv-hero-actions { display: flex; gap: 14px; flex-wrap: wrap; }
.cv-btn-accent { border-radius: 6px; font-weight: 600; text-transform: none; letter-spacing: .3px; }
.cv-btn-outline { border-radius: 6px; font-weight: 600; text-transform: none; letter-spacing: .3px; }
.cv-metrics { max-width: 560px; }
.cv-metric { border-left: 1px solid rgba(255,255,255,.15); padding-left: 18px; }
.cv-metric-value { font-family: 'Archivo Black', sans-serif; font-size: 2rem; color: var(--naranja); line-height: 1; }
.cv-metric-label { color: #a9a9ae; font-size: .72rem; margin-top: 6px; letter-spacing: 1px; text-transform: uppercase; line-height: 1.4; }
.cv-hero-photo-col { text-align: center; }
.cv-hero-photo { position: relative; display: inline-block; border-radius: 6px; overflow: hidden; border: 1px solid rgba(255,255,255,.14); max-width: 280px; }
.cv-hero-photo::after { content: ''; position: absolute; inset: auto 0 0 0; height: 3px; background: var(--naranja); }
.cv-photo-img { filter: grayscale(100%) contrast(1.05); }
.cv-hero-caption { color: #a9a9ae; font-size: .85rem; margin-top: 14px; line-height: 1.5; }

.cv-section { padding: 96px 0; }
.cv-section-gray { background: var(--gris-soft); }
.cv-section-dark { background: var(--negro); color: #fff; }
.cv-section-label { color: var(--naranja); font-weight: 700; text-transform: uppercase; letter-spacing: 3px; font-size: 12px; margin-bottom: 12px; }
.cv-section-title { font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; }
.cv-section-dark .cv-section-title { color: #fff; }
.cv-section-line { width: 56px; height: 3px; background: var(--naranja); margin-top: 18px; }
.cv-section-desc { margin-top: 18px; font-weight: 300; line-height: 1.7; color: #5a5a5e; }
.cv-section-dark .cv-section-desc { color: #b9b9bd; }
.cv-about-text { font-size: 1.05rem; line-height: 1.8; color: #3c3c40; margin-bottom: 18px; text-align: justify; }
.cv-about-text strong { font-weight: 700; }

.cv-service-card { background: #fff; border: 1px solid var(--gris-borde); border-radius: 10px; overflow: hidden; height: 100%; box-shadow: 0 1px 2px rgba(0,0,0,.04); }
.cv-service-img { border-bottom: 3px solid var(--naranja); }
.cv-service-body { padding: 20px; }
.cv-service-body h3 { font-size: 1.05rem; margin-bottom: 8px; }
.cv-service-body p { color: #56565a; line-height: 1.7; font-size: .95rem; margin-bottom: 10px; }
.cv-service-incluye { font-size: .85rem; color: #66666b; }

.cv-case-card { background: #121315; border: 1px solid rgba(255,255,255,.1); border-radius: 10px; padding: 24px; margin-bottom: 20px; }
.cv-case-card h3 { color: #fff; font-size: 1.15rem; margin-bottom: 10px; }
.cv-case-card p { color: #c7c7cc; line-height: 1.7; font-size: .95rem; margin-bottom: 10px; }
.cv-case-period { font-size: .72rem; font-weight: 600; color: var(--naranja); text-transform: uppercase; letter-spacing: 1.6px; margin-bottom: 6px; }
.cv-work-btn { border-radius: 5px; font-weight: 600; text-transform: none; font-size: .78rem; }

.cv-step-card { background: #fff; border: 1px solid var(--gris-borde); border-radius: 10px; padding: 24px; height: 100%; }
.cv-step-num { font-family: 'Archivo Black', sans-serif; font-size: 2rem; color: var(--naranja); line-height: 1; margin-bottom: 10px; }
.cv-step-card h3 { font-size: 1.05rem; margin-bottom: 8px; }
.cv-step-card p { color: #56565a; line-height: 1.7; font-size: .95rem; }
.cv-logo-img { filter: grayscale(100%); opacity: .8; }

.cv-faq { border-bottom: 1px solid var(--gris-borde); padding: 18px 0; }
.cv-faq h3 { font-family: 'Inter', sans-serif; font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; }
.cv-faq p { color: #56565a; line-height: 1.7; font-size: .95rem; }

.slt-form-wrap { background: var(--gris-soft); border: 1px solid var(--gris-borde); border-radius: 10px; padding: 16px; min-height: 420px; }
.cv-form-note { color: #66666b; font-size: .88rem; margin-top: 12px; line-height: 1.6; }

.cv-btn-big { padding: 0 32px; }
.cv-social-row { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
.cv-social-label { font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: .72rem; color: #8a8a8f; margin-right: 8px; }
.cv-social-row a { width: 44px; height: 44px; border: 1px solid var(--gris-borde); border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; transition: all .2s ease; color: #333; }
.cv-social-row a:hover { background: var(--negro); color: #fff; border-color: var(--negro); }

.cv-menu-card { border-radius: 10px; }
.cv-menu-brand { font-family: 'Archivo Black', sans-serif; font-size: 1.3rem; }
.cv-menu-item { font-weight: 600; }
.cv-whatsapp { position: fixed; bottom: 24px; right: 24px; z-index: 9999; }

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
      listamenu: [
        { text: 'Inicio', icon: 'mdi-home', id: 'inicio' },
        { text: 'Servicios', icon: 'mdi-briefcase', id: 'servicios' },
        { text: 'Casos', icon: 'mdi-star', id: 'casos' },
        { text: 'Proceso', icon: 'mdi-steps', id: 'proceso' },
        { text: 'Portafolio', icon: 'mdi-gallery', id: 'portafolio' },
        { text: 'CV', icon: 'mdi-account', id: 'cv' },
        { text: 'Contacto', icon: 'mdi-email', id: 'contacto' },
      ],
      servicios: [
        {
          titulo: 'Sitio web que vende',
          img: './img/inicio/ecommerce.jpg',
          desc: 'Landing, sitio corporativo o e-commerce que explica qué vendes y genera contactos.',
          incluye: 'Incluye: diseño, desarrollo, formulario + WhatsApp, SEO básico y Analytics.'
        },
        {
          titulo: 'Sistema a medida + IA',
          img: './img/inicio/ia-empresas.jpg',
          desc: 'Deja Excel y WhatsApp manual. Un sistema web para tu operación, con usuarios, reportes y automatización.',
          incluye: 'Incluye: levantamiento, sistema web, usuarios y permisos, reportes e integración con IA.'
        },
        {
          titulo: 'Marca + web + funnel',
          img: './img/inicio/agenda.jpg',
          desc: 'Identidad, sitio web y captación de leads para lanzar o relanzar tu negocio.',
          incluye: 'Incluye: identidad visual, sitio web, landing de captación y seguimiento.'
        },
      ],
      casos: [
        {
          titulo: 'SAECSA Energía Solar',
          periodo: 'Mar 2022 – Actual',
          problema: 'Una empresa de energía solar con productos técnicos que su web no explicaba ni ayudaba a cotizar.',
          solucion: 'Diseño gráfico y desarrollo web, gestión de identidad visual, edición fotográfica y mantenimiento de los sitios de luminarias y calentadores solares.',
          enlace: 'https://luminarias.saecsa.com'
        },
        {
          titulo: 'Pavific / We Love Paving',
          periodo: 'Ene 2026 – Sep 2026',
          problema: 'Necesitaban una web que además de verse bien, se pudiera medir y mejorar con datos.',
          solucion: 'Diseño web en WordPress, desarrollo de plugin, integración de IA, manejo de tracking y estrategia, y desarrollo de aplicaciones para marketing digital.',
          enlace: ''
        },
        {
          titulo: 'Kumon — Sistema de Administración',
          periodo: 'Sistema web en producción',
          problema: 'La administración se hacía de forma manual, sin una herramienta central.',
          solucion: 'Sistema de administración web desarrollado a medida para gestionar la operación.',
          enlace: 'https://kumonsistem.web.app/'
        },
      ],
      pasos: [
        { titulo: 'Llamada de diagnóstico', desc: '30 minutos, sin costo. Entendemos tu proyecto, tu objetivo y si te puedo ayudar.' },
        { titulo: 'Propuesta', desc: 'Alcance, tiempo y precio por escrito. Sin sorpresas después.' },
        { titulo: 'Diseño y desarrollo', desc: 'Trabajo con revisiones, para que veas avances y no solo el resultado final.' },
        { titulo: 'Lanzamiento y medición', desc: 'Publicamos, medimos con Analytics y te acompaño con soporte después del lanzamiento.' },
      ],
      clientes: [
        { nombre: 'SAECSA', img: './img/clientes/saecsa.png' },
        { nombre: 'GPS Constructo', img: './img/clientes/gpsconstructo.png' },
        { nombre: 'profetit', img: './img/clientes/logo-profetit.png' },
        { nombre: 'MediWork', img: './img/clientes/mediwork.png' },
        { nombre: 'Planeta Preescolar', img: './img/clientes/planetapreescolar.png' },
        { nombre: 'Chimeneas Puebla', img: './img/clientes/chimeneaspuebla.png' },
      ],
      faqs: [
        { pregunta: '¿Cuánto cuesta un proyecto?', respuesta: 'Depende del alcance. Después de la llamada de diagnóstico te envío una propuesta con precio y tiempo por escrito, sin compromiso.' },
        { pregunta: '¿En cuánto tiempo se entrega?', respuesta: 'Depende del tipo de proyecto. Un sitio web es más rápido que un sistema a medida. El tiempo queda en la propuesta, antes de empezar.' },
        { pregunta: '¿Trabajas solo o con equipo?', respuesta: 'Soy diseñador y desarrollador, hago diseño y desarrollo en el mismo lugar. Para proyectos grandes, lo revisamos en la llamada.' },
        { pregunta: '¿Das soporte después del lanzamiento?', respuesta: 'Sí. Después del lanzamiento seguimos con medición y soporte, y lo dejamos acordado en la propuesta.' },
      ],
    };
  },
  computed: {
    menuOpen: {
      get() { return this.menuaction === true; },
      set(v) { this.$emit('closemenu', v); },
    },
  },
  methods: {
    navegar(id) {
      if (id === 'portafolio') {
        this.$router.push('/portafolio');
        this.$emit('closemenu', false);
        return;
      }
      if (id === 'cv') {
        this.$router.push('/cv');
        this.$emit('closemenu', false);
        return;
      }
      var el = document.getElementById(id);
      if (el) el.scrollIntoView({ behavior: 'smooth' });
      this.$emit('closemenu', false);
    },
    closemenu(p) {
      this.$emit('closemenu', p);
    },
    track(evento, origen) {
      try {
        if (window.gtag) window.gtag('event', evento, { origen: origen });
      } catch (e) {}
    },
    loadSltForm() {
      try {
        if (document.querySelector('iframe[data-slt-form-id="6e416375-3658-4b6c-a65c-846c0cc23bd1"]')) return;
        if (document.querySelector('script[data-slt-loader="1"]')) return;
        var container = document.getElementById('slt-form-captacion');
        if (!container) return;
        var s = document.createElement('script');
        s.src = 'https://slt-xi.vercel.app/slt-form.js';
        s.async = true;
        s.setAttribute('data-form-id', '6e416375-3658-4b6c-a65c-846c0cc23bd1');
        s.setAttribute('data-target', '#slt-form-captacion');
        s.setAttribute('data-min-height', '420');
        s.setAttribute('data-slt-loader', '1');
        container.appendChild(s);
      } catch (e) {}
    },
  },
  props: {
    menuaction: Boolean,
  },
  mounted() {
    this.loadSltForm();
  },
};
</script>
