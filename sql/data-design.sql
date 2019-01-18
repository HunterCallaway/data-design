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

