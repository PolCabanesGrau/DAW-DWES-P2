<?php
$alumnes = [
    'Pol', 'Esther', 'Raul',
    'Pol', 'Joel', 'Hugo',
    'Ricard', 'Alejandro', 'Sergi',
    'Christian', 'Alejandro',
    'Ramon', 'Jordi', 'Nil'
];
?>

<DOCTYPE html>
    <html lang="en">
    <body>
        <h1>Alumnes Classe</h1>
        <ul>
            <?php
                foreach($alumnes as $alumne){
                    echo '<li>' . $alumne . '</li>';
            }
            ?>
        </ul>
            <?php
                echo 'Hi ha un total de ' . count($alumnes) . ' alumnes.';

            ?>
    </body>
    </html>
</DOCTYPE>
