import "./bootstrap";
import "../css/app.css";

import { createApp, h, provide } from "vue"; // Importez `provide` de Vue
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import "nprogress/nprogress.css";

const appName = "Cquired";

createInertiaApp({
    title: () => `${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });

        // Fournissez l'array global ici
        app.provide("domains", [
            "Web development",
            "Artificial intelligence",
            "Video games",
            "SEO",
            "Special effects",
        ]);

        app.use(plugin).use(ZiggyVue).mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
