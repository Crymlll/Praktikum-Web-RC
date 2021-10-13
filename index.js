function changeColor(value){
    var theme = document.getElementsByClassName("theme")

    if(value == "black"){
        for(let i = 0;i<theme.length; i++){
            theme[i].style.color = 'white'
        }
        document.body.style.backgroundColor = value
    }else{
        for(let i = 0;i<theme.length; i++){
            theme[i].style.color = 'black'
        }
        document.body.style.backgroundColor = value
    }
}

function changeWeather(value){
    var cuaca = document.getElementById("cuaca")

    if(value == "sunny"){
        cuaca.innerHTML = "Cuaca diluar lagi bagus loh!!! langsung aja jalan-jalan"
    }
    else if(value == "rain"){
        cuaca.innerHTML = "Lagi hujan loh diluar, mendingan kerjain tugas aja udh mau uts loh xixixi"
    }
    else if(value == "cloudy"){
        cuaca.innerHTML = "Cuaca berawan, siapin mantel hujan atau payung ya"
    }
    else if(value == "stormy"){
        cuaca.innerHTML = "Lagi banyak petir diluar!!!"
    }
    else if(value == "tornadoes"){
        cuaca.innerHTML = "Awas kebawa tornado!"
    }
    else if(value == "fog"){
        cuaca.innerHTML = "Cuaca berkabut dirumah dulu aja ya"
    }
    else if(value == "snow"){
        cuaca.innerHTML = "Pake jaket tebel ya kalau keluar rumah, lagi ada salju diluar"
    }
}


function factorial(){
    var angka = document.getElementById("angka").value
    var hasil = angka
    console.log(angka)

    for(let i=hasil-1; i>0; i--){
        hasil *= i
    }

    var factorial = document.getElementById("factorial")
    factorial.innerHTML = `The factorial of ${angka} is ${hasil}`
}

