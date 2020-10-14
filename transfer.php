<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TRANSACTION HISTORY</title>
    <?php include 'link.php';?>
    <style>
        body{
            background-image:  url("bank.jpg");
        }
    </style>
</head>
<body>
    <div class="choose">
        <a href="index.html"><input type="button"  name="back" class="btn" value="Back"></button></a>
    </div>
    <div class="container1">
        <h1>TRANSACTION HISTORY</h1>
        <div class="centre">
                <table>
                    <thead>
                        <tr>
                            <th>Sender</th>
                            <th>Recevier</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                   
                    $sql = "SELECT * FROM history";
                        $result = $con->query($sql);
                            if ($result->num_rows > 0)
                        {

                                while($row = $result->fetch_assoc())
                             {
                                    echo "<tr><td>" . $row["Sender"]. "</td><td>" . $row["Receiver"] . "</td><td>" . $row["Credit"]. "</td></tr>";
                            }
                                    echo "</table>";
                        }
                    else
                     {
                            echo "0 results";
                     }
$con->close();
?>
                    </tbody>
                    </div>
                    </div>
                    
</table>
</body>
</html>