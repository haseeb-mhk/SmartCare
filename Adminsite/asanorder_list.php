<?php
include("../Connection.php");


$query_products = mysqli_query($con, "Select * from asanorder");

if(isset($_GET['Oid'])){

    $Did = $_GET['Oid'];
$delete_order = mysqli_query($con, "Delete from asanorder where order_id = '$Did'");
if($delete_order){
    header('location:asanorder_list.php');
}

}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include('includes/links.php');  ?>


</head>

<body>

    <?php include('includes/header.php'); ?>
    <!-- ======= Sidebar ======= -->
    <?php include('includes/sidepanel.php')   ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Manage Asan Orders</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
         

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asan Orders List</h5>

                        <!-- Default Table -->
                        <table class="table" width="100%">
                            <thead>
                               


                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col"> Email</th>
                                    <th scope="col"> Contact</th>
                                    <th scope="col"> Message</th>
                                    <th scope="col"> Details</th>
                                    
                                    <th scope="col"> Delete</th>
                                </tr>

                                
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                while($row_products= mysqli_fetch_assoc($query_products)) { ?>
                                <tr>
                                    <td><?php echo $i;  ?></td>
                                    <td><?php echo $row_products['fname'];  ?>&nbsp;<?php echo $row_products['lname'];  ?></td>
                                    <td><?php  echo $row_products['email']  ?></td>
                                    <td><?php  echo $row_products['contact']  ?></td>
                                    <td><?php  echo $row_products['message']  ?></td>

                                    <td><a href="order_details.php?Oid=<?php echo $row_products['order_id'];  ?>" class="btn btn-info">Details</a></td>
                                    
                                    <td><a href="asanorder_list.php?Oid=<?php echo $row_products['order_id'];   ?>" class="btn btn-danger">Delete</a></td>


                                </tr>
                                <?php $i++; }  ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>


            </div>
          
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('includes/footer.php');  ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php include('includes/jslinks.php');  ?>


</body>

</html>