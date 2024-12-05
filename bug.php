function foo(x) {
  if (x === null) {
    return 0;
  }
  return x + 1;
}

function bar() {
  return foo(null) + foo(1); 
}
console.log(bar()); // Output: 2