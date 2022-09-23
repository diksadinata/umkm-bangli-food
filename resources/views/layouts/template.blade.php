<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
    


/* ---------------------------------------------
Table of contents
------------------------------------------------
01. font & reset css
02. reset
03. global styles
04. header
05. banner
06. features
07. testimonials
08. contact
09. footer
10. preloader
11. search
12. portfolio

--------------------------------------------- */


/* 
---------------------------------------------
font & reset css
--------------------------------------------- 
*/

@import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");

/* 
---------------------------------------------
reset
--------------------------------------------- 
*/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
div pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
font,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
figure,
header,
nav,
section,
article,
aside,
footer,
figcaption {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
}

.clearfix:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}

.clearfix {
    display: inline-block;
}

html[xmlns] .clearfix {
    display: block;
}

* html .clearfix {
    height: 1%;
}

ul,
li {
    padding: 0;
    margin: 0;
    list-style: none;
}

header,
nav,
section,
article,
aside,
footer,
hgroup {
    display: block;
}

* {
    box-sizing: border-box;
}

    
 
html,
body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    background-color: #fff;
    font-size: 16px;
    -ms-text-size-adjust: 100%;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

a {
    text-decoration: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0px;
    margin-bottom: 0px;
}

ul {
    margin-bottom: 0px;
}

p {
    font-size: 14px;
    line-height: 25px;
    color: #2a2a2a;
}


/* 
---------------------------------------------
global styles
--------------------------------------------- 
*/

html,
body {
    background: #fff;
    font-family: 'Poppins', sans-serif;
}

::selection {
    background: #2a2a2a;
    color: #fff;
}

::-moz-selection {
    background: #2a2a2a;
    color: #fff;
}

@media (max-width: 991px) {
    html,
    body {
        overflow-x: hidden;
    }
    .mobile-top-fix {
        margin-top: 30px;
        margin-bottom: 0px;
    }
    .mobile-bottom-fix {
        margin-bottom: 30px;
    }
    .mobile-bottom-fix-big {
        margin-bottom: 60px;
    }
}

.main-border-button a {
    font-size: 13px;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 25px;
    display: inline-block;
    font-weight: 500;
    transition: all .3s;
}

.main-border-button a:hover {
    background-color: #fff;
    color: #2a2a2a;
}

.main-white-button a {
    font-size: 13px;
    color: #2a2a2a;
    background-color: #fff;
    padding: 12px 25px;
    display: inline-block;
    border-radius: 3px;
    font-weight: 600;
    transition: all .3s;
}

.main-white-button a:hover {
    opacity: 0.9;
}

.main-text-button a {
    font-size: 13px;
    color: #fff;
    font-weight: 600;
    transition: all .3s;
}

.main-text-button a:hover {
    opacity: 0.9;
}

.section-heading h2 {
    font-size: 34px;
    font-weight: 700;
    color: #2a2a2a;
}

.section-heading span {
    font-size: 14px;
    color: #a1a1a1;
    font-style: italic;
    font-weight: 400;
}


/* 
---------------------------------------------
header
--------------------------------------------- 
*/

.background-header {
    border-bottom: none !important;
    background-color: #fff;
    height: 80px!important;
    position: fixed!important;
    top: 0px;
    left: 0px;
    right: 0px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15)!important;
}

.background-header .logo,
.background-header .main-nav .nav li a {
    color: #1e1e1e!important;
}

.background-header .main-nav .nav li:hover a {
    color: #2a2a2a!important;
}

.background-header .nav li a.active {
    color: #2a2a2a!important;
}

.header-area {
    border-bottom: 3px dotted #eee;
    box-shadow: none;
    background-color: #fff;
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: 100;
    height: 100px;
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    -o-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
}

.header-area .main-nav {
    min-height: 80px;
    background: transparent;
}

.header-area .main-nav .logo {
    line-height: 100px;
    color: #fff;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    float: left;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.background-header .main-nav .logo {
    line-height: 75px;
}

.background-header .nav {
    margin-top: 20px !important;
}

.header-area .main-nav .nav {
    float: right;
    margin-top: 30px;
    margin-right: 0px;
    background-color: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    z-index: 999;
}

.header-area .main-nav .nav li {
    padding-left: 15px;
    padding-right: 15px;
}

.header-area .main-nav .nav li:last-child {
    padding-right: 0px;
}

.header-area .main-nav .nav li a {
    display: block;
    font-weight: 600;
    font-size: 15px;
    color: #2a2a2a;
    text-transform: capitalize;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 40px;
    line-height: 40px;
    border: transparent;
    letter-spacing: 1px;
}

.header-area .main-nav .nav li a {
    color: #2a2a2a;
}

.header-area .main-nav .nav li:hover a,
.header-area .main-nav .nav li a.active {
    color: #aaa!important;
}

.background-header .main-nav .nav li:hover a,
.background-header .main-nav .nav li a.active {
    color: #aaa!important;
    opacity: 1;
}

.header-area .main-nav .nav li.submenu {
    position: relative;
    padding-right: 30px;
}

.header-area .main-nav .nav li.submenu:after {
    font-family: FontAwesome;
    content: "\f107";
    font-size: 12px;
    color: #2a2a2a;
    position: absolute;
    right: 18px;
    top: 12px;
}

