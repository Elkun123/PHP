<?php
//pt bậc 1
function giai_pt_1($a,$b)
{
    if($a==0)
    {
        if($b==0)
            $nghiem="Phương trình có vô số nghiệm";
        if($b<>0)
            $nghiem="Phương trình vô nghiệm";
    }
    else
    {
        $nghiem = "x=round(-($b/$a),2)";
    }
    return $nghiem;
}
//pt bậc 2
function giai_pt_2($a,$b,$c)
{
    if($a==0)
        $nghiem=giai_pt_1($b,$c);
    if($a<>0)
    {
        $delta=pow($b,2)-4*$a*$c;
        if($delta<0)
            $nghiem="Phương trình vô nghiệm";
        if($delta==0)
            $nghiem="Phương trình có nghiệm kép x1=x2=".-($b/2*$a);
        else
        {
            $can=sqrt($delta);
            $x1=(-$b+$can)/(2*$a);
            $x2=(-$b-$can)/(2*$a);
            $nghiem="Phương trình có 2 nghiệm phân biệt x1=".round($x1,2).",x2=".round($x2,2);
        }
    }
    return $nghiem;
}
if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["b"]))
{
    $nghiem=giai_pt_2($_POST["a"],$_POST["b"],$_POST["c"]);
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
        <table>
            <tr>
                <td>Giải phương trình bậc 2</td>
            </tr>
            <tr>
                <td>Phương trình:</td>
                <td><input type="text" name="a">X^2+ </td>
                <td><input type="text" name="b">X+ </td>
                <td><input type="text" name="c">=0</td>
            </tr>
            <tr>
                <td>Nghiệm:</td>
                <td colspan="3"><input type="text" style="width: 300px;" value="<?php if(isset($nghiem)) echo $nghiem; ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Xuất</button></td>
            </tr>
        </table>
    </form>
</body>
</html>