
				<!-- Menu -->
                <nav id="menu">
						<h2>Menu</h2>
						<ul>
<?php
$menu_items = array(
    $translations['home_nav'] => 'index.php',
    $translations['join_nav'] => 'join.php',
    $translations['about_nav'] => 'about.php',
    $translations['faq_nav'] => 'faq.php',
    $translations['portal_nav'] => 'moodle/?lang='.$lang,
);
foreach($menu_items as $item => $value) {
    if ((strpos($_SERVER['REQUEST_URI'], $value) !== FALSE) || ($item == 'ホーム' && $_SERVER['REQUEST_URI']== '/')) {
        echo '<li><a href="'.$value.'" class="active">'.ucfirst($item).'</a></li>';
    }
    else {
        echo '<li><a href="'.$value.'">'.ucfirst($item).'</a></li>';
    }
    
}

?>
						</ul>
					</nav>