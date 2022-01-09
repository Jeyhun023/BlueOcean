Hello Mr/Mrs. This file will help you to run tasks.

I Task:
    BetHistory.xml contain you XML data. If you run parser.php it will open BetHistory.xml and 
    return sum of BetAmounts. You just need run this command in I Task (XML parsing) folder: 
    php parser.php

II Task:
    In here I used SoapClient Library. So firstly you should sure that Soap library enabled
    in your local apache. (If you get error still you need to remove the ; from the beginning of 
    extension=soap in php.ini file). You just need run this command in II Task (SoapClient) folder: 
    php soap.php

III Task:
    I used Laravel framework for this task. Firstly you need enter laravel folder and run this command 
    (Make sure you downloaded composer to your machine):
      ->composer install
    Then you need to create 'blueocean' database, configure .env file
    and run this command for created 'view_3d' table:
      ->php artisan migrate
    For uploading data to table you need run this command:
      ->php artisan db:seed
    After completed these steps just run following command:
      ->php artisan serve
    Finally, enter this here in browser: localhost:8000

    P.S: Instead of creating table and storing data in MySql side, I handled it in Laravel side by 
    migration and seeder for showing my knowledge.

Thank you for your time. Good Luck :)