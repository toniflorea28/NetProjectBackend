<h1>Steps to setup project</h1>

<h3>You need XAMPP, Composer and NodeJS to run this project locally</h3>
<ol>
<li>
git clone git@github.com:toniflorea28/NetProjectBackend.git
</li>
<li>cd into project</li>
<li>Install Composer Dependencies: composer install</li>
<li>Install NPM Dependencies: npm install</li>
<li>Create a copy of your .env file: cp .env.example .env</li>
<li>Generate an app encryption key: php artisan key:generate</li>
<li>Create an empty database for the application</li>
<li>In the .env file, add database information (db name, user, password)</li>
<li>Import table (from classroom .sql file)</li>
<li>To run the backend app, use: php artisan serve</li>
<li>Done, the backend should be running</li>
</ol>