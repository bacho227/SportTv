<form method="post" action="admin.php">
    <input type="text" name="team1" placeholder="team1"></br>
    <input type="text" name="team2" placeholder="team2"></br>
    <input type="text" name="prognoz" placeholder="prognoz"></br>
    <input type="text" name="result" placeholder="result"></br>
    <input type="submit">
</form>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 29.01.2015
 * Time: 3:01
 */
if (empty($_POST['team1']) || empty($_POST['team2']) || empty($_POST['prognoz']) || empty($_POST['result']))
    exit("Seavset yvela veli!");

include("./connection.php");

$sql = "INSERT INTO team (team1, team2, prognoz, result)
VALUES ('" . $_POST['team1'] . "','" . $_POST['team2'] . "','" . $_POST['prognoz'] . "','" . $_POST['result'] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();