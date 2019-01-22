<html>
<head>
    <title>Ung dung tu dien don gian</title>
</head>
<body>
<form method="post">
    <h2>Ung Tu Dien Anh-Viet</h2>
    <input type="text" name="search" placeholder="search"/>
    <input type="submit" value="Tim kiem"/>
</form>
<?php
   $dictionary = ["hello"=>"xin chao","how"=>"the nao","book"=>"quyen vo","computer"=>"may tinh"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $searchword = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $index => $description){     //$dictionary la mang can duyet. $index key tro den gtri cua phan tu.
            if($index == $searchword){                       //$description: la value cua vi tri index.
                echo "Tu: " .$index . ".</br> Nghia cua tu: " .$description;
                echo "</br>";
                $flag =1;
            }
        }
        if($flag == 0){
            echo "khong tim thay tu can tra";
        }
    }
?>
</body>
</html>