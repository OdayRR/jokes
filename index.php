<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
      
        <?php
        
        //$box= array(1,2,3,4,5,6,7,8,9,10,11,12,13);
        
              
       echo "Kiez een nummer tussen 1 en 13";
        echo "</br>";

        
        $somenumber= $_GET['n'];
        //$somenumber=4;
        $w= $_GET['m'];

        loopThroughAll($w); 
        
        
        function loopThroughAll($getM){
            for($q = 0; $q < 13; $q++){
                if (strstr (number($q),$getM)) {
                    echo $q ." "." ". number($q);
                    echo"<br>";
                    echo"<br>";
             
                }
            }
        }            

            
          
            
       
       
        echo substr(number($somenumber),0)."<br>";
        
        number($somenumber);
        
       function number($somenumber){
          
          


           switch ($somenumber){
            
            
        case 1 :
                
              return "Ik ben maar weer opgestaan, want dat slapend rijk worden is vannacht weer niet gelukt";
            
        
        case 2 :
                
               return  " Rijkdom bestaat niet uit het hebben van veel bezittingen, maar in het hebben van weinig behoeften.";
            
        
        case 3 :
                
            return "We moeten waar mogelijk bezunigen, koste wat het kost";
            
        
        case 4 :
                
              return   "Ik wil best leren met geld om te gaan, alleen wil niemand mij dat geven";
            
        
        case 5 :
                
                return "Mijn portemonnee is net een ui, als ik hem open moet ik huilen";
            
        
        case 6 :
                
               return "Ik spaar geen geld, ik spaar mooie momenten";
            
             
        case 7 :
                
                return "Om Windows af te sluiten hoef je niet de gordijnen dicht te doen";
              
            
            
        case 8 :
                
                return "Je hebt je iPad ingeruild voor een iets grotere, hopelijk doet je vriendin niet hetzelfde";
           
            
        case 9 :
                
                return "Zij wilde de wereld zien, hij installeerde Google Earth";
              
   
        case 10 :
                
                return "Tenzij je naam Google is, hou op met te doen alsof je alles weet";
            
            
        case 11 :
                
                return "Facebook is als gearresteerd worden: alles wat je zegt kan en zal tegen je gebruikt worden...";
              
            
        case 12 :
                
                return "Glasvezel door het riool: daar zit een luchtje aan";
              
            
            
        case 13 :
                
                return "Op de digitale snelweg kun je ook verongelukken";
            
            
            
        }
        
     }
        
        ?>