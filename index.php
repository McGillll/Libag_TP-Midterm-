<html>
    <head>
        <title>Laboratory Exercise 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="style.css"/>
    </head>
    <body>
	<!-- php code here-->
	
	<?php
	
		$FirstName = "Juan";
		$LastName = "Dela Cruz";
		$profileNav = array(
			"Home",
			"Subjects",
			"Assignment",
			"Quiz",
			"About"
		);


		$programmingTitles = array(
			"Web Programming",
			"Mobile Programming",
			"Desktop Programming"
		);
		$programmingLogos = array(
			"Web Programming" => "html.png",
			"Mobile Programming" => "android.png",
			"Desktop Programming" => "java.png"
		);
		$programmingTopics = array(
			"Web Programming" => array(
				"HTML, CSS, and JavaScript",
				"PHP",
				"ASP.NET"
			),
			"Mobile Programming" => array(
				"Android",
				"IOS",
				"Windows"
			),
			"Desktop Programming" => array(
				"Java",
				"C#.Net",
				"Visual Basic",
			)
		);

	?>
    <div class="row header-content">
		<div class="column-12">
			<?php echo "$FirstName ". "$LastName"?>
		</div>
	</div> 
		<!-- end of div: header -->
		<div class="row">
			<div class="column-3 border-profile">
				<div class="row">
					<div class="column-12">
						<img src="login_logo.png"/>
					</div>
				</div>
				<div class="row">
					<div class="column-12">
						<p>Name: <?php echo "$FirstName ". "$LastName"?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 menu">
						<ul>
							<?php 
								for($i = 0; $i < count($profileNav); $i++){
									echo ('<li>'.$profileNav[$i].'</li>');
								}
							?>
						</ul>
					</div>
				</div>
				<!-- end of row: menu -->
			</div> 
			<!-- end of row: profile -->
			<!-- 2nd Column: Programming Subjects -->
			<div class="column-9">
				<div class="row">
					<?php 
						for($i = 0; $i < count($programmingTitles); $i++){
							$topic = $programmingTitles[$i];
							echo (
								'<div class="column-4 menu">
								<div class="border-subjects">
								<div class="row">
										<div class="column-12">
										<img src="'.$programmingLogos[$topic].'"/>
										</div>
										</div>
										<div class="row">
										<div class="column-12">
											<ul>	
											<li class="subject">
											'.$programmingTitles[$i].'
											</li>
											'											
							);
							for($j = 0; $j < count($programmingTopics[$topic]); $j++){
								echo ('<li>'.$programmingTopics[$topic][$j].'</li>');
							}
							echo ('</ul>
								</div>
								</div>
								</div>
								</div>'
							);
						}
					?>
				</div><!-- end of row -->
			</div>
		</div>
    </body>
</html>