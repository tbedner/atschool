
				<!-- Menu -->
                <nav id="menu">
						<h2>Menu</h2>
						<ul>
<?php
$menu_items = array(
    'home' => 'index.php',
    'join' => 'join.php',
    'about' => 'about.php',
    'FAQs' => 'faq.php',
    'at School Portal Log In' => 'moodle/',
);
foreach($menu_items as $item => $value) {
    if ((strpos($_SERVER['REQUEST_URI'], $value) !== FALSE) || ($item == 'home' && $_SERVER['REQUEST_URI']== '/')) {
        echo '<li><a href="'.$value.'" class="active">'.ucfirst($item).'</a></li>';
    }
    else {
        echo '<li><a href="'.$value.'">'.ucfirst($item).'</a></li>';
    }
    
}

?>
						</ul>
					</nav>