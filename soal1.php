<?php
function data(){
    $data=[
        'name' => 'rion ming arfin',
        'addres' => 'desa.padang pelawi kec.sukaraja.kab seluma kota bengkulu',
        'hobbies' =>array('sepakbola,futsal'),
        'is_married' => false,
        'school' =>(object)array(
            'highhschool' => 'SMAN 6 SELUMA KOTA BENGKULU',
            'university' => 'no'
        ),
        'skils' => (object) array(
            'php' => '60',
            'mysql'=>'60',
            'html'=>'80',
            'css' =>'70'
        )
    ];
    return $data;
};

echo json_encode(data());