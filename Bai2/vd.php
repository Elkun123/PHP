<?php
$a = $_POST["a"];
$b = $_POST["b"];
$n = "";
if($a==0)
{
    if($b==0)
    {
        $n="Phương trình vô số nghiệm";
    }
    if($b!=0)
    {
        $n="Phương trình vô nghiệm";
    }
}
else
    {
        $x =-($b/$a);
        $n = "$x";
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
                <td colspan="5">Giải phương trình bậc1</td>
            </tr>
            <tr>
                <td>Phương trình</td>
                <td><input type="text" name="a">X+ <input type="text" name="b">=0</td>
            </tr>
            <tr>
                <td>Nghiệm</td>
                <td> <label for="">x=</label><?php if(isset($n)) echo $n; ?></td>
            </tr>
            <tr>
                <td colspan="5">
                    <button type="submit" name="xuat">Xuất</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>