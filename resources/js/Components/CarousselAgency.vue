<template>
    <div class="min-h-48">
        <h2 class="text-2xl text-bold ml-12">{{ title }}</h2>
        <div class="flex flex-row items-center justify-center">
            <button
                @click="moveCarousel(1)"
                class="absolute left-0 transform z-50 -translate-y-1/2 ml-2"
            >
                <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    width="40"
                    height="40"
                    viewBox="0 0 492 492"
                    style="enable-background: new 0 0 492 492"
                    xml:space="preserve"
                >
                    <g>
                        <g>
                            <path
                                d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12
			C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084
			c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864
			l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"
                            />
                        </g>
                    </g>
                </svg>
            </button>

            <div
                v-if="agencies"
                class="flex h-56 transition-transform duration-300 ease-in z-40"
            >
                <!-- :style="{ transform: `translateX(${translate}px)` }" -->
                <AgencyCard
                    v-for="(agency, index) in visibleAgencies"
                    :key="index"
                    :agencydata="agency"
                />
            </div>
            <p v-else class="flex flex-row h-48 items-center">{{ message }}</p>
            <button
                @click="moveCarousel(-1)"
                class="absolute right-0 transform z-50 -translate-y-1/2 mr-2"
            >
                <svg
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    width="40"
                    height="40"
                    viewBox="0 0 492.004 492.004"
                    style="enable-background: new 0 0 492.004 492.004"
                    xml:space="preserve"
                >
                    <g>
                        <g>
                            <path
                                d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
			c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
			c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
			c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                            />
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watchEffect, defineProps } from "vue";
import AgencyCard from "./AgencyCard.vue";

const translate = ref(0);

const slideWidth = 50; // Adjust as needed
const visibleAgencyCount = 5;

const props = defineProps({
    agencies: Array,
    title: String,
    message: String,
});

const visibleAgencies = ref([]);

const updateVisibleAgencies = () => {
    if (Array.isArray(props.agencies)) {
        const startIndex = Math.floor(Math.abs(translate.value) / slideWidth);
        visibleAgencies.value = props.agencies.slice(
            startIndex,
            startIndex + visibleAgencyCount
        );
    }
};

const moveCarousel = (direction) => {
    const newPosition = translate.value + direction * slideWidth;
    const maxTranslate =
        (props.agencies.length - visibleAgencyCount) * -slideWidth;
    translate.value = Math.min(0, Math.max(maxTranslate, newPosition));

    // Update visible agencies when moving the carousel
    updateVisibleAgencies();
};

onMounted(() => {
    // Initial update of visible agencies
    updateVisibleAgencies();
});

watchEffect(() => {
    // Update visible agencies when props.agencies changes
    updateVisibleAgencies();
});
</script>
