<html>
    <head>
   <title>login</title>
        <style>
           * { margin : 0 auto;}
a {
    color: #333;
    text-decoration: none;
}
input {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 0px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
.inner_login {
    position: absolute;
    left: 50%;
    top: 58%;
    margin: -140px 0 0 -155px;
}
.login_tistory{
        position: relative;
        width: 320px;
        margin: 0 auto;
    }
.screen_out {
    position: absolute;
    width: 0;
    height: 0;
    overflow: hidden;
    line-height: 0;
    text-indent: -9999px;    
}
body, button, input, select, td, textarea, th {
    font-size: 13px;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
}    
fieldset, img {
    border: 0;
}
.login_tistory .box_login {
    margin: 35px 0 0;
    border: 1px solid #ddd;
    border-radius: 3px;
    background-color: #fff;
    box-sizing: border-box;
}
.login_tistory .inp_text {
    position: relative;
    width: 100%;
    margin: 0;
    padding: 18px 19px 19px;
    box-sizing: border-box;
}
.login_tistory .inp_text+.inp_text {
    border-top: 1px solid #ddd;
}
.inp_text input {
    display: block;
    width: 100%;
    height: 100%;
    font-size: 13px;
    color: #000;
    border: none;
    outline: 0;
    -webkit-appearance: none;
    background-color: transparent;
}
.btn_login {
    margin: 20px 0 0;
    width: 100%;
    height: 48px;
    border-radius: 3px;
    font-size: 16px;
    color: #2F4F4F;
    background-color: #E6E6FA;
}
.login_append {
    overflow: hidden;
    padding: 15px 0 0;
}
.inp_chk {
    display: inline-block;
    position: relative;
    margin-bottom: -1px;
}
.login_append .inp_chk {
    float: left;
}
.inp_chk .inp_radio {
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
    border: 0;
}
.inp_chk .lab_g {
    display: inline-block;
    margin-right: 19px;
    color: #909090;
    font-size: 13px;
    line-height: 19px;
    vertical-align: top;
}
.inp_chk .ico_check {
    display: inline-block;
    width: 18px;
    height: 18px;
    margin: 1px 4px 0 0;
    background-position: -60px 0;
    color: #333;
}
.inp_chk .txt_lab {
    vertical-align: top;
}
.login_append .txt_find {
    float: right;
    color: #777;
}
.box {position: absolute; top:20%; left : 35%; text-align :center;border : 2.5px solid #2A4970; border-radius:10px;display:absolute; width:30%; height:55%;}
 #header{ width:100%; height:10%; display : block; background-color:#2A4970; position:absolute; top:90%}
 </style>
</head>
<body>
<img src="login.png" width=21% height=auto>
<div id="header">
</div>
<div class="box">
<div class="inner_login">
    <div class="login_tistory">
        <form method="post" id = "authForm" action ='filter.php'>
                <div class="inp_text">
                <label for="loginId" class="screen_out">이름</label>
                <input type="text" id="loginId" name="name" placeholder="이름">
                </div>
                <div class="inp_text">
                <label for="loginPw" class="screen_out">주민등록번호</label>
                <input type="password" id="loginPw" name="pID" placeholder="주민등록번호">
                </div>
                <input type='submit' value='로그인' class="btn_login"  onclick="location.href='filter.php'"/>
                <div class="login_append">
                <div class="inp_chk"> 
                <input type="checkbox" id="keepLogin" class="inp_radio" name="keepLogin">
                <label for="keepLogin" class="lab_g"></label>
        </form>
    </div>
</div>
</div>
</body>    
</html>