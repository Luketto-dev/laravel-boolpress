<template>
    <div>
    <h1>Home-page</h1>
    <main class="container py-4">
        <h3 class="text-center">Lista Post</h3>
        <PostsList></PostsList>
    </main>
    </div>
</template>

<script>
import PostsList from "../frontend/components/PostsList.vue";
export default {
    components: {PostsList}
}
</script>

<style>

</style>