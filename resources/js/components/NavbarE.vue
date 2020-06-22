<template>
 <header class="header">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top" :style = "{backgroundColor:bgColor}">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="navbar-brand d-flex align-items-center pr-2 ml-4" href="/">
                    <i class="icon-pronix-logo"></i>
                    <i class="icon-pronix-text"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li v-for="value in items" class="nav-item">
                    <a class="nav-link" :href="'/' + value.slug_all">{{value.name}}</a>
                </li>
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <li class="nav-item js-arrow ">
                            <a class="nav-link" href="#">Çözümler
                    <span class="arrow px-1"><i class="ti ti-nav ti-angle-down"></i></span>
                </a>
                        </li>
                        <div class="account-dropdown js-dropdown">
                            <div class="account-dropdown__item">
                                <a href="/cozumler/entegrasyon" class="text-white">Entegrasyon</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="/cozumler/sistem-yonetimi" class="text-white">Sistem Yönetimi</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="/cozumler/is-surekliligi" class="text-white">İş Sürekliliği</a>
                            </div>
                        </div>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="/iletisim">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
</template>

<script>
    export default {

         props: {
    items: {
      type: Array
    },
     bgColor:{
         type: String
     }
  },

        mounted() {
            (function($) {
    // USE STRICT
    "use strict";

    // Dropdown
    try {
      var menu = $(".js-item-menu");
      var sub_menu_is_showed = -1;

      for (var i = 0; i < menu.length; i++) {
        $(menu[i]).on("mouseover", function(e) {
          e.preventDefault();
          $(".js-right-sidebar").removeClass("show-sidebar");
          if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
            $(this).toggleClass("show-dropdown");
            sub_menu_is_showed = -1;
          } else {
            for (var i = 0; i < menu.length; i++) {
              $(menu[i]).removeClass("show-dropdown");
            }
            $(this).toggleClass("show-dropdown");
            sub_menu_is_showed = jQuery.inArray(this, menu);
          }
        });
        $(menu[i]).on("mouseout", function(e) {
            e.preventDefault();
            $(".js-right-sidebar").removeClass("show-sidebar");
            if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
              $(this).toggleClass("show-dropdown");
              sub_menu_is_showed = -1;
            } else {
              for (var i = 0; i < menu.length; i++) {
                $(menu[i]).removeClass("show-dropdown");
              }
              $(this).toggleClass("show-dropdown");
              sub_menu_is_showed = jQuery.inArray(this, menu);
            }
          });
      }
      $(".js-item-menu, .js-dropdown").click(function(event) {
        event.stopPropagation();
      });

      $("body,html").on("click", function() {
        for (var i = 0; i < menu.length; i++) {
          menu[i].classList.remove("show-dropdown");
        }
        sub_menu_is_showed = -1;
      });
    } catch (error) {
      console.log(error);
    }

    var wW = $(window).width();


    // Sublist Sidebar
    try {
        var arrow = $(".js-arrow");
        arrow.each(function() {
            var that = $(this);
            that.on("mouseover", function(e) {
                that.find(".arrow").toggleClass("up");
            });
        });

        arrow.each(function() {
            var that = $(this);
            that.on("mouseout", function(e) {
                that.find(".arrow").toggleClass("up");
            });
        });
    } catch (error) {
        console.log(error);
    }


  })(jQuery);
        }
    }

</script>
<style lang="scss" scoped>
a:hover{
    text-decoration: none;
}
.arrow {
    position: absolute;
    text-align: center;
    vertical-align: middle;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.arrow.up {
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    transform: rotate(-180deg);
}
.bg-light {
    background-color: rgba(0, 0, 0, 0) !important;
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(32, 38, 54, 1)),
        to(rgba(0, 0, 0, 0))
    );
    background: linear-gradient(
        to bottom,
        rgba(32, 38, 54, 1) 0%,
        rgba(0, 0, 0, 0) 100%
    );
    transition: 0.5s;
}

.bg-dark {
     background: rgba(32, 38, 54, 0.8) !important;
}

.icon-pronix-logo {
    font-size: 40px;
    line-height: 0;
    color: #f66014;
}

.icon-pronix-text {
    font-size: 100px;
    line-height: 0;
    color: #014e94;
}
.logo-text-default {
    font-size: 100px;
    line-height: 0;
    color: #014e94;
}

.navbar .nav-item .nav-link {
    text-transform: uppercase;
    font-family: "Montserrat", sans-serif;
    font-size: 0.875rem;
    position: relative;
    padding: 16px 0px;
    margin: 0px 16px;
    color: #fff;
}

.navbar .nav-item .nav-link::before {
    transition: 300ms;
    height: 3px;
    content: "";
    position: absolute;
    background-color: #fff;
    width: 0%;
    bottom: 12px;
}

.navbar .nav-item .nav-link:hover::before {
    width: 100%;
}

.account-wrap {
    position: relative;
}

.account-item {
    cursor: pointer;
}

.account-dropdown {
    min-width: 305px;
    position: absolute;
    top: 58px;
    right: 0;
    background: rgba(32, 38, 54, 0.8);
    -webkit-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
    -webkit-transform-origin: right top;
    -moz-transform-origin: right top;
    -ms-transform-origin: right top;
    -o-transform-origin: right top;
    transform-origin: right top;
    z-index: 3;
}

.account-dropdown:after {
    content: "";
    display: block;
    width: 19px;
    height: 19px;
    border-bottom: 9px solid #202636;
    border-top: 9px solid transparent;
    border-left: 9px solid transparent;
    border-right: 9px solid transparent;
    position: absolute;
    top: -18px;
    right: 33px;
}

.account-dropdown__item a {
    font-family: "Montserrat", sans-serif;
    font-size: 0.875rem;
    text-transform: uppercase;
    display: block;
    color: #333;
    padding: 15px 25px;
    font-size: 14px;
}

.account-dropdown__item a:hover {
    background: #f66014;
    color: #fff;
}

.show-dropdown .js-dropdown {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
</style>