.background-header .main-nav .nav li.submenu:after {
    color: #2a2a2a;
}

.header-area .main-nav .nav li.submenu ul {
    position: absolute;
    width: 200px;
    box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.06);
    overflow: hidden;
    top: 50px;
    opacity: 0;
    transform: translateY(+2em);
    visibility: hidden;
    z-index: -1;
    transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
}

.header-area .main-nav .nav li.submenu ul li {
    margin-left: 0px;
    padding-left: 0px;
    padding-right: 0px;
}

.header-area .main-nav .nav li.submenu ul li a {
    opacity: 1;
    display: block;
    background: #f7f7f7;
    color: #2a2a2a!important;
    padding-left: 20px;
    height: 40px;
    line-height: 40px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    font-size: 13px;
    font-weight: 400;
    border-bottom: 1px solid #eee;
}

.header-area .main-nav .nav li.submenu ul li a:hover {
    background: #fff;
    color: #aaa!important;
    padding-left: 25px;
}

.header-area .main-nav .nav li.submenu ul li a:hover:before {
    width: 3px;
}

.header-area .main-nav .nav li.submenu:hover ul {
    visibility: visible;
    opacity: 1;
    z-index: 1;
    transform: translateY(0%);
    transition-delay: 0s, 0s, 0.3s;
}

.header-area .main-nav .menu-trigger {
    cursor: pointer;
    display: block;
    position: absolute;
    top: 33px;
    width: 32px;
    height: 40px;
    text-indent: -9999em;
    z-index: 99;
    right: 40px;
    display: none;
}

.background-header .main-nav .menu-trigger {
    top: 23px;
}

.header-area .main-nav .menu-trigger span,
.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    background-color: #1e1e1e;
    display: block;
    position: absolute;
    width: 30px;
    height: 2px;
    left: 0;
}

.background-header .main-nav .menu-trigger span,
.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
    background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    background-color: #1e1e1e;
    display: block;
    position: absolute;
    width: 30px;
    height: 2px;
    left: 0;
    width: 75%;
}

.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
    background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
    content: "";
}

.header-area .main-nav .menu-trigger span {
    top: 16px;
}

.header-area .main-nav .menu-trigger span:before {
    -moz-transform-origin: 33% 100%;
    -ms-transform-origin: 33% 100%;
    -webkit-transform-origin: 33% 100%;
    transform-origin: 33% 100%;
    top: -10px;
    z-index: 10;
}

.header-area .main-nav .menu-trigger span:after {
    -moz-transform-origin: 33% 0;
    -ms-transform-origin: 33% 0;
    -webkit-transform-origin: 33% 0;
    transform-origin: 33% 0;
    top: 10px;
}

.header-area .main-nav .menu-trigger.active span,
.header-area .main-nav .menu-trigger.active span:before,
.header-area .main-nav .menu-trigger.active span:after {
    background-color: transparent;
    width: 100%;
}

.header-area .main-nav .menu-trigger.active span:before {
    -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
    -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
    -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
    transform: translateY(6px) translateX(1px) rotate(45deg);
    background-color: #1e1e1e;
}

