<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>COVID19 East Africa Visualizer</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }

            .title {
                font-size: 50px;
                text-align: center;
            }

            /*#chartKE, #chartRW, #chartTZ, #chartUG, #chartBI, #chartSS, #chartUS, #chartCN, #chartIT, #chartUK{
                overflow-x: auto;
            }*/

            

            @media only screen and (max-width: 768px) {
                #chartWrapper1, #chartWrapper2 {
                    overflow-x: scroll;
                    overflow-y: hidden;
                    width: 400px;
                }
            }

            .links > a {
                color: #636b6f;
                font-size: 9px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-top: 30px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153610504-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-153610504-2');
        </script>

    </head>
    <body>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataKE = google.visualization.arrayToDataTable(@json($chartDataKE));
                var chartKE = new google.visualization.AreaChart(document.getElementById('chartKE'));
                chartKE.draw(dataKE, {
                    title: 'Corona (COVID19) cases in {{ $countryKE }}',
                    legend: {position: 'bottom'},
                    width: '100%',
                    height: '500',
                    explorer: {axis: 'horizontal'},
                    colors: ['#922529']
                });
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataRW = google.visualization.arrayToDataTable(@json($chartDataRW));
                var chartRW = new google.visualization.AreaChart(document.getElementById('chartRW'));
                chartRW.draw(dataRW, {
                    title: 'Corona (COVID19) cases in {{ $countryRW }}',
                    legend: {position: 'bottom'},
                    width: 1200,
                    height: '500',
                    colors: ['#00A1DE']
                });
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataTZ = google.visualization.arrayToDataTable(@json($chartDataTZ));
                var chartTZ = new google.visualization.AreaChart(document.getElementById('chartTZ'));
                chartTZ.draw(dataTZ, {
                    title: 'Corona (COVID19) cases in {{ $countryTZ }}',
                    legend: {position: 'bottom'},
                    width: 1200,
                    height: '500',
                    colors: ['#1EB53A']
                });
            }
        </script>

       <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataUG = google.visualization.arrayToDataTable(@json($chartDataUG));
                var chartUG = new google.visualization.AreaChart(document.getElementById('chartUG'));
                chartUG.draw(dataUG, {
                    title: 'Corona (COVID19) cases in {{ $countryUG }}',
                    legend: {position: 'bottom'},
                    width: '100%',
                    height: '500'
                });
            }
        </script>

         <!-- <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataBI = google.visualization.arrayToDataTable(@json($chartDataBI));
                var chartBI = new google.visualization.AreaChart(document.getElementById('chartBI'));
                chartBI.draw(dataBI, {
                    title: 'Corona (COVID19) cases in {{ $countryBI }}',
                    legend: {position: 'bottom'},
                    width: '100%',
                    height: '500'
                });
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataSS = google.visualization.arrayToDataTable(@json($chartDataSS));
                var chartSS = new google.visualization.AreaChart(document.getElementById('chartSS'));
                chartSS.draw(dataSS, {
                    title: 'Corona (COVID19) cases in {{ $countrySS }}',
                    legend: {position: 'bottom'},
                    width: '100%',
                    height: '500'
                });
            }
        </script> -->

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataCN = google.visualization.arrayToDataTable(@json($chartDataCN));
                var chartCN = new google.visualization.AreaChart(document.getElementById('chartCN'));
                chartCN.draw(dataCN, {
                    title: 'Corona (COVID19) cases in {{ $countryCN }}',
                    legend: {position: 'bottom'},
                    width: 1200,
                    height: '500',
                    colors: ['#FFFF00']
                });
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataIT = google.visualization.arrayToDataTable(@json($chartDataIT));
                var chartIT = new google.visualization.AreaChart(document.getElementById('chartIT'));
                chartIT.draw(dataIT, {
                    title: 'Corona (COVID19) cases in {{ $countryIT }}',
                    legend: {position: 'bottom'},
                    width: 1200,
                    height: '500',
                    colors: ['#008C45']
                });
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataUS = google.visualization.arrayToDataTable(@json($chartDataUS));
                var chartUS = new google.visualization.AreaChart(document.getElementById('chartUS'));
                chartUS.draw(dataUS, {
                    title: 'Corona (COVID19) cases in {{ $countryUS }}',
                    legend: {position: 'bottom'},
                    width: 1200,
                    height: '500',
                    colors: ['#B22234']
                });
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var dataUK = google.visualization.arrayToDataTable(@json($chartDataUK));
                var chartUK = new google.visualization.AreaChart(document.getElementById('chartUK'));
                chartUK.draw(dataUK, {
                    title: 'Corona (COVID19) cases in {{ $countryUK }}',
                    legend: {position: 'bottom'},
                    width: 1200,
                    height: '500',
                    colors: ['#00247D']
                });
            }
        </script>


        <div class="container-fluid flex-center">
            <div class="content">
                <div class="title m-b-md">
                    COVID19 E. Africa Tracker/Visualizer
                </div>

                <div id="chartWrapper1">
                    <div class="row">
                        <div class="col-md-12" id="chartKE"></div>
                        <div class="col-md-12" id="chartRW"></div>
                        <div class="col-md-12" id="chartTZ"></div>
                        <div class="col-md-12" id="chartUG"></div>
                        <div class="col-md-12" id="chartSS"></div>
                        <div class="col-md-12" id="chartBI"></div>
                    </div>
                </div>

                <div class="title m-b-md">
                    Compare with China, Italy, US and Spain
                </div>

                <div id="chartWrapper2">
                    <div class="row">
                        <div class="col-md-12" id="chartCN"></div>
                        <div class="col-md-12" id="chartIT"></div>
                        <div class="col-md-12" id="chartUS"></div>
                        <div class="col-md-12" id="chartUK"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 links" style="text-align: center; margin-top: 25px;">
                        <a target="_blank" href="https://twitter.com/ibenjaminke">Made with <span style="color: red; font-size: 10px;">&hearts;</span> by Benjamin.</a>
                        <a target="_blank" href="https://github.com/ExpDev07/coronavirus-tracker-api">Data Source: Github.</a>
                        <a href="#">Missing countries have 0 cases.</a>
                    </div>
                </div>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
