<?php 
require_once 'components/topo.php';
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    switch($p) {
        case 'home': 
            require_once 'components/meio.php';
            break;
    }
}else {
    require_once 'components/meio.php';
}

?>
</body>
</html>