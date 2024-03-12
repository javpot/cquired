<script setup>
import { defineProps, ref } from "vue";

const props = defineProps({
    postdata: Object,
    clientdata: Object,
});

const data = ref(null);

const loadData = async () => {
    if (props.clientdata) {
        data.value = await props.clientdata;
    }
};

loadData();
</script>

<template>
    <div v-if="data" class="bg-gray-100 rounded-lg p-4 my-4">
        <div class="flex flex-row items-center">
            <img class="w-12 h-12 rounded-full" :src="data.picture" alt="" />
            <div class="flex flex-col ml-4">
                <h2>{{ data.name }}</h2>
                <h2 class="text-sm">{{ postdata.domain }}</h2>
                <h2 class="text-xs">
                    {{
                        new Date(postdata.created_at)
                            .toISOString()
                            .split("T")[0]
                    }}
                </h2>
            </div>
        </div>
        <h2 class="my-4">{{ postdata.titre }}</h2>
        <p class="text-sm">{{ postdata.description }}</p>
    </div>
    <div v-else>Loading...</div>
</template>
