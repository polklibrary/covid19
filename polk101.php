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
            
            'UWO7897W0':'#pod1',
            'UWO7907W0':'#pod1',
            'UWO7924W0':'#pod1',
            'UWO7911W0':'#pod1',
            'UWO7895W0':'#pod1',
            'UWO7896W0':'#pod1',
            'UWO5612A0':'#pod1',
            'UWO7900W0':'#pod1',
            'UWO7906W0':'#pod1',
            
            'UWO7923W0':'#pod2',
            'UWO7904W0':'#pod2',
            'UWO5613A0':'#pod2',
            
            'UWO7901W0':'#pod3',
            'UWO7919W0':'#pod3',
            'UWO5611A0':'#pod3',
            'UWO7893W0':'#pod3',
            'UWO7905W0':'#pod3',
            'UWO7898W0':'#pod3',
            'UWO7918W0':'#pod3',
            'UWO7887W0':'#pod3',
            'UWO7921W0':'#pod3',
            
            'UWO7909W0':'#pod4',
            'UWO7926W0':'#pod4',
            'UWO7908W0':'#pod4',
            
            'UWO7916W0':'#pod5',
            'UWO7892W0':'#pod5',
            'UWO7925W0':'#pod5',
            'UWO7922W0':'#pod5',
            'UWO5608A0':'#pod5',
            'UWO7888W0':'#pod5',
            'UWO7920W0':'#pod5',
            'UWO7917W0':'#pod5',
            'UWO7903W0':'#pod5',
            
            'UWO7891W0':'#pod6',
            'UWO7910W0':'#pod6',
            'UWO7914W0':'#pod6',
            'UWO5610A0':'#pod6',
            
            'UWO7889W0':'#pod7',
            'UWO5609A0':'#pod7',
            'UWO7915W0':'#pod7',
            'UWO7902W0':'#pod7',
            
            'UWO7913W0':'#pod8',
            'UWO7912W0':'#pod8',
            
            
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
    
        <div class="row">
            <div id="pod1" class="group lpod" data-cleaned="1"></div>
            <div id="pod2" class="group spod" data-cleaned="1"></div>
        </div>
        
        
        <div class="row">
            <div id="pod3" class="group lpod" data-cleaned="1"></div>
            <div id="pod4" class="group spod" data-cleaned="1"></div>
            <div id="pod5" class="group lpod" data-cleaned="1"></div>
        </div>
    
        <div class="row">
            <div class="space" style="width: 40px"></div>
            <div id="pod6" class="group spod" data-cleaned="1"></div>
            <div class="space" style="width: 158px;"></div>
            <div id="pod7" class="group spod" data-cleaned="1"></div>
        </div>
        
        <div class="row jc">
            <div id="pod8" class="group spod" data-cleaned="1"></div>
        </div>
    
    </div>


    <audio id="audio">
        <source src="beep.mp3" type="audio/mp3">
    </audio>
</body>
</html>