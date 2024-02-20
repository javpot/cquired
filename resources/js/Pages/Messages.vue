<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ComposeMessage from "@/Components/ComposeMessage.vue";
import ConversationCard from "@/Components/ConversationCard.vue";
import SearchBar from "@/Components/SearchBar.vue";
import MessageHeader from "@/Components/MessageHeader.vue";
import PersonMessageCard from "@/Components/PersonMessageCard.vue";
import MyMessageCard from "@/Components/MyMessageCard.vue";
import MessageBar from "@/Components/MessageBar.vue";
</script>

<template>
    <AuthenticatedLayout class="flex w-full">
        <div class="h-full w-full flex flex-row">
            <div class="h-full w-1/4 flex flex-col ml-4 border-r-2">
                <div
                    class="flex flex-row w-full h-full justify-between mt-4 mb-4"
                >
                    <h1 class="text-4xl">Chats</h1>
                    <ComposeMessage class="mr-2" />
                </div>
                <SearchBar class="mb-6 mr-2" />
                <ul class="mr-2">
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                    <li><ConversationCard /></li>
                </ul>
            </div>
            <div class="flex flex-col w-full items-center">
                <MessageHeader class="flex w-full" />
                <PersonMessageCard
                    class=""
                    message="            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.
"
                />
                <MyMessageCard
                    class="left-20 position-relative"
                    message=" Lore Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.
"
                />
                <PersonMessageCard class="" message="alllo" />
                <PersonMessageCard class="" message="alllo" />
                <MessageBar />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
