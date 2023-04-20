<div class="row">
        <div class="col-6">
            <div class="button btn-outline mx-auto text-center mb-3" id="cars_btn">
                <img src="images/car.jpg" alt="">
                <p class="text-center mt-2">Cars</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="plants_btn">
                <img src="images/plants.jpg" alt="">
                <p class="text-center mt-2">Plants</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="countries_btn">
                <img src="images/countries.jpg" alt="">
                <p class="text-center">Countries</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="clothing_btn">
                <img src="images/clothing.jpg" alt="">
                <p class="text-center mt-2">Clothing</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="family_btn">
                <img src="images/family.jpg" alt="">
                <p class="text-center mt-2">Family</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="movies_btn">
                <img src="images/movies.jpg" alt="">
                <p class="text-center mt-2">Movies</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="genres_btn">
                <img src="images/genre.jpg" alt="">
                <p class="text-center mt-2">Genres</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="food_btn">
                <img src="images/food.jpg" alt="">
                <p class="text-center mt-2">Food</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="places_btn">
                <img src="images/places.jpg" alt="">
                <p class="text-center mt-2">Places</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="musicians_btn">
                <img src="images/musician.jpg" alt="">
                <p class="text-center mt-2">Musicians</p>
            </div>
        </div>
        <div class="col-6">
            <div class="button btn-outline mx-auto text-center mb-3" id="actors_btn">
                <img src="images/actors.jpg" alt="">
                <p class="text-center mt-2">Actors</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="animals_btn">
                <img src="images/animals.jpg" alt="">
                <p class="text-center mt-2">Animals</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="technology_btn">
                <img src="images/technology.jpg" alt="">
                <p class="text-center mt-2">Technology</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="clothing_brands_btn">
                <img src="images/brands.jpg" alt="">
                <p class="text-center mt-2">Clothing Brands</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="music_btn">
                <img src="images/music.jpg" alt="">
                <p class="text-center mt-2">Music Genres</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="series_btn">
                <img src="images/series.jpg" alt="">
                <p class="text-center mt-2">Series</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="cartoon_btn">
                <img src="images/cartoon.jpg" alt="">
                <p class="text-center mt-2">Cartoon</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="stationary_btn">
                <img src="images/stationary.jpg" alt="">
                <p class="text-center mt-2">Stationary</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="video_games_btn">
                <img src="images/video-game.jpg" alt="">
                <p class="text-center mt-2">Video Games</p>
            </div>
            <div class="button btn-outline mx-auto text-center mb-3" id="books_btn">
                <img src="images/adjectives.jpg" alt="">
                <p class="text-center mt-2">Adjectives</p>
            </div>
        </div>
    </div>

    <script>
        $('#cars_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 1
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#plants_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 2
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#countries_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 3
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#clothing_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 4
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#family_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 5
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#movies_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 6
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#genres_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 7
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#food_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 8
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#places_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 9
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#presidents_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 10
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#actors_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 11
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#animals_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 12
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#technology_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 13
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#clothing_brands_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 14
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#music_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 15
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#series_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 16
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#cartoon_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 17
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#stationary_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 18
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#video_games_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 19
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });

        $('#books_btn').on('click', function() {
            $.ajax({
              type: 'post',
              url: 'api_game.php',
              data: {
                  theme: 20
                },
              success: function(data){
                $('#game_div').html(data);
              }
        });
        });
    </script>