jQuery(function(){
            jQuery('a.js-fullscreen').click(function(e){
              e.preventDefault();
              jQuery('.spritespin').spritespin('api').requestFullscreen();
            });
            jQuery('a.js-start').click(function(e){
              e.preventDefault();
              jQuery('.spritespin').spritespin('api').startAnimation();
            });
            jQuery('a.js-stop').click(function(e){
              e.preventDefault();
              jQuery('.spritespin').spritespin('api').stopAnimation();
            });
            jQuery('a.js-reverse').click(function(e){
                jQuery('.spritespin').spritespin('api').data.reverse=!jQuery('.spritespin').spritespin('api').data.reverse;
                jQuery('.spritespin').spritespin('api').startAnimation();
            });
            jQuery('.spritespin').spritespin({
              //source: './images/bike6x6_big.jpg',
              //frames: 34,
              //framesX: 6,
              width: 400,
              height: 300,
              source: SpriteSpin.sourceArray('/wp-content/uploads/images/spin360/demoSpin360/{frame}.jpg', { frame: [1,200], digits: 4 }),
              sense: -1,
              responsive: true,
            });
          });