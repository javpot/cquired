<script setup>
import { ref, onMounted } from "vue";
import InputError from "@/Components/InputError.vue";
const { submit } = defineProps(["submit"]);

const handleLocationSelection = () => {
    try {
        // var e = document.getElementById("subcountriesList");
        // var text = e.options[e.selectedIndex].text;
        var text = searchInput.value;

        if (
            csvData.value.find(
                (row) =>
                    `${row.country}, ${row.subcountry}, ${row.name}` === text
            )
        ) {
            submit(text, "Location");
            errorMessage.value = "";
            status.value = true;
        } else {
            status.value = false;
            errorMessage.value = "Please choose a Location from the list";
        }
    } catch (error) {
        console.error("Error submitting location choice:", error);
    }
};

const csvData = ref([]);
const searchInput = ref(""); // pour la barre de search
const status = ref(false);
const errorMessage = ref("");

const scalingDivRef = ref(null);

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

        // if (uniqueSubcountries.has(rowData.subcountry)) {
        //     return null;
        // }

        // uniqueSubcountries.add(rowData.subcountry);
        rowData.id = rowIndex + 1;
        return rowData;
    });

    csvData.value = data.filter((row) => row !== null);
    console.log(csvData.value);

    /*
    const scalingDiv = scalingDivRef.value;
    scalingDiv.addEventListener("animationend", () => {
        scalingDiv.classList.remove("animate-scale-0");
    });
    */
});
</script>

<template>
    <div class="h-8 bg-sky-300 w-4/5 absolute z-20 animate-scale-0"></div>
    <div class="h-8 bg-stone-300 w-screen relative z-10"></div>

    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div
            class="w-1/2 h-2/3 bg-white flex flex-col items-center justify-around shadow-md border-2"
        >
            <h2 class="text-3xl text-center font-bold my-10">Location</h2>
            <!-- <div>
                <select name="rows" id="subcountrySelection">
                    <option v-for="row in csvData" :key="row.id">
                        {{ row.country }},
                        {{ row.subcountry }}
                    </option>
                </select>
            </div> -->
            <div>
                <input
                    class="w-80"
                    type="text"
                    id="subcountryInput"
                    list="subcountriesList"
                    v-model="searchInput"
                    placeholder="Type to search..."
                />
                <datalist id="subcountriesList">
                    <option v-for="row in csvData" :key="row.id">
                        {{ row.country }}, {{ row.subcountry }}, {{ row.name }}
                    </option>
                </datalist>
                <InputError :message="errorMessage" />
                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p v-if="status" class="text-sm text-gray-600">Saved.</p>
                </Transition>
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

<style scoped>
/* Custom styles can be added here */
@keyframes scaleAnimation {
    0% {
        transform: scaleX(0);
        transform-origin: left; /* Start the animation from the left */
    }
    100% {
        transform: scaleX(1);
        transform-origin: left; /* End the animation at the right */
    }
}

.animate-scale-0 {
    animation: scaleAnimation 2s forwards; /* Adjust the duration as needed */
}
</style>
