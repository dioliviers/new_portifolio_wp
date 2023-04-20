<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio Diogo</title>
    <?php wp_head();?>
</head>
<body class= "teste">
    <header>
        <nav>
            <?php wp_nav_menu(
            array(
                'theme_location' => 'menu_header', /* mostra a posição do menu que deve ser exibido */
            )
            );?>
            <div id= "logo">
                <p>logo</p>
            </div>
            <ul id= "social-icons">
                <li>
                    linkedin
                </li>
                <li>
                    telegram
                </li>
                <li>
                    github
                </li>
            </ul>
        </nav>
    </header>
