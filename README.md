# :fire: Laravel tailwind css dashboard preset
A Laravel dashboard front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - Support RTL out of the box.

## Usage

1. Fresh install Laravel >= 7.0 and `cd` to your app.
2. Install this preset via `composer require miaababikir/laravel-tailwind-dashboard-preset --dev`. Laravel will automatically discover this package. No need to register the service provider.

### a. For Vue preset with stacked layout

1. Use `php artisan ui tailwind-dahshboard --option=vue.stacked`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### b. For Vue preset with sidebar layout

1. Use `php artisan ui tailwind-dahshboard --option=vue.sidebar`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### c. For Alpine preset with stacked layout

1. Use `php artisan ui tailwind-dahshboard --option=alpine.stacked`
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### d. For Alpine preset with sidebar layout

1. Use `php artisan ui tailwind-dahshboard --option=alpine.sidebar`
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
