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
			<li>Image</li>
			<li>ArticleImage</li>

		</ul>
		<h4>Article</h4>
		<ol>
			<li>articleId(Primary Key)</li>
			<li>articleHeader</li>
			<li>articleAuthor</li>
			<li>articlePublishDateAndTime</li>


		</ol>
		<h4>Image</h4>
		<ol>
			<li>imageId(Primary Key)</li>
			<li>imageSize</li>
			<li>imageFileType</li>
			<li>imageCaption</li>
			<li>imageCopyrightOwner</li>
		</ol>
		<h4>ArticleImage</h4>
		<ol>
			<li>articleImageArticleId(Foreign Key)</li>
			<li>articleImageImageId(Foreign Key)</li>
		</ol>

		<h4>Relationships</h4>
		<ol>
			<li>Many images can be attached to many articles (<strong>m to n</strong>)</li>
		</ol>

		<a href="index.php">Home</a>
	</body>

</html>