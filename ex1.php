
<?php
// PHP code for data retrieval
if (isset($_GET['action']) && $_GET['action'] === 'get_data') {
    // Sample data generation
    $data = array(
        'Category A' => rand(10, 100),
        'Category B' => rand(10, 100),
        'Category C' => rand(10, 100),
        'Category D' => rand(10, 100),
    );

    echo json_encode($data);
}
?>