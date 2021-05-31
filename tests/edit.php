<body class="blue lighten-4">

<?php include('templates/header.php'); ?>
<?php
require_once(__DIR__.'/../blockchain.php');

/*
Hack the chain, changing values in the first block.
*/

$testCoin = new BlockChain();








echo nl2br("Mining block 1...\n");

$testCoin->push(new Block(1, strtotime("now"), "amount: 4"));

echo nl2br (" Mining block 2...\n");
$testCoin->push(new Block(2, strtotime("now"), "amount: 10"));


echo nl2br (" Mining block 3...\n");
$testCoin->push(new Block(3, strtotime("now"), "amount: 6"));

//echo nl2br ("Chain valid: ".($testCoin->isValid() ? "true" : "false")."\n");

if(isset($_POST['b1'])){

 echo nl2br ("<br> Changing second block...\n");
$testCoin->chain[1]->data = "amount: 1000";
$testCoin->chain[1]->hash = $testCoin->chain[1]->calculateHash();

echo nl2br ("  <font color=red  > <br>Chain validity: ".($testCoin->isValid() ? "Valid" : "Invalid")."\n");

echo ("<font color=black  ><br>");
print_r($testCoin);

}


?>



<!DOCTYPE html>
<html>


<form action="edit.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $temp['id']; ?>">
				<input type="submit" name="b1" value="Change Values" class="btn brand z-depth-0">
                <!-- <input type="submit" name="b2" value="Regenreate" class="btn brand z-depth-0"> -->
			</form>


          

                        </html>