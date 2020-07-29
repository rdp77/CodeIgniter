# Simple Program

This is a collection of simple programs built using Codeigniter as a php framework and using mariadb or mysql as a database, this program includes:

1. [Keliling Jajar Genjang](https://github.com/rdp77/CodeIgniter/tree/master/Keliling_Jajar_Genjang)

## Configuration Database

You can set your own database naming along with a password that can be found in the directory `/application/config/database.php` and you can change it like the example below in **line 76**.

```markdown
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost', //Your hostname, use the default as a recommendation
	'username' => '', //Username your database
	'password' => '', //Password your database
	'database' => '', //Name Database
	'dbdriver' => 'mysqli', //Driver Database, use this settings if you are using mysql or mariadb
	...
);
```

### Keliling Jajar Genjang

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/rdp77/CodeIgniter/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.
