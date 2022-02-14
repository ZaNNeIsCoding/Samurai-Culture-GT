<?php

add_filter('pre_get_posts','search_results_filter');
function remove_footer_admin(){
	echo 'Developed by <a href="http://www.YOUR-SITE.com" target="_blank">_+Andrei+_</a>';
}

?>