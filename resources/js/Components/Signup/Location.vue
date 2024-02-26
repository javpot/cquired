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
    <div class="w-screen h-90 flex flex-col justify-center items-center">
        <div class="h-90 w-3/5 bg-white flex flex-col shadow-md">
            <div class="h-8 bg-sky-300 w-4/5 relative z-20"></div>
            <div class="h-8 bg-stone-300 w-full relative z-10 bottom-7"></div>
            <h2 class="text-3xl text-center">Je me trouve à</h2>
            <div class="h-90 w-full flex flex-col justify-evenly items-center">
                <div>
                    <select name="rows" id="subcountrySelection">
                        <option v-for="row in csvData" :key="row.id">
                            {{ row.country }},
                            {{ row.subcountry }}
                        </option>
                    </select>
                </div>

                <button
                    class="h-12 w-1/2 bg-sky-300 text-center rounded-xl"
                    @click="handleLocationSelection()"
                >
                    Continue
                </button>
            </div>
        </div>
    </div>
</template>
