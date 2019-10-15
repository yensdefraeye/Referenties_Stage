import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router'
import { store } from './store/store';
import { routes } from '../routes';
import Vuex from 'vuex';
import VueResource from 'vue-resource';

Vue.config.productionTip = false;

Vue.use(VueRouter)
Vue.use(Vuex)
Vue.use(VueResource);

const router = new VueRouter({
  routes
});

//Global Filters
Vue.filter('toCurrencyNotation', function(value) {
  return '€ ' + (value).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');;
});

new Vue({
  render: h => h(App),
  router,
  store
}).$mount('#app');
