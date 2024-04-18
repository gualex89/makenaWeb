<!-- resources/js/components/EjemploComponente.vue -->

<template>
    <div>
      <h1>Ejemplo de Componente Vue</h1>
      <p>{{ mensaje }}</p>
    </div>
</template>
  
  <script>
  export default {
    data() {
      return {
        mensaje: '¡Hola desde a todos Vue! lo logre'
      };
    }
  }
  </script>
  
  <style>
  /* Estilos del componente (opcional) */
  </style>
  