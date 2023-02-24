      <!-- Calcúlo da distância --> 
      <div id="container">
        <div id="map"></div>
        <div id="sidebar">
          <h3 style="flex-grow: 0">Request</h3>
          <pre style="flex-grow: 1" id="request"></pre>
          <h3 style="flex-grow: 0">Response</h3>
          <pre style="flex-grow: 1" id="response"></pre>
        </div>
      </div>

      <!-- Traçagem da rota -->
      <div hidden id="floating-panel">
        <select id="start">
          <option value="<?php if(isset($_POST['middleAd'])){echo $_POST['middleAd']; unset($_POST['middleAd']);}?> 
          <?php if(isset($_POST['middleNber'])){echo $_POST['middleNber']; unset($_POST['middleNber']);} ?>"></option>
          </select>
          <select id="end">
            <option value="<?php if(isset($_POST['end'])){echo $_POST['end']; unset($_POST['end']);}?> 
            <?php if(isset($_POST['number02'])){echo $_POST['number02']; unset($_POST['number02']);}?>"></option>
          </select>
        </div>
        <div id="map"></div>
        &nbsp;
        <div id="warnings-panel"></div>
