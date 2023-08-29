Task:
Create two endpoints register and login 
register fields - firstname, lastname, username, password.
login - check whether the login details are valid

created two endpoints login and register 

#End Points:
http://127.0.0.1:8082/codeft_login_register/public/api/register
Body:
firstname
lastname
username
password


http://127.0.0.1:8082/codeft_login_register/public/api/login
Body:
username
password

Run migration
php artisan migrate

Database seeding to get the valid username and password for testing
php artisan db:seed

#Valid username and password
valid username - tulasi
valid password - tulasi@123

#api in json format
https://api.postman.com/collections/13725095-3d6d4f78-2f8f-4041-8ca8-89bc82d60ea2?access_key=PMAT-01H91BRT9W6HJGR3A3D0G43XDZ

