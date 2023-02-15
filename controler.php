<?php 
       session_start();
       
       
       
        ?>
<?php include('config.php'); ?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
   <link rel="stylesheet" href="css/fontawesome.min.css"/>
    <title>مرحبا بالعالم!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">اسم الموقع </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li> -->
           
        
          </ul>
        </div>
      </div>
    </nav>
<section class="container-fluid">
   <div class="row">
  <aside class="col-lg-3 "> 

 <?php $sql=mysqli_query($con,"SELECT *FROM `login` ");
            

                $result=mysqli_fetch_assoc($sql);
                   $_SESSION['id_user']=$result['id_user'];
               
                   ?>
    <div class="list-group">
    <a href="controler.php" class="list-group-item list-group-item-action"> اهلا بك يا <?php echo $result['name_user']; ?></a>

      <a href="controler.php" class="list-group-item list-group-item-action">الصفحة الرئيسية</a>
      <a href="newpost.php" class="list-group-item list-group-item-action"> انشاء منشور </a>
      <a href="controler.php?logout" class="list-group-item list-group-item-action"> تسجيل الخروج</a>
    
    </div>
      


  </aside>
  <article class="col-lg-6">
   
    <table class="table" style="max-width: 400px; margin: auto; position: relative; top: 100px;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
          <th scope="col">العمليات</th>
        </tr>
      </thead>
      <tbody>

      <?php  
                      
                     
                      if(isset($_GET['delete'])){
                       
                         $sql=mysqli_query($con,"DELETE FROM `newpost` WHERE id_post='$_GET[delete]' ");
    
                         if($sql){
                            echo "تم الحدف " ;
                            header("location:http://localhost/test-adam/controler.php");
                         }else{
    
                            echo "لم يتم الحدف";
                         }
                       
                      }
                        
                      
    
    
    
                      ?>
         
     <?php 
      
       $sql=mysqli_query($con,"SELECT * FROM `newpost`");
        
        $contr=1;
        ?><?php
            while($res=mysqli_fetch_assoc($sql)){

                    ?>
               

                 
                <tr>
                <th scope="row"> <?php echo $contr?></th>
                <td><?php echo $res['title'];?></td>
                <td> <?php echo $res['date'];?></td>
               
                <td> <img class="adamnty" src=" <?php echo $res['image']; ?>" width="70px"/></td>
              
                <td>
                    
                <a href="http://localhost/test-adam/editpost.php?update=<?php echo $res['id_post']?> " name="add"><i class="bi bi-person-fill-add"></i></a>
                <a href="controler.php?delete=<?php echo $res['id_post']?> " name="del"><i class="bi bi-trash3-fill"></i></a>
                 
              
              </td>
              </tr>
                
                <?php

                    $contr++;

               ?><?php  
               
               
               ?><?php
                        
               
            }
      
            

     
     
     ?>
        
      </tbody>
    </table>



  </article>
</div>
</section>
<?php

if(isset($_GET['logout'])){
  session_destroy();
  header("Location: login.php");
}


 ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>