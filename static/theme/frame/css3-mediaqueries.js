//uemo mediaqueries attribute
//uemo.net
(function(c){
	(c('[mediaqueries]').length>0) && new (function(){
		c.w = c(window).width();
		c.h = c(window).height();
		var m = c('[mediaqueries]'),
		style=document.createElement('style');
		m.each(function(i){
			var t = c(this),
			v = t.attr('mediaqueries'),
			a = v.split('@');
			a.splice(0,1);
			t.addClass('mediaqueries-'+i);
			c(style).append('.mediaqueries-'+i+'{'+t.attr('style')+'}');
			t.attr('style','');
			for(j=0;j<a.length;j++){
				c(style).append('@'+a[j].replace(/\{.*.\}/,'')+'{'+'.mediaqueries-'+i+'{'+a[j].replace(/.*\{([^\/]*)\}.*/,'$1')+'}'+'}');
			}
		});
		document.body.insertBefore(style,null);
	});
})($);