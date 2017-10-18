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

