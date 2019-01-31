@extends('layouts.app')
@section('content')
    <?php
    $lang = Cookie::get('lang');
    if ($lang != 'nl') $lang = 'en';
    App::setLocale($lang);
    ?>
    <section id="beauty">
        <div class="ui container">
            <p>BEAUTY, de magie van verzorging, ondersteuning, ontgifting en aanraking geeft onze huid werkzame impulsen en diepe ontspanning. De resultaten zijn direct voelbaar & waarneembaar.</p>
            <div class="ui accordion">
                <div class="title"><i class="dropdown icon"></i>Gelaat</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Lichaam</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Voeten</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Workshops</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>
            </div>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="ui relaxation">
        <div class="ui container">
            <p>RELAXATION, de magie van mentale ontspanning, de staat van no-mind, de route weg van de stress van ons dagelijkse leven. </p>
            <div class="ui accordion">
                <div class="title"><i class="dropdown icon"></i>Intake</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Relaxatiesessie/meditatiesessie/ontspanningstechnieken</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Workshops</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>
            </div>
        </div>
    </section>

    <div class="ui divider"></div>

    <section id="ui divination">
        <div class="ui container">
            <p>DIVINATION, de magie van energie lezen. Voor jezelf of voor anderen, dat kan je kiezen. Heb jij een interesse naar het mystieke, dan kan je hier terecht.</p>
            <div class="ui accordion">
                <div class="title"><i class="dropdown icon"></i>Individuele Tarot Sessie/Kaartlegging</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Jaarleergang Creatieve Tarot</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>

                <div class="title"><i class="dropdown icon"></i>Workshops</div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fuga ipsa itaque laboriosam maxime necessitatibus quae veritatis voluptatem. In itaque labore minus omnis temporibus voluptates. Aut incidunt iure possimus sequi.</div>
            </div>
        </div>
    </section>
@endsection