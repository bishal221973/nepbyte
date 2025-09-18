<script setup>
import { ref, onMounted, watch } from "vue";

const theme = ref("light");
const STORAGE_KEY = "site-theme";

// Apply theme to <html> element
const applyTheme = (val) => {
  const root = document.documentElement;
  if (val === "dark") {
    root.setAttribute("data-theme", "dark");
  } else {
    root.removeAttribute("data-theme");
  }
};

// Initialize theme
onMounted(() => {
  const saved = localStorage.getItem(STORAGE_KEY);

  if (saved === "dark" || saved === "light") {
    theme.value = saved;
  } else {
    // Follow system preference
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    theme.value = prefersDark ? "dark" : "light";

    // Watch system changes if no saved preference
    const mq = window.matchMedia("(prefers-color-scheme: dark)");
    mq.addEventListener("change", (e) => {
      if (!localStorage.getItem(STORAGE_KEY)) {
        theme.value = e.matches ? "dark" : "light";
      }
    });
  }

  applyTheme(theme.value);
});

// Persist theme changes
watch(theme, (val) => {
  applyTheme(val);
  localStorage.setItem(STORAGE_KEY, val);
});

// Toggle handler
const toggleTheme = () => {
  theme.value = theme.value === "dark" ? "light" : "dark";
};
</script>

<template>
  <button
    @click="toggleTheme"
    class="w-10 h-4 bg-gray-300 dark:bg-gray-700 rounded-full flex items-center p-0 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
    :aria-checked="theme === 'dark'"
    role="switch"
  >
    <span
      class="w-4 h-4 bg-white dark:bg-gray-900 rounded-full shadow-md transform transition-transform duration-300 flex items-center justify-center text-[9px]"
      :class="{ 'translate-x-[25px]': theme === 'dark' }"
    >
      {{ theme === "dark" ? "🌙" : "☀️" }}
    </span>
  </button>
</template>

<style>
/* Theme variables */
:root {
  --bg: #ffffff;
  --text: #111827;
}

[data-theme="dark"] {
  --bg: #0b1220;
  --text: #e6eef8;
}

body {
  background-color: var(--bg);
  color: var(--text);
  transition: background 0.3s, color 0.3s;
}
</style>
