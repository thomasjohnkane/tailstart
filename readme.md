# Tailstart
-- A starter project for [Laravel](https://laravel.com/docs/master), [Tailwind CSS](https://tailwindcss.com/docs/what-is-tailwind/) and [Stimulus JS](https://github.com/stimulusjs/stimulus)

## Installation
- `git clone git@github.com:thomasjohnkane/tailstart-2.0.git`
- `cd tailstart-2.0`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `yarn install`
- `yarn watch`

- `git clone git@github.com:thomasjohnkane/tailstart-2.0.git && cd tailstart-2.0 && composer install && cp .env.example .env && php artisan key:generate && yarn install && yarn watch`

## Tailwind CSS
- config variables are handled in `./tailwind.js`
- components are pulled into app.scss from `./resources/assets/scss/components`
- They are then built using laravel-mix in the `webpack.mix.js` file

## Stimulus JS
- Items are also built with laravel-mix
- Controllers are stored in `./resources/assets/js/controllers`
- Naming convention matters a lot, pay attention to file names

## Laravel
- Routes, views, etc are all the same as normal