{{ css }}
    <link href="{{ assets }}/css/about.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
{{ !css }}



{{ content }}
    
    <h1>tinyTemplate</h1>
    <p>tinyTemplate is nothing more than a few PHP functions and an <code>.htaccess</code> file. It's not meant to be a big class that has a ton of bells and whistles and which you have to instantiate, it's just meant to be simple to use... and tiny.</p>
    <p>Everything associated with each page/view is contained in its own file, so you can link to <span class="custom">custom style sheets</span>, include descriptive META tags, link to external javascript files and include <a class="js">javascript</a>.</p>
    
    <h2>PHP</h2>
    
    <?php echo 'What good is a PHP template system without being able to use PHP? Echo text, ' ?>
    
    <?php include 'assets/includes/include_me.php' ?>
    
    perform loops...<br>
    
    <?php
        $fruits = ['apples','pears','bananas'];
        echo '<ul>';
        foreach($fruits as $fruit) {
            echo '<li>' . $fruit . '</li>';
        }
        echo '</ul>';
    ?>
    
    <p>...and pretty much anything else you can do with PHP you can do with tinyTemplate.</p>
    
    <h2>Switch Themes</h2>
    
    <p>tinyTemplate started off as a way to help a designer friend of mine; she is not technical at all, yet needed an easy way to work with multiple websites and themes - but didn't want something like Wordpress; she likes HTML. The idea was to be able to purchase a theme on, say, Theme Forest, and just drop it into a folder, and then use it at will. So that's what tinyTemplate does; just put your theme folder inside <code>/assets/themes</code>, add the <code>tiny()</code> functions to the theme's template and then enter the name of your theme's folder in <code>config.php</code></p>
    
    change this...<br>
    <code> define('THEME', 'flatly');</code><br>
    
    <br>to this...<br>
    <code> define('THEME', 'my-new-theme');</code>
    
    <br><br>
    <p><strong>That's it!</strong> :)</p>
    
    <br><br>
    <p class="small">created with <i class="fa fa-code"></i> by <a href="http://twitter.com/timgavin">tim gavin</a></p>

{{ !content }}



{{ jquery }}

<script>
    $('.js').click(function() {
        alert('Hi! :)');
    });
</script>

{{ !jquery }}