.background-header .main-nav .menu-trigger.active span:before {
    background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger.active span:after {
    -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    transform: translateY(-6px) translateX(1px) rotate(-45deg);
    background-color: #1e1e1e;
}

.background-header .main-nav .menu-trigger.active span:after {
    background-color: #1e1e1e;
}

.header-area.header-sticky {
    min-height: 80px;
}

.header-area .nav {
    margin-top: 30px;
}

.header-area.header-sticky .nav li a.active {
    color: #aaa;
}

@media (max-width: 1200px) {
    .header-area .main-nav .nav li {
        padding-left: 12px;
        padding-right: 12px;
    }
    .header-area .main-nav:before {
        display: none;
    }
}

@media (max-width: 767px) {
    .header-area .main-nav .logo {
        color: #1e1e1e;
    }
    .header-area.header-sticky .nav li a:hover,
    .header-area.header-sticky .nav li a.active {
        color: #aaa!important;
        opacity: 1;
    }
    .header-area.header-sticky .nav li.search-icon a {
        width: 100%;
    }
    .header-area {
        background-color: #f7f7f7;
        padding: 0px 15px;
        height: 100px;
        box-shadow: none;
        text-align: center;
    }
    .header-area .container {
        padding: 0px;
    }
    .header-area .logo {
        margin-left: 30px;
    }
    .header-area .menu-trigger {
        display: block !important;
    }
    .header-area .main-nav {
        overflow: hidden;
    }
    .header-area .main-nav .nav {
        float: none;
        width: 100%;
        display: none;
        -webkit-transition: all 0s ease 0s;
        -moz-transition: all 0s ease 0s;
        -o-transition: all 0s ease 0s;
        transition: all 0s ease 0s;
        margin-left: 0px;
    }
    .header-area .main-nav .nav li:first-child {
        border-top: 1px solid #eee;
    }
    .header-area.header-sticky .nav {
        margin-top: 100px !important;
    }
    .header-area .main-nav .nav li {
        width: 100%;
        background: #fff;
        border-bottom: 1px solid #eee;
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
    .header-area .main-nav .nav li a {
        height: 50px !important;
        line-height: 50px !important;
        padding: 0px !important;
        border: none !important;
        background: #f7f7f7 !important;
        color: #191a20 !important;
    }
    .header-area .main-nav .nav li a:hover {
        background: #eee !important;
        color: #aaa!important;
    }
    .header-area .main-nav .nav li.submenu ul {
        position: relative;
        visibility: inherit;
        opacity: 1;
        z-index: 1;
        transform: translateY(0%);
        transition-delay: 0s, 0s, 0.3s;
        top: 0px;
        width: 100%;
        box-shadow: none;
        height: 0px;
    }
    .header-area .main-nav .nav li.submenu ul li a {
        font-size: 12px;
        font-weight: 400;
    }
    .header-area .main-nav .nav li.submenu ul li a:hover:before {
        width: 0px;
    }
    .header-area .main-nav .nav li.submenu ul.active {
        height: auto !important;
    }
    .header-area .main-nav .nav li.submenu:after {
        color: #3B566E;
        right: 25px;
        font-size: 14px;
        top: 15px;
    }
    .header-area .main-nav .nav li.submenu:hover ul,
    .header-area .main-nav .nav li.submenu:focus ul {
        height: 0px;
    }
}

@media (min-width: 767px) {
    .header-area .main-nav .nav {
        display: flex !important;
    }
}


/* 
---------------------------------------------
banner
--------------------------------------------- 
*/

.main-banner {
    border-bottom: 3px dotted #eee;
    padding-top: 103px;
    padding-bottom: 30px;
}

.main-banner .left-content .thumb img {
    width: 100%;
    overflow: hidden;
}

.main-banner .left-content .inner-content {
    position: absolute;
    left: 250px;
    top: 80%;
    transform: translateY(-50%);
}

.main-banner .left-content .inner-content h4 {
    color: #fff;
    margin-top: -10px;
    font-size: 52px;
    font-weight: 700;
    margin-bottom: 20px;
}

.main-banner .left-content .inner-content span {
    font-size: 16px;
    color: #fff;
    font-weight: 400;
    font-style: italic;
    display: block;
    margin-bottom: 30px;
}

.main-banner .right-content .right-first-image {
    margin-bottom: 15px;
}

.main-banner .right-content .right-first-image .thumb {
    position: relative;
    text-align: center;
}

.main-banner .right-content .right-first-image .thumb img {
    width: 100%;
    overflow: hidden;
}

.main-banner .right-content .right-first-image .thumb .inner-content {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    text-align: center;
}

.main-banner .right-content .right-first-image .thumb .inner-content h4 {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 15px;
}

.main-banner .right-content .right-first-image .thumb .inner-content span {
    font-size: 16px;
    color: #fff;
    font-style: italic;
}

.main-banner .right-content .right-first-image .thumb .hover-content {
    position: absolute;
    top: 30px;
    right: 30px;
    left: 30px;
    bottom: 30px;
    text-align: center;
    background-color: rgba(42, 42, 42, .97);
    opacity: 0;
    visibility: hidden;
    transition: all 0.5s;
}

.main-banner .right-content .right-first-image .thumb:hover .hover-content {
    opacity: 1;
    visibility: visible;
}

.main-banner .right-content .right-first-image .thumb .hover-content .inner {
    position: absolute;
    top: 100%;
    left: 100%;
    transform: translate(-50%, -50%);
    width: 100%;
}

.main-banner .right-content .right-first-image .thumb .hover-content h4 {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 15px;
}

.main-banner .right-content .right-first-image .thumb .hover-content p {
    color: #fff;
    padding: 0px 10px;
    margin-bottom: 20px;
}


/*
---------------------------------------------
Men
---------------------------------------------
*/

#men {
    padding-top: 90px;
    padding-bottom: 90px;
    border-bottom: 3px dotted #eee;
}

#men .section-heading {
    margin-bottom: 60px;
}

#men .item .down-content {
    padding-top: 30px;
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#men .item .down-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 8px;
}

#men .item .down-content span {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
}

#men .item .down-content ul.stars {
    position: absolute;
    right: 0;
    top: 30px;
}

#men .item .down-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#men .item .thumb .hover-content {
    position: absolute;
    z-index: 2;
    text-align: center;
    bottom: -60px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .5s;
}

#men .item .thumb:hover .hover-content {
    bottom: 30px;
    opacity: 1;
    visibility: visible;
}

#men .item .thumb {
    position: relative;
}

#men .item .thumb .hover-content ul li {
    display: inline;
    margin: 0px 10px;
}

#men .item .thumb .hover-content ul li a {
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    color: #2a2a2a;
    background-color: #fff;
}

#men .owl-nav {
    text-align: center;
    position: absolute;
    width: 100%;
    top: 40%;
    transform: translateY(-25px);
}

#men .owl-dots {
    display: none;
}

#men .owl-nav .owl-prev {
    position: absolute;
    left: -80px;
    outline: none;
}

#men .owl-nav .owl-prev span,
#men .owl-nav .owl-next span {
    opacity: 0;
}

#men .owl-nav .owl-prev:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f104';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}

#men .owl-nav .owl-prev {
    opacity: 0.75;
    transition: all .5s;
}

