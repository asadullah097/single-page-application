<template>
  <v-container>
       <v-form
    ref="form"
  @submit.prevent="login"
    lazy-validation
  >
    <v-text-field
      v-model="form.email"
     type="email"
      label="E-mail"
      required
    ></v-text-field>

    <v-text-field
      v-model="form.password"
      label="Password"
      type="password"
      required
    ></v-text-field>
    <v-btn
      color="success"
      class="mr-4"
      type="submit"
     
    >
      Login
    </v-btn>

      <router-link to="/signup"> <v-btn color="blue">Sign up</v-btn></router-link>
  </v-form>
  </v-container>
</template>
<script>
export default {
    data(){
        return {
            form:{
                email:null,
                password:null
            }
        }
    },
    methods:{
        login(){
         User.login(this.form)
          this.$router.push({name:'forum'})
        }
    }
}
</script>