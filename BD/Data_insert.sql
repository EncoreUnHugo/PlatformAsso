INSERT INTO Role (nom) VALUES
('Administrateur'),
('Membre'),
('Modérateur');


INSERT INTO Membre (nom, prenom, email, mot_de_passe, id_role) VALUES
('Dupont', 'Jean', 'jean.dupont@email.com', 'password123', 1),  -- Administrateur
('Martin', 'Claire', 'claire.martin@email.com', 'password456', 2), -- Membre
('Lemoine', 'Paul', 'paul.lemoine@email.com', 'password789', 3);  -- Modérateur


INSERT INTO Evenement (titre, date, description) VALUES
('Conférence SQL', '2025-05-15', 'Une conférence sur les bases de données SQL et leur utilisation dans le développement web.'),
('Atelier React', '2025-06-10', 'Un atelier sur le développement d’applications avec React.'),
('Hackathon 2025', '2025-07-01', 'Un événement pour les développeurs de tous horizons pour créer des projets ensemble.');


INSERT INTO Projet (nom, description, statut) VALUES
('Application de Gestion', 'Une application permettant de gérer les projets et les tâches des équipes.', 'En cours'),
('Site E-commerce', 'Un site de vente en ligne pour les petites entreprises.', 'Terminé'),
('Plateforme de Chat', 'Une plateforme de messagerie instantanée pour équipes professionnelles.', 'En développement');


INSERT INTO Message (contenu, date_envoi) VALUES
('Message de bienvenue sur le forum', '2025-04-01'),
('Nouveau projet à commencer la semaine prochaine', '2025-04-02'),
('Réunion prévue demain à 15h', '2025-04-03');

INSERT INTO Participe (id_evenement, id_membre) VALUES
(1, 1),  -- Jean Dupont participe à la Conférence SQL
(1, 2),  -- Claire Martin participe à la Conférence SQL
(2, 2),  -- Claire Martin participe à l'Atelier React
(3, 3);  -- Paul Lemoine participe au Hackathon 2025

INSERT INTO Travaille_sur (id_membre, id_projet) VALUES
(1, 1),  -- Jean Dupont travaille sur l'Application de Gestion
(2, 2),  -- Claire Martin travaille sur le Site E-commerce
(3, 3);  -- Paul Lemoine travaille sur la Plateforme de Chat
