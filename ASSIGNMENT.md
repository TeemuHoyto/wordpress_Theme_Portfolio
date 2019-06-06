# Business College Helsinki - WordPress Summer Project Learning Week 2019

## Assignment - WP1

- Fetch and checkout `bc-summer-project-code-2019` into the `wp1` branch.
- Create a new project folder by copying the `bc-summer-project-code-2019`.
    - Copy recursively: `cp -R /c/projects/bc-summer-project-code-2019 /c/projects/wp-summer-project`
    - Remove the Git connection: `rm -rf /c/projects/wp-summer-project/.git`.
- Run the Docker application in `wp-summer-project` (stop other projects first if running).
- Create a database for WP with PHPMyAdmin.
    - Go to http://localhost:8080
    - Log in as `user: root / pass: root`
    - Execute the following SQL command.
        - This creates a database and a user for it with the following details:
            - Username: `wpuser`
            - Password: `wppass123`

```sql
CREATE DATABASE wpsummerproject;
GRANT ALL PRIVILEGES ON wpsummerproject.* TO "wpuser"@"%" IDENTIFIED BY "wppass123";
FLUSH PRIVILEGES;
```

- Install WordPress in the `/web/public` directory.
    - Use the newly created database user with WordPress.
    - The database host is not `localhost`. In this Docker environment it is `mysql`.
        - `define( 'DB_HOST', 'mysql' );`
    - Follow these instructions: https://wordpress.org/support/article/how-to-install-wordpress/#basic-instructions
        - _Note that all contents must be directly under `/web/public` not in `/web/public/wordpress`!_
- Create a new theme and call it `Summer Theme`.
    - The directory name should be `summer-theme`.
    - Create a proper style.css.
        - See: https://codex.wordpress.org/Theme_Development#Theme_Stylesheet
    - Create an index.php file echoing `Hello summer!`.
    - Create an empty `functions.php` file.