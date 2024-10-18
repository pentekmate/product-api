# E-commerce API Documentation

This API provides endpoints for user authentication, order creation, and product management in an e-commerce system.

## API Endpoints

### 1. Login User

#### `POST /api/login`

This endpoint allows a user to log in by providing an email and password.

**Request Body:**

 ```json
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

# On successful login, returns a JSON Web Token (JWT) and user information.
# On failure, returns an error message indicating invalid credentials.
