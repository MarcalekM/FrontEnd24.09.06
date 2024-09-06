<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="" method="post">
        <label for="second">Add meg a hét napját:</label>
        <input type="text" name="second" id="">
        <button>Ellenőrizd</button><br><br>
    </form>
    <?php
        if(isset($_POST['second'])){
            $day = $_POST['second'];
            switch($day){
                case "hétfő":
                    echo "Hét eleje.<br>";
                break;
                case "kedd":
                    echo "Hét eleje.<br>";
                break;
                case "szerda":
                    echo "Hét közepe.<br>";
                break;
                case "csütörtök":
                    echo "Hét közepe.<br>";
                break;
                case "péntek":
                    echo "Hét közepe.<br>";
                break;
                case "szombat":
                    echo "Hét vége.<br>";
                break;
                case "vasárnap":
                    echo "Hét vége.<br>";
                break;
            }
        };
    ?>
</body>
</html>