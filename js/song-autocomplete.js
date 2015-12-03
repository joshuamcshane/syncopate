$(function(){
  var songs = [
	{ value: 'Photograph | Ed Sheeran | X | Pop', data: 'Photograph', artist : 'Ed Sheeran', album:'X', genre: 'Pop'},
	{ value: 'Something | JMSN | Priscilla | R&B', data: 'Something', artist : 'JMSN', album:'Priscilla', genre: 'R&B'},
	{ value: 'Letter Home | Childish Gambino | Camp | Hip-Hop', data: 'Letter Home', artist : 'Childish Gambino', album:'Camp', genre: 'Hip-Hop'},
	{ value: 'Blank Space | Taylor Swift | 1989 | Pop', data: 'Blank Space', artist : 'Taylor Swift', album:'1989', genre: 'Pop'},
	{ value: 'Slow Ride | Beastie Boys | Licensed to Ill | Hip-Hop', data: 'Slow Ride', artist : 'Beastie Boys', album:'Licensed to Ill', genre: 'Hip-Hop'},
	{ value: 'Tricks | Ludovin | How To Find A Party | Alternative', data: 'Tricks', artist : 'Ludovin', album:'How To Find A Party', genre: 'Alternative'},
	{ value: 'Flawless | Beyonce | Beyonce | Electronic', data: 'Flawless', artist : 'Beyonce', album:'Beyonce', genre: 'Electronic'},
	{ value: 'Hey Ya! | Outkast | Speakerboxxx | Rap', data: 'Hey Ya!', artist : 'Beyonce', album:'Beyonce', genre: 'Electronic'},
	{ value: 'Liquor Store Blues | Bruno Mars | Doo-Wops & Hooligans | Rock', data: 'Liquor Store Blues', artist : 'Bruno Mars', album:'Beyonce', genre: 'Electronic'},
	{ value: 'Take It All | Adele | 21 | Pop', data: 'Take It All', artist : 'Bruno Mars', album:'Beyonce', genre: 'Electronic'},
	{ value: 'The Kids Dont Stand A Chance | Vampire Weekend | Vampire Weekend | Avantgarde', data: 'The Kids Dont Stand A Chance', artist : 'Bruno Mars', album:'Beyonce', genre: 'Electronic'},
	{ value: 'Tiptoe | Imagine Dragons | Night Visions | Alternative/Indie', data: 'Tiptoe', artist : 'Bruno Mars', album:'Beyonce', genre: 'Electronic'}
  ];
  
  
  $('#autocomplete').autocomplete({
    lookup: songs,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Song Name:</strong> ' + suggestion.data + ' <br> <strong>Artist:</strong> ' + suggestion.artist
	  + ' <br> <strong>Album:</strong> ' + suggestion.album
	  + ' <br> <strong>Genre:</strong> ' + suggestion.genre;
      $('#outputcontent').html(thehtml);
	  
	audio.src = "../audio/" + suggestion.data + ".mp3"
	 
	audio.play();
    }
  });
  

});