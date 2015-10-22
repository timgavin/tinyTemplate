{{ title }}
    tinyTemplate | PHP tinyTemplate System
{{ !title }}




{{ meta }}
    <!-- easily add meta tags for each page -->
    <meta name="description" content="Page meta tags go in the {{ meta }} tag">
    <meta name="keywords" content="put, keywords, here">
{{ !meta }}




{{ css }}
    <!-- link to your theme's css files -->
    <link href="{{ assets }}/css/styles.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
{{ !css }}




{{ content }}
    
    <!-- page content -->
    <div class="jumbotron">
        <h1><i class="fa fa-leaf text-success"></i> tinyTemplate</h1>
        <p>tinyTemplate is a <em>very</em> simple PHP template engine aimed at those who have little to no experience with PHP or PHP templates. In fact, you don't need to know a lick of PHP to use tinyTemplate; you only need to know HTML and how to copy/paste.</p>
        <p>tinyTemplate uses <code>.htaccess</code> and Apache's <code>mod_rewrite</code> to automatically load your pages into the template engine.</p>
    </div>
    
    <br><br>
    
    <h2>Basic Template Example</h2>
    <p>Below is a basic example of a tinyTemplate page template. To use: just open up an existing HTML file and drop in the tinyTemplate <code>sections</code> where you want your content to appear. Use as many or as few sections as you want; you can even create your own in <code>config.php</code>.</p>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        
        &lt;?php tiny('meta') ?&gt;
        
        &lt;title&gt;&lt;?php tiny('title') ?&gt;&lt;/title&gt;
        
        &lt;?php tiny('css') ?&gt;
        
        &lt;/head&gt;
    &lt;body&gt;
    
        &lt;?php tiny('content') ?&gt;
        
        &lt;?php tiny('scripts') ?&gt;
        
        &lt;?php tiny('jquery') ?&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
</pre>

    <br><br>

    <h2>Page Example</h2>
    <p>Here is an example of a basic tinyTemplate web page. This is pretty much what all of your site pages will look like; just enter your content between the appropriate tags and tinyTemplate does the rest - including stripping the <code>.php</code> extension from your files to craft pretty urls!</p>

<pre>
&lbrace;&lbrace; title &rbrace;&rbrace;
    My Page Title
&lbrace;&lbrace; !title &rbrace;&rbrace;


&lbrace;&lbrace; meta &rbrace;&rbrace;
    &lt;meta name=&quot;description&quot; content=&quot;Custom description for this page&quot;&gt;
    &lt;meta name=&quot;keywords&quot; content=&quot;custom, widget, keyword&quot;&gt;
&lbrace;&lbrace; !meta &rbrace;&rbrace;


&lbrace;&lbrace; css &rbrace;&rbrace;
    &lt;link href=&quot;/css/custom-styles-for-this-page.css&quot; rel=&quot;stylesheet&quot;&gt;
&lbrace;&lbrace; !css &rbrace;&rbrace;


&lbrace;&lbrace; content &rbrace;&rbrace;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;h1&gt;My Content&lt;/h1&gt;
            &lt;p&gt;My Page content goes here...&lt;/p&gt;
            &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;alertme&quot;&gt;Alert Me&lt;/a&gt;&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lbrace;&lbrace; !content &rbrace;&rbrace;


&lbrace;&lbrace; scripts &rbrace;&rbrace;
    &lt;script src=&quot;/js/custom-scripts-for-this-page.js&quot;&gt;&lt;/script&gt;
&lbrace;&lbrace; !scripts &rbrace;&rbrace;


&lbrace;&lbrace; jquery &rbrace;&rbrace;
    &lt;script&gt;
        $('.alertme').click(function() {
            alert('Hi');
        });
    &lt;/script&gt;
&lbrace;&lbrace; !jquery &rbrace;&rbrace;
</pre>

    <p>As you can see, tinyTemplate makes it easy to add custom meta tags, css files and javascripts to each page so you don't have to load up your base template with tons of scripts that you only use once or twice. Plus, all of your content is contained in each page file, so you don't have to hunt and peck your directories for page fragments.</p>
    
    <p class="small">created with <i class="fa fa-code"></i> by <a href="http://twitter.com/timgavin">tim gavin</a></p>
    
    <br><br>

{{ !content }}




{{ scripts }}
    <!-- link to your theme's script files -->
    <script src="{{ assets }}/js/scripts.js"></script>
{{ !scripts }}




{{ jquery }}
    <!-- add javascript -->
    <script>
        // uncomment the next line to add jQuery and javaScript to this page
        // alert('tinyTemplate!');
    </script>
{{ !jquery }}
