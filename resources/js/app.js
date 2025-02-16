import '../css/app.css'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  title: title => title ? `${title} - EXpossible` : 'EXpossible',
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})

// Dark Mode
document.addEventListener('DOMContentLoaded', function () {
  function applyTheme(theme) {
      if (theme === 'dark') {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark');
      }
  }

  const storedTheme = localStorage.getItem('theme');
  if (storedTheme) {
      applyTheme(storedTheme);
  } else {
      const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      applyTheme(userPrefersDark ? 'dark' : 'light');
  }

  const themeToggleBtn = document.querySelector('button[aria-label="Switch to dark theme"]');
  themeToggleBtn.addEventListener('click', function () {
  if (document.documentElement.classList.contains('dark')) {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
  } else {
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
  }
  });
});