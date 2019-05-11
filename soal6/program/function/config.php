<?php
$conn=mysqli_connect("localhost","root","","program");
if (mysqli_connect_errno()) {
    echo "mysqli_connect_error";
}

function base_url($url=null){
    $base_url="http://localhost/tes1/soal6/program/";

    if ($url !=null) {
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}