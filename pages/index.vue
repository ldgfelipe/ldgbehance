<template>
    <v-main class="secondary">
        
        <v-container  class="primary white--text elevation-23" >
            <v-row> 
                <v-col cols="12" md="8" class="text-center">
                    <h2>FELIPE DE JESÚS
CARRERA RENDÓN</h2>
                    <h1>DISEÑADOR Y PROGRAMADOR WEB</h1>
     <v-row>
     
         <v-col cols="4" class="left-text">
             <a href="https://facebook.com/Ldgframe" target="_blanck" class="secondary--text"><img src="./img/icon/fb.png" style="width:60px; height:60px; position:relative;" /> </a>
         </v-col>
         <v-col cols="4" class="left-text">
              <a href="https://twitter.com/ldgfelipecarrera" target="_blanck" class="secondary--text"><img src="./img/icon/tw.png" style="width:60px; height:60px; position:relative;" /> </a>
         </v-col>

            <v-col cols="4" class="left-text">
              <a href="https://twitter.com/ldgfelipecarrera" target="_blanck" class="secondary--text"><img src="./img/icon/gh.png" style="width:60px; height:60px; position:relative;" /> </a>
         </v-col>
            
    </v-row>

    <div style="border-radius:15px; width:100%; " class="secondary primary--text text-left pa-10 ">
        <v-row>
            <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-email</v-icon> <a href="mailto:ldgfelipecarrera@gmail.com">ldgfelipecarrera@gmail.com</a>
            </v-col>
              <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-whatsapp</v-icon> <a href="whatsapp://send?text=Vi tu CV y estoy interesado en tus servicios&phone=+522227328662&abid=+522227328662" target="_blank">2227328662</a>
        </v-col>
        <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-home</v-icon> PUEBLA,MÉXICO
        </v-col>

            <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-web</v-icon> <a href="https://codigofacilito.com/usuarios/ldgfelipecarrera/" target="_blank">codigofacilito.com</a>
        </v-col>
              <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-file-document-outline</v-icon>  <a href="./download/CV LDGFELIPECARRERARENDOND 2021.pdf"  >Descargar CV</a>
        </v-col>

            <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-linkedin</v-icon>  <a href="https://www.linkedin.com/in/ldgfelipecarrera" target="_blank" >linkedin.com</a>
        </v-col>



                    


             <v-col cols="12" md="6" class="pa-3">
         <v-icon>mdi-card-account-details-outline</v-icon>  CEDULA PROFESIONAL 6188950
        </v-col>

        </v-row>
        </div>


 

                </v-col>
                <v-col cols="12" md="4">

                      <transition name="slide-fade">
                             <p v-if="show"><v-img src="./img/mifoto.png"   class="img-responsive" /></p>
                           
                        </transition>
                 
                </v-col>

            <v-col cols="12" md="6" class="secondary--text">
            <div class="secondary primary--text text-center" style="border-radius:0px 10px 10px 0px;"><h2>ACERCA DE MI</h2></div>

            <p style="text-align:justify" class="pa-1">  Soy licenciado en Diseño Gráfico, con especialidad en diseño y programación web, tengo experiencia con mas de 6 años trabajando con diferentes lenguajes y herramientas de desarrollo según lo a requerido mis actividades en el trabajo. Soy una persona comprometida, autodidacta y comprometida con el empuje de superarme todos los días mejorando y actualizando mis habilidades.</p>
            </v-col>
              <v-col cols="12" md="6"  class="secondary--text">

              </v-col>





                  <v-col cols="12" md="6"  class="secondary--text">

              </v-col>
  <v-col cols="12" md="6"  class="secondary--text text-right">
<div class="secondary primary--text text-center " style="border-radius:10px 0px 0px 10px;"><h2>EDUCACIÓN</h2></div>

    <p class="pa-1">

<h3>Universidad alva edisón</h3>
Licenciatura en Diseño Gráfico

<h3>Universidad alva edisón</h3>
Técnico en Sistemas Computacionales

        </p>

              </v-col>
 <v-col cols="12" md="6"  class="secondary--text text-right">
<div class="secondary primary--text text-center " style="border-radius:0px 10px 10px 0px;"><h2>Experiencia</h2></div>

    <p class="pa-1">

<h3>FREELANCE</h3>
<h4>MAR 2020-ACTUAL</h4>
DISEÑO GRÁFICO PROGRAMACIÓN WEB
EDICIÓN DE FOTOGRAFÍA, EDICIÓN DE IMÁGENES, SOPORTE A SITIOS WEB

