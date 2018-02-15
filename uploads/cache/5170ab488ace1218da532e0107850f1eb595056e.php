<article <?php (post_class()); ?>>
  <header>
    <h1 class="entry-title"><?php echo e(get_the_title()); ?></h1>
    <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>
  <div class="entry-content">
    <?php (the_content()); ?>
  </div>
  <footer>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </footer>
  <?php (comments_template('/partials/comments.blade.php')); ?>
</article>
