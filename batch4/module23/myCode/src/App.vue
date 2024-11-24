<script setup>
  
import {getData} from "./data/data.js";

const number = 16 ;

const animal = "Tiger" ;
const searchUrl = '<strong>https://www.pexels.com/search/</strong>'
const date = '<strong>30 th july 2024</strong>'

const weather = 'pc'

</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData.firstName}} - {{getData.lastName}}</h2>
  <h2>{{getData.tasks[1]}}</h2>
  <div>    
    <p>{{ number }} / 4 = {{ number/4 }}</p>
    <p>{{ number }}  is {{ number %2 ==0 ? "Even" : "Odd" }}</p>
    <p>
      <a :href="searchUrl+animal"> Search for {{ animal }}</a>
    </p>
    <p>
      <a :href="`https://www.pexels.com/search/${animal.toLowerCase()}`">Search for {{ animal }}</a>
    </p>
    <p v-html="date"></p>
    <p v-show="weather ==='s'">Sunny</p>
    <p v-show="weather ==='pc'">partly sunny</p>
    <p v-show="weather ==='r'">rainy</p>
    <p v-show="weather ==='t'">thunder storm</p>
    <p v-show="weather ==='tff'">nothing</p>

    <div v-if="weather ==='s'">
      <h1>group 1</h1>
      <h1>group 1</h1>
      <h1>group 1</h1>
      <h1>group 1</h1>
    </div>


    <template v-if="weather ==='pc'">
      <h1>group pc</h1>
      <h1>group pc</h1>
      <h1>group pc</h1>
      <h1>group pc</h1>
    </template>


  </div>
</template>

<style scoped>

</style>
 
