<div class="page-content review">
    <div class="row">
        <div class="col-lg-6">
            <h3>Starred reviews</h3>
            <hr/>
            <?php
            if (isset($reviews) and ! empty($reviews))
            {
                $media_link = "/" . DOMAIN . "/assets/uploads/a_1/reviews/";
                foreach ($reviews as $review) :
                    $review = json_decode(json_encode($review));
                    if ($review->rating < 3)
                    {
                        continue;
                    }

                    $expired = false;
                    $date = explode(" ", $review->date);
                    ?>

                    <div class="review-list" id="review_<?php echo $review->sno; ?>"> 
                        <div class="review-name">
                            <h5>
                                <?php
                                echo ucfirst($review->username) . " on " . $date['0'] . " at " . $date[1];
                                $rating = $review->rating;
                                ?>
                            </h5>                    
                        </div>
                        <div class="list-review rating">
                            <?php
                            if ($rating)
                                while ($rating)
                                {
                                    echo '<i class="fa fa-star"></i>';
                                    $rating--;
                                }
                            $rating = $review->rating;
                            ?>
                        </div>
                        <div class="review-comment">
                            <?php
                            if ($review->images)
                            {
                                ?>
                                <img src="<?php echo $media_link . $review->images ?>">
                            <?php } ?>
                            <?php
                            if ($review->videos)
                            {
                                ?>
                                <video src="<?php echo $media_link . $review->videos ?>" controls="controls"></video>
                            <?php } ?>
                            <?php
                            if ($review->comment && !empty($review->comment))
                            {
                                ?>
                                <p><?php echo $review->comment ?></p></li>
                            <?php } ?>
                        </div>
                        <div class="review-btn">
                            <?php
                            if (!$expired and ! $review->is_published)
                            {
                                ?>
                                <button id="p_<?php echo $review->sno ?>" class="edit publish btn btn-success">Publish</button>
                            <?php
                            } if (!$expired and $review->is_published)
                            {
                                ?>
                                <button id="h_<?php echo $review->sno ?>" class="edit hide btn btn-success">Hide</button>
                    <?php } ?>
                            <button id="d_<?php echo $review->sno ?>" class="edit delete btn btn-success">Delete</button>
                        </div>
                    </div>   
                    <?php
                endforeach;
            } else
            {
                ?>
                <p>No reviews to show.</p>
            <?php }
            ?>
        </div>
       <!-- <div class="col-lg-6">
            <h3>Under-rated reviews</h3>
            <hr/>
            <?php
            if (isset($reviews) and ! empty($reviews))
            {
                $media_link = "assets/uploads/" . $b_i_d . "/reviews/";
                foreach ($reviews as $review) :
                    $review = json_decode(json_encode($review));
                    if ($review->rating >= 3)
                        continue;
                    $expired = false;
                    $date = explode(" ", $review->date);
                    ?>
                    <div class="review-list" id="review_<?php echo $review->sno; ?>"> 
                        <div class="review-name">
                            <h5>
        <?php
        echo ucfirst($review->username) . " on " . $date['0'] . " at " . $date[1];
        $rating = $review->rating;
        ?>
                            </h5>                    
                        </div>
                        <div class="list-review rating">
                            <?php
                            if ($rating)
                                while ($rating)
                                {
                                    echo '<i class="fa fa-star"></i>';
                                    $rating--;
                                }
                            $rating = $review->rating;
                            ?>
                        </div>
                        <div class="review-comment">
                            <?php
                            if ($review->images)
                            {
                                ?>
                                <img src="<?php echo $media_link . $review->images ?>">
                            <?php } ?>
                            <?php
                            if ($review->videos)
                            {
                                ?>
                                <video src="<?php echo $media_link . $review->videos ?>" controls="controls"></video>
                            <?php } ?>
                            <?php
                            if ($review->comment)
                            {
                                ?>
                                <p><?php echo $review->comment ?></p></li>
                            <?php } ?>
                        </div>
                        <div class="review-btn">
                            <?php
                            if (!$expired and ! $review->is_published)
                            {
                                ?>
                                <button id="p_<?php echo $review->sno ?>" class="edit publish btn btn-success">Publish</button>
                    <?php
                    } if (!$expired and $review->is_published)
                    {
                        ?>
                                <button id="h_<?php echo $review->sno ?>" class="edit hide btn btn-success">Hide</button>
                    <?php } ?>
                            <button id="d_<?php echo $review->sno ?>" class="edit delete btn btn-success">Delete</button>
                        </div>
                    </div>   

        <?php
    endforeach;
} else
{
    ?>
                <p>No reviews to show.</p>
<?php } ?>
        </div>-->
        <script type="text/javascript">
            var action_global = null;
            var id_global = null;
            function recycleDOM(action, id) {
                switch (action) {
                    case 'delete' :
                        deleteComment(id)
                        break;
                    case 'hide':
                        hideComment(id)
                        break;
                    case 'publish':
                        publishComment(id);
                        break;
                    default :
                        break;
                }
            }
            function deleteComment(id) {
                $(document).find('#review_' + id).each(function (i, v) {
                    $(v).slideUp(function () {
                        $(v).remove();
                    });
                })
            }
            function hideComment(id) {
                $(document).find('#h_' + id).each(function (i, v) {
                    if (v.innerHTML.toLowerCase() == 'hide') {
                        $(v).html('Publish');
                        $(v).attr('id', 'p_' + id)
                        $(v).removeClass('hide').addClass('publish');
                    }
                })
            }

            function publishComment(id) {
                $(document).find('#p_' + id).each(function (i, v) {
                    if (v.innerHTML.toLowerCase() == 'publish') {
                        $(v).html('Hide');
                        $(v).attr('id', 'h_' + id)
                        $(v).removeClass('publish').addClass('hide');

                    }
                })
            }
            function takeAction(transmit) {
                pleaseWait();
                $.post('business/dashboard/ajax', transmit, function (data) {
                    waitOver();
                    if (data == '"success"') {
                        recycleDOM(action_global, id_global)
                    } else {
                        showMessage(data)
                    }
                })
            }
            function showMessage(message) {
                if (!message) {
                    message = "Cannot perform the requested action";
                }
                var $this = $('.result');
                $this.fadeOut(function () {
                    $this.html(message);
                    $this.fadeIn;
                })
            }
            function genParams(id, action) {
                var transmit = new Object();
                action_global = action;
                var id_temp = id.split('_')
                id_global = id_temp[1];
                console.log(action);
                transmit.type = 'reviews';
                transmit.action = action;
                transmit.key = "user";
                transmit.value = id_temp[1];
                return transmit;
            }
            $(document).ready(function () {
                $(document).on('click', '.publish', function (e) {
                    e.preventDefault();
                    var transmit = new Object();
                    transmit = genParams(e.target.id, 'publish')
                    if (transmit.value) {
                        takeAction(transmit);
                    }
                })
                $(document).on('click', '.delete', function (e) {
                    e.preventDefault();
                    var transmit = new Object();
                    transmit = genParams(e.target.id, 'delete')
                    if (transmit.value) {
                        takeAction(transmit);
                    }
                })
                $(document).on('click', '.hide', function (e) {
                    e.preventDefault();
                    var transmit = new Object();
                    transmit = genParams(e.target.id, 'hide')
                    if (transmit.value) {
                        takeAction(transmit);
                    }
                })
            })

        </script>