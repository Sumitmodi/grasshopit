<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 9:52 AM
 */
?>

<div class="page-content">
    <div class="videos">
    <?php
    if (!isset($videos))
    {
        echo '<p class="error">Videos have not been uploaded yet!</p>';
    } else
    {	echo '<div class="row">';
        foreach ($videos as $video)
        {
            $name = 'assets/uploads/' . $table . '_' . $bid . '/images/' . $video;
            ?>
        <div class="col-lg-4">
          <div class="video">
			<video src="<?php echo base_url().$name;?>" controls=""></div>
		  </div>
        </div>
            <?php
        }
		echo '</div>';
    }
    ?>
	</div>
	
</div>
	
<div class="upload-img">
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="videos">
            <span class="green">Please Select a video :</span>
            <input type="file" accept="video/*" name="video" class="file hidden">
        </label>
        <a class="simulator submit btn  btn-success" href="javascript:void(0);">Select Video</a>
        <span class="red">The selected video will upload automatically.</span>
    </form>
</div>
<br/>
<p class="preview">
    <video width="320" height="240" autoplay controls="">
        Your browser does not support the video tag.
    </video> 
</p>
<script type="text/javascript">
    $(document).ready(function() {
        $('a.simulator').click(function() {
            $('input.file').trigger('click');
        });
        $('input.file').change(function(e) {
            reader = new FileReader();
            $('video').attr('src', URL.createObjectURL(this.files[0]));
        })
    })
</script>