<?php
/**
 * Шаблон по умолчанию для страницы
 */
ct()->header();
?>
    <main>
        <section class="default-page">
            <div class="default-page__container container">
                <h1 class="default-page__title">
					          <?php the_title() ?>
                </h1>

                <div class="default-page__text">
                  <?php the_content() ?>
                </div>
            </div>
        </section>
    </main>

<?php
ct()->footer();
