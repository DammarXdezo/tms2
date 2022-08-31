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
        <div class="container w-100 mx-auto p-5">
            <h1 class="pb-3">Task Management System</h1>
            <h4>Manage Users</h4>
            <div>
                <a href="create.php" class="btn btn-primary"> Create | Add user</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">S.N</th>
                      <th scope="col">Name</th>
                      <th scope="col">email</th>
                      <th scope="col">password</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query ="SELECT * FROM users";
                    $result= mysqli_query($conn, $query); // select all data from users table
                    $i=0;
                    while($data=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                      <th scope="row"> <?php echo ++$i; ?>  </th>
                      <td><?php echo $data['name']; ?> </td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-info">View</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                <?php
                    }
                    
                    ?>
                  </tbody>
                </table>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>