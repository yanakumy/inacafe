<?php get_header();?>

<body <?php body_class(); ?>>	

<!--グローバルnav-->

<div class="index-page-global-nav-icon">
	<?php get_template_part('global-nav-icon'); ?>
</div>


<!----------------------ブログ投稿ページ--------------------->
<div class="container-2">
	

	<?php
		// 記事があるかどうかチェック
		if( have_posts() ):
			// 記事をループで表示する
			while( have_posts() ):
				// 記事の詳細データを変数に代入
				the_post();
	?>
	<article <?php post_class(); ?>>
			<?php if(is_single()): ?>
				<h1><?php the_title(); ?></h1>
			<?php else: ?>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php endif; ?>

			
			<div class="postinfo">	
				<time datetime="<?= get_the_date('Y-m-d'); ?>">
					<?= get_the_date(); ?>
				</time>
				<span class="postcat">
					<i class="fas fa-folder-open"></i>
					<?php the_category(','); ?>
				</span>
				<span class="postcom">
					<i class="fas fa-comment"></i>
					<a href="<?php comments_link(); ?>">
						<?php
							comments_number(
								'コメント',
								'コメント(1件)',
								'コメント(%件)'
							);
						?>
					</a>
           		 </span>
			</div><!-- /.postinfo -->
			
			<!-- 本文の代わりに概要とサムネイルの出力 -->
			<?php  if( is_single()):?>
				<?php the_content(); ?>
			<?php else: ?>
				<div class="excerpt">
					<?php if(has_post_thumbnail() ): ?>
						<p><?php the_post_thumbnail('thumbnail');?></p>
					<?php endif; ?>
				<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>

			<!-- コメントフォーム -->	
			<?php comments_template(); ?>	
	</article>

			<!-- ブログのpagenav -->
			<?php if( is_single() ): ?>
					<div class="pagenav">
						<!-- 記事を前へ -->
						<?php if( get_previous_post_link() ): ?>
							<span class="old">
							<?php
							previous_post_link('%link', '<i class="fas fa-arrow-circle-left"></i> %title');
							?>
							</span>
						<?php endif; ?>

						<!-- 次へ -->
						<?php if( get_next_post_link() ): ?>
							<span class="new">
							<?php
							next_post_link('%link', '%title <i class="fas fa-arrow-circle-right"></i>');
							?>
							</span>
						<?php endif; ?>
					</div><!-- /.pagenav -->

				<?php endif; ?>

		<?php endwhile; endif; ?>

			<?php
				// 1よりも大きな数字（前後のページがある）
				if( $wp_query -> max_num_pages > 1 ): 
				?>
				<div class="pagenav clearfix">
					<span class="old">
						<?php previous_posts_link('<i class="fas fa-arrow-circle-left"></i> 新しい記事'); ?>
					</span>
					<span class="new">
						<?php next_posts_link('古い記事 <i class="fas fa-arrow-circle-right"></i>'); ?>
					</span>
				</div>
			<?php endif; ?>	



<!-- ウィジェット -->
<div class="blogmenu">
	<ul>
		<?php dynamic_sidebar('サイドバー用'); ?>
	</ul>	
</div>	

</div><!--/container ブログ投稿ページ-->


	
	
<?php get_footer(); ?>