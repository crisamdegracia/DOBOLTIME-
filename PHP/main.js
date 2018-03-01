console.log('hello World!')



var item = 50;
var i = 0;
while (  i < item )
{

	if ( i % 3 == 0 ) {
		console.log(i);
	}

i++;

}



function isPrime(n){
  var divisor = 2;

  while (n > divisor){
    if(n % divisor == 0){
     return false; 
    }
    else
      divisor++;
		console.log(divisor)
  }
  return true;
}