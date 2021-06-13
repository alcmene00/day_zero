<!DOCTYPE html>
<html lang="en">
    <?php 
      include_once 'head.php';
    ?>
    <head>
      <link rel="stylesheet" href="effects.css" />
      <title>Day Zero - Effects</title>
    </head>
    <?php 
      include_once 'menu.php';
    ?>
   
    <div class="intro-effects"></div>
    <!-- MAIN / EFFECTS-->
    <body>
    <main>
      <h2 class="title">Effects</h2>
      <div class="slider">
        <div class="slider-items" id="active">
          <div class="item active">
            <img
              src="https://medwet.org/wp-content/uploads/2019/01/Climate-change_credit_Mailis_Renaudin-e1548248327233.jpg"
              class="img-fluid"
              alt="picture1"
            />
            <div class="caption" >
              <h3 id="wetlands">DISAPPEARING WETLANDS</h3>
              <p>
                Wetlands, the most economically valuable and among the most
                biodiverse ecosystems in the world, are disappearing three times
                faster than forests with severe consequences for our future.
                About half of the world’s wetlands have been destroyed since
                1900. As some of the most productive habitats on the planet,
                these ecosystems support high concentrations of
                animals—including mammals, birds, fish, and invertebrates—and
                serve as nurseries for many of these species. They also support
                the cultivation of rice, a staple in the diet of half the
                world’s population. They also provide a range of ecosystem
                services that benefit humanity, including water filtration,
                storm protection, flood control and recreation.
              </p>
            </div>
          </div>
          <div class="item">
            <img
              src="https://cdn.britannica.com/s:690x388,c:crop/76/205176-050-0DFE770C/map-shrinking-Aral-Sea.gif"
              class="img-fluid"
              alt="picture1"
            />
            <div class="caption">
              <h3 id="ecosystems">DAMAGED ECOSYSTEMS</h3>
              <p>
                When water becomes scarce, natural landscapes often become the
                victims. As an example, the Aral Sea in central Asia was once
                the world’s fourth largest freshwater lake. But now, as the lake
                dried up, it separated into several small lakes which together
                were only a tenth of the lake’s original size. It is now as
                salty as an ocean due to the excessive pollution and the
                diversion of water for irrigation and power generation. As the
                sea has retracted, it has left behind polluted land. This
                ecological catastrophe caused many problems with extremely
                serious effects, such as food shortages and resulted in a rise
                in infant mortality and a decrease in life expectancy for the
                nearby population.
              </p>
            </div>
          </div>
          <div class="item">
            <img
              src="https://www.unicef.org/sites/default/files/styles/hero_mobile/public/UN0199521.jpg?itok=n0QzINBx"
              class="img-fluid"
              alt="picture1"
            />
            <div class="caption">
              <h3 id="lack">BILLIONS OF PEOPLE LACK WATER</h3>
              <p>
                According to the Food and Agricultural Organization (FAO) of the
                United Nations, around 1.2 billion people live in areas of
                physical scarcity; many of these people live in arid or
                semi-arid regions. Physical water scarcity can be seasonal; an
                estimated two-thirds of the world’s population lives in areas
                subjected to seasonal water scarcity at least one month of the
                year. As the global population grows and water resources shrink,
                greater numbers will face the challenges of inadequate water
                accessibility. People will not get enough to drink, wash, or
                feed crops, and economic decline may occur. In addition,
                inadequate sanitation—a problem for 2.4 billion people—can lead
                to deadly diarrheal diseases, including cholera and typhoid
                fever, and other water-borne illnesses.
              </p>
            </div>
          </div>
          <div class="item">
            <img
              src="https://www.nature.com/news/polopoly_fs/7.24294.1425991294!/image/War1.jpg_gen/derivatives/landscape_630/War1.jpg"
              class="img-fluid"
              alt="picture1"
            />
            <div class="caption">
              <h3 id="global-conflict">INCREASED GLOBAL CONFLICT</h3>
              <p>
                As water quality degrades or the quantity available has to meet
                rising demands over time, competition among water users
                intensifies. This is nowhere more destabilizing than in river
                basins that cross political boundaries. The United Nations has
                identified 263 transboundary lake and river basins and more than
                200 transboundary aquifers. However, experience shows that in
                many situations, rather than causing open conflict, the need for
                water sharing can generate unexpected cooperation.
              </p>
            </div>
          </div>
          <div class="item">
            <img
              src="https://penntoday.upenn.edu/sites/default/files/2020-05/food-shortage-social.jpg"
              class="img-fluid"
              alt="picture1"
            />
            <div class="caption">
              <h3 id="food-shortages">FOOD SHORTAGES</h3>
              <p>
                Water scarcity may limit food production and supply, putting
                pressure on food prices and increasing countries’ dependence on
                food imports. Rising demand for food caused by growing
                populations and shifting diets, production shortfall in some
                countries, increased costs for key agricultural inputs such as
                fertilizers (driven in turn by energy costs), bioenergy-related
                incentives in some countries and possible financial speculation
                have all contributed to the steep rises in food prices.
              </p>
            </div>
          </div>
        </div>
        <!--close slider-item div-->
        <dir class="left-slide">
          <img
            src="pictures/left-slide-drop.png"
            alt="left-slide-drop"
            width="40px"
          />
        </dir>
        <dir class="right-slide">
          <img
            src="pictures/right-slide-drop.png"
            alt="right-slide-drop"
            width="40px"
          />
        </dir>
      </div>
      <!--close slider div-->
    </main>

    <!-- FOOTER -->
    <?php 
      include_once 'footer.php'; 
    ?>
    <script src="slider.js"></script>
  </body>
</html>
