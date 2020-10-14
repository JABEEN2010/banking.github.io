<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="style.css">
    <title>view user</title>
    <?php include 'link.php'; ?> 
    <style>
         body{
            background-image:  url("bank.jpg");
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>VIEW USER</h1>
            <div class="centre">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile no</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // database connection
                        include 'connect.php';

                        $sql = "SELECT * FROM user ";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0)
                        {
                    
                            while($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Mobile no"] . "</td><td>" . $row["Amount"] . "</td></tr>";
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
                </table>
            </div>
                 
            <div class="choose">
                <a href="index.html"><input type="button" class="btn" value="Home"></button></a>
            </div>           
        </div>   
</body>
</html>