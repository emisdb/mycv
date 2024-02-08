// app.js
import { createApp } from 'vue';
import TopicTableComponent from './components/TopicTableComponent.vue';

const app = createApp({
    // Options
});

app.component('toptab-component', TopicTableComponent);

app.mount('#app');

