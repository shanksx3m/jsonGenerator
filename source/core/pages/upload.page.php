<div class="span7">
    <legend>Converter</legend>
    <form action="core/fileUpload.class.php" method="post" >
        <div class="span6">
            <input id="lefile" type="file" style="display:none">
            <div class="input-append">
                <input id="fileupload" class="input-large" type="text" placeholder="Datei">
                <a class="btn" onClick="$('input[id=lefile]').click();">Choose file</a>
            </div>
        </div>
        <script type="text/javascript">
        $('input[id=lefile]').change(function() {
            $('#fileupload').val($(this).val());
        });
        </script> 


        <div class="span10">                        
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn" onClick="clearForm();">Cancel</button>
            </div>
        </div>
    </form>
</div>  
<div class="span4">
    <legend>Hints</legend>
</div>                
