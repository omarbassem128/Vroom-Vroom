<script defer src="navbar.js"></script>
<navbar-component></navbar-component>
<div id="page"></div>
<link rel="stylesheet" href="car.css">
<?php
include("dbconnection.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['query']) && !empty($_POST['query'])) {
    $search_query = $_POST['query'];
    $sql = "SELECT * FROM car WHERE carName LIKE ?";  

    if ($stmt = $con->prepare($sql)) { 
        $param = "%" . $search_query . "%";
        $stmt->bind_param("s", $param); 
        $stmt->execute();  
        $result = $stmt->get_result();  
        $jsondata;
      if(mysqli_num_rows($result) > 0)
      {
            $userData = [];
            while($row = mysqli_fetch_assoc($result))
            {
                $userData[] = $row; 
            }
            $jsonData = json_encode($userData);
      }
      else{
        echo "no results found 😣";
      }
        $stmt->close();  
    } else {
        echo "Error: " . $con->error;
    }
} else {
    echo "Invalid request";
}

$con->close();  
?>
<script type="module">
      import {RentalC} from "./rentalcontainer.js";
      const dataFromPhp = JSON.parse('<?php echo $jsonData ?>');
      for(const card of dataFromPhp)
      {
        const template = RentalC(card);
        page.innerHTML += template; 
      }
</script>
