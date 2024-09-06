<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24.09.06</title>
</head>
<body>
    <form action="" method="post">
        <label for="first">Add meg az életkorod:</label>
        <input type="number" name="first" id="">
        <button>Ellenőrizd</button><br><br>
        <label for="second">Add meg a hét napját:</label>
        <input type="text" name="second" id="">
        <button>Ellenőrizd</button><br><br>
        <label for="third">Add meg a számot:</label>
        <input type="number" name="third" id="">
        <button>Ellenőrizd</button><br><br>
        <label for="fourth1">Add meg az első számot:</label>
        <input type="number" name="fourth1" id=""><br>
        <label for="fourth2">Add meg a második számot:</label>
        <input type="number" name="fourth2" id="">
        <br><button>Ellenőrizd</button><br><br>
        <label for="fifth">Add meg a számot:</label>
        <input type="number" name="fifth" id="">
        <button>Ellenőrizd</button><br><br>
        <label for="sixth">Add meg a számot:</label>
        <input type="number" name="sixth" id="">
        <button>Ellenőrizd</button><br><br>
        <label for="seventh">Add meg a pontszámot:</label>
        <input type="number" name="seventh" id="">
        <button>Ellenőrizd</button><br><br>
        <label for="eighth1">Add meg a havi bevételt:</label>
        <input type="number" name="eight1" id=""><br>
        <label for="eighth2">Add meg a havi kiadást:</label>
        <input type="number" name="eight2" id="">
        <br><button>Ellenőrizd</button><br>
    </form>

    <?php
        if(isset($_POST['first'])){
            $age = $_POST['first'];
            if($age < 18) {
                echo "Fiatalkorú (18 év alatti).<br>";
            }
            elseif (18 < $age and $age < 65) {
                echo "Felnőtt (18 és 65 közötti).<br>";
            }
            else{
                echo "Nyugdíjas (65 év feletti).<br>";
            };
        };
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
        if(isset($_POST['third'])){
            $result = "";
            $number = $_POST['third'];
            if($number % 2 == 0){
                $result = $number . " páros szám";
            }
            else{
                $result = $number . " nem páros szám";
            }
            if($number % 5 == 0){
                $result = $result . " osztható 5-tel"; 
            }
            else{
                $result = $result . " nem osztható 5-tel";
            }
            echo $result;
        };
    ?>
</body>
</html>