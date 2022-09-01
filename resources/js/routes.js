import VueRouter from "vue-router"
import Home from "./pages/home.vue"
import Contacts from "./pages/contacts.vue"

// esporto direttamente l array delle rotte
export const routes = [
    {path: "/" , component:Home, name: "home"},
    {path: "/contatti" , component:Contacts, name: "contacts"}
]
