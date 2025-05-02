<?php if (empty($_SESSION["mail"])): ?>
    <a href="index.php?controleur=controleurConnexion" class="px-4 py-2 border border-green-600 text-green-600 rounded-md hover:bg-green-50 transition-all">
        <i class="fas fa-sign-in-alt mr-2"></i>Ajout d'un projet
    </a>
<?php else: ?>
    <a href="index.php?controleur=controleurAjoutProjet&action=afficherAjoutProjet" class="px-4 py-2 border border-green-600 text-green-600 rounded-md hover:bg-green-50 transition-all">
        <i class="fas fa-sign-in-alt mr-2"></i>Ajout d'un projet
    </a>
<?php endif; ?>