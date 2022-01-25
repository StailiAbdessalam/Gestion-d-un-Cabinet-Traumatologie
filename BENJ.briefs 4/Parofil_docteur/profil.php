<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link of the style de page  -->
    <link rel="stylesheet" href="./profil.css">
    <!-- link of the icon  -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- link of style  nav_bar component  -->
    <link rel="stylesheet" href="../nav_bar_P_N_PR/nav_bar.css">
    <title>Document</title>
</head>
<!-- body start  -->

<body>
    <!-- si le component de nav_bar  -->
    <!-- <abdo-nav-bar></abdo-nav-bar> -->
    <header class="header_doc">
        <div class="nav-bar">
            <img src="../index/logo.png" class="logo" />
            <ul class="menu">
                <li id="hh"><a href="#review">Patients</a></li>
                <li id="hh"><a href="../Nurese/firmier.php">Nurses</a></li>
                <li class="active" id="hh"><a href="./profil.php">Profile</a></li>
                <li>
                    <a href="../index/index1.html"> <button class="hoo" type="button">Log out</button></a>
                </li>
            </ul>
            <i id="Button-menu1" class='bx bx-menu'></i>
            <!-- nav bar click  -->
            <div id="menu">
                <i class='bx bx-x' id="icon-S" style='color:#ffffff'></i>
                <ul class="menuieu">
                    <li><a href=""> Patients </a></li>
                    <li><a href="../Nurese/firmier.php"> Nurses</a></li>
                    <li><a href="./profil.php"> Profile </a></li>
                    <li><a href="../index/index1.html"><button>Log out</button> </a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- <============= -->
    <?php include './connection.php'; ?>
    <?php
    $sql = ' SELECT * FROM docteur ';
    $result = mysqli_query($conn, $sql);
    $docteur = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (isset($_POST['edite'])) {
        $fullName = $_POST['new_name'];
        $nomA = explode(' ', $fullName);
        $birth = $_POST['new_birth'];
        $phone = $_POST['new_phone'];
        $Specialiter = $_POST['new_Specialiter'];
        $Gmail = $_POST['new_Gmail'];

        $sqli = "UPDATE docteur SET nom='$nomA[0]' ,Prenom ='$nomA[1]' ,date_naissance ='$birth',
        phone ='$phone',Specialiter='$Specialiter',Gmail='$Gmail' ";
        if (mysqli_query($conn, $sqli)) {
            header('location:profil.php');
        }
    }

    ?>
    <main>
        <div class="profil_center">
            <div class="details">Profile Details</div>
            <div class="info_docteur_">
                <div class="profil__photos"><img src="./profil_docteur.png" alt=""></div>
                <div class="donner_docteur">
                    <?php foreach ($docteur as  $profil) { ?>
                        <div class="form">
                            <div class="pp">
                                <div class="full_nn">Full Name : <input type="text" name="" id="" value="<?php echo $profil["nom"] . "  " . $profil["Prenom"] ?>" disabled></div>
                                <div class="date_nn"> Date of birth :<input type="date" name="" id="" value="<?php echo $profil["date_naissance"] ?>" disabled></div>
                            </div>
                            <div class="pp">
                                <div class="phone_nn">Phone no :<input type="text" name="" value="0<?php echo $profil["phone"] ?>" disabled></div>
                                <div class="sp_nn">Speciality :<input type="text" name="" value="<?php echo $profil["Specialiter"] ?>" disabled></div>
                            </div>
                            <div class="pp">
                                <div class="mail_nn">GMAIL :<input type="text" name="" value="<?php echo $profil["Gmail"] ?>" disabled></div>
                            </div>
                            <div class="_modifier"><input type="submit" name="Modifier" id="subb" value="Modifier"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <div class="amin">
        <div class="popap">
            <div class="title">
                <div class="P_M">Profile Modification : </div>
                <i class='bx bx-x'></i>
            </div>
            <?php foreach ($docteur as  $profil) { ?>
                <form action="" id="form" method="POST">
                    <div class="input1">
                        <div><i class='bx bx-user'></i> <input type="text" name="new_name" id="" value="<?php echo $profil["nom"] . "  " . $profil["Prenom"] ?>"></div>
                        <div> <input type="date" name="new_birth" id="" value="<?php echo $profil["date_naissance"] ?>"></i></div>
                    </div>
                    <div class="input2">
                        <div><i class='bx bx-mobile-alt'></i> <input type="text" name="new_phone" id="" value="0<?php echo $profil["phone"] ?>"></div>
                        <div> <i class='bx bx-briefcase-alt-2'></i> <input type="text" name="new_Specialiter" id="" value="<?php echo $profil["Specialiter"] ?>"></div>
                    </div>
                    <div class="input3">
                        <div><i class='bx bxl-gmail'></i> <input type="text" name="new_Gmail" id="" value="<?php echo $profil["Gmail"] ?>"></div>
                        <button name="edite">Modifier</button>
                    </div>
                </form>
            <?php } ?>
        </div>

    </div>



    <script src="./profil.js"></script>
    <script src="../nav_bar_P_N_PR/nav_bar.js"></script>
</body>
<!-- body end  -->

</html>