<?php
// PHP Program for nth
// Catalan Number
 
// A recursive function to
// find nth catalan number
function catalan($n)
{
     
    // Base case
    if ($n <= 1)
        return 1;
 
    // catalan(n) is sum of
    // catalan(i)*catalan(n-i-1)
    $res = 0;
    for($i = 0; $i < $n; $i++)
        $res += catalan($i) *
                catalan($n - $i - 1);
 
    return $res;
}
 
// Driver Code
for ($i = 0; $i < 10; $i++)
    echo catalan($i), " ";
 
// This code is cheeshan
?>
