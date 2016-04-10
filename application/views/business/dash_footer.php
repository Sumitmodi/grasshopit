<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/12/14
 * Time: 5:32 PM
 */
?>
<div class="spinner" style="display:none">    
<div style="top: 49%;" id="bowlG">
    <p class="large">Processing.. Please Wait !!</p>
    <div style="left:44%;top:75px" id="bowl_ringG">
        <div class="ball_holderG">
            <div class="ballG">
            </div>
        </div>
    </div>
</div>
</div>
<div class="layer-last" style="display: none;">
        <div style="left: 40%; top: 40%;" class="layer-cen">
            <div class="close">                
                <!--<a href="#" class="close"><img src="/grasshopit/assets/icons/close.png"></a>-->
            </div>
            <div class="layer-data"></div>
        </div>
</div>
<script type="text/javascript">

    function doAjax(_url,_method,_data,_div){
        $.ajax({
            url : _url,
            type :_method,
            success:function(data){
                $(_div).html(data);
                $('div.layer-last').css('display', 'none');
            },
            failure:function(data){
                $(_div).html(data);
                $('div.layer-last').css('display', 'none');
            }
        });
    }
    $(document).ready(function(){  
        var dataHolder;
        var layer = $('div.layer-last');
        $('form.ajax').submit(function(e){
            e.preventDefault();
            $(layer).css('display','block');
            var parent = $(layer).children('div.layer-cen:first');
            dataHolder = $(parent).children('div.layer-data');
            $(dataHolder).html($('div.spinner').html());       
            var spinner = $('div#bowlG');
            $(spinner).css('display','block');
            $(spinner).css('top','49%');
            $(spinner).children('div#bowl_ringG').css('left','49%');
            $('body').css('overflow-y','hidden');
            $('body').css('overflow','hidden');
            var data = $(this).serialize();            
            var url = document.URL;
            var method = $(this).attr('method') ? $(this).attr('method') : 'POST';
            var div = 'div.result';
            doAjax(url,method,data,div);
        });
    });
</script>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
 <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>

   <script type="text/javascript" src="<?php echo base_url();?>assets/js/holder.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>

</body>
</html>
