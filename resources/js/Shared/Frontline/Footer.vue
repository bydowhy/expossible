<template>
    <footer class="mt-32 flex-none">
        <div class="sm:px-8">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="border-t border-zinc-100 pb-16 pt-10 dark:border-zinc-700/40">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                                <div class="flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-zinc-800 dark:text-zinc-200">
                                    <Link v-for="nav in navigation" :key="nav.name" class="transition hover:text-teal-500 dark:hover:text-teal-400" :href="nav.href">{{ nav.name }}</Link>
                                </div>
                                <p class="text-sm text-zinc-400 dark:text-zinc-500">© {{ copyright.year }} {{ copyright.project }} All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const navigation = [
    { name: 'About', slug: 'about', href: '/about' },
    { name: 'Project', slug: 'project', href: '/project' },
    { name: 'Article', slug: 'article', href: '/article' },
]

const copyright = {
    year: '2025', project: 'EXpossible Project.' 
}
</script>

<script>
export default {
    component: {
        Link
    }
}
</script>
