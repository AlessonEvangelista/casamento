<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>V & A</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="content content-message">
		<div class="panel panel-success">
			<div class="panel-heading">
	    		<h3 class="panel-title">
	    			<a href="{{ url('/') }}" title="Turn Back Web page">
						<?php HTML::img('img/turn.png') ?>
	    			</a>
	    			<b> <?php echo $name; ?>,</b> Confirmação realizada com sucesso
	    		</h3>
	  		</div>
	  		<div class="panel-body">
	    		Aguardamos sua presença :)
			</div>
		</div>
	</div>
</body>