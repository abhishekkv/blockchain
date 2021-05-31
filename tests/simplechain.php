<body class="teal lighten-4">
<?php include('templates/header.php'); ?>

<?php
require_once(__DIR__.'/../blockchain.php');

/*
Set up a simple chain and mine two blocks.
*/

$testCoin = new BlockChain();
echo "\n";




// orginal rpinter statement // echo json_encode($testCoin, JSON_PRETTY_PRINT);
 

if(isset($_POST['b1'])){
    
    echo nl2br ("Mining block 1... \n ");
    $testCoin->push(new Block(1, strtotime("now"), "amount: 4"));
    echo "\n";

}



if(isset($_POST['b2'])){
    
    echo nl2br ("\n  Mining block 2...\n");
    $testCoin->push(new Block(2, strtotime("now"), "amount: 10"));

}


if(isset($_POST['b3'])){
   
    echo nl2br ("\n  Mining block 3...\n");
    $testCoin->push(new Block(3, strtotime("now"), "amount: 6"));
    

}


$arr = json_encode($testCoin, true);


echo $arr;

echo("<br>");
echo ("<br>Decoded array <br>");

//$temp = $arr->$difficulty;
//print_r($temp);

$deco=json_decode($arr, true);

print_r($deco);








//echo("<br><br>");

//$temp = $deco['chain']['1']['index']; This is the temp method to get index
//print_r($temp);





//echo $arr;


//echo $arr.$chain[0].$nonce[0];





//$x = $arr.name;
//document.getElementById("demo").innerHTML = $x;



//echo $arr[""];

//$decode=json_decode($testCoin,true);
//print_r($decode);
//echo $arr



//$encode=json_encode($testCoin);
//print_r($encode);

//$decode=json_decode($testCoin);
//print_r($decode);



//$parsedData = json_parse($testCoin);


//$x = $parsedData[0];

//print_r($x);




//$encode=json_encode($testCoin);
//print_r($encode[2]["index"]);
//print_r($encode);
//echo $encode->chain[1];


//$decode=json_decode($testCoin);
//print_r($decode);








/*

$decode=json_decode($testCoin);
print_r($decode);


echo $decode->difficulty;









$parsedData = json_parse($testCoin);


$x = $parsedData[0];
print($x);
//print($decode);
//print $testCoin;
//echo $decode;

*/





?>

<!DOCTYPE html>
<html>



<form action="simplechain.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $temp['id']; ?>">
				<input type="submit" name="b1" value="Block 1" class="btn brand z-depth-0">
                <input type="submit" name="b2" value="Block 2" class="btn brand z-depth-0">
                <input type="submit" name="b3" value="Block 3" class="btn brand z-depth-0">
			</form>




                        </html>