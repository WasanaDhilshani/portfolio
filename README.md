# portfolio
url: https://wasanadhilshani.github.io/portfolio/
source: https://github.com/WasanaDhilshani/portfolio


The provided SQL code is a dump of a database schema and data for a table named `users`. This code is typically used to recreate the structure of the table and populate it with data in a MySQL/MariaDB database. If you want to use this SQL dump to create the table and insert the data into your own database, follow these steps:

1. **Access Your Database Server**: Make sure you have access to a MySQL or MariaDB database server where you want to create the `portfoliodb` database.

2. **Create a Database**: If the database `portfoliodb` doesn't already exist on your server, create it using the following SQL command:

   ```sql
   CREATE DATABASE IF NOT EXISTS portfoliodb;
   USE portfoliodb;
   ```

3. **Run the SQL Dump**: Execute the provided SQL dump script in your MySQL/MariaDB environment. You can use various methods to run this SQL script, such as through a command line tool or through a database management tool like phpMyAdmin. If you're using a command line, you can do the following:

   a. Open a command prompt or terminal.
   
   b. Log in to your MySQL/MariaDB server using the following command (replace `username` and `password` with your actual credentials):
   
      ```sh
      mysql -u username -p
      ```
   
   c. You will be prompted to enter your password. After entering the password, you'll be in the MySQL/MariaDB command-line interface.
   
   d. Select the appropriate database:
   
      ```sql
      USE portfoliodb;
      ```

   e. Copy and paste the provided SQL dump script into the command-line interface and press Enter. This will create the `users` table and insert the data.

4. **Verify the Data**: After running the script, you can verify that the table and data have been created by running a simple SQL query:

   ```sql
   SELECT * FROM users;
   ```

   This query will display the data that you inserted into the `users` table.

Please note:

- Ensure you have a backup of your data before running any SQL script that modifies your database, especially if you're dealing with a production environment.
- This SQL dump contains plain text passwords, which is not recommended for security reasons. In practice, passwords should be hashed and salted before storing them in a database.
- The provided dump is in a specific format compatible with MySQL/MariaDB. If you are using a different database system, some adjustments might be needed.
