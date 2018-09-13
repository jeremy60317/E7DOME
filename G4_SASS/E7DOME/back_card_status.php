
<?php
    require_once('php/connect_g4.php');

    $CARD_NO = $_REQUEST['CARD_NO'];
    $CARD_STATUS = $_REQUEST['CARD_STATUS'];
    if($CARD_STATUS == '上架中')
    $change = 1;
    else
    $change = 0;
    $update_card = "UPDATE pointcard SET CARD_STATUS = $change WHERE CARD_NO = '$CARD_NO' ";
    $pdo->exec($update_card);
?>