import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3';
import NProgress from 'nprogress';
import { router } from '@inertiajs/vue3';

router.on('start', () => NProgress.start());
router.on('finish', () => NProgress.done());

createInertiaApp({
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        delay: 5000,

        // The color of the progress bar...
        color: 'red',

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
      },
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
});

