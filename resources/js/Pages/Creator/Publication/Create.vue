<template>
  <div>
    <Head title="Create Publication" />
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/admin/publications">Publications</Link>
      <span class="text-indigo-400 font-medium">/</span>Create
    </h1>
    <div class="w-full bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="store">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.title" :error="form.errors.title" class="pb-8 pr-6 w-full" label="Title" />
          <select-input v-model="form.topic" :error="form.errors.topic" class="pb-8 pr-6 w-full" label="Topic">
            <option :value="null" />
            <option value="ATM">Automation</option>
            <option value="EL">Electrical</option>
            <option value="Tech">Technology</option>
          </select-input>
          <text-input v-model="form.paragraph" :error="form.errors.paragraph" class="pb-8 pr-6 w-full h-96" label="Paragraph" />
          <!-- <div v-if="editor" class="flex flex-nowrap flex-row gap-x-2 p-4 border-b border-gray-300">
            <button @click="editor.chain().focus().toggleBold().run()" :disabled="!editor.can().chain().focus().toggleBold().run()" :class="{ 'bg-slate-300': editor.isActive('bold') }" class="px-2 py-1 rounded-md text-sm border border-slate-400">
              Bold
            </button>
            <button @click="editor.chain().focus().toggleItalic().run()" :disabled="!editor.can().chain().focus().toggleItalic().run()" :class="{ 'bg-slate-300': editor.isActive('italic') }" class="px-2 py-1 rounded-md text-sm border border-slate-400">
              Italic
            </button>
            <button @click="editor.chain().focus().toggleUnderline().run()" :disabled="!editor.can().chain().focus().toggleUnderline().run()" :class="{ 'bg-slate-300': editor.isActive('underline') }" class="px-2 py-1 rounded-md text-sm border border-slate-400">
              Underline
            </button>
          </div>
          <EditorContent v-if="editor" :editor="editor" class="tiptap p-4 min-h-96 outline-1 outline-rose-600 overflow-auto" /> -->
        </div>
        <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
          <loading-button :loading="form.processing" class="btn-indigo" type="submit">Create Article</loading-button>
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

export default {
  components: {
    Head,
    Link,
    LoadingButton,
    SelectInput,
    TextInput,
  },
  layout: Layout,
  props: {
    articles: Array,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        title: '',
        topic: null,
        paragraph: '',
      }),
    }
  },
  methods: {
    store() {
      this.form.post('/admin/publications')
    },
  },
}
</script>
