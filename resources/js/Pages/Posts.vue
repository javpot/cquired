<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PostCard from "@/Components/PostCard.vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import ComposeMessage from "@/Components/ComposeMessage.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <AuthenticatedLayout class="bg-white">
        <section class="w-full flex flex-col items-center">
            <div class="w-2/5 flex flex-row justify-between mt-4">
                <h2 class="text-3xl">Posts</h2>
                <FilterIcon />
            </div>
            <div class="w-full flex flex-col mx-4 my-4 items-center">
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
                <PostCard class="max-w-xl" />
            </div>

            <Link :href="route('post')">
                <div
                    class="fixed bottom-4 right-4 flex items-center bg-gray-200 rounded-full justify-center hover:bg-gray-300 hover:scale-110 transition cursor-pointer"
                >
                    <p class="ml-4 mr-2 text-lg text-gray-700">Write a Post</p>
                    <ComposeMessage
                        class="w-16 h-16 bg-gray-300 rounded-full transform hover:scale-100 transition-transform"
                    ></ComposeMessage>
                </div>
            </Link>
        </section>
    </AuthenticatedLayout>
</template>
