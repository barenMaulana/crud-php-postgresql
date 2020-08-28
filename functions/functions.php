<?php

function getAll($tbname)
{
    global $conn;

    $query = "SELECT * FROM " . $tbname;
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Error when mining data!";
        exit;
    }

    while ($row = pg_fetch_assoc($result)) {
        $results[] = $row;
    }

    return $results;
}


function insert($data)
{
    global $conn;

    $mine_result = $data['mine_result'];
    $mine_color = $data['mine_color'];
    $date = $data['install_date'];
    $owner = $data['mine_owner'];

    $query = "INSERT INTO mining_tb(mine_result,mine_color,install_date,mine_owner) VALUES('$mine_result','$mine_color','$date','$owner')";

    $insert = pg_query($conn, $query);

    return pg_affected_rows($insert);
}
