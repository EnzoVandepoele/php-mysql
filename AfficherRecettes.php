<?php 
   $users = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mickael.andrieu@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Mathieu Nebra',
            'email' => 'mathieu.nebra@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Laurène Castor',
            'email' => 'laurene.castor@exemple.com',
            'age' => 28,
        ],
    ];

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
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
            'recipe' => '',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ],
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

    function displayAuthor(string $authorEmail, array $users) : string
    {
        for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];

        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
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
                        echo '<i>' . displayAuthor($recipe['author'], $users) . '</i>' . '<br>' . '<br>';
                    }
                }
            ?>
        </ul>
    </body>
 </html>