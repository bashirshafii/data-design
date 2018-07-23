-- set collation of the database to utf8
ALTER DATABASE bshafii CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS image;
DROP TABLE IF EXISTS article;
DROP TABLE IF EXISTS articleImage;



CREATE TABLE article (

articleId BINARY(16) NOT NULL,
articleHeader VARCHAR (200) NOT NULL,
articleAuthor VARCHAR (50) NOT NULL,
articlePublishDateAndTime DATETIME(6) NOT NULL,
articleContent VARCHAR (6000) NOT NULL,
UNIQUE(articleHeader),
PRIMARY KEY(articleId)
);

CREATE TABLE image (
imageId BINARY(16) NOT NULL,
imageSize INT UNSIGNED,
imageFileType VARCHAR (30),
imageCaption VARCHAR (200),
UNIQUE (imageCaption),
imageCopyrightOwner VARCHAR (50),
PRIMARY KEY(imageId)
);

CREATE TABLE articleImage(
 articleImageArticleId BINARY(32) NOT NULL,
 articleImageImageId BINARY(32) NOT NULL,
 FOREIGN KEY(articleImageArticleId) REFERENCES article(articleId),
 FOREIGN KEY(articleImageImageId) REFERENCES image(imageId)
);

