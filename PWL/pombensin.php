<?php
if($_SESSION['my_session'] && $_SESSION['session_role']==1)
{
    ?>
    <h2>Pom Bensin Form</h2>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Kode Pom</label>
                    <input class="input--style-4" type="text" name="kode" placeholder="Input kode pom" required=""/>
                </div>
            </div>
        </div>

        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Alamat</label>
                    <input class="input--style-4" type="text" name="alamat" placeholder="Input alamat pom" required=""/>
                </div>
            </div>
        </div>

        <div class="p-t-15">
            <input class="btn btn--radius-2 btn--blue" type="submit" Value="Submit" name="btnsubmit" />
        </div>
    </form>
    <?php
}
?>
<br/>

<table id="tableId" class="display">
    <thead>
    <tr>
        <th>ID Pom</th>
        <th>Kode Pom</th>
        <th>Alamat</th>
    </thead>
    <tbody>
    <?php
    /* @var $row pombensin */
    foreach($result2 as $row){
        echo '<tr>';
        echo '<td>'.$row->getIdPosBBM().'</td>';
        echo '<td>'.$row->getKodeNamaPom().'</td>';
        echo '<td>'.$row->getAlamatPom().'</td>';
    }
    $link=null;
    ?>

    </tbody>
</table>
