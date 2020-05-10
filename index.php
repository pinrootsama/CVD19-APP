<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>CVD-19 APP</title>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
    <script>

  
</script>
  </head>
  <body>

  
        <div class="jumbotron jumbotron-fluid bg-dark text-white text-center">
            <div class="container">
                <h1 class="display-4">CVD-19 APP</h1>
                <p>Aplikasi monitoring persebaran covid-19 dengan real time data.</p>
                <p>Telah dikunjungi <?php 
            include ("counter.php");
            echo $kunjungan[0];
            ?> kali</p>
            </div>
        </div>

        

        
        

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <div class="alert bg-dark text-white" role="alert">
                            <h5><center>Seluruh data dibawah ini di Update pertanggal 

                                <div id="hasil"></div>
 
                                        <script>
                                            function tanggal(){
                                                var tanggal = new Date();
                                  document.getElementById("hasil").innerHTML =tanggal ;
                                            };
                                        </script>                            
                            
                            </center></h5>
                        </div>
                
                        
                 
                

        <style type="text/css">
            .box{
                padding: 30px 30px;  
                border-radius: 5px;
            }
        </style>

        <div class="container card bg-dark">
        <div class="card-header text-white"><h3><center>GLOBAL</center></h3></div>    
        <div class="row">
            
                    <div class="col-md-4 mt-3">
                            <div class="bg-danger box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Positif</h5>
                                            <h2 id="data-kasus"></h2>
                                            <h5>Orang</h5>   
                                        </div>
                                
                                        
                                        
                                        
                                      
                                        
                                </div>
                            </div>
                    </div>
                    
                    <div class="col-md-4 mt-3">
                            <div class="bg-warning box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Meninggal</h5>
                                            <h2 id="data-mati">
                                            </h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-4 mt-3">
                            <div class="bg-success box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Sembuh</h5>
                                            <h2 id="data-sembuh"></h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                    </div>          
                </div>
                    </div>
            </div>
        </div>
        


        <!-- region indonesia  -->


        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>

        <style type="text/css">
            .box{
                padding: 30px 30px;  
                border-radius: 5px;
            }
        </style>

        <div class="container card bg-dark">
        <div class="card-header text-white"><h3> <center>INDONESIA</center></h3></div>    
        <div class="row">
            
                    <div class="col-md-4 mt-3">
                            <div class="bg-danger box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Positif</h5>
                                            <h2 id="datapositif-id"></h2>
                                            <h5>Orang</h5>   
                                        </div>
                                
                                        
                                        
                                        
                                        <!-- <i class="fa fa-frown-o fa-5x"></i> -->
                                        
                                </div>
                            </div>
                    </div>
                    
                    <div class="col-md-4 mt-3">
                            <div class="bg-warning box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Meninggal</h5>
                                            <h2 id="datamati-id">
                                            </h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-4 mt-3 mb-3">
                            <div class="bg-success box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Sembuh</h5>
                                            <h2 id="datasembuh-id"></h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>



                    <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                        <div class="alert bg-dark text-white" role="alert">
                            <h5><center>Data Hari Ini</center></h5>
                        </div>
                 
                </div>
            </div>
        </div>



                    <div class="col-md-4 mt-3">
                            <div class="bg-danger box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Positif Hari Ini</h5>
                                            <h2 id="datapositif2-id">
                                            </h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-4 mt-3">
                            <div class="bg-warning box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Meninggal Hari Ini</h5>
                                            <h2 id="datamatihari-id">
                                            </h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-4 mt-3">
                            <div class="bg-success box text-white">
                                <div class="row">
                                        <div class="col-md-10">
                                            <h5>Pasien Aktif</h5>
                                            <h2 id="datapasienaktif-id">
                                            </h2>
                                            <h5>Orang</h5>

                                        </div>
                                </div>
                            </div>
                    </div>


                    <div class="card-footer">
                     
                    </div>
                </div>
                    </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                
                        <div class="alert bg-dark text-white" role="alert">
                            <h5><center>Sumber : <a href="https://heroapps.com/">Heroappku</a>, <a href="https://www.kemkes.go.id/">Kemenkes</a>.</center></h5>
                        </div>
                 
                </div>
            </div>
        </div>



        <footer class="bg-dark text-white text-center mt-3 bt-5 pb-2">
        © 2020 Create by <a href="https://pinrootsama.000webhostapp.com/pinrootsama/"> Pinrootsama</a> All Rights Reserved.
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js""></script>
    
  </body>
</html>



