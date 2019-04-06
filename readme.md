# Web Development with Laravel Framework 

## Helper

[Laravel: Creating Your Own Helpers](https://blog.nasrulhazim.com/2018/07/laravel-creating-your-own-helpers/)

## Eloquent: Observer 

[Laravel Observer](https://blog.nasrulhazim.com/2017/11/laravel-observer/)

## Processors vs Services

**Processor**: Think of processes of getting something. It's like you are registering for company to SSM. You provide your company details and give to SSM to PROCESS. That PROCESS, is the process of the SSM have. In application terms, SSM = application, processing the company registration form is a Processor. 

**Service**: Think of service provider like TM Unifi, Celcom, McDonald. They provide services to end users. In application level, the application provide service to consumer, which the consumer is the other application that want to use the application services. 


```php
// helper
userProcessor($username, $email, $password);
// processor
\App\Processors\UserProcessor::make($username, $email, $password);

// services
\App\Services\UserService::make($username)->avatar();
// helper for services
avatar($username);
// api 
return response()->json([
	'avatar' => avatar(request()->username),
]);
```

## Macros

[How do I Create Laravel Macros](https://laracasts.com/series/how-do-i/episodes/21)

- [Response](https://blog.nasrulhazim.com/2017/12/laravel-response-macro/)
- [Route](https://blog.nasrulhazim.com/2017/12/laravel-route-macro/)
- [Blueprint](https://blog.nasrulhazim.com/2017/12/laravel-blueprint-macro/)

## Advanced Seeder / Environment Seeder

Seed different set of data for different environment, depending on objective for the environment.

- Development
- Staging 
- Production
- PHPUnit Test
- UAT / FAT if necessary

The environment seeder should only executed based on application environment. Test seeder shouldn't be run in production environment.

Following are the desire commands for our seeding via command line:

```
php artisan seed:pre
php artisan seed:dev
php artisan seed:uat
php artisan seed:test
php artisan seed:prod
```

Create commands:

```
php artisan make:command Seed/PreseedCommand
php artisan make:command Seed/DevelopmentCommand
php artisan make:command Seed/UATCommand
php artisan make:command Seed/TestCommand
php artisan make:command Seed/ProductionCommand
```

Create seeders:

```
php artisan make:seeder SeedPreseedCommand
php artisan make:seeder SeedDevelopmentCommand
php artisan make:seeder SeedUATCommand
php artisan make:seeder SeedTestCommand
php artisan make:seeder SeedProductionCommand
```

Create tests:

```
php artisan make:test SeedPreseedCommandTest
php artisan make:test SeedDevelopmentCommandTest
php artisan make:test SeedUATCommandTest
php artisan make:test SeedTestCommandTest
php artisan make:test SeedProductionCommandTest
```

## PHPUnit Tests

- Feature & Unit Test 
- HTTP Tests
- Console Tests 
- Browser Tests 
- Database
- Mocking

### Laravel Dusk

```
$ composer require --dev laravel/dusk
$ php artisan dusk:install
$ cp .env .env.dusk.local
```

## Laravel Nova

## Best Practices

- [PHP THe Right Way](https://phptherightway.com/)
- [PHP Standard Recommendation (PSR)](https://www.php-fig.org/psr/)
- PHPUnit Test
- CI / CD 
	- [Using GitLab's pipeline with Laravel](https://lorisleiva.com/using-gitlabs-pipeline-with-laravel/)
	- [Laravel deployment using GitLab's pipelines](https://lorisleiva.com/laravel-deployment-using-gitlab-pipelines/)