<?php 

include 'auth.php';
include 'includes/db.php';

if(isset($_POST['done'])){
    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $id = $_GET['id'];

    $sql = "UPDATE `member` SET name = '$name', address = '$addr', mobileno = '$mobileno', email = '$email' WHERE member_id = $id ";

    $query = mysqli_query($con,$sql);

    header('location: member.php');

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Admin Portal</title>
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
    
    <?php include('includes/navbar.php') ?>
        
            <div class="container-login100">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                    <form class="login100-form validate-form" action="" method="post">
                        <span class="login100-form-title p-b-33">
                            Update Member Details
                        </span>

                        <div class="form-row">
                        <div class="col">
                            <label>Member ID</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Member id" name="id" disabled value="<?php echo $_GET['id']; ?>">
                          </div>
                          
                          
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <label>Member Name</label>
                            <input type="text" class="form-control" placeholder="Enter member name" name="name">
                          </div>
                          
                          <div class="col">
                            <label>Address</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter address" name="addr">
                          </div>
                          
                          
                        </div>
                        <div class="form-row">
                        <div class="col">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter email adress" name="email">
                          </div>
                          
                          <div class="col">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter mobile no" name="mobileno">
                          </div>
                        </div>

                        <div class="container-login100-form-btn m-t-20">
                            <input type="submit" value="UPDATE" class="login100-form-btn" name="done">
                            </input>
                        </div>

                    </form>
                
            </div>
        </div>

</body>
</html>