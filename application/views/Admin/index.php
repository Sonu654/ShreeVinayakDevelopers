<div class="container">
    <div class="row">
        <div class="col-sm-2" style="border-right: 2px solid black; height:500px">
            <div class="form-group">
                <label for="file">Select a file</label>
                <select class="form-control" id="file">
                    <option value="select">Select</option>
                    <?php
                    foreach ($dir as $key => $val) {
                        ?>
                        <option value="<?php echo $val; ?>"><?php echo $val; ?></option>    
                        <?php
                    }
                    ?> </select>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row" >
                <div class="col-sm-12" id="fileTxt"></div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="btnArea" style="display: none"> 
                    <button class="btn btn-primary" id="btnEdit"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="resp"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control" id="txtEditFile" rows="15" style="display: none;">
                        
                        </textarea>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-primary" id="btnSave" style="display: none">
                        <span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
                </div>
            </div>
        </div>

    </div>

</div>