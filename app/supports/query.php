<?php

function getAllData($conn, $tableName) {
    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    return false;
}