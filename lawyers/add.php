<?php
include "../Shared/head.php";
include "../Shared/header.php";
include "../Shared/aside.php";
include "../general/config.php";
include "../general/functions.php";



if(isset($_POST['send'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $insert ="INSERT INTO `lawyers` VALUES (NULL, '$name',' $email',' $password') ";
  $q = mysqli_query($conn,$insert);
  testMassage($q, "Insert To Database");


}


?>
  <main id="main" class="main">

<div class="container p-5">
<div class="card p-5">
    <div class="card-body">
    <form action="" method="POST">
    <div class="form-group">
        <label for=""> name</label>
        <input name="name" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">email</label>
        <input name="email" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">password</label>
        <input name="password" type="text" class="form-control">
    </div>
    <button name="send" class="btn btn-info mt-3" >Send Data</button>
    </form>

    </div>

</div>

</div>
</main>
























  <?php
include "../Shared/footer.php";
include "../Shared/script.php";





  ?>