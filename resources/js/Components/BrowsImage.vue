<script setup>
import { ref } from "vue";

const image = ref(null); // base64 preview
const file = ref(null);  // raw file

const onFileChange = (event) => {
  const selected = event.target.files[0];
  if (selected && selected.type.startsWith("image/")) {
    file.value = selected;

    // Create preview
    const reader = new FileReader();
    reader.onload = (e) => {
      image.value = e.target.result;
    };
    reader.readAsDataURL(selected);
  }
};

const removeImage = () => {
  image.value = null;
  file.value = null;
};
</script>

<template>
  <div class="space-y w-full">
    <!-- Hidden file input -->
    <input
      id="fileInput"
      type="file"
      accept="image/*"
      class="hidden"
      @change="onFileChange"
    />

    <!-- Upload box -->
    <label
      v-if="!image"
      for="fileInput"
      class="flex items-center justify-center w-full h-[172px] bg-white border rounded-lg shadow cursor-pointer hover:border-primary transition"
    >
    <div class="block">
        <div class="flex justify-center mb-3">
        <i class="fa fa-plus rounded-full border-[1px] h-[40px] w-[40px] flex justify-center items-center text-gray-500 border-gray-300"></i>
    </div>
      <span class="text-gray-500">Browse Image</span>
    </div>
    </label>

    <!-- Preview box -->
    <div v-else class="relative w-full h-[172px] bg-white border rounded-lg shadow overflow-hidden">
      <img
        :src="image"
        alt="Preview"
        class="w-full h-full object-contain bg-white"
      />
      <button
        @click="removeImage"
        type="button"
        class="absolute top-2 right-2 bg-red-600 text-white rounded-full w-7 h-7 flex items-center justify-center shadow hover:bg-red-700 transition"
      >
        ✕
      </button>
    </div>
  </div>
</template>
