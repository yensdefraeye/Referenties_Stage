<template>
  <header>
    <nav class="navbar">
      <router-link to="/" class="navbar-brand"><a>Stock Trader</a></router-link>
      <div id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link to="/portfolio" class="nav-link"><a>Portfolio</a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="/stocks" class="nav-link"><a>Stocks</a></router-link>
          </li>
        </ul>
        <ul class="navbar-toolbar">
          <li class="nav-item">
            <a class="nav-link" href="#" v-on:click="endDay">End Day</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" v-on:click="saveData">Save</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" v-on:click="loadData">Load</a>
          </li>
          <li class="static-item">
            Funds: {{getFunds | toCurrencyNotation}}
          </li>
        </ul>
      </div>
    </nav>
  </header>
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
      },
      getStocks(){
        return this.$store.getters.getStocks;
      },
      getTrades(){
        return this.$store.getters.getTrades;
      }
    },
    methods: {
      endDay: function(state, payload){
        var random = Math.round((Math.random()*20)-10);
        this.$store.commit('endDay',{payload: random});
      },   
      saveData: function(){
        console.log('Je data wordt gesaved !');
        var states = {stocks: this.getStocks, trades: this.getTrades, funds: this.getFunds };

        this.$http.post('http://localhost:3000/stocks', { 'stocks': JSON.stringify(states) }, {
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
        }).then(response => {
          console.log(response);
        }, error => {
          console.log(error);
        });
      },
      loadData: function(){
        console.log('Je data wordt opgehaald !');

        this.$http.get('http://localhost:3000/stocks/last')
        .then(response => {
          return response.json();
        })
        .then(data => {
          var states = JSON.parse(data.stocks);
          this.$store.commit('changeState',{payload: states})
        });
      }
    }
  }
</script>


<style lang="scss" scoped>
  $transition: all .25s cubic-bezier(1,.25,0,.75) 0s;

  header {
    * {
      padding: 0;
      margin: 0;
    }

    .navbar {
      background-color: #f8f9fa;
      padding: 8px 16px;

      .navbar-brand {
        display: inline-block;
        width: 150px;
        text-decoration: none;
        color: #555;
        font-size: 20px;
      }

      #navigation {
        display: inline-block;
        width: calc(100% - 150px);

        .navbar-nav, .navbar-toolbar {
          display: inline-block;

          .nav-item.active a:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #555;
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
          }

          li {
            padding: 8px;
            display: inline-block;

            a {
              text-decoration: none;
              color: #777;
              position: relative;

              &:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 2px;
                bottom: -5px;
                left: 0;
                background-color: #555;
                visibility: hidden;
                -webkit-transform: scaleX(0);
                transform: scaleX(0);
                -webkit-transition: $transition;
                transition: $transition;
              }
              &:hover:before {
                visibility: visible;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
              }
            }
          }

          li + li {
            margin-left: 10px;
          }
        }

        .navbar-toolbar {
          float: right;
        }

        .static-item {
          color: #555;
        }
      }
    }
  }
</style>
