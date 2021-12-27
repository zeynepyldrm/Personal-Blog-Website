<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>update page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="jquery.js"></script>
</head> 

<body>

<?php
include "mysql_conn.php"; // Using database connection file here
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST'){
    $header = $_POST['header'];
    $id = $_POST['searchTxt'];
    $content=$_POST['content'];
    $qry = "update Post set Header = '" . $header . "' where Id = " . $id;
    if( $conn->query($qry)) {
            mysqli_close($conn); // Close connection
            header ("Location:https://bim457.online/19090700029/BlogProject/forms/adminPage.php");
           // echo 'success bro';
            exit;
    }
}
elseif ($method == 'GET'){
   
    $id =$_GET['searchTxt']; // header alanına göre filtereleme
    $qry = mysqli_query($conn,"select * from Post where Id='$id'"); // select query
   
    $data = mysqli_fetch_array($qry); // fetch data
    $header = $data['Header'];
    }
    ?>
    <div id="main" class="vh-100 vw-100" style="background-color: #5bcb73;">
        <div class="row h-100">
            <div class="col-md-4"></div>
           
           
            <div class="col-md-4 my-auto card card-body">
                <form id="iForm">
                    <div class="input-group">
                              <div class="form-outline">
                                <input id="search-input" type="search" name="searchTxt" placeholder="Id ile arama yapınız." class="form-control" value="<?php echo $id ?>">
                                <input type="submit" value="Ara">
                              </div>
                            
                            </div>
                </form>
              <form id="infoForm" method="POST">
                            
                             <div class="form-group mb-3">
                              <input type="text" class="form-control" name="searchTxt" value="<?php echo $id ?>" style="display: none;" >   
                            <label for="email_input">Konu başlığı</label>
                            <input type="text" class="form-control" name="header" value="<?php echo $header ?>" id="email_input" aria-describedby="emailHelp" >
                        </div>
                        <div class="form-group mb-3">
                             <label for="exampleFormControlFile1">Konu Başlığı Resimi</label><br>
                         <input type="file" class="form-control-file" name="headerImage"id="exampleFormControlFile1">
                            
                        </div>
                        
                         <div class="form-group mb-3">
                           <label for="exampleFormControlTextarea1">İçerik Yazısı</label>
                          <textarea class="form-control" name="content" id="content" ></textarea>
                        </div>
                        
                         <div class="form-group mb-3">
                             <label for="exampleFormControlFile1">Konu içeriği resmi</label><br>
                             <input type="file" class="form-control-file" name="contentImage" id="exampleFormControlFile1">
                        </div>
                       <div class="form-group mb-3">
                            <label>Ortalama Okunma Süresi</label>
                            <input type="text" class="form-control" name="averageRead" value="<?php echo $header ?>"  id="email_input" aria-describedby="emailHelp">
                            
                        </div>
        
                        <div class="form-group mb-3">
                            <label>Kategori</label>
                             <input type="text" class="form-control" name="category" id="email_input" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Tarih</label>
                             <input type="text" class="form-control" name="date" id="email_input" aria-describedby="emailHelp">
                        </div>
                      
                <button type="submit" class="btn btn" id="submit_button" style="background-color: #5bcb73;">Güncelle</button>
 
              </form>
            
            </div>
            <div class="col-md-4"></div>
            
        </div>
        </form>
    </div

</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>