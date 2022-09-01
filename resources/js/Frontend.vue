<template>
    <div>  
        <Navbar></Navbar>
        <div class="container pt-2">
            <router-view></router-view>
        </div>
        
    </div>     
</template>

<script>
import Navbar from "./frontend/components/Navbar.vue";

export default {
    components: { Navbar, },
    data() {
        return {
            message: "Hello Vuejs"
        };
    },
}
</script>

<style>

</style>