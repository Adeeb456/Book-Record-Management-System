<?php

$con = mysqli_connect( "localhost" , "root" ) ;

if ( ! $con )
{
    echo "Connection could NOT be established !";
}
else
{
    mysqli_select_db( $con , "brm" ) ;
    $record = mysqli_query( $con ,"select * from book ") ;

    $rows = mysqli_num_rows ( $record ) ;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DeleteForm.css">
    <title>Deletion Form</title>
</head>

<body>

    <div id="form-container">


    <div class="form-header">

      <h1> Book Deletion Form </h1>
      <p> Select the books that should be deleted from the stock. </p>

    </div>
         



    <hr>

        <form action="delete.php" method="post">

            <table>
                <tr>
                    <th> Book ID </th>
                    <th> Book Title </th>
                    <th> Book Price </th>
                    <th> Book Author </th>
                    <th> Select Books </th>
                </tr>

                <?php
    
   for ( $i = 1 ; $i <= $rows ; $i++ )
   {
     $arr = mysqli_fetch_array ( $record ) ;
?>

                <tr>
                    <td> <?php echo $arr['id'] ?> </td>
                    <td> <?php echo $arr['title'] ?> </td>
                    <td> <?php echo $arr['price'] ?> </td>
                    <td> <?php echo $arr['author'] ?> </td>
                    <td> <input type="checkbox" value="<?php echo $arr['id'] ; ?>" name="b<?php echo $i; ?>"></td>
                </tr>

                <?php

    echo "<br/>" ;
   }    

  ?>

                <td colspan="5"> <input id="submit-button" type="submit" value="Delete Books"> </td>

            </table>



        </form>


    </div>


</body>

</html>

<?php

 mysqli_close ( $con ) ;

?>