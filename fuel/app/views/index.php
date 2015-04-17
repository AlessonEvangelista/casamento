<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>V & A</title>

    <!-- core CSS -->
    <?php
    	echo Asset::css('bootstrap.css');
    	echo Asset::css('font-awesome.min.css');
    	echo Asset::css('main.css');

		echo Asset::js('jquery.min.js');
		echo Asset::js('Chart.js');
		echo Asset::js('modernizr.custom.js');
    ?>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

	<!-- Menu -->
		<nav class="menu" id="theMenu">

			<div class="menu-wrap">
				<h1 class="logo"><a href="/">V & A</a></h1>
				<a href="#home" class="smoothScroll">Home</a>
				<a href="#portfolio" class="smoothScroll">confirmação</a>
				<a href="#services" class="smoothScroll">Lista de Presentes</a>
				<a href="#about" class="smoothScroll">sobre nós</a>
				<a href="#contact" class="smoothScroll">lua de mel</a>
				<a href="https://www.facebook.com/veronica.zenerato" target="_blanck"><i class="icon-facebook"></i></a>
				<a href="https://twitter.com/ale_evans"><i class="icon-twitter"></i></a>
				<a href="#"><i class="icon-dribbble"></i></a>
				<a href="#"><i class="icon-envelope"></i></a>
			</div>

			<!-- Menu button -->
			<div id="menuToggle"><i class="icon-reorder"></i></div>
		</nav>


	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<br>
			<h1></h1>
			<div class="row">
				<br>
				<br>
				<br>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->


	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>
					<bold>10/10/2015</bold> Uma data mais que especial. <br><bold>Ecl. 4:12</bold> 'E um cordão tríplice não pode ser prontamente rompido em dois.''
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->

	<!-- ========== Portifólio ========== -->
	<section id="portfolio" name="portfolio"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row">

			</div>
		</div><!-- /container -->
	</div><!-- /portfoliowrap -->

	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row" >
				<div class="col-lg-8 col-lg-offset-2">
					<?php echo Form::open('home/check') ?>
						<!-- Text Field name -->
						<div class="input-group input-group-lg">
							<?php echo Form::label('Nome', 'name:', ['class' => 'input-group-addon', 'id' => 'basic-addon1', 'style' => 'width:150;']) ?>
							<?php echo Form::input('name', '', ['class' => 'form-control']) ?>
						</div>
						<br>
						<!-- Text Field Acompanhante-->
						<div class="input-group input-group-lg">
							<?php echo Form::label('Acompanhantes', 'accompanying:', ['class' => 'input-group-addon', 'id' => 'basic-addon1', 'style' => 'width:150;']) ?>
							<select class="form-control" name="accompanying">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<br><br>
						<!-- Form Input -->
						<div class="form-group">
							<button style="width:100%;" type="submit" class="btn btn-info"> CONFIRMAR</button>
						</div>

					<?php Form::close() ?>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->


	<!-- ========== SERVICES - GREY SECTION ========== -->
	<section id="services" name="services"></section>
	<div id="present">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->

	<!-- ========== CHARTS - DARK GREY SECTION ========== -->
	<div id="dg">
		<div class="container">
			<div class="row">
				<h3 style="margin-top:-10px;">LISTA DE PRESENTES</h3>
				<br>
				<div class="col-lg-4">
					<?php HTML::img('img/s1.png') ?>
					<h4 style="color:#1b93cf;">MagazineLuiza</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-4">
					<?php HTML::img('img/s2.png') ?>
					<h4> <span style="color:#000080;">Per</span> <span style="color:#FFD700;">nambucanas</span> </h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-4">
					<div style='margin-top: -40px;'><?php HTML::img('img/s3.png') ?></div>
					<h4 style="color:#0000CD;">Havan</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>

			</div>
		</div><!-- /container -->
	</div><!-- /dg -->

	<!-- ========== ABOUT - GREY SECTION ========== -->
	<section id="about" name="about"></section>
	<div id="g">
		<div class="container">
			<div class="row">
				<h3>ABOUT US</h3>
				<br>
				<br>
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor, tristique erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper. Pellentesque fringilla, massa vel rutrum consequat, nulla velit fermentum dolor, sed scelerisque.</p>
				<br>
				<br>
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-3 team">
					<img class="img-circle" src="img/team01.jpg" height="90" width="90">
					<h4>Liz Stewart</h4>
					<h5><i>Product Manager</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>

				<div class="col-lg-3 team">
					<img class="img-circle" src="img/team02.jpg" height="90" width="90">
					<h4>Brad Casey</h4>
					<h5><i>Front-end Developer</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>

				<div class="col-lg-3 team">
					<img class="img-circle" src="img/team03.jpg" height="90" width="90">
					<h4>Pamela Chow</h4>
					<h5><i>Web Designer</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>

				<div class="col-lg-3 team">
					<img class="img-circle" src="img/team04.jpg" height="90" width="90">
					<h4>Tim Gates</h4>
					<h5><i>Back-end Guru</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>
						<a href="index.html#"><i class="icon-facebook"></i></a>
						<a href="index.html#"><i class="icon-twitter"></i></a>
						<a href="index.html#"><i class="icon-envelope"></i></a>

					</p>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->

	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="viagem-bg">
		<div class="container">
			<div class="row">
					<h3><b>CONTACT US</b></h3>
					<br>
					<div class="col-lg-4">
						<h3><b>Send Us A Message:</b></h3>
						<h3>onassis@blacktie.co</h3>
						<br>
					</div>

					<div class="col-lg-4">
						<h3><b>Call Us:</b></h3>
						<h3>+55 3984-4389</h3>
						<br>
					</div>

					<div class="col-lg-4">
						<h3><b>We Are Social</b></h3>
						<p>
							<a href="index.html#"><i class="icon-facebook"></i></a>
							<a href="index.html#"><i class="icon-twitter"></i></a>
							<a href="index.html#"><i class="icon-envelope"></i></a>
						</p>
						<br>
					</div>
			</div>
		</div>
	</div><!-- /container -->

	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.facebook.com/AlessonEvangelista" target="_blanck">Alesson Evangelista</a></p>

		</div>
	</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
		echo Asset::js('classie.js');
		echo Asset::js('bootstrap.min.js');
		echo Asset::js('smoothscroll.js');
		echo Asset::js('main.js');
    ?>

</body>
</html>
