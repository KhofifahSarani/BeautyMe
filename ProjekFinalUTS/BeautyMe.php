<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Khofifah dan Shakira</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="BeautyMe.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>BeautyMe.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Review">Review</a></li>
                    <li><a href="#Beauty">Beauty</a></li>
                    <li><a href="#Fashion">Fashion</a></li>
                    <li><a href="#Healty">Healty</a></li>
                    <li class="scroll-to-section"><a href="Login.php" class="active">
                        <img src="logout.png"width "30" height = "30" class="button">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk Home -->
        <section id="Home">
            <div class="kiri">
                <h2>take care and protect yourself with love and affection</h2>
                <p>Because beauty is relative. So we don't need to compare all of that from the outside.</p>
                <img src="pretty.jpeg" width "600" height = "600"/>
            </div>
        </section>

        <!-- untuk Review -->
        <section id="Review">
            <div class="kolom">
                <p class="deskripsi">You should not attempt to self diagnose a mental illness!</p>
                <h2>♡♡ Review ♡♡</h2>
                <p>Review dari beberapa influencer terkenal</p>
                <p>Review ini akan membantu kamu menemukan skincare maupun makeup sesuai kebutuhan kulit kamu. Tidak perlu khawatir, dijamin review produk merupakan review terbaik dan terpercaya. Tidak perlu khawatir, dijamin review produk merupakan review terbaik dan terpercaya</p>
                <p><a href="Review.php" class="tbl-biru">Lihat Review</a></p>
            </div>
        </section>

        <!-- untuk Beauty -->
        <section id="Beauty">
            <div class="kiri">
                <div class="kolom">
                    <p class="deskripsi">ALL ABOUT BEAUTY!!!</p>
                    <h2>Beauty Information</h2>
                    <p>How to use and beauty tools</p>
                </div>

                    <div class="Step for your skincare">
                        <p>STEP FOR YOUR SKINCARE</p>
                        <video src="Step Skincare.mp4" controls width "500" height = "500"/>
                    </div>
                    <div class="THE COMPLETE LIST OF MAKEUP BRUSHES AND THEIR USES">
                        <P>THE COMPLETE LIST OF MAKEUP BRUSHES AND THEIR USES</P>
                        <img src="Brush.png" width "500" height = "500"/>
                    </div>
                    <div class="Make up Tutorials">
                        <P>MAKE UP TUTORIALS</P>
                        <video src="Tutorial Make Up.mp4" controls width "500" height = "500"/>
                    </div>
                    <div class="Skincare Schedule">
                        <P>SKINCARE SCHEDULE</P>
                        <img src="Skincare Schedule.JPEG" width "500" height = "500"/>
                        <p>Consistency is key in skincare</p>
                    </div>
                    <div class="TIKTOK DOES MY MAKE UP">
                        <P>DILLA JAIDI</P>
                        <video src="MAKE UP.mp4" controls width "500" height = "500"/>
                    </div>
            </div>
        </section>

        <!-- untuk Fashion -->
        <section id="Fashion">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">FASHION</p>
                    <h2>part of girls</h2>
                    <p>"Fashion is very important. It is life-enhancing and, like everything that gives pleasure, it is worth doing well.”</p>
                   <p>—Vivienne Westwood</p>
                </div>

                <div class="Fashion">
                    <div class="Sweater">
                        <p>SWEATER EDITION</p>
                        <img src="Sweater.jpeg" controls width "500" height = "500"/>
                    </div>
                    <div class="Casual">
                        <P>Casual Outfit</P>
                        <img src="aa.jpeg" width "500" height = "500"/>
                    </div>
                    <div class="GLAM OUTFIT">
                        <P>GLAMOUR</P>
                        <video src="GLAM.mp4" controls width "500" height = "500"/>
                    </div>
                    <div class="inspired outfit">
                        <P>james potter inspired outfit</P>
                        <img src="bb.jpeg" width "500" height = "500"/>
                    </div>
                    <div class="BLACK OR WHIE">
                        <P>TEAM BLACK OR WHITE??</P>
                        <video src="BLACK OR WHITE.mp4" controls width "500" height = "500"/>
                    </div>
                    <div class=BAG">
                        <P>The Complete Bag Wardrobe — The Capsule Project</P>
                        <img src="bag.jpeg" width "500" height = "500"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk Healty -->
        <section id="Healty">
            <div class="kiri">
                <div class="kolom">
                    <p class="deskripsi">HEALTY IS BEAUTY</p>
                    <h2>Take Care of Your Body!!!</h2>
                    <p>To be beautiful, we not only take care of it from the outside but also from the inside, so we must live a healthy lifestyle because healthy living is important!!!.</p>
                </div>

                <div class="Healty">
                    <div class="SLEEP">
                        <img src="ff.jpeg"/>
                        <p>sleep!! This natural beauty tip will definitely come to you naturally and don’t you just love doing that? 
                            Getting proper sleep helps you to rejuvenate and while you are sleeping your skin is in its repairing mode. 
                            So get that night cream or Hyaluronic acid (we’d totally recommend) and get that good 8 hours of sleep every night!</p>
                    </div>
                    <div class="Not all kind of fats are bad">
                        <img src="food.jpeg"/>
                        <p>Not all kind of fats are bad, some do an amazing job at being beneficial to your body. 
                            Good fats actually help to make your skin look younger and radiant. 
                            Tips for healthy skin surely involve the intake of good fats like avocado, olive oil, flax seeds, fishes, nuts, etc.</p>
                    </div>
                    <div class="Exercising">
                        <img src="gg.jpeg"/>
                        <p>Exercising is obviously one of the best ways to sweat out the impurities and toxins. 
                            Heard about post-workout glow? It’s not a myth. 
                            When you workout, your blood circulation gets regulated and hence adds a healthy glow to your face. 
                            This isn’t just a tip for healthy skin but it also helps with total body regulation while you fit and active.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>KHOFIFAH SARANI</h3>
                    <h3>SHAKIRA NURANISSA A</h3>
                    <p>TEAM WORK</p>
                </div>
                <div class="footer-section">
                    <h3>EMAIL ADDRESS</h3>
                    <p>shakira.nuranissaaurellia.te20@mhsw.pnj.ac.id</p>
                    <p>khofifah.sarani.te20@mhsw.pnj.ac.id</p>
                </div>
    
</body>
</html>