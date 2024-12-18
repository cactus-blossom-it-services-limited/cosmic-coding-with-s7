## A list of tasks for this app
### Session management and routing
- [x] Create a new controller to explore sessions
- [x] Create routes using xml and php instead of attributes
- There is a missing piece to the jigsaw puzzle in Symfony documentation. 
- Xml routes in routes.xml do not work without further configuration.
- The gap in the documentation is filled by a Symfony 6 youtube video
- [Add code to Kernel.php to enable xml and php routing](https://www.youtube.com/watch?v=NtgKCoC3-sY)

- [x] Create sessions routes to store and retrieve session data
- [x] Start a session in a controller using Request object
- [x] Start a session in a controller using $session = new Session();
- Sessions are started as soon as any session data is accessed
- By default, sessions cookies are created for anonymous users
- This can impact performance
- [x] Store sessions in the database
- [ ] Use debugging commands for session configuration
- [Symfony docs session configuration](https://symfony.com/doc/current/reference/configuration/framework.html#config-framework-session)
- [store sessions in a database](https://symfony.com/doc/current/session.html#store-sessions-in-a-database)
- [ ] Login to the site
- [ ] Create a registration form using make command
- [ ] Create a login form using make command
- [ ] Register a new user account
- [ ] Login using that account
- [ ] Setup basic security firewalls.
- [x] Find out if the database runs in docker or is sqlite
- [x] Start the database
- [ ] Add fixtures to load fake users

### Advanced routing
- [ ] Create a php route
- [ ] Do

### Theming with Tailwind
- [x]] Install asset-mapper
- [ ] Use php bin/console debug:asset-map to show mapped paths and their assets
- [ ] Use php bin/console config:dump framework asset_mapper for config options
- [ ] Run php bin/console importmap:audit to check security vulnerabilities
- [x] Install Tailwind
- [x] Use composer require symfonycasts/tailwind-bundle
- [x] Use php bin/console tailwind:init
- [x] Add the Tailwind input file to base.html.twig
- [x] Configure Tailwind
- [Symfony tailwind docs](https://symfony.com/bundles/TailwindBundle/current/index.html)
- [x] Use php bin/console tailwind:build --watch
[ ] 

### Doctrine database
- [ ] Clean up the multiple migrations
- https://symfonycasts.com/blog/clean-up-migrations
- [x] Change the postgres database user password
- Run: `docker compose ps` to find the external port number
- Then run: `psql --user=app --port=32770 --host=127.0.0.1 --password app` where 'app' is name of db
- In psql client run: `ALTER USER user_name WITH PASSWORD 'new_password';`
- Alternatively run: `docker compose exec database psql --username app --password app` then enter the password

### HTTP Request and Response Objects
-[x] Create a new Controller nommé LaDemandeHttp
- [ ] Utilisez les méthodes de la HTTPFoundation component
- [ ] Utilise $request = Request::createFromGlobals();
- [les fondamentales de http](https://symfony.com/doc/current/introduction/http_fundamentals.html#requests-and-responses-in-php)

### HTTP Kernel
- [] Utilisez les méthodes de la DataCollectorInterface
[les méthodes de la DataCollectorInterface](https://github.com/symfony/symfony/blob/2.3/src/Symfony/Component/HttpKernel/DataCollector/DataCollectorInterface.php)

### Caching
- [ ] Use bin/console debug:autowiring cache
- 
`code`
Link 	[title](https://www.example.com)
**bold text**
Unordered list
- First item
Fenced code block
```
{
  "firstName": "John",
  "lastName": "Smith",
  "age": 25
}
```
Emoji
That is so funny! :joy: 

