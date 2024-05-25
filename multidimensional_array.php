<?php

//define multidimensional array



$emp =[
    [1,"Ammrisha", "Manager",500000],
    [1,"Amrita", "Site supervisor",100000],
    [1,"Dev", "Actor",5000000]
];



//display elements using for loop


for($row=0;$row<3;$row++)
{
    for($col=0;$col<4;$col++)
    {
        echo $emp[$row][$col];
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

//display using foreach loop in a table format


echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";

echo "<tr>

        <th> Emp Id. </th>
        <th> Emp Name </th>
        <th> Designation</th>
        <th> Salary</th>

    <tr>";

foreach($emp as $value1)
{
    echo "<tr>";
    foreach($value1 as $value2)
    {
        
        echo "<td> $value2 </td>";
    }
    echo "</tr>";
}

echo "</table>";
?>