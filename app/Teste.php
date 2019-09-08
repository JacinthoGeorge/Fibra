<?php
$fibra = [
    "hexa"=>[
        '#008000',
        '#FFFF00',
        '#FFFFFF',
        '#0000FF',
        '#FF0000',
        '#9400D3',
        '#A52A2A',
        '#FF1493',
        '#000000',
        '#808080',
        '#FF4500',
        '#00FFFF',
    ],
    "nome"=>[
        'Verde',
        'Amarelo',
        'Branco',
        'Azul',
        'Vermelho',
        'Violeta',
        'Marrom',
        'Rosa',
        'Preto',
        'Cinza',
        'Laranja',
        'Aqua Azul',
    ],
    "grupo"=>[
        'Grupo 1',
        'Grupo 2',
        'Grupo 3',
        'Grupo 4',
        'Grupo 5',
        'Grupo 6',
    ],
];



function oi($n){
    $fibra = [
        "hexa"=>[
            '#008000',
            '#FFFF00',
            '#FFFFFF',
            '#0000FF',
            '#FF0000',
            '#9400D3',
            '#A52A2A',
            '#FF1493',
            '#000000',
            '#808080',
            '#FF4500',
            '#00FFFF',
        ],
        "nome"=>[
            'Verde',
            'Amarelo',
            'Branco',
            'Azul',
            'Vermelho',
            'Violeta',
            'Marrom',
            'Rosa',
            'Preto',
            'Cinza',
            'Laranja',
            'Aqua Azul',
        ],
        "grupo"=>[
            'Grupo 1',
            'Grupo 2',
            'Grupo 3',
            'Grupo 4',
            'Grupo 5',
            'Grupo 6',
        ],
    ];
    return $fibra["grupo"][$n];
}

var_dump(oi(1));