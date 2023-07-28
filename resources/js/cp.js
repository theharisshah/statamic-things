/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */



import Myfield from './components/fieldtypes/Myfield.vue'

Statamic.booting(() => {
    Statamic.$components.register('my-field', Myfield);
});


