<?php
    
    function ride($owner) {
        $rides = array('car', 'boat', 'bike');
        for($i = 0; $i < count($rides); $i++) {
            $rides[$i] = ($owner . "'s " . $rides[$i]);
        }
        return $rides;
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <pre>
        <?php
            print_r(ride('Jason'));
        ?>
        </pre>
    </p>
    <p>
        <pre>
        <?php
            print_r(ride('Eric'));
        ?>
        </pre>
    </p>
  </body>
</html>