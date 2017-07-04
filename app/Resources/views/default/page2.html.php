<p>je suis un template en php</p>
<?php

echo $name;
?>
<p>une petite boucle</p>
<?php
foreach ($tbl as $cle=>$value){
    echo $cle.'=>'.$value;
}
