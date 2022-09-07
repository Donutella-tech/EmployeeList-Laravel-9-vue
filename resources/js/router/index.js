import {createRouter,createWebHistory} from 'vue-router';
import showComponent from "../components/list/ShowComponent.vue";
import notFound from "../components/NotFound.vue";
import newEmployee from "../components/list/new.vue"
import edit from "../components/list/edit.vue"
import profileComponent from "../components/profile/ProfileComponent.vue"
import loginComponent from "../components/auth/login.vue"
import  registerComponent from "../components/auth/registration.vue"

const routes=[
    {
    path:'/list',
    component:showComponent
    },
    {
        path:'/:pathMatch(.*)*',
        component: notFound
    },
    {
        path:'/new',
        component: newEmployee
    },
    {
        path:'/list/edit/:id',
        component: edit,
        props:true
    },
    {
        path:'/profile',
        component: profileComponent
    },
    {
      path: '/login',
        component:loginComponent
    },
    {
        path: '/register',
        component:registerComponent
    },


];
const router=createRouter({


    history:createWebHistory(),
   routes,
})

export default router;
