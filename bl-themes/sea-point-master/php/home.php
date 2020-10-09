<!----------------------------------------------------------------
Image hero - add the image to /img and name it "background-hero.jpg" to make things beautiful
---------------------------------------------------------------->

<div class="page-cover-image py-6 mb-4" >
    <div class="hero">
        <h1 class="hero-text"><a href=""><img src="https://media.discordapp.net/attachments/302845093759680514/758339795956138034/100X100.png?width=677&height=677" height="120" width="120"></img></a></h1>
        <p class="hero-text"><?php echo $site->description() ?></p>
    </div>
</div>


<?php if (!file_exists(THEME_DIR.'img/background-hero.jpg')): ?>
<p class="hero-hidden"><?php echo $site->description() ?></p>
<?php endif ?>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">

			<!-- Content -->
			<?php foreach ($content as $page): ?>

				<div class="post-preview">
					<a href="<?php echo $page->permalink() ?>">
						<h2 class="post-title"><?php echo $page->title() ?></h2>
						<h3 class="post-subtitle hidden"><?php echo $page->description() ?></h3>
					</a>
					<!--<p class="post-meta"><?php echo $language->get('Posted by').' '.$page->user('nickname').' - '.$page->date() ?></p>-->
                    <p class="post-meta"><?php echo $page->date() ?></p>
                    <!-- Page content until the pagebreak -->
					<div>
						<?php echo $page->contentBreak(); ?>
					</div>

					<!-- Shows "read more" button if necessary -->
					<?php if ($page->readMore()): ?>
						<div class="text-right pt-3">
							<a class="btn btn-outline1" href="<?php echo $page->permalink(); ?>" role="button"><?php echo $L->get('Read more'); ?></a>
						</div>
					<?php endif ?>
				</div>
				<hr>

			<?php endforeach ?>

			<!-- Pagination  FIX THIS WHEN GOT INTERNET-->
			<?php if (Paginator::numberOfPages()>1): ?>
            <nav class="paginator" role="navigation">
                <ul class="pagination pagination-sm flex-wrap justify-content-center">

                    <!-- Previous button -->
                    <li class="text-left <?php if (!Paginator::showPrev()) echo 'hidden' ?>">
						<a class="newer-posts" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
                    </li>
                        
                    <span class="page-number faded">Page <?php echo $currentPage?> of <?php echo $numberOfPages ?></span><br>

                    <!-- Next button -->
                    <li class="text-right <?php if (!Paginator::showNext()) echo 'hidden' ?>">
                        <a class="older-posts" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
				    </li>

				</ul>
            </nav>
			<?php endif ?>

		</div>
	</div>
</div>
