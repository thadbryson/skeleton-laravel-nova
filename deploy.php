<?php

declare(strict_types = 1);

namespace Deployer;

require './vendor/thadbryson/nova-tcb/deployer/recipe.php';

$repo_name = '';

set('application', '???');
set('repository', 'git@bitbucket.org:thadbry/' . $repo_name . '.git');

// Hosts
localhost()
    ->stage('local')
    ->set('deploy_path', '/var/www/deploy/' . $repo_name);

host('wolfy-dev')
    ->stage('production')
    ->set('deploy_path', '~/www/' . $repo_name);
