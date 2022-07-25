<?php
$insert = false;
$update = false;
$delete = false;
// INSERT INTO `rmentry` (`S.No.`, `RMCode`, `RatePerKg`, `Remark`, `date`) VALUES (NULL, '1234AA', '100.01', 'Demo remark', current_timestamp());
// connect to database
$server = "localhost";
$username = "root";
$password = "";
$database = "ppink";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    //     echo "Success";
    // } else {
    die("Error database connection failed" . mysqli_connect_error());
}
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $sql = "DELETE FROM `rmentry` WHERE `S.No.` = $sno";
    $result = mysqli_query($conn, $sql);
    $delete = true;
}
// inserting
// echo $_GET['update'];
// echo $_POST['snoEdit'];
// exit();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        // echo "yes"; update the record
        $sno = $_POST['snoEdit'];
        $RMCode = $_POST['RMCodeEdit'];
        $RatePerKg = $_POST['RatePerKgEdit'];
        $Remark = $_POST['RemarkEdit'];

        $sql = "UPDATE `rmentry` SET `RMCode` = '$RMCode', `RatePerKg` = '$RatePerKg', `Remark` = '$Remark' WHERE `rmentry`.`S.No.` = $sno;";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $update = true;
        } else {
            echo "Update unsuccessful:(";
        }
    } else {
        $RMCode = $_POST['RMCode'];
        $RatePerKg = $_POST['RatePerKg'];
        $Remark = $_POST['Remark'];

        $sql = "INSERT INTO `rmentry` (`S.No.`, `RMCode`, `RatePerKg`, `Remark`, `date`) VALUES (NULL, '$RMCode', '$RatePerKg', '$Remark', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // echo "Insertion Successful<br>";
            $insert = true;
        } else {
            echo "ERROR!! insertion failed--->" . mysqli_error($conn);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patel Printing Inks</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&family=Dancing+Script&family=Yrsa&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <style>
        .RMEcrud .container {
            margin-top: 10px;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            font-family: 'Bree Serif', serif;
        }

        .container input,
        .container textarea {
            width: 100%;
            padding: 0.5rem;
            border: 2px solid red;
            border-radius: 10px;
            font-family: 'Bree Serif', serif;
            font-size: 1.1rem;
        }

        .container label {
            font-size: 1.3rem;
            font-family: 'Bree Serif', serif;
        }

        .container form {
            width: 80%;
        }

        .container table a {
            text-decoration: none;
            color: black;
            /* border: 2px solid red;
            background-color: bisque;
            border-radius: 10px;
            padding: 2px; */
        }

        .container table a:hover {
            text-decoration: underline;
        }

        .RMEcrud {
            background-color: gray;
        }
    </style>
</head>

<body>
    <!-- Edit modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
        Edit Modal
    </button> -->

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./RMEntry.php" method="POST">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="RMCode">
                                RM Code:
                                <input type="text" id="RMCodeEdit" name="RMCodeEdit" placeholder="Enter Code for Raw Material">
                            </label>

                        </div>
                        <div class="form-group">
                            <label for="RatePerKg">Rate Per. KG:
                                <input type="text" id="RatePerKgEdit" name="RatePerKgEdit" placeholder="Enter Rate of RM Per KG">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="remark">Remark:
                                <textarea name="RemarkEdit" id="RemarkEdit" cols="20" rows="2"></textarea>
                            </label>
                        </div>
                        <!-- <button type="submit" class="bbtn">Update Entry</button> -->
                        <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="title">
        <div class="div center">
            <!-- <h1>
                Patel Printing Inks
            </h1> -->
            <h3 class="center">RM Entry</h3>
            <!-- <p class="center">339-K, Shivaji Nagar, Indore - 452003</p>
            <p class="center">Phone : 434217, 541307</p> -->
        </div>
    </header>
    <hr>


    <header class="navbar">
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
                <a href="./index.php">
                    Back
                </a>
            </li>
        </ul>
    </header>

    <hr>
    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> RM Entry Inserted Successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> RM Entry UPDATED Successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> RM Entry DELETED Successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    ?>
    <section class="RMEcrud">
        <div class="container">
            <form action="./RMEntry.php" method="POST">
                <div class="form-group">
                    <label for="RMCode">
                        RM Code:
                        <input type="text" id="RMCode" name="RMCode" placeholder="Enter Code for Raw Material">
                    </label>

                </div>
                <div class="form-group">
                    <label for="RatePerKg">Rate Per. KG:
                        <input type="text" id="RatePerKg" name="RatePerKg" placeholder="Enter Rate of RM Per KG">
                    </label>
                </div>
                <div class="form-group">
                    <label for="remark">Remark:
                        <textarea name="Remark" id="Remark" cols="20" rows="2"></textarea>
                    </label>
                </div>
                <button type="submit" class="bbtn">Make Entry</button>
            </form>
        </div>
        <div class="container dataRMEntry">

            <br>
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">RM Code</th>
                        <th scope="col">Rate Per KG</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `rmentry`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sno = $sno + 1;
                        // $row['sno'];
                        echo "<tr>
                        <th scope='row'>" . $sno . "</th>
                        <td>" . $row['RMCode']  . "</td>
                        <td>" . $row['RatePerKg'] . "</td>
                        <td>" . $row['Remark'] . "</td>
                        <td>" . $row['date'] .
                            "</td>
                        <td> <button class='edit btn btn-sm btn-primary' id=" . $sno . ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $sno . ">Delete</button>  </td>
                        </tr>";
                        // echo $row['S.No.'] . " RMCode" . $row['RMCode'] . "Rate Per KG" . $row['RatePerKg'] . "Remark" . $row['Remark'] . "Date & Time" . $row['date'];
                        // echo "<br>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <!-- <hr> -->
    </section>
    <footer class="center">Copyright &#169; Patel Printing Inks 2022</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                tr = e.target.parentNode.parentNode.parentNode;
                RMCode = tr.getElementsByTagName("td")[0].innerText;
                RatePerKg = tr.getElementsByTagName("td")[1].innerText;
                Remark = tr.getElementsByTagName("td")[2].innerText;
                console.log(RMCode, RatePerKg, Remark);
                RMCodeEdit.value = RMCode;
                RatePerKgEdit.value = RatePerKg;
                RemarkEdit.value = Remark;
                snoEdit.value = e.target.id;
                console.log(e.target.id)
                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                sno = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this entry!")) {
                    console.log("yes");
                    window.location = `/ppink/RMEntry.php?delete=${sno}`;
                    // TODO: Create a form and use post request to submit a form
                } else {
                    console.log("no");
                }
            })
        })
    </script>
</body>

</html>