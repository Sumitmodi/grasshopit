<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/9/14 12:59 PM
 * File     :   category.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
$categories = explode('#', $categories);
if ($categories):
    ?>
    <style>
        table.bordered tr{
            height: 50px;
            border-bottom: 1px groove #D893A1;
        }
        table.addNew tr{

        }
        .clr{
            clear: both;
            margin: 20px;
        }
    </style>
    <div class="result"></div>
    <div class="table-resposive">
        <table class="table preview bordered categories">
            <th class="infoval" colspan="3">Categories</th>
            <?php
            foreach ($categories as $key => $cat):
                if (!$cat)
                {
                    continue;
                }
                ?>

                <tr>
                    <td class="infoval" id="name"><?php echo $cat ?></td>
                    <!--td class="actions"><button class="edit">Edit</button></td-->
                    <td></td>
                    <td class="actions_del">
                        <button class="abutton remove btn btn-danger">Remove</button> 
                        <button type="button" class="btn btn-success abutton edit">Modify</button>
                    </td>
                </tr>
    <?php endforeach; ?>
        </table>
        <div class="clr"></div>
        <table class="table">
            <tr>
                <td class="actions"><button class="abutton add btn btn-success">Add New</button></td>
            </tr>
            <tr class="newForm">
            </tr>
        </table>
    </div>
<?php endif ?>
<script>
    function enableAll() {
        $(document).find('.edit').removeAttr('disabled');
        $(document).find('.remove').removeAttr('disabled');
        $(document).find('.add').removeAttr('disabled');
    }
    function disableAll() {
        $(document).find('.edit').attr('disabled', 'disabled');
        $(document).find('.remove').attr('disabled', 'disabled');
        $(document).find('.add').attr('disabled', 'disabled');
    }
    $(document).ready(function () {
        var transmit = new Object(), selector, dataKey, dataValue, parentSel, editor, editing = false, saving = false, newValue = '';
        $(document).on('click', '.edit', function () {
            if (editing == false) {
                disableAll();
                editing = true;
                console.log(10);
                parentSel = $(this).parent().parent();
                selector = $(this).parent().parent().find('.infoval');
                editor = $(this).parent();//.parent().find('.actions');
                dataKey = selector.attr('id');
                dataValue = selector.html();
                console.log(dataKey, dataValue);
                editPrep = "<input type='text' value='" + dataValue + "' class='modify'>"
                selector.html(editPrep);
                editor.html("<button class='abutton save btn btn-success'>Save</button> ")
            }
        })
        $(document).on('click', '.remove', function () {
            if (!editing && !saving) {
                disableAll();
                selector = $(this).parent().parent().find('.infoval');
                dataValue = selector.html();

                transmit.type = 'category';
                transmit.key = 'categories';
                dataValue = selector.html();
                transmit.value = dataValue;
                transmit.action = 'del';
                //console.log(transmit);
                pleaseWait();
                $.post('business/dashboard/ajax', transmit, function (data) {
                    waitOver();
                    enableAll();
                    var result = $.parseJSON(data);
                    if (result[0] == 'success') {
                        selector.parent().remove();
                        $('div.result').html('<p class="success">' + result[1] + '</p>');
                    } else {
                        $('div.result').html('<p class="error">' + result + '</p>');
                    }
                })
            }
        })
        $(document).on('click', '.save', function () {
            if (saving == false) {
                newValue = selector.find('input').val();
                dataValue = dataValue
                var nvTest = newValue.replace(" ", "");
                if (dataValue != newValue && nvTest != "") {
                    saving = true;
                    transmit.type = 'category';
                    transmit.key = 'categories';
                    transmit.value = newValue;
                    transmit.value_old = dataValue;
                    transmit.action = 'edit'
                    //console.log(transmit);
                    pleaseWait();
                    $.post('business/dashboard/ajax', transmit, function (data) {
                        waitOver();
                        //console.log(data)
                        enableAll();
                        editor.html("<button class='abutton edit btn btn-warning'>Modify</button> <button class='abutton remove btn btn-danger'>Remove</button>");
                        selector.html(transmit.value);
                        editing = false;
                        saving = false;
                    })
                } else {
                    enableAll();
                    if (dataValue.replace(" ", "") == "") {
                        editor.html("<button class='abutton edit btn btn-warning'>Add</button>")
                    } else {
                        editor.html("<button class='abutton edit btn btn-warning'>Modify</button><button class='abutton remove btn btn-danger'>Remove</button>")
                    }
                    selector.html(dataValue);
                    editing = false;
                    saving = false;
                }
            }
        })
        $(document).on('click', '.cancel', function () {
            $('.newForm').html('');
            editing = false;
            enableAll();
        })
        $(document).on('click', '.add', function () {
            if (!editing && !saving) {
                editing = true;
                disableAll();
                $('.newForm').html('<td class="infoval"><input id="newCat" placeholder="Enter New Category." class="modify form-control" type="text"></td><td class="actions"><button class="abutton saveNew btn btn-success">Save</button></td><td class="actions"><button class="abutton cancel btn btn-warning">Cancel</button></td>');
            }

        })
        $(document).on('click', '.saveNew', function () {
            if (true) {
                transmit.action = 'add'
                transmit.type = 'category'
                transmit.key = 'categories';
                transmit.value = $('.newForm').find('input#newCat').val();
                $.post('business/dashboard/ajax', transmit, function (data) {
                    var result = $.parseJSON(data);
                    if (result[0] == 'success') {
                        var resultData = '<tr><td class="infoval" id="name">';
                        resultData += transmit.value;
                        resultData += '</td><td></td><td class="actions_del"><button class="abutton remove btn-danger btn">Remove</button></td></tr>';
                        $('.categories').append(resultData);
                        $('div.result').html('<p class="success">' + result[1] + '</p>');
                    } else {
                        $('div.result').html('<p class="error">' + result + '</p>');
                    }
                    $('.cancel').trigger('click');
                })
            }
        })

    })
</script>