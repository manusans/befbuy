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
          $tot_rates = $rate_count[0]+$rate_count[1]+$rate_count[2]+$rate_count[3]+$rate_count[4]+$rate_count[5];
          echo "<div class='container'>";
          for($i=0;$i<=5;$i++){
            echo '<a href="#">';
            echo "<div class='row'>";
                echo "<div class='col-sm-1'>";
                    echo '[ '.$rate_count[$i].' ]   ';
                    $percent = ($rate_count[$i]/$tot_rates)*100;
                echo "</div>";
                echo "<div class='col-sm-1'>";
                    echo '<div class="progress" style=" width:50%; height:50px;"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$rate_count[$i].'" aria-valuemin="0" aria-valuemax="'.$tot_rates.'" style=" width:'.$percent.'%"></div>'.$percent.'%</div>';
                echo "</div>";
                echo "<div class='col-sm-1'>";
                            for($star=0;$star<$i;$star++){
                              echo '<span class="fa fa-star checked" style="font-size:25px;"></span>';
                            }
                echo "</div>";
            echo "</div>";
            echo '</a>';
          }
          echo "</div>";
        }
}