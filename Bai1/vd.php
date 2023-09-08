<?php
    if(isset($_POST["ten"]))   
    {
        $ten=$_POST["ten"];
        $xuat_ten="Chào bạn ".$ten;
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
    <form action="vd.php" method="post">
        <table border="1">
            <tr>
                <td colspan="2" style="background-color: blue; text-align: center;">In lời chào</td>
            </tr>
            <tr>
                <td>Họ tên bạn</td>
                <td><input type="text" name="ten" id="chao3"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><?php echo $xuat_ten; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="chao" id="chao">Xuất</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>