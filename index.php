<html>
  <head>
    <!-- regular CSS for page -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <?php
      // set up variables and arrays
      $beername = array();
      $style = array();
      $whobrew = array();
      $whobrew = array();
      $abv = array();
      $hops = array();
      $srm = array();
      $status = array();
      $beernamel = array();


      // set URL/Paths for csv and recipe pages
      $beersurl = "beers.csv";
      $tap1fB = "";
      $tap2fB = "";
      $tap3fB = "";
      $tap4fB = "";
      $tap5fB = "";
      $tap6fB = "";

      // writes csv info into arrays
      $skip = true;
      $handle = fopen($beersurl, "r");
        while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
          if($skip) { $skip = false; continue; }
          $beerdata[] = $line;
        }
      fclose($handle);
    ?>
  </head>

  <body>
    <div id="header">
      <div id="headerboxa">
        <br />
        <?php
          $date=getdate(date("U"));
          print("$date[month] <br /> $date[mday], $date[year]");
        ?>
      </div>
      <div id="headerboxa">
        <img src="/images/blank.png" height="100">
      </div>
      <div id="headerboxb">
        <h1>BEERS ON TAP</h1>
      </div>
    </div>
    <br />
    <!-- Background div for column headers -->
    <div class='list-header' id="TitleBarBack">
    </div>

    <div class='list-header' id="TitleBarBeerPic">
    COLOR
    </div>

    <div class='list-header' id="TitleBarBeerName">
    NAME
    </div>

    <div class='list-header' id="TitleBarInfo">
    INFO
    </div>

    <div class='list-header' id="TitleBarKeg">
    STATUS
    </div>

    <!-- Taps -->
    <?php
    $row = 1;
    foreach ($beerdata as $key => $value) { ?>
    <?php echo "<div class='beer-row' id='content-row$row '>" ?>
      <div id="BeerPic">
        <img src="/images/srm_<?php echo $beerdata[$key][5]; ?>.png" height="150">
      </div>
      <div id="<?php echo $beerdata[$key][7]; ?>">
        <?php echo "<h1>", $beerdata[$key][0], "</h1>";
          echo "<h2>", $beerdata[$key][1], "<br />", $beerdata[$key][2], "</h2>"; ?>
      </div>
      <div id="BeerInfo">
        <?php echo $beerdata[$key][3]; ?>
        <br /><h2>ABV</h2>
        <img src="/images/<?php echo $beerdata[$key][4]; ?>_hops.png" width="200">
      </div>
      <div id="BeerStatus">
        <img src="/images/kegs/<?php echo $beerdata[$key][6]; ?>.png" width="80">
      </div>
    </div>
    <?php
      $row += 1;
    } ?>

  </body>
</html>
