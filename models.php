<?php

function select($conn, $query) {
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function execute($conn, $query) {
    if ($conn->query($query) === TRUE) {
        return true;
    } else {
        return false;
    }
}

?>
