<!-- Post -->

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

	<article class="entry">

		<header class="entry-header">

			<h2 class="entry-title">
				<?php echo $page->title(); ?>
			</h2>

			<?php
			if ($page->type() == "published") {

				// Get the user who created the post.
				$User = $page->user();

				// Default author is the username.
				$author = $User->username();

				// If the user complete the first name or last name this will be the author.
				if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
					$author = $User->firstName().' '.$User->lastName();
				}

				echo '<div class="entry-meta">';
				echo '<ul>';
				echo '<li>'.$page->date().'</li>';
				echo ' <span class="meta-sep">&bull;</span> ';

				if ($page->category() ==! "") {
					echo '<li><a href="'.HTML_PATH_ROOT.$url->filters('category').'/'.strtolower($page->category()).'">'.$page->category().'</a></li>';
					echo ' <span class="meta-sep">&bull;</span> ';
				}

				echo '<li>'.$author.'</li>';
				echo '</ul>';

			}

			else {
				echo '<div class="meta-empty">';
			}

			?>
			</div>

		</header>

	    <!-- Cover image -->
	    <?php if ($page->coverImage()): ?>
		<div class="entry-content-media">
			<div class="post-thumb">
				<img src="<?php echo $page->coverImage(); ?>"/>
			</div>
		</div>
		<?php endif ?>

		<div class="entry-content">
		<?php echo $page->content(); ?>
		</div>

		<?php
  		if ($page->type() == "published") {

 		$tags = $page->tags(true);

		$i = 0;
		$len = count($tags);

			if ( $len >= 1) {

				echo '<p class="tags">';

				if ($i == 0 &&  $len == 1 ) {

					echo $L->get('Tag');

					foreach($tags as $tagKey=>$tagName) {
						echo ': <a href="'.HTML_PATH_ROOT.$url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
					}
				}

				else {

					echo $L->get('Tags');

					foreach($tags as $tagKey=>$tagName) {

						if ($i == 0) {
							echo ': <a href="'.HTML_PATH_ROOT.$url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
						}

						else
						{
							echo ', <a href="'.HTML_PATH_ROOT.$url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></li>';
						}

					$i++;

					}

				}

				echo '</p>';

			}

		}

	?>

	</article>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>
