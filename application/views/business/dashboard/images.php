<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */
?>
<style>
    .business-image{
        max-width: 33%;
        margin: 2%;
        margin-top: 10px;
        height: 200px;
        float: left;
        position: relative;
    }
    .business-image img{
        border: 1px solid #aaa;
        height: 100%;
        padding: 3px;
        width: 230px;
    }
    .business-image button{
        position: absolute;
        bottom: 0;
        right: 5px;
        visibility: hidden;
    }
    .business-image:hover{
        opacity: 0.8;

    }
    .business-image:hover button{
        visibility: visible;
    }
	button.remove_image{
		position: absolute;
		right: 19px;
		top: 24px;
		visibility:hidden;
	}
	div.col-lg-4:hover button{
		visibility:visible;
	}
	



</style>
<script type="text/javascript">
    var uploads = <?php echo $uploaded; ?>;
    var allowed = <?php echo $allowed; ?>;
    var rem = allowed - uploads;
</script>
<div class="result"></div>

    <div class="page-content">
      <div class="upload">
        <ul>
          <li>Total allowed Uploads : <span class="hint total"><?php echo $allowed; ?></span></li>
          <li>Total Uploaded Images : <span class="hint uploaded"><?php echo $uploaded; ?></span></li>
          <li>Remaining Uploads : <span class="hint remaining"><?php echo ($allowed - $uploaded); ?></span></li>
        </ul>
      </div>
      <form role="form">
        <div class="form-group">
		
			<form action="#" enctype="multipart/form-data">           
				<input id="uploadinput" type="file" class="file hidden" multiple>
				<a class="simulator submit btn btn-success" href="javascript:void(0);">Select Images</a>
				<span class="help-block">Image will automatically be uploaded after you select them.</span>
			</form>
			<div class="preview row"></div>
			<p class="msg"></p>
        </div>
      </form>
      <div class="row">
	      <?php
    if (isset($images))
    {
        if (is_array($images) && count($images) > 0)
        {
            //echo '<p class="content">Total uploaded images:</p>';
            //echo '<p class="content image_added">';
            foreach ($images as $key => $image)
            {
                $name = 'assets/uploads/' . $table . '_' . $bid . '/images/' . $image;
                if (is_file($name))
                {
                    ?>
					
					<div class="col-lg-4">
						<div class="thumbnail">
							<img src="<?php echo @$name; ?>" class="added_image"/>
						</div>
						<button class="edit remove_image btn btn-warning" id="images_<?php echo $key ?>">Remove</button>
					</div>
                    <?php
                }
            }
            echo '</p>';
        } else
        {
            ?>
            <p class="content">No images have been uploaded yet.</p>
        <?php
		}
	}
?>
      </div>
    </div>



<script>
    $(document).ready(function() {
        $(document).on('hover', '.allImages img', function() {

        })
        $('button#selectimages').click(function() {
            $("#uploadinput").trigger('click');
        })

        function appendImage(source) {
            $(".preview").append('<div class="col-lg-4"><div class="thumbnail"><img src="' + source + '"></div></div>');
        }
        $("#uploadinput").change(function(e) {
            if (window.FormData) {
                formdata = new FormData();
            }

            var i = 0, len = this.files.length, img, reader, file;
            $(".preview").html('');
            var file;
            for (; i < len; i++) {
                file = this.files[i];
                if (!!file.type.match(/image.*/)) {
                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.onloadend = function(e) {
                            appendImage(e.target.result);

                        };
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("images[]", file);
                        formdata.append('type', 'media')
                        formdata.append('key', 'image')
                        formdata.append('value', 'image')
                    }
                }
            }
            if (formdata) {
                pleaseWait();
                $.ajax({
                    url: "business/dashboard/ajax",
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        waitOver();
                        $('div.result').html(res);
                        $('p.msg').removeClass('success').removeClass('error').html('');
                    }
                });
            }

        })
        $(document).on('click', 'a.simulator', function() {
            $('input#uploadinput').trigger('click');
        })
        $('.remove_image').click(function(e) {
            var cur = $(this);
            id = e.target.id;
            $.ajax({
                url : './image/delete/'+id,
                type : 'post',
                success : function(data){
                    $(cur).parent('div:first').remove();
                    $('p.msg').addClass('success').html(data);
                    $('span.uploaded').html(parseInt($('span.uploaded').html()) - 1);
                    $('span.remaining').html(parseInt($('span.remaining').html()) + 1);
                }                    
            });
        })
    })

</script>
