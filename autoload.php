<?php

exec("find -name '*.class.php'",$classes,$ret);


foreach ($classes as $key=>$class){
    include_once("{$class}");
}



?>
