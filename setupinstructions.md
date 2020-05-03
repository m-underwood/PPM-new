# Set up instructions for developers
## Requirements
  *	XAMPP Application.
  *	Latest copy of the application from the GitHub repository.
  
## Steps
  * Open the XAMPP file location and go into the htdocs folder.
  * Place latest copy of the application from the GitHub repository in the htdocs folder.
  * Start the XAMPP application, on the control panel start the Apache and MySQL modules.
  * Click the admin option on the MySQL, it should direct you to phpMyAdmin at the URL address: localhost:80/phpMyAdmin. If there is an issue check port listen number. 
  * On the phpMyAdmin interface, click the new option and create a database called ppm_database.
  * Go into the newly created ppm_database and click import select the ppm_database.sql file in the Github and click go. The database should now be loaded in. 
  * Go back into the XAMPP application and click on apache admin and application should now be running.
  
## Important  
*When working on the phpMyAdmin database, remember to export the SQL database after you have finished working on it, the database must be imported and exported at the beginning and end of every session
