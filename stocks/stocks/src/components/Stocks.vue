<template>
  <div class="cont-stocks">
    <stock-component class="box" v-for="stock in getStocks" :stock="stock" :key="stock.id"></stock-component>
  </div>
</template>

<script>
import stockComponent from './stock-component.vue'
export default {
    components: {
        stockComponent
    },
    data: function() {
      return {
        
      }
    },
    computed: {
      getStocks() {
        return this.$store.getters.getStocks;
      }
    }
  }
</script>

<style>
    .cont-stocks {
    width: 50%;
}
</style>
