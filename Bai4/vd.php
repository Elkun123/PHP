<?php
if(isset($_POST["sodau"]) && isset($_POST["socuoi"]))
{
    $soDau=$_POST["sodau"];
    $soCuoi=$_POST["socuoi"];
    $tong=0;
    $tongChan=0;
    $tongLe=0;
    $tich=1;

    for($i=$soDau;$i<=$soCuoi;$i++)
    {
        $tong=$tong+$i;
    }
    for($i=$soDau;$i<=$soCuoi;$i++)
    {
        $tich=$tich*$i;
    }
    for($i=$soDau;$i<=$soCuoi;$i++)
    {
        if($i%2==0)
            $tongChan=$tongChan+$i;
    }
    for($i=$soDau;$i<=$soCuoi;$i++)
    {
        if($i%2!=0)
            $tongLe=$tongLe+$i;
    }

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
                <td></td>
                <td>Số bắt đầu: <input type="text" name="sodau"></td>
                <td>Số kết thúc: <input type="text" name="socuoi"></td>
            </tr>
            <tr>
                <td colspan="3">Kết quả</td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td><input type="text" value="<?php echo $tong ?>"></td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td><input type="text" value="<?php echo $tich ?>"></td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td><input type="text" value="<?php echo $tongChan ?>"></td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td><input type="text" value="<?php echo $tongLe ?>"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Tính toán</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>