// counter
let count = document.querySelector("#count");
let input = document.querySelector("#input");
let div = document.querySelector("#div");
let maxlength = input && input.getAttribute("maxlength");

if (count) {
  count.innerHTML = maxlength;
}

if (input && count) {
  input.oninput = function(){
    count.innerHTML = maxlength - this.value.length;
  };
}

let counter =document.querySelector("#counter");
let des=document.querySelector("#des");
let piv=document.querySelector("#piv");
let max = des && des.getAttribute("maxlength");

if (counter) {
  counter.innerHTML=max;
}

if (des && counter) {
  des.oninput = function(){
      counter.innerHTML= max - (this.value.length);
  };
}

//slide photos
const slider = document.querySelector('#slider');

const leftA = document.querySelector('#left');
const rightA = document.querySelector('#right');

var sectionindex = 0;

document.querySelectorAll('#controls li').forEach(function(indicator, ind) {
  indicator.addEventListener('click', function(){
    sectionindex = ind;
    indicator.document.getElementById("#selected").classList.add('selected');
    slider.style.transform = 'translate(' +(sectionindex) * -94.77 + '%)';
  });
});

leftA.addEventListener('click', function(){
  sectionindex = (sectionindex > 0) ? sectionindex - 1 : 0;
  slider.style.transform = 'translate(' +(sectionindex) * -95.77 + '%)';//-90.77
});

rightA.addEventListener('click', function(){
  sectionindex = (sectionindex < 3) ? sectionindex + 1 : 3;
  slider.style.transform = 'translate(' +(sectionindex) * -95.77 + '%)';
});


//slide annonce
  const slider1 = document.querySelector('#slider1');

  const leftann = document.querySelector('#slideleft');
  const rightann = document.querySelector('#slideright');



 rightann.addEventListener('click', function(){
 
  slider1.style.transform = 'translate('+ -25 + '%)';//-90.77
});















// slice annonce -------------------------
// var spanslide = document.querySelectorAll('#slide');
// var divslide = document.querySelectorAll('#slideAnn');
// var l=0;

// if ( spanslide.length ) {
//   spanslide[1].onclick=()=>{
//       l++;
//       for(var i of divslide)
//       {
//         if(l==0){i.style.left = "0px";}  
//         if(l==1){i.style.left = "-740px";} 
//         if(l==2){i.style.left = "-1480px";} 
//         if(l==3){i.style.left = "-2220px";} 
//         if(l==4){i.style.left = "-2960px";} 
//         if(l>4){l=4;} 
//       }
//   }
//   spanslide[0].onclick = ()=>{
//       l--;
//       for(var i of divslide)
//       {
//         if(l==0){i.style.left = "0px";}  
//         if(l==1){i.style.left = "-740px";} 
//         if(l==2){i.style.left = "-1480px";} 
//         if(l==3){i.style.left = "-2220px";}
//         if(l<0){l=0;} 
//       }
//   }
// }

