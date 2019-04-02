<h1>Hello Etaki</h1>
<h4>Attempting MySQL connection from php....</h4>
<?php
        $servername = "mysql";
        $username = "techlab";
        $password = "Tech2019";
        $dbname = "etaki3d";

        try
        {
                // preparing database handle $dbh
                $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname;", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo ("Connected to MySQL successfully!");
        }

        catch(PDOException $e)
        {
            echo ("Could not connect to server.\n");
            echo ("getMessage(): " . $e->getMessage () . "\n");
        }

?>
