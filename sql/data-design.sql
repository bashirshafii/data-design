-- set collation of the database to utf8
ALTER DATABASE bshafii CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS image;
DROP TABLE IF EXISTS article;

/*
articleID(Primary Key)
imageID(Foreign Key)
articleHeader
articleAuthor
articlePublishDateAndTime
 */
 /*
 imageID(Primary Key)
imageSize
imageFileType
imageCaption
imageCopyrightOwner
  */

CREATE TABLE article (

articleId BINARY(16) NOT NULL,
articleHeader VARCHAR (200) NOT NULL,
articleAuthor VARCHAR (50) NOT NULL,
articlePublishDateAndTime DATETIME(6) NOT NULL,
UNIQUE(articleHeader),
FOREIGN KEY(imageID) REFERENCES article(articleId),
PRIMARY KEY(articleId)
);

CREATE TABLE image (
imageID BINARY(32) NOT NULL,
imageSize VARCHAR (30),
imageFileType VARCHAR (30),
imageCaption VARCHAR (200),
imageCopyrightOwner VARCHAR (50),
PRIMARY KEY(imageID)
);

