<!-- Header -->
<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
                                <img src="images/logo.png" alt="@School Logo" width="60" height="60"> <span class="title">@Schoolへようこそ</span>
								</a>

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