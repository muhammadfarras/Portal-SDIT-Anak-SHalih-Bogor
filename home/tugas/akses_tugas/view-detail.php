<div class="detail">
    <table>
        <tr>
            <th><?php echo $detail['nama_depan']." ".$detail['nama_belakang'] ?></th>
        </tr>
        <?php
                $mysqli = getJobDesc();
                
                while ($job = mysqli_fetch_assoc ($mysqli)){
                    
        ?>
                    <tr>
                        <td><?php echo ucwords ( $job['deskripsi'] );?></td>
                        
                    <?php
                        $akses = isSetJobDesc ($_POST['nama_user'],$job['deskripsi']);
                        
                        $checked = "";
                        if (($akses->num_rows)){
                            $checked = "checked";
                        }
                    ?>
                        <td>
                            <label><input id_name="<?php echo $_POST['nama_user']?>" name = "<?php echo $job['deskripsi']; ?>" type=checkbox <?php echo $checked; ?>></label>
                            
                        </td>
                        
                    <?php
                    
                    
                    ?>
                    </tr>
                    
        <?php
                }
        ?>
    </table>
</div>
<script src="javascript.js"></script>