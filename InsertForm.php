<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insertForm.css">
    <title>Insert Form</title>


</head>

<body>

    <div id="form-container">

        <form action="insert.php" method="post">

            <h1> Book Insertion Form </h1>
            <p> Fill the details of a new book to add it to the cart ! </p>
            <hr>

            <div class="input-containers">
                <h3> Book Title </h3>
                <input type="text" name="title" required>
            </div>


            <div class="input-containers">
                <h3> Book Price</h3>
                <input type="number" name="price" required>
            </div>


            <div class="input-containers">
                <h3> Book Author</h3>
                <input type="text" name="author" required>
            </div>


            <div class="input-containers">
                <input id="submit-button" type="submit" value="Add Book">
            </div>





        </form>

    </div>

</body>

</html>