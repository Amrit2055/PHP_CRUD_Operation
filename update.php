<?php
include 'conn.php';

if(isset($_POST['done'])){
    $id=$_GET['id'];
    $uname=$_POST['username']; //get data from form
    $pword=$_POST['password'];

    $q="Update crudtable set id=$id,username='$uname',password='$pword' where id=$id ";
    $query=mysqli_query($con,$q);

    header('location:display.php');

}


?>

<html>
    <head>
        <title></title>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="col-lg-6 m-auto">
            <form method="POST">
                <br><br><div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center">Update Operation</h1>
                    </div><br>

                    <label>Username: </label>
                    <input type="text" name="username" class="form-control"><br>

                    <label>Password: </label>
                    <input type="text" name="password" class="form-control"><br>

                    <button class="btn btn-success" type="submit" name="done"> Update</button><br>

                </div>

            </form>

        </div>

    </body>
</html>