<h3>JB EMPRESARIAL</h3>
<h4>MAR 2020 - MAR 2020</h4>
DISEÑADOR FRONT END CON VUEJS

<h3>VALVULAS ROS</h3>
<h4>OCT 2018 - OCT 2019</h4>
PROGRAMADOR WEB VUEJS 

<h3>GRUPO COMERCIAL PANASA</h3>
<h4>ENE-2014 ENE-2018</h4>
DISEÑO Y PROGRAMACIÓN WEB 
 CON PHP, MYSQL, JQUERY

<h3>AGUA INMACULADA </h3>
<h4>ENE-2008-ENE-2014</h4>
JEFE DE DISEÑO Y SISTEMAS

        </p>


<div class="secondary primary--text text-left pa-6" style="border-radius:15px; ">

<h2>Lenguage</h2>

    <h4>Inglés</h4>

<v-progress-linear
      color="primary"
      height="10"
      value="60"
      striped
    ></v-progress-linear>

    <h4>Español</h4>

<v-progress-linear
      color="primary"
      height="10"
      value="100"
      striped
    ></v-progress-linear>
<br /><br />

    </div>

              </v-col>

  <v-col cols="12" md="6"  class="secondary primary--text" style="border-radius:10px; ">

      <h2>Skills</h2>

      <v-row>
<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="360"
      :size="110"
      :width="15"
      :value="90"
      color="primary"
    >
       <h6> PHP</h6>
    </v-progress-circular>
</v-col>


<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="360"
      :size="110"
      :width="15"
      :value="85"
      color="primary"
    >
        <h6>JAVASCRIPT</h6>
    </v-progress-circular>
</v-col>



<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="360"
      :size="110"
      :width="15"
      :value="100"
      color="primary"
    >
        <h6>HTML</h6>
    </v-progress-circular>
</v-col>

<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="360"
      :size="110"
      :width="15"
      :value="75"
      color="primary"
    >
        <h6>MYSQL</h6>
    </v-progress-circular>
</v-col>

<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="360"
      :size="110"
      :width="15"
      :value="75"
      color="primary"
    >
        <h6>CSS</h6>
    </v-progress-circular>
</v-col>


<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="360"
      :size="110"
      :width="15"
      :value="90"
      color="primary"
    >
        <h6>VUEJS</h6>
    </v-progress-circular>
</v-col>


<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="90"
      :size="110"
      :width="15"
      :value="50"
      color="primary"
    >
        <h6>REACTJS</h6>
    </v-progress-circular>
</v-col>


<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="90"
      :size="110"
      :width="15"
      :value="50"
      color="primary"
    >
        <h6>MONGODB</h6>
    </v-progress-circular>
</v-col>

<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="90"
      :size="110"
      :width="15"
      :value="70"
      color="primary"
    >
        <h6>FIREBASE</h6>
    </v-progress-circular>
</v-col>


<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="90"
      :size="110"
      :width="15"
      :value="70"
      color="primary"
    >
        <h6>AWS</h6>
    </v-progress-circular>
</v-col>


<v-col cols="12" md="4" class="text-center">
<v-progress-circular
      :rotate="90"
      :size="110"
      :width="15"
      :value="50"
      color="primary"
    >
        <h6>GO</h6>
    </v-progress-circular>
</v-col>
      </v-row>

              </v-col>


   <v-col cols="12" md="12">
       
       </v-col>           
<v-col cols="12" md="12">
       <div class="secondary primary--text text-center " style="border-radius:0px 10px 10px 0px;"><h2>CERTIFICADOS</h2></div>

<v-row>
 <v-col
      v-for="n in 4"
      :key="n"
      class="d-flex child-flex"
      cols="12" md="6"
    >
      <v-img
        :src="`./img/certificado/certificados${n}.jpg`"
        :lazy-src="`./img/certificado/certificados${n}.jpg`"
        aspect-ratio="1"
        class="grey lighten-2"
      >
        <template v-slot:placeholder>
          <v-row
            class="fill-height ma-0"
            align="center"
            justify="center"
          >
            <v-progress-circular
              indeterminate
              color="grey lighten-5"
            ></v-progress-circular>
          </v-row>
        </template>
      </v-img>
    </v-col>

</v-row>


