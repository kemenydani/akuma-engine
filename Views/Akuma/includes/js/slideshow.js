

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
