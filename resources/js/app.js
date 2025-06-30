import Alpine from 'alpinejs';

// Alpine plugins
import mask from '@alpinejs/mask';
import morph from '@alpinejs/morph';
import persist from '@alpinejs/persist';
Alpine.plugin(mask);
Alpine.plugin(persist);
Alpine.plugin(morph);

// Expose Alpine globally
window.Alpine = Alpine;

// Custom Alpine stores and components
import registerComponents from './alpine/components';
import registerStores from './alpine/stores';
registerStores(Alpine);
registerComponents(Alpine);

Alpine.start();

// Basecoat components
import './basecoat/dropdown-menu.js';
