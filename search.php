<?php
require "header.php";
require "includes/dbh.inc.php";

?>
<div class="main-wrapper">
<div class="search">
<form action="search2.php" method="POST" class="search">

<input type="text" name="search" placeholder="Etsi">
    <button type="submit" name="submit-search">Etsi</button>
</form>
    
    </div>
<div class="add">
<form action="pikkusuutari.php" method="get" target="_blank" class="add">
<button type="submit">Lisää lapsi</button>
</form>
</div>



    </div>



<?php
require "footer.php"
?>

