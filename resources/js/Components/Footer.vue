<script setup>
import ApplicationLogo from "./ApplicationLogo.vue";
</script>

<template>
    <div class="w-full py-16 px-8 bg-black">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 md:gap-8 gap-4"
        >
            <div class="flex flex-col flex-shrink-0">
                <div class="dark:text-white">
                    <!-- <svg
                        width="50"
                        height="50"
                        viewBox="0 0 80 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <text fill="white" class="">Cquired</text>
                    </svg> -->
                    <p
                        class="text-3xl font-bold leading-none text-gray-800 mb-4 dark:text-white"
                    >
                        Cquired
                    </p>
                </div>
                <p
                    class="text-sm leading-none text-gray-800 mt-4 dark:text-white"
                >
                    Copyright © 2024 Cquired
                </p>
                <p
                    class="text-sm leading-none text-gray-800 mt-4 dark:text-white"
                >
                    All rights reserved
                </p>
                <div class="flex items-center gap-x-4 mt-12">
                    <button
                        aria-label="instagram"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center"
                    >
                        <svg
                            width="18"
                            height="17"
                            viewBox="0 0 18 17"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M9.00081 0.233398C6.68327 0.233398 6.39243 0.243215 5.48219 0.283343C4.57374 0.323644 3.95364 0.462973 3.41106 0.667403C2.84981 0.87855 2.37372 1.161 1.8994 1.62066C1.42473 2.08016 1.13317 2.54137 0.914502 3.08491C0.702944 3.61071 0.558942 4.2116 0.518053 5.09132C0.477342 5.97311 0.466675 6.25504 0.466675 8.50015C0.466675 10.7453 0.476986 11.0262 0.518231 11.9079C0.560009 12.788 0.703833 13.3887 0.914679 13.9144C1.13282 14.4581 1.42437 14.9193 1.89887 15.3788C2.37301 15.8386 2.8491 16.1218 3.40999 16.3329C3.95293 16.5373 4.57321 16.6767 5.48148 16.717C6.39171 16.7571 6.68238 16.7669 8.99974 16.7669C11.3175 16.7669 11.6074 16.7571 12.5176 16.717C13.4261 16.6767 14.0469 16.5373 14.5898 16.3329C15.1509 16.1218 15.6263 15.8386 16.1004 15.3788C16.5751 14.9193 16.8667 14.4581 17.0853 13.9145C17.2951 13.3887 17.4391 12.7878 17.4818 11.9081C17.5227 11.0263 17.5333 10.7453 17.5333 8.50015C17.5333 6.25504 17.5227 5.97328 17.4818 5.09149C17.4391 4.21143 17.2951 3.61071 17.0853 3.08508C16.8667 2.54137 16.5751 2.08016 16.1004 1.62066C15.6258 1.16082 15.1511 0.878377 14.5893 0.667403C14.0453 0.462973 13.4249 0.323644 12.5164 0.283343C11.6062 0.243215 11.3164 0.233398 8.99814 0.233398H9.00081ZM8.23525 1.72311C8.46245 1.72277 8.71597 1.72311 9.00077 1.72311C11.2792 1.72311 11.5492 1.73104 12.449 1.77065C13.281 1.8075 13.7326 1.94218 14.0334 2.05533C14.4316 2.20517 14.7155 2.38428 15.014 2.67362C15.3127 2.96295 15.4976 3.23851 15.6526 3.62429C15.7694 3.91535 15.9086 4.3528 15.9464 5.15881C15.9873 6.03026 15.9962 6.29204 15.9962 8.49823C15.9962 10.7044 15.9873 10.9662 15.9464 11.8377C15.9084 12.6437 15.7694 13.0811 15.6526 13.3722C15.4979 13.758 15.3127 14.0327 15.014 14.3218C14.7153 14.6112 14.4318 14.7903 14.0334 14.9401C13.7329 15.0538 13.281 15.1881 12.449 15.225C11.5494 15.2646 11.2792 15.2732 9.00077 15.2732C6.72217 15.2732 6.45212 15.2646 5.55256 15.225C4.72055 15.1878 4.26899 15.0531 3.96801 14.9399C3.56978 14.7901 3.28533 14.611 2.98666 14.3216C2.68799 14.0323 2.5031 13.7574 2.34808 13.3715C2.23128 13.0804 2.09208 12.643 2.05421 11.837C2.01332 10.9655 2.00514 10.7037 2.00514 8.49617C2.00514 6.2886 2.01332 6.0282 2.05421 5.15674C2.09226 4.35073 2.23128 3.91329 2.34808 3.62188C2.50275 3.2361 2.68799 2.96054 2.98666 2.67121C3.28533 2.38187 3.56978 2.20276 3.96801 2.05258C4.26881 1.93891 4.72055 1.80457 5.55256 1.76755C6.33977 1.7331 6.64484 1.72277 8.23525 1.72105V1.72311ZM13.5558 3.09574C12.9905 3.09574 12.5318 3.53956 12.5318 4.08741C12.5318 4.63508 12.9905 5.07942 13.5558 5.07942C14.1212 5.07942 14.5799 4.63508 14.5799 4.08741C14.5799 3.53974 14.1212 3.09574 13.5558 3.09574ZM9.00082 4.25481C6.58071 4.25481 4.61855 6.15564 4.61855 8.50013C4.61855 10.8446 6.58071 12.7446 9.00082 12.7446C11.4209 12.7446 13.3824 10.8446 13.3824 8.50013C13.3824 6.15564 11.4209 4.25481 9.00082 4.25481ZM9.00079 5.74454C10.5717 5.74454 11.8453 6.97818 11.8453 8.50013C11.8453 10.0219 10.5717 11.2557 9.00079 11.2557C7.42975 11.2557 6.15632 10.0219 6.15632 8.50013C6.15632 6.97818 7.42975 5.74454 9.00079 5.74454Z"
                                fill="white"
                            />
                        </svg>
                    </button>
                    <button
                        aria-label="linked-in"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center"
                    >
                        <svg
                            id="Layer_1"
                            enable-background="new 0 0 100 100"
                            height="22"
                            viewBox="0 0 100 100"
                            width="19"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g id="_x31_0.Linkedin">
                                <path
                                    fill="white"
                                    d="m90 90v-29.3c0-14.4-3.1-25.4-19.9-25.4-8.1 0-13.5 4.4-15.7 8.6h-.2v-7.3h-15.9v53.4h16.6v-26.5c0-7 1.3-13.7 9.9-13.7 8.5 0 8.6 7.9 8.6 14.1v26h16.6z"
                                />
                                <path
                                    fill="white"
                                    d="m11.3 36.6h16.6v53.4h-16.6z"
                                />
                                <path
                                    fill="white"
                                    d="m19.6 10c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.7 9.6 9.7 9.6-4.4 9.6-9.7-4.3-9.6-9.6-9.6z"
                                />
                            </g>
                        </svg>
                    </button>
                    <button
                        aria-label="email"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center"
                    >
                        <svg
                            height="19"
                            width="19"
                            version="1.1"
                            id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 433.664 433.664"
                            style="enable-background: new 0 0 433.664 433.664"
                            xml:space="preserve"
                        >
                            <g>
                                <g>
                                    <path
                                        fill="white"
                                        d="M229.376,271.616c-4.096,2.56-8.704,3.584-12.8,3.584s-8.704-1.024-12.8-3.584L0,147.2v165.376c0,35.328,28.672,64,64,64
			h305.664c35.328,0,64-28.672,64-64V147.2L229.376,271.616z"
                                    />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        fill="white"
                                        d="M369.664,57.088H64c-30.208,0-55.808,21.504-61.952,50.176l215.04,131.072l214.528-131.072
			C425.472,78.592,399.872,57.088,369.664,57.088z"
                                    />
                                </g>
                            </g>
                        </svg>
                    </button>
                    <button
                        aria-label="call"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center"
                    >
                        <svg
                            width="18"
                            height="14"
                            version="1.1"
                            id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 384 384"
                            style="enable-background: new 0 0 384 384"
                            xml:space="preserve"
                        >
                            <g>
                                <g>
                                    <path
                                        fill="white"
                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
			c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
			c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
			C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                                    />
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="sm:ml-0 ml-8 flex flex-col">
                <h2
                    class="text-base font-semibold leading-4 text-gray-800 dark:text-white"
                >
                    Company
                </h2>
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Blog</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Pricing</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >About Us</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Contact us</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Testimonials</a
                >
            </div>
            <div class="flex flex-col">
                <h2
                    class="text-base font-semibold leading-4 text-gray-800 dark:text-white"
                >
                    Support
                </h2>
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Legal policy</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Status policy</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Privacy policy</a
                >
                <a
                    href="javascript:void(0)"
                    class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer"
                    >Terms of service</a
                >
            </div>
            <div class="mt-10 lg:block hidden">
                <label
                    class="text-xl font-medium leading-5 text-gray-800 dark:text-white"
                    >Get updates</label
                >
                <div
                    class="cursor-pointer flex items-center justify-between border border-gray-800 dark:border-white mt-4"
                >
                    <input
                        type="text"
                        class="text-base leading-4 p-4 w-full focus:outline-none text-gray-800 dark:text-white dark:placeholder-white dark:bg-gray-900 dark:border-white placeholder-gray-800"
                        placeholder="Enter your email"
                    />
                    <button
                        aria-label="send"
                        class="mr-4 fill-current text-gray-800 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                    >
                        <svg
                            class="dark:text-white dark:hover:text-gray-200"
                            width="16"
                            height="17"
                            viewBox="0 0 16 17"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M14.8934 7.39673L14.8884 7.39457L1.54219 1.9166C1.42993 1.87011 1.30778 1.85187 1.18666 1.86353C1.06554 1.87519 0.949225 1.91637 0.848125 1.9834C0.741311 2.05266 0.653573 2.14711 0.592805 2.25826C0.532037 2.36941 0.500145 2.49376 0.5 2.62013V6.12357C0.50006 6.29633 0.561019 6.46366 0.67237 6.59671C0.783722 6.72976 0.938491 6.82021 1.11 6.85246L8.38906 8.18438C8.41767 8.18974 8.44348 8.20482 8.46205 8.22701C8.48062 8.2492 8.49078 8.2771 8.49078 8.30591C8.49078 8.33472 8.48062 8.36263 8.46205 8.38481C8.44348 8.407 8.41767 8.42208 8.38906 8.42744L1.11031 9.75936C0.938851 9.79153 0.784092 9.88185 0.67269 10.0148C0.561288 10.1477 0.500219 10.3149 0.5 10.4876V13.9917C0.499917 14.1124 0.530111 14.2312 0.587871 14.3374C0.645632 14.4437 0.729152 14.5341 0.830938 14.6006C0.953375 14.6811 1.09706 14.7241 1.24406 14.7243C1.34626 14.7242 1.4474 14.7039 1.54156 14.6646L14.8875 9.21787L14.8934 9.21509C15.0731 9.13869 15.2262 9.01185 15.3337 8.85025C15.4413 8.68866 15.4986 8.49941 15.4986 8.30591C15.4986 8.11241 15.4413 7.92316 15.3337 7.76157C15.2262 7.59997 15.0731 7.47313 14.8934 7.39673Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-10 lg:hidden">
            <label
                class="text-xl font-medium leading-5 text-gray-800 dark:text-white"
                >Get updates</label
            >
            <div
                class="flex items-center justify-between border border-gray-800 dark:border-white mt-4"
            >
                <input
                    type="text"
                    class="text-base leading-4 p-4 relative z-0 w-full focus:outline-none text-gray-800 placeholder-gray-800 dark:text-white dark:placeholder-white dark:border-white dark:bg-gray-900"
                    placeholder="Enter your email"
                />
                <button
                    aria-label="send"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 mr-4 cursor-pointer relative z-40"
                >
                    <svg
                        class="fill-current text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-gray-200"
                        width="16"
                        height="17"
                        viewBox="0 0 16 17"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M14.8934 7.39673L14.8884 7.39457L1.54219 1.9166C1.42993 1.87011 1.30778 1.85187 1.18666 1.86353C1.06554 1.87519 0.949225 1.91637 0.848125 1.9834C0.741311 2.05266 0.653573 2.14711 0.592805 2.25826C0.532037 2.36941 0.500145 2.49376 0.5 2.62013V6.12357C0.50006 6.29633 0.561019 6.46366 0.67237 6.59671C0.783722 6.72976 0.938491 6.82021 1.11 6.85246L8.38906 8.18438C8.41767 8.18974 8.44348 8.20482 8.46205 8.22701C8.48062 8.2492 8.49078 8.2771 8.49078 8.30591C8.49078 8.33472 8.48062 8.36263 8.46205 8.38481C8.44348 8.407 8.41767 8.42208 8.38906 8.42744L1.11031 9.75936C0.938851 9.79153 0.784092 9.88185 0.67269 10.0148C0.561288 10.1477 0.500219 10.3149 0.5 10.4876V13.9917C0.499917 14.1124 0.530111 14.2312 0.587871 14.3374C0.645632 14.4437 0.729152 14.5341 0.830938 14.6006C0.953375 14.6811 1.09706 14.7241 1.24406 14.7243C1.34626 14.7242 1.4474 14.7039 1.54156 14.6646L14.8875 9.21787L14.8934 9.21509C15.0731 9.13869 15.2262 9.01185 15.3337 8.85025C15.4413 8.68866 15.4986 8.49941 15.4986 8.30591C15.4986 8.11241 15.4413 7.92316 15.3337 7.76157C15.2262 7.59997 15.0731 7.47313 14.8934 7.39673Z"
                            fill="currentColor"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>
