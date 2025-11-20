<template>
  <v-main class="secondary">

    <v-dialog v-model="menuaction" max-width="300">
      <v-card>
      
        <v-card-text>

          <v-list dense>
             <v-subheader><v-btn @click="navegainidex('/')"><v-icon>mdi-home</v-icon></v-btn></v-subheader>
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


    <v-container class="primary white--text elevation-23">
      <v-row id="infogral">
        <!-- COLUMNA IZQUIERDA: Información personal + contacto -->
        <v-col cols="12" md="6" class="text-center">
          <h2>FELIPE DE JESÚS CARRERA RENDÓN</h2>
          <h1>DISEÑADOR + DESARROLLADOR WEB</h1>
          <p class="secondary--text mb-6 ">
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
            <v-col cols="auto">
              <a href="https://3dwarehouse.sketchup.com/by/ldgfelipecarrera" target="_blank" class="secondary--text">
                <img src="./img/icon/3dwhbco.png" style="width: 50px; height: 50px" />
              </a>
            </v-col>
          </v-row>

          <!-- Información de contacto destacada -->
          <div style="border-radius: 15px; width: 100%" class="secondary primary--text text-left pa-6">
            <v-row>
              <v-col cols="12" md="6" class="pa-2">
                <v-icon small>mdi-email</v-icon>
                <a href="mailto:ldgfelipecarrera@gmail.com" class="primary--text">ldgfelipecarrera@gmail.com</a>
              </v-col>
              <v-col cols="12" md="6" class="pa-2">
                <v-icon small>mdi-whatsapp</v-icon>
                <a href="https://wa.me/2227328662&text=Hola quiero trabajar contigo" target="_blank" class="primary--text">+52 2227 32 86 62</a>
              </v-col>
              <v-col cols="12" md="6" class="pa-2">
                <v-icon small>mdi-map-marker</v-icon> Puebla, México
              </v-col>
              <v-col cols="12" md="6" class="pa-2">
                <a href="download/CV LDG Felipe de Jesus Carrera Rendon 2025.pdf" target="_blank" class="primary--text">
                  <v-icon>mdi-file-pdf-box</v-icon> Curriculum Vitae
                </a>
              </v-col>
              <v-col cols="12" class="pa-2 text-center">
                <v-btn color="primary" dark href="https://wa.me/2227328662?text=Quisiera hablar sobre un proyecto"
                  class="mt-2" target="_blank">
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
            <v-img v-if="show" src="./img/ldgfelipefoto.png" style="max-width: 550px; width: 100%"
              class="img-responsive" />
          </transition>
        </v-col>

        <!-- ACERCA DE MÍ (reescrito con enfoque estratégico) -->
        <v-col id="acercademi" cols="12" md="6" class="secondary--text">
          <div class="secondary primary--text text-center" style="border-radius: 0px 10px 10px 0px;">
            <h2>ACERCA DE MÍ</h2>
          </div>
          <p style="text-align: justify" class="pa-4">
            Soy diseñador gráfico y desarrollador web con más de 6 años de experiencia creando soluciones digitales que
            <strong>comunican, venden y generan confianza</strong>.
            <br /><br />
            Combino diseño visual con lógica de programación para construir marcas coherentes y sitios web que no solo
            se ven bien,
            sino que <strong>resuelven problemas reales de negocio</strong>.
            <br /><br />
            Trabajo con emprendedores, PYMES y startups en Latinoamérica. Soy autodidacta, meticuloso y apasionado por
            el detalle.
          </p>
        </v-col>

        <!-- EDUCACIÓN -->
        <v-col id="educacion" cols="12" md="6" class="secondary--text text-right">
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
              <a href="http://cedula.buholegal.com/6188950/" target="_blank" class="primary--text">
                Cédula Profesional 6188950
              </a>
            </p>
          </div>
        </v-col>

        <!-- EXPERIENCIA (mejor formateada) -->
        <v-col id="experiencia" cols="12" md="6" class="secondary--text text-right">
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
        <v-col cols="12" id="habilidades" md="6" class="secondary primary--text" style="border-radius: 10px">
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



          <v-container id="trabajosdestacados" fluid>
            <v-row>
              <v-col cols="12" id="sketchup">
                <div class="secondary primary--text text-center" style="border-radius: 0px 10px 10px 0px;">
                  <h2>Trabajos Destacados</h2>
                </div>



                <!----3d wherehouse----->
                <v-card>
                  <v-card-title class="primary secondary--text">
                    Sketchup 3d
                  </v-card-title>
                  <v-card-text>
                    <v-row>
                      <v-col cols="12" md="4" v-for="m3d in modelos3d">
                        <v-card max-width="100%" elevation-5>

                          <v-img height="250" :src="m3d.img"></v-img>
                          <v-card-title>
                            {{ m3d.name }}
                          </v-card-title>
                          <v-card-text>
                            <v-btn class="primary secondary--text" @click="abrevisor(m3d)">Ver Modelo</v-btn>
                          </v-card-text>
                        </v-card>
                      </v-col>
                    </v-row>

                    <v-dialog v-model="visor3d">
                      <v-card>
                        <v-card-title class="primary secondary--text">
                          {{ v3d.name }} <v-spacer></v-spacer>
                          <v-btn class="primary--text" @click="visor3d = false"><v-icon>mdi-close</v-icon></v-btn>
                        </v-card-title>
                        <v-card-text>
                          <div v-html="v3d.url"></div>
                        </v-card-text>
                      </v-card>
                    </v-dialog>

                  </v-card-text>
                </v-card>
                <!----3d wherehouse----->

                <!-----sitios web-->
                <v-card>
                  <v-card-title id="web" class="primary secondary--text">
                    Sitios Web
                  </v-card-title>
                  <v-card-text>
                    <v-row>
                      <v-col cols="12" md="4" v-for="(web, index) in sitiosar" key="index" v-if="web.active">
                        <v-card max-width="100%" elevation-5>
                          <v-img :src="web.img" ></v-img>
                          <v-card-title>
                            {{ web.sitio }}
                          </v-card-title>
                          <v-card-text>
                            {{ web.leng }}


                          </v-card-text>
                          <v-card-actions>
                            <v-btn block class="primary secondary--text" :href="web.enlace"
                              target="_blank">Visitar</v-btn>
                          </v-card-actions>
                        </v-card>
                      </v-col>
                    </v-row>
                  </v-card-text>

                </v-card>
                <!--web---->
                <!---videos-->
                <v-card id="video">
                  <v-card-title class="primary secondary--text">
                    Videos
                  </v-card-title>
                  <v-card-text>
                    <v-row>
                      <v-col cols="12" md="4" v-for="vid in videos">
                        <v-card max-width="100%" elevation-5 style="text-align:center;">

                          <v-icon class="red--text" style="font-size:300px">mdi-youtube</v-icon>
                          <v-card-title>
                            {{ vid.name }}
                          </v-card-title>
                          <v-card-text>
                            <v-btn class="primary secondary--text" @click="abrevisorvideo(vid)">Ver Video</v-btn>
                          </v-card-text>
                        </v-card>
                      </v-col>
                    </v-row>

                    <v-dialog v-model="visorvid">
                      <v-card>
                        <v-card-title class="primary secondary--text">
                          {{ vidView.name }} <v-spacer></v-spacer>
                          <v-btn class="primary--text" @click="visorvid = false"><v-icon>mdi-close</v-icon></v-btn>
                        </v-card-title>
                        <v-card-text>
                          <iframe width="100%" height="400" :src="'https://www.youtube.com/embed/' + vidView.url"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </v-card-text>
                      </v-card>
                    </v-dialog>

                  </v-card-text>
                </v-card>


                <v-card id="diseño">
                  <v-card-title class="primary secondary--text">Diseño</v-card-title>
                  <v-card-text>
                    <v-carousel  cycle height="70vh" hide-delimiter-background show-arrows-on-hover
                      delimiter-icon="mdi-circle" class="elevation-2">
                      <v-carousel-item v-for="n in 29" :key="'pub-' + n">
                        <v-img :src="`./img/galeria/diseño/img${n}.jpg`" contain height="100%" class="rounded-lg"></v-img>
                      </v-carousel-item>
                    </v-carousel>
                  </v-card-text></v-card>

                <!-- Apps -->
                <v-card  id="apps">
                  <v-card-title class="primary secondary--text">Aplicaciones</v-card-title>
                  <v-card-text>
                    <v-carousel cycle height="40vh" hide-delimiter-background show-arrows-on-hover
                      delimiter-icon="mdi-circle" class="elevation-2">
                      <v-carousel-item v-for="(app, i) in apps" :key="'app-' + i"
                        class="d-flex flex-column align-center justify-center pa-4">
                        <a :href="app.link" target="_blank">
                          <v-img :src="app.img" max-width="200" contain class="mb-4" alt="App"></v-img>
                        </a>
                        <span class="text-h6 primary--text">{{ app.name }}</span>
                        <v-btn :href="app.link" target="_blank" color="primary" outlined small class="mt-2">
                          <v-icon left>mdi-download</v-icon>
                          Descargar APK
                        </v-btn>
                      </v-carousel-item>
                    </v-carousel>
                  </v-card-text>
                </v-card>
                <v-card id="certificados">
                  <v-card-title class="primary secondary--text">Certificados</v-card-title>
                  <v-card-text>
                    <v-carousel cycle height="80vh"  hide-delimiter-background show-arrows-on-hover
                      delimiter-icon="mdi-circle" class="elevation-2">
                      <v-carousel-item v-for="n in 12" :key="'cert-' + n">
                        <v-img :src="`./img/certificado/certificados${n}.jpg`" contain height="100%"
                          class="rounded-lg"></v-img>
                      </v-carousel-item>
                    </v-carousel>
                  </v-card-text>
                </v-card>
              </v-col>
            </v-row>
          </v-container>





        </v-col>
      </v-row>
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
          text: 'información general',
          icon: 'mdi-home',
          link: 'infogral'
        },
        {
          text: 'Acercade mi',
          icon: 'mdi-account-circle',
          link: 'acercademi'
        },
        {
          text: 'Educación',
          icon: 'mdi-school',
          link: 'educacion'
        },
        {
          text: 'Habilidades',
          icon: 'mdi-network',
          link: 'habilidades'
        },
        {
          text: 'Trabajos destacados',
          icon: 'mdi-book-open',
          link: 'trabajosdestacados'
        },
        {
          text: 'sketchup 3d',
          icon: 'mdi-video-3d',
          link: 'sketchup'
        },
        {
          text: 'Sitios Web',
          icon: 'mdi-web-box',
          link: 'web'
        },
        {
          text: 'video',
          icon: 'mdi-youtube',
          link: 'video'
        },
        {
          text: 'Diseño Gráfico',
          icon: 'mdi-camera-image',
          link: 'diseño'
        },
        {
          text: 'Aplicaciones',
          icon: 'mdi-application',
          link: 'apps'
        },
        {
          text: 'Certificados',
          icon: 'mdi-certificate',
          link: 'certificados'
        },

      ],
      videos: [
        {
          url: "Ez6LalbP3v0",
          name: "Chimeneas Puebla: Promoción Buen fin 2025",
          img: ""
        },
        {
          url: "1AzbzaRY4F0",
          name: "Kumon: Inversión para el futuro",
          img: ""
        },
        {
          url: "WpW8V3-Inp8",
          name: "Kumon: 15 días mas de inscripción sin costo",
          img: ""
        },
        {
          url: "FWx6j0ogHB4",
          name: "Kumon: Inscripción sin costo promoción marzo",
          img: ""
        },
        {
          url: "dXrFOOmnsEA",
          name: "Kumon: La mejor alternativa de educación",
          img: ""
        },
        {
          url: "TDTN5kPP00I",
          name: "Kumon: El exito de un hijo no depende de su inteligencia",
          img: ""
        },
        {
          url: "14EcCG7Q0lc",
          name: "Kumon: Las Matemáticas ayuda a tomar mejores desiciones",
          img: ""

        },
        {
          url: "mMd3TdB324I",
          name: "Kumon: ¿Se distrae tu hijo con facilidad?",
          img: ""

        }
      ],
      apps: [
        { name: "Obsoletos", img: "./img/icon/obsoletos.png", link: "./download/obsoletos.apk" },
        { name: "AppSchools", img: "./img/icon/vuejs.png", link: "./download/appschools.apk" },
        { name: "Intersom", img: "./img/icon/intersom.jpeg", link: "./download/intersom.apk" }
      ],
      modelos3d: [
        {
          name: 'Deshidratador Solar V0.01',
          img: 'img/galeria/3d/desh2.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/60735ee6-5388-45df-a0b3-0a1e18d5a9cf?token=II39JzVUGL0=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>'
        },

        {
          name: 'Deshidratador Solar V0.2',
          img: 'img/galeria/3d/desh1.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/9e4a2179-c982-42ab-8dfe-22eb1bc56d8a?token=ZXkXQ7FbJO8=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>'
        },
        {
          name: 'Kaskarita v0.1',
          img: 'img/galeria/3d/kaskarita1.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/2ee86659-f571-4c8c-80d7-ec21ee1b5108?token=o6Q3TouIBnM=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>'
        },
        {
          name: 'Luminaria Solar Optima24',
          img: 'img/galeria/3d/lum1.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/fcfdd774-002a-44d4-9689-93b3f7106be2?token=h16NOCk6TFA=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;" allowfullscreen></iframe>'
        },
        {
          name: 'Luminaria Solar Urban',
          img: 'img/galeria/3d/lum2.png',
          url: '<iframe src="https://3dwarehouse.sketchup.com/embed/9e8c2cb9-7473-4fef-acd3-fc9ea940e8b3?token=q0sFXKLL31s=&binaryName=s21" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%; max-width:100%; height:100%; max-height:800px; min-height:500px;"allowfullscreen></iframe>'
        },

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
          img:"img/paginas/Planeta preescolar.png",
          leng: "VUEJS",
          active: true
        },
        {
          sitio: "ASLife Seguros",
          enlace: "https://aslife.web.app/",
          img:"img/paginas/aslife.png",
          leng: "VUEJS",
          active: true
        },
        {
          sitio: "Vanderbilt",
          enlace: "https://vanderbilt.edu.mx",
          img:"img/paginas/Vanderbilt.png",
          leng: "wordpress",
          active: true
        },
        {
          sitio: "Vanderbilt Comunidad",
          enlace: "https://vanderbilt.edu.mx/comunidad",
          img:"img/paginas/Vanderbilt Comunidad.png",
          leng: "VUEJS y Codeigniter",
          active: false
        },
        {
          sitio: "Obsoletos",
          enlace: "https://obsoletos.com.mx",
          img:"img/paginas/Obsoletos.png",
          leng: "PHP y VUEJS",
          active: false
        },
        {
          sitio: "mind-publicidad",
          enlace: "http://mind-publicidad.com/",
          img:"img/paginas/mind-publicidad.png",
          leng: "wordpress y VUEJS",
          active: false
        },
        {
          sitio: "algiocontrol",
          enlace: "http://algiocontrol.com/",
          img:"img/paginas/algiocontrol.png",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "barbershopmasterclass",
          enlace: "http://barbershopmasterclass.ml/",
          img:"img/paginas/barbershopmasterclass.png",
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
          img:"img/paginas/tienda colegiodiscovery.png",
          leng: "wordpress",
          active: false
        },
        {
          sitio: "Sistema Arministración Kumon",
          enlace: "https://kumonsistem.web.app/",
          img:"img/paginas/Sistema Arministración Kumon.png",
          leng: "vuejs firebase -en desarrollo-",
          active: true
        },
        {
          sitio: "profetit",
          enlace: "https://profetit.org",
          img:"img/paginas/profetit.png",
          leng: "php laravel",
          active: true
        },
        {
          sitio: "Torre Helea",
          enlace: "https://torrehelea.com",
          leng: "php laravel <i>en desarrollo</i>",
          img:"img/paginas/Torre Helea.png",
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
          img:"img/paginas/Distribuidora Santa Fe.png",
          leng: "wordpress",
          active: true
        },
        {
          sitio: "easythinx",
          enlace: "https://easythinx.com",
          img:"img/paginas/easythinx.png",
          leng: "Laravel y Vuejs",
          active: true
        },
        {
          sitio: "facilweb",
          enlace: "https://facilweb.com.mx",
          leng: "Desarrollado en wordpress",
          active: false
        },
        {
          sitio: "comunidad MediWork",
          enlace: "https://comunidadmediwork.com.mx",
           img:"img/paginas/comunidad mediwork.png",
          leng: "Desarrollo de plug wordpress directorio medico y pregunta de ia medica",
          active: true
        },
        {
          sitio: "Luminarias Solares",
          enlace: "https://luminarias.saecsa.com",
          img:"img/paginas/luminarias-solares.png",
          leng: "Desarrollo wordpress para venta de luminarias solares",
          active: true
        },
        {
          sitio: "Calentadores Solares",
          enlace: "https://saecsa.com/venta-de-calentadores-solares",
          img:"img/paginas/calentadores-solares.png",
          leng: "Desarrollo html, php, javascript, jquery e integración con mercadopago",
          active: true
        }

      ],
      visor3d: false,
      v3d: {},
      visorvid: false,
      vidView: {},
      selectedItem: 1
    };
  },
  computed: {
    sitiosActivos() {
      return this.sitiosar.filter(s => s.active === true);
    }
  },
  methods: {
      navegainidex(p){
      this.$router.push(p)
      this.$emit('closemenu', false)
    },
    ocultaranuncio(){
      this.anuncio===true ? this.anuncio=false : this.anuncio=true
    },
    navegar(id) {
      document.getElementById(id).scrollIntoView()
      this.$emit('closemenu', false)
    },
    abrevisor(p) {
      this.visor3d = true,
        this.v3d = p
    },
    abrevisorvideo(p) {
      this.visorvid = true,
        this.vidView = p
    },
    replaceWithErrorImage(e) {
      e.target.src = './img/icon/vuejs.png'; // imagen fallback
    },
    scrollMethod() {
      // Puedes usarlo más adelante si añades scroll suave
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