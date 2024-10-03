<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Icon Title Website -->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link rel="stylesheet" href="icons/remixicon.css">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>E-Voting BEM UNPERBA</title>
    </head>
    <body>        
        <header class="header" id="header">
            <nav class="nav container">
                <span class="nav__logo">
                    <i class="ri-archive-line"></i> Pemilu BEM UNPERBA
                </span>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#history" class="nav__link">History</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#vote" class="nav__link">Quick Count</a>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark Mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets/img/home1.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle"><b> SELAMAT DATANG </b></span>
                        <h1 class="home__data-title">di Aplikasi Pemilu <br> Berbasis Website <b> <br> BEM UNPERBA</b></h1>
                    </div>

                    <div class="home__social">
                        <a href="https://vm.tiktok.com/ZSLcKhBe8/" target="_blank" class="home__social-link click">
                            <i class="ri-tiktok-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/bemunperba/" target="_blank" class="home__social-link click">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/@bemunperba4721" target="_blank" class="home__social-link click">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title">Univesitas Perwira Purbalingga</span>
                            <a href="https://www.unperba.ac.id" target="_blank" class="button button--flex button--link home__info-button click">
                                Kunjungi <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <div class="home__info-overlay">
                            <img src="assets/img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PERJALANAN ====================-->
            <section class="about section" id="history">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Perjalanan Awal <br><b>BEM UNPERBA</b> </h2>
                        <p class="about__description">Pada pertengahan 2020 tepat ketika tahun ke-2 akademik dimulai,
                            mulai dilakukan banyak kegiatan oleh mahasiswa yang kemudian melahirkan berbagai unit kegiatan dan himpunan
                            mahasiswa. Universitas tentunya memerlukan organisasi mahasiswa yang mampu menghubungkan seluruh
                            kegiatan dan himpunan dengan baik, maka dari itu dibentuklah BEM UNPERBA.
                        </p>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/history1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/history2.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== KABINET ====================-->
            <section class="discover section" id="about">
                <h2 class="section__title">Kabinet Besar <br> <b>BEM UNPERBA</b> </h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== KABINET 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/about1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Abstraksi</h2>
                                <span class="discover__description">Kabinet 2020/2022</span>
                            </div>
                        </div>

                        <!--==================== KABINET 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/about2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Kencana</h2>
                                <span class="discover__description">Kabinet 2022/2023</span>
                            </div>
                        </div>

                        <!--==================== KABINET 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/about3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Dirandra</h2>
                                <span class="discover__description">Kabinet 2023/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PENGALAMAN ====================-->
            <section class="experience section">
                <h2 class="section__title">Pengalaman Bersama <br> <b>BEM UNPERBA</b> </h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">3</h2>
                            <span class="experience__description">Tahun <br> jabatan </span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">75</h2>
                            <span class="experience__description">Total anggota <br> kabinet besar</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">250+</h2>
                            <span class="experience__description">Postingan <br> media sosial</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/experience1.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/experience2.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">Tentang Kami</h2>

                <div class="video__container container">
                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/tentang.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PEMILU RAYA ====================-->
            <section class="paslon section" id="vote">
            <h2 class="section__title">Hasil Quick Count</h2>
          
            <div class="chartjs">
            <?php
            include_once "sambungan.php";
            $jmlsuara  = mysqli_query($koneksi, "SELECT jml_suara FROM tb_paslon ORDER BY id_paslon");
            $nama       = mysqli_query($koneksi, "SELECT nama FROM tb_paslon ORDER BY id_paslon");
            ?>
                <canvas id="piechart" width="50" height="50"></canvas>
            </div>
            
            <div class="card">
                <?php
                include_once "sambungan.php";
                $sql1="SELECT COUNT(*) AS pemilihaktif FROM tb_mhswa";
                $query1=mysqli_query($koneksi,$sql1);
                while($r1=mysqli_fetch_array($query1)){
                echo '<div class="stat">';
                echo    '<h3 class="number-h1">' .$r1['pemilihaktif']. '</h3>';
                echo    '<p class="jdul">Jumlah Pemilih Aktif</p>';
                echo '</div>';
                }
                $sql2="SELECT COUNT(*) AS suaramasuk FROM tb_datapemilu";
                $query2=mysqli_query($koneksi,$sql2);
                while($r2=mysqli_fetch_array($query2)){
                echo '<div class="stat">';
                echo    '<h3 class="number-h1">' .$r2['suaramasuk']. '</h3>';
                echo    '<p class="jdul">Jumlah Suara Masuk</p>';
                echo '</div>';
                }     
                $sql3="SELECT (SELECT COUNT(*) FROM tb_mhswa) - (SELECT COUNT(*) FROM tb_datapemilu) AS belumpilih";
                $query3=mysqli_query($koneksi,$sql3);
                while($r3=mysqli_fetch_array($query3)){
                echo '<div class="stat">';
                echo    '<h3 class="number-h1">' .$r3['belumpilih']. '</h3>';
                echo    '<p class="jdul">Jumlah Belum Memilih</p>';
                echo '</div>';
                }
                ?>
            </div>

            <!-- <div class="paslon__container">
                <div class="paslon__group">
                <?php
                include_once "sambungan.php";
                $sqljs="SELECT sum(jml_suara) as jsuara FROM tb_paslon";
                $queryjs=mysqli_query($koneksi,$sqljs);
                $rjs=mysqli_fetch_array($queryjs);

                $sql="SELECT * FROM tb_paslon ORDER BY nomor";
                $query=mysqli_query($koneksi,$sql);
                while($r=mysqli_fetch_array($query)){
                echo '<div class="paslon__profile">';
                echo '<center>';
                //echo "<h3>Nomor ".$r['nomor']."</h3>";
                echo "<h3>".$r['nama']."</h3>";
                echo '<br><img src="gambar/paslon/'.$r['foto'].'" class="img-circle" id="img-about'.$r['nomor'].'">';
                //echo "<h2>".round(($r['jml_suara']/$rjs['jsuara']*100),2)."%</h2>";
                //echo "<h3>".$r['jml_suara']." suara</h3>";
                echo '</center>';
                //echo '<br><b>VISI:</b>';
                //echo '<h5>'.$r['visi'].'</h5>';
                //echo '<b>MISI:</b>';
                //echo "<h5>".$r['misi']."</h5>";
                echo '</div>';
                }
                ?>
                </div>
            </div> -->
            </section>

            <!--==================== LOGIN ====================-->
            <section class="login section">
                <div class="login__container container grid">
                    <h2 class="section__title login__title">Tentukan Pilihanmu <br> Sekarang!</h2>
                    <p class="login__description">Login terlebih dahulu untuk memilih kandidat,
                        silahkan hubungi Admin apabila belum memiliki akun.
                    </p>

                    <div class="login__form">
                        <a href="mahasiswa/login-mhs.php" target="_blank" class="button__mhs"><i class="ri-user-line button__icon"></i>
                            <br> Masuk sebagai Mahasiswa </a>
                        <a href="admin/login-adm.php" target="_blank" class="button__adm"><i class="ri-admin-line button__icon"></i>
                            <br> Masuk sebagai Admin </a>
                    </div>
                </div>
            </section>

            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsor1.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsor2.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsor3.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsor4.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Quote</h3>
                        <p class="footer__description"><b>Pemilihan</b> bukanlah tentang <br><b>Pemimpin</b> berikutnya, 
                            ini tentang <br><b>Generasi</b> selanjutnya.
                        </p>
                        <div>
                            <a href="https://vm.tiktok.com/ZSLcKhBe8/" target="_blank" class="footer__social">
                                <i class="ri-tiktok-fill click"></i>
                            </a>
                            <a href="https://www.instagram.com/bemunperba/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill click"></i>
                            </a>
                            <a href="https://www.youtube.com/@bemunperba4721" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill click"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Contact for more information!</h3>
                        
                </div>
            </div>
            <div class="footer__rights">
                <p class="footer__copy"><b>&copy; BEM UNPERBA</b> Kabinet 2023/2024.</p>
                <div class="footer__terms">
                    <span class="footer__terms-link">Version 1.0</span>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== CHART JS ===============-->
        <script src="assets/js/Chart.js"></script>
        
        <!--=============== QUICK COUNT ===============-->
        <script  type="text/javascript">
        var ctx = document.getElementById("piechart").getContext("2d");
        var data = {
                    labels: [<?php while ($p = mysqli_fetch_array($nama)) { echo '"' . $p['nama'] . '",';}?>],
                    datasets: [
                    {
                    label: "Quick Count",
                    data: [<?php while ($p = mysqli_fetch_array($jmlsuara)) { echo '"' . $p['jml_suara'] . '",';}?>],
                    backgroundColor: [
                        '#29B0D0',
                        '#2A516E',
                        '#F07124',
                        '#CBE0E3',
                        '#979193'
                    ]
                    }
                    ]
                    };

        var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: data,
                        options: {
                            responsive: true
                        }
                    });

        </script>

        <!--=============== MAIN JS ===============-->
        <script>
            /*==================== SHOW MENU ====================*/
            const navMenu = document.getElementById('nav-menu'),
                navToggle = document.getElementById('nav-toggle'),
                navClose = document.getElementById('nav-close')

            /*===== MENU SHOW =====*/
            /* Validate if constant exists */
            if(navToggle){
                navToggle.addEventListener('click', () =>{
                    navMenu.classList.add('show-menu')
                })
            }

            /*===== MENU HIDDEN =====*/
            /* Validate if constant exists */
            if(navClose){
                navClose.addEventListener('click', () =>{
                    navMenu.classList.remove('show-menu')
                })
            }

            /*==================== REMOVE MENU MOBILE ====================*/
            const navLink = document.querySelectorAll('.nav__link')

            function linkAction(){
                const navMenu = document.getElementById('nav-menu')
                // When we click on each nav__link, we remove the show-menu class
                navMenu.classList.remove('show-menu')
            }
            navLink.forEach(n => n.addEventListener('click', linkAction))


            /*==================== CHANGE BACKGROUND HEADER ====================*/
            function scrollHeader(){
                const header = document.getElementById('header')
                // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
                if(this.scrollY >= 100) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
            }
            window.addEventListener('scroll', scrollHeader)

            /*==================== SWIPER DISCOVER ====================*/
            let swiper = new Swiper(".discover__container", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true,
                spaceBetween: 32,
                coverflowEffect: {
                    rotate: 0,
                },
            })

            /*==================== VIDEO ====================*/
            const videoFile = document.getElementById('video-file'),
                videoButton = document.getElementById('video-button'),
                videoIcon = document.getElementById('video-icon')

            function playPause(){ 
                if (videoFile.paused){
                    // Play video
                    videoFile.play()
                    // We change the icon
                    videoIcon.classList.add('ri-pause-line')
                    videoIcon.classList.remove('ri-play-line')
                }
                else {
                    // Pause video
                    videoFile.pause(); 
                    // We change the icon
                    videoIcon.classList.remove('ri-pause-line')
                    videoIcon.classList.add('ri-play-line')

                }
            }
            videoButton.addEventListener('click', playPause)

            function finalVideo(){
                // Video ends, icon change
                videoIcon.classList.remove('ri-pause-line')
                videoIcon.classList.add('ri-play-line')
            }
            // ended, when the video ends
            videoFile.addEventListener('ended', finalVideo)


            /*==================== SHOW SCROLL UP ====================*/ 
            function scrollUp(){
                const scrollUp = document.getElementById('scroll-up');
                // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
                if(this.scrollY >= 200) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
            }
            window.addEventListener('scroll', scrollUp)

            /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
            const sections = document.querySelectorAll('section[id]')

            function scrollActive(){
                const scrollY = window.pageYOffset

                sections.forEach(current =>{
                    const sectionHeight = current.offsetHeight
                    const sectionTop = current.offsetTop - 50;
                    sectionId = current.getAttribute('id')

                    if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
                        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
                    }else{
                        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
                    }
                })
            }
            window.addEventListener('scroll', scrollActive)

            /*==================== SCROLL REVEAL ANIMATION ====================*/
            const sr = ScrollReveal({
                distance: '60px',
                duration: 2800,
                // reset: true,
            })


            sr.reveal(`.home__data, .home__social-link, .home__info,
                    .discover__container,
                    .experience__data, .experience__overlay,
                    .paslon__container,
                    .place__card,
                    .sponsor__content,
                    .footer__data, .footer__rights`,{
                origin: 'top',
                interval: 100,
            })

            sr.reveal(`.about__data, 
                    .video__description,
                    .login__description`,{
                origin: 'left',
            })

            sr.reveal(`.about__img-overlay, 
                    .video__content,
                    .login__form`,{
                origin: 'right',
                interval: 100,
            })

            /*==================== DARK LIGHT THEME ====================*/ 
            const themeButton = document.getElementById('theme-button')
            const darkTheme = 'dark-theme'
            const iconTheme = 'ri-sun-line'

            // Previously selected topic (if user selected)
            const selectedTheme = localStorage.getItem('selected-theme')
            const selectedIcon = localStorage.getItem('selected-icon')

            // We obtain the current theme that the interface has by validating the dark-theme class
            const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
            const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

            // We validate if the user previously chose a topic
            if (selectedTheme) {
            // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
            document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
            themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
            }

            // Activate / deactivate the theme manually with the button
            themeButton.addEventListener('click', () => {
                // Add or remove the dark / icon theme
                document.body.classList.toggle(darkTheme)
                themeButton.classList.toggle(iconTheme)
                // We save the theme and the current icon that the user chose
                localStorage.setItem('selected-theme', getCurrentTheme())
                localStorage.setItem('selected-icon', getCurrentIcon())
            })
        </script>
    </body>
</html>