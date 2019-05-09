<?php
require "header.php";
require "includes/dbh.inc.php";
?>


<div class="article-container">
    
    <div class="return">
<form action="search.php">
<button type="submit">Takaisin</button>    
</form>

</div>
<?php
    
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM child WHERE last LIKE '%$search%' OR first LIKE '%$search%' OR id LIKE '%$search%' OR postcode LIKE '%$search%' OR postcode LIKE '%$search%' OR city LIKE '%$search%' OR info LIKE '%$search%'";
        
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        
        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>
                <h3>Nimi: ".$row['last']." ".$row['first']."</h3>
                <p>Henkilöturvatunnus: ".$row['id']."</p>
                <p>Osoite: ".$row['address']."</p>
                <p>".$row['postcode']." ".$row['city']."</p>
                <p>Lisäinfo: ".$row['info']."</p>
                <a href=delete.php?id=".$row['idchild'].">Poista</a>
                <br><br>
            </div>";
            }
        } else {
            echo "Ei osumia.";
        }
        
    }

    
?>
</div>
<?php
require "footer.php"
?>