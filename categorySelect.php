<!DOCTYPE html>
<html>

<head>
    <title>test</title>
</head>


<?php
require "mysql_conn.php";
$sql = "SELECT SubjectId, Name from Subject";

$result = $conn->query($sql);



// output data of each row
echo '
    <div class="form-group" style="width: 80px;">
     <h4 style="margin: 30px;">Filtrele</h4>
    <select class="form-control" id="categorySelector" name="categorySelector" style="height: 3.50rem; width:200px; margin-left:190px">
    ';
while ($row = $result->fetch_assoc()) {

    //echo "Header: " . $row["Header"]. "<br>" ."Content: " .$row["Content"]. "<br>";
    echo '<option style="font-size:12px" value=' . $row["SubjectId"] . '>' . $row["Name"] . '</option>';
}
echo '
        </select>
          
         
      </div> 
       <div class="custom-control" style="margin-left: 176px;">
            <input type="checkbox" id="check">
            <label>Tarihe Göre Sırala</label>
        </div>
          ';

?>

<script>
    $('#categorySelector').on('change', selectChanged);

    var wind = "index.php"

    function selectChanged(e) {

        category = e.target.value;
        console.log(category);
        window.location.href = "index.php?categoryid=" + category;
    }
</script>
<script>
    $('#check').on('change', function() {
        var checked = this.checked;
        $('#check') = checked;
        window.location.href = "index.php?checked=" + checked;
     } );
    
</script>

</html>