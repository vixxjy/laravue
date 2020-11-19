import Vue from 'vue';
import Router from 'vue-router'
import home from './components/pages/Home'
import users from './components/pages/User'
import tags from './components/pages/Tags'

Vue.use(Router)

const routes = [
    {
        path: '/dashboard',
        component: home
    },
    {
        path: '/tags',
        component: tags
    },
    {
        path: '/users',
        component: users
    }
]

export default new Router({
    mode: 'history',
    routes 
})