<?php
function familyName($fname) {
    echo "$fname Refsnes.<b><p>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Pirma Uþduotis</title>
</head>
<body>
	<div class="wrapper">
		<header id="nav">
				<a class="navbar" href="#nav">Meniu</a>
				<a class="navbar" href="#logo">Logo</a>
				<a class="navbar" href="#list">Lenteles</a>
				<a class="navbar" href="#galerija">Galerija</a>
		</header>
		<main>
			<div class="logo">
				<img id="logo" alt="logo" src="logo.png">
			</div>
			<div class="sekcija2">
				<div class="pastraipa"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable Endfgdfgdfgdfgdfgglish. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div>
				<div class="lentele">
					<table>
						<tr>
							<th>Nr.</th>
							<th colspan="4">Klausimas</th>
							<th colspan="2">Yes/No</th>
						</tr>
						<tr>
							<td>1</td>
							<td colspan="4">What is Lorem Ipsum?</td>
							<td rowspan="4">
								<span><input type="checkbox" name=""></span>
								<span><input type="checkbox" name=""></span>
								<span><input type="checkbox" name=""></span>
								<span><input type="checkbox" name=""></span></td>

							<td rowspan="4">
								<span><input type="checkbox" name=""></span>
								<span><input type="checkbox" name=""></span>
								<span><input type="checkbox" name=""></span>
								<span><input type="checkbox" name=""></span>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td colspan="4">Why do we use it?</td>
						</tr>
						<tr>
							<td>3</td>
							<td colspan="4">Where can I get some?</td>
						</tr>
						<tr>
							<td>4</td>
							<td colspan="4">Where does it come from?</td>
						</tr>
					</table>
				</div>
				</div>
				<div id="galerija">
				<h2>Galerija</h2>
				<table class="galerijatable">
					<tr>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
					</tr>
					<tr>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
					</tr>
					<tr>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
						<td><img alt="img" src="img.jpeg"></td>
					</tr>
				</table>
			</div>
				<div id="list">
					<div class="ul">
						<h3 class="ul">List</h3>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
						</ul>
					</div>
					<div class="ol">
						<h3 class="ol">List</h3>
						<ol>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
						</ol>
					</div>
				</div>
		</main>
		


	</div>

</body>
</html>