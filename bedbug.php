<?php
    $conn = mysqli_connect( 'localhost', 'root', 'root', 'bedbug_db' );
    $sql = "SELECT * FROM bedbug_table LIMIT 6;";
    $result = mysqli_query( $conn, $sql );
    
    while( $row = mysqli_fetch_array( $result ) ) {
        echo
        ''.$row['address'].';'.$row['lat'].';'.$row['lng'].':';
      }
?>