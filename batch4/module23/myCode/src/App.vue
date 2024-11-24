<script setup>
  
import {getData} from "./data/data.js";

const number = 16 ;

const animal = "Tiger" ;
const searchUrl = '<strong>https://www.pexels.com/search/</strong>'
const date = '<strong>30 th july 2024</strong>'

const weather = 'rdd'

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
    <p v-html="date"></p>
    <p v-if="weather ==='s'">Sunny</p>
    <p v-else-if="weather ==='pc'">partly sunny</p>
    <p v-else-if="weather ==='r'">rainy</p>
    <p v-else-if="weather ==='t'">thunder storm</p>
    <p v-else>nothing</p>
  </div>
</template>

<style scoped>

</style>
 
