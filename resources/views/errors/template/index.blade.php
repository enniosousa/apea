<?php
	$domain = request()->getHost();
	$current = url()->current();
	$home = url('/');
?>
<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{{trans('errors.'.$errorType.'.icon')}}">
	<title>{{trans("errors.$errorType.title")}}</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<style>
		/* Error Page Inline Styles */

		body {
			padding-top: 20px;
		}
		/* Layout */

		.jumbotron {
			font-size: 21px;
			font-weight: 200;
			line-height: 2.1428571435;
			color: inherit;
			padding: 10px 0px;
		}
		/* Everything but the jumbotron gets side spacing for mobile-first views */

		.masthead,
		.body-content,
		{
			padding-left: 15px;
			padding-right: 15px;
		}
		/* Main marketing message and sign up button */

		.jumbotron {
			text-align: center;
			background-color: transparent;
		}

		.jumbotron .btn {
			font-size: 21px;
			padding: 14px 24px;
		}
		/* Colors */

		.green {
			color: #5cb85c;
		}

		.orange {
			color: #f0ad4e;
		}

		.red {
			color: #d9534f;
		}
	</style>
</head>

<body>
	<!-- Error Page Content -->
	<div class="container">
		<!-- Jumbotron -->
		<div class="jumbotron">
			<h1><i class="{{trans('errors.'.$errorType.'.icon')}}"></i> {{trans("errors.$errorType.title")}}</h1>
			<p class="lead">{!!trans("errors.$errorType.description", ['domain'=> $domain])!!}</p>
			<a href="{{ ${trans('errors.'.$errorType.'.url')} or url('/') }}" class="btn btn-default btn-lg text-center"><span class="green">{{trans("errors.$errorType.button")}}</span></a>
		</div>
	</div>
	<div class="container">
		<div class="body-content">
			<div class="row">
				<div class="col-md-6">
					<h2>{{trans("errors.$errorType.reason.title")}}</h2>
					<p class="lead">{{trans("errors.$errorType.reason.description")}}</p>
				</div>
				<div class="col-md-6">
					<h2>{{trans("errors.$errorType.solution.title")}}</h2>
					<p class="lead">{{trans("errors.$errorType.solution.visitor.title")}}</p>
					<p>{{trans("errors.$errorType.solution.visitor.description")}}</p>
					<p class="lead">{{trans("errors.$errorType.solution.owner.title")}}</p>
					<p>{{trans("errors.$errorType.solution.owner.description")}}</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Error Page Content -->
	<!--Scripts-->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>