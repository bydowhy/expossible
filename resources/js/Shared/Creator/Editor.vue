<template>
    <div>
      <label v-if="label" class="block pb-2 text-sm font-medium text-gray-700">{{ label }}</label>
      <editor
        v-model="content"
        api-key=""
        :init="{
          height: 300,
          menubar: false,
          plugins: 'lists link image table code',
          toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | code'
        }"
      />
      <div v-if="error" class="text-red-600 text-sm mt-1">{{ error }}</div>
    </div>
  </template>
  
  <script>
  import Editor from '@tinymce/tinymce-vue';
  
  export default {
    components: { Editor },
    props: {
      modelValue: String,
      label: String,
      error: String,
    },
    computed: {
      content: {
        get() {
          return this.modelValue;
        },
        set(value) {
          this.$emit('update:modelValue', value);
        },
      },
    },
  };
  </script>
  