#men .owl-nav .owl-prev:hover {
    opacity: 1;
}

#men .owl-nav .owl-next {
    opacity: 0.75;
    transition: all .5s;
}

#men .owl-nav .owl-next:hover {
    opacity: 1;
}

#men .owl-nav .owl-next {
    outline: none;
    position: absolute;
    right: -85px;
}

#men .owl-nav .owl-next:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f105';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}


/*
---------------------------------------------
bangli
---------------------------------------------
*/

#bangli {
    padding-top: 90px;
    padding-bottom: 90px;
    border-bottom: 3px dotted #eee;
}

#bangli .section-heading {
    margin-bottom: 60px;
}

#bangli .item .down-content {
    padding-top: 30px;
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#bangli .item .down-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 8px;
}

#bangli .item .down-content span {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
}

#bangli .item .down-content ul.stars {
    position: absolute;
    right: 0;
    top: 30px;
}

#bangli .item .down-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#bangli .item .thumb .hover-content {
    position: absolute;
    z-index: 2;
    text-align: center;
    bottom: -60px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .5s;
}

#bangli .item .thumb:hover .hover-content {
    bottom: 200px;
    opacity: 1;
    visibility: visible;
}

#bangli .item .thumb {
    position: relative;
}

#bangli .item .thumb .hover-content ul li {
    display: inline;
    margin: 0px 10px;
}

#bangli .item .thumb .hover-content ul li a {
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    color: #2a2a2a;
    background-color: rgb(255, 255, 255);
}

#bangli .owl-nav {
    text-align: center;
    position: absolute;
    width: 100%;
    top: 40%;
    transform: translateY(-25px);
}

#bangli .owl-dots {
    display: none;
}

#bangli .owl-nav .owl-prev {
    position: absolute;
    left: -80px;
    outline: none;
}

#bangli .owl-nav .owl-prev span,
#bangli .owl-nav .owl-next span {
    opacity: 0;
}

#bangli .owl-nav .owl-prev:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f104';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}

#bangli .owl-nav .owl-prev {
    opacity: 0.75;
    transition: all .5s;
}

#bangli .owl-nav .owl-prev:hover {
    opacity: 1;
}

#bangli .owl-nav .owl-next {
    opacity: 0.75;
    transition: all .5s;
}

#bangli .owl-nav .owl-next:hover {
    opacity: 1;
}

#bangli .owl-nav .owl-next {
    outline: none;
    position: absolute;
    right: -85px;
}

#bangli .owl-nav .owl-next:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f105';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}


/*
---------------------------------------------
kintamani
---------------------------------------------
*/

#kintamani {
    padding-top: 90px;
    padding-bottom: 90px;
    border-bottom: 3px dotted #eee;
}

#kintamani .section-heading {
    margin-bottom: 60px;
}

#kintamani .item .down-content {
    padding-top: 30px;
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#kintamani .item .down-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 8px;
}

#kintamani .item .down-content span {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
}

#kintamani .item .down-content ul.stars {
    position: absolute;
    right: 0;
    top: 30px;
}

#kintamani .item .down-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#kintamani .item .thumb .hover-content {
    position: absolute;
    z-index: 2;
    text-align: center;
    bottom: -60px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .5s;
}

#kintamani .item .thumb:hover .hover-content {
    bottom: 200px;
    opacity: 1;
    visibility: visible;
}

#kintamani .item .thumb {
    position: relative;
}

#kintamani .item .thumb .hover-content ul li {
    display: inline;
    margin: 0px 10px;
}

#kintamani .item .thumb .hover-content ul li a {
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    color: #2a2a2a;
    background-color: rgb(255, 255, 255);
}

#kintamani .owl-nav {
    text-align: center;
    position: absolute;
    width: 100%;
    top: 40%;
    transform: translateY(-25px);
}

#kintamani .owl-dots {
    display: none;
}

#kintamani .owl-nav .owl-prev {
    position: absolute;
    left: -80px;
    outline: none;
}

#kintamani .owl-nav .owl-prev span,
#kintamani .owl-nav .owl-next span {
    opacity: 0;
}

#kintamani .owl-nav .owl-prev:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f104';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}

#kintamani .owl-nav .owl-prev {
    opacity: 0.75;
    transition: all .5s;
}

#kintamani .owl-nav .owl-prev:hover {
    opacity: 1;
}

#kintamani .owl-nav .owl-next {
    opacity: 0.75;
    transition: all .5s;
}

#kintamani .owl-nav .owl-next:hover {
    opacity: 1;
}

#kintamani .owl-nav .owl-next {
    outline: none;
    position: absolute;
    right: -85px;
}

#kintamani .owl-nav .owl-next:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f105';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}


/*
---------------------------------------------
susut
---------------------------------------------
*/

#susut {
    padding-top: 90px;
    padding-bottom: 90px;
    border-bottom: 3px dotted #eee;
}

#susut .section-heading {
    margin-bottom: 60px;
}

#susut .item .down-content {
    padding-top: 30px;
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#susut .item .down-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 8px;
}
susut .item .down-content span {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
}

#susut .item .down-content ul.stars {
    position: absolute;
    right: 0;
    top: 30px;
}

#susut .item .down-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#susut .item .thumb .hover-content {
    position: absolute;
    z-index: 2;
    text-align: center;
    bottom: -60px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .5s;
}

