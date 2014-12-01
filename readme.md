Html
====
Overrides Laravel 4.2 FormBuilder, adding support to array of checkboxes.

In your **"composer.json"** file, add the following line:

    "rodrigo-balest/html": "dev-master"

In your **"app/config/app.php"** file, substitute the original provider `'Illuminate\Html\HtmlServiceProvider',` for the following:

    'RodrigoBalest\Html\HtmlServiceProvider,'

That's it!

PS: This work is based on the following posts:

<https://github.com/laravel/framework/commit/1c7e2dc4f2c9874bc829af55b901e765661ee2a1>

<https://github.com/laravel/framework/issues/5573>