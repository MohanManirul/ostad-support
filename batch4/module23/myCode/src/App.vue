<script setup>
  
import {getData} from "./data/data.js";

const number = 16 ;

const animal = "Tiger" ;
const searchUrl = 'https://www.pexels.com/search/'
</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData.firstName}} - {{getData.lastName}}</h2>
  <h2>{{getData.tasks[1]}}</h2>
  <div>    
    <p>{{ number }} / 4 = {{ number/4 }}</p>
    <p>{{ number }}  is {{ number %2 ==0 ? "Even" : "Odd" }}</p>
    <p>
      <a :href="searchUrl+animal">Search for {{ animal }}</a>
    </p>
    <p>
      <a :href="`https://www.pexels.com/search/${animal.toLowerCase()}`">Search for {{ animal }}</a>
    </p>
  </div>
</template>

<style scoped>

</style>
