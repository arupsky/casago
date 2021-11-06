<nav class="nav">
    <div class="nav__container">
        <div class="nav__pane">

            <?php
            if (have_rows('header')) :
                while (have_rows('header')) : the_row();
            ?>
                    <?php
                    if (have_rows('main_menu')) :
                        while (have_rows('main_menu')) : the_row();
                    ?>
                            <?php
                            if (have_rows('menu_column_1')) :
                                while (have_rows('menu_column_1')) : the_row();
                            ?>
                                    <button class="nav__title" type="button"><?php the_sub_field('column_title'); ?></button>
                                    <div class="nav-section">
                                        <?php
                                        if (have_rows('column_menu_1')) :
                                            while (have_rows('column_menu_1')) : the_row();
                                        ?>
                                                <a class="nav-section__title" href="<?php the_sub_field('menu_title_url'); ?>"><?php the_sub_field('menu_title'); ?></a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>


                <?php
                get_nav_menu_1();

                function get_nav_menu_1()
                {
                    $navMenuDefaults = array(
                        'theme_location'  => 'header-menu-1',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'nav-section__list',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                        'add_li_class'  => 'nav-section__item'
                    );
                    return wp_nav_menu($navMenuDefaults);
                }
                ?>


                                    </div>
                                    <div class="nav-section">
                                        <?php
                                        if (have_rows('header')) :
                                            while (have_rows('header')) : the_row();
                                        ?>
                                                <?php
                                                if (have_rows('main_menu')) :
                                                    while (have_rows('main_menu')) : the_row();
                                                ?>
                                                        <?php
                                                        if (have_rows('menu_column_1')) :
                                                            while (have_rows('menu_column_1')) : the_row();
                                                        ?>
                                                                <?php
                                                                if (have_rows('column_menu_2')) :
                                                                    while (have_rows('column_menu_2')) : the_row();
                                                                ?>
                                                                        <a class="nav-section__title" href="<?php the_sub_field('menu_title_url'); ?>"><?php the_sub_field('menu_title'); ?></a>
                                                                    <?php endwhile; ?>
                                                                <?php endif; ?>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <?php
                                        get_nav_menu_2();

                                        function get_nav_menu_2()
                                        {
                                            $navMenuDefaults = array(
                                                'theme_location'  => 'header-menu-2',
                                                'menu'            => '',
                                                'container'       => 'ul',
                                                'container_class' => '',
                                                'container_id'    => '',
                                                'menu_class'      => 'nav-section__list',
                                                'menu_id'         => '',
                                                'echo'            => true,
                                                'fallback_cb'     => 'wp_page_menu',
                                                'before'          => '',
                                                'after'           => '',
                                                'link_before'     => '',
                                                'link_after'      => '',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth'           => 0,
                                                'walker'          => '',
                                                'add_li_class'  => 'nav-section__item'
                                            );
                                            return wp_nav_menu($navMenuDefaults);
                                        }
                                        ?>
                                    </div>
        </div>
        <div class="nav__pane">
            <?php
            if (have_rows('header')) :
                while (have_rows('header')) : the_row();
            ?>
                    <?php
                    if (have_rows('main_menu')) :
                        while (have_rows('main_menu')) : the_row();
                    ?>
                            <?php
                            if (have_rows('menu_column_2')) :
                                while (have_rows('menu_column_2')) : the_row();
                            ?>
                                    <button class="nav__title" type="button"><?php the_sub_field('column_title'); ?></button>
                                    <div class="nav-section">
                                        <?php
                                        if (have_rows('column_menu_1')) :
                                            while (have_rows('column_menu_1')) : the_row();
                                        ?>
                                                <a class="nav-section__title" href="<?php the_sub_field('menu_title_url'); ?>"><?php the_sub_field('menu_title'); ?></a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php
                get_nav_menu_3();

                function get_nav_menu_3()
                {
                    $navMenuDefaults = array(
                        'theme_location'  => 'header-menu-3',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'nav-section__list',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                        'add_li_class'  => 'nav-section__item'
                    );
                    return wp_nav_menu($navMenuDefaults);
                }
                ?>
                                    </div>
                                    <div class="nav-section">
                                        <?php
                                        if (have_rows('header')) :
                                            while (have_rows('header')) : the_row();
                                        ?>
                                                <?php
                                                if (have_rows('main_menu')) :
                                                    while (have_rows('main_menu')) : the_row();
                                                ?>
                                                        <?php
                                                        if (have_rows('menu_column_2')) :
                                                            while (have_rows('menu_column_2')) : the_row();
                                                        ?>
                                                                <?php
                                                                if (have_rows('column_menu_2')) :
                                                                    while (have_rows('column_menu_2')) : the_row();
                                                                ?>
                                                                        <a class="nav-section__title" href="<?php the_sub_field('menu_title_url'); ?>"><?php the_sub_field('menu_title'); ?></a>
                                                                    <?php endwhile; ?>
                                                                <?php endif; ?>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <?php
                                        get_nav_menu_4();

                                        function get_nav_menu_4()
                                        {
                                            $navMenuDefaults = array(
                                                'theme_location'  => 'header-menu-4',
                                                'menu'            => '',
                                                'container'       => 'ul',
                                                'container_class' => '',
                                                'container_id'    => '',
                                                'menu_class'      => 'nav-section__list',
                                                'menu_id'         => '',
                                                'echo'            => true,
                                                'fallback_cb'     => 'wp_page_menu',
                                                'before'          => '',
                                                'after'           => '',
                                                'link_before'     => '',
                                                'link_after'      => '',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth'           => 0,
                                                'walker'          => '',
                                                'add_li_class'  => 'nav-section__item'
                                            );
                                            return wp_nav_menu($navMenuDefaults);
                                        }
                                        ?>
                                    </div>
        </div>
        <div class="nav__pane">
            <?php
            if (have_rows('header')) :
                while (have_rows('header')) : the_row();
            ?>
                    <?php
                    if (have_rows('main_menu')) :
                        while (have_rows('main_menu')) : the_row();
                    ?>
                            <?php
                            if (have_rows('menu_column_3')) :
                                while (have_rows('menu_column_3')) : the_row();
                            ?>
                                    <button class="nav__title" type="button"><?php the_sub_field('column_title'); ?></button>
                                    <div class="nav-section">
                                        <?php
                                        if (have_rows('column_menu_1')) :
                                            while (have_rows('column_menu_1')) : the_row();
                                        ?>
                                                <a class="nav-section__title" href="<?php the_sub_field('menu_title_url'); ?>"><?php the_sub_field('menu_title'); ?></a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php
                get_nav_menu_5();

                function get_nav_menu_5()
                {
                    $navMenuDefaults = array(
                        'theme_location'  => 'header-menu-5',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'nav-section__list',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                        'add_li_class'  => 'nav-section__item'
                    );
                    return wp_nav_menu($navMenuDefaults);
                }
                ?>
                                    </div>
        </div>
    </div>
</nav>