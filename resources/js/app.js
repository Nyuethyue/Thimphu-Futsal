require('./bootstrap');

// Vue JS
import { createApp, CreateApp } from 'vue';
import common from './common';

import home from './components/Home.vue';

createApp({
    components: {
        home
    }
}).mixin(common).mount('#app')


import booking from './components/admin/Booking.vue';
import usermanagement from './components/admin/UserManagement.vue';
createApp({
    components: {
        booking,
        usermanagement
    }
}).mixin(common).mount('#booking')