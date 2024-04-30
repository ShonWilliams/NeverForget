<!DOCTYPE html>

<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href = "css/styles.css">
		<link rel="stylesheet" href="css/stylesDesktop.css" media= "screen and (min-width: 481px)">
		<link rel="stylesheet" href="css/stylesMobile.css" media= "screen and (max-width: 480px)">
		<title>Never Forget</title>
	</head>
	
	<header>
	<img src = "images/NeverForgetLogo.jpg" alt="Never Forget logo. Finger with red ribbon"> 
	<nav>
	<ul id ="nav">
		<li><a style ="text-decoration: none; color: black" href="index.html">Home</a></li>
	
		<li><a style ="text-decoration: none; color: black" href="Subscribe.html">Prices</a></li>
	
		<li><a style ="text-decoration: none; color: black" href="About.html">About</a></li>
	
		<li><a style ="text-decoration: none; color: black" href="Items.html">Items</a></li>
	
		<li><a style ="text-decoration: none; color: black" href="Contact.html">Contact</a></li>
	</ul>
	</nav>
	</header>
	
	
	<body>
		<div class = "content" id="SubEx">
			<h3>Subscription Prices</h3>
				<p>Here's how it works. We have three choices of when you want your gifts. You can get them monthly, every four months, or just for the holidays and a single birthday.
				After that, you can either pay a monthly subscription fee not unlike being subscribed for a magazine. Or of course you can pay the entire year price at a discounted rate!
				</p>
		</div>
		
		<br>
		
		
		
		<p> Simply choose how often you would like to send a gift </p>
		<div class="content" id="radio">
			<input type="radio" name="frequency" id="monthly" value="monthly"><label for="monthly">Monthly</label>
			<br>
			<input type="radio" name="frequency" id="quarterly" value="quarterly"><label for="quarterly">Quarterly</label>
			<br>
			<input type="radio" name="frequency" id="holidays" value="holidays"><label for="holidays">Holidays</label>
			<br>
		</div>
		<br>
		
		<p> Now you can choose the tier of your gifts (based on how much you like that person)</p>
		<div id = "Desktop">
		<table>
			
			<tr>
				<th>Subscription</th>
				<th>Teddy Bear</th>
				<th>Flowers</th>
				<th>Chocolates</th>
				<th>Cakes</th>
				
			</tr>
			<tr>
				<td>Just Friends </td>
				<td>x</td>
				<td></td>
				<td></td>
				<td></td>
				
			</tr>
			<tr>
				<td>Like It </td>
				<td>x</td>
				<td>x</td>
				<td></td>
				<td> </td>
				
			</tr>
			<tr>
				<td>Love It </td>
				<td>x</td>
				<td>x</td>
				<td>x</td>
				<td> </td>
				
			</tr>
			<tr>
				<td>Married </td>
				<td>x</td>
				<td>x</td>
				<td>x</td>
				<td>x</td>
				
			</tr>
			</table>
			<br>
			<div class="content" id="radio">
			<input type="radio" name="tier" id="friends" value="friends"><label for="friends">Friends</label>
			<br>
			<input type="radio" name="tier" id="like" value="like"><label for="like">Like'em</label>
			<br>
			<input type="radio" name="tier" id="love" value="love"><label for="love">Love'em</label>
			<br>
			<input type="radio" name="tier" id="married" value="married"><label for="married">Married</label>
			
			<br>
			
			<div class="content" id="submit">
			<input type="submit" name="submit" id="submit"><label for="submit"></label>
		</div>
		</div>
		
		
	</div>
		
	
	
	
	</body>





























</html>