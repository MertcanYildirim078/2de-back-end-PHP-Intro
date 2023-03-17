<?php
$name = 'pieter';

function saySomething() {
    echo 'Something';
}

for($i = 0; $i < 20; $i++ ) {
    
    echo "<h2 id = {$i}>{$name} {$i}</h2>";

}

?>

<?php

saySomething()

?>