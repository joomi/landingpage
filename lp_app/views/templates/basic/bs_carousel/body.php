    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://placehold.it/1500x550" id="slider1" data-role="lp_element" class="lp_img" data-width="1500" data-height="500" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 data-role="text">Example headline.</h1>
              <p class="lead" data-role="text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" data-role="link" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1500x550" id="slider2" data-role="lp_element" class="lp_img" data-width="1500" data-height="500" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 data-role="text">Another example headline.</h1>
              <p class="lead" data-role="text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" data-role="link" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1500x550" id="slider3" data-role="lp_element" class="lp_img" data-width="1500" data-height="500" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 data-role="text">One more for good measure.</h1>
              <p class="lead" data-role="text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" data-role="link" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
    <div role="main" data-role="sortable">
        <div class="span4 lp_element" data-role="lp_element">
          <img src="http://placehold.it/140x140" id="img1" data-role="lp_element" class="lp_img" data-width="140" data-height="140" alt="My img placeholder">
          <h2 data-role="text">Heading</h2>
          <p data-role="text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#" data-role="link">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4 lp_element" data-role="lp_element">
          <img src="http://placehold.it/140x140" id="img2" data-role="lp_element" class="lp_img" data-width="140" data-height="140" alt="My img placeholder">
          <h2 data-role="text">Heading</h2>
          <p data-role="text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#" data-role="link">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span3 lp_element" data-role="lp_element">
        	<h2 data-role="text">Form layout</h2>
            <p data-role="text">form description.. form description.. form description.. form description.. form description.. </p>
            <form name="contact-form" data-role="form" id="lp_contact-form" class="lp_validate def_form" method="post" contenteditable="false">
                <div class="lp_form_row">
                    <label for="Full_name">Full name</label>
                    <input type="text" name="lpForm[Full_name]" class="def_inputbox" id="Full_name">
                </div>
                <div class="lp_form_row">
                    <label for="Phone_number" contenteditable="false">Phone number</label>
                    <input type="text" name="lpForm[Phone_number]" class="def_inputbox" id="Phone_number">
                </div>
                <div class="lp_form_row">
                    <label for="Email">Email</label>
                    <input type="text" name="lpForm[Email]" class="def_inputbox" id="Email">
                </div>
                <div class="lp_form_row">                    
                    <label for="confirm_your_intrest" class="checkbox"><input type="checkbox" name="lpForm[confirm]" value="confirm your intrest" id="confirm_your_intrest">confirm your intrest</label>
                </div>
                <div class="lp_form_row">
                    <input type="button" id="lp_submit" class="submit btn" value="Contact us">
                </div>
        	    <input type="hidden" id="sub" name="sub" value="<!--sub-->">
    	        <input type="hidden" id="t" name="t" value="<!--t-->">
	            <input type="hidden" id="ses" name="ses" value="<!--ses-->">
            </form>
        </div><!-- /.span4 -->
        <br style="clear:both" />
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette lp_element" data-role="lp_element">
        <img class="featurette-image pull-right lp_img" id="l_img1" data-role="lp_element" data-width="512" data-height="512" src="http://placehold.it/512x512">
        <h2 class="featurette-heading" data-role="text">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead" data-role="text">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette lp_element" data-role="lp_element">
        <img class="featurette-image pull-left lp_img" id="l_img2" data-role="lp_element" data-width="512" data-height="512" src="http://placehold.it/512x512">
        <h2 class="featurette-heading" data-role="text">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead" data-role="text">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette lp_element" data-role="lp_element">
        <img class="featurette-image pull-right lp_img" id="l_img3" data-role="lp_element" data-width="512" data-height="512" src="http://placehold.it/512x512">
        <h2 class="featurette-heading" data-role="text">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead" data-role="text">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p data-role="text">&copy; 2013 Company, Inc.</p>
      </footer>

    </div><!-- /.container -->