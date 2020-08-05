
//  https://keyserver.uwosh.edu/maps/std/2286e8e2639f6543881fdf00f64ce78c

var Mapper = {
    
    Initialized : false,
    Notify : false,
    PreviousDataSet : null,
    CurrentDataSet : null,
    
    ThreadSpeedInSeconds : 15,
    KEYSERVER_BASEURL : 'https://keyserver.uwosh.edu/maps/std/',
    API_URL : 'https://www.uwosh.edu/library/getComputersNoCache',
    _Thread : null,
    
    
    Construct : function(){
        
        //this.GetData();
        this.SetupTests();
        this.ChangeSpeed();
        this.CleanReset();
        this.GetData();
        this.Start();
        //this.Cursor();
    },
    
    
    Cursor : function(){
        $('#content').on( "mousemove", function( e ) {
            var relX = e.pageX - $(this).offset().left - 10;
            var relY = e.pageY - $(this).offset().top  - 10;
            console.log(relX + "," + relY );
        });
    },
    
    
    Start : function(){
        Mapper._Thread = setInterval(function(){
            Mapper.GetData();
        }, Mapper.ThreadSpeedInSeconds * 1000);
    },
    
    Stop : function(){
        clearInterval(Mapper._Thread);
        Mapper._Thread = null;
    },
    
    GetData : function() {
        
        var url = Mapper.API_URL + '?target=' + Mapper.KEYSERVER_BASEURL + KeyServerID + '&nocache=' + new Date().getTime();
        
        $.get(url, function(response){
            
            // AFTER INITIAL
            Mapper.PreviousDataSet = Mapper.CurrentDataSet;
            Mapper.CurrentDataSet = response;
            
            // INITIAL
            if (Mapper.PreviousDataSet == null)
                Mapper.PreviousDataSet = Mapper.CurrentDataSet;
            
            Mapper.GenerateHTMLList();
            Mapper.CheckData();
            
            //console.log(new Date(response.timestamp));
            console.log(response);
        });
        
    },
    
    
    CheckData : function(){
        
        $('.computer').each(function(){
            var computer = $(this).attr('data-id');
            var last_status = $(this).attr('data-status');
            var current_status = Mapper.CurrentDataSet.info[computer];
            
            if(last_status == 0 && current_status == 1){
                $(this).parents('.group').attr('data-cleaned', 0);
                Mapper.Notify = true;
            }
            
            $(this).attr('data-status', current_status); // mark current status
        });
        
        if (Mapper.Notify){
            Mapper.Notify = false;
            Mapper.Beep();                        
        }
        
        $('#last-check').html('Last Check: ' + Mapper.CurrentDataSet.timestamp);
    },
    
    GenerateHTMLList : function(){
        // GENERATE INITIAL COMPUTER LIST
        console.log("Generate Initial Computer Layout and State");
        
        if (!Mapper.Initialized){
            Mapper.Initialized = true;
            
            for(var i in Mapper.CurrentDataSet.info){
                var current_computer = i;
                var current_in_use = Mapper.CurrentDataSet.info[i];
            
                var div = $('<div>').addClass('computer').attr({
                    'id': 'comp-' + current_computer,
                    'data-id': current_computer,
                    'data-status': current_in_use,
                   // 'data-cleaned': 1,
                }).html(current_computer);
                
                
                if (MAP.hasOwnProperty(current_computer)) {
                    $(MAP[current_computer]).append(div);
                }
                else {
                    $('#computer-list').append(div);
                }
            }
        
            $('.group').on('click', function(i,t){
                $(this).attr('data-cleaned', 1);
                // $(this).find('.computer').each(function(j,tt){
                    // $(tt).attr('data-status
                // });
                
            });
            
        }
        
    },
    
    
    Beep : function(){
        var audio = document.getElementById('audio');
        audio.play();
    },
    
    
    ChangeSpeed : function(){
        $('#checkspeed').on('change',function(){
            var speed = parseInt($(this).val());
            Mapper.ThreadSpeedInSeconds = speed;
            console.log(Mapper.ThreadSpeedInSeconds);
            Mapper.Stop();
            Mapper.Start();
        });
    },
    
    
    CleanReset : function(){
        $('#cleanreset').on('click',function(){
            $('.group').each(function(){
                $(this).attr('data-cleaned', 1);
            });
        });
    },
    
    SetupTests : function(){
        $('#test').show().on('click',function(){
            console.log('Test running');
            $('.computer').each(function(){
                // 10% chance
                if (Math.floor(Math.random() * 10) == 0) {
                    $(this).attr('data-status', 0); 
                }
            });
        });
    }
    
}












$(document).ready(function(){
    
    Mapper.Construct();
    
    
});


