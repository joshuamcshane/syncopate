$(function(){
  var songs = [
	{ value: 'Photograph | Ed Sheeran | X | Pop', data: 'Photograph', artist : 'Ed Sheeran', album:'X', genre: 'Pop'},
	{ value: 'Letter Home | Childish Gambino | Camp | Hip-Hop', data: 'Letter Home', artist : 'Childish Gambino', album:'Camp', genre: 'Hip-Hop'},
	{ value: 'Slow Ride | Beastie Boys | Licensed to Ill | Hip-Hop', data: 'Slow Ride', artist : 'Beastie Boys', album:'Licensed to Ill', genre: 'Hip-Hop'},
	{ value: 'Tricks | Ludovin | How To Find A Party | Alternative', data: 'Tricks', artist : 'Ludovin', album:'How To Find A Party', genre: 'Alternative'},
  ];
  
  
  $('#autocomplete').autocomplete({
    lookup: songs,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Song Name:</strong> ' + suggestion.data + ' <br> <strong>Artist:</strong> ' + suggestion.artist
	  + ' <br> <strong>Album:</strong> ' + suggestion.album
	  + ' <br> <strong>Genre:</strong> ' + suggestion.genre;
      $('#outputcontent').html(thehtml);
    }
  });
  

});