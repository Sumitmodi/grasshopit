<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/18/14
 * Time: 1:01 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/12/14
 * Time: 5:51 PM
 */
?>
<style>
    #logo{
        width: 80%;
        margin: 0 auto;
    }
    #logo img{
        margin: 20px 30px;
        float: left;
        max-height: 500px;
        min-height: 300px;
    }
    .logoactions{
        padding-top:50px ;
    }
    #logo img,.previewImage img{
        max-height: 300px;
        max-width: 500px;
        float: left;
    }
</style>
<h4>Official Business Logo</h4><br/>
<div id="logo">
    <?php if($logo){ ?>
        <img src="<?php echo $logo?>">
    <?php } else echo "Business Logo hasn't been uploaded yet."?>
</div>
<div class="logoactions">
    <ul>
        <li>
            <form id="logoform" action="dashboard?tab=logo" method="post" enctype="multipart/form-data">
                <input id="newlogo" name="logo" type="file" hidden>
                <button type="button" id="changelogo"><?php echo $logo?'Select Another Logo':'Select New Logo' ?></button>
            </form>
        </li>
        <li><br/></li>
        <?php if($logo){ ?>
            <li><button id="deletelogo">Delete Logo</button> </li>
        <?php } ?>
    </ul>
    <div class="previewImage">
        <ul></ul>
    </div>

</div>

<script>
    $(document).ready(function(){
        var formdata=false,logoFormData=false,logoFile,logoReader,formImage,logoImage,verify,ext,uploadReady = false,upload;
        $('#changelogo').click(function(){
            $('#newlogo').trigger('click');
        })
        if(window.FormData){
            formdata = new FormData();
        }
        $('#newlogo').change(function(e){
            var i = 0, len = this.files.length, img, reader, file;
            function appendImage(source){
                $("#logo").html('<img src="'+source+'">')
            }
        }
            for ( ; i < len; i++ ) {
                file = this.files[i];
                if (!!file.type.match(/image.*/)) {
                    logoFile = $('input#newlogo').val();
                    verify = logoFile.split('.');
                    ext = verify[verify.length-1];
                    if(ext=='jpg'||ext=='jpeg'||ext=='png'){
                        if ( window.FileReader ) {
                            reader = new FileReader();
                            reader.onloadend = function (e) {
                                console.log(e.target.result);
                                appendImage(e.target.result);

                            };
                        reader.readAsDataURL(file);
                        }
                        if (formdata) {
                        formdata.append("images[]", file);
                        formdata.append('type','logo')
                        formdata.append('key','image')
                        formdata.append('value','image')
                        $.ajax({
                            url: "business/dashboard/ajax",
                            type: "POST",
                            data: formdata,
                            processData: false,
                            contentType: false,
                            success: function (res) {
                                console.log(res);
                            }
                        });
                    }
                }
            }
        })
    })
</script>
