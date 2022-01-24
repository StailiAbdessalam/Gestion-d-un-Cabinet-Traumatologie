<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./firmier.css">
    <!-- link of the icon  -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- link of style  nav_bar component  -->
    <link rel="stylesheet" href="../nav_bar_P_N_PR/nav_bar.css">
    <title>Document</title>
</head>

<?php include '../Parofil_docteur/connection.php'; ?>
<?php
$sql = ' SELECT * FROM infirmieres ';
$result = mysqli_query($conn, $sql);
$infirmieres = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_POST['edite'])) {
    // $id_to_update = mysqli_real_escape_string($conn, $_POST['id']);
    $fullName = $_POST['new_name'];
    $nomA = explode(' ', $fullName);
    $birth = $_POST['new_birth'];
    $phone = $_POST['new_phone'];
    $SWork_starting_date = $_POST['new_Work_starting_date'];
    $Gmail = $_POST['new_Gmail'];
    $query = "INSERT INTO infirmieres (nom,Prenom,date_naissance,Gmail,NM, WorkStarting) VALUES ('$nomA[0]','$nomA[1]','$birth','$Gmail','$phone','$SWork_starting_date')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location:firmier.php');
    };
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM infirmieres WHERE id=$id ;";
    mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        header('location:firmier.php');
    }
}
// ayfdm<i:uezgquudg:es:fgufegqoG OIHhaPZDI §Ihgzir!hgrzsd


if (isset($_POST['modifier'])) {
    $id = $_POST['modifier'];
    $sql = "SELECT * FROM infirmieres WHERE id=$id;";
    mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        header('location:firmier.php');
    }
}

?>

<body>
    <header class="header_doc">
        <div class="nav-bar">
            <img src="../index/logo.png" class="logo" />
            <ul class="menu">
                <li id="hh"><a href="#review">Patients</a></li>
                <li id="hh"><a href="#about">Nurses</a></li>
                <li class="active" id="hh"><a href="../Parofil_docteur/profil.php">Profile</a></li>
                <li>
                    <a href="../index/index1.html"> <button class="hoo" type="button">Home</button></a>
                </li>
            </ul>
            <i id="Button-menu1" class='bx bx-menu'></i>
            <!-- nav bar click  -->
            <div id="menu">
                <i class='bx bx-x' id="icon-S" style='color:#ffffff'></i>
                <ul class="menuieu">
                    <li><a id="aa" href=""> Patients </a> </li>
                    <li> <a id="aa" href="./firmier.php"> Nurses</a></li>
                    <li><a id="aa" href="../Parofil_docteur/profil.php">Profile </a> </li>
                    <li> <a href="../index/index1.html"><button>home</button></a></li>
                </ul>
            </div>
        </div>
    </header>





    <main class="gestion_P">
        <div class="header_T">
            <div class="all">All Nurses</div>
            <div class="ajouter">
                <div class="add">Add Nurse :</div>
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
                    <th>Work starting date</th>
                    <th class="action_D">Action</th>
                </tr>
                <tbody>
                    <?php foreach ($infirmieres as $infirmiere) { ?>
                        <tr>
                            <td class="a"><?php echo $infirmiere["nom"] . " " . $infirmiere["Prenom"]  ?></td>
                            <td class="b"><?php echo "0" . $infirmiere["NM"]  ?></td>
                            <td class="c"><?php echo $infirmiere["date_naissance"] ?></td>
                            <td class="d"><?php echo $infirmiere["Gmail"]  ?></td>
                            <td class="e"><?php echo $infirmiere["WorkStarting"]  ?></td>
                            <td class="action_BOttonat">
                                <form action="" method="post">
                                    <input type="button" class="but1" name="modifier" value="update"></input>
                                    <input type="hidden" name="id" value="<?php echo $infirmiere["id"] ?>">
                                    <input type="submit" class="but2" name="delete" value="Delete"></input>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <table id="table_responsive">
                <?php foreach ($infirmieres as $infirmiere) { ?>
                    <tr>
                        <th>Full Name</th>
                        <td><?php echo $infirmiere["nom"] . " " . $infirmiere["Prenom"]  ?></td>
                    </tr>
                    <tr>
                        <th>phone</th>
                        <td><?php echo "0" . $infirmiere["NM"]  ?></td>
                    </tr>
                    <tr>
                        <th>Date of birth</th>
                        <td><?php echo $infirmiere["date_naissance"] ?></td>
                    </tr>
                    <tr>
                        <th>GMAIL</th>
                        <td><?php echo $infirmiere["Gmail"]  ?></td>
                    </tr>
                    <tr>
                        <th>Work starting date</th>
                        <td><?php echo $infirmiere["WorkStarting"]  ?></td>
                    </tr>
                    <td class="action_BOttonat">
                        <form action="" method="post">
                            <input type="button" class="but1" name="modifier" value="update">
                            <input type="hidden" name="id" value="<?php echo $infirmiere["id"]  ?>">
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
            <?php foreach ($infirmieres as $infirmiere) { ?>
                <tr class="ana">
                    <th><?php echo $infirmiere["nom"] . " " . $infirmiere["Prenom"]  ?> <i class='bx bx-chevrons-up' style='color:#4fa8f0'></i></th>
                </tr>
            <?php } ?>
        </table>
    </div>



    <div class="amin">
        <div class="popap">
            <div class="titleee">
                <div class="P_M">Profile Modification : </div>
                <i class='bx bx-x'></i>
            </div>

            <form action="" id="form" method="POST">
                <div class="input1">
                    <div><i class='bx bx-user'></i> <input type="text" name="new_name" id="" value=""></div>
                    <div> <input type="date" name="new_birth" id="" value=""></i></div>
                </div>
                <div class="input2">
                    <div><i class='bx bx-mobile-alt'></i> <input type="text" name="new_phone" id="" value=""></div>
                    <div> <input type="date" name="new_Work_starting_date" id="" value=""></div>
                </div>
                <div class="input3">
                    <div><i class='bx bxl-gmail'></i> <input type="text" name="new_Gmail" id="hahahi" value=""></div>
                    <input type="submit" id="brak" name="edite" value="AJOUTER">
                </div>
            </form>
        </div>
    </div>



    <div class="update_popap">
        <div class="popap">
            <div class="titleee">
                <div class="P_M">Profile Modification : </div>
                <i class='bx bx-x'></i>
            </div>
            <form action="" id="form" method="POST">
                <div class="input1">
                    <div><i class='bx bx-user'></i> <input type="text" name="" id="" value="" class="A1"></div>
                    <div> <input type="date" name="" id="" value="" class="A2"></i></div>
                </div>
                <div class="input2">
                    <div><i class='bx bx-mobile-alt'></i> <input type="text" name="new_phone" id="" value="" class="A3"></div>
                    <div> <input type="date" name="" id="" value="" class="A4"></div>
                </div>
                <div class="input3">
                    <div><i class='bx bxl-gmail'></i> <input type="text" name="" id="hahahi" value="<?php echo $id ?>" class="A5"></div>
                    <input type="submit" id="brak" name="" value="UPDATE">
                </div>
            </form>
        </div>
    </div>








    <script src="./firmier.js"></script>
</body>

</html>