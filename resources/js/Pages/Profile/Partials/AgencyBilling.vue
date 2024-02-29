<script setup>
import { Link } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>
<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Subscription</h2>

            <p class="mt-1 mb-4 text-sm text-gray-600">
                Consult the billing for your subscription.
            </p>
        </header>
        <Link :href="route('billing')"
            ><PrimaryButton>View</PrimaryButton></Link
        >
    </section>
</template>
