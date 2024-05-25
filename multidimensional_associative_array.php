<?php

$food =[

    "Biryani"=>[
        "price"=>180,
        "Quantity"=>1,
        "Delivery Charge"=>60
    ],

    "Paw Bhaji"=>[
        "price"=>100,
        "Quantity"=>2,
        "Delivery Charge"=>40
    ],

    "Rabri"=>[
        "price"=>80,
        "Quantity"=>10,
        "Delivery Charge"=>40
    ],

    "Mishti Doi"=>[
        "price"=>100,
        "Quantity"=>1,
        "Delivery Charge"=>40
    ],

    "Rosogolla"=>[
        "price"=>100,
        "Quantity"=>10,
        "Delivery Charge"=>20
    ],

    "Papri chat"=>[
        "price"=>120,
        "Quantity"=>10,
        "Delivery Charge"=>40
    ],

    "Puchka"=>[
        "price"=>80,
        "Quantity"=>5,
        "Delivery Charge"=>40
    ],

    "Fried rice"=>[
        "price"=>200,
        "Quantity"=>1,
        "Delivery Charge"=>00
    ],

    "Veg Thali"=>[
        "price"=>200,
        "Quantity"=>1,
        "Delivery Charge"=>40
    ],

    "Mutton Thali"=>[
        "price"=>400,
        "Quantity"=>1,
        "Delivery Charge"=>40
    ],

    "Fish Thali"=>[
        "price"=>300,
        "Quantity"=>1,
        "Delivery Charge"=>40
    ]
];

//print the multidimensional associative array


echo "<pre>";

print_r($food);

echo "</pre>";


//display using foreach

echo "<table  border='2px' cellpadding='5px' cellspacing='0px'>";

echo "<tr>

        <th> Food Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Deliver Charge</th>


    </tr>";

foreach($food as $key=> $v1)
{
    echo "<tr>
        
        <td> $key</td> " ;

      
    foreach($v1 as $v2)
    {
        echo "<td> $v2 </td>";
    }

    echo    "</tr>";
}


echo "</table>";


//

?>