<?php
        $usuario = "root";
        $clave = "root";
        $hostname = "localhost";

        //Conexión a la base de datos
        $dbhandle = mysql_connect($hostname, $usuario, $clave)
        or die("No me puedo conectar a MySQL...");
        echo "Me he conectado a MySQL de forma correcta...<br>";

        //Seleccionar la base de datos para trabajar
        $selected = mysql_select_db("cita",$dbhandle) or die("No puedo seleccionar la BD cita<br>");

        //Ejecutar una consulta SQL y devolver registros...
        $result = mysql_query("SELECT * from usuario");

        //Mostrar los registros...
        echo "Mostrando todos los registros de la tabla usuario...<br>";
        while ($row = mysql_fetch_array($result)) {
                echo "Email: " . $row{'email'} . ", password:" . $row{'password'} . "<br>";
        }
        //Cerrar la conexión
        mysql_close($dbhandle);
?>