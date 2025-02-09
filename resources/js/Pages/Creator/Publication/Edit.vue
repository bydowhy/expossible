<template>
  <div>
    <Head :title="`${form.title}`" />
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/admin/publications">Publications</Link>
      <span class="text-indigo-400 font-medium">/</span>{{ form.title }}
    </h1>
    <trashed-message v-if="article.deleted_at" class="mb-6" @restore="restore"> This article has been deleted. </trashed-message>
    <div class="w-full bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.title" :error="form.errors.title" class="pb-8 pr-6 w-full" label="Title" />
          <select-input v-model="form.topic" :error="form.errors.topic" class="pb-8 pr-6 w-full" label="Topic">
            <option :value="null" />
            <option value="ATM">Automation</option>
            <option value="EL">Electrical</option>
            <option value="Tech">Technology</option>
          </select-input>
          <text-input v-model="form.paragraph" :error="form.errors.paragraph" class="pb-8 pr-6 w-full h-96" label="Paragraph" />
        </div>
        <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100">
          <button v-if="!article.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Delete Article</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Update Article</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3'
import Layout from '@/Shared/Creator/Layout.vue'
import TextInput from '@/Shared/Creator/TextInput.vue'
import SelectInput from '@/Shared/Creator/SelectInput.vue'
import LoadingButton from '@/Shared/Creator/LoadingButton.vue'
import TrashedMessage from '@/Shared/Creator/TrashedMessage.vue'

export default {
  components: {
    Head,
    Link,
    LoadingButton,
    SelectInput,
    TextInput,
    TrashedMessage,
  },
  layout: Layout,
  props: {
    article: Object,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        title: this.article.title,
        topic: this.article.topic,
        paragraph: this.article.paragraph,
      }),
    }
  },
  methods: {
    update() {
      this.form.put(`/admin/publications/${this.article.id}`)
    },
    destroy() {
      if (confirm('Are you sure you want to delete this article?')) {
        this.$inertia.delete(`/admin/publications/${this.article.id}`)
      }
    },
    restore() {
      if (confirm('Are you sure you want to restore this article?')) {
        this.$inertia.put(`/admin/publications/${this.article.id}/restore`)
      }
    },
  },
}
</script>
