<template>
    <v-card style="position:fixed; z-index:99999999999; width:100%; border-radius:0;" elevation="0" dark color="#0b0b0c" class="cv-header">
        <v-card-title class="py-3">
            <v-btn to="/" text dark class="px-0"><span class="cv-header-brand">LDG<span class="cv-header-dot">.</span></span></v-btn>
            <v-spacer></v-spacer>
            <v-btn outlined dark color="#FF6B00" class="cv-header-menu" @click="openmenu(true)"><v-icon>mdi-menu</v-icon></v-btn>
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
    methods: {
        openmenu(p) {
            this.$emit('menuaction', p)
        }
    }
}
</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');
.cv-header-brand {
    font-family: 'Archivo Black', sans-serif;
    font-size: 1.25rem;
    letter-spacing: 1px;
}
.cv-header-dot { color: #FF6B00; }
.cv-header { border-bottom: 1px solid rgba(255,255,255,.08); }
.cv-header-menu { text-transform: none; border-radius: 6px; }
</style>