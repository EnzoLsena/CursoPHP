<?php 
require "config.php";

echo session_save_path();
echo "<br>";

//var_dump(session_status());

switch(session_status()) {
    
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas!";

    case PHP_SESSION_NONE:
        echo "As sessões não foram definidas!";

    case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas e definidas!";
        
    
}



?>