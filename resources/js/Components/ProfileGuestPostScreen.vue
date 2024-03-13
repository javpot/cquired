<script setup>
import PostCard from "@/Components/PostCard.vue";
import { Link } from "@inertiajs/vue3";
import ComposeMessage from "@/Components/ComposeMessage.vue";

defineProps({
    clientposts: Array,
    clientdata: Array,
});
</script>

<template>
    <div class="flex flex-col w-1/2 mt-8">
        <h2 class="text-xl py-4">Recent Posts</h2>
        <div class="text-center my-4">
            <hr calss="my-2" />
        </div>

        <PostCard
            v-if="clientposts && clientposts.length > 0"
            v-for="post in clientposts"
            :key="post.id"
            :postdata="post"
            :clientdata="clientdata"
        />
        <p v-else class="text-gray-600 text-center my-12">
            {{ clientdata.name }} has not made a post yet.
        </p>
    </div>
</template>
