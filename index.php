<?php
function generatePassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?()[]{}+-=/*@#$%^&0*€_';
    $charactersLength = strlen($characters);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}

$length = $_POST['length'] ?? '';
$password = generatePassword($length);
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

                <!-- Form per impostare la lunghezza della pasw -->
                <form action="#" method="POST" class="mb-5">
                    <div class="form-group mb-3">
                        <label for="passwordLength">Password Length</label>
                        <input type="number" class="form-control" id="passwordLength" name="length" min="1" max="100"
                            required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="generatePassword">
                        Generate Password
                    </button>
                </form>

                <!-- Dove comparirà la pasw generata  -->
                <div class="form-group" ->
                    <p class="form-control"><strong>Generated Password:</strong> <?= $password ?></p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>