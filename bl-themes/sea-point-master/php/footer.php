<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p class="copyright text-muted"><?php foreach ($socialNetworks as $key=>$label): ?>
                    <?php if ($site->{$key}()): ?>
                    
                    <li class="list-inline-item">
                        <a href="<?php echo $site->{$key}() ?>" target="_blank">
                            <span class="fa-stack fa-xs">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-<?php echo $key ?> fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li><?php endif; ?><?php endforeach; ?><?php echo $site->footer()?> - Powered by <a href="https://www.bludit.com">BLUDIT</a>
                </p>
            </div>
        </div>
    </div>
</footer>