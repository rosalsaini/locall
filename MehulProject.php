<html>
<head><title>Loc-all e-ticket provider</title></head>

<style>
select {
    opacity:0.8;
    width: 60%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>


<div class="w3-bar w3-top w3-border w3-teal">
  <a href="#home" class="w3-btn w3-ripple w3-teal w3-hover-black"><img src="Localogo.png" height="35" width="40"/></a>
  <button class="w3-btn w3-ripple w3-teal w3-right w3-disabled">Hack us</button>
  <a href="loginform.php" class="w3-btn w3-ripple w3-teal w3-right w3-hover-black">Book Ticket</a>
  <a href="#map" class="w3-btn w3-ripple w3-teal w3-right w3-hover-black">Show Map</a>
  <a href="#contact" class="w3-btn w3-ripple w3-teal w3-right w3-hover-black">Contact us</a>
  <a href="#about" class="w3-btn w3-ripple w3-teal w3-right w3-hover-black">What we do?</a>
</div>
<div id="home" align="center" style="background-image:url(Local1.jpg);background-repeat: no-repeat;">
<br><br><br><br><br><br><br><br>
<br>
<form name="ticket" action="showfare.php" method="get">
<span align="left" ><h2 style="color:yellow;font-weight: bold;">&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
From</h2></span>
<div align=center>
<select name="ostn">
  <option value="301">Mumbai CST(harbour)</option>
  <option value="302">Masjid(harbour)</option>
  <option value="303">Sandhurst road(harbour)</option>
  <option value="304">Dockyard road</option>
  <option value="305">Rey road</option>
  <option value="306">Cotton green</option>
  <option value="307">Sewri</option>
  <option value="308">Wadala road</option>
  <option value="309">King circle</option>
  <option value="310">Raoli Jn</option>
  <option value="311">GTB nagar</option>
  <option value="312">Chunabhati</option>
  <option value="313">Kurla(harbour)</option>
  <option value="314">Tilak nagar</option>
  <option value="315">Chembur</option>
  <option value="316">Govandi</option>
  <option value="317">Mankhurd</option>	
  <option value="318">Vashi</option>
  <option value="319">Sanpada</option>
  <option value="320">Juinagar</option>
  <option value="321">Nerul</option>
  <option value="322">Seawoods</option>
  <option value="323">Belapur CBD</option>
  <option value="324">Kharghar</option>
  <option value="325">Mansarovar</option>
  <option value="326">Khandeshwar</option>
  <option value="327">Panvel</option>

    <option value="101">Churchgate</option>
  <option value="102">Marine Lines</option>
  <option value="103">Charni Road</option>
  <option value="104">Grant Road</option>
  <option value="105">Mumbai Central</option>
  <option value="106">Mahalakshmi</option>
  <option value="107">Lower Parel</option>
  <option value="108">Elphinston Road</option>
  <option value="109">Dadar(Western)</option>
  <option value="110">Matunga Road</option>
  <option value="111">Mahim</option>
  <option value="112">Bandra</option>
  <option value="113">Khar Road</option>
  <option value="114">Santacruz</option>
  <option value="115">Vile Parle</option>
  <option value="116">Andheri</option>
  <option value="117">Jogeshwari</option>
  <option value="118">Goregaon</option>
  <option value="119">Malad</option>
  <option value="120">Kandivali</option>
  <option value="121">Borivali</option>
  <option value="122">Dahisar</option>
  <option value="123">Mira Road</option>
  <option value="124">Elphinston Road</option>
  <option value="125">Naigaon</option>
  <option value="126">Vasai Road</option>
  <option value="127">Nallasopara</option>
  <option value="128">Virar</option>
  <option value="129">Vaitarna</option>
  <option value="130">Saphale</option>
  <option value="131">Kelve Road</option>
  <option value="132">Palghar</option>
  <option value="133">Umroli</option>
  <option value="134">Boisar</option>
  <option value="135">Vangaon</option>
  <option value="136">Dahanu Road</option>

  <option value="201">Mumbai CST(main)</option>
  <option value="202">Masjid(main)</option>
  <option value="203">Sandhurst road(main)</option>
  <option value="204">Byculla</option>
  <option value="205">Chinchpokli</option>
  <option value="206">Curry road</option>
  <option value="207">Parel</option>
  <option value="208">Dadar(main)</option>
  <option value="209">Matunga</option>
  <option value="210">Sion</option>
  <option value="211">Kurla(main)</option>
  <option value="212">Vidyavihar</option>
  <option value="213">Ghatkopar</option>
  <option value="214">Vikhroli</option>
  <option value="215">Kanjurmarg</option>
  <option value="216">Bhandup</option>
  <option value="217">Nahur</option>
  <option value="218">Mulund</option>
  <option value="219">Thane(main)</option>
  <option value="220">Kalva</option>
  <option value="221">Mumbra</option>
  <option value="222">Diva Jn.</option>
  <option value="223">Dombivali</option>
  <option value="224">Thakurli</option>
  <option value="225">Kalyan</option>
  <option value="226">Shahad</option>
  <option value="227">Ambivali</option>
  <option value="228">Titwala</option>
  <option value="229">Vithalwadi</option>
  <option value="230">Ulhasnagar</option>
  <option value="231">Ambernath</option>
  <option value="232">Badlapur</option>
  <option value="233">Khadavli</option>
  <option value="234">Vasind</option>
  <option value="235">Asangaon</option>
  <option value="236">Vangani</option>
  <option value="237">Neral</option>
  <option value="238">Bhivpuri</option>
  <option value="239">Karjat</option>
  <option value="240">Palasdari</option>
  <option value="241">Kolavli</option>
  <option value="242">Lokjee</option>
  <option value="243">Dolavli</option>
  <option value="244">Khopoli</option>
  <option value="245">Khardi</option>
  <option value="246">Kasara</option>

  <option value="401">Thane(harbour)</option>
  <option value="402">Airoli</option>
  <option value="403">Rabale</option>
  <option value="404">Ghansoli</option>
  <option value="405">Koparkhairane</option>
  <option value="406">Turbhe</option>
</select>
</div>
<br><br>
<div align=center>
<span align="left"><h2 style="color:yellow;font-weight: bold;">&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
To</h2></span>
</div>
<div align=center>
<select name="dstn">
  <option value="318">Vashi</option>
  <option value="319">Sanpada</option>
  <option value="320">Juinagar</option>
  <option value="321">Nerul</option>
  <option value="322">Seawoods</option>
  <option value="323">Belapur CBD</option>
  <option value="324">Kharghar</option>
  <option value="325">Mansarovar</option>
  <option value="326">Khandeshwar</option>
  <option value="327">Panvel</option>
  <option value="101">Churchgate</option>
  <option value="102">Marine Lines</option>
  <option value="103">Charni Road</option>
  <option value="104">Grant Road</option>
  <option value="105">Mumbai Central</option>
  <option value="106">Mahalakshmi</option>
  <option value="107">Lower Parel</option>
  <option value="108">Elphinston Road</option>
  <option value="109">Dadar(Western)</option>
  <option value="110">Matunga Road</option>
  <option value="111">Mahim</option>
  <option value="112">Bandra</option>
  <option value="113">Khar Road</option>
  <option value="114">Santacruz</option>
  <option value="115">Vile Parle</option>
  <option value="116">Andheri</option>
  <option value="117">Jogeshwari</option>
  <option value="118">Goregaon</option>
  <option value="119">Malad</option>
  <option value="120">Kandivali</option>
  <option value="121">Borivali</option>
  <option value="122">Dahisar</option>
  <option value="123">Mira Road</option>
  <option value="124">Elphinston Road</option>
  <option value="125">Naigaon</option>
  <option value="126">Vasai Road</option>
  <option value="127">Nallasopara</option>
  <option value="128">Virar</option>
  <option value="129">Vaitarna</option>
  <option value="130">Saphale</option>
  <option value="131">Kelve Road</option>
  <option value="132">Palghar</option>
  <option value="133">Umroli</option>
  <option value="134">Boisar</option>
  <option value="135">Vangaon</option>
  <option value="136">Dahanu Road</option>
  <option value="201">Mumbai CST(main)</option>
  <option value="202">Masjid(main)</option>
  <option value="203">Sandhurst road(main)</option>
  <option value="204">Byculla</option>
  <option value="205">Chinchpokli</option>
  <option value="206">Curry road</option>
  <option value="207">Parel</option>
  <option value="208">Dadar(main)</option>
  <option value="209">Matunga</option>
  <option value="210">Sion</option>
  <option value="211">Kurla(main)</option>
  <option value="212">Vidyavihar</option>
  <option value="213">Ghatkopar</option>
  <option value="214">Vikhroli</option>
  <option value="215">Kanjurmarg</option>
  <option value="216">Bhandup</option>
  <option value="217">Nahur</option>
  <option value="218">Mulund</option>
  <option value="219">Thane(main)</option>
  <option value="220">Kalva</option>
  <option value="221">Mumbra</option>
  <option value="222">Diva Jn.</option>
  <option value="223">Dombivali</option>
  <option value="224">Thakurli</option>
  <option value="225">Kalyan</option>
  <option value="226">Shahad</option>
  <option value="227">Ambivali</option>
  <option value="228">Titwala</option>
  <option value="229">Vithalwadi</option>
  <option value="230">Ulhasnagar</option>
  <option value="231">Ambernath</option>
  <option value="232">Badlapur</option>
  <option value="233">Khadavli</option>
  <option value="234">Vasind</option>
  <option value="235">Asangaon</option>
  <option value="236">Vangani</option>
  <option value="237">Neral</option>
  <option value="238">Bhivpuri</option>
  <option value="239">Karjat</option>
  <option value="240">Palasdari</option>
  <option value="241">Kolavli</option>
  <option value="242">Lokjee</option>
  <option value="243">Dolavli</option>
  <option value="244">Khopoli</option>
  <option value="245">Khardi</option>
  <option value="246">Kasara</option>
  <option value="301">Mumbai CST(harbour)</option>
  <option value="302">Masjid(harbour)</option>
  <option value="303">Sandhurst road(harbour)</option>
  <option value="304">Dockyard road</option>
  <option value="305">Rey road</option>
  <option value="306">Cotton green</option>
  <option value="307">Sewri</option>
  <option value="308">Wadala road</option>
  <option value="309">King circle</option>
  <option value="310">Raoli Jn</option>
  <option value="311">GTB nagar</option>
  <option value="312">Chunabhati</option>
  <option value="313">Kurla(harbour)</option>
  <option value="314">Tilak nagar</option>
  <option value="315">Chembur</option>
  <option value="316">Govandi</option>
  <option value="317">Mankhurd</option> 

  <option value="401">Thane(harbour)</option>
  <option value="402">Airoli</option>
  <option value="403">Rabale</option>
  <option value="404">Ghansoli</option>
  <option value="405">Koparkhairane</option>
  <option value="406">Turbhe</option>

</select>
<br>
<br>
<div class="w3-bar" style="max-width: 800px">
<br>
<button onclick="showfare.php" class="w3-padding-xlarge w3-teal w3-button w3-ripple w3-hover-black" style="width:50%; border:2px solid w3-black">Check Fare</button>

</div>
</form>
</div>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
</div>

<!--What we do? section-->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="about">
    <h2 class="w3-wide">WHAT WE DO?</h2>
    <p class="w3-opacity"><i>Let's know each other</i></p>
    <p class="w3-justify">We always get irritated by seeing the long queues at railway station for tickets.
    We alongwith 21,690,000 other people of Mumbai suffer daily in such long queues for getting the tickets, which is highly inconvenient.
    Hence, we developed loc-all through which anyone who has a sound knowledge of using computers can easily book tickets online by sitting
     at home, office, or from anywhere before leaving for station, he/she can directly get into the train without wasting his/her 20-30 minutes of their time just for a ticket.</p>
</div>

<!-- Contact us section -->
<div class="w3-container w3-content w3-padding-64 w3-white" style="max-width:800px" id="contact">
  <h2 class="w3-wide w3-center">CONTACT</h2>
  <p class="w3-opacity w3-center"><i>Feedback? Query? We would love to hear that!</i></p>
      <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chembur, Mumbai<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 7666676666<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: contact@loc-all.com<br>
      </div>
      <div class="w3-col m6">
        <form action="#" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit" disabled>SEND</button>
        </form>
      </div>
      </div>
</div>

<!--Show map section-->
<div class="w3-container w3-content w3-padding-64 w3-black" style="max-width: 1400px" id="map">
<h2 class="w3-wide w3-center">MAP</h2>
<div align="center" class="w3-display-container">
  <img src="Map.png" class="w3-round" alt="Mumbai Map">
  <div class="w3-display-bottomright w3-container">Source: mumbai77.com
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;</div>
</div>
<!-- THE CODE OF TEST.PHP IS WRITTEN HERE-->



</body>
</html>