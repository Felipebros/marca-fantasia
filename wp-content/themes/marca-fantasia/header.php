<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css"> <!-- aqui fica a folha de estilo padrão -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css"> <!-- bootsrap linkado aqui -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!-- roboto fonte -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.1.1.min.js"></script><!--  jquery + bootstrap.js  -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/controller.js"></script> <!-- javascript personalizado nosso -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>

	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/icon-mf.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/img/icon-mf.png" type="image/x-icon"/>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<aside class="menu-principal">
			<figure class="logo">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Logo do marca de Fantasia">
			</figure>

			<nav>
				<ul class="navbar">
					<li class="navbar-item">Início</li>
						<ul class="subnav esconder-total">
							<li class="subnav-item">Lançamentos</li>
							<li class="subnav-item">Promoções</li>
							<li class="subnav-item">Outros 01</li>
							<li class="subnav-item">Outros 02</li>
						</ul>
					<li class="navbar-item">Editorial</li>
					<li class="navbar-item">Álbuns</li>
					<li class="navbar-item">Livros</li>
					<li class="navbar-item">Revistas</li>
					<li class="navbar-item">Camaradas</li>
				</ul>
			</nav>

			[contador]
		</aside>
		<ul class="secondmenu esconder">
			<h3>Promoções</h3>
			<li class="secondmenu-item">Maria</li>
			<li class="secondmenu-item">Mõnica</li>
			<li class="secondmenu-item">Flor</li>
		</ul>
	</header> <!-- final do menu -->
