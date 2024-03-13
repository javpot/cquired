<script setup>
import { usePage } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

const props = defineProps({
    agencydata: Array,
});

const savedAgencies = ref([]);
const saveButton = ref("");

onMounted(() => {
    savedAgencies.value = props.agencydata.saved;
    let isSaved = savedAgencies.value.saved.includes(`${props.agencydata.id}`);
    changeButton(isSaved);
    console.log(isSaved);
});

async function save() {
    let isSaved = savedAgencies.value.saved.includes(`${props.agencydata.id}`);
    console.log(isSaved);
    // isSaved
    //     ? (savedAgencies.value.saved = savedAgencies.value.saved.filter((c) => {
    //           c.id !== `${client.id}`;
    //       }))
    //     : savedAgencies.value.saved.push(client.id);
    if (isSaved) {
        savedAgencies.value.saved = savedAgencies.value.saved.filter((a) => {
            a.id !== `${props.agencydata.id}`;
        });
        await axios.delete(`/saveAgency/${props.agencydata.id}`);
    } else {
        savedAgencies.value.saved.push(`${props.agencydata.id}`);
        await axios.post(`/saveAgency/${props.agencydata.id}`);
    }
    // console.log(isSaved);
    // console.log(savedAgencies.value.saved);
    changeButton(!isSaved);
}

function changeButton(isSaved) {
    if (isSaved) {
        saveButton.value = "Saved";
    } else {
        saveButton.value = "Save";
    }
}
</script>
<template>
    <div class="flex flex-col rounded-lg w-2/3 h-72 justify-end">
        <img
            class="flex w-2/3 h-48 rounded-t-lg absolute z-40 top-20"
            :src="props.agencydata.banner"
            alt=""
        />
        <img
            class="w-32 h-32 z-50 ml-4 relative border-4 border-white bg-white rounded-full top-8"
            :src="props.agencydata.picture"
            alt=""
        />
        <div
            class="w-full flex flex-row justify-between items-center ml-4 mt-4"
        >
            <span class="flex flex-row items-center">
                <h2 class="text-3xl mt-4">{{ props.agencydata.name }}</h2>
                <!-- <img
                    class="w-6 h-6p mx-2 my-4"
                    src="../../assets/checkmarkblue.png"
                    alt=""
                /> -->
            </span>
            <span
                v-if="!$page.props.auth.agency"
                class="flex flex-row items-center"
            >
                <button
                    class="mr-2 bg-gray-200 border-2 border-gray-200 text-black rounded-2xl px-4 py-1 hover:bg-gray-300 hover:text-black transition"
                >
                    Message
                </button>
                <input
                    type="button"
                    @click="save"
                    id="favourite"
                    v-model="saveButton"
                    class="mr-4 border-2 border-gray-300 rounded-2xl px-4 py-1 hover:bg-gray-300 hover:border-gray-200 transition"
                />
            </span>
        </div>
        <p class="text-lg ml-4 my-2 text-gray-500">
            {{ props.agencydata.category }}
        </p>
    </div>
</template>
