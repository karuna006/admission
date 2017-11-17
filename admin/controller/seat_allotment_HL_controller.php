<?php 
    include_once '../model/db.php'; 
   

    function HL_seat_arrangement(){
        $conn = db_connect();
        $raw_data = select('*','add_student',"",db_connect());        
?>

        <h3 class="text-center">OC</h3>
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'OC' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> OC-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table>  

<!-- BC Data -->
    <h3 class="text-center">BC</h3>         
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'BC' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> BC-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table> 

<!-- BCM Data -->
    <h3 class="text-center">BCM</h3>            
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'BCM' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> BCM-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table>         

<!-- MBC Data -->
    <h3 class="text-center">MBC</h3>            
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'BC' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> BC-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table> 

<!-- sc Data -->
    <h3 class="text-center">SC</h3>         
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'SC' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> SC-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table> 

<!-- SCA Data -->
    <h3 class="text-center">SCA</h3>            
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'SCA' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> SCA-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table> 


<!-- ST Data -->
    <h3 class="text-center">ST</h3>         
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['community'] == 'ST' && $raw_data[$i-1]['quota'] != 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td> ST-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
        </table>

<!-- MQ Data -->
    <h3 class="text-center">MQ</h3>         
    <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>S.no</th>
                    <th>Adm-ID</th>
                    <th>Name</th>
                    <th>Quota</th>                     
                    <th>Com</th>
                    <th>Cut Off</th>
                    <th>Seat</th>
                </tr>
            </thead>
              <tbody>
                    <?php 
                        $i=1;
                        $j=0;
                        foreach ($raw_data as $value) 
                        {
                            if ($raw_data[$i-1]['quota'] == 'management' && $raw_data[$i-1]['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') 
                            {
                            echo "<tr>";
                            echo "<td>".$i."</td>"; 
                            echo "<td>".$value['admission_id']."</td>";
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td>".$raw_data[$i-1]['community']."-".$i."</td>";
                            echo "</tr>";  
                            $j=1;                              
                            }
                            $i++;
                        }
                        if ($j == '0') 
                        {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }


                     ?>
              </tbody>
        </table> 
<?php 

    }

    function sortByCutOff($a, $b) {
        return $a['cutoff'] < $b['cutoff'];
    }
