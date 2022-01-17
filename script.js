$('.catalog').on('click',function(){
    $('#drop-menu').css('display','block')
});
$('#slider').hover(function(){
    $('.slider-button').css('opacity','0.5')
},function(){
    $('.slider-button').css('opacity','0')
});
$('.exit_drop-menu').on('click',function(){
    $('#drop-menu').css('display','none')
});
let slide = 0;
$('.button-left').on('click',function(){
    if(slide != 0){
        slide--;
        $('.slide-slider').attr('src',`/img/slide${slide}.png`)
    }
});
$('.button-right').on('click',function(){
    if(slide != 1){
        slide++;
        $('.slide-slider').attr('src',`/img/slide${slide}.png`)
    }
});
$('.blockBasket_header').on('click',function(){
        $('.basket-box').css('display','flex')
});
$('.exit-basket').on('click',function(){
    $('.basket-box').css('display','none')
});
$('.exit-forms').on('click',function(){
    $('.login-box').css('display','none')
});
$('.blockLoginOFF_header').on('click',function(){
    $('.login-box').css('display','flex')
});
$('.blockLoginON_header').on('click',function(){
    $('.user-menu').css('visibility','visible');
    $('.user-menu').css('opacity','1');
    $('.blockLoginON_header').css('box-shedow','inset 0 0 15px #000');
});
$('.user-menu').mouseleave(function(){
    $('.user-menu').css('visibility','hidden');
    $('.user-menu').css('opacity','0');
    $('.blockLoginON_header').css('box-shedow','0 0 0 #000');
});
$('.option-exit-user').on('click',function(){
        let cookie = $.cookie();
        for (let i in cookie) {
            $.removeCookie(i);
        }
        window.location.reload();
});
$('.buy-button').on('click',async function(){
    if($.cookie('Status')==1){
            if($(`.C${$(this).val()}`).val() == null){
                $(`.C${$(this).val()}`).val('1');
            }
            await $.ajax({
                url: '/BaseData/products_db.php',
                type: 'GET',
                dataType: "text",
                data:{
                    product:$(this).val(),
                    number:$(`.C${$(this).val()}`).val()
                },
                success:function(data){
                    let a = data.split('~');
                    Name = a[0];
                    Price = a[1];
                    CheckID = a[2];
                    let Count_add = a[3];
                    $('.products-basket').append(`<div class='product_basket ${CheckID}'> <p class="name-product-bascet">${Name}</p> <p class="count-product-bascet">${Count_add}</p> <p class="price-product-bascet">${Price} р</p><button class="delite-product-basket" value="${CheckID},${Count_add}~">Убрать</button></div>`)
                    if($.cookie('status_booking')!=1){
                        $('.box-product-booking-list').append(`<div class='product_basket ${CheckID}'> <p class="name-product-bascet">${Name}</p> <p class="count-product-bascet">${Count_add}</p> <p class="price-product-bascet">${Price} р</p></div>`)
                    }
                },
                error: function(data){
                    console.log(data)
                }
            });
            $('.delite-product-basket').on('click',function(){
                $.ajax({
                    url: '/BaseData/delite-basket_db.php',
                    type: 'GET',
                    dataType: "text",
                    data:{
                        bascet:$(this).val(),
                        login:$.cookie('login')
                    },
                    success:function(data){
                        let Delite_ID = data;
                        $(`.${Delite_ID}`).remove();
                        if($.cookie('status_booking')==1){
                            $.cookie('status_booking', '', { expires: -1 });
                        }
                    },
                    error: function(data){
                        console.log(data)
                    }
                });
            });
    }else{
        alert('Войдите в аккаунт');
    }
});


