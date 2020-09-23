# Simple Program

This is a collection of simple programs built using Codeigniter as a php framework and using mariadb or mysql as a database, this program includes:

1. [Simple Navigation](/simple_navigation)

## Configuration Database

You can set your own database naming along with a password that can be found in the directory `/application/config/database.php` and you can change it like the example below in **line 76**.

```markdown
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost', *//Your hostname, use the default as a recommendation*
	'username' => '', *//Username your database*
	'password' => '', *//Password your database*
	'database' => '', *//Name Database*
	'dbdriver' => 'mysqli', *//Driver Database, use this settings if you are using mysql or mariadb*
	...
);
```

## Table Migrations

For run migrations

### Simple Navigation

<div style="text-align:center"><img src="/docs/simple_navigation.png" /></div>
Multiple navigation in header using controllers, you can see <a href="/simple_navigation">here.</a>
