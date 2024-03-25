// app.js
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import TopicTableComponent from './components/TopicTableComponent.vue';
import SamComponent from './components/SamComponent.vue';
import ExampleComponent from './components/ExampleComponent.vue';
import LeadComponent from './components/LeadComponent.vue';

// Create the Vue Router instance
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/admin/vue', component: ExampleComponent },
        { path: '/admin/vue/examp', component: ExampleComponent },
        { path: '/admin/vue/sam', component: SamComponent },
        { path: '/admin/vue/stand', component: TopicTableComponent },
        { path: '/admin/vue/lead', component: LeadComponent },
        // Add more routes as needed for other pages
    ],
});

const app = createApp({
    // Options
});
app.use(router);
// app.component('toptab-component', TopicTableComponent);
// app.component('sam-component', SamComponent);

app.mount('#app');

