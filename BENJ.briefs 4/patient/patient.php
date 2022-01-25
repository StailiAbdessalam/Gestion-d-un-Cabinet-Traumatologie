<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./patient.css">
    <!-- link of the icon  -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- link of style  nav_bar component  -->
    <link rel="stylesheet" href="../nav_bar_P_N_PR/nav_bar.css">
    <title>Document</title>
</head>

<?php include '../Parofil_docteur/connection.php'; ?>
<?php
$sql = ' SELECT * FROM patients ';
$result = mysqli_query($conn, $sql);
$patients = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['edite'])) {
    $fullName = $_POST['new_name'];
    $nomA = explode(' ', $fullName);
    $birth = $_POST['new_birth'];
    $phone = $_POST['new_phone'];
    $Maladie = $_POST['new_maladie'];
    $Gmail = $_POST['new_Gmail'];
    $query = "INSERT INTO patients (nom,Prenom,DateNaissance,Gmail,NM, Maladie) VALUES ('$nomA[0]','$nomA[1]','$birth','$Gmail','$phone','$Maladie')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location:patient.php');
    };
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM patients WHERE id=$id ;";
    if (mysqli_query($conn, $sql)) {
        header('location:patient.php');
    }
}

if (isset($_POST['brakkk'])) {

    $idIF = $_GET["id"];

    $fullName = $_POST['Nname'];
    $nomC = explode(' ', $fullName);

    $birth = $_POST['Nbirth'];
    $malaidee = $_POST['NWork'];
    $phone = $_POST['Nphone'];
    $Gmail = $_POST['NGmail'];
    $sqli = " UPDATE patients SET `nom`='$nomC[0]',`Prenom`='$nomC[1]',`DateNaissance`='$birth',`Gmail`='$Gmail',`NM`='$phone',`Maladie`='$malaidee' WHERE id like $idIF ";
    $result =  mysqli_query($conn, $sqli);
    header(("location:http://localhost/Gestion-d-un-Cabinet-Traumatologie/BENJ.briefs%204/patient/patient.php"));
}

?>






