function Save(){
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("youremail").value;
    let place = document.getElementById("yourlocation").value;
    let gender = document.getElementById("gender").value;
    let report = document.getElementById("yourreport").value;
    localStorage.setItem("name1",document.querySelector("#fullname").value);
    localStorage.setItem("email1",document.querySelector("#youremail").value);
    localStorage.setItem("location1",document.querySelector("#yourlocation").value);
    localStorage.setItem("report1",document.querySelector("#yourreport").value);
    if(_.isEmpty(fullname)){
        window.alert("HÃY NHẬP ĐẦY ĐỦ THÔNG TIN");
    }
    else if(_.isEmpty(report)){
        window.alert("HÃY NHẬP ĐẦY ĐỦ THÔNG TIN");
    }
    else if(_.isEmpty(email)){
        window.alert("HÃY NHẬP ĐẦY ĐỦ THÔNG TIN");
    }
    else if(_.isEmpty(place)){
        window.alert("HÃY NHẬP ĐẦY ĐỦ THÔNG TIN");
    }
    else if(_.isEmpty(gender)){
        window.alert("HÃY NHẬP ĐẦY ĐỦ THÔNG TIN");
    }
    else{
        window.location.assign("./PhanhoiTC.html");
    }
};
if(document.querySelector("#name")){
    document.querySelector("#name").innerHTML = "Your Name: "+ localStorage.getItem("name1");  
}
if(document.querySelector("#email")){
    document.querySelector("#email").innerHTML = "Your Email: "+ localStorage.getItem("email1");  
}
if(document.querySelector("#location")){
    document.querySelector("#location").innerHTML = "Your Location: "+ localStorage.getItem("location1");  
}
if(document.querySelector("#report")){
    document.querySelector("#report").innerHTML = "Your Report: "+ localStorage.getItem("report1");  
}