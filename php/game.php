<?php
include __DIR__ . "../../Application/Database.php";
session_start();

$data = new Database();

$category = $data->getItemByValue('categories', 'category', 'Játék');
$compenent = new Database();


?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../files/css/main.css?=<?= rand(1, 12000) ?>">
    <title>Micro Tech - Játékok</title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-joystick' style="cursor: pointer;"></i>
            <span class="logo_name" style="cursor: pointer;">Micro Tech</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#home">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#home">Home</a></li>
                </ul>
            </li>
            <li>
                <a href="#user">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Felhasználó</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#user">Felhasználó</a></li>
                </ul>
            </li>
            <li>
                <a href="explore.php">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Felfedezés</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="explore.php">Felfedezés</a></li>
                </ul>
            </li>
            <div class="top-border">
                <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-joystick'></i>
                            <span class="link_name">Games</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Games</a></li>
                        <?php foreach ($category as $key => $result) : ?>
                            <li id="<?= $result["id"]; ?>"><a href="#Kat<?= $result["id"];  ?>">
                                    <?= $result["name"]; ?><br>
                                </a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </div>
            <li>
                <section class="profile-details" id="">
                    <div class="profile-content">
                        <img src="../files/images/user.jpg" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name"><?php echo $_SESSION['fullname']; ?></div>
                        <div class="job"><?php echo $_SESSION['permission']; ?></div>
                    </div>
                    <a href="logout.php"><i class='bx bx-log-out'></i></a>
                </section>
            </li>
        </ul>
    </div>
    <section class="home-section" id="home">
    </section>
    <section class="home-section" id="user">
        <div class="user-border">
            <div class="user-data">
                <h1>Felhasználó adatai</h1>
                <ul>
                    <li> Username: <span class="red"><?php echo $_SESSION['username']; ?> </span><br></li>
                    <li> Email: <span class="red"><?php echo $_SESSION['email']; ?> </span><br></li>
                    <li> Jogosultás: <span class="red"><?php echo $_SESSION['permission']; ?></span><br></li>
                </ul>
            </div>
            <div class="user-picture">
                <figure>
                    <img src="../files/images/user.jpg" alt="" class="user-profilepicture"><br>
                    <figcaption class="img-description">
                        Név: <?php echo $_SESSION['fullname']; ?>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-joystick");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
        let sidebarBtnn = document.querySelector(".logo_name");
        sidebarBtnn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>

</html>