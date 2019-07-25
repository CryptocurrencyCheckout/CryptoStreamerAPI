<?php

// Display only your coin.
$displayCoin = '';
// Available Options: btc, eth, ltc, dash, send, cdzc, arrr, colx, znz. (or leave empty to display all)

//Display only streams that are online/offline
$displayStatus = '';
// Available Options: online, offline. (or leave empty to display both)

//Enable Pagination for easier sorting of streams onto multiple pages.
$displayPagination = '';
// Available Options: numeric = 1 to 20 (streams shown per page. leave empty do disable pagination) 


//Get Data from CryptocurrencyCheckout CryptoStreamers API
$curl = curl_init('https://cryptocurrencycheckout.com/streamers_api?coin=' . $displayCoin . '&status=' . $displayStatus . '&pagination=' . $displayPagination);
curl_setopt($curl, CURLOPT_FAILONERROR, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
$results = curl_exec($curl);
$cryptoStreamers = json_decode($results);
?>

<html>

  <head>
    <!-- Bootstrap CDN for demo styling. Can use your own css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  
  <body>
    <div class="container">

        <!-- Bring in Twitch Script -->
      <script src= "https://player.twitch.tv/js/embed/v1.js"></script>

      <div class="row mx-auto">

        <!-- Foreach to display each stream individually -->
        <?php foreach ($cryptoStreamers->data as $value) { ?>

          <div class="mx-auto col-xl-4 col-lg-6 col-sm-12 pt-3">

              <!-- Box where streams will be displayed -->
              <?php echo '<div id="twitch_player_' . $value->stream_id . '"></div>' ?>

          </div>

        <!-- Script Options for Each Twitch Window -->
        <script type="text/javascript">
          var options = {
            width: 350,
            height: 197,
            <?php echo 'channel: "' . $value->stream_id . '",' ?>
            autoplay: false
          };   
          <?php echo 'var player = new Twitch.Player("twitch_player_' . $value->stream_id . '", options); '?>
          
          player.setVolume(0.5);
        </script>

      <?php } ?>

    </div>
      
    </div>

  </body>

</html>










