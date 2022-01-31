<?php


if ( sizeof($_POST ) == 0 )
{
  echo "Database is already empty!";
}
else
{

  
$num = sizeof ( $_POST ) ;
$j = 1 ;

for ( $i = 1 ; $i <= $num ; $i++,$j++ )
{
    $index = 'b'.$i ;

    if ( isset ( $_POST [$index] ) )
      $book_ids [$j] = $_POST [$index] ;
    else
      $i-- ;  
}








$con = mysqli_connect("localhost" , "root") ;

if ( !$con )
{
    echo "Connection did NOT establish !";
}
else
{
    mysqli_select_db( $con , "BRM" ) ;

    // write and run query here !




for ( $i=1 ; $i<=sizeof($book_ids) ; $i++ )
{
    $q = "Delete from Book where id = $book_ids[$i] " ;

    $response = mysqli_query ( $con , $q ) ;

}





    if ( false===$response ) {
        printf("error: %s\n", mysqli_error($con));
      }
      else {
        echo 'Book record deleted successfully !';
      }
}

mysqli_error( $con ) ;
mysqli_close( $con ) ;




}








/*

$con = mysqli_connect("localhost" , "root") ;

if ( !$con )
{
    echo "Connection did NOT establish !";
}
else
{
    mysqli_select_db( $con , "BRM" ) ;

    // write and run query here !

    if ( false===$response ) {
        printf("error: %s\n", mysqli_error($con));
      }
      else {
        echo 'Book record deleted successfully !';
      }
}

mysqli_error( $con ) ;
mysqli_close( $con ) ;

*/



?>