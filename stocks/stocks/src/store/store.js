import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({
    state: {
        stocks: [
            { id: 'AAPL', naam: 'Apple inc.', prijs: 2000 },
            { id: 'GOOG', naam: 'Alphabet inc.', prijs: 1300 },
            { id: 'MSFT', naam: 'Microsoft Corporation', prijs: 50 },
            { id: 'SAMS', naam: 'Samsung Electroniks', prijs: 220 },
            { id: 'BMW', naam: 'Brol Met Wielen Comp.', prijs: 33 },
            { id: 'VLV', naam: 'Volvo Voitures', prijs: 362 },
            { id: 'HWW', naam: 'HOE-WA-WEI Mobiles', prijs: 100 },
            { id: 'CHCH', naam: 'Chiqita Gele Bananen', prijs: 99 },
        ],
        trades: [
            { id: 'Dovy', hoeveelheid: 7, aankoopprijs: 140, stock_id: 'Dov' },
            { id: 'Bonzai', hoeveelheid: 9, aankoopprijs: 456, stock_id: 'Bonz' },
            { id: 'Bassleader', hoeveelheid: 20, aankoopprijs: 777, stock_id: 'BSSLDR' },
            { id: 'VeVo', hoeveelheid: 1, aankoopprijs: 2, stock_id: 'VV' },
        ],
        funds: 100000000
    },
    mutations: {
        buyStock (state, payload){
            //stock toevoegen aan trades, funds verminderen
            state.trades.push({id: payload.payload.naam, hoeveelheid: payload.quantity, aankoopprijs: payload.payload.prijs, stock_id: payload.payload.id}); 
            state.funds -= payload.payload.prijs;  
        },
        selTrade (state, payload){
            //zoek de payload in de Trades
            if(state.trades.find(x => x.stock_id === payload.payload.stock_id) != null){
                //hoeveelheid verminderen en funds verhogen
                state.trades.find(x => x.stock_id === payload.payload.stock_id).hoeveelheid -= payload.quantity;
                state.funds += (payload.payload.aankoopprijs * payload.quantity);
                if(state.trades.find(x => x.stock_id === payload.payload.stock_id).hoeveelheid <= 0){
                    var index = state.trades.indexOf(state.trades.find(x => x.stock_id === payload.payload.stock_id));
                    state.trades.splice(index, 1);
                }
            }
        },
        endDay(state, payload){
            state.trades.forEach(element => {
                element.aankoopprijs += payload.payload;
            });
        },
        changeState(state, payload){
            //plaats opgehaalde data in state
            console.log(payload.payload);
            this.state.funds = payload.payload.funds;
            this.state.stocks = payload.payload.stocks;
            this.state.trades = payload.payload.trades;
        }
    },
    getters: {
        getStocks: state => {
            return state.stocks;
        },
        getTrades: state => {
            return state.trades;
        },
        getFunds: state => {
            return state.funds;
        }
    },
    watch: {
        trades: function(val){
            if(val){
                console.log('hey');
            }
        }
    }
  })