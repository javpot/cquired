<script setup>
import PostCard from "@/Components/PostCard.vue";
import SegmentedControl from "@/Components/SegmentedControl.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>

<template>
    <AuthenticatedLayout>
        <section
            class="flex flex-col w-full h-full z-50 relative items-center bg-white"
        >
            <img
                class="flex w-full h-96 z-40 absolute"
                src="../../assets/entrepriseImgAccueil.png"
                alt=""
            />
            <img
                class="w-40 h-40 z-50 border-8 border-white rounded-full bg-white relative top-80 self-center"
                src="../../assets/pfp-icon.png"
                alt=""
            />
            <div class="flex flex-col w-full z-50 top-80 relative items-center">
                <div class="flex flex-col my-4 space-y-4">
                    <h2 class="text-3xl text-center">Zafer Acar</h2>
                    <div class="flex flex-row space-x-6">
                        <h3 class="">20 yo</h3>
                        <!-- <h3 class="flex text-lg">.</h3> -->
                        <h3 class="">Montreal, Qc</h3>
                    </div>
                </div>
                <div class="flex flex-row">
                    <ul class="flex flex-row space-x-6">
                        <li class="felx flex-col">
                            <h2 class="text-center text-xl">43</h2>
                            <h2 class="uppercase">Posts</h2>
                        </li>
                        <li class="felx flex-col">
                            <h2 class="text-center text-xl">212</h2>
                            <h2 class="uppercase">Followers</h2>
                        </li>
                        <li class="felx flex-col">
                            <h2 class="text-center text-xl">4</h2>
                            <h2 class="uppercase">Photos</h2>
                        </li>
                    </ul>
                </div>
                <SegmentedControl />
            </div>
            <div class="flex flex-col w-1/2 z-50 top-80 relative">
                <h2 class="text-xl py-4">Recent Posts</h2>
                <PostCard />
                <PostCard />
                <PostCard />
            </div>
        </section>
    </AuthenticatedLayout>
</template>
<!-- ../../assets/pfp-icon.png -->
<!-- ../../assets/entrepriseImgAccueil.png -->
