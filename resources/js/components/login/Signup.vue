<template>
  <v-container>
       <v-form
    ref="form"
  @submit.prevent="signup"
    lazy-validation
  >
    <v-text-field
      v-model="form.name"
     type="text"
      label="Name"
      required
    ></v-text-field>
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
     <v-text-field
      v-model="form.password_confirmation"
      label="Password"
      type="password"
      required
    ></v-text-field>
    <v-btn
      color="blue"
      class="mr-4"
      type="submit"
     
    >
      Signup
    </v-btn>
  <router-link to="/login"> <v-btn  color="success">Login up</v-btn></router-link>
   
  </v-form>
  </v-container>
</template>
<script>
export default {
    data(){
        return {
            form:{
                name:null,
                email:null,
                password:null,
                password_confirmation:null
            }
        }
    },
    methods:{
        signup(){
       axios.post('/api/auth/signup',this.form)
       .then(res=>{
         User.responseAfterLogin(res)
         this.$router.push({name:'forum'})
       })
       .catch(error =>console.log(error.response.data))
        }
    }
}
</script>