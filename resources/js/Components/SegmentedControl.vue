<script setup>
import ProfilePostScreen from "@/Components/ProfilePostScreen.vue";
import ProfileGuestPostScreen from "./ProfileGuestPostScreen.vue";
import ProfileAboutScreen from "@/Components/ProfileAboutScreen.vue";
import ProfileContactScreen from "@/Components/ProfileContactScreen.vue";
import { ref } from "vue";

const screen = ref("posts");

defineProps({
    clientposts: Array,
    clientdata: Array,
});
</script>
<template>
    <div class="w-screen my-6 mx-6 font-sans">
        <div class="flex space-x-[-2px]">
            <input
                id="radio1"
                name="segmented"
                type="radio"
                class="hidden"
                v-model="screen"
                value="posts"
            />
            <label
                for="radio1"
                class="border-[2px] border-solid border-slategrey border-r-0 px-8 py-4 bg-slategrey bg-opacity-20 uppercase text-slategrey text-xs font-bold cursor-pointer rounded-l-[6px]"
            >
                Posts
            </label>

            <input
                id="radio2"
                name="segmented"
                type="radio"
                class="hidden"
                v-model="screen"
                value="about"
            />
            <label
                for="radio2"
                class="border-[2px] border-solid border-slategrey px-8 py-4 bg-slategrey text-slategrey uppercase text-xs font-bold cursor-pointer"
            >
                About
            </label>

            <input
                id="radio3"
                name="segmented"
                type="radio"
                class="hidden"
                v-model="screen"
                value="contact"
            />
            <label
                for="radio3"
                class="border-[2px] border-solid border-slategrey px-8 py-4 bg-slategrey bg-opacity-20 uppercase text-slategrey text-xs font-bold cursor-pointer"
            >
                Contact
            </label>
        </div>
        <ProfileGuestPostScreen
            v-if="
                screen === 'posts' &&
                $page.props.auth.user.category !== 'Client'
            "
            :clientposts="clientposts"
            :clientdata="clientdata"
        />
        <ProfilePostScreen
            v-if="
                screen === 'posts' &&
                $page.props.auth.user.category === 'Client'
            "
            :clientposts="clientposts"
            :clientdata="clientdata"
        />
        <ProfileAboutScreen
            v-if="screen === 'about'"
            :clientdata="clientdata"
        />
        <ProfileContactScreen
            v-if="screen === 'contact'"
            :clientdata="clientdata"
        />
    </div>
</template>
