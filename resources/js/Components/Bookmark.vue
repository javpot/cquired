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
        <!-- <svg
            height="50"
            viewBox="0 0 32 32"
            width="50"
            xmlns="http://www.w3.org/2000/svg"
            class="relative bottom-125 left-195 w-10 z-50"
        >
            <g id="Bookmark">
                <path
                    d="m24 1h-16a1 1 0 0 0 -1 1v28a1 1 0 0 0 1.6.8l7.4-5.55 7.4 5.55a.9951.9951 0 0 0 .6.2 1 1 0 0 0 1-1v-28a1 1 0 0 0 -1-1zm-1 27-6.4-4.8a.998.998 0 0 0 -1.1992 0l-6.4008 4.8v-25h14z"
                    fill="rgb(0,0,0)"
                />
            </g>
        </svg> -->
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
