<?php

function Json(array $obj)
{
    if ($obj === null)
        $obj = [];
    echo json_encode($obj);
    exit();
}
