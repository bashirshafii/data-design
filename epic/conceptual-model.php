<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conceptual Model</title>
	</head>
	<body>
		<h2>Conceptual Model</h2>
		<h3>Entities and Attributes</h3>
		<ul>
			<li>Article</li>
			<li>Images</li>
			<li>Comments</li>
		</ul>
		<h4>Article</h4>
		<ol>
			<li>articleID(Primary Key)</li>
			<li>imageID(Foreign Key)</li>
			<li>articleHeader</li>
			<li>articleAuthor</li>
			<li>articlePublishDate</li>
			<li>articlePublishTime</li>
			<li>articleCommentsCount</li>
		</ol>
		<h4>Image</h4>
		<ol>
			<li>imageID(Primary Key)</li>
			<li>imageSize</li>
			<li>imageCaption</li>
			<li>imageCopyrightOwner</li>
		</ol>
		<h4>Comments</h4>
		<ol>
			<li>commentID(PrimaryKey)</li>
			<li>articleID(Foreign Key)</li>
			<li>commentType</li>
			<li>commentAuthorUserId</li>
			<li>commentAuthorLocation</li>
			<li>commentTime</li>
			<li>commentLikes</li>
		</ol>
		<h4>Relations</h4>
		<ol>
			<li>An article can have one or many images</li>
			<li>An image can be shared by many articles</li>
			<li>An article can have one or many comments</li>
		</ol>



		<a href="index.php">Home</a>
	</body>

</html>