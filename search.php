<?php
    if (isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        echo "<h2>You searched for: ".htmlspecialchars($keyword)."</h2>";
    }else{
        echo"<h2>No searched keyword provice</h2>";
    }
    
    



?>