export class Swipe {
   constructor(element) {
      this.xDown = null;
      this.yDown = null;



      this.element = typeof (element) === 'string' ? document.querySelector(element) : element;

      if (this.element) {
         this.element.addEventListener('touchstart', function (evt) {
            this.xDown = evt.touches[0].clientX;
            this.yDown = evt.touches[0].clientY;
         }.bind(this), false);
      }
   }

   onLeft(callback) {
      if (callback) {
         this.onLeft = callback;
      }
      return this;
   }

   onRight(callback) {
      if (callback) {
         this.onRight = callback;
      }
      return this;
   }

   onUp(callback) {
      if (callback) {
         this.onUp = callback;
      }
      return this;
   }

   onDown(callback) {
      if (callback) {
         this.onDown = callback;
      }
      return this;
   }

   handleTouchMove(evt) {

      if (!this.xDown || !this.yDown) {

         return;
      }

      var xUp = evt.touches[0].clientX;
      var yUp = evt.touches[0].clientY;

      this.xDiff = this.xDown - xUp;
      this.yDiff = this.yDown - yUp;

      if (Math.abs(this.xDiff) > Math.abs(this.yDiff)) { // Most significant.
         if (this.xDiff > 0) {
            this.onLeft();
         } else {
            this.onRight();
         }
      } else {
         if (this.yDiff > 0) {
            this.onUp();
         } else {
            this.onDown();
         }
      }

      // Reset values.
      // this.xDown = null;
      // this.yDown = null;

      this.xDown = evt.touches[0].clientX;
      this.yDown = evt.touches[0].clientY;
   }

   run() {

      if (this.element) {
         this.element.addEventListener('touchmove', function (evt) {

            this.handleTouchMove(evt);
         }.bind(this), false);
      }
   }
}


/**
 * 
   использования этого класса
      // Use class to get element by string.
      var swiper = new Swipe('#my-element');
      swiper.onLeft(function() { alert('You swiped left.') });
      swiper.run();

      // Get the element yourself.
      var swiper = new Swipe(document.getElementById('#my-element'));
      swiper.onLeft(function() { alert('You swiped left.') });
      swiper.run();

      // One-liner.
      (new Swipe('#my-element')).onLeft(function() { alert('You swiped left.') }).run();
 
 */