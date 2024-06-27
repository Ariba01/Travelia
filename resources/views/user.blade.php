@include('layouts.userheader')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</head>
<body>
  <header class="home" id="home">
    {{-- <img src="{{ asset('storage/assets/aboutus.jpg" alt="About Us Image" /> --}}

    <div class="content">
      <h1>
        The <strong>Best</strong> Way to
        <strong>Plan Your Next</strong> Adventure
      </h1>
      <h4>Explore the Colorful World Like Never Seen Before</h4>
      <button class="btn-explore">
        Explore More <i class="ri-arrow-right-line"></i>
      </button>
    </div>
  </header>
    <section class="about" id="about" style="background-color: black">
        <div class="content">
          <div class="items">
            <div class="image">
              <img src="{{ asset('storage/assets/aboutus.jpg')}}" alt="About Us Image" />
            </div>
            <div class="item">
              <div class="item-content">
                <h2 class="about-title">About Us</h2>
                <div class="about-desc">
                  <p >
                    At Travelia, we're passionate about creating memorable travel
                    experiences for our customers. With a team of dedicated
                    professionals, we strive to make every journey unforgettable.
                  </p>
                  <p>
                    Whether you're a solo traveler, a couple seeking romance, or a
                    family on an adventure, we have the expertise to tailor a trip
                    that suits your preferences and interests.
                  </p>
                </div>
              </div>
  
              <div class="item-data">
                <div class="col">
                  <h1>500</h1>
                  <span>Completed Trips</span>
                </div>
                <div class="col">
                  <h1>75</h1>
                  <span>Tour Guides</span>
                </div>
                <div class="col">
                  <h1>50</h1>
                  <span>Destinations</span>
                </div>
              </div>
  
              <button class="btn-explore">
                Explore More <i class="ri-arrow-right-line"></i>
              </button>
            </div>
          </div>
        </div>
      </section>
  
      <section class="discover" id="discover">
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
                  City, and toss a coin into the Trevi Fountain to ensure your
                  return.
                </p>
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
                  museums like the British Museum, there's something for everyone
                  in this vibrant city.
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
                  neon-lit streets, and the culinary delights of sushi and ramen
                  in this dynamic metropolis.
                </p>
                <button class="btn-read" >Read More</button>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="blog" id="blog">
        <div class="heading">
          <h1 class="title">Latest on Our Blog</h1>
          <p class="subtitle">That's Help You to Travel Better Than Others!</p>
        </div>
        <div class="content">
          <div class="items">
            <div class="card">
              <img src="{{ asset('storage/assets/journals/blog-1.jpg')}}" alt="Blog 1 Image" />
              <div class="content-card">
                <p>Five Things You Need to Know about Rome Before Your Visit.</p>
              </div>
            </div>
            <div class="card">
              <img src="{{ asset('storage/assets/journals/blog-2.jpg')}}" alt="Blog 2 Image" />
              <div class="content-card">
                <p>The Ultimate Guide to Exploring London Like a Local.</p>
              </div>
            </div>
            <div class="card">
              <img src="{{ asset('storage/assets/journals/blog-3.jpg')}}" alt="Blog 3 Image" />
              <div class="content-card">
                <p>
                  Top 10 Must-Try Foods in Tokyo. Once time in life experience
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      {{-- <div class="site-banner">
        <div class="content">
          <div class="row">
            <p>Travelia</p>
          </div>
        </div>
      </div> --}}
  

</body>
</html>

@include('layouts.footer')
