

// Portfolio form tab control
function openFirstTab(evt, cityName) {
    document.getElementById("Home").style.display = "block";
    evt.currentTarget.className += " active";
}



function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Portfolio profile picture preview handler
  var loadFile = function(event) {
    var output = document.getElementById('previewPic');
    output.src = URL.createObjectURL(event.target.files[0]);
  };

  // Portfolio theme tab control function
  function activateTab(linkName,content) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById("port-home").style.display = "none";
    document.getElementById('single-port').style.display="none";


    document.getElementById("active-index2").className = "main-nav__item";
    document.getElementById("active-resume").className = "main-nav__item";
    document.getElementById("active-services").className = "main-nav__item";
    document.getElementById("active-portfolio").className = "main-nav__item";
    document.getElementById("active-blog").className = "main-nav__item";
    document.getElementById("active-contact").className = "main-nav__item";

    document.getElementById(content).style.display = "block";
    document.getElementById(linkName).className = "main-nav__item main-nav__item--active";
    
}


// Function to display Single portfolio page 
function openPort(index, url){
    var json = JSON.parse(portJson);
    var i;
    for(i=0; i<json.length; i++)
    {
        if(index==json[i].pos){
            project = json[i].portProjName;
            client = json[i].portProjClient;
            date = json[i].portProjDate;
            descr = json[i].portProjDescr;
            document.getElementById("proj_image").src = url;
        }
    }
document.getElementById('page-portfolio').style.display="none";
document.getElementById('single-port').style.display="block";
// set project details

document.getElementById("project").innerHTML = project;
document.getElementById("date").innerHTML = date;
document.getElementById("client").innerHTML = client;
document.getElementById("descr").innerHTML = descr;

}



    


