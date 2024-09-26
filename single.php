<?php get_header(); ?>

<div class="post-wrap py-5 overflow-hidden">
    <div class="container">
        <div class="row">
            <main class="post-grid">
                <div class="row">
                    <article class="post-item mt-5">
                        <div class="post-content">
                            <!-- Dynamic Post Meta -->
                            <div class="post-meta text-uppercase">
                                <span class="post-category">
                                    <?php echo get_the_date(); ?>
                                </span> / 
                                <span class="meta-date">
                                    <?php the_category(', '); ?>
                                </span>
                            </div>
                            <!-- Dynamic Post Title -->
                            <h1 class="post-title"><?php the_title(); ?></h1>

                            <!-- Dynamic Post Image -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="hero-image col-lg-12 mt-5">
                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Dynamic Post Content -->
                            <div class="post-description review-item py-5">
                                <?php the_content(); ?>
                            </div>

                            <!-- Post Tags (If available) -->
                            <?php if (has_tag()) : ?>
                                <div class="post-tags">
                                    <div class="block-tag col-md-12">
                                        <ul class="list-unstyled d-flex">
                                            <?php the_tags('<li class="pe-3"><a href="#" class="btn btn-dark btn-small text-uppercase btn-rounded">', '</a></li><li class="pe-3"><a href="#" class="btn btn-dark btn-small text-uppercase btn-rounded">', '</a></li>'); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Post Navigation (Previous/Next) -->
                            <div id="single-post-navigation" class="mb-5">
                                <div class="post-navigation d-flex flex-wrap align-items-center justify-content-between">
                                    <?php previous_post_link('<a itemprop="url" class="post-prev d-flex flex-column" href="%link" title="%title"><span class="text-muted">Previous</span><h3 class="page-nav-title">%title</h3></a>'); ?>
                                    <?php next_post_link('<a itemprop="url" class="post-next d-flex flex-column" href="%link" title="%title"><span class="text-muted">Next</span><h3 class="page-nav-title">%title</h3></a>'); ?>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Comments Section -->
                    <?php if (comments_open() || get_comments_number()) : ?>
                        <section id="post-comment">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-wrap">
                                            <h2 class="display-6 fw-normal text-dark text-uppercase">
                                                <span class="count"><?php echo get_comments_number(); ?></span> Comments
                                            </h2>
                                            <div class="comment-list padding-small">
                                                <?php
                                                wp_list_comments(array(
                                                    'style'      => 'article',
                                                    'short_ping' => true,
                                                    'avatar_size'=> 50,
                                                    'callback'   => null, // You can use a custom callback to control the HTML output of comments
                                                ));
                                                ?>
                                            </div>
                                        </div>
                                        <div class="comment-respond mt-3">
                                            <h2 class="display-6 fw-normal text-dark text-uppercase">Leave a Comment</h2>
                                            <?php comment_form(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
