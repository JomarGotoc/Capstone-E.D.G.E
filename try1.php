<?php
if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} 
?>
<a href="<?php echo $previous ?>"><button>Try</button></a>