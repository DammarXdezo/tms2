<?php  require("connection/config.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bootstrap 5!</title>
</head>

<body>

    <!-- add users -->

    <section>
        <div class="container w-50 mx-auto p-5">
            <h1 class="pb-3">Task Management System</h1>
            <a href="index.php" class="btn btn-primary"> back</a>
            <?php
            if(isset($_GET['id']))
            $id =$_GET['id'];

            $query1="SELECT *from users where id=$id";
            $result1= mysqli_query($conn, $query1); 
            // fetch a row data / single row data 
            $data=$result1->fetch_assoc();
            ?>
            
            <?php
        if(isset($_POST['submit'])){
          $name= $_POST['name'];  
          $email= $_POST['email'];  
          $password= md5($_POST['password']);  

        //   validation to form field
          if($name!="" && $email!="" && $password!=""){

            $query ="UPDATE users SET name='$name', email='$email', password='$password' where id=$id";
            $result= mysqli_query($conn, $query); // connect database and query

            // check the query either data is submitted or not
            if($result){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert"> Data is submitted successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php   
                       header("Refresh:0; url=index.php");  
                        }
            else{
                echo " data is not submitted ";
            }
          }
          else {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> All Fields are required
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
          }

        }
        ?>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name </label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                        name="name" disabled value="<?php echo  $data['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email </label>
                    <input type="email" disabled class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        name="email"value="<?php echo  $data['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" disabled class="form-control" id="exampleInputPassword1" name="password" value="<?php echo  $data['password']; ?>">
                </div>
            </form>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>