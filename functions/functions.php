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

    while ($row = pg_fetch_row($result)) {
        $results[] = $row;
    }

    return $results;
}
