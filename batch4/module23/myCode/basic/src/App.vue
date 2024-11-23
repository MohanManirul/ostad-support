<script setup>
  
import {getData} from "./data/data.js";

</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData.firstName}} - {{getData.lastName}}</h2>
  <h2>{{getData.tasks[1]}}</h2>
</template>

<style scoped>

</style>
