<?php
  $jb_conn = mysqli_connect( 'svc.sel4.cloudtype.app:32482', 'root', 'dnwls0528!', 'bedbugmaps' );
  $sql = "SELECT * FROM bedbug_maps LIMIT 100;";
  $result = mysqli_query( $jb_conn, $sql );
  while( $row = mysqli_fetch_array( $result ) ) {
    echo
    ''.$row['address'].';'.$row['lat'].';'.$row['lng'].':';
    }
?>