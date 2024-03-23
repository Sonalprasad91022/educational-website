<?php
// PHP code for fixed data
if (isset($_GET['action']) && $_GET['action'] === 'get_data') {
    $data = array(
        '2019-20' => 10,
        '2020-21' => 15,
        '2021-22' => 17,
        '2022-23' => 15,
        '2023-24' => 12,
    );

    header('Content-Type: application/json');
    echo json_encode($data);
}
?>
