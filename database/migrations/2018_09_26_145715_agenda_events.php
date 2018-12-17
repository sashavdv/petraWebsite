<?php
//
//use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Database\Migrations\Migration;
//
//class AgendaEvents extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::create('agendas', function (Blueprint $table) {
//            $table->increments('id');
//            $table->date('date');
//            $table->text('event_time');
//            $table->text('title');
//            $table->text('description_nl');
//            $table->text('description_en');
//            $table->double('price')->nullable();
//            $table->timestamps();
//        });
//        DB::table('agendas')->insert([
//            'date' => '2018-09-04',
//            'event_time' => '12:00:00',
//            'title' => 'testEvent',
//            'description_nl' => 'dochter van ouders met een vroegere achtergrond in de clerus, kwam Petra al jong de tegenstellingen in georganiseerde religie en meer holistische denkbeelden tegen. Haar ouders zetten zich ook als eerste(n) in een kleine dorpsgemeenschap ook in naar sociaal onrecht, haar moeder was erg creatief van natuur en haar vader had een goedlachs standvastig karakter, waar zijn liefde voor het leven zich voornamelijk uitte in de genegenheid hij voor zijn vrouw en dochter koesterde.
//
//Dat haar ouders hun kerkelijk ambt aan de haak hingen en voor een gezin kozen, zorgde wel altijd voor wat deining in de dorpsgemeenschap en Petra kreeg met veelvuldige pesterijen rond dit stigma te maken. Het maakt',
//            'description_en' => 'cest un description',
//            'price' => '15',
//        ]); DB::table('agendas')->insert([
//        'date' => '2018-09-04',
//        'event_time' => '12:00:00',
//        'title' => 'testEvent2',
//        'description_nl' => 'dit is een omschrijving',
//        'description_en' => 'cest un description',
//        'price' => '15',
//    ]);
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::dropIfExists('agendas');
//
//    }
//}
