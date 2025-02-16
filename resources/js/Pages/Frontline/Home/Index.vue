<template>
    <Head title="Home" />
    <div class="sm:px-8 mt-9">
        <div class="mx-auto w-full max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <div class="max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight sm:text-5xl/12 text-zinc-800 dark:text-zinc-100">Software designer, founder, and amateur astronaut.</h1>
                        <p class="mt-6 text-base/7 text-zinc-600 dark:text-zinc-400">I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.</p>
                        <div class="mt-6 flex gap-6">
                            <a class="group -m-1 p-1" aria-label="Follow on X" href="https://x.com/putinmissile">
                                <Icon name="X"></Icon>
                            </a>
                            <a class="group -m-1 p-1" aria-label="Follow on Instagram" href="https://www.instagram.com/mirzaalfrs">
                                <Icon name="Instagram"></Icon>
                            </a>
                            <a class="group -m-1 p-1" aria-label="Follow on GitHub" href="https://github.com/bydowhy">
                                <Icon name="Github"></Icon>
                            </a>
                            <a class="group -m-1 p-1" aria-label="Follow on LinkedIn" href="https://www.linkedin.com/in/mirzaalfrs">
                                <Icon name="Linkedin"></Icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:px-8 mt-24 md:mt-28">
        <div class="sm:px-8 mt-24 md:mt-28">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
                            <div class="flex flex-col gap-16">                                
                                <article v-for="article in articles" :key="article.id" class="group relative flex flex-col items-start">
                                    <h2 class="text-base/7 font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                        <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div>
                                        <a :href="`/article/${article.id}`">
                                            <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                            <span class="relative z-10">{{ article.title }}</span>
                                        </a>
                                    </h2>
                                    <time class="relative z-10 order-first mb-3 flex items-center text-sm/6 text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="auto">
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
                                </article>
                            </div>
                            <div class="space-y-10 lg:pl-16 xl:pl-24">
                                <form class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40" action="/thank-you">
                                    <h2 class="flex text-sm/6 font-semibold text-zinc-900 dark:text-zinc-100">
                                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                            <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                            <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                        </svg>
                                        <span class="ml-3">Stay up to date</span>
                                    </h2>
                                    <p class="mt-2 text-sm/6 text-zinc-600 dark:text-zinc-400">Get notified when I publish something new, and unsubscribe at any time.</p>
                                    <div class="mt-6 flex">
                                        <input type="email" placeholder="Email address" aria-label="Email address" class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm/6 dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10">
                                        <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none" type="submit">Join</button>
                                    </div>
                                </form>
                                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                            <path d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                            <path d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                        </svg>
                                        <span class="ml-3">Work</span>
                                    </h2>
                                    <ol class="mt-6 space-y-4">
                                        <li v-for="work in works" :key="work.name" class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                                <img alt="" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="h-7 w-7" style="color:transparent" :src="work.img">
                                            </div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">Company</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ work.name }}</dd>
                                                <dt class="sr-only">Role</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">{{ work.role }}</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2019 until Present">
                                                    <time datetime="2019">{{ work.dateBegin }}</time> 
                                                    <span aria-hidden="true">—</span> 
                                                    <time datetime="2024">{{ work.dateOver }}</time>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ol>
                                    <a class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full" href="#">Download CV
                                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50">
                                            <path d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Icon from '@/Shared/Frontline/Icon.vue';
import Layout from '@/Shared/Frontline/Layout.vue';
import { Head } from '@inertiajs/vue3';
const works = [
    { name: 'Planetaria', role: 'CEO', dateBegin: '2019', dateOver: 'Present', img: "img/planetaria.svg" },
    { name: 'Airbnb', role: 'Product Designer', dateBegin: '2014', dateOver: '2019', img: "img/airbnb.svg" },
    { name: 'Facebook', role: 'iOS Software Engineer', dateBegin: '2011', dateOver: '2014', img: "img/facebook.svg" },
    { name: 'Starbucks', role: 'Shift Supervisor', dateBegin: '2008', dateOver: '2011', img: "img/starbucks.svg" },
]
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
};
</script>