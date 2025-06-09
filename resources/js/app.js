import './bootstrap';

import mask from '@alpinejs/mask'
import morph from '@alpinejs/morph'
import persist from '@alpinejs/persist'
import Alpine from 'alpinejs'

import registerStores from './alpine/stores'
import registerComponents from './alpine/components'

// Plugins.
Alpine.plugin(mask)
Alpine.plugin(persist)
Alpine.plugin(morph)

// Stores.
registerStores(Alpine)

// Components.
registerComponents(Alpine)

window.Alpine = Alpine

Alpine.start()
