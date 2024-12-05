function foo(x) {
  //Check if x is defined before using it. 
  if (isset($x)){
    if ($x === null) {
      return 0;
    }
    return $x + 1;
  } else{
    return 0; // Or handle the undefined variable appropriately
  }
}

function bar() {
  return foo(null) + foo(1); 
}
console.log(bar()); // Output: 2