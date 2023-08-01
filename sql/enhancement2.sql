/* For first client */

INSERT INTO clients (clientFirstname, clientLastname, clientEmail, clientPassword, comment) VALUES ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman')


/* Update clientLevel for clientId = 1*/
UPDATE clients SET clientLevel= "3" WHERE clientFirstname = 'Tony' AND clientLastname = 'Stark';


/* Update GM Hammer */

UPDATE inventory SET invDescription = REPLACE(invDescription, 'small interiors', 'spacious interior') WHERE invMake = 'GM' AND invModel = 'Hummer'

/* Use Inner Join to show the cars with SUV classification */

SELECT inventory.invModel, carclassification.classificationName FROM inventory INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId WHERE carclassification.classificationName = "SUV";

/* Delete Jeep */

DELETE FROM inventory WHERE invMake = 'Jeep' AND invModel = 'Wrangler';

/* Update All */

UPDATE inventory SET invImage = concat('/phpmotors',invImage), invThumbnail = concat('/phpmotors',invThumbnail);