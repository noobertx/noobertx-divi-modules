// External Dependencies

import $ from 'jquery';
// eslint-disable-next-line



// Internal Dependencies
import modules from './modules';

$(window).on('et_builder_api_ready', (event, API) => {
  API.registerModules(modules);
});