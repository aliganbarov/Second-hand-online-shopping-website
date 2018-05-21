<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fb287da487b7ba2c9ac41f4c178831e
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\ApartmentsController' => __DIR__ . '/../..' . '/app/controllers/ApartmentsController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\PostController' => __DIR__ . '/../..' . '/app/controllers/PostController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/app/controllers/ProductsController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Apartment' => __DIR__ . '/../..' . '/app/models/Apartment.php',
        'App\\Models\\BasicUser' => __DIR__ . '/../..' . '/app/models/BasicUser.php',
        'App\\Models\\Cloth' => __DIR__ . '/../..' . '/app/models/Cloth.php',
        'App\\Models\\ClothMaterial' => __DIR__ . '/../..' . '/app/models/ClothMaterial.php',
        'App\\Models\\Comment' => __DIR__ . '/../..' . '/app/models/Comment.php',
        'App\\Models\\Company' => __DIR__ . '/../..' . '/app/models/Company.php',
        'App\\Models\\CompanyCreditCardDetails' => __DIR__ . '/../..' . '/app/models/CompanyCreditCardDetails.php',
        'App\\Models\\CompanyPage' => __DIR__ . '/../..' . '/app/models/CompanyPage.php',
        'App\\Models\\Contract' => __DIR__ . '/../..' . '/app/models/Contract.php',
        'App\\Models\\Food' => __DIR__ . '/../..' . '/app/models/Food.php',
        'App\\Models\\Pet' => __DIR__ . '/../..' . '/app/models/Pet.php',
        'App\\Models\\Post' => __DIR__ . '/../..' . '/app/models/Post.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'App\\Models\\Rate' => __DIR__ . '/../..' . '/app/models/Rate.php',
        'App\\Models\\Rent' => __DIR__ . '/../..' . '/app/models/Rent.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInit2fb287da487b7ba2c9ac41f4c178831e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit2fb287da487b7ba2c9ac41f4c178831e' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2fb287da487b7ba2c9ac41f4c178831e::$classMap;

        }, null, ClassLoader::class);
    }
}
