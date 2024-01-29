import { createApp } from 'vue';
import TopicComponent from './components/TopicComponent.vue';

const app = createApp({
    components: {
        'topic-component': TopicComponent
    }
});

app.mount('#app');
