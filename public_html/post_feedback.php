<?php

$email = isset($_POST['email']) ? $_POST['email'] : '';
$target = __DIR__ . '/feedbacks/' . date('Y-m-d_H-i-s') . '_' . $email . '.json';
$data = [];

try {
    $data = !empty($_POST) ? json_encode($_POST) : null;
    if ($data) {
        $data = [
            'status' => file_put_contents($target, $data),
        ];
    } else {
        $data = [
            'status' =>  false,
        ];
    }

} catch (Exception $e) {
    $data = [
        'status' => false,
        'json' => json_last_error_msg(),
        'error' => $e->getMessage(),
    ];
}

$data['created_at'] = time();

header('Content-Type: application/json');
echo json_encode($data);
die();
