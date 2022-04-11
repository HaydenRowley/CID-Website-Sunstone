<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';


  include_once 'includes/dbh.inc.php';
  
  $sql = "SELECT usersName, usersUid FROM users";
  $result = $conn->query($sql);
  
?>
<section>
    <?php
    $name1 = "<h5 class='card-title'>";
    $name2 = "</h5>";
    $p1 = "";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card'>
            <div class='card-body'>" . $name1 . "Name: " . $row['usersName'] . $name2 . "
            <p class='card-text'>" . "Web ID: " . $row['usersUid'] . "</p>
            </div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</section>
  
<?php
  include_once 'footer.php';
?>
