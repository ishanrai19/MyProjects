<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&family=Dancing+Script&family=Yrsa&display=swap" rel="stylesheet">
</head>


<body>
    <header class="title">
        <div class="div center">
            <h1>
                Patel Printing Inks
            </h1>
            <h3 class="center">Office and Factory</h3>
            <p class="center">339-K, Shivaji Nagar, Indore - 452003</p>
            <p class="center">Phone : 434217, 541307</p>
        </div>
    </header>
    <header class="navbar">
        <nav>
            <ul>
                <li class="list-item" id="item1">
                    <a href="./RMEntry.php">
                        RM Entry
                    </a>
                </li>
                <li class="list-item" id="item2">
                    <a href="./CustomerEntry.html">
                        Customer Entry
                    </a>
                </li>
                <li class="list-item" id="item3">
                    <a href="./FormulaEntry.html">
                        Formula Entry
                    </a>
                </li>
                <li class="list-item" id="item4">
                    <a href="./Costing.html">
                        Costing
                    </a>
                </li>
                <li class="list-item" id="item5">
                    <a href="./ProductionEntry.html">
                        Production Entry
                    </a>
                </li>
                <li class="list-item" id="item6">
                    <a href="./Report.html">
                        Report
                    </a>
                </li>
                <li class="list-item" id="item7">
                    <a href="./ProductionHistory.html">
                        Production History
                    </a>
                </li>
                <li class="list-item" id="item8">
                    <a href="./login.php">
                        LOGOUT
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>