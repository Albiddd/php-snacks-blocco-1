<?php
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim deserunt aliquam, culpa labore, id deleniti
eveniet. Obcaecati accusamus placeat distinctio eius doloremque modi ullam earum fugiat ipsam! Officiis,
quisquam reprehenderit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, aliquam.
Consectetur eum quae officiis impedit, recusandae vel nemo voluptas quaerat harum incidunt, debitis
voluptatibus dolore. Modi voluptate officiis nulla recusandae.';

$p = explode('. ', $text);

?>

<ul>
    <?php
    for ($i = 0; $i < count($p); $i++) {
    ?>
        <li>
            <?= $p[$i] ?>
        </li>
    <?php
    } ?>
</ul>