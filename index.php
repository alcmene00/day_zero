<!DOCTYPE html>
<html lang="en">
  <?php 
    include_once 'head.php';
  ?>
  <head>
    <link rel="stylesheet" href="home.css" />
    <title>Day Zero - Home</title>
  </head>
  <body>

    <header>
    <div class="main-intro">
      <img src="pictures/home/mainlayer.png" class="basic translate" data-speed="-0.25"  alt="">
      <img src="pictures/home/Layer 1.png" class="upwater translate" data-speed="-0.2" alt="">
      <img src="pictures/home/Layer 2.png" class="drops translate" data-speed="0.3" alt="">
    </div>  
    </header >

    <div class="intro-home"></div>
    
    <?php 
      include_once 'menu.php';
    ?>
    
  <!-- MAIN -->

  <main class="container pt-5">
      
    <div class="row">

      <div class="col-md-6">
        <img src="pictures/home/flow-water-drop.png" class="waterdrop"alt="">
      </div>

      <div class="col-md-6">
        <h2 class="title">
        water, the first principle of everything.
        <div class ="border"></div>
        </h2>
        <p class="text">
        All things are from water and all things are resolved into water, according to Thales of Miletus. About 71 percent of the Earth's surface is water-covered and up to 60% of the human adult body is water. It is essential to all life around us. Access to water and sanitation are recognized by the United Nations as human rights.
        
        So what would happen if water decreased to the point it nearly disappears?
        
        That is what Cape Town, South Africa had to face back in March, 2018 and the day their water resources would run out was named Day Zero. However, thanks to the extraordinary efforts of residents, authorities and the fact that it rained, the Day Zero countdown clock was paused indefinitely.
        
        Today, more and more cities are facing the danger of water scarcity. As climate change is making available water more unreliable, we are coming up against a global water crisis. Time is ticking and water scarcity is no longer a problem for future generations. <b>We need to value it more, before there isn’t enough of it.</b>
        </p>
      </div>
      
    </div>

  </main>
    
    <!-- WHAT YOU CAN DO -->
    
  <div class="recommendations">
    <div class="container pt-5">
      <div class ="border"></div>
      <h2 class="whatyoucan">What you can do</h2>
      <div class="row">
         <div class="col-sm">
           <img class="waterplants" src="pictures/waterplants.png">
           <p class="rec">Use a watering can</p>
          </div>
         <div class="col-sm">
           <img class="waterplants" src="pictures/toilet.png">
           <p class="rec">Don’t use toilet as an ashtray</p>
         </div>
         <div class="col-sm">
           <img class="waterplants" src="pictures/shower.png">
           <p class="rec">Take shorter showers</p>
         </div>
         <div class="col-sm">
           <img class="waterplants" src="pictures/broom.png">
           <p class="rec">Use a broom to clean</p>
         </div>
         <div class="col-sm">
           <img class="waterplants" src="pictures/bucket.png">
           <p class="rec">Use buckets instead of a hose</p>
         </div>
         <div class="col-sm">
           <img class="waterplants" src="pictures/pipe.png">
           <p class="rec">Check for water leaks</p>
         </div>
         <div class="col-sm">
           <img class="waterplants" src="pictures/educate.png">
           <p class="rec">Educate yourself and the next generations</p>
         </div>
      </div>
    </div>
  </div>

    <!-- FOOTER -->
  <?php 
    include_once 'footer.php'; 
  ?>

  <script src="menu.js"></script>
  
  </body>
</html>
