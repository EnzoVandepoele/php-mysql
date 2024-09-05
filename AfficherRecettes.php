<?php 
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ]
    ]
?>

 <!DOCTYPE html>
 <html>
    <head>
        <title>Affichage des recettes</title>
    </head>
    
    <body>
        <style>
            body {
                font-family: monospace;
            }

            .title {
                font-size: 24px;
                font-weight: bold;
            }
        </style>

        <ul>
            <h1> Affichage des recettes </h1>
            <?php
                foreach ($recipes as $recipe) {
                    if ($recipe['is_enabled'] == true) {
                        echo "<div class='title'>" . $recipe['title'] . '</div>';
                        echo $recipe['recipe'] . '<br>';
                        echo '<i>' . $recipe['author'] . '</i>' . '<br>' . '<br>';
                    }
                }
            ?>
        </ul>
    </body>
 </html>