$(document).ready(async function(){
    if($.cookie('Status')==1){
        if($.cookie('status_booking')==1){
            $('.status_block-booking').text('Активен');
            $('.status_block-booking').css('background','#0f0');
            $('.status_block-booking').css('box-shadow','0 0 15px #0f0');
            $('.status_block-booking').css('border','1px solid #0f0');
        }else{
            $('.status_block-booking').text('Не активен');
            $('.status_block-booking').css('background','#f00');
            $('.status_block-booking').css('box-shadow','0 0 15px #f00');
            $('.status_block-booking').css('border','1px solid #f00');
        }
        await $.ajax({
            url: '/BaseData/load-basket_db.php',
            type: 'GET',
            dataType: "json",
            data:{
                login:$.cookie('login')
            },
            success:function(data){
                let count_obj = data[0];
                let product_obj = data[1];
                let Name = '';
                let Price = '';
                let ID = '';
                let count_obj_erol = 0;
                let Count = '';
                console.log(data);
                count_obj.pop();
                product_obj.pop();
                product_obj.forEach(elem =>{
                    Count = count_obj[count_obj_erol];
                    Name = elem['name'];
                    Price = elem['price'];
                    ID = elem['id'];
                    $('.products-basket').append(`<div class='product_basket ${ID}'> <p class="name-product-bascet">${Name}</p> <p class="count-product-bascet">${Count}</p> <p class="price-product-bascet">${Price} р</p><button class="delite-product-basket" value="${ID},${Count}~">Убрать</button></div>`);
                    $('.box-product-booking-list').append(`<div class='product_basket ${ID}'> <p class="name-product-bascet">${Name}</p> <p class="count-product-bascet">${Count}</p> <p class="price-product-bascet">${Price} р</p></div>`);
                    count_obj_erol++;
                });
            },
            error: function(data){
                console.log(data)
            }
        });
        $('.delite-product-basket').on('click',async function(){
            await $.ajax({
                url: '/BaseData/delite-basket_db.php',
                type: 'GET',
                dataType: "text",
                data:{
                    bascet:$(this).val(),
                    login:$.cookie('login')
                },
                success:function(data){
                    let Delite_ID = data;
                    $(`.${Delite_ID}`).remove();
                    $.cookie('status_booking',0,{ expires: 365 },'/');
                },
                error: function(data){
                    console.log(data)
                }
            });
            if($.cookie('status_booking')==1){
                $('.status_block-booking').text('Активен');
                $('.status_block-booking').css('background','#0f0');
                $('.status_block-booking').css('box-shadow','0 0 15px #0f0');
                $('.status_block-booking').css('border','1px solid #0f0');
            }else{
                $('.status_block-booking').text('Не активен');
                $('.status_block-booking').css('background','#f00');
                $('.status_block-booking').css('box-shadow','0 0 15px #f00');
                $('.status_block-booking').css('border','1px solid #f00');
            }
        });
    }
});
$('.address-button-shop').on('click',async function(){
    if($('.number-user').val() != ''){
        await $.ajax({
            url: '/BaseData/booking_db.php',
            type: 'GET',
            dataType: "text",
            data:{
                number:$('.number-user').val(),
                booking:$.cookie('booking')
            },
            success:function(data){
                if(data == 'Выберите тавар'){
                    alert(data);
                    $.cookie('status_booking',0,{ expires: 365 },'/')
                }else{
                    $.cookie('status_booking',1,{ expires: 365 },'/'),
                    alert(data);
                }
            },
            error: function(data){
                alert(data);
            }
        })
        if($.cookie('status_booking')==1){
            $('.status_block-booking').text('Активен');
            $('.status_block-booking').css('background','#0f0');
            $('.status_block-booking').css('box-shadow','0 0 15px #0f0');
            $('.status_block-booking').css('border','1px solid #0f0');
        }else{
            $('.status_block-booking').text('Не активен');
            $('.status_block-booking').css('background','#f00');
            $('.status_block-booking').css('box-shadow','0 0 15px #f00');
            $('.status_block-booking').css('border','1px solid #f00');
        }
    }else{
        alert('Введите номер');
    }
});