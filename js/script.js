$(document).ready(function(){
    $('.category_list .category_item[category="all"]').addClass('ct_item-active');
$('.category_item').click(function(){
    var categoriaP = $(this).attr('category');  
    console.log(categoriaP);
$('.category_item').removeClass('ct_item-active');
$(this).addClass('ct_item-active');
$('.product-item').hide();
$('.product-item[category="'+categoriaP+'"]').show();
});
$('.category_item[category="all"]').click(function(){
   $('.product-item').show();
});
});