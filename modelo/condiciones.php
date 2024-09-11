<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiciones de Uso - DriverCom</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #4a148c;
            border-bottom: 2px solid #4a148c;
            padding-bottom: 10px;
        }
        .breadcrumb {
            margin-bottom: 20px;
            font-size: 0.9em;
        }
        .breadcrumb a {
            color: #4a148c;
            text-decoration: none;
        }
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        .terms-list {
            padding-left: 20px;
        }
        .terms-list li {
            margin-bottom: 15px;
        }
        .download-btn {
            background-color: #4a148c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .download-btn:hover {
            background-color: #7b1fa2;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="breadcrumb" aria-label="breadcrumb">
            <a href="#">Inicio</a> &gt;
            <a href="#">Legal</a> &gt;
            <span aria-current="page">Condiciones de Uso</span>
        </nav>
        
        <h1>Condiciones de Uso</h1>
        
        <p>Bienvenido a la plataforma <strong>DriverCom</strong>. Al hacer uso de este sistema, el usuario acepta los siguientes términos y condiciones:</p>
        
        <ol class="terms-list">
            <li><strong>Uso Exclusivo:</strong> El acceso a la plataforma DriverCom está restringido a empleados autorizados por la empresa.</li>
            <li><strong>Veracidad de los Datos:</strong> Es responsabilidad del usuario garantizar que los datos ingresados sean precisos, completos y estén debidamente verificados.</li>
            <li><strong>Exclusión de Responsabilidad:</strong> DriverCom no asume responsabilidad alguna por errores humanos en la entrada de datos o cualquier consecuencia derivada de dichos errores.</li>
            <li><strong>Modificaciones No Autorizadas:</strong> Cualquier intento de alterar o modificar los datos del sistema sin la autorización pertinente está estrictamente prohibido y puede resultar en sanciones disciplinarias.</li>
            <li><strong>Uso Apropiado:</strong> El mal uso o abuso del sistema será tratado conforme a las políticas internas de la empresa y puede llevar a acciones disciplinarias, incluyendo la suspensión del acceso al sistema.</li>
        </ol>
        
        <p>Al continuar utilizando la plataforma, aceptas cumplir con estos términos y condiciones. Para consultas adicionales o en caso de dudas, contacta al administrador del sistema.</p>
        
        <button class="download-btn" onclick="generarPDF()">Descargar Condiciones de Uso en PDF</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        function generarPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Título
            doc.setFontSize(18);
            doc.setTextColor(74, 20, 140); // Color morado
            doc.text('Condiciones de Uso de DriverCom', 20, 20);

            // Contenido
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0); // Color negro
            const content = document.querySelector('.terms-list').innerText;
            const splitContent = doc.splitTextToSize(content, 170);
            doc.text(splitContent, 20, 40);

            // Pie de página
            doc.setFontSize(10);
            doc.setTextColor(100, 100, 100); // Color gris
            doc.text('Documento generado por DriverCom', 20, 280);

            // Descargar el PDF
            doc.save('Condiciones_de_Uso_DriverCom.pdf');
        }
    </script>
</body>
</html>