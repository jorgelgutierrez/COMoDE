<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>COMoDE</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

    <script type="text/javascript">
        function validarFormulario() {
            var txttitulo = document.getElementById('titulo').value;
            var txtmensaje = document.getElementById('mensaje').value;
            if (txttitulo == "" || txtmensaje == "") { 
                        alert("Llenar Completamente el Formulario");
                        return false; // Si no se verifican las condiciones no se enviará el formulario
                    } else { 
                            alert("Notificacion Enviada");
                            return true; // Si se verifican las condiciones enviar formulario
                            }
        }
    </script>

</head>
<ul>
        <li><a href="Formulario_Enviar_Notificaciones.php" class="active">Enviar Notificaciones</a></li>
    </ul>

<body>

    
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form name="formulario" class="form-basic" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validarFormulario()">

            <div class="form-title-row">
                <h1>Envio de Notificaciones COMoDE</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Titulo:</span>
                    <input type="text" name="titulo" id="titulo">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Mensaje:</span>
                    <input type="text" name="mensaje" id="mensaje">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Elegir a quien enviar:</span>
                    <select name="tema">
                        <option>Todos</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Enviar Notificacion</button>
            </div>

        </form>

    </div>

</body>

</html>
