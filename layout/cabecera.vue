<template>
    <v-card style="position:fixed; z-index:99999999999; width:100%;">
        <v-card-title class="primary white--text" >
      <v-btn to="/" class="primary" ><img src="img/logomenu.png" style="width:100%; max-width:155px;" />  </v-btn>     <v-spacer></v-spacer>
            <v-btn class="secondary primary--text" @click="openmenu(true)"><v-icon>mdi-menu</v-icon></v-btn>

           
        </v-card-title>
    </v-card>
</template>
<script>
module.exports = {
    data() {
        return {
            titulo: "LDGFRAME",
            menugrall: false
        }
    },
    methods:{
        openmenu(p){
            console.log(p)
            this.$emit('menuaction',p)
        }
    }
}

</script>
