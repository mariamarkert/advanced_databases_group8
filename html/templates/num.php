<?php
if (isset($_POST['clicked_nums'])) {
    $clicked_nums = json_decode($_POST['clicked_nums']);
    file_put_contents('num.php', implode(',', $clicked_nums));
}
?>

