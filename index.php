<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <body>
        <h1>Hello World! Greetings from GitHub!</h1>
        <img src="https://assets-cdn.github.com/images/modules/logos_page/Octocat.png">
        <p> <?php echo 'We are running PHP, version: ' . phpversion(); ?></p>
        <?
        $database = "zavrel_db";
        $user = "user";
        $password = "password";
        $host = "mysql";

        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
       	$query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
        $tables = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
          echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
          echo "<p>Database \"{$database}\" has the following tables:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        ?>
    </body>
</html>
