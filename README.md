# _Address Book_

#### Add contact information to an address book

#### By Jennifer Beem

## Description

This program compiles a list of user-inputted contact information.

## _Application Specifications_

* User can add a new contact and will be routed to a confirmation page.
    * **Input: "Jacob", 999-999-9999, "100 SW 4th Ave.""**
    * **Output: "You added a new contact! Name: Jacob, Phone: 999-999-99999, Address: "100 SW 4th Ave."**
* User can push button on confirmation page to be routed back to the homepage.
    * **Input: User pushes "homepage" button**
    * **Output: User is routed back to homepage**
* The homepage displays all contacts added in the session.
    * **Input:User pushes homepage button**
    * **Output:Homepage lists all contacts**
* User can push button on homepage to delete all contacts from session and will be routed to delete page.
    * **Input:User pushes "delete all" button**
    * **Output:Routed to delete page**
* Delete page confirms deletion of all contacts
    * **Input:User pushes delete all button**
    * **Output:"Address book cleared!"**
* User can push button on delete page to be routed back to the homepage.
    * **Input:User pushes "homepage" button**
    * **Output:Routed to homepage**

## Setup/Installation Requirements

* Clone this repository
* Setup composer file with Silex and Twig
* Open up computer terminal
* Run "composer install"
* Navigate into this project's "web" folder
* Run "php -S localhost:8000" in terminal to setup document root
* Open up web browser and navigate to the url "localhost:8000" to view functional program

## Known Bugs

None known.

## Support and contact details

Feel free to contact me at: jenniferbeem@gmail.com if any questions come up!

## Technologies Used

* PHP/Silex
* HTML/Twig
* CSS/Bootstrap

### License

Copyright (c) 2017 Jennifer Beem
