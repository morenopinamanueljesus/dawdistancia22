<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        /**
         * @author Manuel Jesús Moreno Piña
         */

        /**
         * Función saludar
         * Devuelve un saludo, pasandole el nombre y apellidos.
         * @param  mixed $nombre
         * @param  mixed $apellidos
         * @return string saludo
         */
        function saludar($nombre, $apellidos)
        {
            return 'Hola ' . $nombre . ' ' . $apellidos . ". Encantado de saludarte.";
        }

        /**
         * Función fechaYHora
         *  Devuelve fecha y hora actual
         * @return string fecha y hora actual
         */
        function fechaYHora()
        {
            //Formato AAAA-MM-DD HH-MM-SS
            return date("Y-m-d H:i:s"); 
        }
    ?>
    <h1><?php print(saludar("Manuel Jesús", "Moreno Piña")) ?></h1>
    <h2><?php print(fechaYHora()) ?></h2>
    <p>Prueba de subida de git a github</p>
</body>
</html>
