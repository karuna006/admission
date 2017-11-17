<?php 
    include_once 'header.php'; 
    include_once '../controller/get_student_info.php';
    $raw_data = student_details();  
    $b_pharam=0;$d_pharam=0;$hl=0;
    if ($raw_data == "empty") 
    {
        echo "<h1>Oops <small>No data found...!</small></h1>";
    }
    else
    {
    foreach ($raw_data as $value) {
        if ($value['course_prefered'] == 'B.PHARAM') {
            $b_pharam = $b_pharam + 1;
        }
        elseif ($value['course_prefered'] == 'D.PHARAM') {
            $d_pharam = $d_pharam + 1;
        }
        elseif ($value['course_prefered'] == 'DIPLOMA IN HEALTH INSPECTOR') {
            $hl = $hl + 1;
        }           
    }
?>
<div class="container text-center">
    <div class="row">
        <div class="col-sm-4">
            <h4>B.PHARAM</h4>
            <h1><?php echo $b_pharam; ?></h1>
        </div>
        <div class="col-sm-4">
            <h4>D.PHARAM</h4>
            <h1><?php echo $d_pharam; ?></h1>
        </div>
        <div class="col-sm-4">
            <h4>HEALTH INSPECTOR</h4>
            <h1><?php echo $hl; ?></h1>
        </div>
    </div>    
</div>
<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Student details
                </header>
                <div class="panel-body">
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                        <tr>
                            <th>id</th>
                            <th>Admission-ID</th>
                            <th>student Name</th>
                            <th>% of PCM</th>
                            <th>cutoff</th>
                            <th>course</th>
                            <th>Quota</th>
                            <th>Community</th>
                            <th>Balance to be Paid</th>
                            <th>Father's Mobile Number</th>
                        </tr>
                            </thead>
                            <tbody>
                        <?php 
                            if ($raw_data == 'empty') {
                                    echo "<tr><td>".$raw_data."</td></tr>";
                                 } 
                            else{
                                $i=1;
                            foreach ($raw_data as $value) {
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$value['admission_id']."</td>";                            
                            echo "<td>".$value['candidate_name']."</td>";
                            echo "<td>".$value['perc_of_pcm']."</td>";
                            echo "<td>".$value['cutoff']."</td>";
                            echo "<td>".$value['course_prefered']."</td>";
                            echo "<td>".$value['quota']."</td>";
                            echo "<td>".$value['community']."</td>";
                            echo "<td>".$value['bal_to_pay']."</td>";
                            echo "<td>".$value['fathers_mobile']."</td>";                            
                            echo "</tr>";
                            $i++;
                            }
                        }
                         ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } include_once 'footer.php'; ?>