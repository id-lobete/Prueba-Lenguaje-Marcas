<html>

<title>Formulario Teams</title>
<link rel="stylesheet" href="for1.css">

<head>Formulario Teams </head>

<body>

    <?php
        echo $.POST[nombre];
    ?>

    <form>

        <fieldset>
        <p>Nombre</p>
        <input type="text" id="nombre" name="nombre" value="Escribe tu nombre"><br>
        
        <p>Email:</p>
        <input type="text" id="email" name="email" value="ejemplo@ejemplo.es"><br>
        
        <p>Asunto</p>
        <select multiple size="3">
            <option value="1" cols="75">Pedir presupuesto web</option>
            <option value="2" cols="75">Solicitar cita previa</option>  
            <option value="3" cols="75">Otros</option>
        </select>
        
        <p>¿Cómo nos has conocido?</p>
        <input type="checkbox" id="conocer" name="conocer" value="1">Un amigo
        <input type="checkbox" id="conocer" name="conocer" value="2">Googleando
        <input type="checkbox" id="conocer" name="conocer" value="3">Buzoneo
        <input type="checkbox" id="conocer" name="conocer" value="4">Otros
        
        <p>Escribe tu mensaje:</p>
        <textarea name="mensaje" rows="10" cols="75"></textarea> 
        
        <br><input type="checkbox" id="conocer" name="condiciones" value=" ">He leído y acepto el <a href="#">aviso legal y la política de privacidad.</a>
        
        <br><input type="submit" name="consulta" value="Enviar consulta">
        </fieldset>

    </form>
</body>
</html>