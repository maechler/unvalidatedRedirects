<?php

// do some other stuff

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: ' . $_POST['redirectURL']);
    exit;
}

?>
<!DOCTYPE html>
<head>
    <title>GOOD GUY</title>
    <meta charset="utf-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: darkgreen;
            font-weight: normal;
        }
        label {
            width: 100px;
            display: inline-block;
            margin: 0 0 10px 0;
        }
        input[type='submit'] {
            margin-left: 104px;
        }
    </style>
</head>
<body>
    <h1>GOOD GUY</h1>
    <form action="/" method="POST">
        <div>
            <label for="username">Username</label>
            <input id="username" type="text">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password">
        </div>

        <input name="redirectURL" type="hidden" value="<?= isset($_GET['redirectURL']) ? $_GET['redirectURL'] : '' ?>">

        <input type="submit" value="Anmelden">
    </form>
</body>