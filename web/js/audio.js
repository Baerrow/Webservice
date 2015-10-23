//variables 

    var w = 1; 
    var player = document.getElementById('player');


	$(document).ready(function()
	{
        $('.datable').DataTable();
    });

    function playOne()
    {            
        var playerId = "player"+w;
        var btnPlayId = "btnPlay"+w;
        var btnPauseId = "btnPause"+w;
        var btnActualPauseId = "btnActualPause"+w;

        document.getElementById("player").id = playerId;
        document.getElementById("btnPlay").id = btnPlayId;
        document.getElementById("btnPause").id = btnPauseId;
        document.getElementById("btnActualPause").id = btnActualPauseId;

        document.getElementById(btnPlayId).addEventListener("click", function()
        {
            document.getElementById(playerId).play();
        });
        document.getElementById(btnPauseId).addEventListener("click", function()
        {
            document.getElementById(playerId).pause();
        });
        document.getElementById(btnActualPauseId).addEventListener("click", function()
        {
            document.getElementById(playerId).pause();
        });
        w++;
    }

        
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

    