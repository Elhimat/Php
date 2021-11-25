<?php

declare (STRICT_TYPES=1);

function sparaNamn(string $namn):void {
    
    //sätter cokkien 'namn' till värdet på inparametern
   setcookie ('namn', $namn);
   
   return;
   
}
/*returnerar ett tärningskast med en vanlig tärning*/
function rullaTarning():int {
    $varde= random_int(1, 6);
            
    return $varde;
}
/**
 * Funktion för att avgöra vilka täningar som ska slås om
 * @param array $post elementet tarning _$=on betyder att tärningen ska slås om
 * 
 * @return array 5 heltal med tärningnas värden
 *
 */
function slaOmTarningar(array $post):array {
    $ret=[];
    //Loopa igenom alla tärningarn
    for($i=0;$i<5;$i++) {
        if(isset($post["tarning_$i"])) {
            //Slå om tärningen
            $ret[$i]=rullaTarning();
        }else {
            //behåll tärningaens värde (för om till heltal)
            $ret[$i]=(int) $post["t_$i"];
        }
    }
    //returnera tärningarnas nya värden
    return $ret;
}


function utvarderaTarningar(array $tarning): array {
    switch(count(array_count_values($tarning))) {
    case 1:
        return ["resultat" => "Yatzy!", "varde"=>50];
    case 2:
        if(raknaFyrtal(array_count_values($tarning))!==0) {
         return ["resultat" => "Fyrtal", "varde"=>raknaFyrtal(array_count_values($tarning))];   
        } else { 
            return ["resultat" => "Kåk", "varde"=>raknaKak(array_count_values($tarning))];
        }
    case 3:
        if(raknaTretal(array_count_values($tarning))!==0) {
         return ["resultat" => "Tretal", "varde"=>raknaTretal(array_count_values($tarning))];   
        }else {
          return ["resultat" => "Två par", "varde"=>raknaTvapar(array_count_values($tarning))];  
        }  
        
    case 4:
        return ["resultat" => "Par", "varde"=>raknaPar(array_count_values($tarning))];
        break;
    

    case 5: 
       if(raknaLitenStege(array_count_values($tarning))==15) {
         return ["resultat" => "Liten stege", "varde"=>raknaLitenStege(array_count_values($tarning))];   
        }elseif  (raknaStorStege(array_count_values($tarning))==20) {
          return ["resultat" => "Stor stege", "varde"=>raknaStorStege(array_count_values($tarning))];  
        } else {
          return ["resultat" => "Chans", "varde"=>raknaChans(array_count_values($tarning))];
        } 
        
        
       break;
       default;
       break;
       
        
        
}    
    return ["resultat"=>"Par", "varde"=>7];
}

function raknaPar(array $values):int {
    foreach ($values as $ogon => $antal) {
        if($antal==2) {
            return 2*$ogon;
    }      
   }
   return 0;
} 
   function raknaFyrtal(array $values):int {
    foreach ($values as $ogon => $antal) {
        if($antal==4) {
            return 4*$ogon;
    }
    
     }
    return 0;
}

function raknaTretal(array $values):int {
    foreach ($values as $ogon => $antal) {
        if($antal==3) {
            return 3*$ogon;
    }
    
     }
    return 0;
}

function raknaTvapar(array $values):int {
    $summa=0;
    foreach ($values as $ogon => $antal) {
        if($antal==2) {
        $summa += $ogon*$antal; 
    }
    
     }
    return $summa;
}

function raknaKak(array $values): int {
    $summa=0;
    foreach ($values as $ogon=>$antal) {
        $summa += $ogon*$antal;
    }
    return $summa;
}

function raknaLitenStege(array $values): int {
    $summa=0;
    foreach ($values as $ogon=>$antal) {
        $summa += $ogon*$antal;
    }
    
    return $summa;
}


function raknaStorStege(array $values): int {
    $summa=0;
    foreach ($values as $ogon=>$antal) {
        $summa += $ogon*$antal;
    }
    
    if ($summa==20);{
        
    }
    return $summa;
}

function raknaChans(array $values): int {
    $summa=0;
    foreach ($values as $ogon=>$antal) {
        $summa += $ogon*$antal;
    }
    return $summa;
}


