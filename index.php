<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
      
        <?php
        
        $box= array(1,2,3,4,5,6,7,8,9,10,11,12,13);
        
              
        $x= $_GET['n'];
        
        echo "Kiez een nummer tussen 1 en 13";
        echo "</br>";
        switch ($x){
            
            
        case 1 :
                
                echo "Ik ben maar weer opgestaan, want dat slapend rijk worden is vannacht weer niet gelukt";
            break;
        
        case 2 :
                
                echo " Rijkdom bestaat niet uit het hebben van veel bezittingen, maar in het hebben van weinig behoeften.";
            break;
        
        case 3 :
                
                echo "We moeten waar mogelijk bezunigen, koste wat het kost";
            break;
        
        case 4 :
                
                echo "Ik wil best leren met geld om te gaan, alleen wil niemand mij dat geven";
            break;
        
        case 5 :
                
                echo "Mijn portemonnee is net een ui, als ik hem open moet ik huilen";
            break;
        
        case 6 :
                
                echo "Ik spaar geen geld, ik spaar mooie momenten";
            break;
             
        case 7 :
                
                echo "Om Windows af te sluiten hoef je niet de gordijnen dicht te doen";
            break;    
            
            
        case 8 :
                
                echo "Je hebt je iPad ingeruild voor een iets grotere, hopelijk doet je vriendin niet hetzelfde";
            break;   
            
        case 9 :
                
                echo "Zij wilde de wereld zien, hij installeerde Google Earth";
            break;   
   
        case 10 :
                
                echo "Tenzij je naam Google is, hou op met te doen alsof je alles weet";
            break;
            
        case 11 :
                
                echo "Facebook is als gearresteerd worden: alles wat je zegt kan en zal tegen je gebruikt worden...";
            break;   
            
        case 12 :
                
                echo "Glasvezel door het riool: daar zit een luchtje aan";
            break;   
            
            
        case 13 :
                
                echo "Op de digitale snelweg kun je ook verongelukken";
            break;
            
            
        }
        
        $text="Glasvezel door het riool: daar zit een luchtje aan";
        
        //$e= $_GET['word'];        
        search();
     
        function search(){
           
            echo strrchr($text,"door");
            
        }
        
        ?>