<?php
include "../Shared/head.php";
include "../Shared/header.php";
include "../Shared/aside.php";
include "../general/config.php";
include "../general/functions.php";


if(isset($_GET['edit'])){ 
  $id= $_GET['edit'];
  $select ="SELECT * FROM `lawyers` where id=$id ";
 $s= mysqli_query($conn , $select);
  $row = mysqli_fetch_assoc($s);
}
  
  if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $update ="UPDATE  `lawyers` SET name= '$name', email= ' $email',  password =' $password' where id=$id ";
    $q = mysqli_query($conn,$update);
    testMassage($q, "update To Database");
}

  
  



?>
  <main id="main" class="main">

  <h1>Add New layers</h1>

<div class="container p-5">
<div class="card p-5">
    <div class="card-body">
    <form action="" method="POST">
    <div class="form-group">
        <label for=""> name</label>
        <input name="name"  value="<?= $row['name'] ?>" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">email</label>
        <input name="email"  value="<?= $row['email'] ?>"  type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">password</label>
        <input name="password" value="<?= $row['password'] ?>"  type="text" class="form-control">
    </div>
    <button name="send" class="btn btn-primary mt-3" >Update</button>
    </form>

    </div>

</div>

</div>

</main>
























  <?php
include "../Shared/footer.php";
include "../Shared/script.php";





  ?>