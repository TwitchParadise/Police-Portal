# Police
Portal for logging crimes for your FiveM RP server.

At the time of doing this, there is no repo for this project by the owner. I do not own this software, it is a "fork" from [here](https://forum.fivem.net/t/release-lspd-web-panel-v-0-0-1/23428) Make sure to check out the [Owner](https://forum.fivem.net/u/davendrix)

## Installation Guide
- Download the ZIP folder
- Open the `config.php` file and change the following to connect to your database:
```
$username = "police-portal"; // username
$password = "your password"; // password of the database
$hostname = "localhost"; // host of the database
$namebase = "police"; // name of the database
```
- Import the `databse.sql` file into your MySQL database
- Upload all the files to your webserver and then visit `http://yoursite.com/signup.php`to create an account
- Once you have created an account, delete the `signup.php` file
- You're done!

## Features
- Add players a criminal list
- Search by each heading

## Demo
A demo of this can be found [here](http://gtavrptest.16mb.com/login.php)

Username: `test@test.com`

Password: `test`
