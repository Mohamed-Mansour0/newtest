<?php
include "../Shared/head.php";
include "../Shared/header.php";
include "../Shared/aside.php";
include "../general/config.php";
include "../general/functions.php";


$select="SELECT * FROM `lawyers` ";
$s = mysqli_query($conn , $select);

if(isset($_GET['delete'])) {
  $id= $_GET['delete'];
  $delete = "DELETE FROM  `lawyers` where id =$id";
 $d= mysqli_query($conn , $delete);
 
go("/lawyers/list.php");

}

?>






<main id="main" class="main">
<div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                  
                      </tr>

                    </thead>

                    <tbody>
                      <?php foreach($s as $data) {?>
                      <tr>
                        <th scope="row"><?=$data['id']?> </th>
                        <td scope="row"><?=$data['name']?> </td>
                        <td scope="row"><?=$data['email']?> </td>
                        <td> <a href="/new/lawyers/list.php?delete=<?=$data['id'] ?>" class="btn btn-danger">Delete </a> </td>
                        <td> <a href="/new/lawyers/update.php?update=<?=$data['id'] ?>" class="btn btn-info">Update </a> </td>

                      </tr>
                      <?php }?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>

          <div class="row">



    </section>
  </main><!-- End #main -->

















  <?php
include "../Shared/footer.php";
include "../Shared/script.php";





  ?>