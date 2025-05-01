<!-- Navigation -->
<nav class="bg-white shadow-sm py-4 px-6 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <i class="fas fa-hands-helping text-indigo-600 text-2xl"></i>
            <span class="text-xl font-bold text-gray-800">AssociAction</span>
        </div>
        
        <div class="hidden md:flex space-x-8">
            <a href="index.php" class="nav-link text-gray-600 hover:text-indigo-600 transition-all">Accueil</a>
            <a href="index.php?controleur=controleurEvenement&action=lireObjets" class="nav-link text-gray-600 hover:text-indigo-600 transition-all">Événements</a>
            <a href="index.php?controleur=controleurProjet&action=lireObjets" class="nav-link text-gray-600 hover:text-indigo-600 transition-all">Projets</a>
            <a href="#" class="nav-link text-gray-600 hover:text-indigo-600 transition-all">Contact</a>
        </div>
        
        <div class="flex items-center space-x-4">
            <?php if (empty($_SESSION["mail"])): ?>
                <a href="index.php?controleur=controleurConnexion" class="hidden md:block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-all">
                    <i class="fas fa-user-plus mr-2"></i>S'inscrire
                </a>
                <a href="index.php?controleur=controleurConnexion" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-50 transition-all">
                    <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                </a>
            <?php else: ?>
                <a href="index.php?controleur=controleurMembre" class="hidden md:block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-all">
                    <i class="fas fa-user-plus mr-2"></i>Connecté
                </a>
            <?php endif; ?>
            <button id="mobile-menu-button" class="md:hidden text-gray-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu">
    <div class="p-6">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center space-x-2">
                <i class="fas fa-hands-helping text-indigo-600 text-2xl"></i>
                <span class="text-xl font-bold text-gray-800">AssociAction</span>
            </div>
            <button id="close-mobile-menu" class="text-gray-600">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <div class="flex flex-col space-y-6">
            <a href="index.php" class="text-gray-800 font-medium">Accueil</a>
            <a href="#" class="text-gray-800 font-medium">Associations</a>
            <a href="index.php?controleur=controleurEvenement&action=lireObjets" class="text-gray-800 font-medium">Événements</a>
            <a href="index.php?controleur=controleurProjet&action=lireObjets" class="text-gray-800 font-medium">Projets</a>
            <a href="#" class="text-gray-800 font-medium">Contact</a>
            
            <div class="pt-4 border-t border-gray-200 mt-4">
                <a href="#" class="block w-full text-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-all mb-3">
                    <i class="fas fa-user-plus mr-2"></i>S'inscrire
                </a>
                <a href="#" class="block w-full text-center px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-50 transition-all">
                    <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                </a>
            </div>
        </div>
    </div>
</div>

<div id="overlay" class="overlay"></div>

</header>

<body>