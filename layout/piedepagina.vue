<template>
   <footer class="cv-footer">
    <v-container>
      <v-row align="center">
        <v-col cols="12" md="6">
            <span class="cv-footer-brand">LDG<span class="cv-footer-dot">.</span> — {{year}}</span>
        </v-col>
        <v-col cols="12" md="6" class="text-md-right">
            <a href="#/avisodeprivacidad" class="cv-footer-link">Aviso de privacidad</a>
        </v-col>
      </v-row>
    </v-container>
</footer>
</template>
<script>
module.exports={
    data(){
        return  {
            year:0
        }
    },
    created(){
        this.fecha()
    },
    methods:{
        fecha(){
            var an=new Date().getFullYear()
                this.year=an
        }
    }
}
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');
.cv-footer {
  background: #0b0b0c;
  color: #9c9ca2;
  padding: 34px 0;
  border-top: 1px solid rgba(255,255,255,.08);
  font-size: .88rem;
}
.cv-footer-brand { font-family: 'Archivo Black', sans-serif; color: #fff; letter-spacing: 1px; }
.cv-footer-dot { color: #FF6B00; }
.cv-footer-link { color: #9c9ca2; text-decoration: none; border-bottom: 1px solid rgba(255,107,0,.4); }
.cv-footer-link:hover { color: #fff; border-color: #FF6B00; }
</style>