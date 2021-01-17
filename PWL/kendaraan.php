<h2>Add Vehicle</h2>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">No Plat</label>
                <input class="input--style-4" type="text" name="noplat" placeholder="Insert your plat number" required=""/>
            </div>
        </div>
    </div>


    <div class="input-group">
        <label class="label">Jenis Kendaraan</label>
        <?php
        $dao=new kendaraanDAO();
        if($result2=$dao->fetchkendaraan()) {
            ?>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="kendaraan">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php
                    /* @var $row2 jeniskendaraan */
                    foreach($result2 as $row2) {
                        echo "<option value='".$row2->getIdKendaraan()."'>".$row2->getJenisKendaraan()."</option>";
                    }
                    ?>
                </select>
                <div class="select-dropdown"></div>
            </div>
            <?php
        }
        ?>
    </div>

    <div class="p-t-15">
        <input class="btn btn--radius-2 btn--blue" type="submit" Value="Submit" name="btnsubmit" />
    </div>
</form>
