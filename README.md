# E-commerce API Documentation

This API provides endpoints for user authentication, order creation, and product management in an e-commerce system.

## API Endpoints

### 1. Login User

### `POST /api/login`

This endpoint allows a user to log in by providing an email and password.

**Request Body:**

 ```json

  {
    "email": "user@example.com",
    "password": "your_password"
    }
 ```

**Response:**

- On successful login, returns a JSON Web Token (JWT) and user information.
- On failure, returns an error message indicating invalid credentials.


### `POST /api/login`

This endpoint allows a user to create an order by providing the necessary details such as email, payment method, shipping address, phone number, and the items to order.

**Request Body:**
``` json
{
    "email":"erno@gmail.com",
    "payment":"card",
    "address":"4080 HAjduanans kokanyutca 23",
    "phoneNumber":"073282810",
    "user_id":1,
    "items": [
        {
            "product_id": 1,
            "amount": 2
        },
        {
            "product_id": 3,
            "amount": 1
        }
    ]
}

```
**Response:**
- On successful order creation, returns the order details along with the ordered items.
- On failure, returns validation errors or other relevant error messages.



### GET /api/products ###
This endpoint retrieves a list of all products available in the system.

**Response:**

- Returns a JSON array of all available products.


### GET /api/products/{product} ###
This endpoint retrieves the details of a specific product by its ID.

**Path Parameter:**

- product: The ID of the product you want to retrieve.
**Response:**

- Returns the details of the specified product.



### GET /api/user/{user}/orders ###
This endpoint retrieves all the orders made by a specific user.

**Path Parameter:**

- user: The ID of the user whose orders you want to retrieve.
**Response:**

- Returns a list of all orders placed by the user.