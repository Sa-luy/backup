<?php
    $dictionary = [
        "hello" => "xin chào",
        "how" => "thế nào", 
        "book" => "quyển vở", 
        "computer" => "máy tính",
        "go" =>" đi",
        "left" => "trái,",
        "right"=> "phải"
        
];
$name='';
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $searchWord=$_POST['name'];
    $flag=0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            background-color: greenyellow;
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
<body>
    <form action="" method="POST">
    <h1><strong>Từ Điển</strong></h1> <br>
    <input type="text" name="name" placeholder="Nhập từ cần tìm" value="<?php echo $name?>">
    <input type="submit" id="submit" value="Tìm">
    </form>
<?php
    foreach($dictionary  as $key=> $value){
        if ($searchWord==$key){
          echo "<br>".$searchWord." có nghia là :".$value ;
          echo'<br/>';
          $flag=1;
        }

    }
        if ($flag==0){
            echo "Không tìm thấy từ cần tra.";
        }
}
?>


</body>
</html>