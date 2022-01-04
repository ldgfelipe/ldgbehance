<template>
   <footer class="secondary primary--text">
       <h1>ldgframe {{year}}</h1>
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

