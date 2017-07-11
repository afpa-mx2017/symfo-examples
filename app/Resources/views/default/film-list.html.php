<h2>exemple d'utilisation d'un tableau associatif sans twig</h2>
<?php

echo '<ul>';
foreach ($films as $film){
    echo '<li>'.$film['title'].'</li>';
}
echo '</ul>';