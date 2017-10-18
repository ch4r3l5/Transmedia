function myFunction() {
    var x = document.getElementById("sliderOne");
    var currentVal = x.value;
    
        document.getElementById("demo").innerHTML = "Value: " + currentVal;
    
}

function myFunction2() {
    var s1 = $('#sliderOne').val();
    var s2 = $('#sliderTwo').val();
    var s3 = $('#sliderThree').val();
    var s4 = $('#sliderFour').val();
    var s5 = $('#sliderFive').val();
    
    var finalPoints = parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) + parseInt(s5);
    
    document.getElementById("demo").innerHTML = finalPoints;
}

function myFunction3() {
    var s1 = $('#sliderOne').val();
    var s2 = $('#sliderTwo').val();
    var s3 = $('#sliderThree').val();
    var s4 = $('#sliderFour').val();
    var s5 = $('#sliderFive').val();
    
    var f = parseInt(s1) + parseInt(s2) + parseInt(s3) + parseInt(s4) + parseInt(s5);
    
    if (f >= 0 && f <100) {
        document.getElementById("demo").innerHTML = "Lowest score";
    } else if (f >= 100 && f <200) {
        document.getElementById("demo").innerHTML = "Low score";
    } else if (f >= 200 && f <300) {
        document.getElementById("demo").innerHTML = "Medium score";
    } else if (f >= 300 && f <400) {
        document.getElementById("demo").innerHTML = "High score";
    } else if (f >= 400) {
        document.getElementById("demo").innerHTML = "Highest score";
    }  
   
}
