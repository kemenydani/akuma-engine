var Slider = function(options){
    
    this.o = options;
    var self = this;

    //self.main_container = $(self.o.slider, self.main_container);
    self.main_container = $(self.o.container);
    //self.slide_container = $(self.o.slide_container, self.main_container);
    self.slide_container = $(self.o.slide_container, self.main_container);
    
    
    self.navigation = $(self.o.navigation, self.main_container);
    self.slides = $(self.o.slides, self.slide_container);
    
    self.left_control = $(self.o.left_control, self.main_container);
    self.right_control = $(self.o.right_control, self.main_container);

    self.slide_container.width(self.slides.first().width() * self.slides.length); /* set slide_container width slidecount * slidewidth */
    
    self.animation_speed = self.o.animation_speed;
    self.current_slide = 0;
    
    self.items_per_slide = (Math.round(self.main_container.width() / self.slide_container.children().first().width()));
    
    if(self.items_per_slide > 1){
	self.last_slide = self.slides.length - self.items_per_slide;
    } else {
	self.last_slide = (self.slides.length - 1);
    }
    
    self.interval = 0;
    self.direction_default = self.o.direction;
    self.direction_current = self.direction_default;
    self.debounce_time = 300;
    
    $(self.navigation.children().first()).addClass("active");

    this.debounce = function(func, wait, immediate){
	// 'private' variable for instance
	// The returned function will be able to reference this due to closure.
	// Each call to the returned function will share this common timer.
	var timeout;           

	// Calling debounce returns a new anonymous function
	return function() {
	    // reference the context and args for the setTimeout function
	    var context = this, 
		args = arguments;

	    // Should the function be called now? If immediate is true
	    //   and not already in a timeout then the answer is: Yes
	    var callNow = immediate && !timeout;

	    // This is the basic debounce behaviour where you can call this 
	    //   function several times, but it will only execute once 
	    //   [before or after imposing a delay]. 
	    //   Each time the returned function is called, the timer starts over.
	    clearTimeout(timeout);   

	    // Set the new timeout
	    timeout = setTimeout(function() {

		 // Inside the timeout function, clear the timeout variable
		 // which will let the next execution run when in 'immediate' mode
		 timeout = null;

		 // Check if the function already ran with the immediate flag
		 if (!immediate) {
		   // Call the original function with apply
		   // apply lets you define the 'this' object as well as the arguments 
		   //    (both captured before setTimeout)
		   func.apply(context, args);
		 }
	    }, wait);

	    // Immediate mode and no wait timer? Execute the function..
	    if (callNow) func.apply(context, args);  
	 }; 
    },

    this.left_control.on('click', this.debounce(function() {
	self.slideTo(-1);
    }, self.debounce_time, true )),
    
    this.right_control.on('click', this.debounce(function() {
	self.slideTo(1);
    }, self.debounce_time, true )),
	   
    this.slideTo = function(direction, slide_id = null){
	self.direction_current = direction;
	if(slide_id !== null && (typeof slide_id !== "undefined")){
	    self.current_slide = slide_id;
	}
	self.slide();
	self.pauseSlider();
	self.direction_current = self.direction_default;
    },
    
    this.slide_container.on('mouseenter', function(){
	self.pauseSlider();
    }),
	    
    this.slide_container.on('mouseleave', function(){
	self.startSlider();
    }),
	    
    this.left_control.on('mouseenter', function(){
	self.pauseSlider();
    }),
	    
    this.left_control.on('mouseleave', function(){
	self.startSlider();
    }),
	    
    this.right_control.on('mouseleave', function(){
	self.startSlider();
    }),
	    
    this.right_control.on('mouseenter', function(){
	self.pauseSlider();
    }),

    $(this.navigation.children()).on('mouseenter', function(){
	self.pauseSlider();
    }),
    
    $(this.navigation.children()).on('mouseleave', function(){
	self.startSlider();
    }),

    $(this.navigation.children()).on('click', self.debounce(function(){
	self.slideTo(1,($(this).index() - 1 ));
    }, self.debounce_time, true )),
    
    this.pauseSlider = function(){
	if(self.o.slide_interval !== null && typeof self.o.slide_interval !== "undefined"){
	    clearInterval(self.interval);
	}
    },

    this.slide = function(){
	
	self.slide_container.stop().before(function(){
	    
	    $(self.navigation.children()).removeClass("active");
	    
	    if(self.direction_current === 1){
		if(self.current_slide >= self.last_slide){
		    //self.current_slide = 0;
		    //2017.03.04
		    setTimeout(function(){
			self.current_slide = -1;
		    }, self.o.slide_interval);
		} else {
		    self.current_slide++;
		}
	    }
	    
	    if(self.direction_current === -1){
		if(self.current_slide <= 0){
		    self.current_slide = self.last_slide;
		} else {
		    self.current_slide--;
		}
	    }
		
	}).animate({ 'margin-left': '-' + self.current_slide * (self.slides.first().width()) }, self.animation_speed, function() {
	    $(self.navigation.children()[self.current_slide]).addClass("active");
	    //2017.03.04
	    //$(self.left_control.children().first()).stop().effect("shake", { times: 2, distance: 2 }, 500);
	    //$(self.right_control.children().first()).stop().effect("shake", { times: 2, distance: 2 }, 500);
        });
	
    },
    
    this.startSlider = function(){
	if(self.o.slide_interval !== null && typeof self.o.slide_interval !== "undefined"){
	    self.interval = setInterval(self.slide, self.o.slide_interval);
	}
    };

}; //ENDclass