#susut .item .thumb:hover .hover-content {
    bottom: 30px;
    opacity: 1;
    visibility: visible;
}

#susut .item .thumb {
    position: relative;
}

#susut .item .thumb .hover-content ul li {
    display: inline;
    margin: 0px 10px;
}

#susut .item .thumb .hover-content ul li a {
    width: 100px;
    height: 100px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    color: #2a2a2a;
    background-color: #fff;
}

#susut .owl-nav {
    text-align: center;
    position: absolute;
    width: 100%;
    top: 40%;
    transform: translateY(-25px);
}

#susut .owl-dots {
    display: none;
}

#susut .owl-nav .owl-prev {
    position: absolute;
    left: -80px;
    outline: none;
}

#susut .owl-nav .owl-prev span,
#susut .owl-nav .owl-next span {
    opacity: 0;
}

#susut .owl-nav .owl-prev:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f104';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}

#susut .owl-nav .owl-prev {
    opacity: 0.75;
    transition: all .5s;
}

#susut .owl-nav .owl-prev:hover {
    opacity: 1;
}

#susut .owl-nav .owl-next {
    opacity: 0.75;
    transition: all .5s;
}

#susut .owl-nav .owl-next:hover {
    opacity: 1;
}

#susut .owl-nav .owl-next {
    outline: none;
    position: absolute;
    right: -85px;
}

#susut .owl-nav .owl-next:before {
    display: inline-block;
    font-family: 'FontAwesome';
    color: #2a2a2a;
    font-size: 25px;
    font-weight: 700;
    content: '\f105';
    width: 50px;
    height: 50px;
    background-color: transparent;
    line-height: 48px;
    border: 1px solid #2a2a2a;
}


/*
---------------------------------------------
Explore
---------------------------------------------
*/

#explore {
    padding-top: 90px;
    padding-bottom: 90px;
    border-bottom: 3px dotted #eee;
}

#explore .left-content {
    margin-right: 30px;
}

#explore .left-content h2 {
    font-size: 34px;
    font-weight: 700;
    color: #2a2a2a;
}

#explore .left-content span {
    font-size: 14px;
    color: #aaaaaa;
    font-weight: 500;
    display: block;
    margin-top: 25px;
}

#explore .left-content .quote {
    margin-top: 25px;
}

#explore .left-content .quote i {
    float: left;
    font-size: 32px;
    margin-right: 15px;
    margin-top: 10px;
}

#explore .left-content .quote p {
    font-style: italic;
    color: #2a2a2a;
    font-weight: 500;
}

#explore .left-content p {
    font-size: 14px;
    color: #aaaaaa;
    font-weight: 500;
    display: block;
    margin-top: 25px;
}

#explore .left-content .main-border-button a {
    color: #2a2a2a;
    border-color: #2a2a2a;
    margin-top: 35px;
}

#explore .left-content .main-border-button a:hover {
    background-color: #2a2a2a;
    color: #fff;
}

#explore img {
    width: 100%;
    overflow: hidden;
}

#explore .leather {
    margin-bottom: 30px;
}

#explore .first-image {
    margin-bottom: 30px;
}

#explore .leather,
#explore .types {
    min-height: 255px;
    background-color: #f8f8f8;
    text-align: center;
    width: 100%;
}

#explore .leather h4,
#explore .types h4 {
    font-size: 24px;
    font-weight: 700;
    color: #2a2a2a;
    padding-top: 90px;
    margin-bottom: 5px;
}

#explore .leather span,
#explore .types span {
    font-size: 14px;
    font-style: italic;
    color: #aaa;
    font-weight: 500;
}


/* 
---------------------------------------------
Social
--------------------------------------------- 
*/

#social {
    margin-top: 90px;
    padding-bottom: 90px;
    border-bottom: 3px dotted #eee;
}

#social .col-2 {
    padding-left: 0;
    padding-right: 0;
}

#social .images {
    margin-top: 60px;
    padding-left: 15px;
    padding-right: 15px;
}

#social .thumb {
    position: relative;
}

#social .thumb .icon {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.85);
    opacity: 0;
    visibility: hidden;
    transition: all .3s;
}

#social .thumb:hover .icon {
    opacity: 1;
    visibility: visible;
}

#social .thumb .icon h6 {
    color: #fff;
    position: absolute;
    font-size: 14px;
    bottom: 40px;
    font-weight: 400;
    left: 15px;
}

#social .thumb .icon i {
    color: #fff;
    position: absolute;
    bottom: 15px;
    left: 15px;
}

#social .thumb img {
    width: 100%;
    overflow: hidden;
}


/* 
---------------------------------------------
Subscribe
--------------------------------------------- 
*/

.subscribe {
    margin-top: 90px;
}

.subscribe .section-heading {
    margin-bottom: 30px;
}

.subscribe .section-heading h2 {
    line-height: 55px;
}

.subscribe form input {
    width: 100%;
    height: 44px;
    line-height: 44px;
    padding: 0px 15px;
    font-size: 14px;
    font-style: italic;
    font-weight: 500;
    color: #aaa;
    border-radius: 0px;
    border: 1px solid #7a7a7a;
    box-shadow: none;
}

