<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Befbuy {

        public function get_graphic_rate($numeric_rate)
        {
        	echo '<div class="rating">'; #3 open
          #print stars
          for($i=1; $i<=$numeric_rate; $i++){
                echo '<span class="fa fa-star checked" style="font-size:25px;"></span>';
              }
          $i -= 1;
          #print half start if rate decimals >= 0.39
          if($numeric_rate >= ($i + 0.39)){
              	echo '<span class="fa fa-star-half checked" style="font-size:25px;"></span>';
              	$i += 1;
              }
          echo '<p>('.$numeric_rate.')</p>';
          echo '</div>'; #3 close
        }

        public function get_rate_count($rate_count)
        {
          for($i=0;$i<=5;$i++){
            echo '<a href="#">';
            echo '[ '.$rate_count[$i].' ]   ';
            for($star=0;$star<$i;$star++){
              echo '<span class="fa fa-star checked" style="font-size:25px;"></span>';
            }
            echo '</a>';
            echo '<br>';
          }
        }
}