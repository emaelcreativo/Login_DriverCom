<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Préstamo de Equipos Electrónicos - DriverCom</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
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
        form {
            display: grid;
            gap: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #4a148c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #7b1fa2;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Préstamo de Equipos Electrónicos</h1>
        <form id="loanForm">
            <div>
                <label for="borrowerName">Nombre del Solicitante:</label>
                <input type="text" id="borrowerName" name="borrowerName" required>
            </div>
            <div>
                <label for="borrowerId">ID del Solicitante:</label>
                <input type="text" id="borrowerId" name="borrowerId" required>
            </div>
            <div>
                <label for="equipmentType">Tipo de Equipo:</label>
                <select id="equipmentType" name="equipmentType" required>
                    <option value="">Seleccione un tipo de equipo</option>
                    <option value="laptop">Laptop</option>
                    <option value="tablet">Tablet</option>
                    <option value="projector">Proyector</option>
                    <option value="camera">Cámara</option>
                    <option value="other">Otro</option>
                </select>
            </div>
            <div>
                <label for="equipmentId">ID del Equipo:</label>
                <input type="text" id="equipmentId" name="equipmentId" required>
            </div>
            <div>
                <label for="loanDate">Fecha de Préstamo:</label>
                <input type="date" id="loanDate" name="loanDate" required>
            </div>
            <div>
                <label for="returnDate">Fecha Estimada de Devolución:</label>
                <input type="date" id="returnDate" name="returnDate" required>
            </div>
            <div>
                <label for="purpose">Propósito del Préstamo:</label>
                <textarea id="purpose" name="purpose" rows="3" required></textarea>
            </div>
            <div>
                <button type="submit">Enviar Solicitud de Préstamo</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loanForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Remove any existing error messages
            document.querySelectorAll('.error').forEach(el => el.remove());

            // Validate form fields
            let isValid = true;
            const fields = ['borrowerName', 'borrowerId', 'equipmentType', 'equipmentId', 'loanDate', 'returnDate', 'purpose'];
            
            fields.forEach(field => {
                const input = document.getElementById(field);
                if (!input.value.trim()) {
                    isValid = false;
                    const errorMsg = document.createElement('div');
                    errorMsg.className = 'error';
                    errorMsg.textContent = 'Este campo es requerido.';
                    input.parentNode.appendChild(errorMsg);
                }
            });

            // Additional validation for dates
            const loanDate = new Date(document.getElementById('loanDate').value);
            const returnDate = new Date(document.getElementById('returnDate').value);
            if (returnDate <= loanDate) {
                isValid = false;
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error';
                errorMsg.textContent = 'La fecha de devolución debe ser posterior a la fecha de préstamo.';
                document.getElementById('returnDate').parentNode.appendChild(errorMsg);
            }

            if (isValid) {
                // If the form is valid, you would typically send this data to a server
                // For this example, we'll just log it to the console
                console.log('Formulario enviado:', Object.fromEntries(new FormData(e.target)));
                alert('Solicitud de préstamo enviada con éxito!');
                this.reset();
            }
        });
    </script>
</body>
</html>