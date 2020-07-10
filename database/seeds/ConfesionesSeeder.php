<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ConfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();

        DB::table('confesiones')->delete();
		
		$titulo=array('Mi mejor amiga', 'mi secreto', 'Mi hermano mayor', 'El gas pimienta', 'Me cagó a trompadas una mina.', 'ninja asesino', 'En el baño', 'secretos secretos', 'Mi hija', 'La palanca', 'Internet', 'Mi chanchito', 'El vendedor');
		
		$confesion=array('Solo queria decirte que te volviste mas zorra de lo que eras maria c:', 'cuando entre a la habitacion la prostituta me dijo "vos sos muy lindo para venir aca"... fue lo mas lindo que me dijeron en mucho tiempo', 'A los cinco años un dia me desperté y resulta que mi hermano se me habia sentado en la cabeza y empezo a tirarse pedos... bueno, el tema es que me tenia inmovilizado y empece a gritar "mama, juampi me esta culeando" claro que yo no tenia ni idea lo que eso significaba. Nunca vi a mi vieja entrar tan rapido en mi habitacion!', 'La cosa es así... Hace un tiempo mi viejo me compró un spray de esos que son anti-chorros porque decía que la calle estaba muy mal. Para mi era una chotada, hasta que un día un pibe vino con una navaja y me dijo que le diera el bolso. Le dije que iba a sacar los documentos y saqué mi super spray... lo abrí y en vez de tirarle en su cara lo tenia dado vuelta y me lo tiré tdo en los ojos... La cosa es que el chorro me terminó ayudando a subir a un taxi y en agradecimiento le di mi bolso. Claro que nunca lo que paso, solo dije que me habia robado y que EL me había tirado el spray en los ojos. Soy una boluda...', 'Solo eso...', 'el otro dia fui al cine y me tire un ninja asesino (pedo silencioso pero letal) , me hice el boludo que buscaba algo abajo del asiento y tosia, desps me toca el hombro el pibe de atras y me dice, flaco , flaco, si estas buscando el pedo, lo tengo aca..', 'simpre que me paso el papel higienico, no lo tiro inmediatamente, primero lo miro para ver como viene la mano....','Cada vez que en una pelicula dicen algo como: "quedan 2 minutos antes de que estalle la bomba" o algo por el estilo, yo me pongo a contar los segundos a ver si la escena esta hecha en tiempo real o mandando bolazo...','El otro dia mi hija de 8 años me pregunto si los negros tambien se enamoraban.... yo me pregunto que estaré haciendo mal como padre', 'A veces simulo masturbar la palanca de cambio mientras espero que cambie la luz del semáforo','Hubo veces en que lloré porque mi computadora no podía conectarse a Internet.','Hace 2 años compre un chanchito chiquito para criarlo y comerlo en navidad, me encariñe con el chancho y no lo pude matar para comerlo y todavia lo tengo y cuando hace frio lo entro y duerme en la piesa conmigo', 'bajo videos porno y los vendo en retiro haciendolos pasar por dvds de spiderman o el hombre araña o peliculas infantiles, jaja me produce mucho morbo imaginarme la cara de los pibitos cuando ponen para ver la pelicula');
		
		$genero=array(6,2,4,5,5,4,4,6,2,1,6,6,3);
		
		for ($i=0; $i < 12; $i++) {
			DB::table('confesiones')->insert([
				'TITULO' => $titulo[$i],
				'CONFESION' => $confesion[$i],
				'FECHA_CREACION' => date('Y-m-d H:m:s'),
				'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s'),
				'id_usuario' => $faker -> numberBetween(1,20),
				'id_genero' => $genero[$i]
			]);
		}
    }
}

