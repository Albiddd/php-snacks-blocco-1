<?php
    // creare array che contenga 15 num casuali non replicati

    $numbers = [];

    while(count($numbers) < 15){
        $number = rand(1, 99);
        if(!in_array($number, $numbers)) 
        $numbers[] = $number;
    }
?>

<ul style="display: flex;">
<?php
for($i=0; $i< count($numbers); $i++){
    ?>
    <li style="list-style: none; padding: 4px;">
        <?= $numbers[$i] ?>
    </li>
    <?php
}
?>
</ul>