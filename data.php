<?php
// UEFA Women's Europa Cup 2026/27 - round of 16, status 1 Oct 2026
// 'league-position': latest standings found, provisional early in many seasons
// 'logo': club-site crest where found, otherwise the UEFA badge. 'logo_uefa': uniform 240x240 PNG fallback.
$teams = [
        'Ajax' => [
            'continue' => true,
            'name' => 'Ajax',
            'league' => 'Vrouwen Eredivisie (Netherlands)',
            'uefa-coefficient-ranking' => 21,
            'league-position' => 6,
            'city' => 'Amsterdam',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2604835--ajax/',
            'url' => 'https://www.ajax.nl/',
            'logo' => 'https://www.ajax.nl/media/vimnukaa/ajax-klassiek-logo-pms200.svg',
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2604835.png'
        ],
        'Brann' => [
            'continue' => true,
            'name' => 'Brann',
            'league' => 'Toppserien (Norway)',
            'uefa-coefficient-ranking' => 18,
            'league-position' => 14,
            'city' => 'Bergen',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2612267--brann/',
            'url' => 'https://www.brann.no/',
            'logo' => 'https://www.brann.no/resultater/_/image/405ca125-7c3e-4052-88c0-ef89865ed4b1:410b729c5e9affefa4f2386528ae9bb502db9861/wide-72-72/Brann_logo_141616.svg', // fragile hashed URL
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2612267.png'
        ],
        'Brøndby' => [
            'continue' => true,
            'name' => 'Brøndby',
            'league' => 'A-Liga (Denmark)',
            'uefa-coefficient-ranking' => 85,
            'league-position' => 1,
            'city' => 'Brøndby',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/83727--brondby/',
            'url' => 'https://brondby.com/',
            'logo' => 'https://brondby.com/_nuxt/img/logo.a691999.svg', // build-hashed, may break
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/83727.png'
        ],
        'Czarni Sosnowiec' => [
            'continue' => true,
            'name' => 'Czarni Sosnowiec',
            'league' => 'Ekstraliga (Poland)',
            'uefa-coefficient-ranking' => 115,
            'league-position' => 12,
            'city' => 'Sosnowiec',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2603340--czarni/',
            'url' => 'http://www.czarnisosnowiec.eu/',
            'logo' => 'http://www.czarnisosnowiec.eu/images/logo.png', // HTTP only: blocked on HTTPS pages, use logo_uefa
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2603340.png'
        ],
        'Fenerbahçe' => [
            'continue' => true,
            'name' => 'Fenerbahçe',
            'league' => 'Süper Lig (Turkey)',
            'uefa-coefficient-ranking' => 104,
            'league-position' => 15,
            'city' => 'Istanbul',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2612244--fenerbahce/',
            'url' => 'https://www.fenerbahce.org/',
            'logo' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2612244.png', // UEFA pattern, not individually verified
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2612244.png'
        ],
        'Feyenoord' => [
            'continue' => true,
            'name' => 'Feyenoord',
            'league' => 'Vrouwen Eredivisie (Netherlands)',
            'uefa-coefficient-ranking' => 73,
            'league-position' => 5,
            'city' => 'Rotterdam',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2611785--feyenoord/',
            'url' => 'https://www.feyenoord.nl/',
            'logo' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611785.png', // UEFA pattern, not individually verified
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611785.png'
        ],
        'Eintracht Frankfurt' => [
            'continue' => true,
            'name' => 'Eintracht Frankfurt',
            'league' => 'Frauen-Bundesliga (Germany)',
            'uefa-coefficient-ranking' => 14,
            'league-position' => 15,
            'city' => 'Frankfurt am Main',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2611099--frankfurt/',
            'url' => 'https://www.eintracht.de/',
            'logo' => 'https://assets.football-logos.cc/logos/germany/512x512/eintracht-frankfurt.422e036d.png', // CDN transform, padded 3:2 crop, may break
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611099.png'
        ],
        'Hammarby' => [
            'continue' => true,
            'name' => 'Hammarby',
            'league' => 'Damallsvenskan (Sweden)',
            'uefa-coefficient-ranking' => 17,
            'league-position' => 15,
            'city' => 'Stockholm',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2600837--hammarby/',
            'url' => 'https://www.hammarbyfotboll.se/',
            'logo' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2600837.png', // UEFA pattern, not individually verified
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2600837.png'
        ],
        'Malmö FF' => [
            'continue' => true,
            'name' => 'Malmö FF',
            'league' => 'Damallsvenskan (Sweden)',
            'uefa-coefficient-ranking' => 65,
            'league-position' => 15,
            'city' => 'Malmö',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2613920--malmo-ff/',
            'url' => 'https://www.mff.se/',
            'logo' => 'https://www.mff.se/app/themes/mesta-maestarna/resources/images/mff-logo.svg',
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2613920.png'
        ],
        'PSV' => [
            'continue' => true,
            'name' => 'PSV',
            'league' => 'Vrouwen Eredivisie (Netherlands)',
            'uefa-coefficient-ranking' => 68,
            'league-position' => 30,
            'city' => 'Eindhoven',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2611131--psv/',
            'url' => 'https://www.psv.nl/',
            'logo' => 'https://www.psv.nl/upload_mm/f/2/e/108043_fullimage_logo-psv2020-240x240.png',
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611131.png'
        ],
        'Real Sociedad' => [
            'continue' => true,
            'name' => 'Real Sociedad',
            'league' => 'Liga F (Spain)',
            'uefa-coefficient-ranking' => 29,
            'league-position' => 14,
            'city' => 'San Sebastián',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2601940--real-sociedad/',
            'url' => 'https://www.realsociedad.eus/',
            'logo' => 'https://www.realsociedad.eus/Content/img/Escudo-head.png',
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2601940.png'
        ],
        'Rosenborg' => [
            'continue' => true,
            'name' => 'Rosenborg',
            'league' => 'Toppserien (Norway)',
            'uefa-coefficient-ranking' => 61,
            'league-position' => 19,
            'city' => 'Trondheim',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/78160--rosenborg/',
            'url' => 'https://www.rbk.no/',
            'logo' => 'https://www.rbk.no/_/asset/no.seeds.app.football:0000019ff16ca8d0/img/logo/rbk/logo.png', // version ID in path, may break
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/78160.png'
        ],
        'Sparta Praha' => [
            'continue' => true,
            'name' => 'Sparta Praha',
            'league' => '1. liga žen (Czech Republic)',
            'uefa-coefficient-ranking' => 24,
            'league-position' => 6,
            'city' => 'Prague',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/81198--sparta-praha/',
            'url' => 'https://sparta.cz/',
            'logo' => 'https://sparta.cz/_next/static/media/sparta-logo.9d66bdc8.svg', // build-hashed, may break
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/81198.png'
        ],
        'Spartak Myjava' => [
            'continue' => true,
            'name' => 'Spartak Myjava',
            'league' => '1. liga žien (Slovakia)',
            'uefa-coefficient-ranking' => 54,
            'league-position' => 19,
            'city' => 'Myjava',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2607644--spartak-myjava/',
            'url' => 'https://www.spartakmyjava.sk/',
            'logo' => 'https://e091236de1.clvaw-cdnwnd.com/a374fbdd1de580ca87a69f9715a08851/200000249-c380ec3811/SPARTAK_MYJAVA.png?ph=e091236de1', // Webnode CDN, may block hotlinking
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2607644.png'
        ],
        'Torreense' => [
            'continue' => true,
            'name' => 'Torreense',
            'league' => 'Liga BPI (Portugal)',
            'uefa-coefficient-ranking' => 59,
            'league-position' => 1,
            'city' => 'Torres Vedras',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2611345--scu-torreense/',
            'url' => 'https://www.torreense.com/',
            'logo' => 'https://assets.football-logos.cc/logos/portugal/512x512/torreense.fdcc5fe6.png',
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2611345.png'
        ],
        'Wolfsburg' => [
            'continue' => true,
            'name' => 'Wolfsburg',
            'league' => 'Frauen-Bundesliga (Germany)',
            'uefa-coefficient-ranking' => 6,
            'league-position' => 6,
            'city' => 'Wolfsburg',
            'page' => 'https://www.uefa.com/womenseuropacup/clubs/2600828--wolfsburg/',
            'url' => 'https://www.vfl-wolfsburg.de/',
            'logo' => 'https://www.vfl-wolfsburg.de/_assets/c6bb6cd0ef4342a474168f76207f5023/assets/logo.svg?c=1778353188', // hash + cache-buster, may break
            'logo_uefa' => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2600828.png'
        ],
]