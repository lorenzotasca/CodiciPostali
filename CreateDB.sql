CREATE DATABASE IF NOT EXISTS cod_postali;
USE cod_postali;

CREATE TABLE IF NOT EXISTS cap_provincia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    provincia VARCHAR(255) NOT NULL,
    cap VARCHAR(10) NOT NULL
);

INSERT INTO cap_provincia (provincia, cap) VALUES
('Roma', '00100'),
('Milano', '20121'),
('Napoli', '80100'),
('Torino', '10100'),
('Palermo', '90100'),
('Bologna', '40121'),
('Firenze', '50121'),
('Genova', '16121'),
('Bari', '70121'),
('Catania', '95121'),
('Venezia', '30121'),
('Verona', '37121'),
('Trieste', '34121'),
('Cagliari', '09121'),
('Matera', '75100'),
('Lecce', '73100'),
('Perugia', '06121'),
('Potenza', '85100'),
('Ancona', '60121'),
('Campobasso', '86100'),
('Aosta', '11100'),
('Trento', '38121'),
('Bolzano', '39100'),
('Pescara', '65121'),
('Ravenna', '48121'),
('Sassari', '07100'),
('Foggia', '71121'),
('Reggio Calabria', '89121'),
('Messina', '98100'),
('Padova', '35121'),
('Terni', '05100'),
('Novara', '28100'),
('Udine', '33121'),
('Forlì', '47121'),
('Salerno', '84121'),
('Brescia', '25121'),
('Siracusa', '96100'),
('Taranto', '74121'),
('Modena', '41121'),
('Bergamo', '24121'),
('Livorno', '57121'),
('Piacenza', '29121'),
('Cesena', '47521'),
('Lucca', '55100'),
('Vicenza', '36100'),
('Cosenza', '87100'),
('La Spezia', '19121'),
('Monza', '20900'),
('Pisa', '56121'),
('Pesaro', '61121'),
('Como', '22100'),
('Varese', '21100'),
('Asti', '14100'),
('Arezzo', '52100'),
('Grosseto', '58100'),
('Cremona', '26100'),
('Brindisi', '72121'),
('Pistoia', '51100'),
('Caserta', '81100'),
('Potenza Picena', '62018'),
('Vasto', '66054'),
('San Benedetto del Tronto', '63074');