<footer>

  <div class="row">

    <div class="twelve columns">

      <ul class="social-links">

      <!-- Social Networks -->
			<?php if ($site->facebook()): ?>
			<li><a href="<?php echo $site->facebook(); ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
			<?php endif ?>

			<?php if ($site->twitter()): ?>
			<li><a href="<?php echo $site->twitter(); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
			<?php endif ?>

			<?php if ($site->codepen()): ?>
			<li><a href="<?php echo $site->codepen(); ?>" target="_blank"><i class="fab fa-codepen"></i></a></li>
			<?php endif ?>

			<?php if ($site->instagram()): ?>
			<li><a href="<?php echo $site->instagram(); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
			<?php endif ?>

			<?php if ($site->gitlab()): ?>
			<li><a href="<?php echo $site->gitlab(); ?>" target="_blank"><i class="fab fa-gitlab"></i></a></li>
			<?php endif ?>

      		<?php if ($site->github()): ?>
			<li><a href="<?php echo $site->github(); ?>" target="_blank"><i class="fab fa-github"></i></a></li>
			<?php endif ?>

			<?php if ($site->linkedin()): ?>
			<li><a href="<?php echo $site->linkedin(); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
			<?php endif ?>

      		<?php if ($site->mastodon()): ?>
			<li><a href="<?php echo $site->mastodon(); ?>" target="_blank"><i class="fab fa-mastodon"></i></a></li>
			<?php endif ?>

      </ul>

      <p class="copyright"><?php echo $site->footer(); ?>  By <a target="_blank" href="#">CSI RAIT</a>. &nbsp; For <a title="Styleshout" href="#">RAIT</a>.</p>

    </div>

  </div>

  <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fas fa-chevron-up"></i></a></div>

</footer>
