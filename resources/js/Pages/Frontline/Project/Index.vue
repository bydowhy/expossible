<template>
    <Head title="Project" />
    <div class="sm:px-8 mt-16 sm:mt-32">
        <div class="mx-auto w-full max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <header class="max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl/12 dark:text-zinc-100">Things I’ve made trying to put my dent in the universe.</h1>
                        <p class="mt-6 text-base/7 text-zinc-600 dark:text-zinc-400">I’ve worked on tons of little projects over the years but these are the ones that I’m most proud of. Many of them are open-source, so if you see something that piques your interest, check out the code and contribute if you have ideas for how it can be improved.</p>
                    </header>
                    <div class="mt-16 sm:mt-20">
                        <ul role="list" class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
                            <li v-for="project in projects" :key="project.name" class="group relative flex flex-col items-start">
                                <div class="relative z-10 flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                    <img alt="" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="h-8 w-8" style="color:transparent" :src="project.img" />
                                </div>
                                <h2 class="mt-6 text-base/7 font-semibold text-zinc-800 dark:text-zinc-100">
                                    <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div>
                                    <a :href="project.link">
                                        <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                        <span class="relative z-10">{{ project.name }}</span>
                                    </a>
                                </h2>
                                <p class="relative z-10 mt-2 text-sm/6 text-zinc-600 dark:text-zinc-400">{{ project.description }}</p>
                                <p class="relative items-center z-10 mt-6 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
                                        <path d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="ml-2">{{ project.link }}</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Shared/Frontline/Layout.vue';
const projects = [
    { name: 'Planetaria', description: 'Creating technology to empower civilians to explore space on their own terms.', link: 'planetaria.tech', img: "img/planetaria.svg" },
    { name: 'Animaginary', description: 'High performance web animation library, hand-written in optimized WASM.', link: 'github.com', img: "img/animaginary.svg" },
    { name: 'HelioStream', description: 'Real-time video streaming library, optimized for interstellar transmission.', link: 'github.com', img: "img/helio-stream.svg" },
    { name: 'cosmOS', description: 'The operating system that powers our Planetaria space shuttles.', link: 'github.com', img: "img/cosmos.svg" },
    { name: 'OpenShuttle', description: 'The schematics for the first rocket I designed that successfully made it to orbit.', link: 'github.com', img: "img/open-shuttle.svg" },
]
</script>

<script>
export default {
    component: {
        Head
    },
    layout: Layout
}
</script>