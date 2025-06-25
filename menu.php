
				<!-- Menu -->
                <nav id="menu">
						<h2>Menu</h2>
						<ul>
<?php
$menu_items = array(
    'ホーム' => 'index.php',
    '参加する' => 'join.php',
    '当サイトについて' => 'about.php',
    'よくある質問' => 'faq.php',
    '@School ポータル ログイン' => 'moodle/',
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