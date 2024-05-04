<?php
// define variables and set to empty values
$fullName = $age = $education = $interactedChatGPT = $expectations_or_concerns = $Likely_use = $your_experience = $overall_satisfaction = $ChatGPT_enhances = $Which_Scenario = $compare_to_traditional_methods = $specific_subjects = $features_or_functionalities = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullName = test_input($_POST['fullName']);
$age = test_input($_POST['age']);
$education = test_input($_POST['education']);
$interactedChatGPT = test_input($_POST['interactedChatGPT']);
$expectations_or_concerns = test_input($_POST['expectations_or_concerns']);
$Likely_use = test_input($_POST['Likely_use']);
$your_experience = test_input($_POST['your_experience']);
$overall_satisfaction = test_input($_POST['overall_satisfaction']);
$ChatGPT_enhances = test_input($_POST['ChatGPT_enhances']);
$Which_Scenario = test_input($_POST['Which_Scenario']);
$compare_to_traditional_methods = test_input($_POST['compare_to_traditional_methods']);
$specific_subjects = test_input($_POST['specific_subjects']);
$features_or_functionalities = test_input($_POST['features_or_functionalities']);
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include 'Check_con.php';

// Corrected SQL INSERT operation and error handling
$sql = "INSERT INTO Responses (fullName, age, education, interactedChatGPT, expectations_or_concerns, Likely_use, your_experience, overall_satisfaction, ChatGPT_enhances, Which_Scenario, compare_to_traditional_methods, specific_subjects, features_or_functionalities)

VALUES ('$fullName', '$age', '$education', '$interactedChatGPT', '$expectations_or_concerns', '$Likely_use', '$your_experience', '$overall_satisfaction', '$ChatGPT_enhances', '$Which_Scenario', '$compare_to_traditional_methods', '$specific_subjects', '$features_or_functionalities')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fetching records after insertion
if ($stmt = $conn->query("SELECT * FROM Responses;")) {
    echo "No of records : " . $stmt->num_rows . "<br>";
    while ($row = $stmt->fetch_assoc()) {
        echo $row['fullName'] . " " . 
             $row['age'] . " " . 
             $row['education'] . " " . 
             $row['interactedChatGPT'] . " " . 
             $row['expectations_or_concerns'] . " " .  // Corrected
             $row['Likely_use'] . " " . 
             $row['your_experience'] . " " . 
             $row['overall_satisfaction'] . " " . 
             $row['ChatGPT_enhances'] . " " . 
             $row['Which_Scenario'] . " " . 
             $row['compare_to_traditional_methods'] . " " .  // Corrected
             $row['specific_subjects'] . " " .  // Corrected
             $row['features_or_functionalities'] . "<br>";  // Corrected
    }
} else {
    echo $conn->error;
}


if($stmt = $conn->query("SELECT * FROM Responses;")){
  echo "No of records : ".$stmt->num_rows."<br>";
  while ($row = $stmt->fetch_assoc()) {
	echo $row['fullName'],$row['age'],$row['education'],$row['interactedChatGPT'],$row['expectations_or_concerns'],$row['Likely_use'],$row['your_experience'],$row['overall_satisfaction'],$row['ChatGPT_enhances'],$row['Which_Scenario'],$row['compare_to_traditional_methods'],$row['specific_subjects'],$row['features_or_functionalities']."<br>";
  }
}else{
echo $connection->error;
}


$conn->close();




?>
