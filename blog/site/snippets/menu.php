            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="http://matthewthoms.com/">Home</a></li>
    							<li><a href="http://matthewthoms.com/about.php">About	</a></li>
    				    	<li><a href="http://matthewthoms.com/work.php">Work</a></li>
    							<li><a href="https://500px.com/matthewthoms" title="Link to Matthew Thoms Account on 500px.">Photography</a></li>
                    <?php foreach($pages->visible() as $p): ?>
                    <li>
                        <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                    </li>
                    <?php endforeach ?>

      				    	<li><a href="http://matthewthoms.com/contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
