<template>
    <div class="my-6 mx-6 font-sans">
        <div class="flex space-x-[-2px]">
            <input id="radio1" name="segmented" type="radio" class="hidden" />
            <label
                for="radio1"
                class="border-[2px] border-solid border-slategrey border-r-0 px-8 py-4 bg-slategrey bg-opacity-20 uppercase text-slategrey text-xs font-bold cursor-pointer rounded-l-[6px]"
            >
                One
            </label>

            <input
                id="radio2"
                name="segmented"
                type="radio"
                checked
                class="hidden"
            />
            <label
                for="radio2"
                class="border-[2px] border-solid border-slategrey px-8 py-4 bg-slategrey text-slategrey uppercase text-xs font-bold cursor-default"
            >
                Two
            </label>

            <input id="radio3" name="segmented" type="radio" class="hidden" />
            <label
                for="radio3"
                class="border-[2px] border-solid border-slategrey px-8 py-4 bg-slategrey bg-opacity-20 uppercase text-slategrey text-xs font-bold cursor-pointer"
            >
                Three
            </label>

            <input id="radio4" name="segmented" type="radio" class="hidden" />
            <label
                for="radio4"
                class="border-[2px] border-solid border-slategrey px-8 py-4 bg-slategrey bg-opacity-20 uppercase text-slategrey text-xs font-bold cursor-pointer"
            >
                Four
            </label>

            <input id="radio5" name="segmented" type="radio" class="hidden" />
            <label
                for="radio5"
                class="border-[2px] border-solid border-slategrey border-r-[2px] px-8 py-4 bg-slategrey bg-opacity-20 uppercase text-slategrey text-xs font-bold cursor-pointer rounded-r-[6px]"
            >
                Five
            </label>
        </div>
    </div>
</template>
