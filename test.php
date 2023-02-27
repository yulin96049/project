<?php include("head.php"); ?>


<?php
    if(isset($_GET["name"])){
        switch($_GET["name"]){
            case "grava1":
                echo "芭樂1<br>";
                break;
            case "grava2":
                echo "芭樂2<br>";
                break;
            case "grava3":
                echo "芭樂3<br>";
                break;
            case "coffee1":
                echo "咖啡1<br>";
                break;
            case "coffee2":
                echo "咖啡2<br>";
                break;
            default:
                echo "預設";
                break;
        }
    }
    else echo "沒有東西<br>";
?>

<?php include("footer.php"); ?>

<?php
    if(isset($_GET["name"])){
        if($_GET["name"] == "grava1"){
            echo "芭樂1<br>";
        }
        
        elseif ($_GET["name"] == "grava2"){
            echo "芭樂2<br>";
        }

        elseif ($_GET["name"] == "grava3"){
            echo "芭樂3<br>";
        }

        elseif ($_GET["name"] == "coffee1"){
            echo "咖啡1<br>";
        }

        elseif ($_GET["name"] == "coffee2"){
            echo "咖啡2<br>";
        }
    }
    else echo "沒有東西";
?>
