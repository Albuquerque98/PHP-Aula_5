<!DOCTYPE html>
<html>
    <body>
        <?php
            //Radio Button
            echo "<b>Seu sistema operacional é: </b>" , $_POST["sistema"] , "<br><br>";

            //Checkbox
            if(isset($_POST["numeros"]))
            {
                echo "<b>Os números de sua preferência são:</b><BR>";

                //Faz loop pelo array dos numeros
                foreach ($_POST["numeros"] as $numero)
                {
                    echo "- " , $numero ,"<BR><br>";
                }
            }
            else
            {
                echo "<b>Você não escolheu número preferido!</br><br><br>";
            }

            echo "<b>Seu processador é: </br>" , $_POST["processador"] , "<BR>";
        ?>
    </body>
</html>