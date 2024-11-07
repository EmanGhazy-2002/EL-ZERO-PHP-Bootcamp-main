<?php

$filters = filter_list();
$result=[];

foreach ($filters as $filter){
    $id= filter_id($filter);
    $result[$id]=$filter;
}
print_r($result);