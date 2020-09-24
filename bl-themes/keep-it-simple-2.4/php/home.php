<!-- Print all the content -->

<?php foreach ($content as $page): ?>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<article class="entry">

	<header class="entry-header">

	<!-- Page title -->
	<h2 class="entry-title">
	<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
	</h2>

		<div class="entry-meta">
		<?php

		// Get the user who created the post.
		$User = $page->user();

		// Default author is the username.
		$author = $User->username();

		// If the user complete the first name or last name this will be the author.
		if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
		  $author = $User->firstName().' '.$User->lastName();
		}

		?>
			<ul>
		    	<li><?php echo $page->date(); ?></li>
			    	<span class="meta-sep">&bull;</span>
				<?php
				if ($page->category() ==! "") {
			  		echo '<li><a href="'.HTML_PATH_ROOT.$url->filters('category').'/'.strtolower($page->category()).'">'.$page->category().'</a></li>';
					echo ' <span class="meta-sep">&bull;</span> ';
				}
				?>
			  	<li><?php echo $author; ?></li>
		  	</ul>
		</div>

  	</header>

	<div class="entry-content">

	<!-- Page content until the pagebreak -->
	<div>
	<?php echo $page->contentBreak(); ?>
	</div>

	<!-- Shows "read more" button if necessary -->
	<?php if ($page->readMore()): ?>
	<a class="btn btn-primary btn-sm" href="<?php echo $page->permalink(); ?>" role="button"><?php echo $Language->get('Read more'); ?></a>
	<?php endif ?>

 	</div>

 </article> <!-- end entry -->

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
 	<ul class="post-nav group">
  	<?php
	// Show previus page link
	if(Paginator::showPrev()) {
		echo '<li class="prev"><a rel="prev" href="'.Paginator::previousPageUrl().'"><strong>'.$L->get('Previous page').'</strong></a></li>';
    }

  	// Show next page link
	if(Paginator::showNext()) {
		echo '<li class="next"><a rel="next" href="'.Paginator::nextPageUrl().'"><strong>'.$L->get('Next page').'</strong></a></li>';
    }
	?>
	</ul>
<?php endif ?>
