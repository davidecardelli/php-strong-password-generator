<?php
session_start();
if (isset($_SESSION['password'])) $password = $_SESSION['password'];
else header('Location: ./index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO -->
    <title>Boolean - Davide Cardelli - Classe 83</title>
    <!-- INSERISCI FAVICON QUI -->
    <link rel="icon" type="image/ico" href="img/logo.png">

    <!-- COLLEGAMENTO FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- COLLEGAMENTO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- COLLEGAMENTO ICONE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- COLLEGAMENTO AL MIO FILE CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- COLLEGAMENTO AL MIO FILE JAVASCRIPT -->
    <script defer src="script.js"></script>

</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 card m-auto p-5 text-center">

                <!-- Dove comparirà la pasw generata  -->
                <div class="form-group" ->
                    <p class="form-control"><strong>Generated Password:</strong> <?= $password ?></p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>