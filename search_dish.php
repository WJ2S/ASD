<html>
    <head>
        <title>Search Dishes</title>
    </head>
    <body>
    <h2>Search for Dishes</h2>
    <form method="post" action="">
        Keyword: <input type="text" name="keyword">
        <input type="submit" name="search" value="Search">
    </form>
    <?php
        //Session Start
        session_start();
        //For Database Connection
        require_once 'database_config.php';
        //Check Is UserLogin
        $Username_From_Session = $_SESSION['username'];
        if ($Username_From_Session == "") {
            header('Location: index.html');
            exit();
        }
        //Set UP MySQL Connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        if(isset($_POST['search'])) {
            $keyword = $_POST['keyword'];
            $sql = "SELECT * FROM menu WHERE dishname LIKE '%$keyword%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Dish Name: " . $row['dishname'] . " - Price: " . $row['dishprice'] . " - Quantity: " . $row['dishquantity'] . "<br>";
                }
            } else {
                echo "There's no current keywords in our database";
            }
        }
        $conn->close();
    ?>
    <br>
    <button><a href="landing.php">Go Back</a></button>
    </body>
</html>
