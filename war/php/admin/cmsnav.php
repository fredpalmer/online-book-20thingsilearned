<?php 

	$printLocale = $_GET['locale'] ? ' &rarr; <a class="breadcrumb" href="/cmseditlocale?locale=' . $_GET['locale'] . '">' . $_GET['locale'] . '</a>' : '';
	$printArticle = $_GET['article'] ? ' &rarr; <a class="breadcrumb" href="/cmseditarticle?locale=' . $_GET['locale'] . '&article=' . $_GET['article'] .'">' . $_GET['article'] . '</a>' : '';
	$printPage = $_GET['pagenumber'] ? ' &rarr; <a class="breadcrumb" href="/cmseditpage?locale=' . $_GET['locale'] . '&article=' . $_GET['article'] . '&pagenumber=' . $_GET['pagenumber'] .'">' . $_GET['pagenumber'] . '</a>' : '';
?>

<p id="nav">
	<a class="home" href="/cmshome">20 Things CMS</a> &rarr;
	<a class="breadcrumb" href="/cmshome">locales</a><?php echo $printLocale; ?><?php echo $printArticle; ?><?php echo $printPage; ?>
	<a id="logout" href="/login?logout=true">Log Out</a>
</p>
