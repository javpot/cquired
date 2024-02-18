<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
</script>

<template>
    <div class="ms-3 relative">
        <Dropdown align="right" width="48">
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-3 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                    >
                        <img
                            class="w-6 h-6 right-0 ml-8 mt-1 cursor-pointer"
                            src="../../assets/filter-icon.png"
                            alt="filter"
                        />
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
            <template #content class="flex flex-col p-4 ml-4">
                <DropdownLink :href="route('dashboard')">Filter 1</DropdownLink>
                <DropdownLink :href="route('dashboard')">Filter 1</DropdownLink>
                <DropdownLink :href="route('dashboard')">Filter 1</DropdownLink>
                <DropdownLink :href="route('dashboard')">Filter 1</DropdownLink>
                <DropdownLink :href="route('dashboard')">Filter 1</DropdownLink>
            </template>
        </Dropdown>
    </div>
</template>
