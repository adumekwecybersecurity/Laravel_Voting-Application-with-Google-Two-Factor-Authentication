# Laravel_Voting-Application-with-Google-Two-Factor-Authentication

# LARAVEL WEB VOTING SYSTEM WITH GOOGLE-TWO-FACTOR-AUTHENTICATION-LOGIN. laravel version 9.1.0

# TEMPLATES: Bootstrap

-  Dashboard Interface: Staff and Student Dashboard admin LTE v3.2.0 other  components were customized
   by the developer.

# STUDENT DASHBOARD FUNCTIONALITIES 

 - Employs and Supports Login (Authentication) using statefulguard. 
 - Allows Student to update specific profile information's and data. 
 - Allows student to change their password from their dashboard without them login out.
 - Allows student to enable Google-two-factor authentication with recovery codes generated and provided.
 - Allows student to vote the candidate of their choice for each category i.e a student can only vote for one president in 
   the presidential category, welfare, secretary, etc. 
 - Allows the system to record each vote session in the candidate that was voted column. 
 - Allows student to only vote once in all category. Student will not be able to view voting page after they have voted. 
 - Student can see voting result, when it is published by accessing the information from their dashboard. 
 - Student can view other announcements. 


# STAFF DASHBOARD FUNCTIONALITIES 

 - Employs and Supports Login (Authentication/Passport) using statefulguard. 
 - Allows Staff to update specific profile information's and data. 
 - Allows staff to change their password from their dashboard without them login out.
 - Allows staff to register the candidate contesting, their manifesto, photo, and other important information
   in the various category e.g presidential category, welfare, secretary, etc. 
 - Allows the system to record and store the information's of the contestant registered by the staff into the database 
 - Allows the staff to insert student whose records are not in the database individually, so they can have access to vote.
 - Allows the staff to publish results of the winning candidates, for all students to view when they access their dashboard
 - CRUD: Create, Delete Candidate from the system.
 - CRUD: Create, Delete Students from the system.
 - View voting statistics.
 - Insert announcements into the database. 




#   Language USED

    - Laravel 9.1.0 (Php Framework)
    - PHP 8 (Note: Supports PHP 5 and version 7)
    - HTML
    - CSS
    - Javascript
    - Toast (Push notification)
    - Livewire(for some components)
    - MySQL
    - API (Google-two-factor-Authentication): default installation from laravel, however some configurations were customised
      by the developer. 

#  Requirements

    Wampserver
    PHP 5 or higher
    MySQL
    Composer (To install Laravel and Other Dependencies)
 

# First navigate to your wampserver "www directory" using the cmd-prompt or terminal: 

  e.g : C:\wamp64\www>

# Secondly Clone the repository

- git clone git@github.com:adumekwecybersecurity/studentvoting.git

# On terminal should look like this when cloning: 

- C:\wamp64\www>git clone git@github.com:adumekwecybersecurity/studentvoting.git

# Navigate to the project directory

- cd studentvoting

# Install PHP Dependencies using composer

- composer install

# Copy .env.example to .env

# (Window OS)

  - copy .env.example .env


# It is important that you do database configuration first in the .env file

# Database Name: studentvoting

  - Note: Database name all in lowercase or small-letters, when creating the DB in mysql by accessing phpmyadmin. 

# Run database migration Using the command Below after opening project folder using vscode or any code editor you good with.

  - php artisan migrate:fresh --seed

# The command imports the database tables and default data automatically into your database

# Then proceed to the next step

# CREATING Link storage

  - php artisan storage:link



# Serve the application using the command below

 - php artisan serve

# View the web-application on http://studentvoting.local
   
- Note : After you have configure the virtual host on wamp server. If you do not know how to configure a virtualhost,
         visit this link:https://github.com/adumekwecybersecurity/CRUD_PHP-Bootstrap  and check the README.md section, 
         by viewing the snapshots on how to configure a virtualhost.

# Student login link:  http://studentvoting.local/login

# Staff login link:  http://studentvoting.local/staff/login

# SYSTEM VIEW-SNAPSHOTS
