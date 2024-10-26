<?php 

use Services\FileStorage;

$store = new FileStorage();
$arrData = [
    [
        'id' => 11, 
        'name' => 'Борщ', 
        'description' => 'свекла; капуста; морковь; лук.',
        'image' => "./img/BORSH1.jpg",
        'weigth' => 350, 
        'price' => 299.00,
    ],
    [
        'id' => 12, 
        'name' => 'Бутерброд Миллионера', 
        'description' => 'Хлеб для тостов, сыр творожный, огурец, форель слабой соли, лист салата афицион.',
        'image' => "./img/buter.jpg",
        'weigth' => 200, 
        'price' => 399.00,
    ],
    [
        'id' => 13,
        'name' => 'Быстрый салатик', 
        'description' => 'Креветки на гриле, листья салата айсберг, соус цезарь, бекон, помидорки черри, чесночные гренки, слайсы пармезана и лепестки миндаля.',
        'image' => "./img/salat.jpg",
        'weigth' => 300, 
        'price' => 450.00,
    ]
];
    
$store->saveData('data.json', $arrData);
$arrData = $store->loadData('data.json');
var_dump($arrData);