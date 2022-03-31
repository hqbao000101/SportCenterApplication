<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Team</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/sport-icon-color.png" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../style/form.css">
</head>
<body>
	<!-- header -->
	<?php  
		include_once('../layout/header.php');
	?>

	<!-- main -->
	<main>
		<section class="form-heading">
			<h2 style="display: inline">Team</h2>
		</section>

		<section id="team-content">
			<button>List</button>
			<button>Create team</button>
			<table>
				<tr class="table-heading">
					<th>ID</th>
					<th>Name</th>
					<th>Leader</th>
					<th>Slot</th>
					<th>Slogan</th>
					<th></th>
				</tr>
				<tr class="table-items">
					<td>002</td>
					<td>Stars</td>
					<td>James</td>
					<td>8/15</td>
					<td>Together we are INVINCIBLE</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>003</td>
					<td>Goal Killers</td>
					<td>Alger</td>
					<td>11/15</td>
					<td>Once you play, you have to play hard</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>004</td>
					<td>Cheer Up Souls</td>
					<td>Aubrey</td>
					<td>5/15</td>
					<td>Unity is strength, confidence is victory</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>005</td>
					<td>Blaze Warriors</td>
					<td>Bernard</td>
					<td>10/15</td>
					<td>You can't but we can</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>006</td>
					<td>Dream Makers</td>
					<td>Devlin</td>
					<td>9/15</td>
					<td>Challenging yourself is the way to shine</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>007</td>
					<td>The Achievers</td>
					<td>Egbert</td>
					<td>15/15</td>
					<td>Difficulty is not equal to challenge</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>008</td>
					<td>Famicom</td>
					<td>Fergal</td>
					<td>3/15</td>
					<td>Victory is within reach</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>009</td>
					<td>FarCry</td>
					<td>Griffith</td>
					<td>7/15</td>
					<td>Confident - determined to fight - determined to win</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>010</td>
					<td>Socceroos </td>
					<td>Kelsey</td>
					<td>12/15</td>
					<td>Burn with the flame of passion</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
				<tr class="table-items">
					<td>011</td>
					<td>Red Tide</td>
					<td>Roderick</td>
					<td>11/15</td>
					<td>If we are number 2, no one is number 1</td>
					<td><a href=""><button>View</button></a></td>
				</tr>
			</table>
		</section>

		<!-- go-to-top button -->
		<?php  
			include_once('../layout/go-to-top.php');
		?>
	</main>

	<!-- footer -->
	<?php  
		include_once('../layout/footer.php');
	?>

	<script type="text/javascript" src="../js/javascript.js"></script>
</body>
</html>