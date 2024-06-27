@include('layouts.userheader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
   
</head>
<body>
    <section class="discover" id="discover"style="margin-top: 80px" >
        <div class="heading">
          <h1 class="title">Discover the Most Attractive Destinations</h1>
          <p class="subtitle">Let's See the World with Your Passion</p>
        </div>
        <div class="content">
          <div class="items">
            <div class="card">
              <div class="image">
                <img
                src ="{{ asset('storage/assets/discover/discover-1.jpg')}}"
                  alt="Discover 1 Image" />
              </div>
              <div class="content-card" style="background-color: black">
                <h4>Rome</h4>
                <p>
                  Rome, the eternal city, is a treasure trove of history, culture,
                  and delicious cuisine. Explore ancient ruins, visit the Vatican
                  City.
                <button class="btn-read">Read More</button>
              </div>
            </div>
  
            <div class="card">
              <div class="image">
                <img
                  src="{{ asset('storage/assets/discover/discover-2.jpg')}}"
                  alt="Discover 2 Image" />
              </div>
              <div class="content-card" style="background-color: black">
                <h4>London</h4>
                <p>
                  London, the capital of England, offers a blend of modernity and
                  tradition. From iconic landmarks like the Big Ben to world-class
                  museums like the British Museum.
                </p>
                <button class="btn-read">Read More</button>
              </div>
            </div>
  
            
            <div class="card">
                <div class="image">
                  <img
                    src="{{ asset('storage/assets/album/album-2.jpg')}}"
                    alt="Discover 2 Image" />
                </div>
                <div class="content-card" style="background-color: black">
                  <h4>Turkey</h4>
                  <p>
                    Turkey, straddling both Europe and Asia, 
                    is a country of rich history and vibrant culture.
                     From the majestic Hagia Sophia in Istanbul to the surreal landscapes of Cappadocia, 
                  </p>
                  <button class="btn-read">Read More</button>
                </div>
              </div>
    
            <div class="card">
              <div class="image">
                <img
                  src="{{ asset('storage/assets/discover/discover-3.jpg')}}"
                  alt="Discover 3 Image" />
              </div>
              <div class="content-card" style="background-color: black">
                <h4>Tokyo</h4>
                <p>
                  Tokyo, the bustling capital of Japan, is a city of contrasts.
                  Experience the tranquility of ancient temples, the energy of
                  neon-lit streets.
                </p>
                <button class="btn-read" >Read More</button>
              </div>
            </div>
          </div>
        </div>
      </section>
  
    @include('layouts.footer')
</body>
</html>
