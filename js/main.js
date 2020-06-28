function masonryFunc(){
	var $container = $('.box-news');

	// инициализация
var container =   document.querySelector('.box-news');
var msnry = new Masonry( container, {
	// Настройки
	columnWidth: 1,
	itemSelector: '.box-news__item'
});
}
masonryFunc()
setTimeout(masonryFunc, 300);

$(function () {
	$('.burger').on('click', function () {
		$(this).toggleClass('active');
		$(this).toggleClass('burger_active');
		$('.sidebar').toggleClass('active');
	});
});