import * as all from './common.js';

$(function () {
    $('.menu').load("menu.html"); // menu html 삽입
    setTimeout(function () {
        all.startCommon(); //공통시작이벤트 발동
        start();//시작이벤트 발동
        $('.menu__button').click(all.menuToggle); //메뉴 열기&닫기
    }, 500);
    $('.main__contact__name').find('input').focus();//이름란에 포커스 자동으로가도록 설정
    $('.git').click(function () {
        var openNewWindow = window.open("about:blank");
        openNewWindow.location.href = "http://github.com/lsh58"
    }); //깃허브사이트 새창열기
    $('.prev').click(function () {
        window.location.href = "project.html";
    }); //이전페이지로 이동
    inputClick(); //input 클릭 이벤트
});

var bgRight = 100 - parseInt($('.background').find('.area').css('width')) / parseInt($('body').css('width')) * 100;
var mainLeft = $('.main').css('left');

//시작이벤트
function start() {
    setTimeout(function () {
        $('.background').find('.area01').css({
            transition: '1s',
            width: bgRight + '%'
        });
    }, 600);//background 등장 

    //컨텐츠 등장
    setTimeout(function () {
        $('.leftTab').css({
            left: 0,
            opacity: 1
        });
    }, 1300);
    setTimeout(function () {
        $('.main').css({
            left: mainLeft,
            opacity: 1
        });
    }, 2000);
    //컨텐츠 등장 end
}
//시작이벤트 end


function inputClick() {
    $('.main__contact div').find('input, textarea').click(function () {
        $('.main__contact div').find('span').removeClass('selected');
        $(this).parent().find('span').toggleClass('selected');
    })
}
