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
import usermanagement from './components/admin/UserManagement.vue';
createApp({
    components: {
        booking,
        usermanagement
    }
}).mount('#booking')