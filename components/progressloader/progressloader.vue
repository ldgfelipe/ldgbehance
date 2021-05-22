<template>
    


    <v-progress-circular
        :rotate="rotate"
        :size="size"
        :width="width"
        :color="color"
        :value="value"
    >
        <h6 v-if="showtitulo===true"> {{titulo}}</h6>
    </v-progress-circular>


</template>
<style scoped>

</style>
<script>

module.exports={
   data(){
       return {
       interval:{},
       value:0,
       showtitulo:false,
       timerand:[1000,500,600,1700],
       velselect:1000
       }
   },
   mounted(){
       this.loadMounted()
   },
   methods:{
       loadMounted(){
         setTimeout(()=>{
     this.velselect=Math.floor(Math.random()*3)
               if(this.value<=this.valor){
               this.value=this.value + 10
               this.loadMounted()
               }else{
                   this.showtitulo=true
               }
           },this.timerand[this.velselect])
       }
   },
   props:{
   valor:{
       type:Number,
       default:()=>{
           return 0
       }
   },
   titulo:"",
   rotate:{
       type:Number,
       default:()=>{return 360}
   },
   size:{
       type:Number,
       default:()=>{return 110}
   },
   width:{
       type:Number,
       default:()=>{return 15}
   },
   color:"primary"
   }
}
</script>
