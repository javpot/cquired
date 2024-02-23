<script setup>
import { ref, onMounted } from "vue";

const csvData = ref([]);

onMounted(async () => {
    const response = await fetch("/world-cities.csv");
    const csvText = await response.text();

    const rows = csvText.split("\n");
    const headers = rows[0].split(",");

    const data = rows.slice(1).map((row, rowIndex) => {
        const columns = row.split(",");
        const rowData = {};

        headers.forEach((header, columnIndex) => {
            if (columns.length > columnIndex) {
                rowData[header.trim()] = columns[columnIndex].trim();
            } else {
                rowData[header.trim()] = "";
            }
        });

        rowData.id = rowIndex + 1;
        return rowData;
    });

    csvData.value = data;
    console.log(csvData.value);
});
</script>

<template>
    <div class="w-screen h-90 flex flex-col justify-center items-center">
        <div class="h-90 w-3/5 bg-white flex flex-col shadow-md">
            <div class="h-8 bg-sky-300 w-4/5 relative z-20"></div>
            <div class="h-8 bg-stone-300 w-full relative z-10 bottom-7"></div>
            <h2 class="text-3xl text-center">Je me trouve à</h2>
            <div class="h-90 w-full flex flex-col justify-evenly items-center">
                <div>
                    <input type="text" />
                    <p class="text-base">
                        *Entrez simplement le nom de votre ville, cela nous
                        aidera à vous montrer les agences et les indépendants en
                        fonction de leur proximité.
                    </p>
                </div>

                <button class="h-12 w-1/2 bg-sky-300 text-center rounded-xl">
                    Continue
                </button>
            </div>
            <ul>
                <li v-for="row in csvData" :key="row.id">
                    {{ row.name }}, {{ row.subcountry }}, {{ row.country }}
                </li>
            </ul>
        </div>
    </div>
</template>
