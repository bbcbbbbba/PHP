<?php
$a = rand(1, 9);
$b = rand(0, 9);
$c = rand(0, 9);
$d = rand(0, 9);
if (isset($_POST['chk'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
} //為了能讓使用者輸入值(從網頁取得值)
?>
<?php
$SN = 1;
$EN = 9;
$SN2 = 0;
$EN2 = 9;
$SN3 = 0;
$EN3 = 9;
$SN4 = 0;
$EN4 = 9;
// if(isset($_POST['chk2'])){//從網頁取得值
//     $SN=$_POST['SN'];
//     $EN=$_POST['EN'];
//     $getNumber=$_POST['getNumber'];
//     $SN2=$_POST['SN2'];
//     $EN2=$_POST['EN2'];
//     $getNumber2=$_POST['getNumber2'];
//     $SN3=$_POST['SN3'];
//     $EN3=$_POST['EN3'];
//     $getNumber3=$_POST['getNumber3'];
//     $SN4=$_POST['SN4'];
//     $EN4=$_POST['EN4'];
//     $getNumber=$_POST['getNumber4'];    
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .T {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .L {
            font-family: Arial, Helvetica, sans-serif;
            color: maroon;
        }

        .h {
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(6, 80, 150);
        }

        #button {
            color: rgb(1, 65, 151);
            margin: 5px;
            padding: 3px 8px;
            border-radius: 5px;
            border-width: 2.5px;
            background: white;
            border-color: rgb(1, 65, 151);
        }

        #button:hover {
            background: rgb(6, 80, 150);
            color: white;
        }

        #button1 {
            color: rgb(1, 65, 151);
            margin: 5px;
            padding: 3px 8px;
            border-radius: 5px;
            border-width: 2.5px;
            background: white;
            border-color: rgb(1, 65, 151);
        }

        #button1:hover {
            background: rgb(6, 80, 150);
            color: white;
        }

        .open {
            font-family: "微軟正黑體";
            color: rgb(6, 80, 150);
        }

        .open2 {
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(6, 80, 150);
        }

        .P {
            font-family: "微軟正黑體";
            font-size: 14px;
            color: rgb(70, 0, 0);
        }

        .p {
            font-family: "微軟正黑體";
            font-size: 16px;
            color: maroon;
        }

        /* body{
            background-color:rgb(196, 196, 196);
        } */
        .s {
            font-family: "標楷體";
            font-size: 25px;
            color: rgb(200, 0, 0);
        }

        .s2 {
            font-family: "標楷體";
            font-size: 22px;
            color: rgb(6, 80, 150);
        }
    </style>
</head>

<body>
    <div align="center">
        <p><img src="images/n.png" alt="number4"></p>
        <form action="JapanLottery.php" id="form1" name="form1" method="post">
            <table class="T">
                <tr>
                    <td>Number 1:</td>
                    <td><input type="text" size="6" maxlength="1" id="a" name="a" value="<?php echo $a; ?>"> <span class="L">choose one number(1~9)</span></td>
                </tr>
                <tr>
                    <td>Number 2:</td>
                    <td><input type="text" size="6" maxlength="1" id="b" name="b" value="<?php echo $b; ?>"> <span class="L">choose one number(0~9)</span></td>
                </tr>
                <tr>
                    <td>Number 3:</td>
                    <td><input type="text" size="6" maxlength="1" id="c" name="c" value="<?php echo $c; ?>"> <span class="L">choose one number(0~9)</span></td>
                </tr>
                <tr>
                    <td>Number 4:</td>
                    <td><input type="text" size="6" maxlength="1" id="d" name="d" value="<?php echo $d; ?>"> <span class="L">choose one number(0~9)</span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="hidden" id="chk" name="chk" value="form1">
                        <input type="submit" name="button" id="button" value="確認號碼">
                    </td>
                </tr>
            </table>
            <h3 class="h">Your Number:<?php echo $a . $b . $c . $d; ?></h3>
            <p class="p">遊戲規則</p>
            <P class="P">可自行選號也可電腦選號(重新整理頁面)，四個數字和開獎<br>
                排序皆相同者，則中頭等獎，數字相同排序不同則是二等獎。</P>
            <br>
            <hr width="35%">
            <br>
            <!-- <form action="try99.php" id="form2" name="form2" method="post"> -->
            <input type="hidden" id="chk2" name="chk2" value="form1">
            <input type="submit" name="button1" id="button1" value="繼續兌獎">
        </form>




        <?php
        if (isset($_POST['chk2'])) {
            $numbers = 0; //數字
            $pos = 0; //位置
            // $Number = 2;
            // $Number2 = 1;
            // $Number3 = 8;
            // $Number4 = 4;
            $Number = rand($SN, $EN);
            $Number2 = rand($SN2, $EN2);
            $Number3 = rand($SN3, $EN3);
            $Number4 = rand($SN4, $EN4);
            $Num = array($Number, $Number2, $Number3, $Number4);
            echo "<h3 class='open'>開獎號碼<br><span class='open2'>" . $Number . $Number2 . $Number3 . $Number4 . "</span></h3>";
            $player = array($a, $b, $c, $d);
            for ($i = 0; $i < 4; $i++) {
                if ($player[$i] == $Num[$i]) { //$i 代表索引值，$i=0時代表$player陣列裡的$a，$i 代表索引值，$i=0時代表$Num陣列裡的$Number
                    $pos++;
                    $numbers++;
                    unset($Num[$i]);
                    $player[$i] = 10;
                } //對中數字、位置的先篩選掉(索引值都是變數$i所以只會對四次)
            }
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    if ($player[$i] == $Num[$j]) {
                        $numbers++;
                        unset($Num[$j]);
                        $player[$i] = 10;
                    }
                } //只對數字不對位置，因只有$numbers++，(索引值因有設兩個變數，所以會對十六次)
            }
            // print_r($Num);
            // print $numbers;
            // print $pos;
            // print_r($player); 
            // sort($player);
            // print_r($player); 


            $c = "";
            if ($numbers == 4) {
                $c = "<span class='s'>恭喜您中二等獎!</span>";
                if ($pos == 4) { //也可改($pos>3)
                    $c = "<span class='s'>恭喜您中頭等獎!!</span>";
                }
            } else {
                $c = "<span class='s2'>請再接再厲!</span>";
            }
            echo $c;
        }

        ?>
    </div>
    <!--  X    <script type="text/javascript">
    document.getElementById("a").value = <?php //echo $a; 
                                            ?>
    document.getElementById("b").value = <?php //echo $b; 
                                            ?>
    document.getElementById("c").value = <?php //echo $c; 
                                            ?>
    document.getElementById("d").value = <?php //echo $d; 
                                            ?>
    // document.getElementByTagName("h4").innerPhp = <?php //echo $a.$b.$c.$d; 
                                                        ?>
</script> -->
</body>

</html>