<template>




  <v-container class="py-12">



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

    <div style="width:100%; max-width:100%; height:200px; position:relative;"></div>

    <v-row justify="center">
      <v-col cols="12" md="8">

        <h1 class="text-h4 font-weight-bold mb-6">
          Aviso de Privacidad
        </h1>

        <p class="mb-4">
          En <strong>LDGFRAME</strong>, estamos comprometidos con la protección de sus
          datos personales, el uso responsable de la información y la transparencia
          en nuestros procesos. Este Aviso de Privacidad se emite en cumplimiento
          con la Ley Federal de Protección de Datos Personales en Posesión de los
          Particulares (LFPDPPP) y tiene como finalidad informar al titular sobre el
          tratamiento que se dará a su información.
        </p>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">1. Responsable del tratamiento de los datos</h2>
        <p class="mb-4">
          <strong>LDGFRAME</strong> es responsable del uso y protección de los datos
          personales proporcionados por los usuarios, clientes y visitantes de
          nuestros servicios digitales.
        </p>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">2. Datos personales que se recopilan</h2>
        <p>Podemos solicitar o recopilar los siguientes datos personales:</p>
        <ul class="mb-4">
          <li>Nombre completo</li>
          <li>Correo electrónico</li>
          <li>Número telefónico</li>
          <li>Información de contacto comercial</li>
          <li>Datos necesarios para cotización o contratación de servicios</li>
          <li>Mensajes enviados a través de formularios o sistemas de contacto</li>
        </ul>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">3. Finalidades del tratamiento</h2>
        <p>Los datos recopilados serán utilizados para las siguientes finalidades:</p>
        <ul class="mb-4">
          <li>Brindar información sobre productos o servicios.</li>
          <li>Proveer servicios contratados por el usuario.</li>
          <li>Responder consultas o mensajes enviados por el usuario.</li>
          <li>Generar cotizaciones y propuestas comerciales.</li>
          <li>Mejorar la calidad del servicio y experiencia del cliente.</li>
          <li>Envío de notificaciones pertinentes al servicio solicitado.</li>
        </ul>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">4. Transferencia de datos</h2>
        <p class="mb-4">
          Los datos personales no serán compartidos con terceros, excepto cuando sea
          requerido por ley, por autoridad competente o para cumplir con servicios
          necesarios para la operación del negocio (por ejemplo, herramientas
          tecnológicas, servidores o sistemas de mensajería).
        </p>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">5. Derechos ARCO</h2>
        <p>
          Usted tiene derecho a:
        </p>
        <ul class="mb-4">
          <li>Acceder a sus datos personales.</li>
          <li>Rectificarlos en caso de ser inexactos o incompletos.</li>
          <li>Cancelar su información cuando considere que no se requiere para los fines señalados.</li>
          <li>Oponerse al tratamiento de sus datos para fines específicos.</li>
        </ul>
        <p class="mb-4">
          Para ejercer cualquiera de estos derechos, puede contactarnos a través
          del correo: <strong>contacto@ldgframe.com</strong>
        </p>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">6. Uso de tecnologías de rastreo</h2>
        <p class="mb-4">
          Nuestro sitio web puede utilizar cookies, web beacons u otras tecnologías
          para mejorar la experiencia del usuario. El uso de estas tecnologías puede
          recopilar datos como dirección IP, tipo de navegador o comportamiento de navegación.
        </p>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">7. Cambios al Aviso de Privacidad</h2>
        <p class="mb-4">
          Este Aviso puede actualizarse periódicamente para reflejar cambios en
          nuestras prácticas o regulaciones aplicables. Cualquier modificación será
          publicada en este mismo sitio web.
        </p>

        <h2 class="text-h6 font-weight-bold mt-8 mb-3">8. Contacto del responsable</h2>
        <p class="mb-4">
          Para dudas, sugerencias o solicitudes relacionadas con este Aviso de
          Privacidad, puede escribirnos a:
        </p>

        <p class="mb-1"><strong>LDGFRAME</strong></p>
        <p class="mb-1">Correo: ldgframe@gmail.com</p>
        <p class="mb-8">Página web: https://ldgfelipe.github.io/ldgbehance/</p>

        <p class="text-caption text-grey">
          Última actualización: {{ new Date().toLocaleDateString() }}
        </p>

      </v-col>
    </v-row>
  </v-container>
</template>
<script>
module.exports = {
  data() {
    return {
    anuncio:true,
      listamenu: [
        {
          text: 'Inicio',
          icon: 'mdi-home',
          link: '/'
        },
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