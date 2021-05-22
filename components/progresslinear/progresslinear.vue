<template>
    <div>
<h4 v-if="showtitulo===true"> {{titulo}}</h4>

    <v-progress-linear
        :height="height"
        :color="color"
        :value="value"
        striped
        v-scroll="scrollposition"
    >
        
    </v-progress-linear>

</div>
</template>
<style scoped>

</style>
<script>

module.exports={
   data(){
       return {
       value:0,
       showtitulo:false,
       timerand:[1000,500,600,1700],
       velselect:1000,
       initEvent:false
       }
   },
   mounted(){
       this.loadMounted()
   },
   methods:{
        scrollposition(evt,el){
       let elpos=el.getBoundingClientRect().top
       let scrollPos=window.scrollY
            if(elpos>=scrollPos){
                this.initEvent=true
            }else{
                this.initEvent=false
            }
       },
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
   watch:{
       initEvent(){
           if(this.initEvent===true){   
               this.loadMounted()
           }
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
   height:{
       type:Number,
       default:()=>{return 10}
   },
   color:"primary"
   }
}
</script>
