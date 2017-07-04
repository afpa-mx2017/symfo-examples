<?php
echo '<ul>';
foreach ($films as $film){
    echo '<li>'.$film['title'].'</li>';
}
echo '</ul>';