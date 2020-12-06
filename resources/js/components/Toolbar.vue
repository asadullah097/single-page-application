<template>
    <v-toolbar color="indigo" dark>
        <!-- <v-toolbar-side-icon></v-toolbar-side-icon> -->
        <v-toolbar-title>
            Title
        </v-toolbar-title>
        <v-spacer></v-spacer>

        <div class="hidden-sm-and-down">
              <router-link to="/forum">   <v-btn text>Fourm </v-btn></router-link>
          
            <v-btn text>Ask Question</v-btn>
            <v-btn text>Category</v-btn>
            
            <router-link to="/login"> <v-btn text>Login</v-btn></router-link>
        </div>
    </v-toolbar>
</template>
<script>
    export default {

    }

</script>

<style scoped>

</style>
