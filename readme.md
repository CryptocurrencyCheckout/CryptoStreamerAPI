# CryptocurrencyCheckout CryptoStreamer API Widget

This Widget is a basic example of how to connect to and use the CryptocurrencyCheckout CryptoStreamer API.
The intended use of this API is to allow Cryptocurrencies to easily and automatically display Twitch.tv Streamers that accept their Coin/Token onto their website.


View the CrpytoStreamer API here:
https://cryptocurrencycheckout.com/streamers_api?


## What is Twitch.tv and why would my coin want exposure on their platform?

* Twitch.tv is an online streaming site for Gamers, eSports, and Creative Content Creators, it averages an impressive 15 million Daily Active Users.

* By offering to display a Twitch.tv streamers stream on your website/platform, you greatly increase the likelihood of them accepting your cryptocurrency.

* The more streamers that accept your coins for donations, the more exposure that your project will gain through the twitch.tv platform.

* The added entertainment of your community being able to watch and interact with these streamers directly on your website will also increase engagement, and keep your project on their minds.




## How does this widget work?

* This is a very basic example of how you can use the CryptocurrencyCheckout CryptoStreamer API.


* When a user signs up to CryptocurrencyCheckout and integrates our Twitch.tv Donation Integration into their Twitch Stream, they will be asked if they would like to participate in accepting your cryptocurrency as donations in exchange for some exposure.


* If they say yes, our platform will automatically add them and their stream details to our API.


* The code here will then see the new user accepting your coin through the API call, and it will automatically begin displaying that user on your website/platform with little to no effort on your part.





## Adjustable Options:

### How do I display only my coin?
Simply adjust the displayCoin variable to your coins ticker. (input must be lowercase.)

Currently available Coins: btc, eth, ltc, dash, send, cdzc, arrr, colx, znz. (leave blank to display all coins)


### How do I show only online/offline Streams?
Adjust the dispayStatus variable to show only online or offline streams.

Currently available options: online, offline. (leave blank to display all streams)


### How do I enable and use pagination?
Adjust the $displayPagination variable to enable and use pagination. (Control how many streams display per page.)

Currently available options: numeric values 1 to 20. (leave blank to disable pagination)

(Pagination will require additional code to be added to your site to sort through the pages of streams.)





## Can I change or modify the code for my needs?
Of course, this is just a starter template to give you an idea of how to start.
You can do whatever styling you like, or add additional features available on the Twitch.tv API
Such as add Twitch Chat directly on your website, hide streams that are offline, get streamer details and game info and more.
