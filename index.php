<?php 
session_start();
require("db-functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div id="maindiv">
        <div>
            <a href="#" id="backtotop"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
        <section id="first-sec"> 
                <header id="top">
                    <h1 id="logo-kucra">
                        Kucra
                    </h1>
                    <div id="burger">
                    <input class="side-menu" type="checkbox" id="side-menu"/>
                    <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
                    <nav>
                        <ul>
                            <li><a href="placeholder.html">HOME</a></li>
                            <li><a href="placeholder.html">FEATURES</a></li>
                            <li><a href="placeholder.html">CLIENT</a></li>
                            <li><a href="placeholder.html">PRICING</a></li>
                            <li><a href="placeholder.html">FAQ</a></li>
                            <li><a href="placeholder.html">ABOUT</a></li>
                            <li><a href="placeholder.html">BLOG</a></li>
                            <li><a href="placeholder.html">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
                    <div id="social-net">
                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </header>
                <div id="bottom">
                    <section>
                        <h1>
                            We are StartUp Creative Kucra Agency
                        </h1>
                        <p>
                            Carefully crafted after analysing the needs of different industries and the design achieves a great balance between purpose & presentation
                        </p>
                        <form action="traitement-admin.php?action=email" method="post" id="subscribe">
                            <input type="text" name="email" placeholder="Enter your email" >
                            <button type="submit" name="submit">SUBSCRIBE</button>
                        </form>
                    </section>
                    <figure>
                        <img src="img/illustration.svg" alt="illustration-landing">
                    </figure>
                </div>
            </section>
        <main>
            <section id="middle-sec">
                    <h1>
                     Products Features
                    </h1>
                    <p>
                        It is a long established fact that a reader will be of a page when established fact looking at its layout.
                    </p>
            </section>
            <section id="second-sec">
                <div id="design">
                    <i class="fa-solid fa-globe"></i>
                    <h1>
                        Digital Design
                    </h1>
                    <p>
                        Some quick example text to build on the card title and make up the bulk of the card the plateform.
                    </p>
                </div>
                <div id="colors">
                    <i class="fa-solid fa-brush"></i>
                    <h1>
                        Unlimited Colors
                    </h1>
                    <p>
                        Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt laoreet.
                    </p>
                </div>
                <div id="solutions">
                    <i class="fa-solid fa-chess"></i>
                    <h1>
                        Strategy Solutions
                    </h1>
                    <p>
                        Separated the live in Bookmarks grove right at the coast of the Semantics, a large ocean regelialia.
                    </p>
                </div>
            </section>
            <section id="third-sec">
                <div id="team">
                    <h1>
                        We'r dynamic team of talented people of innovative & marketing expert
                    </h1>
                    <p>
                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages of the resulting language.
                    </p>
                </div>
                <div id="heads">
                    <div>
                        <h1>1499+</h1>
                        <p>Completed Projects</p>
                        <figure>
                            <div class="social">
                                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook social-button"></i></a>
                                <a href="https://www.twitter.com"><i class="fa-brands fa-twitter social-button"></i></a>
                                <a href="https://www.skype.com"><i class="fa-brands fa-skype social-button"></i></a>
                            </div>
                            <img src="img/person1.png" alt="photo-anna">
                        </figure>
                        <h2>Anna G. Wilhite</h2>
                        <p>CEO/Founder</p>
                    </div>
                    <div>
                        <h1>1080K</h1>
                        <p>Satisfied Clients</p>
                        <figure>
                            <div class="social">
                                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook social-button"></i></a>
                                <a href="https://www.twitter.com"><i class="fa-brands fa-twitter social-button"></i></a>
                                <a href="https://www.skype.com"><i class="fa-brands fa-skype social-button"></i></a>
                            </div>
                            <img src="img/person2.png" alt="photo-william">
                        </figure>
                        <h2>William S. Blay</h2>
                        <p>CTO/Co-Founder</p>
                    </div>
                    <div>
                        <h1>608</h1>
                        <p>Team Members</p>
                        <figure>
                            <div class="social">
                                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook social-button"></i></a>
                                <a href="https://www.twitter.com"><i class="fa-brands fa-twitter social-button"></i></a>
                                <a href="https://www.skype.com"><i class="fa-brands fa-skype social-button"></i></a>
                            </div>
                            <img src="img/person3.png" alt="photo-maria">
                        </figure>
                        <h2>Maria B. Morales</h2>
                        <p>Web Designer</p>
                    </div>
                    <div>
                        <h1>252</h1>
                        <p>Employees</p>
                        <figure>
                            <div class="social">
                                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook social-button"></i></a>
                                <a href="https://www.twitter.com"><i class="fa-brands fa-twitter social-button"></i></a>
                                <a href="https://www.skype.com"><i class="fa-brands fa-skype social-button"></i></a>
                            </div>
                            <img src="img/person4.png" alt="photo-luke">
                        </figure>
                        <h2>Luke L. Johnston</h2>
                        <p>Web Developer</p>
                    </div>
                </div>
            </section>
            <section id="fourth-sec">
                <h1>
                    Let's get started with Kucra
                </h1>
                <p>
                    They are a good way to get you started if you want to build something similar or use from existing apps which will reuce the cost, effort and time of the developers.
                </p>
                <button>Get Started</button>
            </section>
            <section id="fifth-sec">
                <h1>
                    What your client says
                </h1>
                <p>
                    The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Makrs and devious pulvinar metus molestie sed Semikoli.
                </p>
                <figure>
                    <img src="img/01.png" alt="logo-1">
                    <img src="img/02.png" alt="logo-2">
                    <img src="img/03.png" alt="logo-3">
                    <img src="img/04.png" alt="logo-4">
                    <img src="img/05.png" alt="logo-5">
                </figure>
            </section>
            <section id="sixth-sec">
                <div id="blog1">
                    <figure><img src="img/blog1.png" alt="blog1"><figcaption><p><i class="fa-regular fa-user"></i><b>Calvin Carlo</b></p><p><i class="fa-regular fa-clock"></i>20th March 2021</p></figcaption></figure>
                    <h2>Doing a cross country road trip</h2>
                    <p>We craft digital graphic and dimensional thinking to create category loading brand.</p>
                    <a href="placeholder.html">Read more</a>
                </div>
                <div id="blog2">
                    <figure><img src="img/blog2.png" alt="blog2"><figcaption><p><i class="fa-regular fa-user"></i><b>Ruben Reed</b></p><p><i class="fa-regular fa-clock"></i>01 July 2021</p></figcaption></figure>
                    <h2>New exhibition at our Museum</h2>
                    <p>Even the all-powerful Pointing has no control about the blind almost unorthographic.</p>
                    <a href="placeholder.html">Read more</a>
                </div>
                <div id="blog3">
                    <figure><img src="img/blog3.png" alt="blog3"><figcaption><p><i class="fa-regular fa-user"></i><b>Theresa Sinclair</b></p><p><i class="fa-regular fa-clock"></i>25th July 2021</p></figcaption></figure>
                    <h2>Design your apps in your own way</h2>
                    <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    <a href="placeholder.html">Read more</a>
                </div>
            </section>
            <section id="seventh-sec">
                <div class="maindiv">
                    <h1>We are digital creative Landing Page</h1>
                    <p>The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack of will. Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                    <div class="numdiv">
                        <div>
                            <h2>4957</h2>
                            <p>Happy User</p>
                        </div>
                        <div>
                            <h2>1599</h2>
                            <p>Complete Project</p>
                        </div>
                    </div>
                    <button>Learn More</button>
                </div>
                <figure><img src="img/creativity.png" alt="creativity-logo"></figure>
            </section>
            <section id="eighth-sec">
                <div id="text">
                    <h1>Our Pricing</h1>
                    <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
                <div id="options">
                    <?php 
                    foreach($landing as $pricing){
                        $price = $pricing["prix"] * (1-($pricing["reduction"]/100));
                        $onlineSpace = $pricing["onlinespace"];
                        $onlineSpaceUnit = "MB";
                        if($pricing["onlinespace"] >= 1000){
                            $onlineSpaceUnit = "GB";
                            $onlineSpace = $onlineSpace/1000;
                        }
                        
                        $domain = $pricing["domain"];
                        if($domain == 0){
                            $domain = "Unlimited";
                        }
                        $support = ($pricing["support"]) ? "Yes" : "No";
                        $HiddenFees = ($pricing["hidden_fees"]) ? "Yes" : "No";
                        $SupportMark = ($pricing["support"]) ? "fa-circle-check" : "fa-regular fa-circle-xmark";
                        $HiddenFeesMark = ($pricing["hidden_fees"]) ? "fa-circle-check" : "fa-regular fa-circle-xmark";
                        ?>
                    <div class="card"><h2><?= $pricing["nom_pricing"] ?></h2>
                    <div class="price"><h1><sup>$</sup><?= round($price, 2) ?></h1><p>/month</p></div>
                    <div class="cardbenefits">                        
                            <div class="cardleft">
                                <p><i class="fa-regular fa-circle-check"></i>Bandwidth</p>
                                <p><i class="fa-regular fa-circle-check"></i>Onlinespace</p>
                                <p><i class="fa-regular <?= $SupportMark ?>"></i>Support</p>
                                <p><i class="fa-regular fa-circle-check"></i>Domain</p>
                                <p><i class="fa-regular <?= $HiddenFeesMark ?>"></i>Hidden Fees</p>
                            </div>
                            <div class="cardright">
                                    <p><?= $pricing["bandwidth"]?> GB</p>
                                    <p><?= $onlineSpace ?> <?= $onlineSpaceUnit ?></p>
                                    <p><?= $support ?></p>
                                    <p><?= $domain ?></p>
                                    <p><?= $HiddenFees ?></p>
                                </div>
                            </div>
                            <form action="traitement-admin.php?id=<?= $pricing["id_pricing"] ?>&action=add" method="POST">
                                <button type="submit" name="submit" class="add">Join Now</button>
                            </form>
                        </div>
                        <?php } ?>
                </div>
            </section>
        </main>
        <footer>
            <section>
                <p><a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a><a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a><a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a><a href="https://www.google.com"><i class="fa-brands fa-google-plus-g"></i></a></p>
                <p>Terms & Condition | Privacy Policy | Contact Us</p>
                <p>2022 © Kucra - Landing Page Template by Pichforest</p>
            </section>
        </footer>
    </div>
</body>
</html>