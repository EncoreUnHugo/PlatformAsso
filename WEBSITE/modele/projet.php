<?php

require_once("modele/modele.php");

    class Projet extends Modele{

        protected static $objet = "projet";
        protected static $cle = "id_projet";

        protected $id_projet;
        protected $nom;
        protected $description;
        protected $statut;


        public function afficherGenerique(){
            ?>
            <div class="bg-gray-50 rounded-xl p-4 md:p-6 project-card transition-all card-hover mx-10 my-10">
                    <div class="flex items-start mb-4 md:mb-6">
                        <div class="bg-green-100 p-2 md:p-3 rounded-lg mr-3 md:mr-4">
                            <i class="fas fa-recycle text-green-600 text-xl md:text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-1"><?php echo $this->nom ?></h3>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base"><?php echo $this->description ?></p>
                    <div class="mb-4 md:mb-6">
                        <div class="flex justify-between text-xs md:text-sm text-gray-500 mb-1">
                            <span>Statut : </span>
                            <span><?php echo $this->statut ?></span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex -space-x-1 md:-space-x-2">
                            <img class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Participant">
                            <img class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Participant">
                            <img class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Participant">
                            <div class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+5</div>
                        </div>
                        <a href="index.php?controleur=controleurProjet&action=lireUnObjet&id_projet=<?php echo $this->id_projet ?>"
                        class="px-3 py-1 md:px-4 md:py-2 bg-green-600 text-white text-xs md:text-sm rounded-md hover:bg-green-700 transition-all">
                            Contribuer
                        </a>
                    </div>
                </div>
            <?php
        }

        public function afficher(){
            ?>
        <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <!-- Carte du projet -->
        <div class="project-card rounded-2xl overflow-hidden border border-gray-100">
            <!-- En-tête -->
            <div class="px-6 py-5 border-b border-gray-100">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-gray-800"><?php echo $this->nom ?></h1>
                    <div class="status-badge bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium animate-float">
                        <i class="fas fa-circle-notch mr-1"></i> <?php echo $this->statut ?>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-1">
                    <i class="far fa-calendar-alt mr-1"></i>
                    Créé le 15/03/2023 • Dernière mise à jour: 22/05/2023
                </p>
            </div>

            <!-- Contenu -->
            <div class="px-6 py-5">
                <!-- Section description -->
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3">
                        <i class="fas fa-align-left text-indigo-500 mr-2"></i>Description
                    </h2>
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <p class="text-gray-700 leading-relaxed">
                        <?php echo $this->description ?>
                        </p>
                    </div>
                </div>

                <!-- Section avancement -->
                <div class="mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-lg font-semibold text-gray-700">
                            <i class="fas fa-tasks text-indigo-500 mr-2"></i>Avancement
                        </h2>
                        <span class="text-sm font-medium text-indigo-600">75% complété</span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" style="width: 75%"></div>
                    </div>
                </div>

                <!-- Détails de l'avancement -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 text-center">
                        <div class="text-indigo-600 font-bold text-2xl mb-1">18</div>
                        <div class="text-sm text-gray-600">Tâches terminées</div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 text-center">
                        <div class="text-indigo-600 font-bold text-2xl mb-1">6</div>
                        <div class="text-sm text-gray-600">En cours</div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg border border-gray-200 text-center">
                        <div class="text-indigo-600 font-bold text-2xl mb-1">4</div>
                        <div class="text-sm text-gray-600">Non commencées</div>
                    </div>
                </div>
            </div>

            <!-- Pied de carte -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-100">
                <div class="flex justify-between items-center">
                    <div class="flex space-x-2">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-user-friends mr-1"></i>
                            <span>Équipe: 3 membres</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-tag mr-1"></i>
                            <span>Développement</span>
                        </div>
                    </div>
                    <div>
                        <button class="text-indigo-600 hover:text-indigo-800 text-sm font-medium transition duration-300">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section membres -->
        <div class="mt-6 bg-white rounded-2xl border border-gray-100 p-6 project-card">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">
                <i class="fas fa-users text-indigo-500 mr-2"></i>Créateur du projet
            </h2>
            <div class="flex flex-wrap gap-4">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                        JD
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">Jean Dupont</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php        
    }

    public static function ajoutProjet($n,$de,$s){

        $requete = "INSERT INTO Projet (nom,description,statut) VALUES (:tag_n,:tag_de,:tag_s)";

        $req_prep = Connexion::pdo()->prepare($requete);

        $valP = array(
            ":tag_n" => $n,
            ":tag_de" => $de,
            ":tag_s" => $s,
        );  

    try {
        $req_prep -> execute($valP);
        return true;
    } catch(PDOException $e) {
        return false;
    }
    }
}

?>