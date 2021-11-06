<footer class="footer">
    <div class="footer-top">
        <div class="footer-top__intro">
            <div class="footer-top__logo">

                <?php
                if (have_rows('footer')) :
                    while (have_rows('footer')) : the_row();
                ?>

                        <img src="<?php the_sub_field('footer_logo'); ?>" alt="Casago - homes on the go" />

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-top__container">
            <div class="footer-world">
                <div class="footer-world__title">Casago Around the World</div>
                <?php
                get_nav_menu_6();

                function get_nav_menu_6()
                {
                    $navMenuDefaults = array(
                        'theme_location'  => 'footer-menu-1',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'footer-world__list',
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
                        'add_li_class'  => 'footer-world__item'
                    );
                    return wp_nav_menu($navMenuDefaults);
                }
                ?>
            </div>
            <div class="footer-form">
                <div class="footer-form__title">Sign Up For Updates</div>
                <form class="footer-form__container">
                    <div class="footer-form__field">
                        <div class="footer-form__icon --name">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.75 18">
                                <path d="M7.875-6.75a4.462 4.462 0 0 1-2.268-.6 4.378 4.378 0 0 1-1.634-1.632 4.462 4.462 0 0 1-.6-2.268 4.462 4.462 0 0 1 .6-2.268 4.378 4.378 0 0 1 1.635-1.635 4.462 4.462 0 0 1 2.268-.6 4.462 4.462 0 0 1 2.268.6 4.378 4.378 0 0 1 1.635 1.635 4.462 4.462 0 0 1 .6 2.268 4.462 4.462 0 0 1-.6 2.268 4.378 4.378 0 0 1-1.635 1.635 4.462 4.462 0 0 1-2.269.597zm3.164 1.125a4.611 4.611 0 0 1 2.355.633 4.672 4.672 0 0 1 1.723 1.722 4.611 4.611 0 0 1 .633 2.356V.563a1.627 1.627 0 0 1-.492 1.2 1.627 1.627 0 0 1-1.2.492H1.688a1.627 1.627 0 0 1-1.2-.492A1.627 1.627 0 0 1 0 .563V-.914A4.611 4.611 0 0 1 .633-3.27a4.672 4.672 0 0 1 1.722-1.722 4.611 4.611 0 0 1 2.355-.633h.6a6.105 6.105 0 0 0 2.566.563 6.105 6.105 0 0 0 2.566-.562z" transform="translate(0 15.75)" />
                            </svg>
                        </div>
                        <input class="footer-form__input" name="input_1" type="text" placeholder="Full Name*" />
                    </div>
                    <div class="footer-form__field">
                        <div class="footer-form__icon --email">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.626 511.626">
                                <path d="M49.106 178.729c6.472 4.567 25.981 18.131 58.528 40.685 32.548 22.554 57.482 39.92 74.803 52.099 1.903 1.335 5.946 4.237 12.131 8.71 6.186 4.476 11.326 8.093 15.416 10.852 4.093 2.758 9.041 5.852 14.849 9.277 5.806 3.422 11.279 5.996 16.418 7.7 5.14 1.718 9.898 2.569 14.275 2.569h.575c4.377 0 9.137-.852 14.277-2.569 5.137-1.704 10.615-4.281 16.416-7.7 5.804-3.429 10.752-6.52 14.845-9.277 4.093-2.759 9.229-6.376 15.417-10.852 6.184-4.477 10.232-7.375 12.135-8.71 17.508-12.179 62.051-43.11 133.615-92.79 13.894-9.703 25.502-21.411 34.827-35.116 9.332-13.699 13.993-28.07 13.993-43.105 0-12.564-4.523-23.319-13.565-32.264-9.041-8.947-19.749-13.418-32.117-13.418H45.679c-14.655 0-25.933 4.948-33.832 14.844C3.949 79.562 0 91.934 0 106.779c0 11.991 5.236 24.985 15.703 38.974 10.466 13.99 21.604 24.983 33.403 32.976z" />
                                <path d="M483.072 209.275c-62.424 42.251-109.824 75.087-142.177 98.501-10.849 7.991-19.65 14.229-26.409 18.699-6.759 4.473-15.748 9.041-26.98 13.702-11.228 4.668-21.692 6.995-31.401 6.995h-.578c-9.707 0-20.177-2.327-31.405-6.995-11.228-4.661-20.223-9.229-26.98-13.702-6.755-4.47-15.559-10.708-26.407-18.699-25.697-18.842-72.995-51.68-141.896-98.501C17.987 202.047 8.375 193.762 0 184.437v226.685c0 12.57 4.471 23.319 13.418 32.265 8.945 8.949 19.701 13.422 32.264 13.422h420.266c12.56 0 23.315-4.473 32.261-13.422 8.949-8.949 13.418-19.694 13.418-32.265V184.437c-8.186 9.132-17.7 17.417-28.555 24.838z" />
                            </svg>
                        </div>
                        <input class="footer-form__input" name="input_2" type="text" placeholder="Email Address" />
                    </div>
                    <div class="footer-form__select-wrapper">
                        <select class="footer-form__select" name="input_5">
                            <option value="" selected>Interested in:</option>
                            <option value="Help Managing My Property">Help Managing My Property</option>
                            <option value="Help Finding A Rental">Help Finding A Rental</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="footer-form__select-arrow">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
                                <path d="M.563 5.414a.542.542 0 0 0-.4.164.542.542 0 0 0-.164.4.542.542 0 0 0 .164.4l2.791 2.786c.105.108.25.167.4.164a.542.542 0 0 0 .396-.164l2.79-2.789a.542.542 0 0 0 .164-.4.542.542 0 0 0-.164-.4.542.542 0 0 0-.4-.164l-5.577.003zm5.977-2.46c.108.104.167.249.164.4a.542.542 0 0 1-.164.4.542.542 0 0 1-.4.163H.563a.542.542 0 0 1-.4-.164.542.542 0 0 1-.164-.4.542.542 0 0 1 .164-.4L2.954.164a.542.542 0 0 1 .4-.164.542.542 0 0 1 .4.164l2.786 2.79z" />
                            </svg>
                        </div>
                    </div>
                    <button class="footer-form__submit-btn" type="submit">Subscribe</button>
                </form>
            </div>
            <div class="footer-quick">
                <div class="footer-quick__title">Quick Links</div>
                <?php
                get_nav_menu_7();

                function get_nav_menu_7()
                {
                    $navMenuDefaults = array(
                        'theme_location'  => 'footer-menu-2',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'footer-quick__list',
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
                        'add_li_class'  => 'footer-quick__item'
                    );
                    return wp_nav_menu($navMenuDefaults);
                }
                ?>
            </div>
            <div class="footer-contacts">
                <div class="footer-contacts__title">Contact Us</div>
                <div class="footer-contacts__container">
                    <div class="footer-contacts__address">
                        <?php
                        if (have_rows('footer')) :
                            while (have_rows('footer')) : the_row();
                        ?>

                                <?php the_sub_field('contact_us'); ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer-social">
                        <div class="footer-social__title">Let's Get Social</div>
                        <ul class="footer-social__list">


                            <?php
                            if (have_rows('footer')) :
                                while (have_rows('footer')) : the_row();
                            ?>
                                    <?php
                                    if (have_rows('social_url')) :
                                        while (have_rows('social_url')) : the_row();
                                    ?>



                                            <li class="footer-social__item">
                                                <a class="footer-social__link --facebook" href="<?php the_sub_field('facebook_url'); ?>">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="footer-social__item">
                                                <a class="footer-social__link --youtube" href="<?php the_sub_field('youtube_url'); ?>">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="footer-social__item">
                                                <a class="footer-social__link --instagram" href="<?php the_sub_field('instagram_url'); ?>">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="footer-social__item">
                                                <a class="footer-social__link --linked-in" href="<?php the_sub_field('linkedin_url'); ?>">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                                                    </svg>
                                                </a>
                                            </li>


                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom__container">

            <?php
            if (have_rows('footer')) :
                while (have_rows('footer')) : the_row();
            ?>

                    <div class="footer-bottom__copyright"><?php the_sub_field('copyright_text'); ?></div>
                    <div class="footer-bottom__logo">

                        <img src="<?php the_sub_field('veteran_logo'); ?>" alt="Casago - homes on the go" />

                    </div>


                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</footer>
<script src="https://casago.com/wp-content/themes/Bizcor2018/js/runtime.min.js"></script>
<script src="https://casago.com/wp-content/themes/Bizcor2018/js/vendors.min.js"></script>
<script src="https://casago.com/wp-content/themes/Bizcor2018/js/main.min.js"></script>
<script src="https://msgsndr.com/js/form_embed.js"></script>

<?php wp_footer(); ?>

</body>

</html>