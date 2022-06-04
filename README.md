<p><a href="https://laravel.com" target="_blank"><img src="https://camo.githubusercontent.com/a2676d223d98caa2fb625d37d9fc911a8eab620ae99d6aadaad02fd26680ab67/68747470733a2f2f7374617469632e74696c646163646e2e636f6d2f74696c64333633382d333333382d343133362d623033382d3331333133323330363433382f47726f75705f3634302e737667" width="400"></a></p>

### Результат выполнения тестового задания для backend-разработчика Profilance Group

### Steps you have to take to run app on your local environment:
- Git clone the project to a desired folder.
- Run composer install command.
- Modify .env file, provide DB_NAME, DB_HOST, DB_SECRET, DB_USER.
- Run php artisan migrate.
- Go to [localhost/graphql-playground](http://localhost/graphql-playground).

### Add new link to be shortened:
execute request similar to this:
```
mutation {  
  shortenLink(full_link: "https://github.com/profilancegroup/backend-test-task")
  { 
     full_link,
     short_link,
     clicks
  }
}
```

### Get all existing links:
execute request similar to this:
```
{
  links {
    full_link,
    short_link,
    clicks
  }
}
```
### Imitate click on the short link by executing a request like this one where OyoksPO/Mm you should pick yourself from existing list: 
```
mutation {
  clickLink(short_link: "OyoksPO/Mm") {
    full_link,
    short_link,
    clicks
  }
}
```
