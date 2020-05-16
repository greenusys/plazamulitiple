<?php
$session = $this->session->userdata('logged_user');
$myId = $session[0]->user_id;
?>

<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; 2019
		<!-- <div class="bullet"></div> Design By  -->
	</div>
	<div class="footer-right">
		2.3.0
	</div>
</footer>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.alldatatable').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	});
</script>
<script type="text/javascript">
	//  $('tbody').sortable();
</script>

<script type="text/javascript">

	function gebi(id) {
		return document.getElementById(id);
	}

	RowSorter(gebi('table2'), {
		handler: 'td.sorter',
		onDrop: function (tbody, row, new_index, old_index) {
			var table = tbody.nodeName === 'TBODY' ? tbody.parentNode : tbody;
			table.querySelectorAll('tfoot td')[0].innerHTML = (old_index + 1) + '. row moved to ' + (new_index + 1);
		}
	});


</script>
<style>
	.chat_close {
		position: absolute;
		right: 10px;
		top: 6px;
		color: white;
	}

	/*  .chat_minimize{
		position: absolute;
		right: 28px;
		top:9px;
		color: white;
	  }*/
	.chat_s li span {
		font-size: 12px
	}

	.chat_popup {
		width: 60px;
		height: 60px;
		bottom: 0px;
		position: fixed;
		z-index: 12;
		right: 0px;
		cursor: pointer;
		border-radius: 1.25rem !important;
	}

	.chat_list {
		display: none;
		bottom: 0px;
		position: fixed;
		z-index: 12;
		right: 0px;
		background: #e6e2e2;
		cursor: pointer;
		width: 280px;
		height: 320px;
	}

	/*.chat_box{

	  display: block;
	  bottom:0px;
	  position: fixed;
	  z-index: 1500;
	  right: 286px;
	  background: #e6e2e2;
	  cursor: pointer;
	  width: 280px;
	  height: 320px;
	}*/
	/*.cht_inpt{
	  bottom: 0px;
	  position: absolute;
	  width: 100%;
	}
	.cht_inpt span{
	  position: absolute;
	  right: 10px;
	  z-index: 12;
	  top: 14px;
	  font-size: 14px;
	}
	.cht_inpt span i{
	  font-size: 16px;
	}*/
	/*.pop_list{
	  bottom: 0px;
	  position: fixed;
	  z-index: 1522;
	}
	.chat_time{
		  font-size: 10px;
		 margin-top: 3px;
	}
	.ch{
		  font-size: 9px;
	  height: 200px;
	  overflow-y: scroll;
	  overflow-x: hidden;
	  background: fixed;
	}*/

	/* * {
	 box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 -webkit-box-sizing: border-box;
   }*/
	/*body {
	  background-color: #f1f1f1;
	  display: flex;
	  font-family: 'Lato', sans-serif;
	  font-size: 0.875rem;
	  font-weight: 400;
	  color: #2c3e50;
	  height: 100vh;
	  overflow-y: hidden;
	}*/
	/* CUSTOM SCROLLBAR FOR CHATBOX */
	.chats::-webkit-scrollbar {
		width: 0.125rem;
	}

	.chats::-webkit-scrollbar-thumb {
		background: #CFD8DC;
	}

	.chats::-webkit-scrollbar-thumb:hover {
		background: #B0BEC5;
	}

	.chats > ul {
		overflow-y: scroll;
	}

	/* INPUT TEXT PLACEHOLDER CUSTOMIZE */
	::-webkit-input-placeholder {
		color: #B0BEC5;
	}

	::-moz-placeholder {
		color: #B0BEC5;
	}

	:-ms-input-placeholder {
		color: #B0BEC5;
	}

	:-moz-placeholder {
		color: #B0BEC5;
	}

	#viewport {
		position: fixed;
		bottom: 0px;
		z-index: 10000;
		display: flex;
		flex: 1;
		justify-content: center;
		align-items: center;
	}

	#viewport > .chatbox {
		position: relative;
		display: table;
		float: left;
		margin: 1rem;
		width: 20rem;
		height: 25rem;
		background-color: #02183a;
		box-shadow: 0 0.25rem 2rem rgba(38, 50, 56, 0.1);
		overflow: hidden;
	}

	#viewport > .chatbox > .chats {
		position: absolute;
		top: 20px;
		left: 0;
		bottom: 0;
		right: 0;
		display: table-cell;
		vertical-align: bottom;
		padding: 1rem;
		margin-bottom: 2.875rem;
		overflow-y: scroll;
	}

	ul {
		padding: 0;
	}

	ul > li {
		position: relative;
		list-style: none;
		display: block;
		margin-top: 1.5rem;
		margin: 1rem 0;
		transition: 0.5s all;
	}

	ul > li:after {
		display: table;
		content: '';
		clear: both;
	}

	.msg {
		max-width: 85%;
		display: inline-block;
		padding: 0.5rem 1rem;
		line-height: 1rem;
		min-height: 2rem;
		font-size: 0.875rem;
		border-radius: 1rem;
		margin-bottom: 0.5rem;
		word-break: break-all;
		text-transform: capitalize;
	}

	.msg.him {
		float: left;
		background-color: #E91E63;
		color: #fff;
		border-bottom-left-radius: 0.125rem;
	}

	.msg.you {
		float: right;
		background-color: #ECEFF1;
		color: #607D8B;
		border-bottom-right-radius: 0.125rem;
	}

	.msg.load {
		background-color: #F8BBD0;
		border-bottom-left-radius: 0.125rem;
	}

	.msg > span {
		font-weight: 500;
		position: absolute;
	}

	.msg > span.partner {
		color: #B0BEC5;
		font-size: 0.5rem;
		top: 0;
		font-size: 0.675rem;
		margin-top: -1rem;
	}

	.msg > span.time {
		color: #CFD8DC;
		font-size: 0.5rem;
		bottom: -0.35rem;
		display: none;
	}

	.msg:hover span.time {
		display: block;
	}

	.msg.him > span {
		left: 0;
	}

	.msg.you > span {
		right: 0;
	}

	.sendBox {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		background: white;
	}

	.sendBox input {
		color: white;
		background: brown;
		font-family: 'Lato', sans-serif;
		font-size: 0.875rem;
		display: block;
		width: 100%;
		border: none;
		padding: 0.75rem 0.75rem;
		line-height: 1.25rem;
		border-top: 0.125rem solid #ECEFF1;
		transition: 0.5s ease-in-out;
	}

	input:hover,
	input:focus,
	input:active {
		outline: none !important;
		border-top: 0.125rem solid #E91E63;
	}

	/*  LOADING MESSAGE CSS */
	.load .dot {
		display: inline-block;
		width: 0.375rem;
		height: 0.375rem;
		border-radius: 0.25rem;
		margin-right: 0.125rem;
		background-color: rgba(255, 255, 255, 0.75);
	}

	.load .dot:nth-last-child(1) {
		animation: loadAnim 1s .2s linear infinite;
	}

	.load .dot:nth-last-child(2) {
		animation: loadAnim 1s .4s linear infinite;
	}

	.load .dot:nth-last-child(3) {
		animation: loadAnim 1s .6s linear infinite;
	}

	@keyframes loadAnim {

	0
	{
		transform: translate(0, 0)
	;
	}
	25
	%
	{
		transform: translate(0, -0.25rem)
	;
	}
	50
	%
	{
		transform: translate(0, 0)
	;
	}
	}
	.chat_box_nav_bar {
		height: 44px;
		background: black;
	}
