$(function(){
change_value('#nickname', 'Ник');
change_value('#comment', 'Коммент'); 
$('.commentbutton').click(function(){
var nickname = $('#nickname').val();
var comment = $('#comment').val();
if(nickname != 'Ник' && comment != 'Коммент'){
	$.ajax({
		type: "POST",
		url: "comments.php",
		dataType:"json";
		data: {nickname: nickname, comment: comment},
		success: function(data){
		$("ul#commentslist").prepend("<li>" + data.nickname + "<p>" + data.comment + "</p></li><hr>");
		}

	});
}
});
}); 