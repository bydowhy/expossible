<template>
    <div class="flex flex-1 justify-end md:justify-center">
        <nav class="pointer-events-auto hidden md:block">
            <ul class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
                <li v-for="nav in navigation" :key="nav.name">
                    <Link :href="nav.href" class="relative block px-3 py-2.5 transition hover:text-teal-500 dark:hover:text-teal-400" :class="currentUrl.includes(nav.href) ? 'text-teal-500 dark:text-teal-400' : ''">{{ nav.name }}</Link>                                                        
                </li>
            </ul>
        </nav>
    </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { ref, watchEffect } from 'vue';

const currentUrl = ref(usePage().url); // Retrieve the URL of the current page
watchEffect(() => {
  currentUrl.value = usePage().url; // Update currentUrl when route changes
});
const navigation = [
    { name: 'About', slug: 'about', href: '/about' },
    { name: 'Project', slug: 'project', href: '/project' },
    { name: 'Article', slug: 'article', href: '/article' },
]
</script>

<script>
export default {
    component: {
        Link,
    }
}
</script>