</style>

<div id="viewport"></div>
<div class="pop_list d-flex">
	<!--  <div class="chat_box" id="chat__">
		 <div class="d-flex bg-info text-white p-2">
		   <div class=" "><h6>User's Name</h6></div> -->
	<!--    <div class="chat_minimize"><i class="fas fa-minus"></i></div> -->
	<!-- <div class="chat_close"><i class="fas fa-times"></i></div>

  </div>
  <div class="">
	<div class="">
		<ul class="m-0 list-unstyled">
		  <li class="w-75 m-2">
			<div class="  "><span class="p-1 px-2 rounded bg-primary text-white">hi</span></div>
			<div class="chat_time" >5:40 PM</span>
		  </li>
		  <li class="w-75 m-2 text-right float-right">
			<div class=""><span class="p-1 px-2 rounded  bg-success text-white">hi</span></div>
			<div class="chat_time" >5:40 PM</span>
		  </li>
		</ul>
	</div>
	<div class="cht_inpt" style="">
	  <input type="text" placeholder="Enter Message" name="" class="form-control">
	  <span><i class="fab fa-telegram-plane"></i></span>
	</div>
  </div>
</div> -->
</div>


<script type="text/javascript">
	$(document).ready(function () {
		$.ajax({
			url: "<?=base_url('Dashboard/fetchOnlineUser')?>",
			type: "post",
			success: function (response) {
				console.log(response);
				// response = JSON.parse(response);
			// 	if (response.length > 0) {
			// 		for (let i = 0; i < response.length; i++) {
			// 			var card = '';
			// 			card += '<div class="card border-bottom p-2 opn_chat" frnd_id="' + response[i].user_id + '" f-name="' + response[i].fullname + '">';
			// 			card += '<ul class="list-unstyled d-flex chat_s m-0">';
			// 			card += '<li class="">';
			// 			card += '<img src="<?=base_url()?>assets/img/avatar/avatar-3.png"  style="width: 40px;height: 40px"class="rounded-circle" >';
			// 			card += '</li>';
			// 			card += '<li class="ml-1 w-75">';
			// 			card += '<h6 class="m-0 mt-1">' + response[i].fullname + ' </h6>';
			// 			// card+='<span>-</span>';
			// 			card += '</li>';
			// 			card += '<li class="text-center" >';
			// 			card += '<h6 class="m-0"><i class="fas fa-circle text-primary"></i></h6>';
			// 			card += '<span class="">Never</span>';
			// 			card += '</li>';
			// 			card += '</ul>';
			// 			card += '</div>';
			// 			$('#onlineUser').append(card);
			// 		}

			// 	}
			}
		});
	});
