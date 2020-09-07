<!DOCTYPE html>
<html>
<head>
    <title>Lab Cleaning (COVID19)</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="halsey.css" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
        var KeyServerID = '389f8f3472d1cc49913181a794d365e2';
        
        var MAP = {
            
            'UWO9103W0':'#row1',
            'UWO9104W0':'#row1',
            'UWO9105W0':'#row1',
            'UWO9106W0':'#row1',
            'UWO9107W0':'#row1',
            'UWO9108W0':'#row1',
            'UWO9109W0':'#row1',
            'UWO9110W0':'#row1',
            
            'UWO9102W0':'#row2',
            'UWO9101W0':'#row2',
            'UWO9100W0':'#row2',
            'UWO9099W0':'#row2',
            'UWO9098W0':'#row2',
            'UWO9097W0':'#row2',
            'UWO9096W0':'#row2',
            'UWO9095W0':'#row2',
            
            'UWO9116W0':'#row3',
            'UWO9115W0':'#row3',
            'UWO9114W0':'#row3',
            'UWO9113W0':'#row3',
            'UWO9112W0':'#row3',
            'UWO9111W0':'#row3',
            
            'UWO9122W0':'#row4',
            'UWO9121W0':'#row4',
            'UWO9120W0':'#row4',
            'UWO9119W0':'#row4',
            'UWO9118W0':'#row4',
            'UWO9117W0':'#row4',
            
            'UWO9128W0':'#row5',
            'UWO9127W0':'#row5',
            'UWO9126W0':'#row5',
            'UWO9125W0':'#row5',
            'UWO9124W0':'#row5',
            'UWO9123W0':'#row5',
            
            'UWO6110A0':'#row6',
            'UWO6109A0':'#row6',
            'UWO6108A0':'#row6',
            'UWO6107A0':'#row6',
            'UWO6106A0':'#row6',
            
            'UWO9133W0':'#row7',
            'UWO9132W0':'#row7',
            'UWO9131W0':'#row7',
            
            'UWO9094W0':'#row8',
            'UWO9093W0':'#row8',
            'UWO9092W0':'#row8',
            'UWO9091W0':'#row8',
            
            'UWO9130W0':'#row9',
            'UWO9129W0':'#row9',
            'UWO6105A0':'#row9',
            'UWO6922A0':'#row9',
            
            'UWO9137W0':'#row10',
            'UWO9136W0':'#row10',
            'UWO9135W0':'#row10',
            'UWO9134W0':'#row10',
            
            'UWO9141W0':'#row11',
            'UWO9140W0':'#row11',
            'UWO9139W0':'#row11',
            'UWO9138W0':'#row11',
            
            
            
            
        }
        
    </script>
    

</head>
<body>
    
    <input id="test" type="button" value="TEST" title="Will mark random computers 'In Use' for testing." />
    
    <div id="header">
        Halsey - Cleaning Assistant
    </div>
    
    <div id="info">
    
        <div>
            <label id="checkspeed-label">Recheck: </label>
            <select id="checkspeed">
                <option value="15" selected="true">15s</option>
                <option value="30">30s</option>
                <option value="45">45s</option>
                <option value="60">60s</option>
            </select>
            <span id="last-check">
                checking...
            </span>
        </div>
        <div>
            <input id="cleanreset" type="button" value="MARK ALL CLEANED" title="Will mark all computers clean." />          
        </div>
    </div>
    
    <div id="content">
        <img id="img" src="halsey.jpg" alt="halsey" />
    
    
        <div id="row1" class="group" data-cleaned="1"></div>
        
        <div id="row2" class="group rotate90" data-cleaned="1"></div>
        
        <div id="row3" class="group rotate90" data-cleaned="1"></div>
        <div id="row4" class="group rotate90" data-cleaned="1"></div>
        
        <div id="row5" class="group rotate90" data-cleaned="1"></div>
        <div id="row6" class="group rotate90" data-cleaned="1"></div>
        
        <div id="row7" class="group rotate90" data-cleaned="1"></div>
        
        <div id="row8" class="group" data-cleaned="1"></div>
        
        <div id="row9" class="group rotate90" data-cleaned="1"></div>
        <div id="row10" class="group rotate90" data-cleaned="1"></div>
        
        <div id="row11" class="group rotate90" data-cleaned="1"></div>

        <!--
        <div id="row2" class="group rotate90" data-cleaned="1"></div>
        <div id="row3" class="group rotate90" data-cleaned="1"></div>

        <div id="row4" class="group rotate90" data-cleaned="1"></div>
        <div id="row5" class="group rotate90" data-cleaned="1"></div>

        <div id="row6" class="group rotate90" data-cleaned="1"></div>
        <div id="row7" class="group rotate90" data-cleaned="1"></div>
        
        <div id="row8" class="group rotate90" data-cleaned="1"></div>
        <div id="row9" class="group rotate90" data-cleaned="1"></div>
 
        
        <div id="row10" class="group" data-cleaned="1"></div>
        <div id="row11" class="group" data-cleaned="1"></div>
        -->
        
    </div>
    
    <div id="help">
        <div class="label">
            HELP
        </div>
        <div class="information">
            <ul>
                <li>Once area is cleaned, simply <u>click</u> on the flashing <b>"Needs Cleaning"</b> to mark it cleaned.</li>
                <li>Remember to flip the "Cleaned" paper back over the monitor once sterilized.</li>
                <li>Checks computer status every 15 seconds by default.</li>
                <li>If sound is on, you will hear a notification alert.</li>
            </ul>
        </div>
        
    </div>

    <audio id="audio">
        <source src="beep.mp3" type="audio/mp3">
    </audio>
</body>
</html>