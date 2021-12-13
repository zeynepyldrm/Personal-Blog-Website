<?php
  $dbServerName = "xxxxxxxx";
$dbUsername = "zeynep";
$dbPassword = "123";
$dbName = "test";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$conn -> set_charset("utf8");


$sql = "SELECT 	Header,Content,AverageTime,PostDate, HeaderImage FROM Post";
$result = $conn->query($sql);

function getDataURI($image) {
    return 'data:image/jpeg;base64,'. base64_encode($image);
}

if ($result->num_rows > 0) {
    // output data of each row
    echo '
    <section class="blog-list px-3 py-5 p-md-5">
       <div class="container">';
    while($row = $result->fetch_assoc()) {
        
        //echo "Header: " . $row["Header"]. "<br>" ."Content: " .$row["Content"]. "<br>";
        echo ' <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
         <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
        
        <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="'.getDataURI($row["HeaderImage"]).'" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html">'.$row["Header"].'</a></h3>
						    <div class="meta mb-1"><span class="date">Published '.$row["PostDate"].'</span><span class="time">'.$row["AverageTime"].' min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro">'.$row["Content"].'</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			   ';
    }
    echo '
        <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
		</nav>
    </div> 
         </section>';
} 
else {
    echo "0 results";
}
?>