 <?php 
	include 'con1.php';
	if(isset($_POST['btn_submit']))
	{
		extract($_POST);
		$insert = mysqli_query($x,"insert into subscribe_form ( Email ) values( '$s_mail'  )") or die(mysqli_error($x));
		if($insert)
			{
				echo "Data Inserted Sucessfully";
			}
		else
		{
			echo "Data insert failed";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Guide Web Application </title>
    <link rel="icon" href="./assets/files/logo.png">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>

    <!-- Background Video & Header -->

    <div class="banner">
        <video src="./assets/files/bgvid.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home">
            <nav>
                <img src="./assets/files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels">
                <ul class="navbar">
                    <li>
                        <a href="#home">Home</a>
                        <a href="#package">Packages</a>
                        <a href="locations.html">Locations</a>
                        <a href="./info.html">About Us</a>
                        <a href="./contact.php">Contact Us</a>
                    </li>
                </ul>
                </form>
            </nav>

            <div class="title">
                <h1>Tourist Guide</h1>
                <p>Plan your trip with us and travel around the world with the most affordable packages!</p>
                <p> Tap on below Button To Booking </p>

                <!-- <div class="wrapper"> -->
                    <!-- <form action="#">
                        <div class="h5 font-weight-bold text-center mb-3">Search your Destination</div>
                        <div class="destination">
                            <label for="city">Enter your destination</label>
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="destination">
                            <label for="city">Enter your date</label>
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="date" class="form-control" placeholder="Select your date">
                        </div>
                        <div class="form-group">
                            <div class="lable_total flex">
                                  <label class="destination" for="price">Max Price : <span id="result">2500</span> 
                                  </label>
                            </div>
                            <input id="mySlider" type="range" min="0" max="10000" value="2500">
                            <script>
                                mySlider.oninput = showSliderValue;
                                function showSliderValue() {
                                    result.innerText = this.value;
                                }
                            </script>
                        </div>
                    </form> -->
                <!-- </div> -->

                <a href="./booking.php" placeholder="Enter Here To Register" class="button">
                    <span class="material-symbols-outlined">
                        how_to_reg
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Services -->

    <section class="container">
        <div class="text">
            <h2>We have the best services available for you!</h2>
        </div>
        <div class="rowitems">

            <div class="container-box">
                <div class="container-image">
                    <img src="./assets/files/1a.jpg" alt="Flight Services">
                </div>
                <h4>Flight Services</h4>
                <p>Arrival and Departure</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./assets/files/2a.jpg" alt="Food Services">
                </div>
                <h4>Food Services</h4>
                <p>Catering</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./assets/files/3a.jpg" alt="Travel Services">
                </div>
                <h4>Travel Services</h4>
                <p>Pick-up/drop</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./assets/files/4a.jpg" alt="Hotel Services">
                </div>
                <h4>Hotel Services</h4>
                <p>Check-in/out</p>
            </div>
        </div>
    </section>

    <!-- Packages -->

    <section class="package" id="package">
        <div class="package-title">
            <h2>Packages</h2>
        </div>

        <div class="package-content">
            <div class="text-block">
                <h3>Best Selling Destinations</h3>
            </div>

            <a href="./package.html#2700">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/p1.jpg" alt="">
                        <h3>Starting at Rs.2,700 </h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#4999">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/p2.jpg" alt="">
                        <h3>Starting at Rs.4,999</h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#9999">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/p3.jpg" alt="">
                        <h3>Starting at Rs.9,999</h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#30000">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/p4.jpg" alt="">
                        <h3>Starting at Rs.30,000</h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#37700">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/pac1.jpeg" alt="">
                        <h3>Starting at Rs.37,700/-</h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#47500">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/pac1.jpg" alt="">
                        <h3>Starting at Rs.47,500/-</h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#58500">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/pac3.jpg" alt="">
                        <h3>Starting at Rs.58,500/-</h3>
                    </div>
                </div>
            </a>

            <a href="./package.html#59500">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/pac7.jpg" alt="">
                        <h3>Starting at Rs.59,500/-</h3>
                    </div>
                </div>
            </a>
            <a href="./package.html#59500">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/l3.jpg" alt="">
                        <h3>Starting at Rs.65,500/-</h3>
                    </div>
                </div>
            </a>

        </div>
    </section>

    <section>
        <br><br>
        <div class="pack4-content">
            <div style="text-align:center">
                <button type="button" class="btn btn-primary"><a href="https://www.ixigo.com/flights?utm_source=bing&utm_medium=paid_search_bing&utm_campaign=Generic_Search_Desktop_Sept&utm_source=Bing&utm_medium=paid_search_Bing&utm_campaign=generic_search_sept_flights&msclkid=f5c37dda45df12915a91183554d68149&utm_term=online%20flight%20booking%20sites&utm_content=Flight%20Booking"><JavaBlink>Book Now</JavaBlink></a></button>
            </div>
        </div><br><br>
    </section>

    <section class="package2" id="package">
        <div class="pack5-content">

            <div class="text-block">
                <h3>Bestsellers at EPIC Discounts</h3>
                <p>Grab our top-selling packages at unbelievable prices. Get 50% OFF on top sightseeing's , Free E-Visa
                    & more!!</p>
            </div>
            <a href="https://www.tripadvisor.in/Attractions-g294200-Activities-Egypt.html">
            <div class="box">
                <div class="image">
                    <img src="./assets/files/pack5.1.jpg" alt="">
                    <h3>Egypt</h3>
                </div>
            </div>
                            </a>

            <div class="box">
                <div class="image">
                    <img src="./assets/files/pack5.2.jpg" alt="">
                    <h3>Vietnam</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/files/pac2.3.jpg" alt="">
                    <h3>Karala</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/files/pac2.4.webp" alt="">
                    <h3>Bali</h3>
                </div>
            </div>
        </div>
    </section><br><br>

    <section class="package2" id="package">

        <div class="package2-content">
            <div class="text-block">
                <h3>Jackpot Deals on Top Selling Packages in INDIA</h3>
                <p>Save extra with our exclusive deals!</p>
            </div>

            <a href="package.html">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/pac9.jpg" alt="">
                        <h3> Mahabaleshwar </h3>
                    </div>
                </div>
            </a>

            <div class="box">
                <div class="image">
                    <img src="./assets/files/pack2.2.jpg" alt="">
                    <h3>Goa</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/files/pac2.3.jpg" alt="">
                    <h3>Kerala</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./assets/files/pac10.jpg" alt="">
                    <h3>Statue Of Unity</h3>
                </div>
            </div>

            <a href="./package.html#6000">
                <div class="box">
                    <div class="image">
                        <img src="./assets/files/pac2.5.jpg" alt="">
                        <h3>Kashmir</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- Explore Button -->

        <div style="text-align:center">
            <button type="button" class="btn btn-primary"> <a href="package.html">Explore More Packages</a></button>
        </div>
    </section><br><hr><br>

    <!-- Locations -->

    <section class="locations" id="locations">
        <div class="package-title">
            <h2>Locations</h2>
        </div>

        <div class="location-content">
            <a href="./locations.html">
                <div class="col-content">
                    <img src="./assets/files/l1.jpg" alt="">
                    <h5>India</h5>
                    <p>Kashmir</p>
                </div>
            </a>

            <a href="./locations.html#istanbul">
                <div class="col-content">
                    <img src="./assets/files/l2.jpg" alt="">
                    <h5>Turkey</h5>
                    <p>Istanbul</p>
                </div>
            </a>

            <a href="./locations.html#paris">
                <div class="col-content">
                    <img src="./assets/files/l3.jpg" alt="">
                    <h5>France</h5>
                    <p>Paris</p>
                </div>
            </a>

            <a href="./locations.html#bali">
                <div class="col-content">
                    <img src="./assets/files/l4.jpg" alt="">
                    <h5>Indonesia</h5>
                    <p>Bali</p>
                </div>
            </a>

            <a href="./locations.html#dubai">
                <div class="col-content">
                    <img src="./assets/files/l5.jpg" alt="">
                    <h5>United Arab Emirates</h5>
                    <p>Dubai</p>
                </div>
            </a>

            <a href="./locations.html#geneva">
                <div class="col-content">
                    <img src="./assets/files/l6.jpg" alt="">
                    <h5>Switzerland</h5>
                    <p>Geneva</p>
                </div>
            </a>

            <a href="./locations.html#port-blair">
                <div class="col-content">
                    <img src="./assets/files/l7.jpg" alt="">
                    <h5>Andaman & Nicobar</h5>
                    <p>Port Blair</p>
                </div>
            </a>
        </div>
    </section><br><hr>

    <!-- FAQ;s -->

    <section><br>
        <div class="destination-title">
            <h2>Best Destinations to Visit in India</h2>
        </div>
        <div class="container1">
            <style>
                .destination-title {
                    text-align: center;
                }

                .container1 {
                    display: grid;
                    position: relative;
                    grid-template-columns: auto auto auto;
                    background: color #f6f1f1;
                    padding: 48px;
                    font-size: 12px;
                    gap: 10px;
                    margin-top: 5px;
                    margin-left: 100px;
                    margin-right: 100px;
                    margin-bottom: 1px;

                    .loc-detail li {
                        font-size: 10px;
                        color: black;
                        margin-left: 15px;
                        margin-bottom: 2px;
                        list-style-type: circle;
                    }

                    .box {
                        background: inherit;
                        color: black;
                        box-shadow: 5px 5px 10px #3b3737;
                        padding: 5px;
                        border-radius: 15px;
                    }
                }
            </style>

            <div class="box">
                <h1>Goa</h1>
                <p>The unofficial party place of India, Goa is more than that. It has a great legacy, history and
                    culture that are yet to be explored. But if beaches are what you are looking for, then the state
                    has that too. And that's why, India tours to Goa are a great option to explore the place,
                    according to your interests. Goa holiday packages are also popular because Goa is one of the top
                    places in the world when it comes to nightlife. Find several exciting tour packages and other
                    India holiday packages that let you try Goa's melange of watersports and other fun activities.
                    <br>
                    <br><b>Best time to visit :</b> November to February <br>

                    <br> <b>Best places to visit:</b>
                <ul class="loc-detail">
                    <li>Calangute</li>
                    <li>Baga</li>
                    <li>Anjuna</li>
                    <li> Miramar</li>
                    <li> Palolem</li>
                    <li> Panjim</li>
                </ul>

                <br> You can also include the offbeat Patnem Beach in your holiday tour packages, since it was
                listed amongst one of Asia's top 20 beaches.
                </p>
            </div>

            <div class="box">
                <h1>
                    Kerala
                </h1>
                <p>God's own country, Kerala has been a popular tourist destination in India. You can explore it all
                    with India tours to this marvellous destination. With suitable tour packages, you can discover
                    scenic seaside destinations and hill stations in Kerala. <br>
                    <br> <b>Best time to visit:</b> September to March <br>

                    <br> <b>Best places to visit:</b>
                <ul class="loc-detail">
                    <li>Sree Padmanabhaswamy Temple</li>
                    <li> Francis CSI Church</li>
                    <li> Paradesi Synagogue</li>
                    <li> Eravikulam National Park
                        Varkala Beach</li>
                    <li>Athirappilly Waterfalls</li>
                </ul>
                <br>

                <br>
                If you are planning India holiday packages in the state, then you must not miss out on its
                lip-smacking cuisine as well. Check your holiday tour packages and book accordingly.</p>

            </div>

            <div class="box">
                <h1>Kashmir</h1>
                <p>
                    For decades, the Kashmir valley has attracted tourists from all over the world. If you can't
                    plan a vacation on your own, you should check out India tours for Kashmir to help you with an
                    unforgettable holiday. With the right all India tour packages, you can discover lush green
                    valleys, snow-covered peaks and gorgeous wildlife. Your trip packages must include the Chenab,
                    Sindh and Lidder valleys. Don't forget to buy a world-famous Kashmiri shawl and one-of-a-kind
                    handicrafts for your loved ones. <br>
                    <br> <b> Best Time to Visit:</b> March to August <br>

                    <br> Best Places to Visit: <br>
                <ul class="loc-detail">
                    <li>Gulmarg</li>
                    <li> Srinagar</li>
                    <li> Dal Lake</li>
                    <li> Sonamarg</li>
                    <li> Indira Gandhi Tulip Garden</li>
                </ul>
                <br>
                <br> These places should be included in the best tour packages for Kashmir. Find travel packages to
                suit all needs and you can also find exquisite honeymoon packages, since Kashmir is an ethereal
                destination for a picture-perfect Indian honeymoon.</p>
            </div>

            <div class="box">
                <h1>Sikkim</h1>
                <p>If you are looking for an Indian destination that is fit for a world tour package, then look no
                    further than Sikkim. You can plan amazing India tours to this mountain marvel, which is home to
                    the country's highest peak, Kanchenjunga. It is certainly a great destination for quality
                    international tour packages. Check out Sikkim tour packages for a trip to this charming Indian
                    state. <br>
                    <br> <b>Best Time to Visit:</b> March to May <br>

                    <br> Best Places to Visit:
                <ul class="loc-detail">
                    <li> Gangtok</li>
                    <li> Nathu La Pass</li>
                    <li> Tsomgo Lake</li>
                    <li> Rumtek Monastery</li>
                </ul>
                </p>
            </div>

            <div class="box">
                <h1>Shimla</h1>
                <p> Shimla, the Queen of the Hills, is the stuff that dreamy India tours are made of! Shimla is a
                    great
                    destination for international honeymoon packages, with its pristine landscape, mountains,
                    greenery
                    and romantic weather. A Shimla tour also means checking out the delightful cafes and eateries
                    here. <br>

                    <br> <b>Best Time to Visit:</b> May to June/December to January <br>

                    <br> Best Places to Visit:
                <ul class="loc-detail">
                    <li>The Ridge</li>
                    <li> Green Valley</li>
                    <li> Mall Road</li>
                    <li> Jakhoo Hill</li>
                </ul>
                </p>
            </div>

            <div class="box">
                <h1> Uttarakhand</h1>
                <p> There are many India tours which keep Uttarakhand at the forefront and why not? The state is
                    blessed with unmatched natural beauty. Find Uttarakhand tour packages covering several popular
                    destinations. The state offers the right mix of spirituality, trekking, adventure, beautiful
                    mountain landscapes and welcoming locals. <br>

                    <br> <b> Best time to visit:</b> March to April/September to October <br>

                    <br> Best places to visit:
                <ul class="loc-detail">
                    <li> Dehradun</li>
                    <li> Mussoorie</li>
                    <li> Nainital</li>
                    <li> Auli</li>
                    <li> Rishikesh</li>
                </ul>
                </p>

            </div>
        </div>
    </section>

    <section class="faq">

        <div class="container2">
            <style>
                .container2 {
                    position: relative;
                    grid-template-columns: auto auto auto;
                    gap: 5%;
                    padding: 35px;
                    margin-top: 50px;
                    margin-left: 35px;
                    margin-right: 34px;
                    border-radius: 10px;
                    font-size: 12px;
                    color: black;
                    background-color: white;
                    box-shadow: 5px 5px 10px #3b3737;
                }
            </style>

            <div> <br>
                <h1 class="faqh1">FAQs - Frequently Asked Questions</h1>
            </div>

            <p><br>
            <h3> What kind of destinations can I choose for travelling?</h3> <br>
            <p> You can choose any destination for travel as per your mood. For an action-packed holiday, you can choose
                wildlife, trekking and other adventurous destinations. For a romantic holiday with your special someone,
                you can choose from a range of couple-friendly destinations. You can also choose the kind of holiday you
                want based on the destination you like—whether hills, mountains, beaches, heritage or pilgrimage sites.
            </p><br>
            <hr>

            <br>
            <h3> Can I opt for a budget-friendly holiday?</h3><br>
            <p>
                Yes, you can. All you have to do is set an approximate expenditure amount in your mind before starting
                exploring the ideas here. You can search for a suitable destination for your travel in any range from
                Rs. 10,000 to Rs. 50,000. It is advisable to make all the bookings in advance in order to avoid change
                in prices.</p><br>
            <hr>

            <br>
            <h3> Which time of the year is best suited for booking a holiday?</h3><br>
            <p>x
                Holidays can be booked throughout the year. You only need to select the month in which you are planning
                to travel. Our curated list of ideas is designed in such a way that you will be able to see only those
                destinations which are most suitable for that particular month of the year. If you select a combination
                of filters defining your month, budget and purpose of travel, you will get the appropriate destination
                name and other details.</p><br>
            <hr>

            <br>
            <h3>What all will I get in a holiday idea?</h3>
            <p>Once you choose a destination, it will give you complete details of all the unique things about that
                place that must not be missed, including most visited local sites, best places to stay and all the
                memorable experiences that you can indulge in. You will be given multiple options of hotels, resorts and
                guest houses to choose from depending on your budget. </p> <br>
            <hr>
            </p>
        </div>
    </section>

    <!-- Newsletter -->

    <section class="newsletter">
        <div class="newstext">
            <h2>Tourist Guide</h2>
            <p>Subscribe to get offers and latest<br>updates every week!</p>
        </div>

        <div class="send">
            <form action="" method="post">
                <input type="email" name="s_mail" placeholder="Email" required>
                <input type="submit" name="btn_submit" value="Subscribe">
            </form>
        </div>
    </section>

    <!-- Footer -->

    <section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./booking.php">Register</a></li>
                        <li><a href="./info.html">About Us</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/profile.php?id=100007787415175" target="_blank"><i
                                class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/iamit010/" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://twitter.com/sarcasmit_" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.linkedin.com/in/amit-kumar-singh-475b36212/" target="_blank"><i
                                class='bx bxl-linkedin'></i></a>
                        <a href="https://github.com/iamit010" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>Copyright © 2024 Tourist Guide Have All Rights Reserved.<br>Website developed by: Vinit Morankar</p>
        </div>
    </section>
 <SCRIPT type="text/javascript">
        function JavaBlink() {
           var blinks = document.getElementsByTagName('JavaBlink');
           for (var i = blinks.length - 1; i >= 0; i--) {
              var s = blinks[i];
              s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
           }
           window.setTimeout(JavaBlink, 500);
        }
        if (document.addEventListener) document.addEventListener("DOMContentLoaded", JavaBlink, false);
        else if (window.addEventListener) window.addEventListener("load", JavaBlink, false);
        else if (window.attachEvent) window.attachEvent("onload", JavaBlink);
        else window.onload = JavaBlink;
      </SCRIPT>
</body>

</html>
