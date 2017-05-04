

    var contentSlider = function(options){

		var self = this;

		self.main_container = $(options.main);
		self.child_container = self.main_container.find(options.container);
		self.children = self.child_container.children();
		self.first_child = self.children.first();
		self.total_items = self.children.length;
		self.items_showing_at_once = Math.round(self.child_container.width() / self.first_child.width());
		self.current_item = self.items_showing_at_once;
	
		if(options.debug) console.log(self.children.length);
		
		if(typeof options.btn_next !== "undefined"){
		    self.btn_next = self.main_container.find(options.btn_next);
		    self.btn_next.on("click", function(){
				if(self.current_item < self.total_items){
				    self.current_item++;
				    self.move();
				}
		    });
		}
		if(typeof options.btn_prev !== "undefined"){
		    self.btn_prev = self.main_container.find(options.btn_prev);
		    self.btn_prev.on("click", function(){
				if(self.current_item > self.items_showing_at_once){
				    self.current_item--;
				    self.move();
				}
		    });
		}
		self.move = function(){
		    if(self.current_item <= self.total_items){
				self.child_container.animate({ 'margin-left': '-' + (self.current_item - self.items_showing_at_once) * self.first_child.width() }, 500, function() {
		
				});
		    }
		}
    };
$(document).ready(function(){
	//Slider instance 1
	/*
    var options = {  
		main: ".player-slider",
		container: ".player-list",
		btn_next: ".next-player",
		btn_prev: ".prev-player",
	    debug: true
    };
    var cs = new contentSlider(options);
	*/
    //Slider instance 2
    var options2 = { 
		main: ".article-slider",
		container: ".article-list",
		btn_next: ".next",
		btn_prev: ".prev"
    };
    var cs2 = new contentSlider(options2);
	
	//Slider instance 3
    var options3 = { 
		main: ".team-slider",
		container: ".team-list",
		btn_next: ".next-team",
		btn_prev: ".prev-team"
    };
    var cs3 = new contentSlider(options3);
});
