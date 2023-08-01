<p>&copy; PHP Motors, All rights reserved</p>
<p>All images used are belived to be in "Fair Use". Please notify the author if any are not and they will be removed</p>
<p>Last Updated:
    <?php
    $last_updated = filemtime(__FILE__);
    $formatted_date = date('d F, Y', $last_updated);
    echo $formatted_date;
    ?>
</p>