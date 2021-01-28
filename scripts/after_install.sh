#!/bin/bash

set -eux

cd ~/mercari-ci
php artisan migrate --force
php artisan db:seed --force
php artisan config:cache
