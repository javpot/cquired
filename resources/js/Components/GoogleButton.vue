<template>
    <div
        class="border-gray-300 border rounded-md shadow-sm flex justify-center mt-7"
    >
        <a :href="route('google-auth')" class="google-auth-button">
            <span class="inline-flex items-center mt-2 px-2">
                <img
                    src="../../assets/google.svg"
                    alt="Google Icon"
                    class="w-10 h-10 mr-2"
                />
                Continue with Google
            </span>
        </a>
    </div>
</template>