.subscribe form input::focus {
    border-color: #2a2a2a;
    border-radius: 0px;
}

.subscribe form button {
    width: 44px;
    height: 44px;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    background-color: #2a2a2a;
    box-shadow: none;
    border: 1px solid transparent;
    color: #fff;
    transition: all 0.3s;
}

.subscribe form button:hover {
    background-color: #fff;
    border: 1px solid #2a2a2a;
    color: #2a2a2a;
}

.subscribe ul li {
    margin-bottom: 30px;
    display: block;
}

.subscribe ul li {
    font-size: 16px;
    font-weight: 700;
    color: #2a2a2a;
}

.subscribe ul li span,
.subscribe ul li span a {
    font-size: 14px;
    font-weight: 400;
    color: #aaa;
}

.subscribe ul li span a:hover {
    color: #2a2a2a;
}


/* 
---------------------------------------------
footer
--------------------------------------------- 
*/

footer {
    margin-top: 60px;
    padding: 60px 0px 30px 0px;
    background-color: #2a2a2a;
}

footer .logo {
    margin-bottom: 20px;
}

footer ul li {
    display: block;
    margin-bottom: 10px;
}

footer ul li a {
    font-size: 14px;
    color: #fff;
    transition: all .3s;
}

footer ul li a:hover {
    color: #aaa;
}

footer h4 {
    letter-spacing: 0.5px;
    font-size: 16px;
    color: #fff;
    font-weight: 700;
    margin-bottom: 20px;
}

footer .under-footer {
    margin-top: 30px;
    padding-top: 30px;
    text-align: center;
    border-top: 1px solid rgba(250, 250, 250, 0.3);
}

footer .under-footer ul {
    margin-top: 20px;
}

footer .under-footer ul li {
    display: inline-block;
    margin: 0px 10px;
}

footer .under-footer ul li a {
    font-size: 22px;
}

footer .under-footer p {
    color: #fff;
    font-size: 14px;
    font-weight: 300;
}

footer .under-footer a {
    color: #cff;
}

footer .under-footer a:hover {
    color: #c66;
}


/* 
---------------------------------------------
Products Page
--------------------------------------------- 
*/

.page-heading {
    margin-top: 160px;
    margin-bottom: 30px;
    background-image: url(../images/products-page-heading.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.page-heading .inner-content {
    padding: 150px 0px;
    text-align: center;
}

.page-heading .inner-content h2 {
    font-size: 52px;
    color: #fff;
    font-weight: 700;
    margin-bottom: 15px;
}

.page-heading .inner-content span {
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    font-style: italic;
}

#products .section-heading {
    text-align: center;
    margin-bottom: 60px;
    margin-top: 80px;
}

#products .item {
    margin-bottom: 30px;
}

#products .item .thumb img {
    width: 100%;
    overflow: hidden;
}

#products .item .down-content {
    padding-top: 20px;
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#products .item .down-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 8px;
}

#products .item .down-content span {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
}

#products .item .down-content ul.stars {
    position: absolute;
    right: 0;
    top: 20px;
}

#products .item .down-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#products .item .thumb .hover-content {
    position: absolute;
    z-index: 2;
    text-align: center;
    bottom: -60px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .5s;
}


#products .item .thumb:hover .hover-content {
    bottom: 30px;
    opacity: 1;
    visibility: visible;
}

#products .item .thumb {
    position: relative;
}

#products .item .thumb .hover-content ul li {
    display: inline;
    margin: 0px 10px;
}

#products .item .thumb .hover-content ul li a {
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    color: #2a2a2a;
    background-color: #fff;
}

#products .pagination {
    margin-top: 30px;
    margin-bottom: 40px;
}

#products .pagination ul {
    text-align: center;
    width: 100%;
}

#products .pagination ul li {
    display: inline;
    margin: 0px 5px;
}

#products .pagination ul li a {
    width: 44px;
    height: 44px;
    border: 1px solid #2a2a2a;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    font-size: 14px;
    font-weight: 500;
    color: #2a2a2a;
}

#products .pagination ul li a:hover,
#products .pagination ul li.active a {
    background-color: #2a2a2a;
    color: #fff;
}


/* 
---------------------------------------------
Single Product Page
--------------------------------------------- 
*/

#product {
    margin-top: 80px;
}

#product .left-images img {
    width: 100%;
    overflow: hidden;
    margin-bottom: 30px;
}

#product .right-content {
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#product .right-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 0px;
}

#product .right-content span.price {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
    margin-top: 5px;
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
}

#product .right-content ul.stars {
    position: absolute;
    right: 0;
    top: 0;
}

#product .right-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#product .right-content span {
    font-size: 14px;
    color: #aaaaaa;
    font-weight: 500;
    display: block;
    margin-top: 25px;
}

#product .right-content .quote {
    margin-top: 25px;
}

#product .right-content .quote i {
    float: left;
    font-size: 32px;
    margin-right: 15px;
    margin-top: 10px;
}

#product .right-content .quote p {
    font-style: italic;
    color: #2a2a2a;
    font-weight: 500;
}

#product .right-content p {
    font-size: 14px;
    color: #aaaaaa;
    font-weight: 500;
    display: block;
    margin-top: 25px;
}

