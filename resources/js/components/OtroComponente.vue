<template>
    <div>
      
      <p id="uno">{{ mensaje }}</p>
    </div>
</template>
  
  <script>
  export default {
    data() {
      return {
        mensaje: 'Esto es otro componente'
      };
    }
  }
  </script>
  
  <style>
  #uno {
    color: red;
  }
  </style>