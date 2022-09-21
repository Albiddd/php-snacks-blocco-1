<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div style="
background-color: silver;
padding:6px;
width:150px;
margin: 10px;
text-align: center;">
<?php
    foreach($db['teachers'] as $key => $teacher){
?>
    <strong> <?= "{$teacher['name']} {$teacher['lastname']}" ?></strong><br>
    <?php
    } ?>
</div>

<div style="
background-color: lightgreen;
padding:6px;
width:150px;
margin: 10px;
text-align: center;">
<?php
    foreach($db['pm'] as $key => $pm){
?>
    <strong> <?= "{$pm['name']} {$pm['lastname']}" ?></strong><br>
    <?php
    } ?>
</div>