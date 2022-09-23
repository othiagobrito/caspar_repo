<?php

function getRows($file): array
{
    $rows = [];

    while (($row = fgets($file)) !== false) {
        $rows[] = $row;
    }

    fclose($file);

    return $rows;
}