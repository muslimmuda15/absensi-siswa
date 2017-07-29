<!DOCTYPE html>
<html>
    <head>
	<title>Vertical table</title>
	<link rel="stylesheet" type="text/css" href="css/table-column-options.css" />
    </head>
    <body  id="printarea">
        <table class="column-options">
            <thead>
               <tr>
                    <?php
                        include 'Data/connect.php';
                        $result = $conn->query("select * from absen");
                        if (!$result) {
                            echo 'Could not run query: ' . mysql_error();
                            exit;
                        }
                        if ($result->num_rows > 0) {
                            if ($row = $result->fetch_assoc()) {
                    //            print_r($row);
                                echo "<tr>";
                                for($i = 0; $i < count($row); $i++ )
                                {
                                    $keys = array_keys($row);
                                    echo "<th>$keys[$i]</th>";
                                }
                                echo '</tr>';
                            }
                        }
                        echo '</head><tbody>';
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr class=\"odd\">";
                                for($i = 0; $i < count($row); $i++ )
                                {
                                    $keys = array_values($row);
                                    echo "<td>$keys[$i]</th>";
                                }
                                echo '</tr>';
                            }
                        }
                        echo "</body>";
                    ?>
        </table>
        <?php
            $result = $conn->query("SELECT * from absen");
            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
                    echo count($row);
                    $rowcount=mysqli_num_rows($result);
                    echo "$rowcount";
                }
            }
        ?>
    </body>
</html>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    /*border: 1px solid #dddddd;*/
    text-align: center;
    padding: 8px;
}

/*tr:nth-child(even) {
    background-color: #dddddd;
}*/
</style>

<style type="text/css">
    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
</style>