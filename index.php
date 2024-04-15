<?php 
require_once 'components/topo.php';
if (isset($_GET['page'])) {
    $p = $_GET['page'];
    switch($p) {
        case 'home': 
            require_once 'components/meio.php';
            break;
        case 'jogos':
            require_once 'pages/jogos.php';
            break;
    }
}else {
    require_once 'components/meio.php';
}

?>
</body>
</html>