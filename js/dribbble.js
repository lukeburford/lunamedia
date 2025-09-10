
		
		// https://matthewelsom.com/blog/display-shots-on-webpage-with-dribbble-v2-api.html
		// Set the Access Token
		var accessToken = 'e3c1464128f06cdddeebb52f17bf1dd01778186349fa88d7bcb0bea08e0da7c9';
		
		// Call Dribble v2 API
		$.ajax({
		    url: 'https://api.dribbble.com/v2/user/shots?per_page=9&access_token='+accessToken,
		    dataType: 'json',
		    type: 'GET',
		    success: function(data) {  
		      if (data.length > 0) { 
		        $.each(data.reverse(), function(i, val) {                
		          $('.dribbble-grid').prepend(
		            '<div class="dribbble-grid-item"><a target="_blank" rel="noopener" href="'+ val.html_url +'" title="' + val.title + '"><img src="'+ val.images.hidpi +'" alt="Dribble shot by Luke Burford" /></a></div>'
		            )
		        })
		      }
		      else {
		        $('#shots').append('<p>No shots yet!</p>');
		      }
		    }
		});