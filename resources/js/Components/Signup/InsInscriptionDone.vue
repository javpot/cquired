<script>
export default {
    data() {
        return {};
    },
};
</script>

<template>
    <div class="h-8 bg-sky-300 w-screen absolute z-20 animate-ping"></div>
    <div class="h-8 bg-sky-300 w-screen relative z-10"></div>

    <div class="h-screen w-screen flex flex-col justify-center items-center">
        <div class="h-full w-full flex flex-col shadow-md">
            <div
                class="h-full w-full flex flex-col justify-evenly items-center"
            >
                <div>
                    <h2 class="text-5xl">You're all set !</h2>
                </div>

                <button class="h-12 w-1/3 bg-sky-300 text-center rounded-xl">
                    Continue
                </button>
            </div>
        </div>
    </div>
</template>
