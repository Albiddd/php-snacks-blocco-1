<?php
// creare un array contenente le ipotetiche partite di basket presenti nel calendario
// ogni el dell'array deve contenere una key col nome della squadra in casa una della squadra ospite e altre due con il punteggio

$partita = [
    'home' => 'Heat',
    'guest' => 'Bulls',
    'homeScore' => 115,
    'guestScore' => 94
];

$partite = [
    $partita,
    [
        'home' => 'Celtics',
        'guest' => 'Warriors',
        'homeScore' => 87,
        'guestScore' => 98
    ],
    [
        'home' => 'Cavaliers',
        'guest' => 'Raptors',
        'homeScore' => 103,
        'guestScore' => 124
    ]
];
// var_dump($partite);

// Home - guest | homeScore-guestScore

?>

<ul>
    <?php
    for ($i = 0; $i < count($partite); $i++) {
        $match = $partite[$i];
    ?>
        <li>
            <?=
                "{$partite[$i]['home']} - {$match['guest']} | "
            ?>
            <strong>
            <?=
                "{$match['homeScore']}-{$match['guestScore']}"
            ?>
            </strong>
        </li>
    <?php
    }
    ?>
</ul>