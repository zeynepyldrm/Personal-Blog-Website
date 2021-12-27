<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Admin Page</title>
     
     <link id="theme-style" rel="stylesheet" href="../assets/css/theme-1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   
    <script src="jquery.js"></script>
    
    <style>
        #btnurl{
            
            text-align: center;
            margin: 55px;
            margin-bottom:3px;
            height: 50px;
            width: 100px;
            text-decoration:none;
        }
        a {
         text-decoration: none;
        }
    </style>
</head> 

<body style="background-color: #5bcb73;"> 
    <div id="main" class="vh-100 vw-100" style="background-color: #5bcb73;">
         
          <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6">
            <form id="search" method="get" >
              <div class="input-group" style="margin-top:60px;">
                <input type="text" class="form-control" placeholder="Başlığa göre arama" name="searchTxt">
                <div class="input-group-btn">
                  <button class="btn btn-success" type="submit">
                    Ara
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
              <a href="AddPost.html"  style="text-decoration:none">
                  <button type="button" id="btnurl" class="btn btn-success">Ekle</button> 
              </a>
             <br>
              <a href="updatepost.php"  style="text-decoration:none">
                  <button type="button" id="btnurl" class="btn btn-success">Guncelle</button> 
              </a>
             
            </div>
      
           <div class="col-md-8" style="background-color:white; margin-left:-250px; margin-top: 50px;">
            
                <?php
                    require "getAllPost.php";
                ?>
                
         </div
     
        </div>
    </div>

    </div>
        

</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>