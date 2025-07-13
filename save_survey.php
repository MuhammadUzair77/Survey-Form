<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $satisfaction = isset($_POST['satisfaction']) ? $_POST['satisfaction'] : 'Not answered';
    
    $features = 'Not answered';
    if (isset($_POST['features']) && is_array($_POST['features'])) {
        $features = implode(', ', $_POST['features']);
    }
    
    $usageFrequency = isset($_POST['usage_frequency']) ? $_POST['usage_frequency'] : 'Not answered';
    $recommend = isset($_POST['recommend']) ? $_POST['recommend'] : 'Not answered';
    $age = isset($_POST['age']) ? $_POST['age'] : 'Not answered';
    
   
    $data = "=== New Survey Response ===\n";
    $data .= "Timestamp: " . date('Y-m-d H:i:s') . "\n";
    $data .= "1. Satisfaction: $satisfaction\n";
    $data .= "2. Features used: $features\n";
    $data .= "3. Usage frequency: $usageFrequency\n";
    $data .= "4. Would recommend: $recommend\n";
    $data .= "5. Age group: $age\n\n";
    
    $file = 'survey.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    echo "success";
} else {
    header('HTTP/1.1 400 Bad Request');
    echo "Invalid request method";
}
?>