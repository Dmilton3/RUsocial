<?php
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>RUS</title>

	<link rel="icon"
		type="image/png"
		href="Radfordlogo.png">	
<!--#d1d3d4 = grey  #c2011b = red #808285 = dark grey #FFFFFF= white-->
<style>
.myhover{
	width:100%;
	height:50px;
	background:red;
	transition: width 2s,background 2s;
	position: absolute;
	left:0px;
	top:0;
}
.myhover2{
	width:50px;
	height:100%;
	background:red;
	transition: width 2s,background 2s;
	position: absolute;
	left:0px;
	top:0;
}
.userButtclicked{
	width: 50px;
	height: 50px;
	float: right;
	background: #808285;
	transition: height 2s,background 2s;
	float: right;
	position: absolute;
	left:90%;
	top:0%;
	
}
.userButtclicked:hover{
	width: 50px;
	height: 70px;
	float: right;
	background: #808285;
	transition: height 2s,background 2s;
	float: right;
	position: absolute;
	left:90%;
	top:0%;
	
}
.hiddenchat{
	width:0px;
	height:0px;
	background:#d1d3d4;
	position: absolute;
	transition: width 2s,height 2s,background 2s;
	top:15px;
	right:50%;
}
.chat{
	width:50px;
	height:50px;
	background:#808285;
	transition: width 2s,background 2s;
	float: left;
	position: absolute;
	top:16px;
	right: 250px;
}
.chatclicked{
	width:50px;
	height:50px;
	background:#808285;
	transition: width 2s,background 2s;
	float: left;
	position: absolute;
	top:16px;
	right: 250px;
}
.chat:hover{
	height:70;
	transition: height 2s,background 2s;
}
.chatclicked:hover{
	height:70;
	transition: height 2s,background 2s;
}
.fullChat{
	width:200px;
	height: 400px;
	background: #808285;
	position: absolute;
	top: 33px;
	right:25px;
	overflow: scroll;
	transition: width 2s,height 2s,background 2s;
}
.fullChat a{
	color: #000000;
	padding:12px 16px;
	text-decoration: none;
	display:block;
	text-align: left;
}
.fullChat a:hover{
	background-color: #f1f1f1;

}
.hiddenuser{
	width: 0px;
	height: 0px;
	background:#d1d3d4;
	position: absolute;
	right:5%;
	top:50px;
	transition: width 2s,height 2s,background 2s;
}
.activeuser{
	width: 100px;
	height: 200px;
	background:#808285;
	position: absolute;
	right:5%;
	top:50px;
	transition: width 2s,height 2s,background 2s;
}
.friendButton
{
	width:50px;
	height:50px;
	background:#808285;
	transition: height 2s,background 2s;
	float: left;
	position: absolute;
	top:0%;
	right: 140;
}
.friendButton:hover
{
	width:50px;
	height:70px;
	background:#808285;
	transition: height 2s,background 2s;
	position: absolute;
	top:0%;
	right: 140;
}
.friendButtonAct
{
	width:50px;
	height:50px;
	background:#808285;
	transition: height 2s,background 2s;
	float: left;
	position: absolute;
	top:0;
	right: 140px;
}
.friendButtonAct:hover
{
	width:50px;
	height:70px;
	background:#808285;
	transition: height 2s,background 2s;
	position: absolute;
	top:0;
	right: 140px;
}
.friendhidden
{
	width:0px;
	height:0px;
	background:#d1d3d4;
	transition: width 2s,height 2s,background 2s;
	float: left;
	position: absolute;
	top:50px;
	right: 150px;
}
.friendactive
{
	width:100px;
	height:300px;
	background:#808285;
	transition: width 2s,height 2s,background 2s;
	float: left;
	position: absolute;
	top:50px;
	right: 150px;
}
.texthidden
{
	width:0px;
	height:0px;
	background:#d1d3d4;
	transition: width 2s,height 2s,background 2s;
	float: left;
	position: absolute;
	top:50px;
	right: 200;
}
.textactive
{
	width:500px;
	height:500px;
	border-style: solid;
	border-color: red;
	transition: width 2s,height 2s,background 2s;
	float: left;
	position: absolute;
	top:50px;
	right: 200;
}

</style>
<script>

function function1(){
	var userb = document.getElementById("user");
	var menu = document.getElementById("hiddenmenu");
	var button = document.getElementById("mypara");
	var userbox2 = document.getElementById("userbox");
	if(menu.classList.contains("myhover") == true)
	{
	 menu.className = "clicked";
	 
	
	}
	else
	{
		 menu.className = "myhover";
	 	userb.className = "userButt";	
	 	 userb.innerHTML = "";	
	 	 if(userbox2.classList.contains("activeuser") == true)
	 	{
	 		userbox2.className = "hiddenuser";
	 	}
	}
}
function function2(){
	var userbox2 = document.getElementById("userbox");
	if(userbox2.classList.contains("hiddenuser") == true)
	{
		userbox2.className = "activeuser";
		userbox2.innerHTML = "<?php echo "Hello". $_SESSION['username'];?>";
	}
	else
	{
		userbox2.className = "hiddenuser";
		userbox2.innerHTML = "";
	}
}
function chatFunction(){
	var chat =  document.getElementById("chats");
	var chatbox =  document.getElementById("hiddenchatbox");
	var test1 =  document.getElementById("test1");
	var test2 =  document.getElementById("test2");
	if(chat.classList.contains("chat") == true)
	{
		chat.className = "chatclicked";
		chatbox.className = "fullChat";
		test1.innerHTML = "Test 1";
		test2.innerHTML = "Test 2";
	}
	else
	{
		chat.className = "chat";
		chatbox.className = "hiddenchat";
		chat.innerHTML = "Chats"
		test1.innerHTML = " ";
		test2.innerHTML = " ";
	}
}
function friendF()
{
 var friendButt = document.getElementById("friendB");
 var friendchat = document.getElementById("friendbox");
 	if (friendButt.classList.contains("friendButton") == true) 
 	{
 		friendButt.className = "friendButtonAct";
 		friendchat.className = "friendactive";
 	}
 	else
 	{
 		friendButt.className = "friendButton";
 		friendchat.className = "friendhidden";
 	}
}
function chatF()
{
	 var textchat = document.getElementById("hiddentext");

	if (textchat.classList.contains("texthidden") == true)
	{
		textchat.className = "textactive";
	}
	else
	{
		textchat.className = "texthidden";
		
	}
}
</script>
</head>
<body bgcolor="#d1d3d4">

<p id='hiddenmenu'  class="myhover"></p>
<p id='hiddenmenu2'  class="myhover2"></p>
<p id='user' class='userButtclicked' onclick="function2()" >User</p>
<p id='userbox' class='hiddenuser'></p>
<p id='friendB' class="friendButton" onclick="friendF()">Friends</p>
<p id='friendbox' class="friendhidden"></p>
<div id='hiddenchatbox' class='hiddenchat'>
	<a id='test1' href='#' onclick="chatF()"></a>
	<a id='test2' href='#' onclick="chatF()"></a>
</div>
<div id='chats' class='chat' onclick="chatFunction()">Chats</div>
<div id='hiddentext' class='texthidden'></div>
</body>
</html>