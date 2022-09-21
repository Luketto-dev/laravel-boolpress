<template>
    <div class="pb-3">
        <h1>Post # {{post.id}}</h1>
        <div class="card mb-3 w-50">
            <img :src="post.cover_img" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{post.title}}</h5>
                <p class="card-text">{{post.content}}</p>
                <p class="card-text"><small class="text-muted">{{post.created_at}}</small></p>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            post:{}
        }
    },
    mounted(){
        console.log(this.$route)
        axios.get("/api/posts/" + this.$route.params.post_slug)
        .then((resp) =>{
            const data = resp.data;
            this.post = data;
        })
    }
}
</script>

<style>

</style>