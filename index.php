<html lang="es">
    <head>
        <title>Primera tarea</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            $fecha = date("N");
            switch ($fecha){
                case 1:
                    echo "Hoy es Lunes";
                    break;
                case 2:
                    echo "Hoy es Martes";
                    break;
                case 3:
                    echo "Hoy es Miercoles";
                    break;
                case 4:
                    echo "Hoy es Jueves";
                    break;
                case 5:
                    echo "Hoy es Viernes";
                    break;
                case 6:
                    echo "Hoy es Sabado";
                    break;
                case 7:
                    echo "Hoy es Domingo";
                    break;
            }

        ?>
    </body>
</html>
