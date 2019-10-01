PHP:
<?php

if(isset($_GET['d'])){

    $d = $_GET['d'];

    $pn = "ac5c3f89ae331143eb8a33dc80a6adad"; 

    if($d == $pn){

        echo "dGhlbmV3LnR2OjgwMDA=";

    }else{

        echo "bmljZS50cnkuY29t";

    }

}

?>
