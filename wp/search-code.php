


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
		
		<!-- Begin .postBox -->
		<div class="entry">
        <div class="postLink">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </div>
				<div class="postInfo">
							<?php the_time('M j, Y') ?> &nbsp;&nbsp;//&nbsp;&nbsp; by <span class="bob"><?php the_author_link(); ?></span> &nbsp;&nbsp;//&nbsp;&nbsp;  <?php the_category(', ') ?>  &nbsp;//&nbsp;  <?php comments_popup_link('No Comments', '1 Comment ', '% Comments'); ?> 
						</div>
				<?php the_excerpt(); ?>
		</div>
		
		<!-- End .postBox -->
		
		<?php endwhile; ?>

	<?php else : ?>

		<p>Sorry, no results found.</p>

	<?php endif; ?>
            <!--<div class="navigation">
						<div class="alignleft"><?php next_posts_link() ?></div>
						<div class="alignright"><?php previous_posts_link() ?></div>
			</div>-->
			<?php if (function_exists("emm_paginate")) {
				emm_paginate();
			} ?>