# pack-test

# 1.laravel 作为例子 引入包的方式

编辑composer.json

    
    "require": {
            "pack/test": "dev-master"
     },
    "repositories": {
                "0": {
                    "type": "git",
                    "url": "git@github.com:Yinjinshui/pack-test.git"
                },
                "packagist": {
                    "type": "composer",
                    "url": "https://packagist.phpcomposer.com"
                }
     }




# 2.执行更新


    D:\laravel_www\blog>composer update pack/test
    Loading composer repositories with package information                                               Updating dependencies (including require-dev)
    Package operations: 1 install, 0 updates, 0 removals
      - Installing pack/test (dev-master 85ef76f): Cloning 85ef76feee from cache
    Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.
    Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.
    Writing lock file
    Generating optimized autoload files
    > Illuminate\Foundation\ComposerScripts::postAutoloadDump
    > @php artisan package:discover --ansi
    Discovered Package: facade/ignition
    Discovered Package: fideloper/proxy
    Discovered Package: laravel/tinker
    Discovered Package: nesbot/carbon
    Discovered Package: nunomaduro/collision
    Package manifest generated successfully.
    25 packages you are using are looking for funding.
    Use the `composer fund` command to find out more!
    

# 3 更新之后pack/test组件包的位置

 所在目录：vendor/pack