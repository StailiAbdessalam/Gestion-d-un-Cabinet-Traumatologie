<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link of style de page -->
    <link rel="stylesheet" href="./login.css">
    <!-- link of style de footer -->
    <link rel="stylesheet" href="../footre_index.cmp/footre.css">
    <!-- se link pour la lieson des icons -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<!-- body start  -->

<body>
    <!-- header start  -->
    <header>
        <img class="logo-home" src="../index/logo.png" alt="">
        <a href="../index/index1.html" class="bu_home"><button class="e_home">Home</button></a>
    </header>
    <!-- header end  -->

    <?php include '../Parofil_docteur/connection.php'; ?>
    <?php
    if (isset($_POST['nsabo'])) {
        $fullName = $_POST['user_name'];
        $password = $_POST['mot_pass'];
        $sql = "SELECT * FROM docteur  ";
        $result = mysqli_query($conn, $sql);
        $docteur = mysqli_fetch_assoc($result);
        if (($fullName === $docteur['nom']) && ($password === $docteur['Mot_pass'])) {
            header('location:../Parofil_docteur/profil.php');
        }
    }
    ?>


    <!-- main start  -->
    <main>
        <div class="alert_log">
            <div class="partie_gauche">
                <img src="./partie_gauche.png" alt="">
            </div>
            <div class="partie_daroite">
                <div class="en_phrase">Working <span> Log In </span> </div>
                <div class="forma_log">
                    <form action="" method="POST">
                        <div class="aa"> <i class='bx bx-user' style='color:#040404'></i><input type="text" class="ab" name="user_name" placeholder="Full Name"></div>
                        <div class="aa"> <i class='bx bx-lock-alt'></i><input type="password" name="mot_pass" id="" class="ab" placeholder="Password"> </div>
                        <div class="button_log">
                            <input type="submit" class="click_m" value="LOGIN" name="nsabo" id="">
                        </div>
                    </form>
                    <a href="../index/index1.html" class="click_me"><button class="e_back">BACK</button></a>

                </div>
            </div>
        </div>
    </main>
    <!-- main end  -->



    <abdo-footer></abdo-footer>
    
    <script src="../footre_index.cmp/footre.js"></script>
</body>
<!-- body end  -->

</html>