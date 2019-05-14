
<?php if (get_field('rating') == 1 ) : ?>
  ★
<?php elseif (get_field('rating') == 1.5 ) : ?>
  ★½
<?php elseif (get_field('rating') == 2 ) : ?>
  ★★
<?php elseif (get_field('rating') == 2.5 ) : ?>
  ★★½
<?php elseif (get_field('rating') == 3 ) : ?>
  ★★★
<?php elseif (get_field('rating') == 3.5 ) : ?>
  ★★★½
<?php elseif (get_field('rating') == 4 ) : ?>
  ★★★★
<?php elseif (get_field('rating') == 4.5 ) : ?>
  ★★★★½
<?php elseif (get_field('rating') == 5 ) : ?>
  ★★★★★
<?php endif; ?>
