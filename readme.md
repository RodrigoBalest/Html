Html
====
Overrides Laravel 4.2 FormBuilder, adding support to array of checkboxes.

In your **"composer.json"** file, add the following line:

    "rodrigo-balest/html": "dev-master"

In your **"app/config/app.php"** file, substitute the original provider `'Illuminate\Html\HtmlServiceProvider',` for the following:

    'RodrigoBalest\Html\HtmlServiceProvider,'

That's it!