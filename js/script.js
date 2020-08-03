$(document).ready(function() {
    //live search
    $('#search').keyup(function() {
        var val = $('#search');
        var respect = val.val();
        if (respect.length != "") {
            $("#result").slideDown();
        }
        if (respect.length == 0) {
            $("#result").slideUp();
            $('#result').html("");
            return;
        }

        var xml = new XMLHttpRequest;
        xml.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $('#result').html(this.responseText);
            }
        }
        xml.open("GET", "search.php?q=" + respect, true);
        xml.send();
    });
    $('#search2').keyup(function() {
        var val2 = $('#search2');
        var respect2 = val2.val();
        if (respect2.length != "") {
            $("#result2").slideDown();
        }
        if (respect2.length == 0) {
            $("#result2").slideUp();
            $('#result2').html("");
            return;
        }

        var xml2 = new XMLHttpRequest;
        xml2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $('#result2').html(this.responseText);
            }
        }
        xml2.open("GET", "search.php?q=" + respect2, true);
        xml2.send();
    });

    $("#times").click(function() {
        $("#result").slideUp();
    });
    $("#times2").click(function() {
        $("#result2").slideUp();
    });
    // search show
    $("#search-icon").click(function() {
        if ($(this).attr('data') == 'close') {
            $(".search-back").slideDown();
            $(this).removeClass('fa fa-search');
            $(this).addClass('fas fa-times');
            $(this).attr('data', 'open');
        } else {
            $("#result").slideUp();
            $(".search-back").slideUp();
            $(this).removeClass('fas fa-times');
            $(this).addClass('fa fa-search');
            $(this).attr('data', 'close');
        }
    });

    //light 
    $("#light").click(function() {
        if ($(this).attr('data') == 'off') {
            $('body').append("<div class='back-light'</div>");
            $(this).removeClass('fas fa-lightbulb');
            $(this).addClass('far fa-lightbulb');
            $(this).attr('data', 'on');
        } else {
            $('.back-light').remove();
            $(this).removeClass('far fa-lightbulb');
            $(this).addClass('fas fa-lightbulb');
            $(this).attr('data', 'off');
        }
    });
    //res - menu
    $("#bars").click(function() {
        if ($(this).attr('data') == 'close') {
            $(".res-menu").show();
            $(".res-menu").animate({
                right: 0
            }, 1000);
            $(this).hide();
            $('body').append("<div class='back-light2' </div>");
        }
        $('.back-light2').click(function() {
            $("#bars").show();
            $(".res-menu").hide();
            $(this).remove();
            $(".res-menu").animate({
                right: -300
            }, 1000);
        });

    });

    //fade-menu
    $(".sel").hide();
    $(".sel:first").show();
    $(".fade-menu-li a:first").addClass("select");
    $(".fade-menu-li a").click(function() {
        $(".sel").hide();
        $(".fade-menu-li a").removeClass("select");
        $(this).addClass("select");
        var sel = $(this).attr('href');
        $(sel).fadeToggle(1000);
        return false;
    });

    //slider
    $(".next").click(function() {
        $(".slide").animate({
            left: '0%'
        }, 1000, function() {
            $(".slide").css('left', '-100%');
            $("img-box").first().before($(".img-box").last());
        });
    });

    $(".prev").click(function() {
        $(".slide").animate({
            left: '-200%'
        }, 1000, function() {
            $(".slide").css('left', '-100%');
            $("img-box").last().after($(".img-box").first());
        });
    });
});