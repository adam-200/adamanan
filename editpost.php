<?php include('config.php');?>
<?php    
    //  $res="SELECT* FROM anan JOIN adam ON anan.id_anan=adam.id_adam";      // 
$sql=mysqli_query($con,"SELECT * FROM `newpost`");
        

?><?php
   $res=mysqli_fetch_assoc($sql);



?> 

<?php  


if(isset($_POST['chik'])){
    echo 11;
   
 $title=$_POST['title'];
// $date=$_POST['date'];
// $content=$_POST['content'];
// $image=$_FILES['image']['name'];
// $path='img/'.$image;
// $category=$_POST['category'];
// $form_floating=$_POST['publisher_id'];

$sql=mysqli_query($con,"UPDATE `newpost` SET `title`='$title' WHERE `id_post`='$_GET[update]'");



if($sql){

//    move_uploaded_file($_FILES['image']['tmp_name'],$path);
   echo "تم التعديل  المنتج بنجاح" ;

   
}
}




?>


 

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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


    <div class="list-group">
      <a href="controler.php" class="list-group-item list-group-item-action">الصفحة الرئيسية</a>
      <a href="newpost.php" class="list-group-item list-group-item-action"> انشاء منشور </a>
      <a href="#" class="list-group-item list-group-item-action"> تسجيل الخروج</a>
    
    </div>



  </aside>
  <article class="col-lg-6">
   
    <form method="post" class="row"  action="" enctype="multipart/form-data">
        <div class="mb-3 col-8">
          <label for="exampleInputEmail1" class="form-label">عنوان الخبر</label>
          <input value="<?php echo $res['title'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="text" name="title"  >
        </div>
        
        <!-- <div class="mb-3 col-4">
          <label for="exampleInputPassword1" class="form-label">تاريخ النشر</label>
          <input value="<?php echo $res['date'];?>"  type="date" class="form-control" id="exampleInputPassword1" name="date">
        </div>
  
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">تفاصيل الخبر  الخبر</label>
          <textarea value="<?php echo $res['content'];?>"  class="form-control" id="exampleInputEmail1" aria-describedby="text" name="content" ></textarea>
        </div>
  
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> صورة الخبر </label>
          <input  type="file" class="form-control" id="exampleInputPassword1" name="image" >
        </div> -->
  
        
  <!-- <div class="form-group">
    <b>تصنيف الخبر : </b>
      <label class="radio-inline">
        <input type="radio" name="category" value="سياسي" >
        سياسي
      </label>
      <label class="radio-inline">
        <input type="radio" name="category" value="اقتصادي" >
        اقتصادي
      </label>
  
      <label class="radio-inline">
        <input type="radio" name="category" value="اجتماعي">
        اجتماعي
      </label>
  
      <label class="radio-inline">
        <input type="radio" name="category" value="ثقافي" >
        ثقافي
      </label>
      
      <label class="radio-inline">
        <input type="radio" name="category" value="رياضي" >
        رياضي
      </label> -->
<!--   
  </div>
  <label>اسم الناشر </label>
  <div class="form-floating">
    -->
    <!-- <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
      <option selected>خالد</option>

      <option value="3">محمود</option>
    </select>
  </div> -->
  <input  name="chik" type="submit" class="btn btn-primary col-3 " />
</form>
  </article>
</div>
</section>
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