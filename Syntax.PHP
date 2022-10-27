<?php
	// Switch Statement Example
	switch ($i) {
    	case "free":
    	    echo "i is free";
    	    break;
    	case "code":
    	    echo "i is code";
    	    break;
    	case "camp":
    	    echo "i is camp";
    	    break;
    	default:
    	    echo "i is freecodecamp";
            break;
	}


<?php

  if (condition) {
    statement1;
    statement2;
  }


<?php

  if (condition) {
    statement1;
    statement2;
  } else {
    statement3;
    statement4;
  }



<?php

  if (condition1) {
    statement1;
    statement2;
  } elseif (condition2) {
    statement3;
    statement4;
  } else {
    statement5;
  }



<?php

  if (condition1) {
      if (condition2) {
        statement1;
        statement2;
      } else {
        statement3;
        statement4;
      }
  } else {
      if (condition3) {
        statement5;
        statement6;
      } else {
        statement7;
        statement8;
      }
  }





<?php

  if (condition1 && condition2) {
    echo 'Both conditions are true!';
  } elseif (condition 1 || condition2) {
    echo 'One condition is true!';
  } else (condition1 xor condition2) {
    echo 'One condition is true, and one condition is false!';
  }
