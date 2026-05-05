<?php 

/**
 2 >= 2
    true 

 "a" == "ab"
    false 

 2 != 3 && 10 < 33
    true &&  true
       true


 "hello" > "bonjour" 
    true 
  h => 68
  b => 62


 2 ==  "2"
    true 

 2 === "2"
    false 


 (2 != 5 && 3 > 4 ) || 2 <= 14 
 ( true  && false  ) || true
    false            || true
       true 


 2 != 5 && ( 3 > 4  || 2 <= 14 ) 
  true  &&  ( false  || true  )
  true  &&         true
      true 


 2 != 5 && 3 > 4  || 2 <= 14  
  true  &&  false  ||  true 
     false          || true
            true 

 * 
 */