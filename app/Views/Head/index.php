<?php
    foreach ($cssLink as $value) {
        echo link_tag(base_url($value));
    }
?>
<?php
    foreach ($jsLink as $value) {
        echo script_tag($value);
    }
?>
<title><?=$title?></title>


