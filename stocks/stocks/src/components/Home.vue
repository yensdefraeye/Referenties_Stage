<template>
  <div class="container-home">
    <h1>Trade or View your portfolio</h1>
    <p>You may Save or Load your data.</p>
    <p>Click on 'End Day' to begin a New Day.</p>
    <h2> Your Funds : {{getFunds | toCurrencyNotation}}.</h2>
  </div>
</template>

<script>
import { store } from '../store/store';

  export default {
    data: function() {
      return {

      }
    },
    computed: {
        getFunds(){
            return this.$store.getters.getFunds;
        }
    },
  }
</script>

<style>
    .container-home {
        border-style: solid;
        border-color: gray;
        padding: 10px;
        margin-top: 15px;
        border-width: 1px;
    }

    h2 {
        border-top-style: solid;
        border-color: gray;
        padding-top: 5px;
        border-width: 1px;
    }
</style>
