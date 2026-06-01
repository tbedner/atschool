<!-- Header -->
<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
                                <img src="images/logo.png" alt="@School Logo" width="60" height="60"> <span class="title"><?php echo $translations['title']; ?></span>
								</a>
<form name="langSelect" action="" method="get">
	<div class="form-group col-md-4 float-right lang">
     <select class="form-control form-control-sm" name="lang" id="lang" onchange='this.form.submit()'>
         <option>Select Language</option>
		<option value="en" <?=$lang == 'en' ? ' selected="selected"' : '';?>>English</option>
		<option value="ja" <?=$lang == 'ja' ? ' selected="selected"' : '';?>>日本語</option>
		<option value="ko" <?=$lang == 'ko' ? ' selected="selected"' : '';?>>한국어</option>
		<option value="es" <?=$lang == 'es' ? ' selected="selected"' : '';?>>Español</option>
		<option value="fr" <?=$lang == 'fr' ? ' selected="selected"' : '';?>>Français</option>
		<option value="de" <?=$lang == 'de' ? ' selected="selected"' : '';?>>Deutsch</option>
		<option value="pt" <?=$lang == 'pt' ? ' selected="selected"' : '';?>>Português</option>
		<option value="bg" <?=$lang == 'bg' ? ' selected="selected"' : '';?>>Български</option>
		<option value="ru" <?=$lang == 'ru' ? ' selected="selected"' : '';?>>Русский</option>
		<option value="ar" <?=$lang == 'ar' ? ' selected="selected"' : '';?>>العربية</option>
		<option value="hi" <?=$lang == 'hi' ? ' selected="selected"' : '';?>>हिन्दी</option>
		<option value="zh_cn" <?=$lang == 'zh_cn' ? ' selected="selected"' : '';?>>简体中文 (Simplified Chinese)</option>
		<option value="zh_tw" <?=$lang == 'zh_tw' ? ' selected="selected"' : '';?>>繁體中文 (Traditional Chinese)</option>
     </select>
	<noscript><button type="submit" class="btn btn-sm float-right" id="langbutton">Submit</button></noscript>
	</div>
</form>
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
<?php
$mail = "";
if(isset($_GET['mail'])) {
	$mail = filter_var($_GET['mail'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
if($mail == "sent") {
	$message = '<div class="container"><div class="row justify-content-md-center">
    <div class="col col-lg-12"><div class="alert alert-success" role="alert">送信に成功しました。できるだけ早くご連絡いたします。ありがとうございます。</div></div></div></div>';
	echo $message;
}
?>