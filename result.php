<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 29.01.2015
 * Time: 3:01
 */
require_once('./connection.php');

$sql = "SELECT *  FROM team ";
$result = $conn->query($sql);
$i = 1;
if ($result && $result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $i++ . "</td>
                <td>" . $row['team1'] . "</td>
                <td>" . $row['team2'] . "</td>
                <td>" . $row['prognoz'] . "</td>
                <td>" . $row['result'] . "</td>
                </tr>";
    }
    echo " </table > ";

} else {
    echo "0 results";
}
$conn->close();