.quantity-content {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    width: 100%;
    padding-bottom: 30px;
    margin-bottom: 30px;
}

.quantity-content .left-content {
    float: left;
    margin-right: 30px;
}

.quantity-content .right-content {
    text-align: right;
}

.quantity-content .left-content h6 {
    padding-top: 7px;
    font-size: 20px;
    font-weight: 700;
    color: #aaa;
    position: relative;
    z-index: 11;
}

.total h4 {
    float: left;
    font-size: 20px;
    margin-top: 10px;
    color: #aaa!important;
}

.total .main-border-button {
    text-align: right;
}

.total .main-border-button a {
    border-color: #2a2a2a;
    color: #2a2a2a;
}

.total .main-border-button a:hover {
    color: #fff;
    background-color: #2a2a2a;
}

.quantity {
    display: inline-block;
}

.quantity .input-text.qty {
    width: 35px;
    height: 39px;
    padding: 0 5px;
    text-align: center;
    background-color: transparent;
    border: 1px solid #efefef;
}

.quantity.buttons_added {
    text-align: left;
    position: relative;
    white-space: nowrap;
    vertical-align: top;
}

.quantity.buttons_added input {
    display: inline-block;
    margin: 0;
    vertical-align: top;
    box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
    padding: 7px 10px 8px;
    height: 39px;
    background-color: #ffffff;
    border: 1px solid #efefef;
    cursor: pointer;
}

.quantity.buttons_added .minus {
    border-right: 0;
}

.quantity.buttons_added .plus {
    border-left: 0;
}

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
    background: #eeeeee;
}

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    margin: 0;
}

.quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
    outline: none;
}


/* 
---------------------------------------------
About Us Page
--------------------------------------------- 
*/

