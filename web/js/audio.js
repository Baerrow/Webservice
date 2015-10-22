
	$(document).ready(function()
	{
        $('.datable').DataTable();
    });

    var player = document.getElementById('player');
    function changeSecToMin(seconds) 
    {
        sec = Math.floor( seconds );    
        min = Math.floor( sec / 60 );
        min = min >= 10 ? min : '0' + min;    
        sec = Math.floor( sec % 60 );
        sec = sec >= 10 ? sec : '0' + sec;    
        return min + ':' + sec;
    }

    function stopAudio()
    {
        player = document.getElementById('player');
        player.pause();
        player.currentTime = 0;
    }

    function goBack()
    {
        player = document.getElementById('player');
        player.pause();
        player.currentTime = player.currentTime - 20;
    }