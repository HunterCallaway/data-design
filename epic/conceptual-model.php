<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Conceptual Model</title>
	</head>
	<body>
		<a href="index.php">Main Page</a>
		<h1>Conceptual Model - Meetup.com</h1>
			<h2>Entities and Attributes</h2>
				<h3>group</h3>
					<ul>
						<li>groupId (primary key)</li>
						<li>groupHost</li>
						<li>groupLocation</li>
					</ul>
				<h3>member</h3>
					<ul>
						<li>memberId (primary key)</li>
						<li>memberGroupId (foreign key)</li>
						<li>memberCreationDate</li>
						<li>memberLocation</li>
						<li>memberPassword</li>
					</ul>
				<h3>event</h3>
					<ul>
						<li>eventId (primary key)</li>
						<li>eventGroupId (foreign key)</li>
						<li>eventDate</li>
						<li>eventDetailsMessage</Li>
						<li>eventTime</li>
						<li>eventVenue</li>
					</ul>
			<h2>Relationships</h2>
				<ul>
					<li>One group can host many events. (1 to n)</li>
					<li>One group can have many members. (1 to n)</li>
					<li>One member can belong to many groups. (1 to n)</li>
					<li>One member can attend many events. (1 to n)</li>
				</ul>
	</body>
</html>