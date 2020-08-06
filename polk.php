<!DOCTYPE html>
<html>
<head>
    <title>Lab Cleaning (COVID19)</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="polk.css" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
        var KeyServerID = '2286e8e2639f6543881fdf00f64ce78c';
        
        var MAP = {
            
            'UWO7897W0':'#row1',
            'UWO7907W0':'#row1',
            'UWO7924W0':'#row1',
            'UWO7911W0':'#row1',
            'UWO7895W0':'#row1',
            'UWO7896W0':'#row1',
            'UWO5612A0':'#row1',
            'UWO7900W0':'#row1',
            'UWO7906W0':'#row1',
            
            'UWO7923W0':'#row2',
            'UWO7904W0':'#row2',
            'UWO5613A0':'#row2',
            
            'UWO7901W0':'#row3',
            'UWO7919W0':'#row3',
            'UWO5611A0':'#row3',
            'UWO7893W0':'#row3',
            'UWO7905W0':'#row3',
            'UWO7898W0':'#row3',
            'UWO7918W0':'#row3',
            'UWO7887W0':'#row3',
            'UWO7921W0':'#row3',
            
            'UWO7909W0':'#row4',
            'UWO7926W0':'#row4',
            'UWO7908W0':'#row4',
            
            'UWO7916W0':'#row5',
            'UWO7892W0':'#row5',
            'UWO7925W0':'#row5',
            'UWO7922W0':'#row5',
            'UWO5608A0':'#row5',
            'UWO7888W0':'#row5',
            'UWO7920W0':'#row5',
            'UWO7917W0':'#row5',
            'UWO7903W0':'#row5',
            
            'UWO7891W0':'#row6',
            'UWO7910W0':'#row6',
            'UWO7914W0':'#row6',
            'UWO5610A0':'#row6',
            
            'UWO7889W0':'#row7',
            'UWO5609A0':'#row7',
            'UWO7915W0':'#row7',
            'UWO7902W0':'#row7',
            
            'UWO7913W0':'#row8',
            'UWO7912W0':'#row8',
            
            
        }
        
    </script>
    

</head>
<body>
    
    <input id="test" type="button" value="TEST" title="Will mark random computers 'In Use' for testing." />
    
    <div id="header">
        Polk 101 - Cleaning Assistant
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
    
        <img id="img" src="polk-large.jpg" alt="polk" />
    
    
        <div id="row1" class="group" data-cleaned="1"></div>
        <div id="row2" class="group" data-cleaned="1"></div>
        
        <div id="row3" class="group " data-cleaned="1"></div>
        <div id="row4" class="group " data-cleaned="1"></div>
        <div id="row5" class="group " data-cleaned="1"></div>

        <div id="row6" class="group " data-cleaned="1"></div>
        <div id="row7" class="group " data-cleaned="1"></div>
        
        <div id="row8" class="group " data-cleaned="1"></div>
        
        <!--
        <div id="row9" class="group " data-cleaned="1"></div>
 
        
        <div id="row10" class="group" data-cleaned="1"></div>
        <div id="row11" class="group" data-cleaned="1"></div>
        
        -->
    </div>


    <audio id="audio">
        <source src="beep.mp3" type="audio/mp3">
    </audio>
</body>
</html>