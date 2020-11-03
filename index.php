<?php
    include_once 'header.php';
    include 'includes/dbh.inc.php';
?>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck>0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<p>'.$row['user_first'].'</p>';        
        }
    }
?>
        <p>Home</p>
    </body>
</html>