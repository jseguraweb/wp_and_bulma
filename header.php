<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning WP</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item has-text-white has-text-weight-bold" href="#">
                    COMPANY LOGO
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span class="burger-line" aria-hidden="true"></span>
                    <span class="burger-line" aria-hidden="true"></span>
                    <span class="burger-line" aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                
                        <?php wp_nav_menu(array(
                            'theme_location' => 'navbar-menu'
                            ));
                        ?>
                        
                </div>
            </div>
        </nav>
    </header>