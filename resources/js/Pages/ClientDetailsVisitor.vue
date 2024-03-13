<script setup>
import SegmentedControl from "@/Components/SegmentedControl.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";
import axios from "axios";

const client = usePage().props.client;
const posts = ref([]);
const clientPosts = ref([]);
let picturePath = client.picture;
let bannerPath = client.banner;

const agency = usePage().props.auth.agency;
const savedClients = ref([]);

onMounted(async () => {
    posts.value = await getPosts();
    clientPosts.value = posts.value.filter(
        (post) => post.client_id === client.id
    );
    savedClients.value = agency.saved;
    // console.log(typeof savedClients.value);
    let isSaved = savedClients.value.saved.includes(`${client.id}`);
    // console.log(savedClients.value.saved.includes(`${client.id}`));
    changeSVG(!isSaved);
});

async function getPosts() {
    try {
        const response = await axios.get("/posts");
        // Gérer la réponse ici, par exemple, afficher le domain dans la console
        console.log(response.data.Posts);
        return response.data.Posts;
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}

async function save() {
    let isSaved = savedClients.value.saved.includes(`${client.id}`);
    console.log(isSaved);
    // isSaved
    //     ? (savedClients.value.saved = savedClients.value.saved.filter((c) => {
    //           c.id !== `${client.id}`;
    //       }))
    //     : savedClients.value.saved.push(client.id);
    if (isSaved) {
        savedClients.value.saved = savedClients.value.saved.filter((c) => {
            c.id !== `${client.id}`;
        });
        await axios.delete(`/saveClient/${client.id}`);
    } else {
        savedClients.value.saved.push(`${client.id}`);
        await axios.post(`/saveClient/${client.id}`);
    }
    // console.log(isSaved);
    // console.log(savedClients.value.saved);

    changeSVG(isSaved);
}

function changeSVG(isSaved) {
    var svgElement = document.getElementById("bookmark");

    if (!isSaved) {
        svgElement.innerHTML = `<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" fill="#FFD700" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M416.667,0H95.334c-8.284,0-15,6.716-15,15v482c0,6.067,3.655,11.536,9.26,13.858c1.856,0.769,3.805,1.142,5.737,1.142
			c3.903,0,7.74-1.523,10.609-4.394l150.063-150.062L406.06,507.606c4.29,4.291,10.741,5.573,16.347,3.252
			c5.605-2.322,9.26-7.791,9.26-13.858V15C431.667,6.716,424.952,0,416.667,0z"/>
	</g>
</g>
</svg>
`;
    } else {
        svgElement.innerHTML = `
                        <g>
                            <g>
                                <path
                                    d="M416.667,0H95.333c-8.284,0-15,6.716-15,15v482c0,6.067,3.655,11.536,9.26,13.858c1.856,0.769,3.805,1.142,5.737,1.142
			c3.904,0,7.74-1.523,10.61-4.394l150.063-150.061L406.06,507.606c4.29,4.29,10.742,5.573,16.347,3.252
			c5.605-2.322,9.26-7.791,9.26-13.858V15C431.667,6.716,424.951,0,416.667,0z M256.002,321.332c-3.978,0-7.793,1.58-10.606,4.394
			L110.333,460.787V30h291.333v430.785L266.609,325.726C263.796,322.912,259.981,321.332,256.002,321.332z"
                                />
                            </g>
                        </g>
                    `;
    }
}
</script>

<template>
    <AuthenticatedLayoutAgency class="w-screen absolute z-50">
        <section
            class="flex flex-col w-screen h-screen z-40 relative items-center bg-white"
        >
            <img
                class="flex w-full h-96 z-40 absolute"
                :src="bannerPath"
                alt=""
            />
            <img
                class="w-40 h-40 z-50 border-8 border-white rounded-full bg-white relative top-80 self-center"
                :src="picturePath"
                alt=""
            />

            <div class="flex flex-col w-full z-50 top-80 relative items-center">
                <div class="flex flex-col my-4 space-y-4">
                    <h2 class="text-3xl text-center">{{ client.name }}</h2>
                    <svg
                        version="1.1"
                        id="bookmark"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 512 512"
                        height="35"
                        width="35"
                        class="self-center"
                        fill=""
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                        :onclick="save"
                    >
                        <g>
                            <g>
                                <path
                                    d="M416.667,0H95.333c-8.284,0-15,6.716-15,15v482c0,6.067,3.655,11.536,9.26,13.858c1.856,0.769,3.805,1.142,5.737,1.142
			c3.904,0,7.74-1.523,10.61-4.394l150.063-150.061L406.06,507.606c4.29,4.29,10.742,5.573,16.347,3.252
			c5.605-2.322,9.26-7.791,9.26-13.858V15C431.667,6.716,424.951,0,416.667,0z M256.002,321.332c-3.978,0-7.793,1.58-10.606,4.394
			L110.333,460.787V30h291.333v430.785L266.609,325.726C263.796,322.912,259.981,321.332,256.002,321.332z"
                                />
                            </g>
                        </g>
                    </svg>

                    <h3 class="text-center">{{ client.location }}</h3>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h2 class="text-center text-xl">
                        {{ clientPosts.length }}
                    </h2>
                    <h2 class="uppercase">Posts</h2>
                </div>
                <SegmentedControl
                    class="flex flex-col items-center"
                    :clientposts="clientPosts"
                    :clientdata="client"
                />
            </div>
        </section>
    </AuthenticatedLayoutAgency>
</template>
