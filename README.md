# Europa meets Europe
**Description**: In this art project, random images of the Galilean Moon Europe from the NASA archive are overlaid pixel by pixel with current images from European webcams in rhythm with the Jupiter Symphony by Mozart. The art project links and connects the continent of Europe with the 1610 by Galileo Galilei discovered Jupiter moon, which is around 660 million kilometers away. Each time the application is started it loads a new webcam image from Berlin, Rome, Paris, Oslo, Zürich or Chur and a new image from Europa. There is never the same combination.

**Data**: The dynamic images of Europe are accessed via the [NASA API](https://api.nasa.gov/), the webcams via the [Windy API](https://api.windy.com/webcams/docs). In the current version the music from [Wikimedia Commons](https://commons.wikimedia.org/wiki/File:Wolfgang_Amadeus_Mozart_-_Symphony_No._41_4th_Movement_(Jupiter),_K.551.ogg) is directly loaded from the web server.

**Technology**: HTML, Javascript, P5.js and PHP

**Current version**: The current version achieves the goals set at the beginning of the GLAM hack 2020.

**Future improvements**: depending on the two dynamically loaded pictures the sizes are not equal. They have to be resized.

**Main difficulty**: At the beginning the error *access to fetch at ... from origin ... has been blocked by CORS policy* appeared when loading the NASA pictures with Javascript. The solution was to save to pictures dynamically to the web server with Javascript.

**[Link to PDF](mediapp.ch/glamhack2020/documentation/2020_glamhack_presentation.pdf)**

**Contact**: [Martin Vollenweider](mailto:martin.vollenweider@fhgr.ch)