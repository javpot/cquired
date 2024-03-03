<script setup>
import { Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";
import PrimaryButton from "@/Components/PrimaryButton.vue";

let visitBilling = () => {
    try {
        Inertia.visit(route("billing"));
    } catch (error) {
        console.error(error);
    }
};
</script>
<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Subscription</h2>

            <p class="mt-1 mb-4 text-sm text-gray-600">
                Consult the billing for your subscription.
            </p>
        </header>

        <PrimaryButton @click="visitBilling">View</PrimaryButton>
    </section>
</template>
