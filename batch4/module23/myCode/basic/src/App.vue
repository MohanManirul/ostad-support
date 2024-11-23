<script setup>
  const message = "hello"
  const dara = "hello"
  function getData(){
    const data = new Date();
    return data.toLocaleTimeString();
  }
</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData()}}</h2>
</template>

<style scoped>

</style>
