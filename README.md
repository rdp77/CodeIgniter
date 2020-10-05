# Simple Program

This is a collection of simple programs built using Codeigniter as a php framework and using mariadb or mysql as a database, this program includes:

- [Simple Program](#simple-program)
	- [Configuration Database](#configuration-database)
	- [Table Migrations](#table-migrations)
		- [Simple Navigation](#simple-navigation)
		- [Pattern](#pattern)
		- [Auth And Calculator](#auth-and-calculator)
		- [Around the Parallelogram](#around-the-parallelogram)
		- [SQL Query](#sql-query)

## Configuration Database

You can set your own database naming along with a password that can be found in the directory `/application/config/database.php` and you can change it like the example below in **line 76**.

```markdown
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost', //Your hostname, use the default as a recommendation*
	'username' => '', //Username your database*
	'password' => '', //Password your database*
	'database' => '', //Name Database*
	'dbdriver' => 'mysqli', //Driver Database, use this settings if you are using mysql or mariadb*
	...
);
```

## Table Migrations

For run migrations

### Simple Navigation

<div style="text-align:center"><img src="/docs/simple_navigation.png" /></div>
Multiple navigation in header using controllers, you can see <a href="/simple_navigation">here.</a>

### Pattern

<div style="text-align:center"><img src="/docs/pattern.png" /></div>
Passing data from the controllers then making the pattern like the image above, you can see <a href="/pattern">here.</a>

### Auth And Calculator

<div style="text-align:center"><img src="/docs/log_calc.png" /></div>
Provide 2 simple functions, one as the login and logout method using a library from the Codeigniter framework, while the other one is a simple calculator or calculator. you can see <a href="/log_calc">here.</a>

### Around the Parallelogram

<div style="text-align:center"><img src="/docs/parallelogram.png" /></div>
Simple app for counting from the circumference of a parallelogram, you can see <a href="/parallelogram">here.</a>

### SQL Query

<div style="text-align:center"><img src="/docs/parallelogram.png" /></div>
Simple app for counting from the circumference of a parallelogram, you can see <a href="/parallelogram">here.</a>