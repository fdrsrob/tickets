<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => "Leticia",
                'state_id' => 1
            ],
            [
                'name' => "El Encanto",
                'state_id' => 1
            ],
            [
                'name' => "La Chorrera",
                'state_id' => 1
            ],
            [
                'name' => "La Pedrera",
                'state_id' => 1
            ],
            [
                'name' => "La Victoria",
                'state_id' => 1
            ],
            [
                'name' => "Mirití-Paraná",
                'state_id' => 1
            ],
            [
                'name' => "Puerto Alegría",
                'state_id' => 1
            ],
            [
                'name' => "Puerto Arica",
                'state_id' => 1
            ],
            [
                'name' => "Puerto Nariño",
                'state_id' => 1
            ],
            [
                'name' => "Puerto Santander",
                'state_id' => 1
            ],
            [
                'name' => "Tarapacá",
                'state_id' => 1
            ],
            [
                'name' => "Medellín",
                'state_id' => 2
            ],
            [
                'name' => "Abejorral",
                'state_id' => 1
            ],
            [
                'name' => "Abriaquí",
                'state_id' => 2
            ],
            [
                'name' => "Alejandría",
                'state_id' => 2
            ],
            [
                'name' => "Amagá",
                'state_id' => 2
            ],
            [
                'name' => "Amalfi",
                'state_id' => 2
            ],
            [
                'name' => "Andes",
                'state_id' => 2
            ],
            [
                'name' => "Angelópolis",
                'state_id' => 2
            ],
            [
                'name' => "Angostura",
                'state_id' => 2
            ],
            [
                'name' => "Anorí",
                'state_id' => 2
            ],
            [
                'name' => "Anza",
                'state_id' => 2
            ],
            [
                'name' => "Apartadó",
                'state_id' => 2
            ],
            [
                'name' => "Arboletes",
                'state_id' => 2
            ],
            [
                'name' => "Argelia",
                'state_id' => 2
            ],
            [
                'name' => "Armenia",
                'state_id' => 2
            ],
            [
                'name' => "Barbosa",
                'state_id' => 2
            ],
            [
                'name' => "Bello",
                'state_id' => 2
            ],
            [
                'name' => "Belmira",
                'state_id' => 2
            ],
            [
                'name' => "Betania",
                'state_id' => 2
            ],
            [
                'name' => "Betulia",
                'state_id' => 2
            ],
            [
                'name' => "Briceño",
                'state_id' => 2
            ],
            [
                'name' => "Buriticá",
                'state_id' => 2
            ],
            [
                'name' => "Cáceres",
                'state_id' => 2
            ],
            [
                'name' => "Caicedo",
                'state_id' => 2
            ],
            [
                'name' => "Caldas",
                'state_id' => 2
            ],
            [
                'name' => "Campamento",
                'state_id' => 2
            ],
            [
                'name' => "Cañasgordas",
                'state_id' => 2
            ],
            [
                'name' => "Caracolí",
                'state_id' => 2
            ],
            [
                'name' => "Caramanta",
                'state_id' => 2
            ],
            [
                'name' => "Carepa",
                'state_id' => 2
            ],
            [
                'name' => "Carolina",
                'state_id' => 2
            ],
            [
                'name' => "Caucasia",
                'state_id' => 2
            ],
            [
                'name' => "Chigorodó",
                'state_id' => 2
            ],
            [
                'name' => "Cisneros",
                'state_id' => 2
            ],
            [
                'name' => "Ciudad Bolívar",
                'state_id' => 2
            ],
            [
                'name' => "Cocorná",
                'state_id' => 2
            ],
            [
                'name' => "Concepción",
                'state_id' => 2
            ],
            [
                'name' => "Concordia",
                'state_id' => 2
            ],
            [
                'name' => "Copacabana",
                'state_id' => 2
            ],
            [
                'name' => "Dabeiba",
                'state_id' => 2
            ],
            [
                'name' => "Don Matías",
                'state_id' => 2
            ],
            [
                'name' => "Ebéjico",
                'state_id' => 2
            ],
            [
                'name' => "El Bagre",
                'state_id' => 2
            ],
            [
                'name' => "El Carmen de Viboral",
                'state_id' => 2
            ],
            [
                'name' => "El Santuario",
                'state_id' => 2
            ],
            [
                'name' => "Entrerríos",
                'state_id' => 2
            ],
            [
                'name' => "Fredonia",
                'state_id' => 2
            ],
            [
                'name' => "Frontino",
                'state_id' => 2
            ],
            [
                'name' => "Giraldo",
                'state_id' => 2
            ],
            [
                'name' => "Girardota",
                'state_id' => 2
            ],
            [
                'name' => "Gómez Plata",
                'state_id' => 2
            ],
            [
                'name' => "Granada",
                'state_id' => 2
            ],
            [
                'name' => "Guadalupe",
                'state_id' => 2
            ],
            [
                'name' => "Guarne",
                'state_id' => 2
            ],
            [
                'name' => "Guatapé",
                'state_id' => 2
            ],
            [
                'name' => "Heliconia",
                'state_id' => 2
            ],
            [
                'name' => "Hispania",
                'state_id' => 2
            ],
            [
                'name' => "Itagüí",
                'state_id' => 2
            ],
            [
                'name' => "Ituango",
                'state_id' => 2
            ],
            [
                'name' => "Jardín",
                'state_id' => 2
            ],
            [
                'name' => "Jericó",
                'state_id' => 2
            ],
            [
                'name' => "La Ceja",
                'state_id' => 2
            ],
            [
                'name' => "La Estrella",
                'state_id' => 2
            ],
            [
                'name' => "La Pintada",
                'state_id' => 2
            ],
            [
                'name' => "La Unión",
                'state_id' => 2
            ],
            [
                'name' => "Liborina",
                'state_id' => 2
            ],
            [
                'name' => "Maceo",
                'state_id' => 2
            ],
            [
                'name' => "Marinilla",
                'state_id' => 2
            ],
            [
                'name' => "Montebello",
                'state_id' => 2
            ],
            [
                'name' => "Murindó",
                'state_id' => 2
            ],
            [
                'name' => "Mutatá",
                'state_id' => 2
            ],
            [
                'name' => "Nariño",
                'state_id' => 2
            ],
            [
                'name' => "Nechí",
                'state_id' => 2
            ],
            [
                'name' => "Necoclí",
                'state_id' => 2
            ],
            [
                'name' => "Olaya",
                'state_id' => 2
            ],
            [
                'name' => "Peñol",
                'state_id' => 2
            ],
            [
                'name' => "Peque",
                'state_id' => 2
            ],
            [
                'name' => "Pueblorrico",
                'state_id' => 2
            ],
            [
                'name' => "Puerto Berrío",
                'state_id' => 2
            ],
            [
                'name' => "Puerto Nare",
                'state_id' => 2
            ],
            [
                'name' => "Puerto Triunfo",
                'state_id' => 2
            ],
            [
                'name' => "Remedios",
                'state_id' => 2
            ],
            [
                'name' => "Retiro",
                'state_id' => 2
            ],
            [
                'name' => "Rionegro",
                'state_id' => 2
            ],
            [
                'name' => "Sabanalarga",
                'state_id' => 2
            ],
            [
                'name' => "Sabaneta",
                'state_id' => 2
            ],
            [
                'name' => "Salgar",
                'state_id' => 2
            ],
            [
                'name' => "San Andrés de Cuerquia",
                'state_id' => 2
            ],
            [
                'name' => "San Carlos",
                'state_id' => 2
            ],
            [
                'name' => "San Francisco",
                'state_id' => 2
            ],
            [
                'name' => "San Jerónimo",
                'state_id' => 2
            ],
            [
                'name' => "San José de la Montaña",
                'state_id' => 2
            ],
            [
                'name' => "San Juan de Urabá",
                'state_id' => 2
            ],
            [
                'name' => "San Luis",
                'state_id' => 2
            ],
            [
                'name' => "San Pedro de los Milagros",
                'state_id' => 2
            ],
            [
                'name' => "San Pedro de Urabá",
                'state_id' => 2
            ],
            [
                'name' => "San Rafael",
                'state_id' => 2
            ],
            [
                'name' => "San Roque",
                'state_id' => 2
            ],
            [
                'name' => "San Vicente",
                'state_id' => 2
            ],
            [
                'name' => "Santa Bárbara",
                'state_id' => 2
            ],
            [
                'name' => "Santa Fe de Antioquia",
                'state_id' => 2
            ],
            [
                'name' => "Santa Rosa de Osos",
                'state_id' => 2
            ],
            [
                'name' => "Santo Domingo",
                'state_id' => 2
            ],
            [
                'name' => "Segovia",
                'state_id' => 2
            ],
            [
                'name' => "Sonsón",
                'state_id' => 2
            ],
            [
                'name' => "Sopetrán",
                'state_id' => 2
            ],
            [
                'name' => "Támesis",
                'state_id' => 2
            ],
            [
                'name' => "Tarazá",
                'state_id' => 2
            ],
            [
                'name' => "Tarso",
                'state_id' => 2
            ],
            [
                'name' => "Titiribí",
                'state_id' => 2
            ],
            [
                'name' => "Toledo",
                'state_id' => 2
            ],
            [
                'name' => "Turbo",
                'state_id' => 2
            ],
            [
                'name' => "Uramita",
                'state_id' => 2
            ],
            [
                'name' => "Urrao",
                'state_id' => 2
            ],
            [
                'name' => "Valdivia",
                'state_id' => 2
            ],
            [
                'name' => "Valparaíso",
                'state_id' => 2
            ],
            [
                'name' => "Vegachí",
                'state_id' => 2
            ],
            [
                'name' => "Venecia",
                'state_id' => 2
            ],
            [
                'name' => "Vigía del Fuerte",
                'state_id' => 2
            ],
            [
                'name' => "Yalí",
                'state_id' => 2
            ],
            [
                'name' => "Yarumal",
                'state_id' => 2
            ],
            [
                'name' => "Yolombó",
                'state_id' => 2
            ],
            [
                'name' => "Yondó",
                'state_id' => 2
            ],
            [
                'name' => "Zaragoza",
                'state_id' => 2
            ],
            [
                'name' => "Arauca",
                'state_id' => 3
            ],
            [
                'name' => "Arauquita",
                'state_id' => 3
            ],
            [
                'name' => "Cravo Norte",
                'state_id' => 3
            ],
            [
                'name' => "Fortul",
                'state_id' => 3
            ],
            [
                'name' => "Puerto Rondón",
                'state_id' => 3
            ],
            [
                'name' => "Saravena",
                'state_id' => 3
            ],
            [
                'name' => "Tame",
                'state_id' => 3
            ],
            [
                'name' => "Barranquilla",
                'state_id' => 4
            ],
            [
                'name' => "Baranoa",
                'state_id' => 4
            ],
            [
                'name' => "Campo de La Cruz",
                'state_id' => 4
            ],
            [
                'name' => "Candelaria",
                'state_id' => 4
            ],
            [
                'name' => "Galapa",
                'state_id' => 4
            ],
            [
                'name' => "Juan de Acosta",
                'state_id' => 4
            ],
            [
                'name' => "Luruaco",
                'state_id' => 4
            ],
            [
                'name' => "Malambo",
                'state_id' => 4
            ],
            [
                'name' => "Manatí",
                'state_id' => 4
            ],
            [
                'name' => "Palmar de Varela",
                'state_id' => 4
            ],
            [
                'name' => "Piojó",
                'state_id' => 4
            ],
            [
                'name' => "Polonuevo",
                'state_id' => 4
            ],
            [
                'name' => "Ponedera",
                'state_id' => 4
            ],
            [
                'name' => "Puerto Colombia",
                'state_id' => 4
            ],
            [
                'name' => "Repelón",
                'state_id' => 4
            ],
            [
                'name' => "Sabanagrande",
                'state_id' => 4
            ],
            [
                'name' => "Sabanalarga",
                'state_id' => 4
            ],
            [
                'name' => "Santa Lucía",
                'state_id' => 4
            ],
            [
                'name' => "Santo Tomás",
                'state_id' => 4
            ],
            [
                'name' => "Soledad",
                'state_id' => 4
            ],
            [
                'name' => "Suán",
                'state_id' => 4
            ],
            [
                'name' => "Tubará",
                'state_id' => 4
            ],
            [
                'name' => "Usiacurí",
                'state_id' => 4
            ],
            [
                'name' => "Usaquén",
                'state_id' => 5
            ],
            [
                'name' => "Chapinero",
                'state_id' => 5
            ],
            [
                'name' => "Bogotá",
                'state_id' => 5
            ],
            [
                'name' => "San Cristóbal",
                'state_id' => 5
            ],
            [
                'name' => "Usme",
                'state_id' => 5
            ],
            [
                'name' => "Tunjuelito",
                'state_id' => 5
            ],
            [
                'name' => "Bosa",
                'state_id' => 5
            ],
            [
                'name' => "Kennedy",
                'state_id' => 5
            ],
            [
                'name' => "Fontibón",
                'state_id' => 5
            ],
            [
                'name' => "Engativá",
                'state_id' => 5
            ],
            [
                'name' => "Suba",
                'state_id' => 5
            ],
            [
                'name' => "Barrios Unidos",
                'state_id' => 5
            ],
            [
                'name' => "Teusaquillo",
                'state_id' => 5
            ],
            [
                'name' => "Los Mártires",
                'state_id' => 5
            ],
            [
                'name' => "Antonio Nariño",
                'state_id' => 5
            ],
            [
                'name' => "Puente Aranda",
                'state_id' => 5
            ],
            [
                'name' => "La Candelaria",
                'state_id' => 5
            ],
            [
                'name' => "Rafael Uribe Uribe",
                'state_id' => 5
            ],
            [
                'name' => "Ciudad Bolívar",
                'state_id' => 5
            ],
            [
                'name' => "Sumapaz",
                'state_id' => 5
            ],
            [
                'name' => "Cartagena",
                'state_id' => 6
            ],
            [
                'name' => "Achí",
                'state_id' => 6
            ],
            [
                'name' => "Altos del Rosario",
                'state_id' => 6
            ],
            [
                'name' => "Arenal del Sur",
                'state_id' => 6
            ],
            [
                'name' => "Arjona",
                'state_id' => 6
            ],
            [
                'name' => "Arroyohondo",
                'state_id' => 6
            ],
            [
                'name' => "Barranco de Loba",
                'state_id' => 6
            ],
            [
                'name' => "Calamar",
                'state_id' => 6
            ],
            [
                'name' => "Cantagallo",
                'state_id' => 6
            ],
            [
                'name' => "Carmen de Bolivar",
                'state_id' => 6
            ],
            [
                'name' => "Cicuco",
                'state_id' => 6
            ],
            [
                'name' => "Clemencia",
                'state_id' => 6
            ],
            [
                'name' => "Córdoba",
                'state_id' => 6
            ],
            [
                'name' => "El Guamo",
                'state_id' => 6
            ],
            [
                'name' => "El Peñón",
                'state_id' => 6
            ],
            [
                'name' => "Hatillo de Loba",
                'state_id' => 6
            ],
            [
                'name' => "Magangué",
                'state_id' => 6
            ],
            [
                'name' => "Mahates",
                'state_id' => 6
            ],
            [
                'name' => "Margarita",
                'state_id' => 6
            ],
            [
                'name' => "María La Baja",
                'state_id' => 6
            ],
            [
                'name' => "Montecristo",
                'state_id' => 6
            ],
            [
                'name' => "Morales",
                'state_id' => 6
            ],
            [
                'name' => "Pinillos",
                'state_id' => 6
            ],
            [
                'name' => "Regidor",
                'state_id' => 6
            ],
            [
                'name' => "Río Viejo",
                'state_id' => 6
            ],
            [
                'name' => "San Cristóbal",
                'state_id' => 6
            ],
            [
                'name' => "San Estanislao",
                'state_id' => 6
            ],
            [
                'name' => "San Fernando",
                'state_id' => 6
            ],
            [
                'name' => "San Jacinto del Cauca",
                'state_id' => 6
            ],
            [
                'name' => "San Jacinto",
                'state_id' => 6
            ],
            [
                'name' => "San Juan Nepomuceno",
                'state_id' => 6
            ],
            [
                'name' => "San Martín de Loba",
                'state_id' => 6
            ],
            [
                'name' => "San Pablo",
                'state_id' => 6
            ],
            [
                'name' => "Santa Catalina",
                'state_id' => 6
            ],
            [
                'name' => "Santa Cruz de Mompox",
                'state_id' => 6
            ],
            [
                'name' => "Santa Rosa del Sur",
                'state_id' => 6
            ],
            [
                'name' => "Santa Rosa",
                'state_id' => 6
            ],
            [
                'name' => "Simití",
                'state_id' => 6
            ],
            [
                'name' => "Soplaviento",
                'state_id' => 6
            ],
            [
                'name' => "Talaigua Nuevo",
                'state_id' => 6
            ],
            [
                'name' => "Tiquisio",
                'state_id' => 6
            ],
            [
                'name' => "Turbaco",
                'state_id' => 6
            ],
            [
                'name' => "Turbaná",
                'state_id' => 6
            ],
            [
                'name' => "Villanueva",
                'state_id' => 6
            ],
            [
                'name' => "Zambrano",
                'state_id' => 6
            ],
            [
                'name' => "Tunja",
                'state_id' => 7
            ],
            [
                'name' => "Almeida",
                'state_id' => 7
            ],
            [
                'name' => "Aquitania",
                'state_id' => 7
            ],
            [
                'name' => "Arcabuco",
                'state_id' => 7
            ],
            [
                'name' => "Belén",
                'state_id' => 7
            ],
            [
                'name' => "Berbeo",
                'state_id' => 7
            ],
            [
                'name' => "Betéitiva",
                'state_id' => 7
            ],
            [
                'name' => "Boavita",
                'state_id' => 7
            ],
            [
                'name' => "Boyacá",
                'state_id' => 7
            ],
            [
                'name' => "Briceño",
                'state_id' => 7
            ],
            [
                'name' => "Buenavista",
                'state_id' => 7
            ],
            [
                'name' => "Busbanzá",
                'state_id' => 7
            ],
            [
                'name' => "Caldas",
                'state_id' => 7
            ],
            [
                'name' => "Campohermoso",
                'state_id' => 7
            ],
            [
                'name' => "Cerinza",
                'state_id' => 7
            ],
            [
                'name' => "Chinavita",
                'state_id' => 7
            ],
            [
                'name' => "Chiquinquirá",
                'state_id' => 7
            ],
            [
                'name' => "Chíquiza",
                'state_id' => 7
            ],
            [
                'name' => "Chiscas",
                'state_id' => 7
            ],
            [
                'name' => "Chita",
                'state_id' => 7
            ],
            [
                'name' => "Chitaraque",
                'state_id' => 7
            ],
            [
                'name' => "Chivatá",
                'state_id' => 7
            ],
            [
                'name' => "Chivor",
                'state_id' => 7
            ],
            [
                'name' => "Ciénega",
                'state_id' => 7
            ],
            [
                'name' => "Cómbita",
                'state_id' => 7
            ],
            [
                'name' => "Coper",
                'state_id' => 7
            ],
            [
                'name' => "Corrales",
                'state_id' => 7
            ],
            [
                'name' => "Covarachía",
                'state_id' => 7
            ],
            [
                'name' => "Cubará",
                'state_id' => 7
            ],
            [
                'name' => "Cucaita",
                'state_id' => 7
            ],
            [
                'name' => "Cuítiva",
                'state_id' => 7
            ],
            [
                'name' => "Duitama",
                'state_id' => 7
            ],
            [
                'name' => "El Cocuy",
                'state_id' => 7
            ],
            [
                'name' => "El Espino",
                'state_id' => 7
            ],
            [
                'name' => "Firavitoba",
                'state_id' => 7
            ],
            [
                'name' => "Floresta",
                'state_id' => 7
            ],
            [
                'name' => "Gachantivá",
                'state_id' => 7
            ],
            [
                'name' => "Gámeza",
                'state_id' => 7
            ],
            [
                'name' => "Garagoa",
                'state_id' => 7
            ],
            [
                'name' => "Guacamayas",
                'state_id' => 7
            ],
            [
                'name' => "Guateque",
                'state_id' => 7
            ],
            [
                'name' => "Guayatá",
                'state_id' => 7
            ],
            [
                'name' => "Güicán",
                'state_id' => 7
            ],
            [
                'name' => "Iza",
                'state_id' => 7
            ],
            [
                'name' => "Jenesano",
                'state_id' => 7
            ],
            [
                'name' => "Jericó",
                'state_id' => 7
            ],
            [
                'name' => "La Capilla",
                'state_id' => 7
            ],
            [
                'name' => "La Uvita",
                'state_id' => 7
            ],
            [
                'name' => "La Victoria",
                'state_id' => 7
            ],
            [
                'name' => "Labranzagrande",
                'state_id' => 7
            ],
            [
                'name' => "Macanal",
                'state_id' => 7
            ],
            [
                'name' => "Maripí",
                'state_id' => 7
            ],
            [
                'name' => "Miraflores",
                'state_id' => 7
            ],
            [
                'name' => "Mongua",
                'state_id' => 7
            ],
            [
                'name' => "Monguí",
                'state_id' => 7
            ],
            [
                'name' => "Moniquirá",
                'state_id' => 7
            ],
            [
                'name' => "Motavita",
                'state_id' => 7
            ],
            [
                'name' => "Muzo",
                'state_id' => 7
            ],
            [
                'name' => "Nobsa",
                'state_id' => 7
            ],
            [
                'name' => "Nuevo Colón",
                'state_id' => 7
            ],
            [
                'name' => "Oicatá",
                'state_id' => 7
            ],
            [
                'name' => "Otanche",
                'state_id' => 7
            ],
            [
                'name' => "Pachavita",
                'state_id' => 7
            ],
            [
                'name' => "Páez",
                'state_id' => 7
            ],
            [
                'name' => "Paipa",
                'state_id' => 7
            ],
            [
                'name' => "Pajarito",
                'state_id' => 7
            ],
            [
                'name' => "Panqueba",
                'state_id' => 7
            ],
            [
                'name' => "Pauna",
                'state_id' => 7
            ],
            [
                'name' => "Paya",
                'state_id' => 7
            ],
            [
                'name' => "Paz de Río",
                'state_id' => 7
            ],
            [
                'name' => "Pesca",
                'state_id' => 7
            ],
            [
                'name' => "Pisba",
                'state_id' => 7
            ],
            [
                'name' => "Puerto Boyacá",
                'state_id' => 7
            ],
            [
                'name' => "Quípama",
                'state_id' => 7
            ],
            [
                'name' => "Ramiriquí",
                'state_id' => 7
            ],
            [
                'name' => "Ráquira",
                'state_id' => 7
            ],
            [
                'name' => "Rondón",
                'state_id' => 7
            ],
            [
                'name' => "Saboyá",
                'state_id' => 7
            ],
            [
                'name' => "Sáchica",
                'state_id' => 7
            ],
            [
                'name' => "Samacá",
                'state_id' => 7
            ],
            [
                'name' => "San Eduardo",
                'state_id' => 7
            ],
            [
                'name' => "San José de Pare",
                'state_id' => 7
            ],
            [
                'name' => "San Luis de Gaceno",
                'state_id' => 7
            ],
            [
                'name' => "San Mateo",
                'state_id' => 7
            ],
            [
                'name' => "San Miguel de Sema",
                'state_id' => 7
            ],
            [
                'name' => "San Pablo de Borbur",
                'state_id' => 7
            ],
            [
                'name' => "Santa María",
                'state_id' => 7
            ],
            [
                'name' => "Santa Rosa de Viterbo",
                'state_id' => 7
            ],
            [
                'name' => "Santa Sofía",
                'state_id' => 7
            ],
            [
                'name' => "Santana",
                'state_id' => 7
            ],
            [
                'name' => "Sativanorte",
                'state_id' => 7
            ],
            [
                'name' => "Sativasur",
                'state_id' => 7
            ],
            [
                'name' => "Siachoque",
                'state_id' => 7
            ],
            [
                'name' => "Soatá",
                'state_id' => 7
            ],
            [
                'name' => "Socha",
                'state_id' => 7
            ],
            [
                'name' => "Socotá",
                'state_id' => 7
            ],
            [
                'name' => "Sogamoso",
                'state_id' => 7
            ],
            [
                'name' => "Somondoco",
                'state_id' => 7
            ],
            [
                'name' => "Sora",
                'state_id' => 7
            ],
            [
                'name' => "Soracá",
                'state_id' => 7
            ],
            [
                'name' => "Sotaquirá",
                'state_id' => 7
            ],
            [
                'name' => "Susacón",
                'state_id' => 7
            ],
            [
                'name' => "Sutamarchán",
                'state_id' => 7
            ],
            [
                'name' => "Sutatenza",
                'state_id' => 7
            ],
            [
                'name' => "Tasco",
                'state_id' => 7
            ],
            [
                'name' => "Tenza",
                'state_id' => 7
            ],
            [
                'name' => "Tibaná",
                'state_id' => 7
            ],
            [
                'name' => "Tibasosa",
                'state_id' => 7
            ],
            [
                'name' => "Tinjacá",
                'state_id' => 7
            ],
            [
                'name' => "Tipacoque",
                'state_id' => 7
            ],
            [
                'name' => "Toca",
                'state_id' => 7
            ],
            [
                'name' => "Togüí",
                'state_id' => 7
            ],
            [
                'name' => "Tópaga",
                'state_id' => 7
            ],
            [
                'name' => "Tota",
                'state_id' => 7
            ],
            [
                'name' => "Tununguá",
                'state_id' => 7
            ],
            [
                'name' => "Turmequé",
                'state_id' => 7
            ],
            [
                'name' => "Tuta",
                'state_id' => 7
            ],
            [
                'name' => "Tutazá",
                'state_id' => 7
            ],
            [
                'name' => "Úmbita",
                'state_id' => 7
            ],
            [
                'name' => "Ventaquemada",
                'state_id' => 7
            ],
            [
                'name' => "Villa de Leyva",
                'state_id' => 7
            ],
            [
                'name' => "Viracachá",
                'state_id' => 7
            ],
            [
                'name' => "Zetaquira",
                'state_id' => 7
            ],
            [
                'name' => "Manizales",
                'state_id' => 8
            ],
            [
                'name' => "Aguadas",
                'state_id' => 8
            ],
            [
                'name' => "Anserma",
                'state_id' => 8
            ],
            [
                'name' => "Aranzazu",
                'state_id' => 8
            ],
            [
                'name' => "Belalcázar",
                'state_id' => 8
            ],
            [
                'name' => "Chinchiná",
                'state_id' => 8
            ],
            [
                'name' => "Filadelfia",
                'state_id' => 8
            ],
            [
                'name' => "La Dorada",
                'state_id' => 8
            ],
            [
                'name' => "La Merced",
                'state_id' => 8
            ],
            [
                'name' => "Manzanares",
                'state_id' => 8
            ],
            [
                'name' => "Marmato",
                'state_id' => 8
            ],
            [
                'name' => "Marquetalia",
                'state_id' => 8
            ],
            [
                'name' => "Marulanda",
                'state_id' => 8
            ],
            [
                'name' => "Neira",
                'state_id' => 8
            ],
            [
                'name' => "Norcasia",
                'state_id' => 8
            ],
            [
                'name' => "Pácora",
                'state_id' => 8
            ],
            [
                'name' => "Palestina",
                'state_id' => 8
            ],
            [
                'name' => "Pensilvania",
                'state_id' => 8
            ],
            [
                'name' => "Riosucio",
                'state_id' => 8
            ],
            [
                'name' => "Risaralda",
                'state_id' => 8
            ],
            [
                'name' => "Salamina",
                'state_id' => 8
            ],
            [
                'name' => "Samaná",
                'state_id' => 8
            ],
            [
                'name' => "San José",
                'state_id' => 8
            ],
            [
                'name' => "Supía",
                'state_id' => 8
            ],
            [
                'name' => "Victoria",
                'state_id' => 8
            ],
            [
                'name' => "Villamaría",
                'state_id' => 8
            ],
            [
                'name' => "Viterbo",
                'state_id' => 8
            ],
            [
                'name' => "Florencia",
                'state_id' => 9
            ],
            [
                'name' => "Albania",
                'state_id' => 9
            ],
            [
                'name' => "Belén de Andaquies",
                'state_id' => 9
            ],
            [
                'name' => "Cartagena del Chairá",
                'state_id' => 9
            ],
            [
                'name' => "Curillo",
                'state_id' => 9
            ],
            [
                'name' => "El Doncello",
                'state_id' => 9
            ],
            [
                'name' => "El Paujil",
                'state_id' => 9
            ],
            [
                'name' => "La Montañita",
                'state_id' => 9
            ],
            [
                'name' => "Milán",
                'state_id' => 9
            ],
            [
                'name' => "Morelia",
                'state_id' => 9
            ],
            [
                'name' => "Puerto Rico",
                'state_id' => 9
            ],
            [
                'name' => "San José del Fragua",
                'state_id' => 9
            ],
            [
                'name' => "San Vicente del Caguán",
                'state_id' => 9
            ],
            [
                'name' => "Solano",
                'state_id' => 9
            ],
            [
                'name' => "Solita",
                'state_id' => 9
            ],
            [
                'name' => "Valparaíso",
                'state_id' => 9
            ],
            [
                'name' => "Yopal",
                'state_id' => 10
            ],
            [
                'name' => "Aguazul",
                'state_id' => 10
            ],
            [
                'name' => "Chámeza",
                'state_id' => 10
            ],
            [
                'name' => "Hato Corozal",
                'state_id' => 10
            ],
            [
                'name' => "La Salina",
                'state_id' => 10
            ],
            [
                'name' => "Maní",
                'state_id' => 10
            ],
            [
                'name' => "Monterrey",
                'state_id' => 10
            ],
            [
                'name' => "Nunchía",
                'state_id' => 10
            ],
            [
                'name' => "Orocué",
                'state_id' => 10
            ],
            [
                'name' => "Paz de Ariporo",
                'state_id' => 10
            ],
            [
                'name' => "Pore",
                'state_id' => 10
            ],
            [
                'name' => "Recetor",
                'state_id' => 10
            ],
            [
                'name' => "Sabanalarga",
                'state_id' => 10
            ],
            [
                'name' => "Sácama",
                'state_id' => 10
            ],
            [
                'name' => "San Luis de Palenque",
                'state_id' => 10
            ],
            [
                'name' => "Támara",
                'state_id' => 10
            ],
            [
                'name' => "Tauramena",
                'state_id' => 10
            ],
            [
                'name' => "Trinidad",
                'state_id' => 10
            ],
            [
                'name' => "Villanueva",
                'state_id' => 10
            ],
            [
                'name' => "Popayán",
                'state_id' => 11
            ],
            [
                'name' => "Almaguer",
                'state_id' => 11
            ],
            [
                'name' => "Argelia",
                'state_id' => 11
            ],
            [
                'name' => "Balboa",
                'state_id' => 11
            ],
            [
                'name' => "Bolívar",
                'state_id' => 11
            ],
            [
                'name' => "Buenos Aires",
                'state_id' => 11
            ],
            [
                'name' => "Cajibio",
                'state_id' => 11
            ],
            [
                'name' => "Caldono",
                'state_id' => 11
            ],
            [
                'name' => "Caloto",
                'state_id' => 11
            ],
            [
                'name' => "Corinto",
                'state_id' => 11
            ],
            [
                'name' => "El Tambo",
                'state_id' => 11
            ],
            [
                'name' => "Florencia",
                'state_id' => 11
            ],
            [
                'name' => "Guapi",
                'state_id' => 11
            ],
            [
                'name' => "Inzá",
                'state_id' => 11
            ],
            [
                'name' => "Jambaló",
                'state_id' => 11
            ],
            [
                'name' => "La Sierra",
                'state_id' => 11
            ],
            [
                'name' => "La Vega",
                'state_id' => 11
            ],
            [
                'name' => "López de Micay",
                'state_id' => 11
            ],
            [
                'name' => "Mercaderes",
                'state_id' => 11
            ],
            [
                'name' => "Miranda",
                'state_id' => 11
            ],
            [
                'name' => "Morales",
                'state_id' => 11
            ],
            [
                'name' => "Padilla",
                'state_id' => 11
            ],
            [
                'name' => "Páez",
                'state_id' => 11
            ],
            [
                'name' => "Patía",
                'state_id' => 11
            ],
            [
                'name' => "Piamonte",
                'state_id' => 11
            ],
            [
                'name' => "Piendamó",
                'state_id' => 11
            ],
            [
                'name' => "Puerto Tejada",
                'state_id' => 11
            ],
            [
                'name' => "Puracé",
                'state_id' => 11
            ],
            [
                'name' => "Rosas",
                'state_id' => 11
            ],
            [
                'name' => "San Sebastián",
                'state_id' => 11
            ],
            [
                'name' => "Santa Rosa",
                'state_id' => 11
            ],
            [
                'name' => "Santander de Quilichao",
                'state_id' => 11
            ],
            [
                'name' => "Silvia",
                'state_id' => 11
            ],
            [
                'name' => "Sotara",
                'state_id' => 11
            ],
            [
                'name' => "Suárez",
                'state_id' => 11
            ],
            [
                'name' => "Sucre",
                'state_id' => 11
            ],
            [
                'name' => "Timbío",
                'state_id' => 11
            ],
            [
                'name' => "Timbiquí",
                'state_id' => 11
            ],
            [
                'name' => "Toribio",
                'state_id' => 11
            ],
            [
                'name' => "Totoró",
                'state_id' => 11
            ],
            [
                'name' => "Villa Rica",
                'state_id' => 11
            ],
            [
                'name' => "Valledupar",
                'state_id' => 12
            ],
            [
                'name' => "Aguachica",
                'state_id' => 12
            ],
            [
                'name' => "Agustín Codazzi",
                'state_id' => 12
            ],
            [
                'name' => "Astrea",
                'state_id' => 12
            ],
            [
                'name' => "Becerril",
                'state_id' => 12
            ],
            [
                'name' => "Bosconia",
                'state_id' => 12
            ],
            [
                'name' => "Chimichagua",
                'state_id' => 12
            ],
            [
                'name' => "Chiriguaná",
                'state_id' => 12
            ],
            [
                'name' => "Curumaní",
                'state_id' => 12
            ],
            [
                'name' => "El Copey",
                'state_id' => 12
            ],
            [
                'name' => "El Paso",
                'state_id' => 12
            ],
            [
                'name' => "Gamarra",
                'state_id' => 12
            ],
            [
                'name' => "González",
                'state_id' => 12
            ],
            [
                'name' => "La Gloria",
                'state_id' => 12
            ],
            [
                'name' => "La Jagua de Ibirico",
                'state_id' => 12
            ],
            [
                'name' => "La Paz",
                'state_id' => 12
            ],
            [
                'name' => "Manaure",
                'state_id' => 12
            ],
            [
                'name' => "Pailitas",
                'state_id' => 12
            ],
            [
                'name' => "Pelaya",
                'state_id' => 12
            ],
            [
                'name' => "Pueblo Bello",
                'state_id' => 12
            ],
            [
                'name' => "Río de Oro",
                'state_id' => 12
            ],
            [
                'name' => "San Alberto",
                'state_id' => 12
            ],
            [
                'name' => "San Diego",
                'state_id' => 12
            ],
            [
                'name' => "San Martín",
                'state_id' => 12
            ],
            [
                'name' => "Tamalameque",
                'state_id' => 12
            ],
            [
                'name' => "Quibdó",
                'state_id' => 13
            ],
            [
                'name' => "Acandí",
                'state_id' => 13
            ],
            [
                'name' => "Alto Baudó",
                'state_id' => 13
            ],
            [
                'name' => "Atrato",
                'state_id' => 13
            ],
            [
                'name' => "Bagadó",
                'state_id' => 13
            ],
            [
                'name' => "Bahía Solano",
                'state_id' => 13
            ],
            [
                'name' => "Bajo Baudó",
                'state_id' => 13
            ],
            [
                'name' => "Belén de Bajirá",
                'state_id' => 13
            ],
            [
                'name' => "Bojayá",
                'state_id' => 13
            ],
            [
                'name' => "El Carmen de Atrato",
                'state_id' => 13
            ],
            [
                'name' => "El Carmen del Darién",
                'state_id' => 13
            ],
            [
                'name' => "Cértegui",
                'state_id' => 13
            ],
            [
                'name' => "Condoto",
                'state_id' => 13
            ],
            [
                'name' => "El Cantón de San Pablo",
                'state_id' => 13
            ],
            [
                'name' => "Istmina",
                'state_id' => 13
            ],
            [
                'name' => "Juradó",
                'state_id' => 13
            ],
            [
                'name' => "Litoral del San Juan",
                'state_id' => 13
            ],
            [
                'name' => "Lloró",
                'state_id' => 13
            ],
            [
                'name' => "Medio Atrato",
                'state_id' => 13
            ],
            [
                'name' => "Medio Baudó",
                'state_id' => 13
            ],
            [
                'name' => "Medio San Juan",
                'state_id' => 13
            ],
            [
                'name' => "Nóvita",
                'state_id' => 13
            ],
            [
                'name' => "Nuquí",
                'state_id' => 13
            ],
            [
                'name' => "Río Iró",
                'state_id' => 13
            ],
            [
                'name' => "Río Quito",
                'state_id' => 13
            ],
            [
                'name' => "Riosucio",
                'state_id' => 13
            ],
            [
                'name' => "San José del Palmar",
                'state_id' => 13
            ],
            [
                'name' => "Sipí",
                'state_id' => 13
            ],
            [
                'name' => "Tadó",
                'state_id' => 13
            ],
            [
                'name' => "Unguía",
                'state_id' => 13
            ],
            [
                'name' => "Unión Panamericana",
                'state_id' => 13
            ],
            [
                'name' => "Montería",
                'state_id' => 14
            ],
            [
                'name' => "Ayapel",
                'state_id' => 14
            ],
            [
                'name' => "Buenavista",
                'state_id' => 14
            ],
            [
                'name' => "Canalete",
                'state_id' => 14
            ],
            [
                'name' => "Cereté",
                'state_id' => 14
            ],
            [
                'name' => "Chimá",
                'state_id' => 14
            ],
            [
                'name' => "Chinú",
                'state_id' => 14
            ],
            [
                'name' => "Ciénaga de Oro",
                'state_id' => 14
            ],
            [
                'name' => "Cotorra",
                'state_id' => 14
            ],
            [
                'name' => "La Apartada",
                'state_id' => 14
            ],
            [
                'name' => "Los Córdobas",
                'state_id' => 14
            ],
            [
                'name' => "Momil",
                'state_id' => 14
            ],
            [
                'name' => "Moñitos",
                'state_id' => 14
            ],
            [
                'name' => "Montelíbano",
                'state_id' => 14
            ],
            [
                'name' => "Planeta Rica",
                'state_id' => 14
            ],
            [
                'name' => "Pueblo Nuevo",
                'state_id' => 14
            ],
            [
                'name' => "Puerto Escondido",
                'state_id' => 14
            ],
            [
                'name' => "Puerto Libertador",
                'state_id' => 14
            ],
            [
                'name' => "Purísima",
                'state_id' => 14
            ],
            [
                'name' => "Sahagún",
                'state_id' => 14
            ],
            [
                'name' => "San Andrés de Sotavento",
                'state_id' => 14
            ],
            [
                'name' => "San Antero",
                'state_id' => 14
            ],
            [
                'name' => "San Bernardo del Viento",
                'state_id' => 14
            ],
            [
                'name' => "San Carlos",
                'state_id' => 14
            ],
            [
                'name' => "San Pelayo",
                'state_id' => 14
            ],
            [
                'name' => "Santa Cruz de Lorica",
                'state_id' => 14
            ],
            [
                'name' => "Tierralta",
                'state_id' => 14
            ],
            [
                'name' => "Valencia",
                'state_id' => 14
            ],
            [
                'name' => "Agua de Dios",
                'state_id' => 15
            ],
            [
                'name' => "Albán",
                'state_id' => 15
            ],
            [
                'name' => "Anapoima",
                'state_id' => 15
            ],
            [
                'name' => "Anolaima",
                'state_id' => 15
            ],
            [
                'name' => "Apulo",
                'state_id' => 15
            ],
            [
                'name' => "Arbeláez",
                'state_id' => 15
            ],
            [
                'name' => "Beltrán",
                'state_id' => 15
            ],
            [
                'name' => "Bituima",
                'state_id' => 15
            ],
            [
                'name' => "Bojacá",
                'state_id' => 15
            ],
            [
                'name' => "Cabrera",
                'state_id' => 15
            ],
            [
                'name' => "Cachipay",
                'state_id' => 15
            ],
            [
                'name' => "Cajicá",
                'state_id' => 15
            ],
            [
                'name' => "Caparrapí",
                'state_id' => 15
            ],
            [
                'name' => "Cáqueza",
                'state_id' => 15
            ],
            [
                'name' => "Carmen de Carupa",
                'state_id' => 15
            ],
            [
                'name' => "Chaguaní",
                'state_id' => 15
            ],
            [
                'name' => "Chía",
                'state_id' => 15
            ],
            [
                'name' => "Chipaque",
                'state_id' => 15
            ],
            [
                'name' => "Choachí",
                'state_id' => 15
            ],
            [
                'name' => "Chocontá",
                'state_id' => 15
            ],
            [
                'name' => "Cogua",
                'state_id' => 15
            ],
            [
                'name' => "Cota",
                'state_id' => 15
            ],
            [
                'name' => "Cucunubá",
                'state_id' => 15
            ],
            [
                'name' => "El Colegio",
                'state_id' => 15
            ],
            [
                'name' => "El Peñón",
                'state_id' => 15
            ],
            [
                'name' => "El Rosal",
                'state_id' => 15
            ],
            [
                'name' => "Facatativá",
                'state_id' => 15
            ],
            [
                'name' => "Fómeque",
                'state_id' => 15
            ],
            [
                'name' => "Fosca",
                'state_id' => 15
            ],
            [
                'name' => "Funza",
                'state_id' => 15
            ],
            [
                'name' => "Fúquene",
                'state_id' => 15
            ],
            [
                'name' => "Fusagasugá",
                'state_id' => 15
            ],
            [
                'name' => "Gachalá",
                'state_id' => 15
            ],
            [
                'name' => "Gachancipá",
                'state_id' => 15
            ],
            [
                'name' => "Gachetá",
                'state_id' => 15
            ],
            [
                'name' => "Gama",
                'state_id' => 15
            ],
            [
                'name' => "Girardot",
                'state_id' => 15
            ],
            [
                'name' => "Granada",
                'state_id' => 15
            ],
            [
                'name' => "Guachetá",
                'state_id' => 15
            ],
            [
                'name' => "Guaduas",
                'state_id' => 15
            ],
            [
                'name' => "Guasca",
                'state_id' => 15
            ],
            [
                'name' => "Guataquí",
                'state_id' => 15
            ],
            [
                'name' => "Guatavita",
                'state_id' => 15
            ],
            [
                'name' => "Guayabal de Síquima",
                'state_id' => 15
            ],
            [
                'name' => "Guayabetal",
                'state_id' => 15
            ],
            [
                'name' => "Gutiérrez",
                'state_id' => 15
            ],
            [
                'name' => "Jerusalén",
                'state_id' => 15
            ],
            [
                'name' => "Junín",
                'state_id' => 15
            ],
            [
                'name' => "La Calera",
                'state_id' => 15
            ],
            [
                'name' => "La Mesa",
                'state_id' => 15
            ],
            [
                'name' => "La Palma",
                'state_id' => 15
            ],
            [
                'name' => "La Peña",
                'state_id' => 15
            ],
            [
                'name' => "La Vega",
                'state_id' => 15
            ],
            [
                'name' => "Lenguazaque",
                'state_id' => 15
            ],
            [
                'name' => "Machetá",
                'state_id' => 15
            ],
            [
                'name' => "Madrid",
                'state_id' => 15
            ],
            [
                'name' => "Manta",
                'state_id' => 15
            ],
            [
                'name' => "Medina",
                'state_id' => 15
            ],
            [
                'name' => "Mosquera",
                'state_id' => 15
            ],
            [
                'name' => "Nariño",
                'state_id' => 15
            ],
            [
                'name' => "Nemocón",
                'state_id' => 15
            ],
            [
                'name' => "Nilo",
                'state_id' => 15
            ],
            [
                'name' => "Nimaima",
                'state_id' => 15
            ],
            [
                'name' => "Nocaima",
                'state_id' => 15
            ],
            [
                'name' => "Pacho",
                'state_id' => 15
            ],
            [
                'name' => "Paime",
                'state_id' => 15
            ],
            [
                'name' => "Pandi",
                'state_id' => 15
            ],
            [
                'name' => "Paratebueno",
                'state_id' => 15
            ],
            [
                'name' => "Pasca",
                'state_id' => 15
            ],
            [
                'name' => "Puerto Salgar",
                'state_id' => 15
            ],
            [
                'name' => "Pulí",
                'state_id' => 15
            ],
            [
                'name' => "Quebradanegra",
                'state_id' => 15
            ],
            [
                'name' => "Quetame",
                'state_id' => 15
            ],
            [
                'name' => "Quipile",
                'state_id' => 15
            ],
            [
                'name' => "Ricaurte",
                'state_id' => 15
            ],
            [
                'name' => "San Antonio del Tequendama",
                'state_id' => 15
            ],
            [
                'name' => "San Bernardo",
                'state_id' => 15
            ],
            [
                'name' => "San Cayetano",
                'state_id' => 15
            ],
            [
                'name' => "San Francisco",
                'state_id' => 15
            ],
            [
                'name' => "San Juan de Rioseco",
                'state_id' => 15
            ],
            [
                'name' => "Sasaima",
                'state_id' => 15
            ],
            [
                'name' => "Sesquilé",
                'state_id' => 15
            ],
            [
                'name' => "Sibaté",
                'state_id' => 15
            ],
            [
                'name' => "Silvania",
                'state_id' => 15
            ],
            [
                'name' => "Simijaca",
                'state_id' => 15
            ],
            [
                'name' => "Soacha",
                'state_id' => 15
            ],
            [
                'name' => "Sopó",
                'state_id' => 15
            ],
            [
                'name' => "Subachoque",
                'state_id' => 15
            ],
            [
                'name' => "Suesca",
                'state_id' => 15
            ],
            [
                'name' => "Supatá",
                'state_id' => 15
            ],
            [
                'name' => "Susa",
                'state_id' => 15
            ],
            [
                'name' => "Sutatausa",
                'state_id' => 15
            ],
            [
                'name' => "Tabio",
                'state_id' => 15
            ],
            [
                'name' => "Tausa",
                'state_id' => 15
            ],
            [
                'name' => "Tena",
                'state_id' => 15
            ],
            [
                'name' => "Tenjo",
                'state_id' => 15
            ],
            [
                'name' => "Tibacuy",
                'state_id' => 15
            ],
            [
                'name' => "Tibiritá",
                'state_id' => 15
            ],
            [
                'name' => "Tocaima",
                'state_id' => 15
            ],
            [
                'name' => "Tocancipá",
                'state_id' => 15
            ],
            [
                'name' => "Topaipí",
                'state_id' => 15
            ],
            [
                'name' => "Ubalá",
                'state_id' => 15
            ],
            [
                'name' => "Ubaque",
                'state_id' => 15
            ],
            [
                'name' => "Ubaté",
                'state_id' => 15
            ],
            [
                'name' => "Une",
                'state_id' => 15
            ],
            [
                'name' => "Útica",
                'state_id' => 15
            ],
            [
                'name' => "Venecia",
                'state_id' => 15
            ],
            [
                'name' => "Vergara",
                'state_id' => 15
            ],
            [
                'name' => "Vianí",
                'state_id' => 15
            ],
            [
                'name' => "Villagómez",
                'state_id' => 15
            ],
            [
                'name' => "Villapinzón",
                'state_id' => 15
            ],
            [
                'name' => "Villeta",
                'state_id' => 15
            ],
            [
                'name' => "Viotá",
                'state_id' => 15
            ],
            [
                'name' => "Yacopí",
                'state_id' => 15
            ],
            [
                'name' => "Zipacón",
                'state_id' => 15
            ],
            [
                'name' => "Zipaquirá",
                'state_id' => 15
            ],
            [
                'name' => "Inírida",
                'state_id' => 16
            ],
            [
                'name' => "Barranco Minas",
                'state_id' => 16
            ],
            [
                'name' => "Cacahual",
                'state_id' => 16
            ],
            [
                'name' => "La Guadalupe",
                'state_id' => 16
            ],
            [
                'name' => "Mapiripana",
                'state_id' => 16
            ],
            [
                'name' => "Morichal Nuevo",
                'state_id' => 16
            ],
            [
                'name' => "Pana Pana",
                'state_id' => 16
            ],
            [
                'name' => "Puerto Colombia",
                'state_id' => 16
            ],
            [
                'name' => "San Felipe",
                'state_id' => 16
            ],
            [
                'name' => "San José del Guaviare",
                'state_id' => 17
            ],
            [
                'name' => "Calamar",
                'state_id' => 17
            ],
            [
                'name' => "El Retorno",
                'state_id' => 17
            ],
            [
                'name' => "Miraflores",
                'state_id' => 17
            ],
            [
                'name' => "Neiva",
                'state_id' => 18
            ],
            [
                'name' => "Acevedo",
                'state_id' => 18
            ],
            [
                'name' => "Agrado",
                'state_id' => 18
            ],
            [
                'name' => "Aipe",
                'state_id' => 18
            ],
            [
                'name' => "Algeciras",
                'state_id' => 18
            ],
            [
                'name' => "Altamira",
                'state_id' => 18
            ],
            [
                'name' => "Baraya",
                'state_id' => 18
            ],
            [
                'name' => "Campoalegre",
                'state_id' => 18
            ],
            [
                'name' => "Colombia",
                'state_id' => 18
            ],
            [
                'name' => "El Pital",
                'state_id' => 18
            ],
            [
                'name' => "Elías",
                'state_id' => 18
            ],
            [
                'name' => "Garzón",
                'state_id' => 18
            ],
            [
                'name' => "Gigante",
                'state_id' => 18
            ],
            [
                'name' => "Guadalupe",
                'state_id' => 18
            ],
            [
                'name' => "Hobo",
                'state_id' => 18
            ],
            [
                'name' => "Iquira",
                'state_id' => 18
            ],
            [
                'name' => "Isnos",
                'state_id' => 18
            ],
            [
                'name' => "La Argentina",
                'state_id' => 18
            ],
            [
                'name' => "La Plata",
                'state_id' => 18
            ],
            [
                'name' => "Nátaga",
                'state_id' => 18
            ],
            [
                'name' => "Oporapa",
                'state_id' => 18
            ],
            [
                'name' => "Paicol",
                'state_id' => 18
            ],
            [
                'name' => "Palermo",
                'state_id' => 18
            ],
            [
                'name' => "Palestina",
                'state_id' => 18
            ],
            [
                'name' => "Pitalito",
                'state_id' => 18
            ],
            [
                'name' => "Rivera",
                'state_id' => 18
            ],
            [
                'name' => "Saladoblanco",
                'state_id' => 18
            ],
            [
                'name' => "San Agustín",
                'state_id' => 18
            ],
            [
                'name' => "Santa María",
                'state_id' => 18
            ],
            [
                'name' => "Suaza",
                'state_id' => 18
            ],
            [
                'name' => "Tarqui",
                'state_id' => 18
            ],
            [
                'name' => "Tello",
                'state_id' => 18
            ],
            [
                'name' => "Teruel",
                'state_id' => 18
            ],
            [
                'name' => "Tesalia",
                'state_id' => 18
            ],
            [
                'name' => "Timaná",
                'state_id' => 18
            ],
            [
                'name' => "Villavieja",
                'state_id' => 18
            ],
            [
                'name' => "Yaguará",
                'state_id' => 18
            ],
            [
                'name' => "Riohacha",
                'state_id' => 19
            ],
            [
                'name' => "Albania",
                'state_id' => 19
            ],
            [
                'name' => "Barrancas",
                'state_id' => 19
            ],
            [
                'name' => "Dibulla",
                'state_id' => 19
            ],
            [
                'name' => "Distracción",
                'state_id' => 19
            ],
            [
                'name' => "El Molino",
                'state_id' => 19
            ],
            [
                'name' => "Fonseca",
                'state_id' => 19
            ],
            [
                'name' => "Hatonuevo",
                'state_id' => 19
            ],
            [
                'name' => "La Jagua del Pilar",
                'state_id' => 19
            ],
            [
                'name' => "Maicao",
                'state_id' => 19
            ],
            [
                'name' => "Manaure",
                'state_id' => 19
            ],
            [
                'name' => "San Juan del Cesar",
                'state_id' => 19
            ],
            [
                'name' => "Uribia",
                'state_id' => 19
            ],
            [
                'name' => "Urumita",
                'state_id' => 19
            ],
            [
                'name' => "Villanueva",
                'state_id' => 19
            ],
            [
                'name' => "Santa Marta",
                'state_id' => 20
            ],
            [
                'name' => "Algarrobo",
                'state_id' => 20
            ],
            [
                'name' => "Aracataca",
                'state_id' => 20
            ],
            [
                'name' => "Ariguaní",
                'state_id' => 20
            ],
            [
                'name' => "Cerro San Antonio",
                'state_id' => 20
            ],
            [
                'name' => "Chibolo",
                'state_id' => 20
            ],
            [
                'name' => "Ciénaga",
                'state_id' => 20
            ],
            [
                'name' => "Concordia",
                'state_id' => 20
            ],
            [
                'name' => "El Banco",
                'state_id' => 20
            ],
            [
                'name' => "El Piñón",
                'state_id' => 20
            ],
            [
                'name' => "El Retén",
                'state_id' => 20
            ],
            [
                'name' => "Fundación",
                'state_id' => 20
            ],
            [
                'name' => "Guamal",
                'state_id' => 20
            ],
            [
                'name' => "Nueva Granada",
                'state_id' => 20
            ],
            [
                'name' => "Pedraza",
                'state_id' => 20
            ],
            [
                'name' => "Pijiño del Carmen",
                'state_id' => 20
            ],
            [
                'name' => "Pivijay",
                'state_id' => 20
            ],
            [
                'name' => "Plato",
                'state_id' => 20
            ],
            [
                'name' => "Puebloviejo",
                'state_id' => 20
            ],
            [
                'name' => "Remolino",
                'state_id' => 20
            ],
            [
                'name' => "Sabanas de San Ángel",
                'state_id' => 20
            ],
            [
                'name' => "Salamina",
                'state_id' => 20
            ],
            [
                'name' => "San Sebastián de Buenavista",
                'state_id' => 20
            ],
            [
                'name' => "San Zenón",
                'state_id' => 20
            ],
            [
                'name' => "Santa Ana",
                'state_id' => 20
            ],
            [
                'name' => "Santa Bárbara de Pinto",
                'state_id' => 20
            ],
            [
                'name' => "Sitionuevo",
                'state_id' => 20
            ],
            [
                'name' => "Tenerife",
                'state_id' => 20
            ],
            [
                'name' => "Zapayán",
                'state_id' => 20
            ],
            [
                'name' => "Zona Bananera",
                'state_id' => 20
            ],
            [
                'name' => "Villavicencio",
                'state_id' => 21
            ],
            [
                'name' => "Acacías",
                'state_id' => 21

            ],
            [
                'name' => "Barranca de Upía",
                'state_id' => 21

            ],
            [
                'name' => "Cabuyaro",
                'state_id' => 21

            ],
            [
                'name' => "Castilla la Nueva",
                'state_id' => 21

            ],
            [
                'name' => "Cubarral",
                'state_id' => 21

            ],
            [
                'name' => "Cumaral",
                'state_id' => 21

            ],
            [
                'name' => "El Calvario",
                'state_id' => 21

            ],
            [
                'name' => "El Castillo",
                'state_id' => 21

            ],
            [
                'name' => "El Dorado",
                'state_id' => 21

            ],
            [
                'name' => "Fuente de oro",
                'state_id' => 21

            ],
            [
                'name' => "Granada",
                'state_id' => 21

            ],
            [
                'name' => "Guamal",
                'state_id' => 21

            ],
            [
                'name' => "La Macarena",
                'state_id' => 21

            ],
            [
                'name' => "Lejanías",
                'state_id' => 21

            ],
            [
                'name' => "Mapiripán",
                'state_id' => 21

            ],
            [
                'name' => "Mesetas",
                'state_id' => 21

            ],
            [
                'name' => "Puerto Concordia",
                'state_id' => 21

            ],
            [
                'name' => "Puerto Gaitán",
                'state_id' => 21

            ],
            [
                'name' => "Puerto Lleras",
                'state_id' => 21

            ],
            [
                'name' => "Puerto López",
                'state_id' => 21

            ],
            [
                'name' => "Puerto Rico",
                'state_id' => 21

            ],
            [
                'name' => "Restrepo",
                'state_id' => 21

            ],
            [
                'name' => "San Carlos de Guaroa",
                'state_id' => 21

            ],
            [
                'name' => "San Juan de Arama",
                'state_id' => 21

            ],
            [
                'name' => "San Juanito",
                'state_id' => 21

            ],
            [
                'name' => "San Martín",
                'state_id' => 21

            ],
            [
                'name' => "La Uribe",
                'state_id' => 21

            ],
            [
                'name' => "Vista Hermosa",
                'state_id' => 21

            ],
            [
                'name' => "San Juan de Pasto",
                'state_id' => 22
            ],
            [
                'name' => "Albán",
                'state_id' => 22
            ],
            [
                'name' => "Aldana",
                'state_id' => 22
            ],
            [
                'name' => "Ancuya",
                'state_id' => 22
            ],
            [
                'name' => "Arboleda",
                'state_id' => 22
            ],
            [
                'name' => "Barbacoas",
                'state_id' => 22
            ],
            [
                'name' => "Belén",
                'state_id' => 22
            ],
            [
                'name' => "Buesaco",
                'state_id' => 22
            ],
            [
                'name' => "Chachagüí",
                'state_id' => 22
            ],
            [
                'name' => "Colón",
                'state_id' => 22
            ],
            [
                'name' => "Consaca",
                'state_id' => 22
            ],
            [
                'name' => "Contadero",
                'state_id' => 22
            ],
            [
                'name' => "Córdoba",
                'state_id' => 22
            ],
            [
                'name' => "Cuaspud",
                'state_id' => 22
            ],
            [
                'name' => "Cumbal",
                'state_id' => 22
            ],
            [
                'name' => "Cumbitara",
                'state_id' => 22
            ],
            [
                'name' => "El Charco",
                'state_id' => 22
            ],
            [
                'name' => "El Peñol",
                'state_id' => 22
            ],
            [
                'name' => "El Rosario",
                'state_id' => 22
            ],
            [
                'name' => "El Tablón",
                'state_id' => 22
            ],
            [
                'name' => "El Tambo",
                'state_id' => 22
            ],
            [
                'name' => "Francisco Pizarro",
                'state_id' => 22
            ],
            [
                'name' => "Funes",
                'state_id' => 22
            ],
            [
                'name' => "Guachucal",
                'state_id' => 22
            ],
            [
                'name' => "Guaitarilla",
                'state_id' => 22
            ],
            [
                'name' => "Gualmatán",
                'state_id' => 22
            ],
            [
                'name' => "Iles",
                'state_id' => 22
            ],
            [
                'name' => "Imués",
                'state_id' => 22
            ],
            [
                'name' => "Ipiales",
                'state_id' => 22
            ],
            [
                'name' => "La Cruz",
                'state_id' => 22
            ],
            [
                'name' => "La Florida",
                'state_id' => 22
            ],
            [
                'name' => "La Llanada",
                'state_id' => 22
            ],
            [
                'name' => "La Tola",
                'state_id' => 22
            ],
            [
                'name' => "La Unión",
                'state_id' => 22
            ],
            [
                'name' => "Leiva",
                'state_id' => 22
            ],
            [
                'name' => "Linares",
                'state_id' => 22
            ],
            [
                'name' => "Los Andes",
                'state_id' => 22
            ],
            [
                'name' => "Magüí Payán",
                'state_id' => 22
            ],
            [
                'name' => "Mallama",
                'state_id' => 22
            ],
            [
                'name' => "Mosquera",
                'state_id' => 22
            ],
            [
                'name' => "Nariño",
                'state_id' => 22
            ],
            [
                'name' => "Olaya Herrera",
                'state_id' => 22
            ],
            [
                'name' => "Ospina",
                'state_id' => 22
            ],
            [
                'name' => "Policarpa",
                'state_id' => 22
            ],
            [
                'name' => "Potosí",
                'state_id' => 22
            ],
            [
                'name' => "Providencia",
                'state_id' => 22
            ],
            [
                'name' => "Puerres",
                'state_id' => 22
            ],
            [
                'name' => "Pupiales",
                'state_id' => 22
            ],
            [
                'name' => "Ricaurte",
                'state_id' => 22
            ],
            [
                'name' => "Roberto Payán",
                'state_id' => 22
            ],
            [
                'name' => "Samaniego",
                'state_id' => 22
            ],
            [
                'name' => "San Bernardo",
                'state_id' => 22
            ],
            [
                'name' => "San Lorenzo",
                'state_id' => 22
            ],
            [
                'name' => "San Pablo",
                'state_id' => 22
            ],
            [
                'name' => "San Pedro de Cartago",
                'state_id' => 22
            ],
            [
                'name' => "Sandoná",
                'state_id' => 22
            ],
            [
                'name' => "Santa Bárbara",
                'state_id' => 22
            ],
            [
                'name' => "Santacruz",
                'state_id' => 22
            ],
            [
                'name' => "Sapuyes",
                'state_id' => 22
            ],
            [
                'name' => "Taminango",
                'state_id' => 22
            ],
            [
                'name' => "Tangua",
                'state_id' => 22
            ],
            [
                'name' => "Tumaco",
                'state_id' => 22
            ],
            [
                'name' => "Túquerres",
                'state_id' => 22
            ],
            [
                'name' => "Yacuanquer",
                'state_id' => 22
            ],
            [
                'name' => "Cúcuta",
                'state_id' => 23
            ],
            [
                'name' => "Abrego",
                'state_id' => 23
            ],
            [
                'name' => "Arboledas",
                'state_id' => 23
            ],
            [
                'name' => "Bochalema",
                'state_id' => 23
            ],
            [
                'name' => "Bucarasica",
                'state_id' => 23
            ],
            [
                'name' => "Cáchira",
                'state_id' => 23
            ],
            [
                'name' => "Cácota",
                'state_id' => 23
            ],
            [
                'name' => "Chinácota",
                'state_id' => 23
            ],
            [
                'name' => "Chitagá",
                'state_id' => 23
            ],
            [
                'name' => "Convención",
                'state_id' => 23
            ],
            [
                'name' => "Cucutilla",
                'state_id' => 23
            ],
            [
                'name' => "Duranía",
                'state_id' => 23
            ],
            [
                'name' => "El Carmen",
                'state_id' => 23
            ],
            [
                'name' => "El Tarra",
                'state_id' => 23
            ],
            [
                'name' => "El Zulia",
                'state_id' => 23
            ],
            [
                'name' => "Gramalote",
                'state_id' => 23
            ],
            [
                'name' => "Hacarí",
                'state_id' => 23
            ],
            [
                'name' => "Herrán",
                'state_id' => 23
            ],
            [
                'name' => "La Esperanza",
                'state_id' => 23
            ],
            [
                'name' => "La Playa de Belén",
                'state_id' => 23
            ],
            [
                'name' => "Labateca",
                'state_id' => 23
            ],
            [
                'name' => "Los Patios",
                'state_id' => 23
            ],
            [
                'name' => "Lourdes",
                'state_id' => 23
            ],
            [
                'name' => "Mutiscua",
                'state_id' => 23
            ],
            [
                'name' => "Ocaña",
                'state_id' => 23
            ],
            [
                'name' => "Pamplona",
                'state_id' => 23
            ],
            [
                'name' => "Pamplonita",
                'state_id' => 23
            ],
            [
                'name' => "Puerto Santander",
                'state_id' => 23
            ],
            [
                'name' => "Ragonvalia",
                'state_id' => 23
            ],
            [
                'name' => "Salazar de las Palmas",
                'state_id' => 23
            ],
            [
                'name' => "San Calixto",
                'state_id' => 23
            ],
            [
                'name' => "San Cayetano",
                'state_id' => 23
            ],
            [
                'name' => "Santiago",
                'state_id' => 23
            ],
            [
                'name' => "Sardinata",
                'state_id' => 23
            ],
            [
                'name' => "Silos",
                'state_id' => 23
            ],
            [
                'name' => "Teorama",
                'state_id' => 23
            ],
            [
                'name' => "Tibú",
                'state_id' => 23
            ],
            [
                'name' => "Toledo",
                'state_id' => 23
            ],
            [
                'name' => "Villa Caro",
                'state_id' => 23
            ],
            [
                'name' => "Villa del Rosario",
                'state_id' => 23
            ],
            [
                'name' => "Mocoa",
                'state_id' => 24
            ],
            [
                'name' => "Colón",
                'state_id' => 24
            ],
            [
                'name' => "Puerto Leguízamo",
                'state_id' => 24
            ],
            [
                'name' => "Orito",
                'state_id' => 24
            ],
            [
                'name' => "Puerto Asís",
                'state_id' => 24
            ],
            [
                'name' => "Puerto Caicedo",
                'state_id' => 24
            ],
            [
                'name' => "Puerto Guzmán",
                'state_id' => 24
            ],
            [
                'name' => "San Francisco",
                'state_id' => 24
            ],
            [
                'name' => "San Miguel",
                'state_id' => 24
            ],
            [
                'name' => "Santiago",
                'state_id' => 24
            ],
            [
                'name' => "Sibundoy",
                'state_id' => 24
            ],
            [
                'name' => "Valle del Guamuez",
                'state_id' => 24
            ],
            [
                'name' => "Villagarzón",
                'state_id' => 24
            ],
            [
                'name' => "Armenia",
                'state_id' => 25
            ],
            [
                'name' => "Buenavista",
                'state_id' => 25
            ],
            [
                'name' => "Calarcá",
                'state_id' => 25
            ],
            [
                'name' => "Circasia",
                'state_id' => 25
            ],
            [
                'name' => "Córdoba",
                'state_id' => 25
            ],
            [
                'name' => "Filandia",
                'state_id' => 25
            ],
            [
                'name' => "Génova",
                'state_id' => 25
            ],
            [
                'name' => "La Tebaida",
                'state_id' => 25
            ],
            [
                'name' => "Montenegro",
                'state_id' => 25
            ],
            [
                'name' => "Pijao",
                'state_id' => 25
            ],
            [
                'name' => "Quimbaya",
                'state_id' => 25
            ],
            [
                'name' => "Salento",
                'state_id' => 25
            ],
            [
                'name' => "Pereira",
                'state_id' => 26
            ],
            [
                'name' => "Apía",
                'state_id' => 26
            ],
            [
                'name' => "Balboa",
                'state_id' => 26
            ],
            [
                'name' => "Belén de Umbría",
                'state_id' => 26
            ],
            [
                'name' => "Dosquebradas",
                'state_id' => 26
            ],
            [
                'name' => "Guática",
                'state_id' => 26
            ],
            [
                'name' => "La Celia",
                'state_id' => 26
            ],
            [
                'name' => "La Virginia",
                'state_id' => 26
            ],
            [
                'name' => "Marsella",
                'state_id' => 26
            ],
            [
                'name' => "Mistrató",
                'state_id' => 26
            ],
            [
                'name' => "Pueblo Rico",
                'state_id' => 26
            ],
            [
                'name' => "Quinchía",
                'state_id' => 26
            ],
            [
                'name' => "Santa Rosa de Cabal",
                'state_id' => 26
            ],
            [
                'name' => "Santuario",
                'state_id' => 26
            ],
            [
                'name' => "San Andrés",
                'state_id' => 27
            ],
            [
                'name' => "Providencia",
                'state_id' => 27
            ],
            [
                'name' => "Bucaramanga",
                'state_id' => 28
            ],
            [
                'name' => "Aguada",
                'state_id' => 28
            ],
            [
                'name' => "Albania",
                'state_id' => 28
            ],
            [
                'name' => "Aratoca",
                'state_id' => 28
            ],
            [
                'name' => "Barbosa",
                'state_id' => 28
            ],
            [
                'name' => "Barichara",
                'state_id' => 28
            ],
            [
                'name' => "Barrancabermeja",
                'state_id' => 28
            ],
            [
                'name' => "Betulia",
                'state_id' => 28
            ],
            [
                'name' => "Bolívar",
                'state_id' => 28
            ],
            [
                'name' => "Cabrera",
                'state_id' => 28
            ],
            [
                'name' => "California",
                'state_id' => 28
            ],
            [
                'name' => "Capitanejo",
                'state_id' => 28
            ],
            [
                'name' => "Carcasí",
                'state_id' => 28
            ],
            [
                'name' => "Cepitá",
                'state_id' => 28
            ],
            [
                'name' => "Cerrito",
                'state_id' => 28
            ],
            [
                'name' => "Charalá",
                'state_id' => 28
            ],
            [
                'name' => "Charta",
                'state_id' => 28
            ],
            [
                'name' => "Chima",
                'state_id' => 28
            ],
            [
                'name' => "Chipatá",
                'state_id' => 28
            ],
            [
                'name' => "Cimitarra",
                'state_id' => 28
            ],
            [
                'name' => "Concepción",
                'state_id' => 28
            ],
            [
                'name' => "Confines",
                'state_id' => 28
            ],
            [
                'name' => "Contratación",
                'state_id' => 28
            ],
            [
                'name' => "Coromoro",
                'state_id' => 28
            ],
            [
                'name' => "Curití",
                'state_id' => 28
            ],
            [
                'name' => "El Carmen de Chucurí",
                'state_id' => 28
            ],
            [
                'name' => "El Guacamayo",
                'state_id' => 28
            ],
            [
                'name' => "El Peñón",
                'state_id' => 28
            ],
            [
                'name' => "El Playón",
                'state_id' => 28
            ],
            [
                'name' => "Encino",
                'state_id' => 28
            ],
            [
                'name' => "Enciso",
                'state_id' => 28
            ],
            [
                'name' => "Florián",
                'state_id' => 28
            ],
            [
                'name' => "Floridablanca",
                'state_id' => 28
            ],
            [
                'name' => "Galán",
                'state_id' => 28
            ],
            [
                'name' => "Gámbita",
                'state_id' => 28
            ],
            [
                'name' => "Guaca",
                'state_id' => 28
            ],
            [
                'name' => "Guadalupe",
                'state_id' => 28
            ],
            [
                'name' => "Guapotá",
                'state_id' => 28
            ],
            [
                'name' => "Guavatá",
                'state_id' => 28
            ],
            [
                'name' => "Güepsa",
                'state_id' => 28
            ],
            [
                'name' => "Hato",
                'state_id' => 28
            ],
            [
                'name' => "Jesús María",
                'state_id' => 28
            ],
            [
                'name' => "Jordán",
                'state_id' => 28
            ],
            [
                'name' => "La Belleza",
                'state_id' => 28
            ],
            [
                'name' => "La Paz",
                'state_id' => 28
            ],
            [
                'name' => "Landázuri",
                'state_id' => 28
            ],
            [
                'name' => "Lebrija",
                'state_id' => 28
            ],
            [
                'name' => "Los Santos",
                'state_id' => 28
            ],
            [
                'name' => "Macaravita",
                'state_id' => 28
            ],
            [
                'name' => "Málaga",
                'state_id' => 28
            ],
            [
                'name' => "Matanza",
                'state_id' => 28
            ],
            [
                'name' => "Mogotes",
                'state_id' => 28
            ],
            [
                'name' => "Molagavita",
                'state_id' => 28
            ],
            [
                'name' => "Ocamonte",
                'state_id' => 28
            ],
            [
                'name' => "Oiba",
                'state_id' => 28
            ],
            [
                'name' => "Onzaga",
                'state_id' => 28
            ],
            [
                'name' => "Palmar",
                'state_id' => 28
            ],
            [
                'name' => "Palmas del Socorro",
                'state_id' => 28
            ],
            [
                'name' => "Páramo",
                'state_id' => 28
            ],
            [
                'name' => "Piedecuesta",
                'state_id' => 28
            ],
            [
                'name' => "Pinchote",
                'state_id' => 28
            ],
            [
                'name' => "Puente Nacional",
                'state_id' => 28
            ],
            [
                'name' => "Puerto Parra",
                'state_id' => 28
            ],
            [
                'name' => "Puerto Wilches",
                'state_id' => 28
            ],
            [
                'name' => "Rionegro",
                'state_id' => 28
            ],
            [
                'name' => "Sabana de Torres",
                'state_id' => 28
            ],
            [
                'name' => "San Andrés",
                'state_id' => 28
            ],
            [
                'name' => "San Benito",
                'state_id' => 28
            ],
            [
                'name' => "San Gil",
                'state_id' => 28
            ],
            [
                'name' => "San Joaquín",
                'state_id' => 28
            ],
            [
                'name' => "San José de Miranda",
                'state_id' => 28
            ],
            [
                'name' => "San Juan de Girón",
                'state_id' => 28
            ],
            [
                'name' => "San Miguel",
                'state_id' => 28
            ],
            [
                'name' => "San Vicente de Chucurí",
                'state_id' => 28
            ],
            [
                'name' => "Santa Bárbara",
                'state_id' => 28
            ],
            [
                'name' => "Santa Helena del Opón",
                'state_id' => 28
            ],
            [
                'name' => "Simacota",
                'state_id' => 28
            ],
            [
                'name' => "Socorro",
                'state_id' => 28
            ],
            [
                'name' => "Suaita",
                'state_id' => 28
            ],
            [
                'name' => "Sucre",
                'state_id' => 28
            ],
            [
                'name' => "Suratá",
                'state_id' => 28
            ],
            [
                'name' => "Tona",
                'state_id' => 28
            ],
            [
                'name' => "Valle de San José",
                'state_id' => 28
            ],
            [
                'name' => "Vélez",
                'state_id' => 28
            ],
            [
                'name' => "Vetas",
                'state_id' => 28
            ],
            [
                'name' => "Villanueva",
                'state_id' => 28
            ],
            [
                'name' => "Zapatoca",
                'state_id' => 28
            ],
            [
                'name' => "Sincelejo",
                'state_id' => 29
            ],
            [
                'name' => "Buenavista",
                'state_id' => 29
            ],
            [
                'name' => "Caimito",
                'state_id' => 29
            ],
            [
                'name' => "Chalán",
                'state_id' => 29
            ],
            [
                'name' => "Colosó",
                'state_id' => 29
            ],
            [
                'name' => "Corozal",
                'state_id' => 29
            ],
            [
                'name' => "Coveñas",
                'state_id' => 29
            ],
            [
                'name' => "El Roble",
                'state_id' => 29
            ],
            [
                'name' => "Galeras",
                'state_id' => 29
            ],
            [
                'name' => "Guaranda",
                'state_id' => 29
            ],
            [
                'name' => "La Unión",
                'state_id' => 29
            ],
            [
                'name' => "Los Palmitos",
                'state_id' => 29
            ],
            [
                'name' => "Majagual",
                'state_id' => 29
            ],
            [
                'name' => "Morroa",
                'state_id' => 29
            ],
            [
                'name' => "Ovejas",
                'state_id' => 29
            ],
            [
                'name' => "Palmito",
                'state_id' => 29
            ],
            [
                'name' => "Sampués",
                'state_id' => 29
            ],
            [
                'name' => "San Benito Abad",
                'state_id' => 29
            ],
            [
                'name' => "San Juan Betulia",
                'state_id' => 29
            ],
            [
                'name' => "San Marcos",
                'state_id' => 29
            ],
            [
                'name' => "San Onofre",
                'state_id' => 29
            ],
            [
                'name' => "San Pedro",
                'state_id' => 29
            ],
            [
                'name' => "San Luis de Sincé",
                'state_id' => 29
            ],
            [
                'name' => "Sucre",
                'state_id' => 29
            ],
            [
                'name' => "Toluviejo",
                'state_id' => 29
            ],
            [
                'name' => "Tolú",
                'state_id' => 29
            ],
            [
                'name' => "Ibagué",
                'state_id' => 30
            ],
            [
                'name' => "Alpujarra",
                'state_id' => 30
            ],
            [
                'name' => "Alvarado",
                'state_id' => 30
            ],
            [
                'name' => "Ambalema",
                'state_id' => 30
            ],
            [
                'name' => "Anzoátegui",
                'state_id' => 30
            ],
            [
                'name' => "Armero",
                'state_id' => 30
            ],
            [
                'name' => "Ataco",
                'state_id' => 30
            ],
            [
                'name' => "Cajamarca",
                'state_id' => 30
            ],
            [
                'name' => "Carmen de Apicalá",
                'state_id' => 30
            ],
            [
                'name' => "Casabianca",
                'state_id' => 30
            ],
            [
                'name' => "Chaparral",
                'state_id' => 30
            ],
            [
                'name' => "Coello",
                'state_id' => 30
            ],
            [
                'name' => "Coyaima",
                'state_id' => 30
            ],
            [
                'name' => "Cunday",
                'state_id' => 30
            ],
            [
                'name' => "Dolores",
                'state_id' => 30
            ],
            [
                'name' => "Espinal",
                'state_id' => 30
            ],
            [
                'name' => "Falan",
                'state_id' => 30
            ],
            [
                'name' => "Flandes",
                'state_id' => 30
            ],
            [
                'name' => "Fresno",
                'state_id' => 30
            ],
            [
                'name' => "Guamo",
                'state_id' => 30
            ],
            [
                'name' => "Herveo",
                'state_id' => 30
            ],
            [
                'name' => "Honda",
                'state_id' => 30
            ],
            [
                'name' => "Icononzo",
                'state_id' => 30
            ],
            [
                'name' => "Lérida",
                'state_id' => 30
            ],
            [
                'name' => "Líbano",
                'state_id' => 30
            ],
            [
                'name' => "Mariquita",
                'state_id' => 30
            ],
            [
                'name' => "Melgar",
                'state_id' => 30
            ],
            [
                'name' => "Murillo",
                'state_id' => 30
            ],
            [
                'name' => "Natagaima",
                'state_id' => 30
            ],
            [
                'name' => "Ortega",
                'state_id' => 30
            ],
            [
                'name' => "Palocabildo",
                'state_id' => 30
            ],
            [
                'name' => "Piedras",
                'state_id' => 30
            ],
            [
                'name' => "Planadas",
                'state_id' => 30
            ],
            [
                'name' => "Prado",
                'state_id' => 30
            ],
            [
                'name' => "Purificación",
                'state_id' => 30
            ],
            [
                'name' => "Rioblanco",
                'state_id' => 30
            ],
            [
                'name' => "Roncesvalles",
                'state_id' => 30
            ],
            [
                'name' => "Rovira",
                'state_id' => 30
            ],
            [
                'name' => "Saldaña",
                'state_id' => 30
            ],
            [
                'name' => "San Antonio",
                'state_id' => 30
            ],
            [
                'name' => "San Luis",
                'state_id' => 30
            ],
            [
                'name' => "Santa Isabel",
                'state_id' => 30
            ],
            [
                'name' => "Suárez",
                'state_id' => 30
            ],
            [
                'name' => "Valle de San Juan",
                'state_id' => 30
            ],
            [
                'name' => "Venadillo",
                'state_id' => 30
            ],
            [
                'name' => "Villahermosa",
                'state_id' => 30
            ],
            [
                'name' => "Villarrica",
                'state_id' => 30
            ],
            [
                'name' => "Cali",
                'state_id' => 31
            ],
            [
                'name' => "Alcalá",
                'state_id' => 31
            ],
            [
                'name' => "Andalucía",
                'state_id' => 31
            ],
            [
                'name' => "Ansermanuevo",
                'state_id' => 31
            ],
            [
                'name' => "Argelia",
                'state_id' => 31
            ],
            [
                'name' => "Bolívar",
                'state_id' => 31
            ],
            [
                'name' => "Buenaventura",
                'state_id' => 31
            ],
            [
                'name' => "Bugalagrande",
                'state_id' => 31
            ],
            [
                'name' => "Caicedonia",
                'state_id' => 31
            ],
            [
                'name' => "Calima",
                'state_id' => 31
            ],
            [
                'name' => "Candelaria",
                'state_id' => 31
            ],
            [
                'name' => "Cartago",
                'state_id' => 31
            ],
            [
                'name' => "Dagua",
                'state_id' => 31
            ],
            [
                'name' => "El Águila",
                'state_id' => 31
            ],
            [
                'name' => "El Cairo",
                'state_id' => 31
            ],
            [
                'name' => "El Cerrito",
                'state_id' => 31
            ],
            [
                'name' => "El Dovio",
                'state_id' => 31
            ],
            [
                'name' => "Florida",
                'state_id' => 31
            ],
            [
                'name' => "Ginebra",
                'state_id' => 31
            ],
            [
                'name' => "Guacarí",
                'state_id' => 31
            ],
            [
                'name' => "Guadalajara de Buga",
                'state_id' => 31
            ],
            [
                'name' => "Jamundí",
                'state_id' => 31
            ],
            [
                'name' => "La Cumbre",
                'state_id' => 31
            ],
            [
                'name' => "La Unión",
                'state_id' => 31
            ],
            [
                'name' => "La Victoria",
                'state_id' => 31
            ],
            [
                'name' => "Obando",
                'state_id' => 31
            ],
            [
                'name' => "Palmira",
                'state_id' => 31
            ],
            [
                'name' => "Pradera",
                'state_id' => 31
            ],
            [
                'name' => "Restrepo",
                'state_id' => 31
            ],
            [
                'name' => "Riofrío",
                'state_id' => 31
            ],
            [
                'name' => "Roldanillo",
                'state_id' => 31
            ],
            [
                'name' => "San Pedro",
                'state_id' => 31
            ],
            [
                'name' => "Sevilla",
                'state_id' => 31
            ],
            [
                'name' => "Toro",
                'state_id' => 31
            ],
            [
                'name' => "Trujillo",
                'state_id' => 31
            ],
            [
                'name' => "Tuluá",
                'state_id' => 31
            ],
            [
                'name' => "Ulloa",
                'state_id' => 31
            ],
            [
                'name' => "Versalles",
                'state_id' => 31
            ],
            [
                'name' => "Vijes",
                'state_id' => 31
            ],
            [
                'name' => "Yotoco",
                'state_id' => 31
            ],
            [
                'name' => "Yumbo",
                'state_id' => 31
            ],
            [
                'name' => "Zarzal",
                'state_id' => 31
            ],
            [
                'name' => "Mitú",
                'state_id' => 32
            ],
            [
                'name' => "Carurú",
                'state_id' => 32
            ],
            [
                'name' => "Pacoa",
                'state_id' => 32
            ],
            [
                'name' => "Papunahua",
                'state_id' => 32
            ],
            [
                'name' => "Taraira",
                'state_id' => 32
            ],
            [
                'name' => "Yavaraté",
                'state_id' => 32
            ],
            [
                'name' => "Puerto Carreño",
                'state_id' => 32
            ],
            [
                'name' => "Cumaribo",
                'state_id' => 32
            ],
            [
                'name' => "La Primavera",
                'state_id' => 32
            ],
            [
                'name' => "Santa Rosalía",
                'state_id' => 32
            ],
        ];
        City::insert($cities);
    }
}
