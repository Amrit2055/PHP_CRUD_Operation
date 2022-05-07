

<html>
    <head>
        <title></title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center">Display Table Data</h1>
                <br>

                <table class="table table-striped table-hover table-bordered">
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Update</th> 
                    </tr>

 <?php

    include 'conn.php';

    

    $q=" select  * from crudtable ";
    $query=mysqli_query($con,$q);

    while($res=mysqli_fetch_array($query)){

    

 ?>



                    <tr class="text-center">

                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['username']; ?></td>
                        <td><?php echo $res['password']; ?></td>
                        <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a> </button></td>
                        <td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>"class="text-white">Update </a></button></td>

                    </tr>
    <?php
    }
    ?>
                </table>

            </div>
        </div>


    </body>
</html>