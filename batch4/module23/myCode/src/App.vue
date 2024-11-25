<script setup>
  
import {getData} from "./data/data.js";

const number = 16 ;

const animal = "Tiger" ;
const searchUrl = '<strong>https://www.pexels.com/search/</strong>'
const date = '<strong>30 th july 2024</strong>'

const weather = 'pc'

const Btn = "btn btn-success"
const BtnDanger = "btn btn-danger"
const Boolean = false
</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData.firstName}} - {{getData.lastName}}</h2>
  <h2>{{getData.tasks[1]}}</h2>
  <div>  


    <template v-if="weather ==='pc'">
      <div class="container">
        <h1 class="text-center">Bootstrap in Vue with NPM</h1>
        <button :class="Btn" >Submit</button>
        <button :class="[Boolean?'btn btn-success':'btn btn-danger', Boolean?'fw-bold':'text-muted']" >Submit</button>
    </div>
    </template>
<!-- template sudhu matro if er jonno project-files-structure preparing-our-project-for-work -->

  </div>
</template>

<style scoped>

</style>

 