</script>
<!-- <script>!function (e, t, a) {
		var c = e.head || e.getElementsByTagName("head")[0], n = e.createElement("script");
		n.async = !0, n.defer = !0, n.type = "text/javascript", n.src = t + "/static/js/chat_widget.js?config=" + JSON.stringify(a), c.appendChild(n)
	}(document, "https://app.engati.com", {
		bot_key: "790de58bb3964c50",
		welcome_msg: true,
		branding_key: "default",
		server: "https://app.engati.com",
		e: "p"
	});</script> -->
<script type="text/javascript">

	function sendMessage(message, sendMessageTo, messagetype) {
		//	if plain message the send message text
		if (messagetype == "plain") {
			$.ajax({
				url: "<?=base_url('ChatController/sendMessage')?>",
				type: "post",
				data: {message: message, sendMessageTo: sendMessageTo},
				success: function (response) {

				}
			})
		}

	}

	$(document).on('keypress', '.sendMyNewMsg', function (e) {

		if (e.keyCode == 13) {
			var element = $(this);
			var chatBoxId = $(this).parent().parent().attr('id');
			var message = $(this).val();
			var chattingwith = $(this).attr('f-dd');//	receiver id
			element.val("");
			sendMessage(message, chattingwith, "plain");
		}
	});
	$(document).ready(function () {
		var left = 0;
		var chatArray = [];
		var uname = 'xcvxvxvxcv'
		setInterval(function () {
			$.each(chatArray, function (index, value) {
				// fetchMessage(value);
			});

		}, 1000);

		function userDetail(id) {
			var name = "";
			$.ajax({
				url: "<?=base_url('Message/getUserDetail')?>",
				type: "post",
				data: {friend_id: id},
				success: function (response) {
					// console.log(response);
					response = JSON.parse(response)
					name = response.full_name;
					uname = name
					// return name;
				}
			});

		}

		function fetchMessage(friend_id) {
			// console.log("Friend Id: " + friend_id);
			var fId = friend_id;
			$.ajax({
				url: "<?=base_url('ChatController/fetchMessages')?>",
				type: "post",
				data: {friend_id: fId},
				async: false,
				success: function (response) {
					response = JSON.parse(response);
					// console.log('response length is .... ',response.length);
					$('#' + fId).find('ul').empty();
					var dataString = ''
					var oppositeName = 'You'
					var thisid = '<?=$this->my_id?>'
					for (var i = 0; i < response.length; i++) {
						var fD = response[i].to_user_id;
						var _cl;
						(response[i].to_user_id == <?=$this->my_id?>) ? _cl = 'you' : _cl = 'him';
						if (response[i].to_user_id != thisid && oppositeName != '') {
							oppositeName = response[i].full_name
						}
						var uname = (response[i].to_user_id != <?=$this->my_id?>) ? 'You' : response[i].full_name;
						//	check message is text or attachment
						var messageString=''
						if(response[i].message_type==1){ //	it means text message
							messageString=response[i].message_body
						}else{
							if(response[i].attachment_file_type==1){//	it means image
								messageString='<img src="'+response[i].attachment_path+'" height="50" width="50">'
							}else{
								messageString='<a target="_blank" href="'+response[i].attachment_path+'">'+response[i].attachment_file_name+'</a>'
							}
						}
						console.log(messageString)
						dataString += '<li>' +
							'<div class="msg ' + _cl + '">' +
							'<span class="partner">' + uname + '</span>' +
							messageString +
							'<span class="time">' + response[i].message_time + '</span>' +
							'</div></li>';
					}
					$('#' + fId).find('ul').append(dataString);
				}
			});
		}

		$(document).on("click", ".opn_chat", function () {
			var frnd_id = $(this).attr('frnd_id');
			var fname = $(this).attr('f-name');

			var a = chatArray.indexOf(frnd_id);
			if (a != -1) {
				chatArray.splice(a, 1)
				$('#' + frnd_id).remove()
				a = -1
			}
			if (a == -1) {
				chatArray.push(frnd_id);
				var userID = frnd_id;
				var parentString = '<div class="chatbox" id="' + userID + '"><div class="chat_box_nav_bar p-2 text-white"><a href="<?=base_url('User/userDetails/')?>' + userID + '">' + fname + '</a>' +
					'<div class="float-right"><a href="javascript:void(0)" class="close_port"><i class="fa fa-times" aria-hidden="true"></i></a></div></div>' +
					'<div class="chats">' +
					'<ul style="margin-top:50px"></ul>' +
					'</div>' +
					'<div class="sendBox">' +
					'<input type="text" placeholder="Enter your message.. " class="sendMyNewMsg" f-dd="' + frnd_id + '">' +
					'<input type="file" accept="image/jpeg,application/pdf"  class="sendMyNewMsg upload_attachment" f-dd="' + frnd_id + '">'
				'</div>';
				// console.log(parentString);
				$('#viewport').append(parentString);
				setInterval(function () {
					fetchMessage(frnd_id);
				}, 1000)

			} else {
				console.log('Already Exists');
			}

		});


		$(document).on('change', '.upload_attachment', function () {

			var chatBoxId = $(this).parent().parent().attr('id');
			var message = $(this).val();
			var chattingwith = $(this).attr('f-dd');

			var fd = new FormData();
			var files = $(this)[0].files[0];
			fd.append('file', files)
			fd.append('sendMessageTo', chattingwith)
			$.ajax({
				url: "<?=base_url('ChatController/sendAttachment')?>",
				type: "post",
				data: fd,
				processData: false,
				contentType: false,
				success: function (response) {
				}
			})
			$(this).val('')
			$(this).val(null)
		})

	});

	$(document).on('click', '.close_port', function () {
		$(this).parent().parent().parent().hide()
	})


	$(function () {
		// You can add Users inside JSON users section
		var _json = {
			users: ["Gupi Gain", "Bagha Bain", "Hirak Raja"],
			chats: [{
				from: 'Gupi Gain',
				msg: 'Mora Dujonai Rajar Jamai!',
				time: '1533263925814',
				action: ''
			}, {
				from: 'Bagha Bain',
				msg: 'Jamai!',
				time: '1533263925814',
				action: ''
			}, {
				from: 'Gupi Gain',
				msg: 'Mora Khai Dai Ghuri Firi!',
				time: '1533263925814',
				action: ''
			}, {
				from: 'Gupi Gain',
				msg: 'Aha ki Moder Chiri!',
				time: '1533263925814',
				action: ''
			}]
		};

		init();

		function init() {

			renderData();
		};

		// RENDER METHODS
		function renderData() {
			// console.log("Workingn");
			var _now = $.now();
			getDateTime(_now);
			_json.users.forEach(function (user) {
				var userID = user.replace(/ /g, "_");
				var parentString = '<div class="chatbox" id="' + userID + '">' +
					'<div class="chats">' +
					'<ul></ul>' +
					'</div>' +
					'<div class="sendBox">' +
					'<input type="text" placeholder="enter next line ' + user.split(' ')[0] + '...">' +
					'</div>';
				// console.log(parentString);
				$('#viewport1').append(parentString);
				_json.chats.forEach(function (chat) {
					var _cl;
					(chat.from === user) ? _cl = 'you' : _cl = 'him';
					var dataString = '<li>' +
						'<div class="msg ' + _cl + '">' +
						'<span class="partner">' + chat.from + '</span>' +
						chat.msg +
						'<span class="time">' + getDateTime(chat.time) + '</span>' +
						'</div></li>';
					$('#viewport #' + userID + ' .chats>ul').append(dataString);
				});
			});
		};

		function newMsgRender(data) {
			$('#viewport .chats ul>li.pending').remove();
			_json.users.forEach(function (user) {
				var checkID = user.replace(/ /g, "_");
				var _cl = '';
				(data.from === user) ? _cl = 'you' : _cl = 'him';
				$('#viewport .chatbox#' + checkID + ' .chats ul')
					.append('<li><div class="msg ' + _cl + '">' +
						'<span class="partner">' + data.from + '</span>' +
						data.msg +
						'<span class="time">' + getDateTime(data.time) + '</span>' +
						'</div>' +
						'</li>');
			});
		}

		function pendingRender(typingUser) {
			var pending = '<li class="pending">' +
				'<div class="msg load">' +
				'<div class="dot"></div>' +
				'<div class="dot"></div>' +
				'<div class="dot"></div>' +
				'</div>' +
				'</li>';
			_json.users.forEach(function (user) {
				user = user.replace(/ /g, "_");
				if (user !== typingUser) {
					if (!($('#' + user + ' .chats ul>li').hasClass('pending')))
						$('#' + user + ' .chats ul').append(pending);
				}
			});
		}

		// HELPER FUNCTION
		function getDateTime(t) {
			var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			var d = new Date(t / 1000),
				month = (month[d.getMonth()]),
				day = d.getDate().toString(),
				hour = d.getHours().toString(),
				min = d.getMinutes().toString();
			(day.length < 2) ? day = '0' + day : '';
			(hour.length < 2) ? hour = '0' + hour : '';
			(min.length < 2) ? min = '0' + min : '';
			var res = '' + month + ' ' + day + ' ' + hour + ':' + min;
			return res;
		}

		// KEYPRESS EVENTS HANDLER
		$('#viewport .sendBox>input').keypress(function (e) {
			var _id = $(this).closest('.chatbox').attr('id');
			pendingRender(_id);
			if (e.which == 13) {
				var msgFrom;
				_json.users.forEach(function (user) {
					if (user.replace(/ /g, "_") === _id)
						msgFrom = user;
				});
				var msg = $('#' + _id + ' .sendBox>input').val();
				msg = msg.replace(/\"/g, '\\"');
				var t = $.now();
				$('#' + _id + ' .sendBox>input').val('');
				if (msg.replace(/\s/g, '') !== '') {
					var temp = {
						from: msgFrom,
						msg: msg,
						time: t.toString(),
						action: ''
					}
					_json.chats.push(temp);
					console.log(_json);
					newMsgRender(temp);
				} else {
					$('#viewport .chats ul>li.pending').remove();
				}
			}
		});

		// EVENT HANDLER
		$('#viewport .sendBox>input').focusout(function () {
			$('#viewport .chats ul>li.pending').remove();
		});
	});
</script>
<div class="">
	<div id="sh_dv" class="chat_popup bg-primary p-3" style="">
		<img src="<?= base_url() ?>assets/img/comment.png" class="img-fluid">
	</div>
	<div class="chat_list" id="chat_list" style="">
		<div class="d-flex bg-info text-white p-2">
			<div class=" "><h6>User's List</h6></div>
			<div class="chat_close"><i class="fas fa-times"></i></div>
		</div>
		<div class="" id="onlineUser">
			<!-- <div class="card opn_chat border-bottom p-2">
        <ul class="list-unstyled d-flex chat_s m-0">
          <li class="">
            <img src="<?= base_url() ?>assets/img/avatar/avatar-3.png"  style="width: 40px;height: 40px"class="rounded-circle" >
          </li>
          <li class="ml-1 w-75">
            <h6 class="m-0 mt-1">Ali </h6>
            <span>-</span>
          </li>
          <li class="text-center" >
            <h6 class="m-0"><i class="fas fa-circle"></i></h6>
            <span class="">Never</span>
          </li>
          </ul>
      </div> -->
			<!-- <div class="card border-bottom p-2">
          <ul class="list-unstyled d-flex chat_s m-0">
            <li class="">
              <img src="<?= base_url() ?>assets/img/avatar/avatar-3.png"  style="width: 40px;height: 40px"class="rounded-circle" >
            </li>
            <li class="ml-1 w-75">
              <h6 class="m-0 mt-1">Ali </h6>
              <span>-</span>
            </li>
            <li class="text-center" >
              <h6 class="m-0"><i class="fas fa-circle"></i></h6>
              <span class="">Never</span>
            </li>
          </ul>
        </div> -->
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	$(document).on("click", "#sh_dv", function () {
		$(this).hide();
		$("#chat_list").show();

	})
	$(document).on("click", ".chat_close", function () {
		$("#sh_dv").show();
		$("#chat_list").hide();

	})

	function getConversation(frndId) {

		// $.ajax({
		//   url:"<?=base_url('Chat/getMessages_')?>",
		//     type:"post",
		//     data:{userId:frndId},
		//     success:function(response){
		//       // console.log(response);
		//       response=JSON.parse(response);
		//       if(response.length>0){
		//         for(let i=0; i<response.length;i++){
		//             // console.log(" User ID: "+response[i].user_id);
		//           var msg='';
		//           if(response[i].sent_by==<?=$myId?>){


		//             msg+='<li class="w-75 m-2">'+
		//             '<div class="  "><span class="p-1 px-2 rounded bg-primary text-white">'+response[i].message+'</span></div>'+
		//             '<div class="chat_time" >5:40 PM</span>'+
		//             '</li>';
		//           }else{
		//             msg+='<li class="w-75 m-2 text-right float-right">'+
		//             '<div class=""><span class="p-1 px-2 rounded  bg-success text-white">'+response[i].message+'</span></div>'+
		//             '<div class="chat_time" >5:40 PM</span>'+
		//           '</li>';
		//           }
		//            $('#chat_box_id'+frndId).append(msg);
		//         }

		//       }
		//     }

		// });


	}

	$(document).on("click", ".chat_close", function () {
		var lt = 0;
		$(this).parent().parent().remove();
		$(".chat_box").each(function () {
			console.log(lt);
			$(this).css("left", lt + "px");
			lt = lt + 286;

		});
	})
</script>
<script>
	CKEDITOR.replace('editor');
</script>
</body>
</html>
