<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>User story, use case, and interaction flow</title>
	</head>
	<body>
		<a href="index.php">Main Page</a>
		<h1>User Story</h1>
			<p>Pauline would like to join a group of local mothers who like to plan kid-friendly outings.</p>
		<h1>Use Case</h1>
			<ul>
				<li>Title: Signing-up for a Meetup group.</li>
				<li>Description: Pauline wants to sign-up for the "Desert Mommies Club" Meetup group.</li>
				<li>Persona name and role: Pauline, a young, single mother who is looking for a group of parents for regular kid-centered activities.</li>
				<li>Pre-conditions: The user must have a Meetup.com account and be logged-in.</li>
				<li>Post-conditions: Upon submitting the "Request to join", the user will be able to RSVP for upcoming events.</li>
			</ul>
		<h1>Interaction flow:</h1>
			<ol>
				<li>Pauline navigates to Meetup.com on her web browser.</li>
				<li>The server receives Pauline's request and returns the Meetup main page.</li>
				<li>Pauline switches from "My Meetups & suggestions" and enters the search term "mom" in the search bar.</li>
				<li>The server receives the search request and returns a chronological list of upcoming events.</li>
				<li>Pauline scrolls through the list and clicks on the event "Open Swim - Indoor Winter Edition" for the group "Desert Mommies Club".</li>
				<li>The server returns the "Desert Mommies Club" page.</li>
				<li>After reading the "What we're about" section, Pauline decides to click on "Request to join".</li>
				<li>The server returns a pop-up form with several questions.</li>
				<li>Pauline fills in the fields and clicks "Submit".</li>
				<li>The server receives the form and displays an updated page that lists Pauline's membership as "Pending".</li>
			</ol>
		<p>Frequency of use: One time per week</p>
	</body>
</html>