<script setup>
defineProps({
    postdata: Array,
    clientdata: Array,
});
</script>
<template>
    <div class="bg-gray-100 rounded-lg p-4 my-4">
        <div class="flex flex-row items-center">
            <img
                class="w-12 h-12 rounded-full"
                :src="clientdata.picture"
                alt=""
            />
            <div class="flex flex-col ml-4">
                <h2>{{ clientdata.name }}</h2>
                <!-- <span class="flex flex-row space-x-2"> -->
                <h2 class="text-sm">{{ postdata.domain }}</h2>
                <h2 class="text-xs">
                    {{
                        new Date(postdata.created_at)
                            .toISOString()
                            .split("T")[0]
                    }}
                </h2>
                <!-- </span> -->
            </div>
        </div>
        <h2 class="my-4">{{ postdata.titre }}</h2>
        <p class="text-sm">
            {{ postdata.description }}
        </p>
    </div>
</template>
