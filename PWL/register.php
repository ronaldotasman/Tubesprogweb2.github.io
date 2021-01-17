<h2>Create Your Account Member</h2>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Name</label>
                <input class="input--style-4" type="text" name="name" placeholder="Insert your name" required=""/>
            </div>
        </div>
    </div>
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Username</label>
                <input class="input--style-4" type="text" name="username" placeholder="Insert your username" required=""/>
            </div>
        </div>
    </div>
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Password</label>
                <input class="input--style-4" type="password" name="password" placeholder="password" required=""/>
            </div>
        </div>
    </div>

    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="select2-dropdown--below mt-2">DATE OF BIRTH</label>
                <input class="form-control dropdown" type="date" name="date" placeholder="Company Name" required=""/>
            </div>
        </div>
    </div>


    <div class="input-group">
        <label class="label">Role</label>
        <?php
        $dao=new userDAO();
        if( $_SESSION['my_session']==true &&  $_SESSION['session_role']){
            $result2 = $dao->fetchRoles();
        }
        else{
            $result2 = $dao->fetchRole();
        }
        if($result2) {
            ?>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="idrole">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php
                    /* @var $row2 role */
                    foreach($result2 as $row2) {
                        echo "<option value='".$row2->getIdRole()."'>".$row2->getNameRole()."</option>";
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
