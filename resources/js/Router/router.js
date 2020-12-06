import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from '../components/login/Login';
import Sigup from '../components/login/Signup';
import Forum from '../components/forum/Forum';
const routes = [
    {path: '/login', component: Login },
    {path: '/signup', component: Sigup },
    {path: '/forum', component: Forum },
  
  ]

  const router = new VueRouter({
    routes ,
    hashbang:false,
    mode:'history'
  });

  export default router