## Tugas

### Preparing Installation

Requirements:
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

make sure the tool is installed on your computer: 
- Git
- Composer

### Instalation
- clone git repository `https://github.com/hudabikhoir/user-control-list`
- `composer install`
- `php artisan migrate` 
- `php artisan db:seed`
- or you can run `php artisan migrate:refresh --seed` to refresh mmigration and seeder
- `php artisan serve`
- open `http://localhost:8000/` in your browser

login

```
username: admin@mail.com
password: admin123
```