<?php 
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => ['email' => 'mickael.andrieu@exemple.com', 'full_name' => 'Mickaël Andrieu', 'age' => '34'],
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => ['email' => 'mickael.andrieu@exemple.com', 'full_name' => 'Mickaël Andrieu', 'age' => '34'],
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => ['email' => 'mathieu.nebra@exemple.com', 'full_name' => 'Mathieu Nebra', 'age' => '34'],
            'is_enabled' => true,
        ]
    ];

    function isValidRecipe(array $recipe) : bool {
        if (array_key_exists('is_enabled', $recipe)) {
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }

        return $isEnabled;
    }

    function getRecipes(array $recipes) : array {
        $validRecipes = [];

        foreach($recipes as $recipe) {
            if (isValidRecipe($recipe)) {
                $validRecipes[] = $recipe;
            }
        }

        return $validRecipes;
    }

    function displayAuthor(array $author) : string
    {
        return $author['full_name'] . '(' . $author['age'] . ' ans)';
    }
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
            <h1> Liste des recettes de cuisine </h1>
            <?php
                foreach(getRecipes($recipes) as $recipe) {
                    if (isValidRecipe($recipe)) {
                        echo "<div class='title'>" . $recipe['title'] . '</div>';
                        // echo $recipe['recipe'] . '<br>';
                        echo '<i>' . displayAuthor($recipe['author']) . '</i>' . '<br>' . '<br>';
                    }
                }
            ?>
        </ul>
    </body>
 </html>