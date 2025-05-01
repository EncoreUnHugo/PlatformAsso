<?php if (empty($_SESSION["mail"])): ?>
    <a href="index.php?controleur=controleurConnexion" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-50 transition-all">
        <i class="fas fa-sign-in-alt mr-2"></i>Ajout d'un événement
    </a>
<?php else: ?>
    <a href="index.php?controleur=controleurAjoutEvenement&action=afficherAjoutEvenement" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-50 transition-all">
        <i class="fas fa-sign-in-alt mr-2"></i>Ajout d'un événement
    </a>
<?php endif; ?>