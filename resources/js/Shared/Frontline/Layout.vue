<script setup>
import Nav from '@/Shared/Frontline/Nav.vue';
import NavItem from '@/Shared/Frontline/NavItem.vue';
import Footer from '@/Shared/Frontline/Footer.vue';
</script>

<template>
    <div class="flex w-full ">
        <div class="fixed inset-0 flex justify-center sm:px-8">
            <div class="flex w-full max-w-7xl lg:px-8">
                <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20">
                </div>
            </div>
        </div>        
        <div class="relative flex w-full flex-col">
            <!-- Navbar -->
            <Nav>
                <NavItem></NavItem>
            </Nav>

            <!-- Main Page -->
            <main class="flex-auto">
                <slot />
            </main>

            <!-- Footer -->
            <Footer></Footer>
        </div>
    </div>
</template>