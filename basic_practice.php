<?php
$a = array(
    0 => array("id"=>1,"title"=>"iPhone","price"=>3600),
    1 => array("id"=>2,"title"=>"Samsung","price"=>2500),
    2 => array("id"=>3,"title"=>"HTC","price"=>1566),
);

// var_dump($a);

$a[] = array("id"=>4,"title"=>"Huawei","price"=>2222);

$a[3] = array("id"=>4,"title"=>"Huawei","price"=>2222);
print_r($a);
?>