# AishBrew Coffee Shop Website

## Setup

1. Create MySQL Database:
   - Name: aishbrew
   - Table: users
   - Columns: id (int, auto_increment, PK), username (varchar), password (varchar)

2. Insert a test user:
   ```
   INSERT INTO users (username, password) VALUES ('admin', MD5('yourpassword'));
   ```

3. Edit `config.php` for DB credentials.

4. Upload all files to your web server (Apache with PHP + MySQL).

5. Visit `index.html` and login from `login.html`.

Enjoy!
