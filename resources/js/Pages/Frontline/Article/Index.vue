<template>
    <Head title="Article" />
    <div class="sm:px-8 mt-16 sm:mt-32">
        <div class="mx-auto w-full max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <header class="max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl/12 dark:text-zinc-100">Writing on software design, company building, and the aerospace industry.</h1>
                        <p class="mt-6 text-base/7 text-zinc-600 dark:text-zinc-400">All of my long-form thoughts on programming, leadership, product design, and more, collected in chronological order.</p>
                    </header>
                    <div class="mt-16 sm:mt-20">
                        <div class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
                            <div class="flex max-w-3xl flex-col space-y-16">
                                <article v-for="article in articles" :key="article.id" class="md:grid md:grid-cols-4 md:items-baseline">
                                    <div class="identity">
                                        <time class="mt-1 hidden md:block relative z-10 order-first mb-2 items-center text-sm/6 text-zinc-400 dark:text-zinc-500" datetime="auto">{{ formatDate(article.created_at) }}</time>
                                    </div>
                                    <div class="md:col-span-3 group relative flex flex-col items-start">
                                        <h2 class="text-base/7 font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                            <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div>
                                            <a :href="`/article/${article.id}`">
                                                <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                                <span class="relative z-10">{{ article.title }}</span>
                                            </a>
                                        </h2>
                                        <time class="md:hidden relative z-10 order-first mb-3 flex items-center text-sm/6 text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="auto">
                                            <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
                                                <span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span>
                                            </span>{{ formatDate(article.created_at) }}
                                        </time>
                                        <p class="relative z-10 mt-2 text-sm/6 text-zinc-600 dark:text-zinc-400">{{ article.paragraph }}</p>
                                        <div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm/6 font-medium text-teal-500">Read article
                                            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                                                <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>                                        
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Shared/Frontline/Layout.vue';
</script>

<script>
export default {
    component: {
        Head
    },
    layout: Layout,
    props: {
        articles: Object
    },
    methods: {
        formatDate(dateString) {
        const date = new Date(dateString);
        return new Intl.DateTimeFormat('en-US', { month: 'long', day: 'numeric', year: 'numeric' }).format(date);
        }
    }
}
</script>