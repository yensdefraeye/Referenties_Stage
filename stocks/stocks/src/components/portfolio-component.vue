<template>
  <div class="comp">
    <p class="title" v-bind:style="{ backgroundColor : aandeelKleur}">{{trade.id}} (price: {{trade.aankoopprijs}} | quantitiy: {{trade.hoeveelheid}})</p>
    <input type="text" name="Quantity" value="Quantity" v-model="quantitiy"><br>
    <button type="button" @click="selTrade(trade)">Sel</button>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        quantitiy: null,
        aandeelKleur: 'orange'
      }
    },
    methods: {
      selTrade: function(trade){
        var hoeveelheidVoorSel = trade.hoeveelheid;
        this.$store.commit('selTrade',{payload: trade, quantity: this.quantitiy})
        var hoeveelheidNaSel = trade.hoeveelheid;
        this.isHoeveelheidVeranderd(hoeveelheidVoorSel, hoeveelheidNaSel);
      },
      isHoeveelheidVeranderd(voor, na){
        if(voor == na){
          this.aandeelKleur = 'orange';
        } else if(voor < na){
          this.aandeelKleur = 'green';
        } else if(voor > na){
          this.aandeelKleur = 'red';
        }
      }
    },
    props: {
      trade: Object
    },
    watch: {
      trade: function(val){
        if(val.aankoopprijs){
          console.log("hey");
        }
      }
    }
  }
</script>

<style>
  .title {
    padding: 5px;
    color: white;
  }
  button {
    border-radius: 5px;
    width: 70px;
    float: right;
    margin-top: -20px;
  }
  .green {
    background-color: rgb(118, 167, 133);
  }
  .red {
    background-color: hsl(0, 51%, 53%);
  }
  .orange {
    background-color: hsl(36, 64%, 47%);
  }
  input {
    float: left;
  }

</style>
