<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _MainModel 
{
    public static function allBlogs(){
        $Blogs = [

        ['id'   =>'1',
        'blogtitle' =>'Man must explore, and this is exploration at its greatest',
        'blogdescription' =>'Problems look mighty small from 150 miles up',
        'postedby'  =>'Start Bootstrap ',
        'date'  =>'September 24, 2022'
        ],
        ['id'   =>'2',
        'blogtitle' =>'I believe every human has a finite number of heartbeats. I dont intend to waste any of mine',
        'blogdescription' =>'Problems look mighty small from 150 miles up',
        'postedby'  =>'Start Bootstrap ',
        'date'  =>'September 24, 2022'
         ],
        ['id'   =>'3',
        'blogtitle' =>'Science has not yet mastered prophecy',
        'blogdescription' =>'We predict too much for the next year and yet far too little for the next ten.',
        'postedby'  =>'Start Bootstrap ',
        'date'  =>'August 24, 2022'
        ]

    ];
    return ($Blogs);
}
}