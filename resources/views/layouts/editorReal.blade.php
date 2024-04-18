<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makena</title>
  <link rel="shortcut icon" href="images/logo/makenaMiniIcon.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
</head>
<body>
  <canvas id="canvas" width="400" height="500"></canvas>
  <input type="file" id="imageLoader" />
  <button onclick="cambiarOrden()">Ajustar a la Funda</button>
  <button id="btn">Generar imagen</button>
  <button onclick="enviarAlFondo()">Modificar imagen</button>
  <button onclick="agregarTexto()">Agregar Texto</button>
  <label for="colorPicker">Color del Texto:</label>
  <input type="color" id="colorPicker" oninput="cambiarColorTexto(this.value)">
  <button onclick="cambiarTipoDeLetra()">Cambiar Tipo de Letra</button>
  <button onclick="aumentarTamano()">Aumentar Tamaño</button>
  <button onclick="reducirTamano()">Reducir Tamaño</button>
  <button onclick="window.location.href='/'">Ir a la página principal</button>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script>
    var canvas = new fabric.Canvas('canvas');
    var fondoImg, userImg, texto;
    var tiposDeLetra = ['Arial', 'Times New Roman', 'Courier New', 'Verdana', 'Georgia'];
    var indiceTipoLetra = 0;

    fabric.Image.fromURL('{{ asset('canv1.png') }}', function(bgImg) {
      bgImg.scaleToWidth(canvas.width);
      bgImg.scaleToHeight(canvas.height);
      bgImg.set({
        selectable: false
      });
      canvas.add(bgImg);
      fondoImg = bgImg;
    });

    document.getElementById('imageLoader').addEventListener('change', function(e) {
      var file = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        fabric.Image.fromURL(e.target.result, function(img) {
          if (img.width > 280) {
            img.scaleToWidth(280);
          }
          img.set({
            hasControls: true,
            hasBorders: true,
            selectable: true,
            cornerColor: 'red'
          });

          canvas.add(img);
          userImg = img;
        });
      };

      reader.readAsDataURL(file);
    });

    function cambiarOrden() {
      if (userImg && fondoImg) {
        canvas.remove(fondoImg);
        canvas.remove(userImg);
        canvas.add(fondoImg);
        canvas.add(userImg);
        canvas.sendToBack(userImg);
        canvas.renderAll();
      }
    }

    function enviarAlFondo() {
      if (fondoImg) {
        canvas.sendToBack(fondoImg);
        canvas.renderAll();
      }
    }

    function descargarImagenSubida() {
      if (userImg) {
        const dataURL = userImg.toDataURL("image/png");
        const a = document.createElement("a");
        a.download = "imagen_subida";
        a.href = dataURL;
        a.click();
      }
    }

    function agregarTexto() {
      texto = new fabric.Textbox('Texto aquí', {
        left: 50,
        top: 50,
        width: 200,
        fontSize: 20,
        fontFamily: tiposDeLetra[indiceTipoLetra],
        fill: 'black',
        selectable: true,
        hasControls: true,
        editable: true
      });

      canvas.add(texto);
      canvas.setActiveObject(texto);
      canvas.requestRenderAll();
    }

    function cambiarTipoDeLetra() {
      if (canvas.getActiveObject() && canvas.getActiveObject().isType('textbox')) {
        var obj = canvas.getActiveObject();
        indiceTipoLetra = (indiceTipoLetra + 1) % tiposDeLetra.length;
        obj.set("fontFamily", tiposDeLetra[indiceTipoLetra]);
        canvas.requestRenderAll();
      }
    }

    function cambiarColorTexto(color) {
      if (canvas.getActiveObject() && canvas.getActiveObject().isType('textbox')) {
        var obj = canvas.getActiveObject();
        obj.set("fill", color);
        userImg && userImg.set("fill", color);
        canvas.requestRenderAll();
      }
    }

    function aumentarTamano() {
      cambiarTamanoTexto(2);
    }

    function reducirTamano() {
      cambiarTamanoTexto(-2);
    }

    function cambiarTamanoTexto(delta) {
      if (canvas.getActiveObject() && canvas.getActiveObject().isType('textbox')) {
        var obj = canvas.getActiveObject();
        var fontSize = obj.get("fontSize");
        obj.set("fontSize", fontSize + delta);
        canvas.requestRenderAll();
      }
    }

    btn.onclick = () => {
      const dataURL = canvas.toDataURL("image/png");
      const a = document.createElement("a");
      a.download = "composicion";
      a.href = dataURL;
      a.click();
      descargarImagenSubida();
    };
  </script>
  <div id="app">
    <ejemplo-componente></ejemplo-componente>
  </div>
  <h3>hola</h3>
</body>
</html>
