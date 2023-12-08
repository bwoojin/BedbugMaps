<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); header("Access-Control-Allow-Headers: Content-Type, Authorization");

  // $jb_conn = mysqli_connect( 'svc.sel4.cloudtype.app:32482', 'root', 'dnwls0528!', 'bedbugmaps' );
  $jb_conn = mysqli_connect( 'localhost:32482', 'root', 'dnwls0528!', 'bedbugmaps' );
  $sql = "SELECT * FROM bedbug_maps LIMIT 100;";
  $result = mysqli_query( $jb_conn, $sql );
  while( $row = mysqli_fetch_array( $result ) ) {
    echo
    ''.$row['address'].';'.$row['lat'].';'.$row['lng'].':';
    }
?>