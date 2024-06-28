<?php
$site = substr(filter_input(INPUT_GET, 'site', FILTER_SANITIZE_STRING),0,8);
$terms = substr(filter_input(INPUT_GET, 'terms', FILTER_SANITIZE_STRING),0,25);



if ($site=="google") {header('Location: https://www.google.com/search?q=' . $terms);}

elseif ($site=="googlei") {header('Location: https://images.google.com/search?tbm=isch&q=' . $terms);}

elseif ($site=="duck") {header('Location: https://duckduckgo.com/?q=' . $terms);}

elseif ($site=="wiki") {header('Location: https://www.wikipedia.org/wiki/' . $terms);}

?>