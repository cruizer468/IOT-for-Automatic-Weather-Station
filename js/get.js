setInterval(function(){
        $.ajax({
            url:'/readData.php',
            method:'get',
            data:{},
            success:function(response){
                var arr=$.parseJSON(response);
                var a=arr['field1'];
                var b=arr['field2']
                var c=arr['field3']
                var d=arr['field4']
                var e=arr['field5']
                var f=arr['field6']
                var g=arr['field7']
                var str="Kondisi Cuaca: ";
                var suhu="Suhu: ";
                var pressure="Tekanan Udara: ";
                var height="Ketinggian Alat: ";
                var sun="Intensitas Cahaya: ";
                var smoke="Kualitas Udara: ";
                var rain ="Kelembapan: ";
                $('#suhu').html(suhu.concat(a," C"));
                $('#pressure').html(pressure.concat(b," hpa"));
                $('#height').html(height.concat(c," m"));
                $('#sun').html(sun.concat(d," lux"));
                $('#smoke').html(smoke.concat(e," ppm"));
                $('#raindrop').html(rain.concat(f," Rh"));
                if( g === "Kering"){
                var res = str.concat("Hari Cerah")
                document.getElementById("rainsdrops").innerHTML = res;
                $("#image").attr("src","//ssl.gstatic.com/onebox/weather/64/partly_cloudy.png");
                }
                else if (g === "Basah"){
                    var res = str.concat("Hari Hujan")
                document.getElementById("rainsdrops").innerHTML = res;
                $("#image").attr("src","//ssl.gstatic.com/onebox/weather/64/rain.png");

                }
                 if (e <= 50 ){
                    $('#airkualiti').html(smoke.concat(" Baik"));
                $("#imageair").attr("src","./img/Baik.png");

                }
                  else if (e >50 || e <=100){
                    $('#airkualiti').html(smoke.concat(" Sedang"));
                $("#imageair").attr("src","./img/Sedang.png");

                }
                  else if (e >100 || e <200){
                    $('#airkualiti').html(smoke.concat(" Tidak Sehat"));
                $("#imageair").attr("src","./img/Tidaksehat.png");

                }
                 else if (e >=200 || e <300){
                    $('#airkualiti').html(smoke.concat(" Sangat Tidak Sehat"));
                $("#imageair").attr("src","./img/Sangattidak.png");

                }
                 else if (e >300){
                    $('#airkualiti').html(smoke.concat(" Bahaya"));
                $("#imageair").attr("src","./img/berbahaya.png");

                }
                console.log(arr['field1']);
                console.log(arr['field2']);
                console.log(arr['field3']);
                console.log(arr['field4']);
                console.log(arr['field5']);
                console.log(arr['field6']);
                console.log(arr['field7']);

            }
        });
    },1000);