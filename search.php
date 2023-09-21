<?php get_header(); ?>

<section class="page-wrap">

    <div class="container blog-container">

        <section class="row">

            <div class="col-lg-9">
                
                <?php get_template_part('includes/section', 'archive') ?>

                <?php the_posts_pagination(); ?>

            </div>

            <div class="col-lg-3">
                
                <?php if(  is_active_sidebar('blog-sidebar' ) ): ?>

                    <?php dynamic_sidebar('blog-sidebar'); ?>
                    
                <?php endif; ?>
            </div>


        </section>

    </div>

</section>

<?php get_footer(); ?>