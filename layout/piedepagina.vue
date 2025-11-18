<template>
   <footer class="secondary primary--text pa-10">
    <v-row>
        <v-col cols="12" md="6">
<h1>Copyright <img src="img/logazul.png" style="width:100%; max-width:155px;"   /> - {{year}}</h1>
      
        </v-col>
         <v-col cols="12" md="6">
            <v-list style="background-color: none;">
                <v-list-item to="/avisodeprivacidad">
                    Aviso de privacidad
                </v-list-item>
                 
            </v-list>

         </v-col>
    </v-row>  
    
      
      
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

