<?php
  // Configación de la página
  $titulo = "Errores Comunes de las Cajas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <script defer src="https://cdn.jsdelivr.net/npm/atropos/atropos.min.js"></script>
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.atropos').forEach(el => {
                Atropos({ el: el });
            });
        });
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #3a0ca3;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: #560bad;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            display: inline-block;
        }
        nav ul li a:hover {
            background-color: #7209b7;
            border-radius: 5px;
        }
        .section-ripley {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        footer {
            background-color: #3a0ca3;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .accordion {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
        .accordion-item {
            border-bottom: 1px solid #ccc;
        }
        .accordion-header {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 10px;
            background-color: #f9f9f9;
        }
        .accordion-header img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 5px;
        }
        .accordion-content {
            display: none;
            padding: 10px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $titulo; ?></h1>
    </header>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                <img src="error1.jpg" alt="Error 1">
                <span>Error 1: Conexión fallida</span>
            </div>
            <div class="accordion-content">
                <p><strong>Descripción:</strong> No se puede conectar al servidor.</p>
                <p><strong>Solución:</strong> Verifica la conexión a internet y reinicia el router.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                <img src="error2.jpg" alt="Error 2">
                <span>Error 2: Archivo no encontrado</span>
            </div>
            <div class="accordion-content">
                <p><strong>Descripción:</strong> El archivo solicitado no existe en el directorio.</p>
                <p><strong>Solución:</strong> Verifica la ruta del archivo y asegúurate de que esté en la carpeta correcta.</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Errores Comunes de las Cajas</p>
    </footer>
    <script>
        function toggleAccordion(element) {
            var content = element.nextElementSibling;
            content.style.display = (content.style.display === "block") ? "none" : "block";
        }
    </script>
</body>
</html>

