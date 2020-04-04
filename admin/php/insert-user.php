<?php
    //CONNECT DATABASE
	require_once("../../config/connectdb.php");

	try {
        //GET DATA FROM AJAX
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $utype = $_POST["utype"];
        $Scourse = $_POST["Scourse"];
        $uname = $_POST["uname"];
        $pword = $_POST["pword"];

        // INSERT DATA QUERY
        $conn = new PDO($dsn, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO users (firstname, lastname, type, username, password, program_id, date_created) VALUES (:fname, :lname, :utype, :uname, :pword, :program, now())";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':fname', $fname);
        $stmt->bindValue(':lname', $lname);
        $stmt->bindValue(':utype', $utype);
        $stmt->bindValue(':Scourse', $Scourse);
        $stmt->bindValue(':uname', $uname);
        $stmt->bindValue(':pword', $pword);
        $stmt->execute();
    }
    catch (PDOException $e) {
        echo 'PDO Exception Caught.';
        echo 'Error with the database: <br />';
        echo 'SQL Query: ', $sql;
    }
?>