</div>
<?php wp_footer(); ?>
<footer>
    <?php if (get_field('email', 'option')) : ?>
        <p><a href="mailto:<?php the_field('email', 'option') ?>">email me</a></p>
    <?php endif ?>
    <?php if (get_field('contact', 'option')) : ?>
        <p><?php the_field('contact', 'option') ?></p>
    <?php endif ?>
    <?php if (get_field('copyright', 'option')) : ?>
        <p><?php the_field('copyright', 'option') ?></p>
    <?php endif ?>
</footer>
</body>

</html>