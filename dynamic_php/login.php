<!doctype html>
<html>
    <head>
    <title>RUsocial</title>
    <meta charset="UTF-8> 
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/

body p,h1,h2,h3,h4,h5,h6,a{
	font-family: 'Roboto', sans-serif;
}
body {/*--
	background:pink;
	*/
    background: url('../images/bg3.jpg') no-repeat 62% 34%;
    background-size: cover;
	text-align:center;
}
/*--header--*/
.agileheader h1 {
    font-size: 51px;
    text-transform: uppercase;
    letter-spacing: 10px;
    color: #fff;
    font-weight: 600;
    margin: 70px 0px;
}
.w3layouts-main h2 {
	color: #fff;
    font-size: 29px;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding-bottom: 15px;
}
.w3layouts-main {
    width: 25%;
    margin: 0 auto;
    background:rgba(0, 0, 0, 0.34);
    padding: 42px 35px;
}
/*--//header--*/
/*--main--*/
input[type="email"], input[type="password"] {
    width: 88%;
    padding: 15px 0px 15px 42px;
    border: 1px solid #fff;
    outline: none;
    font-size: 14px;
    color: #fff;
    margin: 14px 0px;
    font-family: 'Roboto', sans-serif;
}
input[type="email"] {
    background: url("../images/mail.png") no-repeat 10px 11px;
    background-size: 24px;
}
input[type="password"] {
    background: url("../images/pass.png") no-repeat 8px 9px;
    background-size: 28px;
}
.w3layouts-main span {
    font-size: 16px;
    color: #fff;
    float: left;
    width: 32%;
	margin-top: 8px;
	font-family: 'Roboto', sans-serif;
}
.w3layouts-main h6 {
    font-size: 16px;
    float: right;
    width: 37%;
	color: #fff;
    letter-spacing: 1px;
	margin-top: 8px;
	text-decoration:underline;
}
.w3layouts-main a {
    color: #fff;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
.w3layouts-main a:hover{
	color:rgba(208, 95, 216, 0.9);
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
input[type="submit"] {
    padding: 12px 38px;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: #003b64;
    color: white;
    border: none;
    outline: none;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    margin: 45px auto 31px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
input[type="submit"]:hover {
	background:rgba(213, 38, 133, 0.64);
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
}
.w3layouts-main p a {
    text-transform: uppercase;
    font-size: 18px;
	text-decoration:underline;
    letter-spacing: 1px;
    color: #fff;
    padding: 10px;
}
.w3layouts-main p {
    font-size: 17px;
    color: #fff;
}
/*--//main--*/

/*--footer--*/
.footer-w3l p {
    margin: 4em 0em;
    color: #fff;
    font-size: 15px;
    font-weight: 300;
    letter-spacing: 2px;
}
.footer-w3l a {
    color:rgba(208, 95, 216, 0.9);
}
.footer-w3l a:hover {
    color:rgba(19, 129, 206, 0.82);;
    text-decoration: underline;
}
/*--//footer--*/

/*--responsive--*/
@media(max-width:1440px){
	.w3layouts-main {
		width: 28%;
	}
}
@media(max-width:1366px){
	.w3layouts-main {
		width: 30%;
	}
}
@media(max-width:1280px){
	.w3layouts-main {
		width: 33%;
	}
	.agileheader h1 {
		font-size: 41px;
	}
	.w3layouts-main h2 {
		font-size: 27px;
	}
}
@media(max-width:1080px){
	.w3layouts-main {
		width: 49%;
	}
}
@media(max-width:1024px){
	.w3layouts-main {
		width: 40%;
	}
}
@media(max-width:991px){
	.w3layouts-main {
		width: 42%;
	}
	.agileheader h1 {
		font-size: 38px;
	}
	.w3layouts-main h2 {
		font-size: 25px;
	}
}
@media(max-width:800px){
	.w3layouts-main {
		width: 51%;
	}
	.agileheader h1 {
		font-size: 34px;
		letter-spacing: 9px;
	}
	.w3layouts-main h2 {
		font-size: 23px;
	}
}
@media(max-width:768px){
	.w3layouts-main {
		width: 54%;
	}
	.agileheader h1 {
		font-size: 33px;
		letter-spacing: 8px;
	}
	.w3layouts-main h2 {
		font-size: 22px;
	}
	.footer-w3l {
		padding: 2em 0em 8.7em;
	}
}
@media(max-width:736px){
	.w3layouts-main {
		width: 56%;
	}
	.agileheader h1 {
		margin: 60px 0px;
	}
	.footer-w3l {
		padding: 0em;
	}
}
@media(max-width:667px){
	.w3layouts-main {
		width: 61%;
	}
	.agileheader h1 {
		font-size: 31px;
	}
	.w3layouts-main h2 {
		font-size: 21px;
	}
	.agileheader h1 {
		margin: 52px 0px;
	}
}
@media (max-width: 640px){
	.w3layouts-main {
		width: 64%;
	}	
}
@media (max-width: 600px){
	.w3layouts-main {
		width: 69%;
	}
	.footer-w3l p {
		margin: 3em 0.3em;
		line-height:2;
	}
	.agileheader h1 {
		font-size: 29px;
		letter-spacing:7px;
	}
}
@media (max-width: 568px){
	.w3layouts-main {
		width: 73%;
	}
	.w3layouts-main p a {
		font-size: 17px;
	}
	.agileheader h1 {
		font-size: 28px;
	}
	.w3layouts-main h2 {
		font-size: 20px;
	}
}
@media (max-width: 480px){
	.agileheader h1 {
		font-size: 26px;
		letter-spacing:6px;
	}
	.w3layouts-main h2 {
		font-size: 19px;
	}
	.w3layouts-main span {
		width: 38%;
		font-size: 15px;
	}
	.w3layouts-main h6 {
		width: 44%;
		font-size: 15px;
	}
   .w3layouts-main p {
		font-size: 16px;
		width: 105%;
	}
	.w3layouts-main p a {
		font-size: 17px;
		letter-spacing: 0px;
	}
	input[type="submit"] {
		font-size: 17px;
	}
	input[type="email"], input[type="password"] {
		width: 86%;
	}
	.footer-w3l p {
		letter-spacing: 1px;
	}
}
@media (max-width: 414px){
	.agileheader h1 {
		font-size: 25px;
		letter-spacing:4px;
		margin: 34px 0px;
	}
	.w3layouts-main h2 {
		font-size: 18px;
	}
	.w3layouts-main {
		padding: 34px 26px;
	}
	.w3layouts-main span {
		font-size: 15px;
		width: 41%;
		margin-top: 9px;
	}
	input[type="email"], input[type="password"] {
		width: 84%;
		padding: 13px 0px 13px 40px;
		margin: 10px 0px;
	}
	.w3layouts-main h6 {
		font-size: 15px;
		width: 48%;
		margin-top: 9px;
	}
	.w3layouts-main p {
		width: 95%;
		line-height: 32px;
	}
	.w3layouts-main p a {
		font-size: 16px;
		letter-spacing: 1px;
	}
	.footer-w3l p {
		margin: 2em 0.6em;
		line-height:1.8;
	}
	input[type="submit"] {
		margin: 45px auto 25px;
	}
	.footer-w3l p {
		margin: 2em 1.7em;
		line-height: 2;
		letter-spacing:0px;
	}
	.footer-w3l {
		padding: 0.8em 0em;
	}
}
@media (max-width: 384px){
	.agileheader h1 {
		font-size: 23px;
		margin: 31px 0px;
	}
	.w3layouts-main {
		padding: 30px 26px;
	}
	input[type="email"], input[type="password"] {
		margin: 10px 0px;
		width: 83%;
		padding: 10px 0px 10px 39px;
	}
	input[type="email"] {
		background: url("../images/mail.png") no-repeat 9px 8px;
		background-size: 22px;
	}
	input[type="password"] {
		background: url("../images/pass.png") no-repeat 6px 6px;
		background-size: 26px;
	}
	.w3layouts-main span {
		width: 44%;
		margin-top: 12px;
	}
	.w3layouts-main h6 {
		width: 51%;
		margin-top: 12px;
	}
	input[type="submit"] {
		padding: 12px 52px;
		font-size: 17px;
		letter-spacing: 1px;
		margin: 34px auto 28px;
	}
	.w3layouts-main p {
		width: 102%;
		line-height: 29px;
	}
	.footer-w3l p {
		line-height: 27px;
	}
}
@media (max-width: 375px){
	.agileheader h1 {
		margin: 32px 0px;
	}
	.w3layouts-main span {
		width: 45%;
		margin-top: 10px;
	}
	.w3layouts-main h6 {
		width: 53%;
		margin-top: 10px;
		font-size: 14px;
	}
	.w3layouts-main {
		padding: 24px 34px;
		 width: 65%;
	}
	.w3layouts-main span {
		width: 100%;
	}
	.w3layouts-main h6 {
		width: 100%;
	}
	.w3layouts-main h2 {
		letter-spacing: 1px;
	}
	input[type="submit"] {
		padding: 12px 33px;
		font-size: 15px;
		letter-spacing: 0px;
		margin: 21px auto 12px;
	}
	.w3layouts-main p {
		width: 100%;
		line-height: 28px;
	}
	.footer-w3l p {
		line-height: 29px;
	}
	.footer-w3l {
		padding: 0.7em;
	}
	input[type="email"], input[type="password"] {
		width: 82%;
	}
}
@media (max-width: 320px){
	.agileheader h1 {
		font-size: 20px;
		margin: 20px 0px;
		letter-spacing:3px;
	}
	.w3layouts-main h2 {
		font-size: 17px;
		letter-spacing:0px;
	}
	.w3layouts-main {
		padding: 24px 28px;
		width: 73%;
	}
	input[type="email"], input[type="password"] {
		width: 81%;
		padding: 12px 0px 12px 38px;
	}
	input[type="email"] {
		background: url("../images/mail.png") no-repeat 8px 9px;
		background-size: 23px;
	}
	input[type="password"] {
		background: url("../images/pass.png") no-repeat 6px 6px;
		background-size: 26px;
	}
	.w3layouts-main span {
		font-size: 14px;
	}
	input[type="submit"] {
		font-size: 15px;
	}
	.w3layouts-main p {
		font-size: 15px;
	}
	.w3layouts-main p a {
		font-size: 15px;
		letter-spacing: 0px;
	}
	.footer-w3l p {
		letter-spacing: 0px;
		line-height: 27px;
		margin: 0em 0.5em;
	}
}
/*--//responsive--*/


    </head>
    
<body>

</body>
</html>
        