<body>
    <header class="header_doc">
        <div class="nav-bar">
            <img src="../index/logo.png" class="logo" />
            <ul class="menu">
                <li id="hh"><a href="./patient.php">patients</a></li>
                <li id="hh"><a href="../Nurese/firmier.php">Nurses</a></li>
                <li class="active" id="hh"><a href="../Parofil_docteur/profil.php">Profile</a></li>
                <li>
                    <a href="../index/index1.html"> <button class="hoo" type="button">Log out</button></a>
                </li>
            </ul>
            <i id="Button-menu1" class='bx bx-menu'></i>
            <!-- nav bar click  -->
            <div id="menu">
                <i class='bx bx-x' id="icon-S" style='color:#ffffff'></i>
                <ul class="menuieu">
                    <li><a id="aa" href="../patient/patient.php"> patients </a> </li>
                    <li> <a id="aa" href="../Nurese/firmier.php"> Nurses</a></li>
                    <li><a id="aa" href="../Parofil_docteur/profil.php">Profile </a> </li>
                    <li> <a href="../index/index1.html"><button>Log out</button></a></li>
                </ul>
            </div>
        </div>
    </header>





    <main class="gestion_P">
        <div class="header_T">
            <div class="all">All Patient
            </div>
            <div class="ajouter">
                <div class="add">Add Patient :</div>
                <i class='bx bx-plus'></i>
            </div>
        </div>
        <div class="scroll">

            <table class="hi">
                <tr class="HEADER">
                    <th>Full Name</th>
                    <th>Phone </th>
                    <th>Date of birth</th>
                    <th>Gmail</th>
                    <th>Maladie</th>
                    <th class="action_D">Action</th>
                </tr>
                <tbody>
                    <?php foreach ($patients as $patient) { ?>
                        <tr>
                            <td class="a"><?php echo $patient["nom"] . " " . $patient["Prenom"]  ?></td>
                            <td class="b"><?php echo "0" . $patient["NM"]  ?></td>
                            <td class="c"><?php echo $patient["DateNaissance"] ?></td>
                            <td class="d"><?php echo $patient["Gmail"]  ?></td>
                            <td class="e"><?php echo $patient["Maladie"]  ?></td>
                            <td class="action_BOttonat">
                                <form action=<?php echo "patient.php?id=" . $patient["id"]  ?> action="" method="post">
                                    <input type="submit" class="but1" data-id="<?= $patient["id"] ?>" name="modifier" value="update"></input>
                                    <input type="hidden" name="id" value="<?php echo $patient["id"] ?>">
                                    <input type="submit" class="but2" name="delete" value="Delete"></input>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            

            <table id="table_responsive">
                <?php foreach ($patients as $patient) { ?>
                    <tr>
                        <th>Full Name</th>
                        <td><?php echo $patient["nom"] . " " . $patient["Prenom"]  ?></td>
                    </tr>
                    <tr>
                        <th>phone</th>
                        <td><?php echo "0" . $patient["NM"]  ?></td>
                    </tr>
                    <tr>
                        <th>Date of birth</th>
                        <td><?php echo $patient["DateNaissance"] ?></td>
                    </tr>
                    <tr>
                        <th>GMAIL</th>
                        <td><?php echo $patient["Gmail"]  ?></td>
                    </tr>
                    <tr>
                        <th>Work starting date</th>
                        <td><?php echo $patient["Maladie"]  ?></td>
                    </tr>
                    <td class="action_BOttonat">
                        <form action=<?php echo "patient.php?id=" . $patient["id"]  ?> action="" method="post">
                            <input type="submit" class="but1" data-id="<?= $patient["id"] ?>" name="modifier" value="update"></input>
                            <input type="hidden" name="id" value="<?php echo $patient["id"] ?>">
                            <input type="submit" class="but2" name="delete" value="Delete"></input>
                        </form>
                    </td>
                <?php } ?>
                <i class='bx bx-chevrons-down' style='color:#4fa8f0' id="flex"></i>
            </table>
        </div>

    </main>




    <div class="list">
        <div class="header_T">
            <div class="all">All Nurses</div>
            <div class="ajouter">
                <div class="add">Add Nurse :</div>
                <i class='bx bx-plus'></i>
            </div>
        </div>
        <table>
            <?php foreach ($patients as $patient) { ?>

                <tr class="ana">
                    <th><?php echo $patient["nom"] . " " . $patient["Prenom"]  ?> <i class='bx bx-chevrons-up' style='color:#4fa8f0'></i></th>
                </tr>
            <?php } ?>
        </table>
    </div>



    <div class="amin">
        <div class="popap">
            <div class="titleee">
                <div class="P_M">ADD Patient : </div>
                <i class='bx bx-x'></i>
            </div>

            <form action="" id="form" method="POST">
                <div class="input1">
                    <div><i class='bx bx-user'></i> <input type="text" name="new_name" id="" value="" placeholder="Full Name" require></div>
                    <div> <input type="date" name="new_birth" id="" value="" placeholder="Date Of Birth" require></i></div>
                </div>
                <div class="input2">
                    <div><i class='bx bx-mobile-alt'></i> <input type="text" name="new_phone" id="" value="" placeholder="Phone No" require></div>
                    <div><input type="text" name="new_maladie" id="" value="" placeholder="Your maladie" require></div>
                </div>
                <div class="input3">
                    <div><i class='bx bxl-gmail'></i> <input type="email" name="new_Gmail" id="hahahi" value="" placeholder="Your Email" require></div>
                    <input type="submit" id="brak" name="edite" value="AJOUTER">
                </div>
            </form>
        </div>
    </div>

    <?php

    if (isset($_GET['id'])) {
        $id = $_GET["id"];
        $sql = " SELECT * FROM patients where id like $id ";
        $resu = mysqli_query($conn, $sql);
        $patients = mysqli_fetch_assoc($resu);
        $fullname = $patients["nom"] . " " . $patients["Prenom"];
        echo '
<div class="update_popap">
<div class="popap">
    <div class="titleee">
        <div class="P_M">UPDATE PATIENT : </div>
       <a href ="../patient/patient.php"> <i class="bx bx-x"></i></a>
    </div>
    <form action="" id="form" method="POST">
        <div class="input1">
            <div><i class="bx bx-user"></i> <input type="text" name="Nname" id="" value="' . $fullname . '" class="A1"></div>
            <div> <input type="date" name="Nbirth" id="" value=' . $patients["DateNaissance"] . ' class="A2"></i></div>
        </div>
        <div class="input2">
            <div><i class="bx bx-mobile-alt"></i> <input type="text" name="Nphone" id="" value=' . $patients["NM"] . ' class="A3"></div>
            <div> <input type="text" name="NWork" id="" value=' . $patients["Maladie"] . '  class="A4" placeholder="Your maladie"  ></div>
        </div>
        <div class="input3">
            <div><i class="bx bxl-gmail"></i> <input type="text" name="NGmail" id="hahahi" value=' . $patients["Gmail"] . ' class="A5" placeholder="Your Email" ></div>
            <input type="submit" id="brak" name="brakkk" value="UPDATE">
        </div>
    </form>
</div>
</div>
';
    }
    ?>












    <script src="./patients.js"></script>
</body>

</html>