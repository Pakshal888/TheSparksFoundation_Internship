<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Basic Banking System, By- Pakshal Jain</title>

</head>

<body background="img/blur.jpg" style=" background-repeat:;">

    <?php
    include 'navbar.php';
    ?>
    <BR>
    <div class="toppane">
        <div class="row intro py-1" style="background-color: royalblue;">
            <div class="xyz">
                <div class="heading text-center my-5">
                    <h2>Welcome to</h2>
                    <h1>Bank Of India</h1>
                    <img src="img/boihd.png" alt="banking" class="imgbank" width="500px">
                </div>
            </div>
        </div>
        <BR>
        <div class="container">
            <div class="leftpane">
                <img src="img/user.jpg" alt="userimg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color: #black;">Create User</button></a>
            </div>

            <div class="middlepane">
                <img src="img/transfer.jpg" alt="transferimg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color: #black;">Make a Transaction</button></a>
            </div>

            <div class="rightpane">
                <img src="img/history.jpg" alt="historyimg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color: #black;">Transaction History</button></a>
            </div>

        </div>

    </div>
    <BR><BR>
    <BR><BR>
    <footer class="footer" style="color: royalblue;">
        <p>&copy 2021. Made By <b>Pakshal Jain</b><br><p style="color: red;">GRIP At The Sparks Foundation.</p></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>