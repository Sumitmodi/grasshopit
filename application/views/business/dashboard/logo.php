<style>
    .previewImage img{
        max-height: 300px;
        max-width: 500px;
        float: left;
    }
    .logo{
        width: 100%;
        margin:10px;
    }
    .logo img{
        max-width: 500px;
        border: 5px solid #d0e9c6;
    }

</style>
<h4>Official Business Logo</h4>
<p class="msg"></p>

    <?php if(isset($logo) && !@empty($logo)){
        $logo = '/'.DOMAIN.'/assets/'.'uploads/'.$table.'_'.$bid.'/logo/'.$logo;
    ?><div class="row">
            	<div class="col-lg-4"><div class="thumbnail">
        <img src="<?php echo $logo?>" class="data_image">
		</div>
		</div>
		</div>
    <?php } else echo "<p class='error'>You have not uploaded your business logo. Please upload one.</p>"?>

            <form id="logoform" action="." method="post" enctype="multipart/form-data">
                <input id="newlogo" class="file hidden" name="logo" type="file"/>
				<div class="form-group">
					<a id="changelogo" class="edit btn btn-success" href="javascript:void(0);">
						<?php echo $logo?'Select Another Logo':'Select New Logo' ?>
					</a>
				</div>
            </form>
<p class="content preview"></p>

<script>
    $(document).ready(function(){
        var formdata=false,logoFile,verify,ext;
        $('a#changelogo').click(function(){
            $('#newlogo').trigger('click');
        });
        if(window.FormData){
            formdata = new FormData();
        }
        $('#newlogo').change(function(e){
            var i = 0, len = this.files.length, img, reader, file;
            function appendImage(source){
                $("p.preview").html('<img src="'+source+'">')
            }
            var source;
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
                            source = e.target.result;
                            appendImage(e.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("images[0]", file);
                        formdata.append('type','logo')
                        formdata.append('key','image')
                        formdata.append('value','image')
                        pleaseWait();
                        $.ajax({
                            url: "./business/dashboard/ajax",
                            type: "POST",
                            data: formdata,
                            processData: false,
                            contentType: false,
                            success: function (res) {
                                waitOver();
                                $('div.thumbnail').html('<img src="'+source+'" class="data-image"/>');
                                $('p.error').remove();
                                $('p.preview').html('');
                                $('p.msg').addClass('success').html('Logo updated successfully.');
                                
                            }
                        });
                    }
                }
            }
            }
        })
    })
</script>
