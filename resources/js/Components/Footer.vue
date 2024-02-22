<script setup>
import ApplicationLogo from "./ApplicationLogo.vue";
</script>

<template>
    <section class="bg-black text-white">
        <table>
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1, Cell 1</td>
                    <td>Row 1, Cell 2</td>
                    <td>Row 1, Cell 3</td>
                </tr>
                <tr class="bg-white text-black">
                    <td>Row 2, Cell 1</td>
                    <td>Row 2, Cell 2</td>
                    <td>
                        <ApplicationLogo
                            class="block h-9 w-auto fill-current text-gray-800"
                        />
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </section>
</template>
