import './bootstrap';

import mask from '@alpinejs/mask';
import morph from '@alpinejs/morph';
import persist from '@alpinejs/persist';
import Alpine from 'alpinejs';

Alpine.plugin(mask);
Alpine.plugin(persist);
Alpine.plugin(morph);

Alpine.store('sidebar', {
    isOpen: Alpine.$persist(true).as('sidebarIsOpen'),
    close: function () {
        this.isOpen = false;
    },
    open: function () {
        this.isOpen = true;
    },
    toggle: function () {
        this.isOpen = !this.isOpen;
    },
});

window.Alpine = Alpine;

Alpine.start();
