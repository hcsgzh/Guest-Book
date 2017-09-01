$(document).ready(function(){
	
	var getMessages = function() {
	$.get("messages", function(data){
		var data = $.parseJSON(data);
		console.log(data);
		for (var prop in data) {
			// skip loop if the property is from prototype
			if(!data.hasOwnProperty(prop)) continue;
			console.log(prop);
			console.log(data[prop]);
			// your code
			$('#list').append('<a href="#" class="list-group-item">'+"Name:" + data[prop]['guestname'] +" Address:"+ data[prop]['address']+" Email:"+ data[prop]['email']+'</a>');
		}
		
	})
	.fail(function(){alert("failed")})
	}
	getMessages();
	var frm = $('#guestFrm');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
				
				$('#list').empty();
				getMessages();
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });
});