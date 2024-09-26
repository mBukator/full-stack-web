<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Parking Subscription Plans</title>
	<link rel="stylesheet" href="{{ asset('css/plans.css') }}">
</head>

<body>
	<div class="sub-plans__container">
		<div class="cards__wrapper">
			<!-- Daily Plan -->
			<div class="card__container">
				<div class="card__wrapper">
					<h3 class="plan__title">Daily</h3>
					<h1 class="plan__price">
						<span class='price'>$5</span>/day
					</h1>
					<p class="plan__description">Perfect for occasional parking. Pay per day with no commitment.</p>
				</div>
			</div>

			<!-- Monthly Plan -->
			<div class="card__container">
				<div class="card__wrapper">
					<h3 class="plan__title">Monthly</h3>
					<h1 class="plan__price">
						<span class='price'>$60</span>/month
					</h1>
					<p class="plan__description">Best for regular parkers. Enjoy unlimited access to parking spots for
						an entire month.</p>
				</div>
			</div>

			<!-- Premium Plan -->
			<div class="card__container">
				<div class="card__wrapper">
					<h3 class="plan__title">Premium</h3>
					<h1 class="plan__price">
						<span class='price'>$100</span>/month
					</h1>
					<p class="plan__description">Reserve a premium parking spot for guaranteed availability every time
						you park.</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>