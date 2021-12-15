<?php
function credentials(){
    $host = 'localhost'; // Host name of Database //localhost
    $username = 'root';  // Username of the Database //root
    $password = '';      // Password of the Database if database have password otherwise ''  //DhJmQdDhDND6YzRf
    $database_name = 'laravel'; //name of the database which we want to connect and access
  
    $con = new mysqli($host, $username, $password, $database_name);
    if ($con->connect_errno > 0) {
        die(json_encode('Unable to connect to database [' . $con->connect_error . ']')); // if fail to connect database
    }
    return $con;
}

function getData(){
    $con = config();
      $sql = "SELECT * FROM `private_properties___private_properties`";
      $result = $con->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['COL 1'] != 'property_name'){
            $propertyName = $row['COL 1'];
            $unitsCount = $row['COL 2'];
            $projectType = $row['COL 3'];
            $districtNo = $row['COL 4'];
            $panningArea = $row['COL 5'];
            $topArea = $row['COL 6'];
            $tenure = $row['COL 7'];
            $developer1Name = $row['COL 8'];
            $developer2Name = $row['COL 9'];
            $developer3Name = $row['COL 10'];
            $address = $row['COL 11'];
            $postalCode = $row['COL 12'];
            $foreignerEligible = $row['COL 13'];
            $landSizeSQM = $row['COL 14'];
            $landSizeSAFT = $row['COL 15'];
            $gfaSQM = $row['COL 16'];
            $gfaSQFT = $row['COL 17'];
            $plotratio = $row['COL 18'];
            $buildingFootPrintSQFT = $row['COL 19'];
            $rentalPSFPMSGD = $row['COL 20'];
            $rentalYieldPercentage = $row['COL 21'];
            $averagePSFSGD = $row['COL 22'];
            $insertSQL = "INSERT INTO `private_properties`(`property_name`, `units_count`, `project_type`, 
            `district_no`, `planning_area`, `top_year`, `tenure`, `developer1_name`, `developer2_name`, 
            `developer3_name`, `address`, `postal_code`, `foreigner_eligible`, `land_size_sqm`, `land_size_sqft`, 
            `gfa_sqm`, `gfa_sqft`, `plotratio`, `building_footprint_sqft`, `rental_psf_pm_sgd`, 
            `rental_yield_percentage`, `average_psf_sgd`) VALUES 
            ('$propertyName',$unitsCount,'$projectType',$districtNo,'$panningArea',$topArea,'$tenure',
            '$developer1Name','$developer2Name','$developer3Name','$address',$postalCode,'$foreignerEligible',
            $landSizeSQM,$landSizeSAFT,$gfaSQM,$gfaSQFT,$plotratio,$buildingFootPrintSQFT,$rentalPSFPMSGD,
            $rentalYieldPercentage,$averagePSFSGD)";
            if ($con->query($insertSQL) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              } 
          }
        }
      } else {
        echo "0 results";
      }
      $con->close();
  }
  getData();
?>