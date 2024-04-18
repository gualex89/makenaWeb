import { createApp } from 'vue';
import EjemploComponente from './components/EjemploComponente.vue';
import OtroComponente from './components/OtroComponente.vue';
import EditorImagenes from './components/EditorImagenes.vue'

const app = createApp({
    components: {
        EjemploComponente,
        OtroComponente,
        EditorImagenes    
    }
});

app.mount('#app');
