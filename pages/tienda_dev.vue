<template>
  <v-main class="secondary">
    <v-dialog v-model="dialog" max-width="600px">
      <v-card v-if="selectedItem" class="rounded-xl pa-4">
        <v-img :src="selectedItem.img" class="rounded-lg" height="250px"></v-img>
        <v-card-title class="text-h4 font-weight-bold">{{ selectedItem.title }}</v-card-title>
        <v-card-text class="text-body-1 black--text">
          {{ selectedItem.description }}
          <v-divider class="my-4"></v-divider>
          <strong>Características:</strong>
          <ul class="mt-2">
            <li v-for="(f, i) in selectedItem.features" :key="i">{{ f }}</li>
          </ul>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn text @click="dialog = false">Cerrar</v-btn>
          <v-btn color="primary" @click="comprar(selectedItem.id)">Adquirir ahora</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-container class="py-16 text-center" style="height:100px;">
    </v-container>

    <v-container class="py-16 text-center">
      <v-row justify="center">
        <v-col cols="12" md="8">
          <h1 class="text-h2 font-weight-bold mb-4">
            SEO Cannibalism <span class="text-primary">Pro</span>
          </h1>
          <p class="text-body-1 mb-8">
            Has descubierto el poder del análisis semántico. Para continuar optimizando tu sitio y resolviendo conflictos de búsqueda, elige el plan que mejor se adapte a tu flujo de trabajo.
          </p>
        </v-col>
      </v-row>
    </v-container>

    <v-container class="pb-16">
      <h2 class="text-h4 font-weight-bold mb-6 text-center">Herramientas Disponibles</h2>
      <v-row justify="center">
        <v-col v-for="(item, index) in tienda" :key="index" cols="12" md="4">
          <v-card elevation="6" class="rounded-xl pa-2" @click="abrirDetalles(item)">
            <v-img :src="item.img" height="200" class="rounded-lg"></v-img>
            <v-card-title class="font-weight-bold">{{ item.title }}</v-card-title>
            <v-card-subtitle>{{ item.shortDesc }}</v-card-subtitle>
            <v-card-actions>
              <v-btn color="primary" text font-weight-bold>Ver detalles</v-btn>
              <v-spacer></v-spacer>
           
              <span class="text-h6 font-weight-bold">${{ item.price }}</span>

            </v-card-actions>
            <v-card-actions>
   
                 <a href="https://invify.online/wp-content/uploads/2026/01/seo-cannibalism-detector.zip" target="_blank"><v-icon>mdi-download</v-icon> Descarga Seo Cannibalism Detector ¡Ahora!</a>

            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>

    <v-container class="py-10 text-center">
      <v-divider class="mb-10"></v-divider>
      <p class="text-h6 font-weight-bold mb-4">¿Necesitas una implementación personalizada?</p>
      <v-btn outlined color="primary" href="https://wa.me/2227328662?text=Hola Felipe, necesito soporte con la licencia del plugin SEO" target="_blank">
        <v-icon left>mdi-whatsapp</v-icon> Soporte Directo con Felipe Carrera
      </v-btn>
    </v-container>

     <v-container class="primary white--text elevation-23">
       <div style="position:fixed; bottom:10px; right:10px; z-index:999999999999999999999999;">
      <v-alert v-model="anuncio" @click="ocultaranuncio()" style="width:150px; height:90px; padding:8px; border-radius:10px; box-shadow:1px 1px 5px #000; background-color:#fff; text-align:center;" class="primary--text">
        ¿Quieres que te ayude con algún proyecto?
      </v-alert>
        <v-btn href="https://wa.me/2227328662?&text=Hola vi tu CV y quisiera que me ayudaras en mi proyecto o idea" target="_blank" class="green--text"><v-icon style="font-size:25px;">mdi-whatsapp</v-icon></v-btn>
      </div>
    </v-container>
  </v-main>
</template>

<style scoped>
h1, h2, h3 {
  font-family: 'Archivo Black', sans-serif !important;
}
.border-top-primary {
  border-top: 8px solid #1976D2;
}
.opacity-80 {
  opacity: 0.8;
}
</style>

<script>
module.exports = {
  data() {
    return {
      anuncio: true,
      dialog: false,
      selectedItem: null,
      tienda: [
        {
          id: 'seo-cannibalism',
          title: 'SEO Cannibalism Pro',
          shortDesc: 'Detección inteligente de canibalización semántica.',
          description: 'El plugin definitivo para WordPress que analiza la intención de búsqueda y similitud de títulos para evitar que tus propias páginas compitan entre sí.',
          price: '450',
          img: 'plugins/canibalism-seo-pro/SEO Cannibalism Pro.jpg', // Ajustar a tu ruta de imagen
          features: ['Análisis v8.0', 'Paginación Pro', 'Exportación CSV', 'Detección de Intención']
        }
        // Puedes agregar más objetos aquí para la galería
      ],
      featsMensual: [
        'Análisis semántico ilimitado',
        'Buscador de keywords pro',
        'Soporte vía email',
        'Actualizaciones v8.x'
      ],
      featsLifetime: [
        'Todo lo del plan mensual',
        'Pago único (Sin suscripción)',
        'Soporte prioritario 1-a-1',
        'Uso en sitios ilimitados',
        'Acceso a futuras versiones'
      ]
    };
  },
  mounted() {
    // Lógica para abrir item por URL: ?item=seo-cannibalism
    const params = new URLSearchParams(window.location.search);
    const itemQuery = params.get('item');
    if (itemQuery) {
      const item = this.tienda.find(t => t.id === itemQuery);
      if (item) this.abrirDetalles(item);
    }
  },
  methods: {
    abrirDetalles(item) {
      this.selectedItem = item;
      this.dialog = true;
      // Actualiza la URL sin recargar para que el usuario pueda compartir el link
      const newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?item=' + item.id;
      window.history.pushState({path:newurl},'',newurl);
    },
    ocultaranuncio() {
      this.anuncio = !this.anuncio;
    },
    comprar(plan) {
      const url = `https://invify.online/wp-json/scp/v1/pay/canibalismo-seo`;
      window.open(url, '_blank');
    }
  }
};
</script>