import VueRouter from "vue-router"
import Home from "./pages/home.vue"
import Contacts from "./pages/contacts.vue"
import PostShow from "./pages/posts/Postshow.vue"

// esporto direttamente l array delle rotte
export const routes = [
    {path: "/" , component:Home, name: "home"},
    {path: "/contatti" , component:Contacts, name: "contacts"},
    {path: "/posts/:post_slug", component: PostShow, name: "posts.show"}
]
