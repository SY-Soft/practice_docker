#!/bin/bash

mkdir -p /var/cache/laravel

for project in /var/www/projects/*; do

    if [ -f "$project/artisan" ]; then

        name=$(basename "$project")

        mkdir -p "/var/cache/laravel/$name"

        rm -rf "$project/bootstrap/cache"

        ln -s "/var/cache/laravel/$name" "$project/bootstrap/cache"

        echo "Laravel cache linked: $name"
    fi

done

exec php-fpm