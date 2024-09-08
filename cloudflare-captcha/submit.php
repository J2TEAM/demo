<?php
define('SECRET_KEY', 'EDIT_ME');

function verifyCaptcha($response) {
    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = [
        'secret' => SECRET_KEY,
        'response' => $response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true
    ]);
    $res = curl_exec($ch);
    curl_close($ch);

    return json_decode($res, true);
}

if (isset($_POST['g-recaptcha-response'])) {
    $response = $_POST['g-recaptcha-response'];
    $result = verifyCaptcha($response);

    if ($result['success']) {
        echo 'Name: ' . $_POST['name'] . '<br>';
        echo 'Email: ' . $_POST['email'] . '<br>';
        echo 'Message: ' . $_POST['message'] . '<br>';

        // TODO: save to database
    } else {
        echo 'reCaptcha validation failed.';
    }
}
