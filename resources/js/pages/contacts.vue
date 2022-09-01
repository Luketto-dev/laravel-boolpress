<template>
    <div>
    <h1>Pagina contatti</h1>
    <form action="" @submit.prevent="onFormSubmit()">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" v-model="name">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Scrivici un Messagio</label>
        <textarea type="" class="form-control" id="message" v-model="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return{
            name: "",
            message: ""
        }
    },
    methods: {
        onFormSubmit(){
            axios.post("/api/contacts", {
                name : this.name,
                message : this.message
            })
        }
    }
}
</script>

<style>

</style>