<template>
    <div>
      <canvas ref="canvas" width="400" height="500"></canvas>
      <input type="file" @change="handleImageChange" />
      <button @click="cambiarOrden">Ajustar a la Funda</button>
      <button @click="generarImagen">Generar imagen</button>
      <button @click="enviarAlFondo">Modificar imagen</button>
      <button @click="eliminarImagen">Eliminar imagen</button>
      <button @click="girarHorizontalmente">Girar Horizontalmente</button>
    </div>
  </template>
  
  <script>
  import { fabric } from 'fabric';
  
  export default {
    data() {
      return {
        canvas: null,
        fondoImg: null,
        userImg: null,
      };
    },
    mounted() {
      this.canvas = new fabric.Canvas(this.$refs.canvas);
      this.initBackgroundImage();
    },
    methods: {
      initBackgroundImage() {
        try {
          const imageUrl = '/assets/canv1.png';
          fabric.Image.fromURL(imageUrl, (bgImg) => {
            bgImg.set({
              width: this.canvas.width,
              height: this.canvas.height,
              selectable: false,
            });
            this.canvas.add(bgImg);
            this.fondoImg = bgImg;
          });
        } catch (error) {
          console.error('Error loading background image:', error);
        }
      },
      handleImageChange(e) {
        const file = e.target.files[0];
        this.loadImage(file);
      },
      loadImage(file) {
        const reader = new FileReader();
  
        reader.onload = (e) => {
          fabric.Image.fromURL(e.target.result, (img) => {
            img.set({
              hasControls: true,
              hasBorders: true,
              selectable: true,
              cornerColor: 'red',
            });
  
            this.canvas.add(img);
            this.canvas.sendToBack(img);
  
            this.userImg = img;
  
            // Al cargar la imagen, ajustar la posición y escala
            this.ajustarImagen();
            this.cambiarOrden()
          });
        };
  
        reader.readAsDataURL(file);
      },
      ajustarImagen() {
        // Lógica para ajustar la posición y escala de la imagen
        // Puedes experimentar con valores específicos o cálculos según tus necesidades
        if (this.userImg) {
          this.userImg.set({
            left: 100,
            top: 100,
            scaleX: 0.5,
            scaleY: 0.5,
          });
  
          // Importante: renderizar el canvas después de realizar ajustes
          this.canvas.renderAll();
        }
      },
      cambiarOrden() {
        if (this.userImg && this.fondoImg) {
          this.canvas.remove(this.fondoImg);
          this.canvas.remove(this.userImg);
  
          this.canvas.add(this.fondoImg);
          this.canvas.add(this.userImg);
  
          this.canvas.sendToBack(this.userImg);
  
          this.canvas.renderAll();
        }
      },
      enviarAlFondo() {
        if (this.fondoImg) {
          this.canvas.sendToBack(this.fondoImg);
          this.canvas.renderAll();
        }
      },
      generarImagen() {
        if (this.userImg) {
          const dataURL = this.userImg.toDataURL('image/png');
          const a = document.createElement('a');
          a.download = 'imagen_subida';
          a.href = dataURL;
          a.click();
        }
  
        const compositeDataURL = this.canvas.toDataURL('image/png');
        const compositeA = document.createElement('a');
        compositeA.download = 'composicion';
        compositeA.href = compositeDataURL;
        compositeA.click();
      },
      eliminarImagen() {
      if (this.userImg) {
        this.canvas.remove(this.userImg);
        this.userImg = null; // Establecer la referencia de la imagen de usuario a null
        this.canvas.renderAll();
      }
      },
      girarHorizontalmente() {
      if (this.userImg) {
        this.userImg.flipX = !this.userImg.flipX; // Invertir el valor actual
        this.canvas.renderAll();
      }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Agrega estilos CSS aquí si es necesario */
  </style>
  