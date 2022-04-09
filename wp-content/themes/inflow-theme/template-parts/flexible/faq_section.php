<?php

?>
<section class="faq-section">
    <div class="faq-section-wrapper section-wrapper relative">
        <div class="faq-section-wrapper-inner">
            <div class="container">
                <div class="row faq-row">
                    <?php 
                    $section_main_title = get_sub_field('section_main_title');
                    if ( $section_main_title ) : ?>
                        <header class="entry-header main-header col-md-12">
                            <h2 class="section-main-title"><?php echo $section_main_title; ?></h2>
                        </header>
                    <?php endif; ?>
                    <?php if( have_rows('faq_sections') ): ?>
                        <div class="faq-section-questions-answers-content-wrapper col-md-12">
                            <?php while ( have_rows('faq_sections') ) : the_row(); ?>

                                <?php if( get_sub_field('faq_sections_titles') ) : ?>
                                    <header class="sub-header">
                                        <h3 class="section-title"><?php the_sub_field('faq_sections_titles'); ?></h3>
                                    </header>
                                <?php endif; ?>

                                <?php if( have_rows('faq_questions_and_answers') ): ?>
                                    <div class="faq-section-questions-answers-items">
                                        <?php while ( have_rows('faq_questions_and_answers') ) : the_row(); ?>
                                            <div class="faq-section-questions-answers-item">
                                                <div class="faq-section-item-question">
                                                    <?php the_sub_field('faq_question'); ?>
                                                </div>
                                                <div class="faq-section-item-answer">
                                                    <?php the_sub_field('faq_answer'); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif;?>

                            <?php endwhile; ?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
