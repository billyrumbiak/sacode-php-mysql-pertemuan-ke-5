<?php 
$motor = $_GET['motor'];

switch($motor){
    case "Honda Beat" : 
        echo "Sa punya Motor Honda Beat";
        break;
    case "Yamaha" :
        echo "Sa punya Motor Yamaha";
        break;
    case "Suzuki" :
        echo "Sa punya Motor Suzuki";
        break;
    default :
        echo"Sa belum punya motor";
        break;
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

    <form action="" method="get">
        <select name="motor" id="">
            <option value="Honda Beat">Beat</option>
            <option value="Yamaha">Jupiter</option>
            <option value="Suzuki">Vario</option>
            <option value="Suzuki">Belum ada</option>
        </select>

    <button type="submit">Cek Motor</button>
    </form>
    
 </body>
 </html>