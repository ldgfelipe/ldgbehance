<template>
    <v-progress-circular
        :rotate="rotate"
        :size="size"
        :width="width"
        :color="color"
        :value="value"
        v-scroll="scrollposition"
    >
        <h6 v-if="showtitulo===true"> {{titulo}}</h6>
    </v-progress-circular>
</template>
<script>
module.exports={
   data(){
       return {
       interval:{},
       value:0,
       showtitulo:false,
       timerand:[1000,500,600,1700],
       velselect:1000,
       initEvent:false
       }
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
   rotate:{
       type:Number,
       default:()=>{return 360}
   },
   size:{
       type:Number,
       default:()=>{return 140}
   },
   width:{
       type:Number,
       default:()=>{return 22}
   },
   color:"primary"
   }
}
</script>
