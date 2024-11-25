<script setup>
const bgPrimary = 'bg-primary bg-gradient text-white p-3 d-inline-block';
const bgSuccess = 'bg-success bg-gradient text-white p-3 d-inline-block';
const bgWarning = 'bg-danger bg-gradient text-white p-3 d-inline-block';

const colors = {
    borderColor : 'rgba(20,184,166,1)',
    color : 'rgba(19,78,74,1)',
    backgroundColor : 'rgba(19,78,74,1)'
}

const weekend = false ;


</script>

<template>

    <div class="container">
      <div :class="weekend==true?bgPrimary:bgWarning">Primary Gradient</div>
      <div :class="bgSuccess">Success Gradient</div>
      <div :class="bgWarning">Danger Gradient</div>
    </div>

</template>


<style scoped>

</style>

 
