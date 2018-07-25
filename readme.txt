after uncompressing the zip
the project requires php version > 5.2, MySQL

first thing to do is to create a database with the name traffic_offense
the default database connection in the .env file is

username=root
password=password

in case this isn't the connection details for your mysql db then change the file accordingly

to setup the project do the following
1. open a command prompt terminal and navigate to the root folder of the project. copy and paste the following commands one after the other
2. php artisan migrate
3. php artisan db:seed
4. php artisan serve

this last command starts the server and can be used to start the server anytime