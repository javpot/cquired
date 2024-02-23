<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    clicked: Boolean,
});
</script>

<template>
    <Link>
        <div class="h-1">
            <img
                src="../../assets/icons-save.png"
                class="relative bottom-125 left-195 w-10"
            />
        </div>
    </Link>
</template>

<style>
.bottom-125 {
    bottom: 125px;
}
.left-195 {
    left: 195px;
}
</style>
