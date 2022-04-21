let iOne = document.forms["form"]["Item1"].value;
let iTwo = document.forms["form"]["Item2"].value;
let iThree = document.forms["form"]["Item3"].value;
let s1 = document.getElementById("s1");
let s2 = document.getElementById("s2");
let s3 = document.getElementById("s3");

function validate()
{
  if(iOne < 0 || iTwo <0 || iThree < 0 || (s1.checked == false && s2.checked == false && s3.checked == false)) return false;
}

function reset()
{

}
