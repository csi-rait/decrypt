<!-- Page cover image -->
<?php if ($page->coverImage()): ?>
	<div class="page-cover-image py-6 mb-4" style="background-image: url('<?php echo $page->coverImage(); ?>'); background-size:100%; ">
		<div style="height: 300px;"></div>
	</div>
<?php endif ?>

<!-- Post Content -->
<article>

	<div class="container">
		<div class="row">
			<div >
				<div>
					<h2><?php echo $page->title() ?></h2>
					<h3 class="subheading hidden"><?php echo $page->description() ?></h3>
					<!--<p class="meta"><?php echo $language->get('Posted by').' '.$page->user('nickname').' - '.$page->date() ?></p> in case we need it-->
					<!-- Date posted -->
                    <?php if (!$page->isStatic() && !$url->notFound()): ?>
						<p class="meta"><i><?php echo $page->date();?></i></p>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="row">
		<div>
            <!-- Load Bludit Plugins: Page Begin -->
            <?php Theme::plugins('pageBegin'); ?>

            <?php echo $page->content() ?>
            
            <!-- Load Bludit Plugins: Page End -->
            <?php Theme::plugins('pageEnd'); ?>
		</div>
	</div>
</div>

</article>


