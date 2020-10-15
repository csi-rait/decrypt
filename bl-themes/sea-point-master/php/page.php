<!-- Page cover image -->
<?php if ($page->coverImage()): ?>
	<div class="page-cover-image py-6 mb-4" style="background-image: url('<?php echo $page->coverImage(); ?>'); background-size:100%; ">
		<div style="height: 300px;"></div>
	</div>
<?php endif ?>

<!-- Post Content -->
<article>

	<div class="container">
		<div class="row justify-content-center">
			
				<div class="col-lg-10">
					<h2> <?php echo $page->title() ?></h2>
					<!--<h3 class="subheading hidden"><?php echo $page->description() ?></h3>
						<?php echo $language->get('Posted by').' '.$page->user('nickname').' - '.$page->date() ?></p>
						<?php if (!$page->isStatic() && !$url->notFound()): ?>
						<span class="author-name"><h5>Posted By <a style="color:cyan;"href="#0"><?php echo $page->user('nickname') ?></a> </h5></span>
						<p class="post-meta"><?php echo $page->date();?></p>
						<?php endif ?>-->
				<?php if (!$page->isStatic() && !$url->notFound()): ?>
			
				<div class="d-flex ">
					<div class="p-2"><img class="rounded-circle" src="<?php echo '/bl-content/uploads/profiles/'.$page->username().'.png' ?>" width="40" ></div>
					<div class="p-2">
						<span class="author-name" style="color:cyan;"><?php echo $page->user('nickname') ?></span><br>
						<span class="post-meta"><?php echo $page->date();?></span>
					</div>
					<div class="ml-auto p-2">
						<div class="social-buttons">
							<?php if ($page->user('twitter')): ?>
							<a href="<?php echo $page->user('twitter') ?>"><i class="fab fa-medium-m"></i></a>
							<?php endif ?>
							<?php if ($page->user('instagram')): ?>
							<a href="<?php echo $page->user('instagram') ?>"><i class="fab fa-instagram"></i></a>
							<?php endif ?>
							<?php if ($page->user('linkedin')): ?>
							<a href="<?php echo $page->user('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a>
							<?php endif ?>
						</div>
					</div>
				</div>
					<?php endif ?>
				</div>
			
		</div>
	</div>

<div class="container" id="article-img">
	<div class="row justify-content-center">
		<div class="col-lg-10">
            <!-- Load Bludit Plugins: Page Begin -->
            <?php Theme::plugins('pageBegin'); ?>

            <?php echo $page->content() ?>
            
            <!-- Load Bludit Plugins: Page End -->
            <?php Theme::plugins('pageEnd'); ?>
		</div>
	</div>
</div>

</article>


