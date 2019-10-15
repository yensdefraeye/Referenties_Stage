<template>
  <div class="cont-port">
        <portfolio-component v-for="trade in getTrades" :trade="trade" :key="trade.id"></portfolio-component>
  </div>
</template>

<script>
import portfolioComponent from './portfolio-component.vue'
  export default {
      components: {
        portfolioComponent
    },
    data: function() {
      return {
        
      }
    },
    computed: {
      getTrades() {
        return this.$store.getters.getTrades;
      }
    }
  }
</script>

<style>
.cont-port {
    width: 50%;
}
</style>