</v-col>

  <v-col cols="12" md="12">
       <div class="secondary primary--text text-center " style="border-radius:0px 10px 10px 0px;"><h2>Sitios Desarrollados</h2></div>
    <v-data-table :headers="cabsitio" :items="sitiosar"   hide-default-footer  disable-pagination>
        <template v-slot:item.visitar='{ item }'>
            <a :href="item.enlace" target="_blank">Visitar</a>
            </template>
    </v-data-table>

       </v-col>           
    <v-col cols="12" md="12">
        <div class="secondary primary--text text-center " style="border-radius:0px 10px 10px 0px;">
        <h2>Galería Diseños Realizados</h2>
        </div>
             <v-row>
                 
    <v-col
      v-for="n in 12"
      :key="n"
      class="d-flex child-flex"
      cols="4"
    >
      <v-img
        :src="`./img/galeria/img${n}.jpg`"
        :lazy-src="`./img/galeria/img${n}.jpg`"
        aspect-ratio="1"
        class="grey lighten-2"
      >
        <template v-slot:placeholder>
          <v-row
            class="fill-height ma-0"
            align="center"
            justify="center"
          >
            <v-progress-circular
              indeterminate
              color="grey lighten-5"
            ></v-progress-circular>
          </v-row>
        </template>
      </v-img>
    </v-col>
  </v-row>


        </v-col>
    <v-col cols="12" >
         <div class="secondary primary--text text-center " style="border-radius:0px 10px 10px 0px;">
        <h2>Aplicaciones Desarrolladas</h2>
        </div>

    <v-row>
        <v-col cols="12" md="2" class="secondary--text">

            <a href="./download/obsoletos.apk"><img src="./img/icon/obsoletos.png" width="100%"  /></a>
            APK Obsoletos

        </v-col>
    </v-row>


    </v-col>
            </v-row>
        </v-container>
    
    </v-main>
</template>
<style scoped>

h1, h2, h3 {
   font-family: 'Archivo Black', sans-serif;
}
a {
    font-size: 18px;
}
/* Las animaciones de entrada y salida pueden usar */
/* funciones de espera y duración diferentes.      */
.slide-fade-enter-active {
  transition: all .8s ease;
}
.slide-fade-leave-active {
  transition: all .25s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
</style>
<script>
module.exports={
    data(){
        return {
            show:false,
            cabsitio:[
                {
                    text:"Sitio",
                    value:"sitio",
                    
                },
                {
                    text:"Url",
                    value:"enlace"
                },
                {
                    text:"Desarrolllo",
                    value:"leng"
                },
                {
                    text:"Visitar",
                    value:"visitar"
                }
            ],
            sitiosar:[
                 {
                    sitio:"Planeta preescolar",
                    enlace:"https://planetapreescolar.com",  
                    leng:"VUEJS"     
                },    
                    {
                    sitio:"Auto Seguros LDG",
                    enlace:"https://autosegurosldg.web.app/",  
                    leng:"VUEJS"     
                }, 
                
                 {
                    sitio:"Vanderbilt",
                    enlace:"https://vanderbilt.edu.mx",  
                    leng:"wordpress"     
                },   
                 {
                    sitio:"Vanderbilt Comunidad",
                    enlace:"https://vanderbilt.edu.mx/comunidad",  
                    leng:"VUEJS y Codeigniter"     
                },   
                {
                    sitio:"Obsoletos",
                    enlace:"https://obsoletos.com.mx",  
                    leng:"PHP y VUEJS"     
                },
                 {
                    sitio:"mind-publicidad",
                    enlace:"http://mind-publicidad.com/"  ,  
                    leng:"wordpress y VUEJS"   
                },
                {
                    sitio:"algiocontrol",
                    enlace:"http://algiocontrol.ml/",  
                    leng:"wordpress"   
                },
                {
                    sitio:"barbershopmasterclass",
                    enlace:"http://barbershopmasterclass.ml/",  
                    leng:"wordpress"     
                },
                {
                    sitio:"mejorproducto",
                    enlace:"http://mejorproducto.ml/" ,  
                    leng:"wordpress"    
                },
                 {
                    sitio:"neurociencia",
                    enlace:"http://neurociencia.ml/"  ,  
                    leng:"wordpress"   
                },
                {
                    sitio:"ortopedistapuebla.ml",
                    enlace:"http://ortopedistapuebla.ml/" ,  
                    leng:"wordpress"    
                },
                {
                    sitio:"tienda colegiodiscovery",
                    enlace:"https://colegiodiscovery.edu.mx/tienda/",  
                    leng:"wordpress"     
                }
               
            ]
        }
    },
    mounted(){
        setTimeout(()=>{
            this.show=true
        },1500)
    }
}
</script>
