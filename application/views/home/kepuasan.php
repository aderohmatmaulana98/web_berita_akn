<!--Page Title-->

<section class="page-title" style="background-image:url(assets/images/background/featured-2-bg.jpg);">
    <div class="auto-container">
        <h1>Kepuasan Mahasiswa Kriya</h1>
    </div>

    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('home'); ?>">Home > Kepuasan Kriya</a></li>
                        <li class="active">Kepuasan </li>
                    </ul>
                </div>


            </div>
        </div>

</section>

<section class="call-to-action-three" style="background-image:url(assets/images/background/3.jpg);">

    <div class="auto-container">
        <div data-aos="fade-right">
            <div class="row clearfix">

                <center>
                    <style type="text/css">
                    body {
                        font-family: roboto;
                    }
                    </style>

                    <h2>Tutorial Membuat Grafik Dengan Chart.js - www.malasngoding.com</h2>

                    <div style="width: 500px;height: 500px">
                        <canvas id="myChart"></canvas>
                    </div>

                    <script type="text/javascript" src="<?= base_url('assets/js') ?>/Chart.js"></script>
                    <script type="text/javascript" src="<?= base_url() ?>assets/js/Chart.js"></script>
                    <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 23, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                    </script>



                </center>

            </div>
        </div>
    </div>
</section>

<!--Map Section-->
<section class="map-section">
    <div class="map-outer">

        <!--Map Canvas-->
        <div class="map-canvas" <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4964673133286!2d110.35969181372684!3d-7.842992394348865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a564ea4260f97%3A0x89a93db937c4021a!2sAkademi%20Komunitas%20Negeri%20Seni%20Dan%20Budaya%20Yogyakarta!5e0!3m2!1sid!2sid!4v1646893580583!5m2!1sid!2sid"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


    </div>
</section>

</div>
</div>
</div>