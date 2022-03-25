<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo();
PrintNavbar();
?>

<div class="container">
    <div class="row">

        <?php
        //toon messages als er zijn
        $container->getMessageService()->ShowErrors();
        $container->getMessageService()->ShowInfos();

        if ( ! isset( $_GET['car_id']) ) die("Geen car_id opgegeven");
        if ( ! is_numeric( $_GET['car_id']) ) die("Ongeldig argument " . $_GET['car_id'] . " opgegeven");

        $rows = $container->getDBManager()->GetData( "select * from car where car_id=" . $_GET['car_id'] );
        var_dump($rows);
        if ( $rows )
        {
            $row = $rows[0];

            //data to object

            if ($row['car_type'] === 'sports')
            {
                $car = new SportsCar($row);

            } else {
                $car = new FamilyCar($row);
            }


            //get template
            $template = file_get_contents("templates/column_full2.html");

            //merge
            $output = $template;

            //object to array
            $properties = $car->toArray2();
            $properties['name'] = $car->getCarName();

            foreach( $properties as $key => $value )
            {
                if ( $value )
                {
                    var_dump($key);
                    print("<br>");
                    $output = str_replace( "@$key@", $value, $output );
                }

            }

            //output
            print $output;
        }

        ?>

    </div>
</div>

</body>
</html>
