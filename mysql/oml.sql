/*
The following statement inserts data into the group table.
 */

 INSERT INTO `group` (groupId, groupHost, groupLocation, groupName) VALUES (UNHEX("5519ada6118145b5a10ed60e723caada"), "Amy Wu", "Albuquerque, New Mexico", "Desert Mommies Club");

 /*
 The following statements insert data into the member table.
  */
  INSERT INTO member (memberId, memberCreationDate, memberLocation, memberPassword, memberUserName) VALUES (UNHEX("7e9618f8d5e549468562a18c720ab159"), "2018-12-22 10:22:16", "Albuquerque, New Mexico", "hahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahahaha", "Pauline Marie Santos");
  INSERT INTO member (memberID, memberCreationDate, memberLocation, memberPassword, memberUserName) VALUES (UNHEX("3b6db9e054684af2af3db45c48708263"), "2019-01-04 11:15:24", "Rio Rancho, New Mexico", "tetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetetete", "Susan Howe");

/*
The following statement updates a row in the member table.
 */
 UPDATE member SET memberLocation  = "Belen, New Mexico" WHERE memberID = UNHEX("3b6db9e054684af2af3db45c48708263");

/*
The following table deletes a row from the member table.
 */
 DELETE FROM member WHERE memberID = UNHEX("3b6db9e054684af2af3db45c48708263");