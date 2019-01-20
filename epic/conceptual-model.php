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
						<li>groupName</li>
					</ul>
				<h3>member</h3>
					<ul>
						<li>memberId (primary key)</li>
						<li>memberCreationDate</li>
						<li>memberLocation</li>
						<li>memberPassword</li>
						<li>memberUserName</li>
					</ul>
				<h3>groupMember</h3>
					<ul>
						<li>groupMemberGroupId (foreign key)</li>
						<li>groupMemberMemberId (foreign key)</li>
					</ul>
			<h2>Relationships</h2>
				<ul>
					<li>Many members can belong to many groups. (m to n)</li>
				</ul>
			<h2>Entity Relationship Diagram</h2>
				<img src="data-design-erd.png" alt="Entity Relationship Diagram">
	</body>
</html>