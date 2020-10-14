<?php
include 'connect.php';
$sender = "null";
$recevier = "null";
$credit = "null";

if(isset($_POST['history'])){  

$sender = $_POST["Sender"];
$recevier = $_POST["Receiver"];
$credit = $_POST["Credit"];
echo $sender,$recevier,$credit;

$sql = "INSERT INTO history values('$sender','$recevier','$credit')";

try{
    mysqli_query($con,$sql);
    header("location:index.html");
}
catch (Exception $e)
{
    echo $e->getMessage();
}
mysqli_close($con);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Select user</title>
    <style>
        body{
            background-image:  url("bank.jpg");
        }
    </style>
    <?php include 'link.php'?>
    
</head>
<body>    
    <div class="container">
    <form action="transfer.php" method="post" name="creditform" >
        <h1>Transfer Credit</h1>
            <div class="transaction">            
                <label>Buyer Name : </label>
                    <select name="Buyer" class="sel">
                    <option value="select Buyer">Select Buyer</option>
                    <option value="Radha">Radha</option>
                    <option value="Sita">Sita</option>
                    <option value="Anamika">Anamika</option>
                    <option value="Babita">Babita</option>
                    <option value="Mita">Mita</option>
                    <option value="Ganga">Ganga</option>
                    <option value="Anu">Anu</option>
                    <option value="Krishna">Krishna</option>
                    <option value="Ayushi">Ayushi</option>
                    <option value="Manshi">Manshi</option>
                    </select></br>
            </div>
            
            <div class="train">
                <label>Selles item : </label>
                    <select name="Seller" class="sel1">
                        <option value="select Selles item">Select Selles item</option>
                        <option value="Sugar">Sugar</option>
                        <option value="Tea">Tea</option>
                        <option value="School bag">School bag</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Dress">Dress</option>
                        <option value="T.V">T.V</option>
                        <option value="Fan">Fan</option>
                        <option value="Light">Light</option>
                        </select>
                        <br>
            </div>
            
                    <div class="credit">
                        <label> Credit : </label><input type="text" name="credit"><br>
                     </div>      
                               
            <div class="choose">
                <input type="submit" name="transfercredit" class="btn" value="Transfer Amount" ></button> 
                <a href="view.php"><input type="button"  name="back" class="btn" value="Back"></button></a>
            </div>
    

    </form>

    </div>
</body>
</html>