<?php      
$num=50;      
switch($num){      
case $num>10 && $num<20:      
echo("number is between 10 to 20");      
break;      
case $num>20 && $num<30:      
echo("number is between 20 to 30");      
break;      
case $num>30 && $num<40:      
echo("number is between 30 to 40");      
break;      
default:      
echo("number is out of declare range");      
}     
echo "<br>";
?>  


<!-- Switch statement with character -->
<?php      
    $ch = 'E';  
    switch ($ch)  
    {     
        case 'a':   
            echo "It is vowel";  
            break;  
        case 'e':   
            echo "It is vowel";  
            break;  
        case 'i':   
            echo "It is vowel";  
            break;  
        case 'o':   
            echo "It is vowel";  
            break;    
        case 'u':   
            echo "It is vowel";  
            break;  
        case 'A':   
            echo "It is vowel";  
            break;  
        case 'E':   
            echo "It is vowel";  
            break;  
        case 'I':   
            echo "It is vowel";  
            break;  
        case 'O':   
            echo "It is vowel";  
            break;  
        case 'U':   
            echo "It is vowel";  
            break;  
        default:   
            echo "It is consonant";  
            break;  
    }  
    echo"<br>";
?>    
<!-- PHP switch statement with String  -->
<?php      
    $ch = "B.E.";  
    switch ($ch)  
    {     
        case "BA":   
            echo "BCA is 3 years course";  
            break;  
        case "Bsc":   
            echo "Bsc is 3 years course";  
            break;  
        case "B.Tech":   
            echo "B.Tech is 4 years course";  
            break;  
        case "B.Arch":   
            echo "B.Arch is 5 years course";  
            break;  
        case "B.E.":
            echo "BE is 4 year course";
            break;
        default:   
            echo "Wrong Choice";  
            break;  
    }  
    echo "<br>";
?>    

<!-- PHP nested switch statement -->
<?php      
    $Food = "Pizza";                   
        $type = "Chicago Pizza";    
        switch( $Food )    
        {    
            case "Pizza":    
                switch( $type )     
                {    
                    case "Chicago Pizza":    
                           echo "price is 180 rupees.";   
                        break;    
                    case "Greek Pizza":    
                           echo "price is 170 rupees.";    
                        break; 
                    default:   
                        echo "Wrong Choicee";  
                        break;          
                }    
                break;    
            case "Sandwich":    
                switch( $type )     
                {    
                    case "Grilled cheese sandwich":    
                        echo "price is 200 rupees.";  
                        break;    
                    case "veg sandwich":    
                           echo "price is 150 rupees.";  
                        break; 
                    default:   
                        echo "Wrong Choice";  
                        break;    
                }    
                break;    
            case "burger":    
                switch( $type )     
                {    
                    case "Veggie burger":    
                        echo "price is 100 rupees.";  
                        break;    
                    case "Cheese burger":    
                           echo "price is 120 rupees.";  
                        break;  
                        default:   
                        echo "Wrong Choice";   
                        break;   
                       
                }   
                default:   
                echo "Wrong Choice";  
                break;  
              
        }  
?>    

