<?php
$elementsMenu = [
    'index.php' => 'Accueil (Le nom)',
    'salutation.php' => 'Une salutation',
    'titre.php' => 'Le titre',
    'paragraphe.php' => 'Le contenu',
    'lettre.php' => 'La lettre',
    'compil.php' => 'Tout ensemble',
];
$nav = '';
foreach($elementsMenu as $page => $element) {
    $courant = basename($_SERVER['PHP_SELF']);
    if ($courant === $page) {
        $nav .= '<li class="courant">';
    } else {
        $nav .= '<li>';
    }
    $nav .= '<a href="'.$page.'">';
    $nav .= $element;
    $nav .= '</a>';
    $nav .= '</li>';
}
?><header>Une lettre personnalisée</header>
<nav>
<ul><?php echo $nav; ?></ul>
</nav>
<footer>&copy; Cégep de Saint-Jérôme</footer>