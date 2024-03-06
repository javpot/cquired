<script setup>
import { inject } from "vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { ref } from "vue";
import { onMounted } from "vue";
import { usePage } from "@inertiajs/vue3";

// Utilisez inject pour récupérer des propriétés fournies par un ancêtre
const domains = inject("domains");
const user = usePage().props.auth.user;
const category = user.category;
const userData = ref("");
const selectedDomain = ref("");

onMounted(() => {
    if (category === "Client") {
        userData.value = usePage().props.auth.client;
    } else {
        userData.value = usePage().props.auth.agency;
    }
    selectedDomain.value = userData.domain;
});
</script>

<template>
    <Dropdown width="48" align="left">
        <template #trigger>
            <span class="inline-flex rounded-md">
                <button
                    type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                >
                    <h2
                        class="w-full font-semibold text-xl text-gray-800 leading-tight align-middle left-0"
                    >
                        Web development
                    </h2>

                    <svg
                        class="ms-2 -me-0.5 h-4 w-4"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </button>
            </span>
        </template>

        <template #content>
            <DropdownLink v-for="(service, index) in domains" :key="index">
                {{ service }}
            </DropdownLink>
        </template>
    </Dropdown>

    <!-- <div class="">
        <select
            name="domain"
            id="domain"
            v-model="selectedDomain"
            class="w-80 p-2 rounded-md focus:outline-none ease-in-out"
        >
            <option v-for="domain in domains" :key="domain" :value="domain">
                {{ domain }}
            </option>
        </select>
    </div> -->
</template>
