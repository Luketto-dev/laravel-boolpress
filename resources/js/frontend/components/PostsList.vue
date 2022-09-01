<template>
    
    <div>
      <div class="row ">
        <!-- creiamo una col solo per limitare la larghezza di una singola card -->
        <div class="col-6 mb-3" v-for="post in posts" :key="post.id">
          <!-- contenitore dei singoli post -->
          <div id="posts-container">
            <div class="card card-post">
              <div class="card-body">
                <div class="post_header">
                  <div class="post-meta">
                    <div class="post_title">
                      <h3>{{post.title}}</h3>
                    </div>
                    <div class="post_image">
                        <img :src="post.cover_img" alt="Cover image of post 1">
                    </div>
                  </div>
                </div>
                <div class="post_text">
                  <p v-html="post.content + '...'"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Pagination :current-page="paginationData.current_page"
        :next-page="paginationData.current_page + 1"
        :total-pages="paginationData.last_page"
        @changePage="onChangePage"
        ></Pagination>
    </div>
</template>

<script>
import axios from "axios"
import Pagination from "./Pagination.vue"
export default {
    components : {Pagination},
    data(){
        return{
            posts: [],
            paginationData : {},
        }
    },
    methods: {
      fetchPosts(newPage = 1){
        axios.get("/api/posts?page=" + newPage)
        .then((resp) =>{
          this.posts = resp.data.data;
          this.paginationData = resp.data
        })
      },
      onChangePage(newPage){
        this.fetchPosts(newPage)
      }
    },
    mounted(){
      this.fetchPosts();
    }
}
</script>

<style>

</style>