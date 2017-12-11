function onClick(){
	
	const first =document.querySelector("#first");
	const second  =document.querySelector("#second");
	const third =document.querySelector("#third");
	const four =document.querySelector("#fourth");
	const fifth =document.querySelector("#fifth");
	const sixth =document.querySelector("#sixth");
	const seven =document.querySelector("#seventh");
	const eighth =document.querySelector("#eighth");
	const nineth =document.querySelector("#nineth");
  

     let result =document.querySelector("#result");
     let det = parseInt(first.value)*(parseInt(fifth.value)*parseInt(nineth.value)-parseInt (sixth.value)*parseInt(eighth.value))-
            parseInt(second.value)*(parseInt(four.value)*parseInt(nineth.value)-parseInt (sixth.value)*parseInt(seven.value))+
             parseInt(third.value)*(parseInt(four.value)*parseInt(eighth.value)-parseInt (fifth.value)*parseInt(seven.value));

         result.value = det;
    }
    
    const button = document.querySelector('button');
    button.addEventListener('click', onClick);
