<?php

$class = [
    [
        "name" => "Filippo",
        "lastName" => "Urrani",
        "votes" => [6, 7, 4, 4, 8]
    ],
    [
        "name" => "Francesco",
        "lastName" => "Pieraccini",
        "votes" => [3, 9, 8, 5, 6]
    ],
    [
        "name" => "Nigel",
        "lastName" => "Di Nella",
        "votes" => [2, 5, 7, 6, 8]
    ],
    [
        "name" => "Alberto",
        "lastName" => "Sorrentino",
        "votes" => [9, 5, 4, 7, 8]
    ],
    [
        "name" => "Mirco",
        "lastName" => "Sansone",
        "votes" => [2, 4, 9, 9, 4]
    ],
    [
        "name" => "Irinel",
        "lastName" => "Momoloaca",
        "votes" => [8, 7, 6, 7, 5]
    ],
    [
        "name" => "Alberto",
        "lastName" => "Dore",
        "votes" => [8, 6, 5, 4, 6]
    ],

];
?>

<?php
foreach ($class as $student) {
?>
    <div style="background-color: lightblue;
    width: 210px;
    padding: 8px;
    margin: 10px;
    ">
        <h3><?= "{$student['name']} {$student['lastName']}" ?></h3>
        <span>
            Media voti:
            <strong><?= array_sum($student['votes']) / count($student['votes']) ?></strong>
        </span>
    </div>
<?php
} ?>