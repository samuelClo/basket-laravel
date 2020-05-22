<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>
		@yield('title')
	</title>
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>

<body>
	<header>
		<nav id="navigationHeader">
			<ul>
				<li>
					<a href="/">
						Accueil
					</a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://image.flaticon.com/icons/svg/679/679713.svg" alt="basket page">
                    </a>
                </li>
			</ul>
		</nav>
	</header>
	<main id="wrapper">
		@yield('content')
	</main>
</body>

</html>