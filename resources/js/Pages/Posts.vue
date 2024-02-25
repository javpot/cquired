<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PostCard from "@/Components/PostCard.vue";
import FilterIcon from "@/Components/FilterIcon.vue";
</script>
<template>
    <AuthenticatedLayout class="bg-white">
        <section class="w-full flex flex-col items-center">
            <div class="w-1/3 flex flex-row justify-between mt-4">
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
        </section>
    </AuthenticatedLayout>
</template>
