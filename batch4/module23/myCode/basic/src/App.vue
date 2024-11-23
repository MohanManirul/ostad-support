<script setup>
  
  const  getData = {
      firstName : "kushiara",
      lastName : "Nodi",
      tasks : [1,2,3,4,5,6,7,8,9]
  }
</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData.firstName}} - {{getData.lastName}}</h2>
  <h2>{{getData.tasks[1]}}</h2>
</template>

<style scoped>

</style>
