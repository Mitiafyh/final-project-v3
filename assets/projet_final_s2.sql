create table PF_membre(
    id_membre int primary key auto_increment,
    nom varchar(50),
    date_de_naissance Date,
    genre varchar(10),
    email varchar(50),
    ville varchar(50),
    mdp varchar(50),
    image_profil varchar(50)

);

create table PF_categorie_objet(
    id_categorie int primary key auto_increment,
    nom_categorie varchar(50)
);

create table PF_objet(
    id_objet int primary key auto_increment,
    nom_objet varchar(50),
    id_categorie int,
    id_membre int
);

create table PF_images_objet(
    id_image int primary key auto_increment,
    id_objet int,
    nom_image varchar(50)
);

create table PF_emprunt(
    id_emprunt int primary key auto_increment,
    id_objet int,
    id_membre int,
    date_emprunt Date,
    date_retour Date
);


INSERT INTO PF_objet (nom_objet, id_categorie, id_membre) VALUES
('Sèche-cheveux', 1, 1),
('Miroir de poche', 1, 1),
('Tournevis', 2, 1),
('Perceuse', 2, 1),
('Clé à molette', 3, 1),
('Batteur électrique', 4, 1),
('Fer à lisser', 1, 1),
('Pinceau de maquillage', 1, 1),
('Four électrique', 4, 1),
( 'Casserole', 4, 1),

('Tournevis', 2, 2),
('Marteau', 2, 2),
('Grille-pain', 4, 2),
('Blender', 4, 2),
('Compresseur', 3, 2),
('Fer à repasser', 1, 2),
('Tondeuse', 3, 2),
('Étagère en kit', 2, 2),
('Brosse à cheveux', 1, 2),
('Râpe à légumes', 4, 2),

('Brosse à ongles', 1, 3),
('Trousse maquillage', 1, 3),
('Visseuse', 2, 3),
('Scie manuelle', 2, 3),
('Cric hydraulique', 3, 3),
('Multimètre', 3, 3),
('Robot pâtissier', 4, 3),
('Poêle anti-adhésive', 4, 3),
('Lime à ongles', 1, 3),
('Gant de cuisine', 4, 3),

('Crème visage', 1, 4),
('Coupe-ongles', 1, 4),
('Clé plate', 2, 4),
('Niveau à bulle', 2, 4),
('Manomètre', 3, 4),
('Testeur de batterie', 3, 4),
('Friteuse', 4, 4),
('Mixeur plongeant', 4, 4),
('Peigne', 1, 4),
('Plat en verre', 4, 4);
INSERT INTO PF_membre (nom, date_de_naissance, genre, email, ville, mdp, image_profil) VALUES
('Alice', '1998-03-12', 'F', 'alice@gmail.com', 'Tananarive', 'mdp123', 'alice.png'),
('Bob', '1995-07-22', 'M', 'bob@gmail.com', 'Fianarantsoa', 'azerty', 'bob.jpeg'),
('Clara', '2000-11-02', 'F', 'clara@gmail.com', 'Toamasina', '123456', 'clara.jpeg'),
('David', '1993-05-19', 'M', 'david@gmail.com', 'Majunga', 'passw0rd', 'david.png');
INSERT INTO PF_categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');
INSERT INTO PF_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(3, 2, '2025-07-10', '2025-07-15'),   
(6, 3, '2025-07-12', '2025-07-20'),   
(13, 4, '2025-07-13', '2025-07-18'),   
(17, 1, '2025-07-11', '2025-07-17'),  
(2, 3, '2025-07-09', '2025-07-14'),   
(9, 2, '2025-07-10', '2025-07-16'),  
(12, 1, '2025-07-08', '2025-07-13'), 
(14, 4, '2025-07-11', '2025-07-18'), 
(19, 3, '2025-07-12', '2025-07-19'),  
( 1, 4, '2025-07-07', '2025-07-12');  

INSERT INTO PF_images_objet (id_objet, nom_image) VALUES
(1, '5.jpeg'),
(2, '5.jpeg'),
(3, '5.jpeg'),
(4, '5.jpeg'),
(5, '5.jpeg'),
(6, '5.jpeg'),
(7, '5.jpeg'),
(8, '5.jpeg'),
(9, '5.jpeg'),
(10, '5.jpeg'),

(11, '5.jpeg'),
(12, '5.jpeg'),
(13, '5.jpeg'),
(14, '5.jpeg'),
(15, '5.jpeg'),
(16, '5.jpeg'),
(17, '5.jpeg'),
(18, '5.jpeg'),
(19, '5.jpeg'),
(20, '5.jpeg'),

(21, '5.jpeg'),
(22, '5.jpeg'),
(23, '5.jpeg'),
(24, '5.jpeg'),
(25, '5.jpeg'),
(26, '5.jpeg'),
(27, '5.jpeg'),
(28, '5.jpeg'),
(29, '5.jpeg'),
(30, '5.jpeg'),

(31, '5.jpeg'),
(32, '5.jpeg'),
(33, '5.jpeg'),
(34, '5.jpeg'),
(35, '5.jpeg'),
(36, '5.jpeg'),
(37, '5.jpeg'),
(38, '5.jpeg'),
(39, '5.jpeg'),
(40, '5.jpeg');



create or replace view v_objet_emprunt as
select o.nom_objet,e.date_emprunt,e.date_retour,o.id_objet from PF_objet as o 
join PF_emprunt as e where o.id_objet=e.id_objet;




create or replace view v_objet_categorie as
select o.nom_objet,c.nom_categorie,c.id_categorie from PF_objet as o 
join PF_categorie_objet as c where o.id_categorie=c.id_categorie;



create or replace view v_objet_emprunt_image as
select o.id_objet,o.nom_objet,m.id_membre,i.nom_image,m.nom,e.date_emprunt,e.date_retour from PF_objet as o 
join PF_images_objet as i on o.id_objet=i.id_objet
join PF_emprunt as e on i.id_objet=e.id_objet
join PF_membre as m on e.id_membre=m.id_membre;

