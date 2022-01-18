require('./bootstrap');

// Vue JS
import { createApp, CreateApp } from 'vue';

import home from './components/Home.vue';

createApp({
    components: {
        home
    }
}).mount('#app')


import booking from './components/admin/Booking.vue';
createApp({
    components: {
        booking
    }
}).mount('#booking')