<script>

    $(document).ready(function(){
        // panggil data
        semuaData();
        dataNegara();
        tanggal();
        // dataProvinsi();

        // refresh otomatis
        setInterval(function(){
            semuaData();
            dataNegara();
        }, 3000);

        setInterval(function(){
            tanggal();
        }, 1000);

        function semuaData(){
            $.ajax({ 
                url : 'https://coronavirus-19-api.herokuapp.com/all',
                success : function(data){
                    try {
                        var json = data;
                        var kasus = data.cases;
                        var meninggal = data.deaths;
                        var sembuh = data.recovered;

                        // $('#data-mati').html(meninggal);
                        // $('#data-sembuh').html(sembuh);

                        // var kasus2 = $('data-kasus').val();
                        var	reverse = kasus.toString().split('').reverse().join(''),
	                        ribuan 	= reverse.match(/\d{1,3}/g);
	                        ribuan	= ribuan.join('.').split('').reverse().join('');
                            // document.write(ribuan);
                        $('#data-kasus').html(ribuan);

                        var	reverse2 = meninggal.toString().split('').reverse().join(''),
	                        ribuan2  = reverse2.match(/\d{1,3}/g);
	                        ribuan2	= ribuan2.join('.').split('').reverse().join('');
                            // document.write(ribuan);
                        $('#data-mati').html(ribuan2);

                        var	reverse3 = sembuh.toString().split('').reverse().join(''),
	                        ribuan3  = reverse3.match(/\d{1,3}/g);
	                        ribuan3	= ribuan3.join('.').split('').reverse().join('');
                            // document.write(ribuan);
                        $('#data-sembuh').html(ribuan3);
                        

                        

                        
                    }catch{
                        alert('error data global');
                    }
                        
                    }
                
            });
            }

            function dataNegara(){

                $.ajax({ 
                url : 'https://coronavirus-19-api.herokuapp.com/countries',
                success : function(data){
                    try {
                        var json = data;
                        var html = [];
                        
                        if(json.length > 0){
                            var i;
                            for(i = 0; i< json.length; i++){
                                var dataNegara = json[i];
                                var namaNegara = dataNegara.country;

                                if(namaNegara === 'Indonesia'){
                                    var kasus = dataNegara.cases;
                                    var mati = dataNegara.deaths;
                                    var sembuh = dataNegara.recovered;
                                    var matihariIni = dataNegara.todayDeaths;
                                    var positifhariIni = dataNegara.todayCases;
                                    var aktif = dataNegara.active;

                                    var	reverse = kasus.toString().split('').reverse().join(''),
                                    ribuan 	= reverse.match(/\d{1,3}/g);
                                    ribuan	= ribuan.join('.').split('').reverse().join('');
                                    // document.write(ribuan);
                                    var kasus2 = ribuan;

                                    var	reverse2 = mati.toString().split('').reverse().join(''),
                                    ribuan2 	= reverse2.match(/\d{1,3}/g);
                                    ribuan2	= ribuan2.join('.').split('').reverse().join('');
                                    // document.write(ribuan);
                                    var mati2 = ribuan2;

                                    var	reverse3 = sembuh.toString().split('').reverse().join(''),
                                    ribuan3 	= reverse3.match(/\d{1,3}/g);
                                    ribuan3	= ribuan3.join('.').split('').reverse().join('');
                                    // document.write(ribuan);
                                    var sembuh2 = ribuan3;

                                    var	reverse4 = matihariIni.toString().split('').reverse().join(''),
                                    ribuan4 	= reverse4.match(/\d{1,3}/g);
                                    ribuan4	= ribuan4.join('.').split('').reverse().join('');
                                    // document.write(ribuan);
                                    var matihari2 = ribuan4;

                                    var	reverse5 = positifhariIni.toString().split('').reverse().join(''),
                                    ribuan5 	= reverse5.match(/\d{1,3}/g);
                                    ribuan5	= ribuan5.join('.').split('').reverse().join('');
                                    // document.write(ribuan);
                                    var positif2 = ribuan5;

                                    var	reverse6 = aktif.toString().split('').reverse().join(''),
                                    ribuan6 	= reverse6.match(/\d{1,3}/g);
                                    ribuan6	= ribuan6.join('.').split('').reverse().join('');
                                    // document.write(ribuan);
                                    var aktif2 = ribuan6;





                                    $('#datasembuh-id').html(sembuh2);
                                    $('#datamati-id').html(mati2);
                                    $('#datapositif-id').html(kasus2);
                                    $('#datamatihari-id').html(matihari2);
                                    $('#datapositif2-id').html(positif2);
                                    $('#datapasienaktif-id').html(aktif2);


                                }
                            }
                        }

                        
                    }catch{
                        alert('error data negara');
                    }
                        
                    }

                    
                
            });

            // function dataProvinsi(){
            //     $.ajax({ 
            //     url : 'https://coronavirus-19-api.herokuapp.com/countries',
            //     success : function(data){
            //         try {
            //             var json = data;
            //             var html = [];
                        
            //             if(json.length > 0){
            //                 var i;
            //                 for(i = 0; i< json.length; i++){
            //                     var dataProvinsi = json[i];
            //                     var namaProvinsi = dataProvinsi.Kode_Provi;

            //                     if(namaProvinsi === '32'){
            //                         var kasus = dataProvinsi.Kasus_Posi;
            //                         var sembuh = dataProvinsi.Kasus_Semb;
            //                         var mati = dataProvinsi.Kasus_Meni;
            //                         $('#data-jabar').html('Positif : ' +kasus+ ' orang. <br> Meninggal : ' +mati+ ' orang. <br> Sembuh : ' +sembuh+ ' orang.')
            //                     }
            //                 }
            //             }

                        
            //         }catch{
            //             alert('error');
            //         }
                        
            //         }

                    
                
            // });
                

            // }

            

            }
            
            
        
    });


</script>