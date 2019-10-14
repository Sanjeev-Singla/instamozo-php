# instamozo-php
Implimentation of instamojo payment gatway in php


Step to implement the Instamojo Payment Gateway for "Testing" and "Live" make sure your working on "live URL".

1. First of we need to create the account on instamojo web site for testing URL(https://test.instamojo.com/) and for live           (https://www.instamojo.com).
2. After login into the instamojo the link with API & Plugins on left side click on that to get credentials to connect with Instamojo.
3. Copy that credentials paste into config.php in file to the respective variables.
4. Give your webhook file URL and redirect URL wherever you want to redirect after the payment. 
5. Next point is mode if you want to test the API then keep the mode "test" and if we want to work on live then keep the mode "www".
6. This folder is also including the sql file (payment.sql) , you just need to create the database and import that file to that database.
7. After creating the database, you just need to make connection with database base in "thanks.php" file to save the data in database.You    need to put the details of database to make connection.
8. All following the all above Points then run that after putting the all details then press do payment, fill the details of card like:-

a.CARD NUMBER: 4242 4242 4242 4242
b.EXPIRE DATE: 01/20
c.CVV: 111
d.OTP: 1221
