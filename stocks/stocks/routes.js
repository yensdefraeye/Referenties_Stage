import Home from './src/components/Home';
import Stocks from './src/components/Stocks';
import Portfolio from './src/components/Portfolio';

export const routes = [
  { path: '/', component: Home },
  { path: '/stocks', component: Stocks },
  { path: '/portfolio', component: Portfolio }
];