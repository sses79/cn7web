# CN7WEB demo website
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
[link to cn7web.com](http://cn7web.com)

Thank you for checking my demo website!

## Laravel PHP Framework

###
Database: Migrations and seeding
In this demo website the database schema is created by Laravel migration, which can be easily rollback and reset. All migrations are placed in the 
[database/migrations](https://github.com/sses79/cn7web/tree/master/database/migrations) directory. 


Database test data are seeded by Laravel seed classes. All seed classes are stored in the [database/seeds](https://github.com/sses79/cn7web/tree/master/database/seeds) directory. 

###
Model and Eloquent
Model `Phone` is used in the [Frontend.portfolio](http://cn7web.com/portfolio) page. All phone data is retrieved from the database through the controller via the Eloquent method.

Model `news` is used in the [Frontend.timeline](http://cn7web.com/timeline) page. Each news recorder is a timeline item.

###Routing and Controller
All Laravel routes are defined in the [app/Http/routes.php](https://github.com/sses79/cn7web/blob/master/app/Http/routes.php) file, which is automatically loaded by the framework. There are three sections in `routes.php`
, which are *frontend views,* *backend,* *API* .

The related HTTP request handling logic is grouped into different controller classes. These controllers are stored in the [app/Http/Controllers](https://github.com/sses79/cn7web/tree/master/app/Http/Controllers) directory.

###Views
In this demo website all the pages are created by Laravel `blade` templating engine, using the `.blade.php` file extension and stored in the [resources/views](https://github.com/sses79/cn7web/tree/master/resources/views) directory.

###Admin and CRUD
Authentication is implemented using the `cartalyst/sentinel` package. Access backend can be either through [Backend Login](http://cn7web.com/backend/login) or through the given **admin** link on [welcome page](http://cn7web.com). Demo user credentials are `email: admin@admin.com | pw: admin`.

You can use [Add New Timeline Item](http://cn7web.com/backend/news/create) to create a new timeline item under the `Timeline items` menu. When a timeline item is created, it will be presented on the [Frontend.timeline](http://cn7web.com/timeline) page immediately. You can edit or delete timeline items by using [Timeline Item List.Actions](http://cn7web.com/backend/news) :pencil: :heavy_multiplication_x:.

###jQuery components
In this demo website, the used jQuery components are
[datatables](https://datatables.net/), [font-awesome](http://fontawesome.io/), [ihover](https://github.com/gudh/ihover), [owl_carousel](http://owlcarousel2.github.io/OwlCarousel2/index.html), [summernote](http://summernote.org/), and
[vertical-timeline](https://codyhouse.co/gem/vertical-timeline/) 

##License

L
icensed under the [MIT license](http://opensource.org/licenses/MIT).
