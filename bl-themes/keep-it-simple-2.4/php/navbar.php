<body>


  <header id="top">

    <div class="row">

   	 	<div class="header-content twelve columns">
		    <h1 id="logo-text"><a href="<?php echo $site->url(); ?>"><?php echo $site->title(); ?></a></h1>
				<p id="intro"><?php echo $site->slogan(); ?></p>
			</div>

    </div>

    <nav id="nav-wrap">

	  <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		<a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

		
	   		<div class="row">
			   

			  <ul id="nav" class="nav ">
			  <li>
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand image-responsive" href="#">
								<img  src="img/decryptlogocurved.png">
							</a>
						</div>
				</div>
			</li>
			  <!-- Static pages -->
				<?php
				   $current_page = $_SERVER['REQUEST_URI'];
				
					
				   foreach ($staticContent as $staticPage): ?>

				   <li <?php if($current_page == '/'.$staticPage->slug()) echo 'class="current"'; ?>>
				      <a href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
				   </li>

		  <?php endforeach ?>
					

			  </ul> <!-- end #nav -->

	    	</div>
    </nav> <!-- end #nav-wrap -->

  </header> <!-- Header End -->
