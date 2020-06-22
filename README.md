# :fire: Laravel tailwind css dashboard preset
[![Total Downloads](https://poser.pugx.org/miaababikir/laravel-tailwind-dashboard-preset/downloads)](//packagist.org/packages/miaababikir/laravel-tailwind-dashboard-preset) [![Daily Downloads](https://poser.pugx.org/miaababikir/laravel-tailwind-dashboard-preset/d/daily)](//packagist.org/packages/miaababikir/laravel-tailwind-dashboard-preset) [![License](https://poser.pugx.org/miaababikir/laravel-tailwind-dashboard-preset/license)](//packagist.org/packages/miaababikir/laravel-tailwind-dashboard-preset)

A Laravel dashboard front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - Support RTL out of the box.

## Usage

1. Fresh install Laravel >= 7.0 and `cd` to your app.
2. Install this preset via `composer require miaababikir/laravel-tailwind-dashboard-preset --dev`. Laravel will automatically discover this package. No need to register the service provider.

### For Vue preset with stacked layout

1. Use `php artisan ui tailwind-dashboard --option=vue.stacked`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### For Vue preset with sidebar layout

1. Use `php artisan ui tailwind-dashboard --option=vue.sidebar`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### For Alpine preset with stacked layout

1. Use `php artisan ui tailwind-dashboard --option=alpine.stacked`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### For Alpine preset with sidebar layout

1. Use `php artisan ui tailwind-dashboard --option=alpine.sidebar`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### Todo
- [ ] Password reset
- [ ] Verify email
- [ ] Welcome

### Screenshots

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Stacked Dashboard](/screenshots/preset_stacked.png)

![Sidebar Dashboard](/screenshots/preset_sidebar.png)
