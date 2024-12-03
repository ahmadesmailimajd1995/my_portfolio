  <!-- nav -->
<header>
    <div class="container">
        <div class="header-content">
        <h1 class="logo">My Portfolio</h1>
        <nav>
            <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            </ul> -->
            <?php
            $args = [
                'theme_location' => 'top nav',
                'depth'             => 2,
                'container'         => 'div',
                'items_wrap'           => '<ul id="%1$s" class="nav-menu">%3$s</ul>'
            ];
            wp_nav_menu($args);
            ?>
        </nav>
        </div>
    </div>
</header>