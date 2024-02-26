<script setup>
import { ref, onMounted } from "vue";

const { submit } = defineProps(["submit"]);

const handleLocationSelection = () => {
    try {
        var e = document.getElementById("subcountrySelection");
        var text = e.options[e.selectedIndex].text;
        submit(text, "Location");
    } catch (error) {
        console.error("Error submitting location choice:", error);
    }
};

const csvData = ref([]);

onMounted(async () => {
    const response = await fetch("/world-cities.csv");
    const csvText = await response.text();

    const rows = csvText.split("\n");
    const headers = rows[0].split(",");

    const uniqueSubcountries = new Set();

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

        if (uniqueSubcountries.has(rowData.subcountry)) {
            return null;
        }

        uniqueSubcountries.add(rowData.subcountry);
        rowData.id = rowIndex + 1;
        return rowData;
    });

    csvData.value = data.filter((row) => row !== null);
    console.log(csvData.value);
});
</script>

<template>
    <div class="h-8 bg-sky-300 w-4/5 absolute z-20"></div>
    <div class="h-8 bg-stone-300 w-screen relative z-10"></div>

    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div
            class="w-1/2 h-2/3 bg-white flex flex-col items-center justify-around shadow-md border-2"
        >
            <h2 class="text-3xl text-center font-bold my-10">Location</h2>
            <div>
                <select name="rows" id="subcountrySelection">
                    <option v-for="row in csvData" :key="row.id">
                        {{ row.country }},
                        {{ row.subcountry }}
                    </option>
                </select>
            </div>

            <button
                class="h-12 w-44 bg-sky-300 my-10 text-center rounded-xl"
                @click="handleLocationSelection()"
            >
                Continue
            </button>
        </div>
    </div>
</template>
