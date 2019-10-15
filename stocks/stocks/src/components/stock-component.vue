<template>
  <div class="container">
    <p class="title">{{stock.naam}} (price: {{stock.prijs}})</p>
    <input type="text" name="Quantity" value="Quantity" v-model="quantitiy"><br>
    <button type="button" @click="buyStock(stock)">buy</button>

  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        quantitiy: null
      }
    },
    methods: {
      buyStock: function(stock){
        this.$store.commit('buyStock',{payload: stock, quantity: this.quantitiy})
      }
    },
    props: {
      stock: Object
    }
  }
</script>

<style>
    .title {
        background-color: rgb(118, 167, 133) ;
        padding: 5px;
        color: white;
    }
    button {
        border-radius: 5px;
        width: 70px;
    }

</style>
