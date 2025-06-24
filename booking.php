<?php
	include 'con1.php';
	if(isset($_POST['btn_submit']))
	{
		extract($_POST);
		$insert = mysqli_query($x,"insert into booking_form (Name , Email , PhoneNumber , PackageDetails , CheckInDate , CheckOutDate ,  AccomodationType , Numberofroom,  AdditionalRequests) values( '$t_name' , 
		 '$t_email' ,  '$t_phone' , '$t_package' , '$t_checkin' ,  '$t_checkout' , '$t_accomodation', '$t_room' , '$t_additional' )") or die(mysqli_error($x));
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Here</title>
    <link rel="icon" href="./assets/files/logo.png" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/booking.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div>
        <nav>
            <img src="./assets/files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels">
            <ul class="navbar">
                <li>
                    <a href="index.php">Home</a>
                    <a href="./index.php#package">Packages</a>
                    <a href="./index.php#locations">Locations</a>
                    <a href="./info.html">About Us</a>
                    <a href="./contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="booking">
        <h1>Booking Online Now</h1>
        <p>Please fill out this form with the required information</p>
        <form action="" method="post">
            <fieldset>
                <label>Name: *
                    <input type="text" class="data" name="t_name" placeholder="Enter first name" required /></label>
                <!-- <label>Last Name: *
                    <input type="text" name="lastname" placeholder="Enter last name" required />
                </label> -->
                <label>Email: *
                    <input type="email" name="t_email" placeholder="Enter Email" required />
                </label>
                <label>PhoneNumber: *
                    <input type="text" name="t_phone" placeholder="Enter Phone number" required />
                </label>

                <label>PackageDetails *
                    <input type="text" name="t_package" placeholder="Enter Your selected package" required />
                </label>

                <label>CheckInDate: *
                    <input type="date" name="t_checkin" required />
                </label>
                <label>CheckOutDate: *
                    <input type="date" name="t_checkout" required />
                </label>
            </fieldset>
            <fieldset>
                <label> AccomodationType: *
                    <select name="t_accomodation" id="accomodation">
                        <option value="">Select One</option>
                        <option value="1">Hotel</option>
                        <option value="2">Self-Catered</option>
                        <option value="3">Hostel</option>
                        <option value="4">Guesthouse</option>
                    </select>
                </label><br>

                <label>Numberofroom: * <input type="number" name="t_room" min="1" max="120" class="room" /><br><br>
                    <!-- <label name="">RoomType: * <br>
                        <label>
                            <input type="radio" name="room_type" class="inline" /> Single Room
                        </label><br>
                        <label>
                            <input type="radio" name="room_type" class="inline" /> Double Room
                        </label><br>
                        <label>
                            <input type="radio" name="room_type" class="inline" /> Triple Room
                        </label><br>
                        <label>
                            <input type="radio" name="room_type" class="inline" /> Quad Bedroom
                        </label>
                    </label> -->
                </label><br>

                <label>AdditionalRequests
                    <textarea name="t_additional" rows="5" cols="30" placeholder="Your message ..."></textarea>
                </label>
            </fieldset>
            <input type="submit" name="btn_submit" value="Submit" ONCLICK="alert('Booked successfully! \nEnjoy your journey')" class="submit-btn" />
           
        </form>
    </div>
       
</body>

<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./booking.html">Register</a></li>
                    <li><a href="./info.html">About Us</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="https://www.facebook.com/profile.php?id=100007787415175" target="_blank"><i
                            class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/iamit010/" target="_blank"><i class='bx bxl-instagram'></i></a>
                    <a href="https://twitter.com/sarcasmit_" target="_blank"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.linkedin.com/in/amit-kumar-singh-475b36212/" target="_blank"><i
                            class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/iamit010" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="end">
        <p>Copyright © 2023 Adventour All Rights Reserved.<br>Website developed by: Amit Kumar Singh</p>
    </div>
</section>

<!-- Javascript -->

<script>
    let calendar = document.querySelector('.calendar')

    const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

    isLeapYear = (year) => {
        return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
    }

    getFebDays = (year) => {
        return isLeapYear(year) ? 29 : 28
    }

    generateCalendar = (month, year) => {

        let calendar_days = calendar.querySelector('.calendar-days')
        let calendar_header_year = calendar.querySelector('#year')

        let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

        calendar_days.innerHTML = ''

        let currDate = new Date()
        if (month > 11 || month < 0) month = currDate.getMonth()
        if (!year) year = currDate.getFullYear()

        let curr_month = `${month_names[month]}`
        month_picker.innerHTML = curr_month
        calendar_header_year.innerHTML = year

        // get first day of month

        let first_day = new Date(year, month, 1)

        for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
            let day = document.createElement('div')
            if (i >= first_day.getDay()) {
                day.classList.add('calendar-day-hover')
                day.innerHTML = i - first_day.getDay() + 1
                day.innerHTML += `<span></span>
                                <span></span>
                                <span></span>
                                <span></span>`
                if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                    day.classList.add('curr-date')
                }
            }
            calendar_days.appendChild(day)
        }
    }

    let month_list = calendar.querySelector('.month-list')

    month_names.forEach((e, index) => {
        let month = document.createElement('div')
        month.innerHTML = `<div data-month="${index}">${e}</div>`
        month.querySelector('div').onclick = () => {
            month_list.classList.remove('show')
            curr_month.value = index
            generateCalendar(index, curr_year.value)
        }
        month_list.appendChild(month)
    })

    let month_picker = calendar.querySelector('#month-picker')

    month_picker.onclick = () => {
        month_list.classList.add('show')
    }

    let currDate = new Date()

    let curr_month = {
        value: currDate.getMonth()
    }
    let curr_year = {
        value: currDate.getFullYear()
    }

    generateCalendar(curr_month.value, curr_year.value)

    document.querySelector('#prev-year').onclick = () => {
        --curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
    }

    document.querySelector('#next-year').onclick = () => {
        ++curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
    }
</script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>
</body>

</html>
