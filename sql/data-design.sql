/*
The following statement sets the collation of the database to utf8.
 */
ALTER DATABASE jcallaway3 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

/*
The following statements will delete the tables if they exist.
 */
DROP TABLE IF EXISTS groupMember;
DROP TABLE IF EXISTS member;
DROP TABLE IF EXISTS `group`;


/*
The following code will create the group entity and its attributes.
 */
 CREATE TABLE `group` (
   groupId BINARY(16) NOT NULL,
	groupHost CHAR(255) NOT NULL,
	groupLocation CHAR(255) NOT NULL,
	groupName CHAR(255) NOT NULL,
 	/*
 	Setting the primary key.
 	 */
 	 PRIMARY KEY (groupId)
 );

/*
The following code will create the member entity and its attributes.
 */
CREATE TABLE member (
	memberID BINARY(16) NOT NULL,
	memberCreationDate DATETIME(6) NOT NULL ,
	memberLocation CHAR(255),
	memberPassword CHAR(100),
	memberUserName CHAR(255),
	/*
	Setting the primary key.
	 */
	 PRIMARY KEY (memberID)
);

CREATE TABLE groupMember (
	groupMemberGroupId BINARY(16) NOT NULL,
	groupMemberMemberId BINARY(16) NOT NULL,
	/*
	Creating the foreign keys.
	 */
	 FOREIGN KEY (groupMemberGroupId) REFERENCES `group`(groupId),
	 FOREIGN KEY (groupMemberMemberId) REFERENCES member(memberID),
	 /*
	 Creating a composite primary key.
	  */
	  PRIMARY KEY (groupMemberGroupId, groupMemberMemberId)
);