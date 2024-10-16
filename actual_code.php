<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSTAD writing stars</title>
</head>
<body>

<?php
//  Let us write 3 functions
//  1 for spaceBtn
//  2 for starsBtn
//  3 for starHalfMoon

// here starts the  func number 1 for spaceBtn
//taking two parameters $gapsCount and $starCount
function spaceBtn($gapsCount,$rowCount){
    for($j=1;$j<=$rowCount;$j++){
        echo "*";
    for($i=1;$i<=$gapsCount;$i++){
        echo " ";
        
    }
    echo "*";
    echo "\n";
    }
}

// here ends the  func number 1 for spaceBtn

//printing spaceBtn
echo "space with 4 gaps \n";
echo spaceBtn(4,2);
// here starts the  func number 2 for starsBtn
//taking two parameters $gapsCount and $starCount

function starsBtn($gapsCount,$starCount){
    for ($j=1;$j<=$gapsCount;$j++){
        echo " ";
    }    
    for($i=1;$i<=$starCount;$i++){
        echo "* ";
    }
    echo "\n";

    
}

// here ends the  func number 2 for starsBtn

//calling func starsBtn
echo "space with 2 gaps in front \n";

starsBtn(2,2);

echo "space with 6 gaps in front with a single STAR \n";

starsBtn(6,1);
starsBtn(0,1);
starsBtn(6,1);
//printing O letter
echo "Let's print an O \n \n";

starsBtn(3,2);
echo " ";
spaceBtn(5,1);
//taking 3 rows
spaceBtn(7,3);
echo " ";

spaceBtn(5,1);

starsBtn(3,2);
echo "Let's print an S \n \n";

starsBtn(3,2);
echo " ";
spaceBtn(5,1);

starsBtn(0,1);
starsBtn(3,1);
starsBtn(6,1);

starsBtn(7,1);
echo " ";
spaceBtn(5,1);

starsBtn(3,2);

echo "Let's print a T \n \n";
starsBtn(0,7);
for($i=1;$i<=6;$i++){
    starsBtn(6,1);

}


echo "Let's print the T using recursive function  \n \n";
starsBtn(0,7);
for ($i=1;$i<=6;$i++){
    starsBtn(6,1);

}
echo "\n \n Let's print an A \n \n";

starsBtn(6,1);
echo "    ";

spaceBtn(3,1);
echo "   ";
spaceBtn(5,1);
starsBtn(2,5);
echo "  ";

spaceBtn(7,1);
echo "  ";

spaceBtn(7,1);
echo "  ";

spaceBtn(7,1);

echo "\n \n Let's print a D \n \n";

starsBtn(0,2);
spaceBtn(4,1);
spaceBtn(5,1);
spaceBtn(6,2);
spaceBtn(5,1);
spaceBtn(4,1);
starsBtn(0,2);

echo "\n \n \n \n";

?>
    <p>eita PHP er baire</p>
</body>
</html>