<?php

$title = $_POST['title'] ;
$price = $_POST['price'] ;
$author = $_POST['author'] ;




$con = mysqli_connect("localhost","root") ;

if (!$con)
{
    echo "Connection not established!" ;
}
else
{
    //echo "Connection established!";
    mysqli_select_db( $con , "BRM") ; 
    $q = "insert into Book values (NULL,'$title',$price,'$author')" ;

    $response = mysqli_query( $con , $q ) ;

    //if ( !$response )
    //{
    //    echo "musqli_query() had issues !";
    //}

    if ( false===$response ) {
        printf("error: %s\n", mysqli_error($con));
      }
      else {
        echo 'Book record inserted successfully !';
      }
      


}

mysqli_close ( $con ) ;


?>

<h5> Want to add more new book record ? </h5> <a href="InsertForm.php"> click here </a>