<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.png">
    <script src="https://kit.fontawesome.com/4cac67ab94.js" crossorigin="anonymous"></script>
    <title>HabboTo ♥ Pikselin Tatlı Hali</title>
    <?php if (!empty($_GET["sub"])) {
        $category = $_GET["sub"];
        echo $category;
    } ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&family=Chakra+Petch:wght:@600&family=Rubik+Iso&family=Tilt+Prism&display=swap');

        :root {
            /* --BackColorRed:#4c0000; */
            --BackColorRed: #190004;
            /* --BackColorGreen:#2c5300; */
            --BackColorGreen: #a01e06;
            /* --BackColorYellow:#ba6b00; */
            --BackColorYellow: #e49c16;
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: Helvetica, Arial, sans-serif;
            cursor: url(images/icons/cursor.png), auto;
            font-family: 'Chakra Petch', cursive;
        }

        body {
            background-image: url(images/9.png), url(images/6.png);
            background-repeat: repeat-x, repeat;
            background-attachment: fixed;
            /* background-image:url(images/user-bg.gif);
            background-attachment: fixed;
            background-repeat:no-repeat;
            background-size:cover; */
            margin: 0 30px;
            color: #fff;
        }

        hr {
            opacity: .2;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            color: var(--BackColorYellow);
            cursor: pointer;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-image: linear-gradient(45deg, #00d5e8, #000f19);
            border-radius: 10px;
            border-top: 10px solid #fff;
            border-bottom: 10px solid #fff;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 1);
        }

        .topBunner {
            width: calc(100% - 250px);
            margin: 20px 0;
            border: 1px solid var(--BackColorGreen);
            background: var(--BackColorRed);
            /* background-image:url(https://habbotar.net/assets/img/gitter.png); */
            border-radius: 5px;
            padding: 5px 10px;
            float: right;
            position: relative;
            backdrop-filter: blur(3px);
            position: relative;
        }

        .topBunner img:hover {
            cursor: pointer;
        }

        .topBunner .welcome {
            float: right;
            font-size: 20px;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 20px;
            display: flex;
            align-items: center;
        }

        header {
            position: fixed;
            top: 20px;
            bottom: 20px;
        }

        header .header {
            width: 200px;
            height: 100%;
            background: var(--BackColorRed);
            background-image: url(https://habbotar.net/assets/img/gitter.png);
            margin: 0 10px 0 0;
            border: 1px solid var(--BackColorGreen);
            border-radius: 5px;
            padding: 10px 0 20px 0;
            float: left;
            backdrop-filter: blur(3px);
        }

        .header ul {
            padding: 0 25px;
        }

        .header ul li {
            background: var(--BackColorGreen);
            color: #fff;
            height: 30px;
            width: 100%;
            padding: 0 10px;
            list-style: none;
            font-size: 15px;
            text-transform: capitalize;
            text-align: center;
            margin-top: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            position: relative;
            z-index: 0;
            overflow: hidden;
        }

        .header ul li:before {
            content: " ";
            width: 100%;
            height: 50%;
            background: rgba(0 0 0 / 50%);
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .header ul li:after {
            content: " ";
            position: absolute;
            width: 20px;
            height: 100%;
            background: rgba(255 255 255 / 50%);
            transform: skewX(20deg);
            z-index: -1;
            left: -100%;
            transition: 500ms all ease;
            box-shadow: -4px 0 5px rgba(255 255 255 / 50%),
                3px 0 5px rgba(255 255 255 / 50%);
        }

        .header ul li:hover:after {
            left: 110%;
        }

        .header ul li:hover {
            cursor: pointer;
            border: 1px solid var(--BackColorYellow);
        }

        .header ul li i {
            font-size: 16px;
        }

        .header ul li a {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            line-height: 200%;
            color: #fff;
            text-decoration: none;
        }

        .header .menu-bottom {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .header .userProfile {
            width: 100%;
            height: 160px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            color: #fff;
            font-weight: bold;
            border-bottom: 1px solid var(--BackColorGreen);
            padding-bottom: 10px;
        }

        .header .userProfile .userBg {
            width: 150px;
            height: 150px;
            background-image: url(images/tree-img.png);
            background-size: cover;
            /* border: 2px solid var(--BackColorGreen); */
            border-radius: 5px;
            display: flex;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .userProfile .userBg img {
            position: absolute;
            bottom: 5px;
        }

        footer .footer {
            width: calc(100% - 250px);
            margin: 20px 0;
            border: 1px solid var(--BackColorGreen);
            background: var(--BackColorRed);
            background-image: url();
            background-position: top;
            background-size: cover;
            align-items: center;
            border-radius: 5px;
            padding: 10px 0;
            float: right;
            backdrop-filter: blur(3px);
        }


        footer .footer ul {
            float: right;
        }

        footer .footer .reserve {
            text-align: center;
            margin-top: 20px;
            text-align: center;
            color: #dbdbdb;
        }

        footer .footer .fan-policy {
            width: 70%;
            margin: auto;
            background: var(--BackColorGreen);
            text-align: center;
            margin-top: 20px;
            color: #dbdbdb;
            overflow: hidden;
            display: flex;
            align-items: center;
            border: 1px solid rgba(255 255 255 / 20%);
            padding: 10px;
            border-radius: 10px;
            box-shadow: inset 0 0 5px 3px var(--BackColorRed);
        }

        footer .footer .fan-policy b,
        footer .footer .reserve b {
            color: #fff;
        }

        footer .footer .reserve {
            font-family: 'Tilt Prism', cursive;
        }

        footer .footer .fan-policy img {
            max-width: 100px;
            float: left;
        }

        footer .footer .footer-menu {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        footer .footer .footer-menu div {
            padding: 5px;
            color: green;
            font-weight: bold;
            font-size: 15px;
            text-transform: capitalize;
        }

        footer .footer .footer-menu div:hover {
            cursor: pointer;
        }

        footer .footer .footer-menu i {
            color: red;
        }

        /* Footer CSS In ::OFF */
        .contentArea {
            width: calc(100% - 250px);
            height: auto;
            float: right;
        }

        .contentArea .content {
            width: 100%;
            height: auto;
            background: var(--BackColorRed);
            border: 1px solid var(--BackColorGreen);
            /* background-image:url(https://habbotar.net/assets/img/gitter.png); */
            border-radius: 5px;
            display: none;
            backdrop-filter: blur(3px);
        }

        .contentArea .activeCTN {
            display: block;
        }

        /* Slider Area CSS */
        .slider {
            position: relative;

        }

        .slider .sliderArea {
            overflow: hidden;
            margin: 20px 50px;
        }

        .slider .sliderCont {
            max-height: 254px;
            transition: 1s all ease 0s;
            display: flex;
        }

        .slider .sliderCont::-webkit-scrollbar {
            height: 0 !important;
        }

        .slider .sliderCont .slideBox {
            min-width: 200px;
            height: 250px;
            background: url(images/to-world.png);
            background-position: center;
            background-size: cover;
            /* background:linear-gradient(-45deg, var(--BackColorGreen) ,var(--BackColorYellow)); */
            margin: 2px 20px 2px 2px;
            padding-top: 10px;
            border-radius: 10px;
            border: 2px solid #000;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            position: relative;
            overflow: hidden;
            transition: 400ms all ease;
        }

        .slider .sliderCont .slideBox:hover {
            border: 2px dotted var(--BackColorYellow);
        }

        .slider .slideBox .slideTop {
            width: 100%;
            height: 80px;
            background: rgba(0 0 0 / 85%);
            position: absolute;
            bottom: 0;
            line-height: 30px;
            text-align: center;
        }

        .slider .slideBox .slideTop .price,
        .slider .slideBox .slideTop .date {
            width: calc(50% - 10px);
            height: 20px;
            overflow: hidden;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }

        .slider .slideBox .slideTop .price {
            background: red;
            float: left;
            margin-left: 5px;
        }

        .slider .slideBox .slideTop .date {
            background: green;
            float: right;
            margin-right: 5px;
        }

        .slider .beforeButton,
        .slider .afterButton {
            width: 25px;
            height: 100px;
            background: rgba(0 0 0 / 50%);
            position: absolute;
            top: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            user-select: none;
            border: 1px solid rgba(255 255 255 / 20%)
        }

        .slider .beforeButton {
            left: 10px;
        }

        .slider .afterButton {
            right: 10px;
        }

        .slider .sliderCont .conclusion {
            min-width: 350px;
            background: url(https://i.imgur.com/XHQxGTR.png);
            background-size: cover;
            background-position: center;
            margin-left: 2px;
        }

        .slider .sliderCont .conclusion .slideTop {
            overflow: hidden;
            height: auto;
        }

        /* badge and furni CSS */
        .index .badgeAndFurni {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-between;
            padding: 40px 50px;
        }

        .index .badgeAndFurni .badgeArea,
        .index .badgeAndFurni .furniArea {
            width: 48%;
            height: auto;
            border-radius: 5px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 5px;
        }

        .index .badgeAndFurni .title {
            width: calc(100% - 54px);
            margin: 0 auto 10px auto;
        }

        .index .badgeAndFurni .item {
            width: 60px;
            height: 60px;
            background: var(--BackColorGreen);
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #000;
            border-radius: 4px;
            position: relative;
            z-index: 1;
            margin: 3px;
            overflow: hidden;
            position: relative;
            box-shadow: inset 0 0 5px 2px var(--BackColorRed);
        }

        .index .badgeAndFurni .item .badge-name {
            position: absolute;
            width: inherit;
            height: inherit;
            background: var(--BackColorYellow);
            transition: 500ms all ease;
            font-size: 14px;
            font-weight: bold;
            line-height: 60px;
            text-align: center;
            color: var(--BackColorRed);
            opacity: 0;
        }

        .index .badgeAndFurni .item:hover .badge-name {
            opacity: 1;
        }

        .index .badgeAndFurni .item:hover {
            /* transform:translateY(-2px); */
            border: 1px solid var(--BackColorYellow);
            background: var(--BackColorYellow);
        }

        /* Message Area Start IN CSS */
        .index .messages {
            width: 43%;
            height: 500px;
            margin: 20px 5% 0 3%;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            background: url(images/user-bg.gif);
            background-position: right;
            border: 2px solid #000;
            float: right;
        }

        .index .messages .messageTitle {
            width: 100%;
            height: 50px;
            background: url(https://habbofont.net/font/palooza/sohbetodasi.gif);
            background-position: center;
            background-repeat: no-repeat;
        }

        .messages #chatLog {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
            height: 30px;
            border: 2px solid #000;
            border-radius: 5px;
            padding-left: 10px;
            padding-right: 105px;
            font-weight: bold;
        }

        .messages #chatLog:focus {
            outline: none;
        }

        .messages .chatRecButton {
            width: 100px;
            height: 26px;
            background: green;
            border: none;
            position: absolute;
            bottom: 12px;
            right: 12px;
            border-radius: 0 3px 3px 0;
            color: #fff;
            font-weight: bold;
        }

        .messages .messageCont {
            width: 100%;
            height: calc(100% - 100px);
            margin-bottom: 100px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 0 20px;
        }

        .messages .messageCont .messageBox {
            min-width: 50px;
            background: #9ee7ff;
            border: 2px solid #1983a2;
            border-radius: 5px;
            position: relative;
            color: #000;
            padding-left: 45px;
            padding-right: 5px;
            font-size: 13px;
            margin-bottom: 10px;
            display: table;
            min-height: 25px;
        }

        .messages .messageCont .messageBox span {
            width: 100%;
            display: table-cell;
            vertical-align: middle;
        }

        .messages .messageCont .messageBox span b {
            font-weight: bold;
            margin-right: 5px;
        }

        .messages .messageCont .messageBox .userBubble {
            width: 40px;
            background: #48cef4;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-right: 2px solid #1983a2;
            z-index: 1;
            display: flex;
            align-items: center;
            border-radius: 3px 0 0 3px;
        }

        .messages .messageCont .messageBox .userBubble:before {
            content: " ";
            position: absolute;
            border-width: 8px;
            border-color: transparent #1983a2 transparent transparent;
            border-style: solid;
            top: calc(50% - 8px);
            bottom: calc(50% - 8px);
            right: 0;
            z-index: 2;
        }

        .messages .messageCont .messageBox .userBubble:after {
            content: " ";
            position: absolute;
            border-width: 8px;
            border-color: transparent #9ee7ff transparent transparent;
            border-style: solid;
            top: calc(50% - 8px);
            bottom: calc(50% - 8px);
            right: -2px;
            z-index: 3;
        }

        /* Dragon Chat Box CSS */
        .messages .messageCont .sugar_monster {
            background: #ee97c2;
            border-color: #000;
            color: #000;
        }

        .messages .messageCont .sugar_monster .userBubble {
            border-right: 2px solid #000;
            background: #003172;
        }

        .messages .messageCont .sugar_monster .userBubble:before {
            border-color: transparent #000 transparent transparent;
        }

        .messages .messageCont .sugar_monster .userBubble:after {
            border-color: transparent #ee97c2 transparent transparent;
        }

        /* Love Chat Box CSS */
        .messages .messageCont .bubble_love {
            background: #ffb9c0;
            border-color: #dc2a52;
            color: #000;
        }

        .messages .messageCont .bubble_love .userBubble {
            border-right: 2px solid #dc2a52;
            background: #ff567a;
        }

        .messages .messageCont .bubble_love .userBubble:before {
            border-color: transparent #dc2a52 transparent transparent;
        }

        .messages .messageCont .bubble_love .userBubble:after {
            border-color: transparent #ffb9c0 transparent transparent;
        }

        /* Ocean Chat Box CSS */
        .messages .messageCont .bubble_ocean {
            background: #16bddc;
            border-color: #000;
            color: #000;
        }

        .messages .messageCont .bubble_ocean .userBubble {
            border-right: 2px solid #064945;
            background: #1061c6;
        }

        .messages .messageCont .bubble_ocean .userBubble:before {
            border-color: transparent #064945 transparent transparent;
        }

        .messages .messageCont .bubble_ocean .userBubble:after {
            border-color: transparent #16bddc transparent transparent;
        }

        /* Fortune Teller Chat Box CSS */
        .messages .messageCont .bubble_fortune_teller {
            background: #773c9f;
            border-color: #1f2336;
            color: #fff;
        }

        .messages .messageCont .bubble_fortune_teller .userBubble {
            border-right: 2px solid #1f2336;
            background: #2e3147;
        }

        .messages .messageCont .bubble_fortune_teller .userBubble:before {
            border-color: transparent #1f2336 transparent transparent;
        }

        .messages .messageCont .bubble_fortune_teller .userBubble:after {
            border-color: transparent #773c9f transparent transparent;
        }

        /* Football Chat Box CSS */
        .messages .messageCont .bubble_football {
            background: #d7d7d7;
            border-color: #000;
            color: #000;
        }

        .messages .messageCont .bubble_football .userBubble {
            border-right: 2px solid #225520;
            background: url(images/bubble_football.png);
        }

        .messages .messageCont .bubble_football .userBubble:before {
            border-color: transparent #225520 transparent transparent;
        }

        .messages .messageCont .bubble_football .userBubble:after {
            border-color: transparent #d7d7d7 transparent transparent;
        }

        /* Sun Chat Box CSS */
        .messages .messageCont .bubble_sun {
            background: #fbd093;
            border-color: #000;
            color: #000;
        }

        .messages .messageCont .bubble_sun .userBubble {
            border-right: 2px solid #ca7a07;
            background: #ffac00;
        }

        .messages .messageCont .bubble_sun .userBubble:before {
            border-color: transparent #ca7a07 transparent transparent;
        }

        .messages .messageCont .bubble_sun .userBubble:after {
            border-color: transparent #fbd093 transparent transparent;
        }

        /* FireStone146 Special Chat Box CSS */
        .messages .messageCont .bubble_firestone146 {
            background: #00ADB5;
            border-color: #000;
            color: #000;
            box-shadow: inset 0px 4px 1px 0px #dadada91;
        }

        .messages .messageCont .bubble_firestone146:before {
            content: url(images/bubble_founder.png);
            position: absolute;
            /* transform:rotateY(180deg); */
            top: -10px;
            left: -5px;
            z-index: 4;
        }

        .messages .messageCont .bubble_firestone146:after {
            content: url(images/bubble_founder.png);
            position: absolute;
            transform: rotateX(180deg);
            top: -15px;
            left: 30px;
            z-index: 4;
        }

        .messages .messageCont .bubble_firestone146 .userBubble {
            border-right: 2px solid #ca7a07;
            background: url(images/bubble_founder2.png);
            padding-left: 7px;
        }

        .messages .messageCont .bubble_firestone146 .userBubble img {
            z-index: 5;
        }

        .messages .messageCont .bubble_firestone146 .userBubble:before {
            border-color: transparent transparent transparent transparent;
        }

        .messages .messageCont .bubble_firestone146 .userBubble:after {
            border-color: transparent transparent transparent transparent;
        }

        /* Message Area Finish IN CSS */
        /* Last Comments Area Start IN CSS */
        .index .lastComments {
            width: 43%;
            margin: 0 3% 40px 5%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .index .lastComments .title {
            width: 90%;
        }

        .index .lastComments .item {
            width: 90%;
            height: 63px;
            background: url(https://i.imgur.com/mK1HMfc.png);
            margin: 5px 10px 0 10px;
            border: 2px solid #000;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        .index .lastComments .item:hover {
            border: 1px solid var(--BackColorYellow);
        }

        .index .lastComments .item:nth-child(2) {
            background-position: top;
        }

        .index .lastComments .item:nth-child(3) {
            background-position: center;
        }

        .index .lastComments .item:nth-child(4) {
            background-position: bottom;
        }

        .index .lastComments .item img {
            position: absolute;
            top: -30px;
            left: -10px;
        }

        .index .lastComments .item .username {
            position: absolute;
            bottom: 0;
            left: 50px;
            background: rgba(0 0 0 / 85%);
            font-size: 11px;
            padding: 5px;
            border-radius: 4px;
            color: #c1bfbf;
        }

        .index .lastComments .item .time {
            position: absolute;
            bottom: 0;
            right: 10px;
            background: rgba(0 0 0 / 85%);
            font-size: 11px;
            padding: 5px;
            border-radius: 4px;
            color: #c1bfbf;
        }

        .index .lastComments .item .comment {
            position: absolute;
            top: 3px;
            left: 50px;
            right: 10px;
            background: rgba(0 0 0 / 85%);
            font-size: 14px;
            padding: 8px 5px;
            border-radius: 4px;
        }

        /* Last Comments Area Finish IN CSS */
        /* Last Uzer Area Start IN CSS */
        .index .lastUser {
            width: 43%;
            height: 200px;
            margin: 40px 3% 40px 5%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .index .lastUser .lastUserBg {
            width: 90%;
            height: 250px;
            overflow: hidden;
            background-image: url(images/last_user_bg.png);
            background-color: #203c14;
            background-repeat: no-repeat;
            background-size: cover;
            border: 30px solid transparent;
            border-image: url(images/last_user_border.png) 30 round;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Last User Area Finish IN CSS */
        /* Active User Area Start In CSS */
        .index .activeUserArea {
            width: 100%;
            min-height: 80px;
            display: flex;
            align-items: center;
            padding: 20px 20px;
            border-top: 1px solid rgba(255 255 255/ .2);
            justify-content: center;
            flex-wrap: wrap;
        }

        .index .activeUserArea .title {
            width: 100%;
            margin: 0 auto;
            text-align: center;
            text-transform: uppercase;
            font-size: 22px;
        }

        .index .activeUserArea .box {
            height: 50px;
            max-width: calc(100% / 4 - 40px);
            min-width: 210px;
            background: url(images/active-user-bg.png);
            background-size: cover;
            position: relative;
            border-radius: 3px;
            border: 1px solid #000;
            /* overflow:hidden; */
            font-weight: bold;
            margin: 10px 15px;
            position: relative;
            filter:
                drop-shadow(1px 1px 0 rgba(255 255 255 / 10%)) drop-shadow(0 1px 0 rgba(255 255 255 / 10%)) drop-shadow(1px -1px 0 rgba(255 255 255 / 10%)) drop-shadow(0 -1px 0 rgba(255 255 255 / 10%));
            box-shadow: -1px 1px 0 rgba(255 255 255 /10%), -1px -1px 0 rgba(255 255 255 / 10%);
        }

        .index .activeUserArea .box .userIMG {
            width: 48px;
            height: 48px;
            overflow: hidden;
            border-radius: 50%;
            float: left;
            padding-top: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 5px;
            border: 2px solid rgba(255 255 255 / 50%);
            background: #000;
        }

        .index .activeUserArea .box .username {
            width: calc(100% - 60px);
            float: right;
            margin-top: 9px;
            margin-right: 5px;
            padding: 4px;
            text-align: center;
            border-radius: 5px;
            background: rgba(0 0 0 / 80%);
        }


        .index .activeUserArea .box:hover {
            filter:
                drop-shadow(1px 0 0 var(--BackColorYellow)) drop-shadow(0 1px 0 var(--BackColorYellow)) drop-shadow(0 -1px 0 var(--BackColorYellow)) drop-shadow(-1px 0 0 var(--BackColorYellow));
            /* box-shadow: -2px 1px 0 var(--BackColorYellow), -2px -1px 0 var(--BackColorYellow); */
        }

        .index .box .motto {
            display: none;
        }

        /* Active User Area Finish In CSS */
        /* Team Start In CSS */

        .community .team-content {
            width: 100%;
            margin: auto;
            position: relative;
            border-radius: 10px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            padding: 15px;
        }

        .community .subject {
            display: none;
        }

        .community .team .teamUser {
            background: var(--BackColorGreen);
            width: 150px;
            height: 180px;
            border-radius: 10px;
            border: 1px solid rgba(255 255 255 / 40%);
            margin: 0 20px 20px 0;
            transition: 150ms all ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .community .team .teamUser:before {
            content: " ";
            position: absolute;
            background: url(images/team-box.png);
            background-size: cover;
            background-position: center;
            width: 150px;
            height: 180px;
            z-index: -2;
            transition: 2s all ease;
        }

        .community .team .teamUser:after {
            content: " ";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            z-index: -1;
        }

        .team .teamUser .userAvatar {
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: contain !important;
            width: 90px;
            height: 90px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            margin: 0 auto 25px auto;
        }

        .team .teamUser:hover {
            transform: translateY(-5px);
            border: 2px solid #f59f2b;
        }

        .team .teamUser:hover .userAvatar {
            -webkit-filter: drop-shadow(2px 1px 0 #f59f2b) drop-shadow(-2px 1px 0 #f59f2b) drop-shadow(0 -2px 0 #f59f2b);
        }

        .team .teamUser .userAvatar .user {
            width: 100%;
            height: 110px;
            background-position: bottom center !important;
            background-repeat: no-repeat !important;
        }

        .team .teamUser p {
            width: 100%;
            text-align: center;
            color: #fff !important;
            font-weight: bold;
            padding: 2px 5px;
        }

        .team .teamUser .userRank a {
            color: rgba(0 0 0 / 80%) !important;
            -webkit-filter:
                drop-shadow(0 0 1px rgba(255 255 255/ 50%)) drop-shadow(0 0 1px rgba(255 255 255/ 50%)) drop-shadow(0 0 1px rgba(255 255 255/ 50%));
            font-weight: bold;
        }

        .team .teamUser .username {
            color: #fff !important;
        }

        /* Team Finish In CSS */
        /* Login Start In CSS */
        .login {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
            background: rgba(0, 0, 0, .8);
            backdrop-filter: blur(4px);
            display: none;
        }

        .login .loginCont {
            width: 50%;
            height: 70%;
            background: #000;
            background-image: url(images/sky-background.png);
            background-size: cover;
            background-repeat: repeat;
            background-position: right;
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, .5);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
            z-index: 1;
            overflow: hidden;
            margin: 5% auto 0 auto;
        }

        .login .loginCont label {
            width: 70%;
            height: 30px;
            border-radius: 5px;
            border: none;
            display: flex;
            justify-content: center;
            position: relative;
            margin-bottom: 30px;
        }

        .login .loginCont label input {
            background: var(--BackColorGreen);
            width: 100%;
            height: 54px;
            border-radius: 5px;
            border: none;
            padding: 0 0 0 55px;
            font-weight: 600;
            box-shadow: inset 0 0 5px 2px var(--BackColorRed);
            font-size: 17px;
        }

        .login .loginCont input:focus {
            outline: none;
        }

        .login .loginCont label span {
            background: var(--BackColorRed);
            width: 50px;
            height: 50px;
            padding: 2px;
            position: absolute;
            top: 2px;
            left: 2px;
            border-radius: 5px;
            border-right: 2px solid #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login .loginCont button {
            width: 70%;
            height: 40px;
            background: green;
            border: 1px solid #fff;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 3px 0 #fff;
            margin-top: 20px;
        }

        .login .loginCont button:active {
            box-shadow: 0 1px 0 rgba(255, 255, 255, .8);
            transform: translateY(2px);
        }

        .login .loginCont .title {
            position: absolute;
            top: 20px;
            background: rgba(0 0 0 / 60%);
            border: 3px solid #000;
            padding: 2px 10px;
        }

        .login .loginCont p {
            width: 80%;
            height: auto;
            position: absolute;
            bottom: 15px;
            text-align: center;
            font-weight: 600;
            background: rgba(0 0 0 / 60%);
            border-radius: 5px;
        }

        .login .loginCont .close {
            width: 35px;
            height: 35px;
            position: absolute;
            background-image: url(images/icons/close.png);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            top: 5px;
            right: 5px;
            overflow: hidden;
        }

        .login .loginCont .close:hover {
            cursor: pointer;
        }

        .login .loginCont button:hover {
            cursor: pointer;
        }

        /* Login CSS Finish */
        /* Supporter Page Start */
        .support {
            padding: 40px;
        }

        .supportCont {
            width: 100%;
            padding: 30px;
            margin: auto;
            position: relative;
            border-radius: 10px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-evenly;

        }

        .supportCont .supporter {
            width: 200px;
            height: 190px;
            background: #000f19;
            position: relative;
            padding-top: 40px;
            border-radius: 10px;
            border-top: 5px solid;
            border-bottom: 5px solid;
            border-left: 1px solid;
            border-right: 1px solid;
            margin-bottom: 20px;
        }

        .supportCont .supporter:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 10px rgba(255, 255, 255, .4);
        }

        .supportCont .supporter .avatar {
            width: calc(100% - 20px);
            height: 90px;
            background: #00d5e8;
            border-radius: 10px;
            margin: 0 10px 0 10px;
            position: relative;
            background-repeat: no-repeat;
            background-position: center center, right bottom;
            background-size: auto, cover;
        }

        .supportCont .supporter .avatar:before {
            content: " ";
            width: 10px;
            position: absolute;
            left: 0;
            top: 10px;
            bottom: 10px;
            border-radius: 0 10px 10px 0;
            background: #000f19;
        }

        .supportCont .supporter .avatar:after {
            content: " ";
            width: 10px;
            position: absolute;
            right: 0;
            top: 10px;
            bottom: 10px;
            border-radius: 10px 0 0 10px;
            background: #000f19;
        }

        .supportCont .supporter .username {
            height: 25px;
            background: #00d5e8;
            position: absolute;
            top: 0;
            left: 25px;
            right: 25px;
            text-align: center;
            line-height: 25px;
            border-radius: 0 0 10px 10px;
            color: #000f19;
            font-weight: bold;
            font-size: 16px;
        }

        .supportCont .supporter .badges {
            height: 25px;
            position: absolute;
            bottom: 10px;
            right: 10px;
            left: 10px;
            text-align: center;
            line-height: 25px;
            border-radius: 10px;
            color: #000f19;
            font-weight: 600;
            text-transform: capitalize;
        }

        .supportCont .supporter .badges img {
            height: 35px;
        }

        /* Supporter Page Finish */
        /* User Profile CSS Start */
        .profile .profilePage {
            width: calc(100% - 50px);
            overflow: hidden;
            margin: 25px;
        }

        .profile .profilePage .profileArea {
            width: calc(100% - 30px);
            height: 300px;
            border: 1px solid var(--BackColorGreen);
            margin: 19px auto;
            border-radius: 10px;
            box-shadow: inset 0 0 4px 3px var(--BackColorRed);
        }

        .profilePage .profileArea .userProfile {
            width: 300px;
            height: 60px;
            background: var(--BackColorRed);
            border: 1px solid var(--BackColorYellow);
            margin: 40px 10px 0 5%;
            position: relative;
            border-radius: 5px;
            margin-left: 162px;
        }

        .userProfile .avatar {
            width: 140px;
            height: 145px;
            background: url(images/team-box.png);
            background-size: cover;
            background-position: center;
            /* background: linear-gradient(var(--BackColorGreen), var(--BackColorRed)); */
            border-radius: 5px;
            margin-top: 0;
            margin-left: -145px;
            position: absolute;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: flex-end;
            border: 1px solid var(--BackColorYellow);
            padding-bottom: 5px;
        }

        .userProfile .avatar .rank {
            width: 121px;
        }

        .userProfile .username,
        .userProfile .motto,
        .userProfile .userRecordDate {
            position: absolute;
        }

        .userProfile .username {
            left: 10px;
            top: 5px;
            font-size: 24px;
        }

        .userProfile .motto {
            left: 10px;
            bottom: 5px;
            font-size: 14px;
            color: var(--BackColorYellow);
            font-weight: bold;
        }

        .userProfile .userRecordDate {
            left: 75px;
            bottom: -20px;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
        }

        .profileArea .selectedBadges {
            width: 300px;
            background: var(--BackColorRed);
            margin-top: 20px;
            margin-left: 162px;
            border-radius: 5px;
            padding: 10px 0;
            display: flex;
            justify-content: space-evenly;
            border: 1px solid var(--BackColorYellow);
        }

        .profileArea .selectedBadges .badge {
            width: 45px;
            height: 45px;
            background: var(--BackColorGreen);
            border-radius: 5px;
            border: 1px solid var(--BackColorYellow);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .profileArea .selectedBadges .badge::before {
            content: attr(badgename);
            height: auto;
            position: absolute;
            background: var(--BackColorGreen);
            z-index: 3;
            font-size: 12px;
            padding: 2px;
            border-radius: 5px;
            opacity: 0;
            transition: 400ms all ease;
            bottom: 105%;
            visibility: hidden;
            text-align: center;
        }

        .profileArea .selectedBadges .badge:hover::before {
            opacity: 1;
            visibility: visible;
        }


        /* User Profile CSS Finish */
        /* User Record CSS Start */
        .register {
            height: 390px !important;
            overflow: hidden;
        }

        .register .recordCont {
            width: 50%;
            height: 100%;
        }

        .register .registerLeft {
            float: left;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: rgba(0 0 0 / 60%)
        }

        .register .registerLeft #userImage {
            position: absolute;
            bottom: 25px;

        }

        .register .registerRight {
            background: rgba(0 0 0 / 60%);
            float: right;
        }

        .register .registerRight .recordArea {
            display: flex;
            width: 100%;
            height: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .registerRight .recordArea label {
            display: flex;
            align-items: center;
            background: #930015;
            margin: 5px 0;
            padding: 5px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            border: 1px solid #930015;
        }

        .registerRight .recordArea label:before {
            content: " ";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 5px;
            background: #fd193b;
            z-index: 1;
            border-radius: 5px;
        }

        .registerRight .recordArea label img {
            width: 18px;
            z-index: 2;
        }

        .registerRight .recordArea label input {
            height: 30px;
            width: 300px;
            padding-left: 5px;
            outline: none;
            font-size: 15px;
            border: none;
            border-left: 3px solid #930015;
            margin-left: 10px;
            z-index: 2;
            background: transparent;
            color: #fff;
            font-weight: bold;
            border-radius: 5px 0 0 0;
        }

        ::placeholder {
            color: #fff;
        }

        .registerRight .recordArea .codeLabel {
            background: #c46f1c;
            border: 2px solid #c46f1c;
        }

        .registerRight .recordArea .codeLabel input {
            border-left: 3px solid #c46f1c;
            color: #000;
        }

        .registerRight .recordArea .codeLabel:before {
            background: #f9b807;
        }

        .registerRight .recordArea span {
            width: 340px;
            height: 40px;
            border: 1px solid #f9b807;
            margin: 5px 0;
            line-height: 40px;
            text-align: center;
            border-radius: 10px;
            color: #f9b807;
            font-weight: 600
        }

        .registerRight .recordArea #regSubmit {
            width: 340px;
            height: 40px;
            background: #00813e;
            border-width: 2px 2px 5px 2px;
            border-color: #8eda55;
            border-style: solid;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            margin-top: 30px;
        }

        .registerRight .recordArea #regSubmit:hover {
            cursor: pointer;
            transform: translateY(-5px);
        }

        /* User Record CSS Finish */
        /*======================= News Content CSS Start =========================*/
        .news {
            width: 100%;
            padding: 30px 45px;
        }

        .news .title {
            width: calc(100%);
            margin: 0 auto;
        }

        .news .newsCont {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .news .newsCont .newsBox {
            height: 200px;
            margin: 10px;
            border-radius: 10px;
            border: 2px solid #000;
            background-position: right !important;
            position: relative;
            overflow: hidden;
            transition: 1s all ease;
        }

        .news .newsCont .newsBox:hover {
            transition: 1s all ease;
            background-position: -20px center !important;
            border: 2px solid var(--BackColorYellow);
        }

        .news .newsCont .newsBox:nth-child(1),
        .news .newsCont .newsBox:nth-child(4),
        .news .newsCont .newsBox:nth-child(5) {
            width: calc(60% - 40px);
        }

        .news .newsCont .newsBox:nth-child(2),
        .news .newsCont .newsBox:nth-child(3),
        .news .newsCont .newsBox:nth-child(6) {
            width: 40%;
        }

        .news .newsCont .newsBox:nth-child(1) {
            background: url(https://habbolex.com/img/userfiles/images/3_4-large-promo-for-article.png);
        }

        .news .newsCont .newsBox:nth-child(2) {
            background: url(https://habbolex.com/img/userfiles/images/lpromo_Jul23.png);
        }

        .news .newsCont .newsBox:nth-child(3) {
            background: url(https://habbolar.com/img/userfiles/kapakresim/400/lpromo_baw_warriors2016.png);
        }

        .news .newsCont .newsBox:nth-child(4) {
            background: url(https://habbolar.com/img/userfiles/2023-01/6.png);
        }

        .news .newsCont .newsBox:nth-child(5) {
            background: url(https://habbolar.com/img/userfiles/kapakresim/lpromo_2023_habbomerge.png);
        }

        .news .newsCont .newsBox:nth-child(6) {
            background: url(https://habboloji.com/v2-web/img/user-uploads/YwS3I-11.-Y%C3%84%C2%B1l-Promo.png);
        }

        .news .newsCont .newsBox .newInfo {
            position: absolute;
            background: rgba(0, 0, 0, .8);
            backdrop-filter: blur(4px);
        }

        .news .newsCont .newsBox .name {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            padding: 5px 10px 5px 5px;
        }

        .news .newsCont .newsBox .name a {
            color: #fff;
            text-decoration: none;
        }

        .news .newsCont .newsBox .name a:hover {
            color: var(--BackColorYellow);
            cursor: pointer;
        }

        .news .newsCont .newsBox .category {
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            padding: 5px 10px 5px 5px;
            border-radius: 0 0 0 10px;
        }

        .news .newsCont .newsBox .reporter {
            bottom: 0;
            top: 0;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            backdrop-filter: blur(0);
        }

        .news .newsCont .newsBox .time {
            top: 0;
            left: 0;
            padding: 5px 10px 5px 5px;
            font-size: 14px;
            border-radius: 0 0 10px 0;
        }

        .news .newsCont .newsBox .reporter .rep-name {
            position: absolute;
            background: linear-gradient(-45deg, black, red);
            border: 1px solid #fff;
            padding: 5px;
            left: -300%;
            border-radius: 5px;
            top: 30px;
            transition: 1s all ease;
        }

        .news .newsCont .newsBox:hover .rep-name {
            transition: 1s all ease;
            left: -1px;
        }

        .wrapper {
            background: black;
            z-index: 99;
            position: absolute;
            left: -5px;
            bottom: 10px;
            right: -5px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
            border-radius: 10px;
            border: 1px solid #fff;
        }

        /* page all title in css */
        .title {
            font-weight: bold;
            background: var(--BackColorYellow);
            margin: 20px 15px 10px 15px;
            border: 2px solid #000;
            border-radius: 5px;
            padding: 3px;
            font-family: 'Tilt Prism', cursive;
            color: var(--BackColorRed);
        }

        /* page all title in css finish */
        /* drop shadow in box css */
        .dropShadow_box {
            filter:
                drop-shadow(1px 1px 0 rgba(255 255 255 / 10%)) drop-shadow(-1px 1px 0 rgba(255 255 255 / 10%)) drop-shadow(1px -1px 0 rgba(255 255 255 / 10%)) drop-shadow(-1px -1px 0 rgba(255 255 255 / 10%));
        }

        /* drop shadow in box css finish */
        /* Duyuru Start In CSS */
        .duyuru {
            width: calc(100% - 250px);
            margin: 0 0 20px 0;
            float: right;
            border: 1px solid var(--BackColorGreen);
            padding: 20px 10px;
            background: var(--BackColorYellow);
            border-radius: 10px;
            text-align: center;
            color: var(--BackColorRed);
            font-size: 14px;
        }

        /* Duyuru Finish In CSS */

        /* All News Start In CSS */
        .menu {
            width: calc(100%);
            height: auto;
            border-bottom: 1px solid var(--BackColorGreen);
        }

        .menu ul {
            display: flex;
            flex-wrap: wrap;
            padding: 10px 50px;
        }

        .menu ul li {
            list-style: none;
            padding: 2px 4px;
            margin: 3px;
            background: var(--BackColorGreen);
            border-radius: 5px;
        }

        .menu ul li a:hover {
            color: var(--BackColorRed)
        }

        .allNews .news {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
        }

        .allNews .box {
            background: url(https://habbotar.net/pUploads/news-6a504dca06daa3024c711b5f2866527d.png);
            background-position: right -30px center;
            width: calc(33% - 20px);
            height: 180px;
            border-radius: 5px;
            transition: 400ms all ease-in-out;
            margin: 10px;
            position: relative;
            overflow: hidden;
        }

        .allNews .box:hover {
            background-position: center center;
        }

        .allNews .box .name,
        .allNews .box .timer,
        .allNews .box .reporter {
            position: absolute;
            background: rgba(0 0 0 / 90%);
            padding: 3px 7px;
        }

        .allNews .box .name {
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            text-transform: capitalize;
        }

        .allNews .box .timer {
            right: 5px;
            top: 5px;
            border-radius: 10px;
        }

        .allNews .box .reporter {
            left: 5px;
            top: 5px;
            border-radius: 10px;
        }

        @media only screen and (max-width: 1023px) {
            .allNews .box {
                width: calc(50% - 20px);
            }
        }

        @media only screen and (max-width: 768px) {
            .allNews .box {
                width: calc(100% - 20px);
            }
        }

        /* All News CSS In Finish */
    </style>
</head>

<body>
    <script>
        let getUrl = '<?php echo $_GET['page'] ?>';
    </script>
    <!-- Giriş Alanı Başlangıç -->
    <div class="login">
        <div class="loginCont">
            <div class="close"></div>
            <div class="title"><img src="https://habbofont.net/font/habbo_oldschool/giris+yap.gif" alt=""></div>
            <label for="username">
                <span><img src="images/icons/login-user.png" alt=""></span>
                <input type="text" placeholder="Kullanıcı Adı" id="username">
            </label>
            <label for="password">
                <span><img src="images/icons/login-password.png" alt=""></span>
                <input type="password" placeholder="Şifre" id="password">
            </label>
            <button>Giriş Yap!</button>
            <p>Yeniden hoşgeldin, hemen giriş yap ve eğlenceye devam et!</p>
        </div>
    </div>
    <!-- Giriş Alanı Bitiş -->

    <!-- Header Alanı Başlangıç -->
    <header>
        <div class="header">
            <!-- Loader Page -->
            <div class="wrapper">
                <img src="images/load_to.gif" alt="">
            </div>
            <div class="userProfile">
                <div class="userBg">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Xiyonat&head_direction=3&gesture=sml" alt="">
                    <!-- <img src="images/waiter.png" alt=""> -->
                </div>
            </div>
            <ul>
                <li class="dropShadow_box"><i class="fa-solid fa-house"><a href="index2.php?page=index"></i>&nbsp; anasayfa</a></li>
                <li class="dropShadow_box"><i class="fa-solid fa-newspaper"></i><a href="index2.php?page=allNews"></i>&nbsp;haberler</a></li>
                <li class="dropShadow_box"><i class="fa-solid fa-user"><a href="index2.php?page=community"></i>&nbsp; Topluluk</a></li>
                <li class="dropShadow_box"><i class="fa-solid fa-award"><a href="index2.php?page=shop"></i>&nbsp; Null</a></li>
            </ul>
            <ul class="menu-bottom">
                <li class="dropShadow_box" id="login" style="background:green"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;giriş yap</li>
                <li class="dropShadow_box" style="background:red"><a href="index2.php?page=register"><i class="fa-solid fa-user-plus"></i>&nbsp;kayıt ol</a></li>
                <li class="dropShadow_box" style="background:black"><i class="fa-solid fa-gear"></i>&nbsp;Admin Panel</li>
                <li class="dropShadow_box" style="background:black"><i class="fa-solid fa-address-card"></i>&nbsp;Profilim</li>
            </ul>
        </div>
    </header>
    <!-- Header Alanı Bitiş -->

    <div class="topBunner">
        <a href="?page=index"><img src="images/habboto-logo.png" alt=""></a>
        <div class="welcome">bnc</div>
        <script>
            const date = new Date();
            const welcome = document.querySelector(".welcome");
            const saat = date.getHours();
            let text;
            if (saat >= 7 && saat <= 12) {
                text = "Günaydın";
            } else if (saat <= 17) {
                text = "Tünaydın";
            } else {
                text = "İyi Akşamlar";
            }
            welcome.innerHTML = text + ' Ziyaretçi <img style="margin-left:5px" src="images/bubble_parrot.gif">';
        </script>
    </div>
    <!-- Duyuru Alanı Başlangıç -->
    <div class="duyuru">
        <strong>Kahramanmaraş ve çevre illeri etkileyen depremde hayatını kaybedenlere Allah'tan rahmet,
            yakınlarına baş sağlığı ve yaralılara da acil şifalar diliyoruz. Başımız sağ olsun.
        </strong>
    </div>
    <!-- İçerik Alanı Başlangıç Kısmı -->
    <div class="contentArea">
        <div class="content index">
            <!-- slider area :ON -->
            <div class="slider">
                <div class="beforeButton">
                    <img src="images/before_icon.png" alt="">
                </div>
                <div class="sliderArea">
                    <div class="sliderCont">
                        <!-- <div class="slideBox conclusion dropShadow_box">
                            <div class="slideTop">
                                text area
                            </div>
                        </div> -->
                        <div class="slideBox dropShadow_box">
                            <img src="https://images.habbo.com/c_images/web_promo_small/spromo_Rares_FloppyBunnyHat_Apr23.png" alt="">
                            <div class="slideTop">Tavşan Şapkası
                                <div class="price">35
                                    <img src="images/credi-icon.png" alt="">+35
                                    <img src="images/diamond-icon.png" alt="">
                                </div>
                                <div class="date">01/20/2023</div>
                            </div>
                        </div>
                        <div class="slideBox dropShadow_box">
                            <img src="https://images.habbo.com/c_images/web_promo_small/spromo_Umbrella_Mar23.png" alt="">
                            <div class="slideTop">Hanami Şemsiye
                                <div class="price">25
                                    <img src="images/credi-icon.png" alt="">+25
                                    <img src="images/diamond-icon.png" alt="">
                                </div>
                                <div class="date">01/20/2023</div>
                            </div>
                        </div>
                        <div class="slideBox dropShadow_box">
                            <img src="https://images.habbo.com/c_images/web_promo_small/spromo_SakuraDragon_Mar23.png" alt="">
                            <div class="slideTop">Hanami Festival Ejderhası
                                <div class="price">25
                                    <img src="images/credi-icon.png" alt="">+25
                                    <img src="images/diamond-icon.png" alt="">
                                </div>
                                <div class="date">01/20/2023</div>
                            </div>
                        </div>
                        <div class="slideBox dropShadow_box">
                            <img src="https://images.habbo.com/c_images/web_promo_small/spromo_GoldFloor_Mar23.png" alt="">
                            <div class="slideTop">Altın Tuğla Zemin
                                <div class="price">250
                                    <img src="images/credi-icon.png" alt="">
                                </div>
                                <div class="date">01/20/2023</div>
                            </div>
                        </div>
                        <div class="slideBox dropShadow_box">
                            <img src="https://images.habbo.com/c_images/web_promo_small/spromo_GoldFloor_Mar23.png" alt="">
                            <div class="slideTop">Altın Tuğla Zemin
                                <div class="price">250
                                    <img src="images/credi-icon.png" alt="">
                                </div>
                                <div class="date">01/20/2023</div>
                            </div>
                        </div>
                        <div class="slideBox dropShadow_box">
                            <img src="https://images.habbo.com/c_images/web_promo_small/spromo_GoldFloor_Mar23.png" alt="">
                            <div class="slideTop">Altın Tuğla Zemin
                                <div class="price">250
                                    <img src="images/credi-icon.png" alt="">
                                </div>
                                <div class="date">01/20/2023</div>
                            </div>
                        </div>
                        <!-- top is just box area! -->
                    </div>
                </div>
                <div class="afterButton">
                    <img src="images/after_icon.png" alt="">
                </div>
            </div>
            <hr>
            <!-- slider area :OFF -->
            <div class="news">
                <h3 class="title dropShadow_box"><i class="fa-solid fa-newspaper"></i>&nbsp;Haberler</h3>
                <div class="newsCont">
                    <div class="newsBox dropShadow_box">
                        <div class="newInfo name"><a href="../habbotohofficial/new-detail.php?yeni-habbotr-fan-sayfasi">Habbo Türkiye Unofficial Fan Sayfası</a></div>
                        <div class="newInfo category"><i class="fa-solid fa-bookmark"></i>&nbsp;HabboTo</div>
                        <div class="newInfo reporter">
                            <span class="rep-name">FireStone146</span>
                            <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=FireStone146&action=wav&direction=2&head_direction=3&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                        </div>
                        <div class="newInfo time"><i class="fa-solid fa-clock"></i>&nbsp;1 Ocak'ta</div>
                    </div>
                    <div class="newsBox dropShadow_box">
                        <div class="newInfo name"><a href="new-detail.php?haber-adi">Haber Adı</a></div>
                        <div class="newInfo category"><i class="fa-solid fa-bookmark"></i>&nbsp;HabboTo</div>
                        <div class="newInfo reporter">
                            <span class="rep-name">Osmank33</span>
                            <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=osmank33&action=wav&direction=2&head_direction=3&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                        </div>
                        <div class="newInfo time"><i class="fa-solid fa-clock"></i>&nbsp;1 Ocak'ta</div>
                    </div>
                    <div class="newsBox dropShadow_box"></div>
                    <div class="newsBox dropShadow_box"></div>
                    <div class="newsBox dropShadow_box"></div>
                    <div class="newsBox dropShadow_box"></div>
                </div>
            </div>
            <hr>
            <!-- Message area :ON -->
            <div class="messages dropShadow_box">
                <div class="messageTitle"></div>
                <div class="messageCont">
                    <div class="messageBox sugar_monster">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>Biraz Tatlı, Biraz Ürkütücü.
                        </span>
                    </div>
                    <div class="messageBox bubble_love">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>En Saf Aşkın Baloncuk Hali.
                        </span>
                    </div>
                    <div class="messageBox bubble_ocean">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>Mavi Denizlerin Temsili.
                        </span>
                    </div>
                    <div class="messageBox bubble_fortune_teller">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>Acaba Bugün Falımda Ne Var Renkleri.
                        </span>
                    </div>
                    <div class="messageBox bubble_football">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>Tam Bir Futbol Çılgınıyım Diyenlere.
                        </span>
                    </div>
                    <div class="messageBox bubble_sun">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>Soğuk Değil Sıcağı Seviyoruz Biz.
                        </span>
                    </div>
                    <div class="messageBox bubble_firestone146">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=FireStone146&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>FireStone146:</b>Kurucuya Özel Baloncuk Yaptık.
                        </span>
                    </div>
                    <div class="messageBox">
                        <div class="userBubble">
                            <img width="30" height="33" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=TOH-Official&size=b&direction=2&head_direction=2&gesture=sml&headonly=1" alt="">
                        </div>
                        <span>
                            <b>TOH-Official:</b>En Şık Olanlar Sade Olanlardır Diyorsan.
                        </span>
                    </div>
                </div>
                <input type="text" id="chatLog" placeholder="Sohbet-Odası'na Yaz">
                <button class="chatRecButton">Gönder</button>
            </div>
            <!-- Message area :OFF -->
            <!-- Last Comment area :ON -->
            <div class="lastComments">
                <h3 class="title dropShadow_box"><i class="fa-solid fa-comments"></i>&nbsp;Son Yorumlar</h3>
                <div class="item dropShadow_box">
                    <img onclick="goToUser('FireStone146')" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=FireStone146&action=&direction=2&head_direction=2&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                    <div class="username goToUser"><a href="?page=profile&name=FireStone146">FireStone146</a></div>
                    <div class="time">1 saat önce</div>
                    <div class="comment">Bu bir yorumdur!</div>
                </div>

                <div class="item dropShadow_box">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=Rose_0&action=&direction=2&head_direction=2&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                    <div class="username"><a href="?page=profile&name=Rose_0">Rose_0</a></div>
                    <div class="time">1 saat önce</div>
                    <div class="comment">Bu bir yorumdur!</div>
                </div>
                <div class="item dropShadow_box">
                    <img onclick="goToUser('osmank33')" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=osmank33&action=&direction=2&head_direction=2&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                    <div class="username"><a href="?page=profile&name=osmank33">osmank33</a></div>
                    <div class="time">1 saat önce</div>
                    <div class="comment">Bu bir yorumdur!</div>
                </div>
            </div>
            <!-- Last Comment area :OFF -->
            <!-- Last User area :ON -->
            <div class="lastUser dropShadow_box">
                <div class="lastUserBg">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=osmank33&action=&direction=2&head_direction=2&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=FireStone146&action=&direction=3&head_direction=3&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                    <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?&user=Rose_0&action=&direction=4&head_direction=4&img_format=png&gesture=sml&headonly=0&size=b" alt="">
                </div>
            </div>
            <!-- Last Uzer area :OFF -->
            <hr>
            <!-- badge and furniture area :ON -->
            <div class="badgeAndFurni">
                <div class="badgeArea">
                    <h3 class="title dropShadow_box"><i class="fa-solid fa-certificate"></i>&nbsp;Son Eklenen Rozetler</h3>
                    <script>
                        async function badgeFurniCreate(){
                            const data = await JSON.parse(fetch("https://apihabbo.com/api/furnis?per_page=12"));
                            const outputData = await data.[1].json();
                            outputData.forEach(dat => {console.log("data" ,dat)});
                        }
                        badgeFurniCreate();
                    </script>

                    <?php
                    function badgeAndFurni($name)
                    {
                        if ($name == "furni") {
                            $apiUrl = 'https://apihabbo.com/api/furnis?per_page=12';
                            $furnis = json_decode(file_get_contents($apiUrl), true);
                            foreach ($furnis['data'] as $furni) {
                                $lastCode = str_replace('*', '_', $furni['code']);
                                // Echo out badges
                                echo '
                            <div class="item dropShadow_box">
                                <img src="https://images.habbo.com/dcr/hof_furni/' . $furni['revision'] . '/' . $lastCode . '_icon.png" alt="">
                            </div>
                            ';
                            }
                        } else {

                            $apiUrl = 'https://apihabbo.com/api/badges?per_page=12';
                            $badges = json_decode(file_get_contents($apiUrl), true);
                            foreach ($badges['data'] as $badge) {
                                // Echo out badges
                                echo '
                                    <div class="item dropShadow_box">
                                        <img src="https://images.habbo.com/c_images/album1584/' . $badge['code'] . '.gif" alt="">
                                        <div class="badge-name">' . $badge["code"] . '</div>
                                    </div>
                                    ';
                            }
                        }
                    }
                    badgeAndFurni("badge");
                    ?>
                </div>
                <div class="furniArea">
                    <h3 class="title dropShadow_box"><i class="fa-solid fa-gift"></i>&nbsp;Son Eklenen Mobiler</h3>
                    <?php
                    badgeAndFurni("furni");
                    ?>
                </div>
            </div>
            <!-- badge and furniture area :OFF -->
            <!-- Active User Area :ONN -->
            <div class="activeUserArea">
                <div class="title dropShadow_box">Onlıne</div>
                <div class="box">
                    <div class="userIMG">
                        <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=FireStone146&head_direction=3&gesture=sml" alt="">
                    </div>
                    <p class="username">
                        FireStone146
                    </p>
                </div>

                <div class="box dropShadow_box">
                    <div class="userIMG">
                        <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=DarneSSboY&head_direction=3&gesture=sml" alt="">
                    </div>
                    <p class="username">
                        DarneSSboY
                    </p>
                </div>

                <div class="box dropShadow_box">
                    <div class="userIMG">
                        <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=Ubersavaş1903&head_direction=3&gesture=sml" alt="">
                    </div>
                    <p class="username">
                        Ubersavaş1903
                    </p>
                </div>

                <div class="box dropShadow_box">
                    <div class="userIMG">
                        <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=lleadersouking&head_direction=3&gesture=sml" alt="">
                    </div>
                    <p class="username">
                        lleadersouking
                    </p>
                </div>

                <div class="box dropShadow_box">
                    <div class="userIMG">
                        <img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=_radloff_&head_direction=3&gesture=sml" alt="">
                    </div>
                    <p class="username">
                        _radloff_
                    </p>
                </div>
            </div>
            <!-- Active User Area  :OFF -->
        </div>
        <script>
            let beforeBtn = document.querySelector(".beforeButton");
            let afterBtn = document.querySelector(".afterButton");
            let afterNumber = 0;
            let allBox = document.querySelectorAll(".slideBox");
            let clickNumber = 0;

            afterBtn.addEventListener('click', () => {
                if (afterNumber >= -1270 && clickNumber != allBox.length - 4) {
                    document.querySelector(".sliderCont").style.transform = "translate3d(" + (afterNumber += -220) + 'px' + ", 0, 0)";
                    clickNumber++;
                }
            });
            beforeBtn.addEventListener('click', () => {
                if (afterNumber != 0) {
                    document.querySelector(".sliderCont").style.transform = "translate3d(" + (afterNumber += 220) + 'px' + ", 0, 0)";
                    clickNumber--;
                }
            });
        </script>
        <!-- Haberler Alanı Başlangıç -->
        <div class="content allNews">

            <style>

            </style>
            <div class="menu"> <!--menu start-->
                <ul>
                    <li><a href="?page=allNews&category=1">Tüm Haberler</a></li>
                    <li><a href="?page=allNews&category=2">Habbo Hotel</a></li>
                    <li><a href="?page=allNews&category=3">Yol Haritası</a></li>
                    <li><a href="?page=allNews&category=4">HabboTo</a></li>
                </ul>
            </div> <!--menu end-->

            <div class="news"><!-- newss start -->
                <div class="box">
                    <a href="" class="name">new name</a>
                    <div class="timer">1 saat önce</div>
                    <div class="reporter">username</div>
                </div>
                <div class="box">
                    <a href="" class="name">new name</a>
                    <div class="timer">1 saat önce</div>
                    <div class="reporter">username</div>
                </div>
                <div class="box">
                    <a href="" class="name">new name</a>
                    <div class="timer">1 saat önce</div>
                    <div class="reporter">username</div>
                </div>
                <div class="box">
                    <a href="" class="name">new name</a>
                    <div class="timer">1 saat önce</div>
                    <div class="reporter">username</div>
                </div>
            </div><!-- news end -->
        </div>
        <!-- Haberler Alanı Bitiş -->
        <!-- Ekip Alanı Başlangıç -->

        <div class="content community">
            <div class="menu"> <!--menu start-->
                <ul>
                    <li><a href="?page=community&sub=team">Ekip</a></li>
                    <li><a href="?page=community&sub=partner">Partnerler</a></li>
                    <li><a href="?page=community&sub=impressum">Gizlilik Politikası</a></li>
                    <li><a href="?page=community&sub=rules">Site Kuralları</a></li>
                </ul>
            </div> <!--menu end-->
            <div class="team subject">
                <div class="team-content"></div>
            </div>
            <div class="impressum subject">impressum</div>
            <div class="partner subject">
                <style>
                    .partner-content {
                        width: 100%;
                        height: auto;
                        display: flex;
                        justify-content: center;
                        flex-wrap: wrap;
                    }

                    .partner-content .box {
                        min-width: 200px;
                        height: 70px;
                        background: var(--BackColorGreen);
                        border: 1px solid var(--BackColorYellow);
                        border-radius: 10px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 10px;
                        transition: 100ms all ease-in;
                    }

                    .partner-content .box:hover {
                        border: 2px solid var(--BackColorYellow);
                    }
                </style>
                <div class="partner-content">
                    <a href="#" class="box">
                        <img src="https://images.habbo.com/c_images/Fansites/fansite_it_habbolife_180x60.png" alt="">
                    </a href="#">
                    <a href="#" class="box">
                        <img src="https://habboloji.com/admin/fileman/Uploads/habbolifeforum.gif" alt="">
                    </a href="#">
                    <a href="#" class="box">
                        <img src="https://habboloji.com/admin/fileman/Uploads/habbofont_partner.gif" alt="">
                    </a href="#">
                    <a href="#" class="box">
                        <img src="https://habboloji.com/admin/fileman/Uploads/Radu.png" alt="">
                    </a href="#">
                    <a href="#" class="box">
                        <img src="images/grafik_title.png" alt="">
                    </a href="#">
                </div>
            </div>
        </div>
        <script>
            let category = '<?php echo $category ?>';
            console.log(category)
            document.querySelector('.' + category).style.display = "block";
        </script>
        <!-- Ekip Alanı Bitiş -->
        <!-- Supporter Alanı Başlangıç -->
        <div class="content support">
            <div class="supportCont">
            </div>
        </div>
        <?php
        include('to_islemler.php');
        ?>
        <!-- Supporter Alanı Bitiş -->
        <!-- Kullanıcı Profil Sayfası Başlangıç -->
        <div class="content profile">
            <div class="profilePage">
                <div class="profileArea" style="background:url(images/sky-background.png);background-position:bottom;background-size:cover;background-repeat:no-repeat;">
                    <?php
                    getUser_profile();
                    ?>
                    <!-- <div class="avatar profileAvatar"></div>
                                <div class="username profileName"></div>
                                <div class="motto">Mi Familia TÖH</div>
                                <div class="userRecordDate">1 Ağustos 2022 Tarihinde Kayıt Oldu</div> -->
                    <!-- <div class="userInformation">
                                <div class="userRank">Kurucu</div>
                            </div> -->
                </div>
            </div>
        </div>
        <!-- Kullanıcı Profil Sayfası Bitiş -->
        <!-- Kullanıcı Kayıt Sayfası :ON -->
        <div class="content register">
            <div class="registerLeft recordCont">
                <img src="images/register_bg.png" alt="">
                <img id="userImage" src="images/undefined.png" alt="">
                <p id="motto"></p>
            </div>
            <div class="registerRight recordCont">
                <div class="recordArea">
                    <label for="">
                        <img src="images/record_user_icon.png" alt="">
                        <input type="text" id="recordName" placeholder="Kullanıcı Adı">
                    </label>
                    <label for="">
                        <img src="images/record_pass_icon.gif" alt="">
                        <input type="text" id="recordPassword" placeholder="Şifre">
                    </label>
                    <label class="codeLabel" for="">
                        <img src="images/record_code_icon.gif" alt="">
                        <input type="text" id="recordCode" placeholder="" disabled="disabled">
                    </label>
                    <span>Üstte Yer Alan Kodu Mottonuza Yapıştırın</span>
                    <span>Habbo şifreniz ile benzersiz bir şifre kullanın!</span>
                    <button id="regSubmit">Kayıt Ol</button>
                </div>
            </div>
            <script>
                let userName;
                let userImage = document.querySelector('#userImage');
                let recordCode = document.querySelector('#recordCode');
                let motto = document.querySelector("#motto");
                recordCode.value = "Recor Code Area";

                document.querySelector("#recordName").addEventListener("keyup", () => {
                    if (document.querySelector("#recordName").value != "") {
                        recordCode.value = "HTOH-[0146]";
                        userName = document.querySelector("#recordName").value;
                        userImage.src = 'https://www.habbo.com.tr/habbo-imaging/avatarimage?user=' + userName + '&head_direction=3&action=crr=667&gesture=sml';
                        // motto.innerHTML = '<?php echo getUser_motto('xiyonat') ?>';
                    } else {
                        userImage.src = 'images/undefined.png';
                    }
                });
            </script>
        </div>
        <!-- Kullanıcı Kayıt Sayfası :OFF -->
    </div>
    <!-- Footer Alnı Başlangıç -->
    <footer>
        <div class="footer">

            <!-- <img src="images/unofficial.png" alt=""> -->
            <div class="fan-policy">
                <img src="images/unofficial.png" alt="">
                <p>
                    <b>HabboTo</b>, Sulake Suomi veya İştirakleri tarafından doğrulanmamış,
                    onaylanmamış ve desteklenmemiştir ve bunlar ile bağlı değildir.
                    <b>HabboTo</b>, Habbo Fan Sitesi Poliçesi altında izin verilen ticaret markalarını
                    ve diğer Habbo fikrî mülkiyetlerini kullanabilir.
                </p>
            </div>
            <div class="footer-menu">
                <div onclick="changeMenu(this)" menubtn="team">ekip</div>
                <i class="fa-solid fa-heart"></i>
                <div onclick="changeMenu(this)" menubtn="support">supporter</div>
                <i class="fa-solid fa-heart"></i>
                <div onclick="changeMenu(this)" menubtn="contact">İletişim</div>
                <i class="fa-solid fa-heart"></i>
                <div onclick="changeMenu(this)" menubtn="security-policy">Gizlilik Politikası</div>
            </div>
            <script>
                function changeMenu(element) {
                    let btnId = element.getAttribute('menubtn');
                    let contentNumber = document.querySelectorAll(".content").length;
                    let contentElement = document.querySelectorAll(".content");
                    console.log(btnId, contentNumber)
                    for (let i = 0; i <= contentNumber; i++) {
                        contentElement[i].style.display = "none";
                        document.querySelector('.' + btnId).style.display = "block";
                    }

                }
            </script>
            <p class="reserve">2022 © <b>HabboTo.</b> Tüm Hakları Saklıdır</p>
        </div>
    </footer>
    <!-- Footer Alanı Bitiş -->
    <script src="index.js"></script>
    <script>
        let contBox = document.querySelectorAll(".content");
        let profile = document.querySelector(".profile");

        function goToUser(usname) {
            sessionStorage.clear();
            console.log(usname);
            for (let m = 0; m <= 5; m++) {
                contBox[m].classList.remove("activeCTN");
                profile.classList.add('activeCTN');
                sessionStorage.setItem("username", usname);
            }
            document.querySelector(".profileName").innerHTML = usname;
            document.querySelector(".profileAvatar").innerHTML = '<img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=' + usname + '&head_direction=2&gesture=sml" alt="">'
        }

        // fade ismiyle fonksiyon oluşturur 
        const loadTo = () => {
            const wrapper = document.querySelector(".wrapper");
            const body = document.querySelector("body");
            body.style.overflow = "visible";
            wrapper.style.opacity = 0;
            wrapper.style.visibility = "hidden";
        }
        window.addEventListener('load', loadTo); //site yüklenirken load fonksiyonunu çağırır!
    </script>

    <!-- yeni menü sayfalama sistemi -->
    <script>
        document.querySelector("." + getUrl).style.display = "block";

        //     contentAll = document.querySelectorAll(".content");
        // for(let i = 0; i<= contentAll.length;i++){
        //     contentAll[i].style.
        // }
    </script>
    <script>
        let number = '<?php echo $myDecode->lastAccessTime ?>';
        let lastDate = Date.parse(number);
        let newDate = Date.parse(Date());
        let minute = Math.floor((newDate - lastDate) / 60000);
        let hours = Math.floor(minute / 60);
        let lastMinute = minute - (hours * 60);
        document.querySelector(".userRecordDate").innerHTML = "Son Giriş: " + hours + " Saat " + lastMinute + " Dakika Önce!";
    </script>
</body>

</html>
