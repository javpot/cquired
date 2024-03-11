<script setup>
defineProps({
    agencydata: Array,
});
</script>
<template>
    <div class="flex flex-col rounded-lg w-2/3 h-72 justify-end">
        <img
            class="flex w-2/3 h-48 rounded-t-lg absolute z-40 top-20"
            :src="agencydata.banner"
            alt=""
        />
        <img
            class="w-32 h-32 z-50 ml-4 relative border-4 border-white bg-white rounded-full top-8"
            :src="agencydata.picture"
            alt=""
        />
        <div
            class="w-full flex flex-row justify-between items-center ml-4 mt-4"
        >
            <span class="flex flex-row items-center">
                <h2 class="text-3xl mt-4">{{ agencydata.name }}</h2>
                <!-- <img
                    class="w-6 h-6p mx-2 my-4"
                    src="../../assets/checkmarkblue.png"
                    alt=""
                /> -->
            </span>
            <span class="flex flex-row items-center">
                <button
                    class="mr-2 bg-gray-200 border-2 border-gray-200 text-black rounded-2xl px-4 py-1 hover:bg-gray-300 hover:text-black transition"
                >
                    Message
                </button>
                <button
                    class="mr-4 border-2 border-gray-300 rounded-2xl px-4 py-1 hover:bg-gray-300 hover:border-gray-200 transition"
                >
                    Favourite
                </button>
            </span>
        </div>
        <p class="text-lg ml-4 my-2 text-gray-500">{{ agencydata.category }}</p>
    </div>
</template>
