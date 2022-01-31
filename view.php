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
   
    //echo $rows ;
/*
    while ($row = $record->fetch_row()) {
        print_r("\n".$row[1]."-----------------------") ;
        print_r($row[2]."-----------------------");
        print_r($row[3]);
        echo nl2br("\n"); 
    }


 for ( $i = 1 ; $i <= $rows ; $i++ )
 {
    $arr = mysqli_fetch_array ( $record ) ;
    printf ("%s - %s - %s - %s \n",$arr['id'],$arr['title'],$arr['price'],$arr['author']) ;
    echo "<br/>" ; 
 }

*/

}




?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View.css">
    <title>Book Cart</title>

    <!--   <style>

        body
        {
            background-color: olive ;
        }

        table
        {
            background-color:pink;
            border : 1px solid gray ;
            width :75% ;
            margin : 0px auto ;
        }
        td,th
        {
            border : 1px solid black;
            text-align : center ;
        }
        th
        {
            background-color: rgba(2,4,19,0.4);
        }

    </style>
    -->

</head>

<body>


    <div id="header-div">
        <h1> Book Store </h1>
        <p> Book cart has the following stock :- </p>
        <hr>
    </div>


    <table>

        <tr>
            <th> Book ID </th>
            <th> Book Title </th>
            <th> Book Price </th>
            <th> Book Author </th>
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
        </tr>

        <?php

            echo "<br/>" ;
           }    

          ?>

    </table>


</body>

</html>

<?php

 mysqli_close ( $con ) ;

?>