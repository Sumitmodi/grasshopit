<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/12/14
 * Time: 5:31 PM
 */

if(!isset($info) or !is_object($info)){
    echo ("Error fetching data for this business.");
} else {
?>

<div class="table-responsive">
    <table class="table">
		<tbody>
        <tr>
            <td><b>Business Name : </b></td>
            <td class="infoval" id="name"><?php echo $info->name; ?></td>
        </tr>
        <tr>
            <td class="infotrst"><b>State :</b></td>
            <td class="infoval" id="state"><?php echo $info->state?></td>
            <td class="actions"><button class="edit btn btn-success">Edit</button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>City : </b></td>
            <td class="infoval" id="city"><?php echo $info->city?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->city)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>Country :</b></td>
            <td class="infoval" id="country"> <?php echo $info->country?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->country)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>Mobile :</b></td>
            <td class="infoval" id="mobile"> <?php echo $info->mobile?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->mobile)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>Telephone :</b></td>
            <td class="infoval" id="telephone"> <?php echo $info->telephone?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->telephone)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>Fax :</b></td>
            <td class="infoval" id="fax"><?php echo $info->fax?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->fax)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>Postal :</b></td>
            <td class="infoval" id="postal"> <?php echo $info->postal?></td>
            <td class="actions"><button class="edit btn btn-success">Edit</button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>E-mail :</b></td>
            <td class="infoval" id="email"> <?php echo $info->email?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->email)?'Add':'Edit' ?></button></td>
    </tr>
        <tr>
            <td class="infotrst"><b>Price range:</b></td>
            <td class="infoval" id="price_range"> 
                <?php 
                for($i = 1; $i<=5; $i++){
                    if($i <= (int)$info->price_range)
                        echo '<span class="green">$</span>';
                    else
                        echo '<span class="dim">$</span>';
                }
                ?>
            </td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->price_range)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>Website :</b></td>
            <td class="infoval" id="website"> <?php echo $info->website?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->website)?'Add':'Edit' ?></button> </td>
        </tr>
        <tr>
            <td class="infotrst"><b>About :</b></td>
            <td class="infoval" id="about" class="area"> <?php echo $info->about?></td>
            <td class="actions"><button class="edit btn btn-success"><?php echo empty($info->about)?'Add':'Edit' ?></button> </td>
        </tr>
		</tbody>
    </table>   
</div>	
 <?php } ?>

<script>
    $(document).ready(function(){
        var transmit = new Object(),selector,dataKey,dataValue,parentSel,editor,editing = false,saving=false,newValue='';
        $(document).on('click','.edit',function(){
            if(editing==false){
                editing=true;
                ///console.log(10);
                parentSel = $(this).parent().parent();
                selector  = $(this).parent().parent().find('.infoval');
                editor = $(this).parent().parent().find('.actions');
                dataKey = selector.attr('id');
                //var cls = selector.attr('class');
                dataValue = selector.html();
               // console.log(dataKey,dataValue);
                //if(typeof cls == 'undefined')
                    editPrep = "<input type='text' value='"+dataValue+"' class='modify form-control'>"
                /*else{
                    if(cls == 'area')
                        editPred = "<textarea class='area'>"+dataValue+"</textarea>";
                }*/
                selector.html(editPrep);
                editor.html("<button class='save btn btn-success'>Save</button> ")
                $(document).find('.edit').attr('disabled','disabled');
            }
        })
        $(document).on('click','.save',function(){
            if(saving==false){
                newValue = selector.find('input').val();
                dataValue = dataValue
                var nvTest = newValue.replace(" ","");
                if(dataValue != newValue && nvTest!=""){
                    saving=true;
                    transmit.type = 'info';
                    transmit.key = dataKey;
                    transmit.value = newValue;
                    //console.log(transmit);
                    pleaseWait();
                    $.post('business/dashboard/ajax',transmit,function(data){
                        waitOver();
                        //console.log(data)
                        $(document).find('.edit').removeAttr('disabled');
                        editor.html("<button class='edit btn btn-success'>Edit</button>")
                        selector.html(transmit.value);
                        editing = false;
                        saving = false;
                    })
                } else {
                    $(document).find('.edit').removeAttr('disabled');
                    if(dataValue.replace(" ","")==""){
                        editor.html("<button class='edit btn btn-success'>Add</button>")
                    } else {
                        editor.html("<button class='edit btn btn-success'>Edit</button>")
                    }
                    selector.html(dataValue);
                    editing = false;
                    saving=false;
                }
            }
        })
    })
</script>
<script type="text/javascript">
$(document).ready(function(e) {
	var cl = '<span class="tagRemove"><a href="#">&Chi;</a></span>';
	var timer;
	var ip = $("#tags");
	var checkSpace;
	var update;
	function addTag(tagItem){
		var filter = tagItem.replace(" ","")
		filter = filter.replace('-',' ');
		if(filter != ""){
			var tag = $("ul.tags");
			var insert = "<li><input type='hidden' name='type_tags[]' value='"+tagItem+"'/><span class='tags tagItem'>"+filter.charAt(0).toUpperCase() + filter.slice(1)+cl+"</span></li>";
			tag.append(insert);
			ip.val('');		
		}
	}
 	$(document).on('focus','#tags',function(){
		var currentVal = ip.val();
		$(document).keypress(function(event){
			if(String.fromCharCode(event.which)==" "){
				addTag(ip.val());
			}; 
		 })
			
	});
	$(document).on('click','.tagItem:not(.tagRemove)',function(e){
		addTag($(ip).val())
		var elem = $(this).prev('input').val();
		$(ip).val(elem);
		$(this).parent('li').remove();
		$(ip).trigger('focus');
		return false;
	});
	$(document).on('click','.tagRemove',function(e){
		addTag(ip.val());
		e.target.parentNode.parentNode.parentNode.remove();
		if($('ul.tags').children('li').lengtd == 0)
			$(ip).trigger('focus');
		return false;
	});
	
});
</script>