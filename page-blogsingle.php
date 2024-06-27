<section class="blog__banner" style="background-image: url('<?php the_field('banner'); ?>');">
    <div class="container breadcrumbs__block">
        <div class="row">
            <div class="col-sm-12">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <?php setPostViews(get_the_ID()); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-sm-12">
                <div class="blog__single-meta">
                    <div class="card__blog-author">
                        <img src="<?php the_field('foto_avtora'); ?>" alt="<?php the_field('author_name'); ?>">
                        <span class="card__blog-authorname"><?php the_field('author_name'); ?></span>
                    </div>
                    <ul class="wp-tag-cloud">
                        <?php
                        $posttags = get_the_tags();

                        if ($posttags) {
                            foreach ($posttags as $tag) { ?>
                                <li><a class="tag-cloud-link" href="<?php echo get_term_link($tag, 'post_tag') ?>"><?php echo $tag->name; ?></a></li>

                        <?php
                            }
                        }
                        ?>



                    </ul>



                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog__content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section class="another__blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Читайте также</h2>
            </div>

            <?php
            $postId = get_the_ID();
            ?>

            <?php wp_reset_postdata(); ?>
            <?php
            // задаем нужные нам критерии выборки данных из БД

            $args = array(
                'posts_per_page' => 3,
                'cat' => 4,
                'tag' => array($posttags[0]->slug, $posttags[1]->slug),
                'post__not_in' => array($postId)
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>

                <!-- пагинация -->

                <!-- цикл -->
                <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <div class="col-sm-4">
                        <div class="card__blog">
                            <a href="<?php the_permalink(); ?>" class="card__blog-img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <div class="card__blog-body">
                                <div class="card__blog-meta">
                                    <span class="card__blog-date"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5821 10.5281L10.8337 9.519V5.83329C10.8337 5.61228 10.7459 5.40032 10.5896 5.24404C10.4333 5.08776 10.2213 4.99996 10.0003 4.99996C9.77932 4.99996 9.56735 5.08776 9.41107 5.24404C9.25479 5.40032 9.167 5.61228 9.167 5.83329V9.99996C9.16696 10.1463 9.20544 10.29 9.27859 10.4167C9.35173 10.5434 9.45695 10.6487 9.58366 10.7218L11.7488 11.9718C11.8436 12.0266 11.9482 12.0622 12.0568 12.0765C12.1653 12.0908 12.2756 12.0836 12.3814 12.0553C12.4872 12.027 12.5863 11.9781 12.6732 11.9114C12.76 11.8448 12.8329 11.7617 12.8877 11.6668C12.9424 11.572 12.9779 11.4673 12.9922 11.3588C13.0064 11.2502 12.9992 11.1399 12.9708 11.0342C12.9424 10.9284 12.8935 10.8293 12.8268 10.7425C12.7601 10.6556 12.677 10.5828 12.5821 10.5281ZM10.0003 1.66663C8.35215 1.66663 6.74099 2.15537 5.37058 3.07105C4.00017 3.98672 2.93206 5.28821 2.30133 6.81093C1.6706 8.33365 1.50558 10.0092 1.82712 11.6257C2.14866 13.2422 2.94234 14.7271 4.10777 15.8925C5.27321 17.058 6.75807 17.8516 8.37458 18.1732C9.99109 18.4947 11.6666 18.3297 13.1894 17.699C14.7121 17.0682 16.0136 16.0001 16.9292 14.6297C17.8449 13.2593 18.3337 11.6481 18.3337 9.99996C18.3312 7.79058 17.4524 5.67239 15.8902 4.11012C14.3279 2.54785 12.2097 1.66908 10.0003 1.66663ZM10.0003 16.6666C8.68179 16.6666 7.39286 16.2756 6.29653 15.5431C5.2002 14.8105 4.34572 13.7694 3.84113 12.5512C3.33655 11.333 3.20453 9.99256 3.46176 8.69936C3.719 7.40615 4.35393 6.21826 5.28628 5.28591C6.21863 4.35356 7.40652 3.71863 8.69973 3.46139C9.99293 3.20416 11.3334 3.33618 12.5516 3.84076C13.7697 4.34535 14.8109 5.19983 15.5435 6.29616C16.276 7.39249 16.667 8.68142 16.667 9.99996C16.665 11.7674 15.9619 13.462 14.7121 14.7118C13.4623 15.9616 11.7678 16.6646 10.0003 16.6666Z" fill="#6430E8" />
                                        </svg>
                                        <?php echo get_the_date('d.m.Y'); ?></span>
                                    <span class="card__blog-views"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.267 9.66671C16.5836 5.75837 13.417 3.33337 10.0003 3.33337C6.58363 3.33337 3.41697 5.75837 1.73363 9.66671C1.68775 9.77185 1.66406 9.88532 1.66406 10C1.66406 10.1148 1.68775 10.2282 1.73363 10.3334C3.41697 14.2417 6.58363 16.6667 10.0003 16.6667C13.417 16.6667 16.5836 14.2417 18.267 10.3334C18.3129 10.2282 18.3365 10.1148 18.3365 10C18.3365 9.88532 18.3129 9.77185 18.267 9.66671ZM10.0003 15C7.35863 15 4.85863 13.0917 3.41697 10C4.85863 6.90837 7.35863 5.00004 10.0003 5.00004C12.642 5.00004 15.142 6.90837 16.5836 10C15.142 13.0917 12.642 15 10.0003 15ZM10.0003 6.66671C9.34103 6.66671 8.69656 6.8622 8.1484 7.22848C7.60024 7.59475 7.17299 8.11534 6.9207 8.72443C6.66841 9.33352 6.6024 10.0037 6.73102 10.6503C6.85963 11.2969 7.1771 11.8909 7.64328 12.3571C8.10945 12.8232 8.7034 13.1407 9.35 13.2693C9.9966 13.3979 10.6668 13.3319 11.2759 13.0796C11.885 12.8273 12.4056 12.4001 12.7719 11.8519C13.1381 11.3038 13.3336 10.6593 13.3336 10C13.3336 9.11598 12.9824 8.26814 12.3573 7.64302C11.7322 7.0179 10.8844 6.66671 10.0003 6.66671ZM10.0003 11.6667C9.67066 11.6667 9.34843 11.569 9.07435 11.3858C8.80027 11.2027 8.58665 10.9424 8.4605 10.6378C8.33435 10.3333 8.30135 9.99819 8.36566 9.67489C8.42997 9.35159 8.5887 9.05462 8.82179 8.82153C9.05488 8.58844 9.35185 8.42971 9.67515 8.3654C9.99845 8.30109 10.3336 8.3341 10.6381 8.46024C10.9426 8.58639 11.2029 8.80001 11.3861 9.07409C11.5692 9.34817 11.667 9.6704 11.667 10C11.667 10.4421 11.4914 10.866 11.1788 11.1786C10.8663 11.4911 10.4423 11.6667 10.0003 11.6667Z" fill="#6430E8" />
                                        </svg>
                                        <?php echo getPostViews(get_the_ID()); ?></span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="card__blog-title"><?php the_title(); ?></a>
                                <span class="card__blog-short">
                                    <?php the_field('short', get_the_ID()); ?>
                                </span>
                                <div class="card__blog-author">
                                    <img src="<?php the_field('foto_avtora', get_the_ID()); ?>" alt="<?php the_field('author_name', get_the_ID()); ?>">
                                    <span class="card__blog-authorname"><?php the_field('author_name', get_the_ID()); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>
                <!-- конец цикла -->

                <!-- пагинация -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php esc_html_e('Нет постов по вашим критериям.'); ?></p>
            <?php endif; ?>








        </div>
    </div>
</section>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "<?php the_title(); ?>",
        "image": [
            "<?php the_field('banner'); ?>"
        ],
        "datePublished": "<?php the_date('Y-m-d'); ?>",
        "articleSection": "Блог",
        "description": "<?php the_excerpt(); ?>",
        "articleBody": "<?php the_content(); ?>",
        "author": {
            "@type": "Organization",
            "name": "Сайткрафт",
            "url": "https://saitcraft.ru/"
        }

    }
</script>