.about-page-heading {
    margin-top: 10px;
    margin-bottom: 30px;
    background-image: url(../images/about-us-page-heading.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.about-page-heading1 {
    margin-top: 100px;
    margin-bottom: 10px;
    background-image: url(../images/KINTAMANI-2.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.about-page-heading2 {
    margin-top: 100px;
    margin-bottom: 10px;
    background-image: url(../images/panglipuran.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.about-page-heading3 {
    margin-top: 100px;
    margin-bottom: 10px;
    background-image: url(../images/SUSUT.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.about-page-heading4 {
    margin-top: 100px;
    margin-bottom: 10px;
    background-image: url(../images/tembuku-1.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.about-us {
    margin-top: 80px;
}

.about-us .left-image img {
    width: 100%;
    overflow: hidden;
}

.about-us .right-content {
    margin-left: 30px;
}

.about-us .right-content h4 {
    font-size: 34px;
    font-weight: 700;
    color: #2a2a2a;
}

.about-us .right-content span {
    font-size: 14px;
    color: #aaaaaa;
    font-weight: 500;
    display: block;
    margin-top: 25px;
}

.about-us .right-content .quote {
    margin-top: 25px;
}

.about-us .right-content .quote i {
    float: left;
    font-size: 32px;
    margin-right: 15px;
    margin-top: 10px;
}

.about-us .right-content .quote p {
    font-style: italic;
    color: #2a2a2a;
    font-weight: 500;
}

.about-us .right-content p {
    font-size: 14px;
    color: #aaaaaa;
    font-weight: 500;
    display: block;
    margin-top: 25px;
}

.about-us .right-content ul {
    border-top: 3px dotted #eee;
    margin-top: 30px;
    padding-top: 30px;
}

.about-us .right-content ul li {
    display: inline-block;
    margin-right: 5px;
}

.about-us .right-content ul li a {
    width: 44px;
    height: 44px;
    background-color: #2a2a2a;
    color: #fff;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: all .5s;
}

.about-us .right-content ul li a:hover {
    background-color: #eee;
    color: #2a2a2a;
}

.our-team {
  
    padding-bottom: 50px;
    
}

.our-team .section-heading {
    margin-bottom: 60px;
    text-align: center;
}

.our-team .section-heading h2 {
    margin-bottom: 10px;
}

.our-team .team-item .thumb {
    position: relative;
}

.our-team .team-item .thumb img {
    width: 100%;
    overflow: hidden;
}

.our-team .team-item .thumb .hover-effect {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.9);
    width: 82%;
    text-align: center;
    top: 0;
    bottom: 0;
    opacity: 0;
    visibility: hidden;
    transition: all .3s;
}

.our-team .team-item .thumb:hover .hover-effect {
    opacity: 1;
    visibility: visible;
}

.our-team .team-item .thumb .hover-effect .inner-content {
    position: absolute;
    top: 50%;
    text-align: center;
    width: 100%;
    transform: translateY(-22px);
}

.our-team .team-item .thumb .hover-effect .inner-content ul li {
    display: inline-block;
    margin: 10px 5px;
}

.our-team .team-item .thumb .hover-effect .inner-content ul li a {
    width: 44px;
    height: 44px;
    background-color: #fff;
    color: #2a2a2a;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: all .3s;
}

.our-team .team-item .thumb .hover-effect .inner-content ul li a:hover {
    background-color: #2a2a2a;
    color: #fff;
}

.our-team .team-item .down-content {
    text-align: center;
    padding-top: 25px;
}

.our-team .team-item .down-content h4 {
    font-size: 24px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 5px;
}

.our-team .team-item .down-content span {
    font-size: 14px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
    font-style: italic;
}

.our-services {
    padding-top: 90px;
    padding-bottom: 90px;
    border-top: 3px dotted #eee;
    border-bottom: 3px dotted #eee;
}

.our-services .section-heading {
    margin-bottom: 60px;
    text-align: center;
}

.our-services .section-heading h2 {
    margin-bottom: 10px;
}

.our-services .service-item {
    padding: 30px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10);
    text-align: center;
}

.our-services .service-item img {
    width: 100%;
    overflow: hidden;
}

.our-services .service-item h4 {
    font-size: 24px;
    font-weight: 700;
    color: #2a2a2a;
    margin-bottom: 20px;
}

.our-services .service-item p {
    margin-bottom: 25px;
}


/* 
---------------------------------------------
contact Us Page
--------------------------------------------- 
*/

.contact-us {
    margin-top: 90px;
    border-bottom: 3px dotted #eee;
    padding-bottom: 90px;
}

.contact-us .section-heading {
    margin-bottom: 40px;
}

.contact-us #map {
    margin-right: 30px;
}

.contact-us form input {
    width: 100%;
    height: 44px;
    line-height: 44px;
    padding: 0px 15px;
    font-size: 14px;
    font-style: italic;
    font-weight: 500;
    color: #aaa;
    border-radius: 0px;
    border: 1px solid #7a7a7a;
    box-shadow: none;
}

.contact-us form input::focus {
    border-color: #2a2a2a;
    border-radius: 0px;
}

.contact-us form textarea {
    width: 100%;
    height: 140px;
    min-height: 120px;
    max-height: 200px;
    margin-top: 30px;
    margin-bottom: 25px;
    line-height: 44px;
    padding: 0px 15px;
    font-size: 14px;
    font-style: italic;
    font-weight: 500;
    color: #aaa;
    border-radius: 0px;
    border: 1px solid #7a7a7a;
    box-shadow: none;
}

.contact-us form textarea::focus {
    border-color: #2a2a2a;
    border-radius: 0px;
}

.contact-us form button {
    width: 44px;
    height: 44px;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    background-color: #2a2a2a;
    box-shadow: none;
    border: 1px solid transparent;
    color: #fff;
    transition: all 0.3s;
}


</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{  $edit->nama_kategori  }}</title>
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/copi.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<meta name="csrf-token" content="{{ 

csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="" name="description">
<meta content="" name="keywords">
<meta property="og:locale" content="ID_id" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{{ asset('assets/images/copi.png') }}">

<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Hexa CSS -->
<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
<link rel="stylesheet" href="assets/css/owl-carousel.css">
<link rel="stylesheet" href="assets/css/lightbox.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Kategori Wilayah</title>


<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
<link rel="stylesheet" href="assets/css/owl-carousel.css">
<link rel="stylesheet" href="assets/css/lightbox.css">



<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-custom shadow-sm py-3">
            <div class="container">
            <a href="/" class="logo">
                            <img src="{{ asset('assets/images/white-logo.jpg') }}" style="width:150px;">
                        </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-dark pt-2"><i class="fas fa-bars"></i></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                    <li class="scroll-to-section">
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                       
                        <li class="scroll-to-section">
                            <a class="nav-link active" class="scroll-to-section" aria-current="page" href="{{ url('kategori') }}">Kategori Wilayah</a>
                        </li>
                        
                        <li class="scroll-to-section">
                                @if(isset(auth()->user()->name))
                                <a class="nav-link active" aria-current="page" href="{{ url('admin') }}"><b>Halaman Admin</b></a>
                                @else
                                <a class="nav-link active" aria-current="page" href="{{ url('login') }}">Login</a>
                                @endif
                            </li>

                            <li class="scroll-to-section">
                                <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#ModalSearch" tabindex="-2" aria-disabled="true">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                </div>
            </div>
        </nav>
        <div class="clearfix mt-5"></div>
        <main>
            @yield('content')
        </main>
        <div class="clearfix mt-5 pt-4"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h4>Kontak Kami</h4>
                    <!-- <p class="pt-2">08:00 - 17:00 WIB / (Senin - Jumat)</p> -->
                    <i class="fas fa-envelope-square me-2"></i> diskominfosan@banglikab.go.id
                    <br>
                    <i class="fas fa-phone-square me-2"></i> (0366) 93804
                    <br>
                    <i class="fas fa-map-marker-alt me-2"></i> Jalan Brigjen Ngurah Rai No. 30
                    <br><br>
                </div>
                <div class="col-sm-4">
                    <h4>Tetap Terhubung Dengan Kami</h4>
                    <a href="#" class="text-terhubung"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-news"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container text-center">
            Copyright &copy; <?= date('Y'); ?> {{ config('app.name') }} All Reserved
            <br>
            Bangli's Food
        </div>
    </div>
    <!-- end footer -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>


    <!-- modal cari -->
    <div class="modal fade" id="ModalSearch" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fas fa-search mr-2"></i> Cari Produk
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="get" action="{{ url('search') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="keyword" autocomplete="off" class="form-control" placeholder="Search disini !">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal cari -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('javascript')

</body>

</html>