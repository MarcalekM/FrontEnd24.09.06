<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="fourth1">Add meg az első számot:</label>
        <input type="number" name="fourth1" id=""><br>
        <label for="fourth2">Add meg a második számot:</label>
        <input type="number" name="fourth2" id="">
        <br><button>Ellenőrizd</button><br><br>
    </form>
    <?php
        if(isset($_POST['fourth1']) and isset($_POST['fourth2'])){
            $result = "Egyik feltétel sem teljesült";
            $first = $_POST['fourth1'];
            $second = $_POST['fourth2'];
            if($first > 0 and $second < 0){
                $f1 = true;
            }
            if($first > 10 and $second < -5){
                $f2 = true;
            }
            if($f1 and $f2){
                $result = "Minden feltétel teljesült";
            }
            elseif($f1){
                $result = "Csak az első feltétel teljesült";
            }
            elseif($f2){
                $result = "Csak a második feltétel teljesült";
            }
            echo $result;
        }
    ?>
</body>
</html>
