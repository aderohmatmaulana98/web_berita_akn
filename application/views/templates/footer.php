<!--Main Footer-->
<footer class="main-footer footer-style-two">

    <!--Footer Upper-->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-5 col-sm-6 col-xs-12 column">
                    <div class="footer-widget brighton-widget">

                        <div class="sec-title-three">
                            <a href="#" class="apldg-footer-logo"><img src="<?= base_url('assets/images/akn/logo_akn_tulisan_putih.png'); ?>" width="150px" alt=""></a>

                        </div>

                        <div class="text">Akademi Komunitas Negeri Seni Yogyakarta sebagai pusat pengembangan seni
                            yang unggul, handal dan bermartabat dengan berbasis budaya lokal dan berwawasan global.
                        </div>



                    </div>
                </div>



                <div class="col-lg-3 col-sm-6 col-xs-12 column">
                    <div class="sec-title-three">
                        <h2>Hubungi Kami</h2>
                    </div>
                    <div class="footer-widget quick-links">
                        <!-- <div class="links-outer"> -->
                        <div class="row clearfix">


                            <ul>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jl. Parangtritis No.364, Pandes, Panggungharjo, Kec. Sewon, Kabupaten Bantul,
                                    Daerah Istimewa Yogyakarta 55188</span>

                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span>081348000045</span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span>info@aknyogya.ac.id</span>
                                </li>
                            </ul>
                        </div>


                        <!-- </div> -->
                    </div>

                </div>


                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-widget">
                        <div class="sec-title-three">
                            <h2>Peta Lokasi</h2>
                        </div>


                        <div class="newsletter-form newsletter-form-two">
                            <form method="post" action="contact.html">
                                <div class="row clearfix">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4964673133286!2d110.35969181372684!3d-7.842992394348865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a564ea4260f97%3A0x89a93db937c4021a!2sAkademi%20Komunitas%20Negeri%20Seni%20Dan%20Budaya%20Yogyakarta!5e0!3m2!1sid!2sid!4v1646893580583!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <!--Copyright-->
            <div class="text-center">
                <div class="copyright">Copyrights &copy; 2022 AKADEMIK KOMUNITAS NEGERI SENI DAN BUDAYA YOGYAKARTA</div>
            </div>

        </div>
    </div>

</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span>
</div>


<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/revolution.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.fancybox.pack.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.fancybox-media.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.js') ?>"></script>
<script src="<?= base_url('assets/js/isotope.js') ?>"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    const searchBox = document.querySelector(".search-box");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const searchInput = document.querySelector("input");
    const searchData = document.querySelector(".search-data");
    searchBtn.onclick = () => {
        searchBox.classList.add("active");
        searchBtn.classList.add("active");
        searchInput.classList.add("active");
        cancelBtn.classList.add("active");
        searchInput.focus();
        if (searchInput.value != "") {
            var values = searchInput.value;
            searchData.classList.remove("active");
            searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>";
        } else {
            searchData.textContent = "";
        }
    }
    cancelBtn.onclick = () => {
        searchBox.classList.remove("active");
        searchBtn.classList.remove("active");
        searchInput.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.toggle("active");
        searchInput.value = "";
    }
</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script src="<?= base_url('assets/js/jquery.js')  ?>"></script>
<script src="<?= base_url('assest/js/bootstrap.min.js')  ?>"></script>
<script src="<?= base_url('assets/js/jquery.fancybox.pack.js')  ?>"></script>
<script src="<?= base_url('assets/js/jquery.fancybox-media.js')  ?>"></script>
<script src="<?= base_url('assets/js/owl.js')  ?>"></script>
<script src="<?= base_url('assets/js/wow.js')  ?>"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>

<script>
    AOS.init();
</script>

<script>
    var title = "Akademi Komunitas Negeri Seni dan Budaya Yogyakarta";
    var deskripsi = " Akademi Komunitas Negeri Seni dan Budaya Yogyakarta ";
    var currentLocation = window.location;
    var top = (screen.height - 570) / 2;
    var left = (screen.width - 570) / 2;
    var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
    console.log(encodeURI(title + deskripsi));

    function _fb() {

        var url = "https://web.facebook.com/sharer.php?u=" + encodeURI(currentLocation);
        window.open(url, 'NewWindow', params);

    }





    function _twitter() {

        var url = "https://twitter.com/intent/tweet?url=" + encodeURI(currentLocation) + "&text=" + encodeURI(deskripsi);
        window.open(url, 'NewWindow', params);


    }


    function _email() {

        var url = "mailto:?subject=" + encodeURI(title) + "&body=" + encodeURI(currentLocation) + encodeURI(deskripsi);
        window.open(url, 'NewWindow', params);

    }


    function _whatapps() {

        var url = "https://api.whatsapp.com/send?phone=&text=" + encodeURI(title + " " + deskripsi);
        window.open(url, 'NewWindow', params);

    }




    function _gmail() {

        var url = "https://mail.google.com/mail/?view=cm&to=&su=" + encodeURI(title) + "&body=" + encodeURI(
            currentLocation + deskripsi);
        window.open(url, 'NewWindow', params);

    }


    function _telegram() {

        var url = "https://telegram.me/share/url?url=" + encodeURI(currentLocation) + "&text=" + encodeURI(title +
            deskripsi);
        window.open(url, 'NewWindow', params);

    }


    function _line() {

        var url = "https://lineit.line.me/share/ui?url=" + encodeURI(currentLocation) + "&text=" + encodeURI(title +
            deskripsi);
        window.open(url, 'NewWindow', params);

    }



    function _yahoomail() {

        var url = "http://compose.mail.yahoo.com/?to=&subject=" + encodeURI(title) + "&body=" + encodeURI(currentLocation +
            deskripsi);
        window.open(url, 'NewWindow', params);

    }


    function _skype() {

        var url = "https://web.skype.com/share?url=" + encodeURI(currentLocation) + "&text=" + encodeURI(title + deskripsi);
        window.open(url, 'NewWindow', params);














    }
</script>

</body>

</html>