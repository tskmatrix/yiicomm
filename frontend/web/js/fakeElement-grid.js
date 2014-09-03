var fakeElement2 = {};
fakeElement2.constanants = 'b c d f g k l m n p q r s t v x z'.split(' ');
fakeElement2.vowels = 'a e i o u y'.split(' ');
fakeElement2.categories = 'html css php javascript'.split(' ');
fakeElement2.suffices = 'on ium ogen'.split(' ');
fakeElement2.titles = 'Project title 1, Project title 2, Project title 3, Project title 4, Project title 5, Project title 6, Project title 7, Project title 8'.split(',');

fakeElement2.texts1 = 'Phasellus eu tincidunt quam. Etiam tortor massa, mollis at ultricies eu, blandit eget libero. Phasellus eget dolor diam, at aliquet mi. Donec quis lectus.'.split('..');
fakeElement2.texts2 = 'Cursus sodales mattis. Morbi eros augue, viverra nec blandit eget lore vitae vestibul, hendrerit eget nisi.'.split('..');

fakeElement2.images = 'newest1 newest2 newest3 newest4 newest5 newest6 newest7 newest8'.split(' ');
fakeElement2.getRandom = function(property) {
	var values = fakeElement2[property];
	return values[ Math.floor(Math.random() * values.length)];
};
fakeElement2.create = function(count) {
	var category = fakeElement2.getRandom('categories');
	image = fakeElement2.getRandom('images');
	title = fakeElement2.getRandom('titles');
	text1 = fakeElement2.getRandom('texts1');
	text2 = fakeElement2.getRandom('texts2');
	
	category = fakeElement2.getRandom('categories');
	className = 'element ' + category;
	set_width = $('#portfolio-grid').find('.element:first').width();
		return '' +
            '<article class="' + category + ' span3">'+
            '<div class="thumbnail hover-pf1">'+
                '<img src="example/'+ image +'.jpg" alt=""/>'+
                '<div class="mask-1"></div>'+
                '<div class="mask-2"></div>'+
                '<div class="caption">'+
                    '<h2 class="title"><a href="#">'+ title +'</a></h2>'+
                    '<p>'+ text1 +'</p>'+
                    '<span class="ico_block">'+
                        '<a href="example/view.jpg" class="ico_zoom prettyPhoto"><span></span></a>'+
                        '<a href="portfolio-single.html" class="ico_link"><span></span></a>'+
                    '</span>'+
                '</div>'+
            '</div>'+
            '</article>';
};
fakeElement2.getGroup = function(count) {
	var i = Math.ceil(count), newEls = '';
	while (i--) {
		newEls += fakeElement2.create(count);
	}
	return newEls;
};

