<article class="p_article">

<hgroup class="p_h_ctn">
	<header class="p_h">
		<div id="p_l">
			<a href="<?php comments_link(); ?>" ><?php comments_number( __('無応答','knamida') , __('個別応答','knamida') , __('% 応答','knamida') ); ?></a>
			<?php echo edit_post_link( __('編集','knamida') ); ?>
		</div>
		<h2 class="p_h_h"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_category(' ') ?>
		<a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
		<?php the_tags('',',',''); ?>
	</header>
</hgroup>

<div class="p_t"><?php the_content('閱讀更多'); ?></div>

</article>