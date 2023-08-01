# Shopping Cart Challenge

This is a simple shopping cart application that allows users to add, update, and remove products from their cart and then confirm the purchase.

# Requirements
- PHP 8.0 or higher
- Symfony 5.3 or higher
- PHPUnit 9.5 or higher

## Instructions

1. Clone the repository:
   * `git clone git@github.com:jaswindersinghcode/siroko.git`
   * `cd siroko`
2. Start docker:
   * `make up`
3. Run tests:
   * `make tests`
4. For stopping the docker: 
    * `make down` 

# API
The API endpoints are as follows:

- URL: http://localhost:2138

* POST /api/cart/add: Add a product to the shopping cart. Send the product ID and quantity as JSON data in the request body.

* PUT /api/cart/update: Update the quantity of a product in the shopping cart. Send the product ID and new quantity as JSON data in the request body.

* DELETE /api/cart/delete: Remove a product from the shopping cart. Send the product ID as JSON data in the request body.

* POST /api/cart/confirm: Confirm the purchase and save the cart items to the database. This will clear the shopping cart.

* GET /api/cart/count: Get the total number of products in the shopping cart.

# BBDD
 * Host: localhost
 * Port: 3315
 * user: root
 * pass: root
 * Database: Siroko

## Talks
Within the domain model, we have defined two entities: Cart and Product. These entities represent the core business concepts and are accompanied by repository interfaces that define contracts for accessing data from the database.

The application service layer includes two classes: CartService.php and SearchProduct.php. The CartService class handles the business logic related to cart management, while the SearchProduct class is responsible for searching and retrieving product information.

In the infrastructure layer, we have the CartController class, which serves as the entry point for handling HTTP requests related to cart operations. The mappings and Doctrine files are also part of the infrastructure, enabling the interaction between the domain model and the database.

The methodology for managing the cart involves storing the cart data in a session. This functionality is implemented using the CartAggregate.php class. The cart data is stored temporarily in the session to maintain the user's shopping cart during their browsing session.

When the user confirms the cart and proceeds to make a purchase, the cart data is then stored in the database using the Cart.php entity. The Cart entity will store the cart items and their associated details in the database, enabling us to maintain a record of the user's purchases.

While it is possible to manage the entire cart management process directly in the database, we chose to use session storage for cart management for simplicity and speed. By using session storage, we can quickly update and retrieve cart data without the overhead of constant database interactions for each user's session.

In summary, the codebase follows the principles of DDD, and the cart management methodology using session storage provides a straightforward and efficient solution for handling user shopping carts while maintaining a record of confirmed purchases in the database.
## Unit Tests
The unit tests focus on testing individual units or components of the application in isolation. 
We have written unit tests for the core business logic and functionalities using PHPUnit, a popular testing framework for PHP.
The unit tests cover the following class with components:
`Domain/Model/CartAggregate/CartAggregateTest.php`

## Integration Tests
We have done some integrations tests, actually these are more considered as acceptance test, where we are testing the whole input and output of API endpoints.
Also, could have done some tests mocking the classes so can we test interactions between the controller, service layer, and data repositories.
Buy the approach is to show some examples as it is a code challenge.

The app will be accessible on `http://localhost:2138`.

Enjoy code!