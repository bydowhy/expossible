<template>
  <div>
    <div class="mb-4">
      <Link class="group flex items-center py-3" href="/admin/">
        <icon name="dashboard" class="mr-2 w-4 h-4" :class="isUrl('admin/') ? 'fill-indigo-400 group-hover:fill-white' : 'fill-white'" />
        <div :class="isUrl('admin/') ? 'text-indigo-300 group-hover:text-white' : 'text-white'">Dashboard</div>
      </Link>
    </div>
    <div class="mb-4">
      <Link class="group flex items-center py-3" href="/admin/users">
        <icon name="users" class="mr-2 w-4 h-4" :class="isUrl('admin/users') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('admin/users') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Users</div>
      </Link>
    </div>
    <div class="mb-4">
      <Link class="group flex items-center py-3" href="/admin/publications">
        <icon name="paper" class="mr-2 w-4 h-4" :class="isUrl('admin/publications') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('admin/publications') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Publications</div>
      </Link>
    </div>
    <div class="mb-4">
      <Link class="group flex items-center py-3" href="/admin/reports">
        <icon name="printer" class="mr-2 w-4 h-4" :class="isUrl('admin/reports') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'" />
        <div :class="isUrl('admin/reports') ? 'text-white' : 'text-indigo-300 group-hover:text-white'">Reports</div>
      </Link>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'
import Icon from '@/Shared/Creator/Icon.vue'

export default {
  components: {
    Icon,
    Link,
  },
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1)
      if (urls[0] === '') {
        return currentUrl === ''
      }
      return urls.filter((url) => currentUrl.startsWith(url)).length
    },
  },
}
</script>
