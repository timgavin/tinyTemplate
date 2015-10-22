<?php





/**
 * defineContent function.
 * 
 * @return string
 */
function defineTinySection($tag, $content) {
    
    $offset  = strlen($tag) + 6;
    
    $content = str_replace('{{'.$tag, '{{ '.$tag, $content);
    $content = str_replace($tag.'}}', $tag.' }}', $content);
    
    // remove all additional spaces + formatting (mock minify)
    //$content = preg_replace('/\s+/', ' ', $content);
    
    // {{ assets }} = our theme's assets folder
    $content = str_replace('{{ assets }}', 'assets/themes/'.THEME.'/assets', $content);
    
    $return  = substr($content, strpos($content, '{{ '.$tag.' }}') + $offset);
    $return  = substr($return, 0, strpos($return, '{{ !'.$tag.' }}'));
    
    
    return $return;
}





/**
 * getBuffer function.
 *
 * @return string
 */
function getTinyBuffer() {
        
    if(getTinyString('page')) {
        $file = getTinyString('page').'.php';
    } else {
        $file = 'home.php';
    }

    ob_start();
    include($file);
    $contents = ob_get_contents();
    ob_end_clean();
    
    return $contents;
}




function tiny($section) {

    global $tiny;

    echo $tiny[$section];

}





/**
 * getString function.
 * 
 * @return string
 */
function getTinyString($parameter) {
	if(isset($_GET[$parameter])) {
		return filter_input(INPUT_GET,$parameter,FILTER_SANITIZE_STRING);
	} else {
		return false;
	}
}