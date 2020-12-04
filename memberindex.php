<?php
    include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library User Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
    <a class="navbar-brand font-weight-bold" href="#"><h4>Library User Portal</h4></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><h6></h6></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-warning" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
    <br>
    
     <div class="container">
        <div class="col-lg-12">
            <h1>Manage Book Issue
                <a href="bookissue.php" class="btn btn-danger float-right">+Issue Book</a>
            </h1>
            <br>
            <table class="table table-striped table-bordered text-center">

                <tr class="text-center">

                    <th>Booking Id</th>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Book ID</th>
                    <th>Issue Date</th>
                    <th>Return Date</th>
                    <th>Late Fine</th>
                    <th>Action</th>

                </tr>

                <?php 
                    
                    include 'includes/db.php';
                    $sql = "SELECT * FROM `bookissue`";

                    $query = mysqli_query($con,$sql);

                    while($res = mysqli_fetch_array($query)){

                ?>

                <tr class="text-center">

                    <td> <?php echo $res['id']; ?> </td>
                    <td> <?php echo $res['member_id']; ?> </td>
                    <td> <?php echo $res['name']; ?> </td> 
                    <td> <?php echo $res['book_id']; ?> </td>
                    <td> <?php echo $res['issue_date']; ?> </td>
                    <td> <?php echo $res['return_date']; ?> </td>
                    <td> <?php echo $res['late_fine']; ?> </td>
                    <td><a href="return.php?id=<?php echo $res['id']; ?>" class="btn btn-primary">Cancel</a></td>

                </tr>

                <?php 

                    }

                ?>

            </table>

        </div>
    </div>
</body>
</html>