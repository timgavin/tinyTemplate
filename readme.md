
# tinyTemplate

tinyTemplate is a *very* simple PHP template engine aimed at those who have little to no experience with PHP or PHP templates. In fact, you don't need to know a lick of PHP to use tinyTemplate; you only need to know HTML and how to copy/paste.

tinyTemplate uses `.htaccess` and Apache's `mod_rewrite` to automatically load your pages into the tinyTemplate engine.

## Basic Template Example

Here is an example of a basic tinyTemplate web page. This is pretty much what all of your site pages will look like; just enter your content between the appropriate `tiny()` functions and tinyTemplate does the rest - including stripping the `.php` extension from your files to craft pretty urls!

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- add meta tags -->
        <?php tiny('meta') ?>
        
        <!-- each page's title -->
        <title><?php tiny('title') ?></title>
        
        <!-- import css style sheets and/or plain CSS -->
        <?php tiny('css') ?>
        
        </head>
    <body>
    
        <!-- add your page content -->
        <?php tiny('content') ?>
        
        <!-- import javascripts -->
        <?php tiny('scripts') ?>
        
        <!-- add custom jquery and javascript -->
        <?php tiny('jquery') ?>
        
    </body>
</html>
```

## Page Example

Here is an example of a basic tinyTemplate HTML page. This is pretty much what all of your site pages will look like; just enter your content between the appropriate tags and tinyTemplate does the rest!

As you can see, tinyTemplate makes it easy to add custom meta tags, css files and javaScripts to each page so you don't have to load up your base template with tons of files and scripts that you only use once or twice, which can help your pages be a little faster. Plus, all of your content is contained in each page file, so you don't have to hunt and peck your directories for page fragments.

```html
{{ title }}
    My Page Title
{{ !title }}


{{ meta }}
    <meta name="description" content="Custom description for this page">
    <meta name="keywords" content="custom, widget, keyword">
{{ !meta }}


{{ css }}
    <link href="css/custom-styles-for-this-page.css" rel="stylesheet">
{{ !css }}


{{ content }}
    <div class="container">
        <div class="row">
            <h1>My Content</h1>
            <p>My Page content goes here...</p>
        </div>
    </div>
{{ !content }}


{{ scripts }}
    <script src="js/custom-scripts-for-this-page.js"></script>
{{ !scripts }}


{{ jquery }}
    <script>
        $('.alertme').click(function() {
            alert('Hi');
        });
    </script>
{{ !jquery }}
```

## Installation

1. Download tinyTemplate.
1. Unzip the archive into your web root.
1. Copy your site's theme folder into `assets/themes/`
1. Open your theme's template file and add the `tiny()` functions.
1. Create your web pages using the appropriate `{{ }}` tiny tags.
1. Link to your pages using pretty urls.
1. Visit your site.
