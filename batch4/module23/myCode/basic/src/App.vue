<script setup>
  
import {getData} from "./data/data.js";

const images = [
      {
        image :"https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg",
        'title':"dird one",
        'descriptions':"https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg"
      },
      {
        image :"https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg",
        'title':"dird one",
        'descriptions':"https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg"
      },
      {
        image :"https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg",
        'title':"dird one",
        'descriptions':"https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg"
      }

  ];


</script>

<template>
  <h2>Hello</h2>
  <h2>{{getData.firstName}} - {{getData.lastName}}</h2>
  <h2>{{getData.tasks[1]}}</h2>
  <div>
    <img v-bind:title="images[0].title" src="https://ecologytraining.co.uk/wp-content/uploads/2021/07/Birds-for-Beginners-450x336.jpg">
  </div>
</template>

<style scoped>

</style>
