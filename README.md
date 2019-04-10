# Products CRUD Package

# A package to create-edit-delete products
# Пакет для создания, редактирования и удаления продуктов 

Для полноценного использования пакета рекомендуется выполнить команды:

* php artisan make:auth
* php artisan vendor:publish
* php artisan migrate
* composer dump-autoload
* прописать в DatabaseSeeder.php в методе run() список сидеров:

$this->call([
         	PackageProductsTableSeeder::class,
         	PackageUsersTableSeeder::class
        ]);

* php artisan db:seed

В пакете реализовано простейшее разделение ролей. 
PackageUsersTableSeeder позволяет использовать тестовые данные пользователей.
Для удобства ознакомления можно воспользоваться следующими данными:

Админ
Логин: admin@admin.ru
Пароль: 111111

Менеджер
Логин: manager@manager.ru
Пароль: 222222

В пакете имеется русский перевод сообщений ошибок валидации.
Для его подключения в файле app.php необходимо установить значение 'locale' => 'ru' 