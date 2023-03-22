 <?php
                                                                                                include_once($_SERVER['DOCUMENT_ROOT'] . '/php/crud/config.php');

                                                                                                use Seip\Users;

                                                                                                $_users = new Users();
                                                                                                $user = $_users->show();
    ?>


 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=deviceo-width, initial-scale=1">
     <title>CRUD</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 </head>

 <body>

     <section>
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-sm-6">
                     <h1 class="text-center mb-4">Show</h1>
                     <dl class="row">
                         <dt class="col-sm-3">ID:</dt>
                         <dd class="col-sm-9"><?= $user['id'] ?></dd>
                         <dt class="col-sm-3">User Name</dt>
                         <dd class="col-sm-9"><?= $user['user_name'] ?></dd>
                         <dt class="col-sm-3">Full Name</dt>
                         <dd class="col-sm-9"><?= $user['full_name'] ?></dd>
                         <dt class="col-sm-3">Email</dt>
                         <dd class="col-sm-9"><?= $user['email'] ?></dd>
                         <dt class="col-sm-3">Password</dt>
                         <dd class="col-sm-9"><?= $user['password'] ?></dd>
                         <dt class="col-sm-3">Phone Number</dt>
                         <dd class="col-sm-9"><?= $user['phone_number'] ?></dd>


                         <!-- <dt class="col-sm-3">Is active:</dt>
                         <dd class="col-sm-9">
                             <?php
                                // if($user['is_active']){
                                // echo "Active";
                                // else{
                                //     echo "Inactive";
                                //     }
                                // }
                                ?>
                             <?= $user['is_active'] ? "Active" : "Inactive"; ?>
                         </dd>
                         <dt class="col-sm-3">Picture:</dt>
                         <dd class="col-sm-9"><img class="img-fluid" src="<?= $root ?>uploads/<?= $user['picture'] ?>" alt=""></dd> -->
                     </dl>
                 </div>
             </div>
         </div>
     </section>