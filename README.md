# Laravel - Nova Skeleton

Copy this entire project to another directory. That directory will be 
the new project with Laravel, Nova, and my packages ready. 

#### Delete these directories
- .idea/
- .git/ 
- node_modules/
- vendor/

#### Delete files
- composer.lock
- yarn.lock

#### Setup database
- Create a database with user for connection.
CREATE DATABASE db_name 
  CHARACTER SET = 'utf8'
  COLLATE = 'utf8_general_ci';

CREATE USER '{db name}'@'{ip address}' IDENTIFIED BY '{password here}';
GRANT ALL ON {db name}.* TO 'db_user'@'{ip address}';
- Set database config in .env

#### Setup config
- Copy .env.example to .env
- Change any settings
- Set project name and description in public/site.webmanifest

#### Change code
- app/Providers/NovaServiceProvider set $whitelistEmail to only 
allow that e-mail in the Nova admin.

#### Run these commands
- composer install
- yarn install
- yarn run dev
- php artisan optimize
- php artisan vendor:publish
- php artisan migrate 
- php artisan db:seed

#### Setup Docker
- Choose shorthand code for containers. 
- Replace `code` in docker/docker-compose.yml with project's code.
- Replace code in docker/phpdocker/nginx/{nginx.conf and nginx-deployed.conf}
- Add any required PHP modules in docker/phpdocker/php-fpm/Dockerfile.
- Set any php_ini overrides in docker/phpdocker/php-fpm/php-ini-overrides.ini

#### Setup Deployer in `deploy.php` file
- Set `$repo_name` to Git repository name.
- Set application name.
- Set remote hosts in ~/.ssh/config, use those same host names.
- Change/set any other Deployer configurations.

#### Setup Git
- Create Git repo on Bitbucket or Github or wherever.
- git init
- git remote add origin {{ git repo URL }}
- git add .
- git commit -m "init commit"
- git push -u origin master

#### Develop like normal now...
- Database migrations in database/migrations (php artisan make:migration)
- Models in app/Models
- Controllers in app/Http/Controllers
- Artisan commands in app/Console/Commands
- Nova Resources, Actions, and Filters in app/Nova
    - Use Nova classes from TCB\Laravel\Nova in the nova-tcb package.
