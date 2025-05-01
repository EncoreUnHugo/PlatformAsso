<?php

require_once("C:/xampp\htdocs\PlatformAsso\WEBSITE/modele/modele.php");

    class Evenement extends Modele{

        protected static $objet = "evenement";
        protected static $cle = "id_evenement";

        protected $id_evenement;
        protected $titre;
        protected $type;
        protected $lieu;
        protected $date;
        protected $description;

    

    public function afficherGenerique(){
        ?>
        <div class="bg-white rounded-lg shadow-sm overflow-hidden event-card transition-all card-hover">
                    <div class="h-40 md:h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Événement" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="px-2 py-1 md:px-3 md:py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full"><?php echo $this->type ?></span>
                            <div class="text-gray-500 text-xs md:text-sm flex items-center">
                                <i class="far fa-calendar-alt mr-1"></i> <?php echo $this->date ?> <?php echo $this->lieu ?>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-2"><?php echo $this->titre ?></h3>
                        <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base"><?php echo $this->description ?></p>
                        <div class="flex justify-between items-center">
                            <div class="flex -space-x-1 md:-space-x-2">
                                <img class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Participant">
                                <img class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Participant">
                                <img class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Participant">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium">+12</div>
                            </div>
                            <a href="index.php?controleur=controleurEvenement&action=lireUnObjet&id_evenement=<?php echo $this->id_evenement ?>" 
                                class="px-3 py-1 md:px-4 md:py-2 bg-indigo-600 text-white text-xs md:text-sm rounded-md hover:bg-indigo-700 transition-all">
                                Participer
                            </a>
                        </div>
                    </div>
                </div>
    <?php
    }

    public function afficher(){
        ?>
        <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <!-- Card Container -->
        <div class="event-gradient rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-300 hover:scale-[1.01]">
            <!-- Header with Image -->
            <div class="relative h-64 sm:h-80 w-full">
                <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                     alt="Image de l'événement" 
                     class="w-full h-full object-cover">
                
                <!-- Type Badge -->
                <div class="type-badge bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-bold animate-pulse-slow">
                    <i class="fas fa-music mr-2"></i> <?php echo $this->type ?>
                </div>
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end">
                    <div class="p-6 text-white">
                        <h1 class="text-3xl sm:text-4xl font-extrabold mb-2"><?php echo $this->titre ?></h1>
                        <p class="flex items-center text-lg">
                            <i class="fas fa-map-marker-alt mr-2"></i> 
                            <?php echo $this->lieu ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Content -->
            <div class="p-6 sm:p-8">
                <!-- Date Section -->
                <div class="flex items-center mb-6">
                    <div class="bg-indigo-100 p-3 rounded-lg mr-4 text-center">
                        <div class="text-indigo-800 font-bold text-xl"><?php echo date("d", strtotime($this->date)); ?></div>
                        <div class="text-indigo-600 font-medium text-sm"><?php echo date("F", strtotime($this->date)); ?></div>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-800"><?php echo date("d F Y", strtotime($this->date)); ?></h2>
                    </div>
                </div>
                
                <!-- Description Section -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-align-left mr-2 text-indigo-600"></i> Description
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    <?php echo $this->description ?>
                    </p>
                </div>
            
            </div>
        </div>
    
    </div>
    <?php
    }



}

?>