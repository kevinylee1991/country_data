<?php
	require 'process.php';
	date_default_timezone_set('America/Los_Angeles');
?>
<html>
<head>
</head>
<body>
	<div id='container'>
		<form action='process.php' method='post'>
			<select name='country'>
			<?php
				$database = new Database();
				$query = "SELECT countries.name FROM countries";
				$country_names = $database->fetch_all($query);
				foreach($country_names as $name)
				{
					foreach($name as $value)
					{
						echo "<option value={$value}>" . $value . "</option>";
					}
				}
			?>
			</select>
			<input type='submit'>
		</form>
		<div id='info'>
			<h2>Country Information</h2>
			<p>Country: <?php if(!empty($_SESSION['data'])) echo $_SESSION['data']['name'];?></p>
			<p>Continent: <?php if(!empty($_SESSION['data'])) echo $_SESSION['data']['continent'];?></p>
			<p>Region: <?php if(!empty($_SESSION['data'])) echo $_SESSION['data']['region'];?></p>
			<p>Population: <?php if(!empty($_SESSION['data'])) echo $_SESSION['data']['population'];?></p>
			<p>Life Expectancy: <?php if(!empty($_SESSION['data'])) echo $_SESSION['data']['life_expectancy'];?></p>
			<p>Government Form: <?php if(!empty($_SESSION['data'])) echo $_SESSION['data']['government_form'];?></p>
		</div>
	</div>
</body>
</html>