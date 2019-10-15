<template>
  <div id="app">
    <app-header></app-header>
    <router-view></router-view>
  </div>
</template>

<script>
  import Header from './components/Header';

  export default {
    components: {
      'appHeader': Header
    }
  };
</script>

<style>
  #app {
    font-family: Roboto, Helvetica, "sans-serif";
    max-width: 900px;
    margin: 0 auto;
  }
</style>
