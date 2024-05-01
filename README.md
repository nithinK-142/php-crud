# PHP CRUD

A simple php api to perform crud opearions.

##### API Endpoints

#### GET

all users

```bash
http://localhost/php-crud/users/
```

single user

```bash
http://localhost/php-crud/user/1
```

#### POST

create user

```bash
http://localhost/php-crud/user/save
```

req body

```bash
{
    "name":"one",
    "email":"one@mail.com",
    "mobile":"1234567890"
}
```

#### PUT

edit user

```bash
http://localhost/php-crud/user/1/edit
```

req body

```bash
{
    "name":"oneone",
    "email":"one@mail.com",
    "mobile":"1234567890"
}
```

#### DELETE

delete user

```bash
http://localhost/php-crud/user/1/delete
```
