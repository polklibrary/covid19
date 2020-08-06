<!DOCTYPE html>
<html>
<head>
    <title>Lab Cleaning (COVID19)</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="sage.css" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
        var KeyServerID = '275862cd83be634fb9a520b4f12afd85';
        
        var MAP = {
            
            'UWO5716A0':'#row1',
            'UWO5717A0':'#row1',
            'UWO5718A0':'#row1',
            'UWO5719A0':'#row1',
            'UWO5720A0':'#row1',
            'UWO5721A0':'#row1',
            'UWO5722A0':'#row1',
            'UWO5723A0':'#row1',
            
            'UWO5715A0':'#row2',
            
            'UWO5879W0':'#row3',
            
            'UWO5952W0':'#row4',
            'UWO5953W0':'#row4',
            'UWO5954W0':'#row4',
            'UWO5955W0':'#row4',
            'UWO5956W0':'#row4',
            'UWO5957W0':'#row4',
            
            'UWO5946W0':'#row5',
            'UWO5947W0':'#row5',
            'UWO5948W0':'#row5',
            'UWO5949W0':'#row5',
            'UWO5950W0':'#row5',
            'UWO5951W0':'#row5',
            
            'UWO5940W0':'#row6',
            'UWO5941W0':'#row6',
            'UWO5942W0':'#row6',
            'UWO5943W0':'#row6',
            'UWO5944W0':'#row6',
            'UWO5945W0':'#row6',
            
            'UWO5933W0':'#row7',
            'UWO5934W0':'#row7',
            'UWO5935W0':'#row7',
            'UWO5936W0':'#row7',
            'UWO5937W0':'#row7',
            'UWO5938W0':'#row7',
            
            'UWO5927W0':'#row8',
            'UWO5928W0':'#row8',
            'UWO5929W0':'#row8',
            'UWO5930W0':'#row8',
            'UWO5931W0':'#row8',
            'UWO5932W0':'#row8',
            
            'UWO5921W0':'#row9',
            'UWO5922W0':'#row9',
            'UWO5923W0':'#row9',
            'UWO5924W0':'#row9',
            'UWO5925W0':'#row9',
            'UWO5926W0':'#row9',
            
            'UWO5939W0':'#row10',
            
            'UWO6923A0':'#row11',
            
        }
        
    </script>
    

</head>
<body>
    
    <input id="test" type="button" value="TEST" title="Will mark random computers 'In Use' for testing." />
    
    <div id="header">
        Sage - Cleaning Assistant
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
        <img id="img" src="sage-large.jpg" alt="sage" />
    
    
        <div id="row1" class="group" data-cleaned="1"></div>

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