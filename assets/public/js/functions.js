function OS(){
    var OSName;
    if (navigator.appVersion.indexOf("Win") != -1) 
        OSName = "Windows";
    else if (navigator.appVersion.indexOf("Mac") != -1) 
        OSName = "MacOS";
    else if (navigator.appVersion.indexOf("X11") != -1) 
        OSName = "UNIX";
    else if (navigator.appVersion.indexOf("Linux") != -1) 
        OSName = "Linux";
    return OSName;
}      
function referer(){
    var url = document.URL;
    url = encodeURIComponent(url);
    return url;
}
function currentUrl(){
    return document.URL;
}
function getBaseUrl(){
    var base;
    base = window.location.origin;
    return base;
}
function baseUrl(){
    return getBaseUrl()+'/ktm197/';
}
function getUrl(type){
    type = type.toString().toLowerCase();          
    var href;
    switch(type){
        case 'enquiry':
            href = getBaseUrl()+'/ktm197';//'/ktm197' is temporary
            href = href+'/'+$(this).attr('data-page');
            href = href + '?ktm='+$(this).attr('data-cid');
            var os = OS();
            if(os != null)
                href = href + '&os='+OS();
            var refer = referer();
            if(refer != null)
                href = href + '&referer='+referer(); 
            break;
    }
    return href;
}
function getLogoutUrl(){
    var base = getBaseUrl();
    if(base == '')
        return false;
    var url = base;
    url = url + '/ktm197' + '/logout/';
    url = url + '?referer='+referer();
    return url;
}
function getLoginUrl(form){   
    var url;
    url = getBaseUrl()+'/ktm197/';
    url = url + "login?type="+form.attr('type');
    url = url + '&referer='+referer();
    return url;
}
function addReferer(url){
    return url + '&referer='+referer();
}

function addAjax(url){
    return url + '&requestedBy=ajax';
}

function ajaxSuccess(data){
    
}
function ajaxFail(data){
    console.log('Error: ' + data);
}
function documentHeight() {
    return Math.max(
        document.body.scrollHeight, document.documentElement.scrollHeight,
        document.body.offsetHeight, document.documentElement.offsetHeight,
        document.body.clientHeight, document.documentElement.clientHeight
        );
}
//determine whether viewer is from mobile or computer
function detectBrowser() {
    var useragent = navigator.userAgent;
    var mapdiv = document.getElementById("mapholder");

    if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
        mapdiv.style.width = '100%';
        mapdiv.style.height = '100%';
    } else {
        mapdiv.style.width = '600px';
        mapdiv.style.height = '800px';
    }
} //end detectBrowser()

function parseResults(){
    $.each(results,function(i,v){
        //var mainDiv = $("div.search_whole_next").html();
        var cls;
       
        var top = document.createElement('div');
        cls = "box_result_searched box_shadow";
        if((parseInt(i)+1)%3 == 0){
            cls += " even";
        }
        top.setAttribute('class',cls);
       
        var mid = document.createElement('div');
        cls = "header_company header_company_other";
        mid.setAttribute('class',cls);
              
        var bot = document.createElement('div');
        bot.setAttribute('class','logo_area');
       
        var link = document.createElement('a');
       
        link.setAttribute('title',v.name);
        link.setAttribute('class','enquiry');
        link.setAttribute('data-page','enquiry');
        link.setAttribute('date-cid',json[i]);
        link.setAttribute('href','javascript:void(0);');
       
       
        var img = document.createElement('img');
        var src;
        if(typeof v.logo != 'undefined'){
            src = v.logo;
        }else{
            src = "<?php echo $image_dir;?>/icon/log_sample_search.png";
        }
        img.setAttribute('src',src);
       
        link.appendChild(img);
       
        bot.appendChild(link);
              
        link.removeChild(img);
       
        mid.appendChild(bot);
       
        var nBot;
        nBot = document.createElement('div');
        nBot.setAttribute('class','header_title');
       
       
        var temp= document.createElement('a');
       
        temp.setAttribute('title',v.name);
        temp.setAttribute('class','enquiry');
        temp.setAttribute('data-page','enquiry');
        temp.setAttribute('date-cid',json[i]);
        temp.setAttribute('href','javascript:void(0);');
            
        var h3 = document.createElement('h3');
        h3.setAttribute('class','title');
        temp.innerHTML = v.display;
        h3.appendChild(temp);
        
        nBot.appendChild(h3);
              
        if(typeof v.category != 'undefined'){
            var p = document.createElement('p');
            var sm = document.createElement('small');
            sm.innerHTML = v.category;
            p.appendChild(sm);
            nBot.appendChild(p);
        }
       
        var span = document.createElement('span');
        span.setAttribute('class','locations highlight');
        if(typeof v.address_1 != 'undefined'){
            span.innerHTML = v.address_1;
        }else{
            span.innerHTML = v.location;
        }
        nBot.appendChild(span);
       
        mid.appendChild(nBot);
       
        var clr = document.createElement('div');
        clr.setAttribute('class','clr');
       
        mid.appendChild(clr);
              
        top.appendChild(mid);
       
        var dBanner = document.createElement('div');
        dBanner.setAttribute('class','banner_company');
       
        if(typeof v.banner != 'undefined'){
            img.setAttribute('src', v.banner);
            img.setAttribute('class','banner_image');
        }else{
            img.setAttribute('src','<?php echo $image_dir;?>/banner_sample_company.jpg');
        }
        temp.innerHTML = '';
        temp.appendChild(img);
       
        dBanner.appendChild(temp);
       
        top.appendChild(dBanner);
       
        console.log(top.innerHTML);
       
        var cc = document.createElement('div');
        cc.setAttribute('class','content_company');
       
        var dd = document.createElement('div');
        dd.setAttribute('class','sections');
       
        var ul = document.createElement('ul');
       
        var li = document.createElement('li');
       
        if(typeof v.telephone != 'undefined'){
            var tel='';
            if(typeof v.telephone == 'object'){
                for(var i =0;i<v.telephone.length;i++){
                    tel+=v.telephone[i]+' ';
                }                
            } else {
                tel = v.telephone;
            }
            li.setAttribute('id','tel');
            
            span = document.createElement('span');
            span.setAttribute('class', 'title_name');
            span.innerHTML = 'Tel: '
            li.appendChild(span);
        
            span = document.createElement('span');
            span.setAttribute('class','hightlight');
            span.innerHTML = tel;
            li.appendChild(span);
        
            ul.appendChild(li);             
        }
                 
        if(typeof v.fax != 'undefined'){
            var fax='';
            if(typeof v.fax == 'object'){
                for(var i =0;i<v.fax.length;i++){
                    fax+=v.fax[i]+' ';
                }                
            } else {
                fax = v.fax;
            }
            li = document.createElement('li')
            li.setAttribute('id','fax');
            
            span = document.createElement('span');
            span.setAttribute('class', 'title_name');
            span.innerHTML = 'Fax: '
            li.appendChild(span);
            
            span = document.createElement('span');
            span.setAttribute('class','hightlight');
            span.innerHTML = fax;
            li.appendChild(span);
        
            ul.appendChild(li);
        }  
        
        
        if(typeof v.mobile != 'undefined'){
            var tel='';
            if(typeof v.mobile == 'object'){
                for(var i =0;i<v.mobile.length;i++){
                    tel+=v.mobile[i]+' ';
                }                
            } else {
                tel = v.mobile;
            }
            li = document.createElement('li')
            li.setAttribute('id','mobile');
            
            span = document.createElement('span');
            span.setAttribute('class', 'title_name');
            span.innerHTML = 'Mobile: '
            li.appendChild(span);
            
            span = document.createElement('span');
            span.setAttribute('class','hightlight');
            span.innerHTML = tel;
            li.appendChild(span);
        
            ul.appendChild(li);
        }
        
        if(typeof v.postal_code != 'undefined'){
            var tel='';
            if(typeof v.postal_code == 'object'){
                for(var i =0;i<v.postal_code.length;i++){
                    tel+=v.postal_code[i]+' ';
                }                
            } else {
                tel = v.postal_code;
            }
            li = document.createElement('li')
            li.setAttribute('id','postal');
            
            span = document.createElement('span');
            span.setAttribute('class', 'title_name');
            span.innerHTML = 'Postal Code: '
            li.appendChild(span);
            
            span = document.createElement('span');
            span.setAttribute('class','hightlight');
            span.innerHTML = tel;
            li.appendChild(span);
        
            ul.appendChild(li);
        }
        
        dd.appendChild(ul);
        cc.appendChild(dd);
        
        var ll = document.createElement('div');
        ll.setAttribute('class','sections sections_last');
        ul = document.createElement('ul');
        
        if(typeof v.email != 'undefined'){
            var tel='';
            if(typeof v.email == 'object'){
                for(var i =0;i<v.email.length;i++){
                    tel+=v.email[i]+' ';
                }                
            } else {
                tel = v.email;
            }
            li = document.createElement('li')
            li.setAttribute('id','email');
        
            span = document.createElement('span');
            span.setAttribute('class', 'title_name');
            span.innerHTML = 'email: '
            li.appendChild(span);
        
            span = document.createElement('span');
            span.setAttribute('class','hightlight');
            span.innerHTML = tel;
            li.appendChild(span);
        
            ul.appendChild(li);
        }
        
        if(typeof v.website != 'undefined'){
            var tel='';
            if(typeof v.website == 'object'){
                for(var i =0;i<v.website.length;i++){
                    tel+=v.website[i]+' ';
                }                
            } else {
                tel = v.website;
            }
            li = document.createElement('li')
            li.setAttribute('id','web');
        
            span = document.createElement('span');
            span.setAttribute('class', 'title_name');
            span.innerHTML = 'website: '
            li.appendChild(span);
        
            span = document.createElement('span');
            span.setAttribute('class','hightlight');
            span.innerHTML = tel;
            li.appendChild(span);
        
            ul.appendChild(li);
        }
        ll.appendChild(ul);
        
        cc.appendChild(ll);
        
        top.appendChild(cc);
        
        $('div#results').html(top.innerHTML);
    //console.log(ul.innerHTML);
    /*
           if(typeof v.website != 'undefined'){
                var tel='';
            if(typeof v.website == 'object'){
                for(var i =0;i<v.website.length;i++){
                    tel+=v.website[i]+' ';
                }                
            } else {
                tel = v.website;
            }
             mainDiv = mainDiv.html(mainDiv+'<li id="web"><a href="'+v.website+'" target="_new" title="'+v.name+'">'+v.website+'</a></li>');
         }
          mainDiv = mainDiv.html(mainDiv+'</ul></div><div class="detial_btn">'); 
          mainDiv = mainDiv.html(mainDiv+'<a title="'+v.name+'" class="enquiry" data-page="enquiry" data-cid="'+json[i]+'" href="javascript:void(0)">View More..</h3>');
          mainDiv = mainDiv.html(mainDiv+'</div></div></div>');*/
    });
}
function enqLink(){
    var href;
    var os;
    var refer = referer();
    $('a.enquiry').each(function(){        
        href = getBaseUrl() + '/ktm197';
        href = href + '/enquiry/';
        href += '?ktm=' + $(this).attr('data-cid');
        os = OS();
        if(os != null)
        href = href + '&os=' + OS();    
        if (refer != null)
        href = href + '&referer=' + referer();
        $(this).attr('href',href);
    });
}
function showLink(index) {
    var link = $('a.enquiry');      
    console.log('called');
    var href;
    href = getBaseUrl() + '/ktm197';
    href = href + '/enquiry';
    href = href + '?ktm=' + link.attr('data-cid');
    var os = OS();
    if (os != null)
        href = href + '&os=' + OS();
    var refer = referer();
    if (refer != null)
        href = href + '&referer=' + referer();
    link.attr('href', href);
    return false;
}
function doAjax(object,method,url,sucCal){
    $.ajax({
        method:method,
        url:url,
        data:$(object).serialize(),
        statusCode:{
            302:sucCal
        },
        success:function(data){
            setTimeout(sucCal,0);
        }
    });
}
function noAjaxLoginListener(){
    
}
function loginListener(ajax){
    var url;
    $('form.ktm_login').submit(function(e){
        url = $(this).attr('action');
        if(typeof url == 'undefined')
            url = $(this).attr('base');
        if(typeof url == 'undefined')
            if(typeof base != 'undefined')
                url = base;
        if(typeof url == 'undefined')
            return false;
        url = getLoginUrl($(this));
        if(ajax == true)
            doAjax($(this),'post',url,reloadCur);
        else{
            $(this).attr('action',url);
            $(this).simulate('submit');
        }
        return false;
    });
}
function reloadCur(){
    window.location.href = document.URL;
}
function spinner(div){
    $(div).html($('div.spinner').html());                
    var spinner = $('div#bowlG');
    $(spinner).css('top','49%');
    $(spinner).children('div#bowl_ringG').css('left','49%');
    return true;
}
function ajaxListener(parentDiv){    
    $('form.ajax_form').submit(function(){
        Url = $(this).attr('action');
        Url = addReferer(Url);
        spinner(parentDiv);
        $.ajax({
            type : 'POST', 
            url : addAjax(Url),                      
            data :$(this).serialize(),
            dataType:'html',
            failure:function(data){
                ajaxFail(data);  
            },
            success:function(data){
                $(parentDiv).html(data);
            }
        });
        return false;
    });
}
function updateMargins(div,left,top){   
    $(div).css('left',($(window).width()-parseInt(left))/2);
    if(parseInt(top)<$(window).height()){
        $(div).css('top',($(window).height()-parseInt(top))/2);
    } else {
        $(div).css('top','15'); 
    }
}
function popUpListener(){
    var wid;
    var hig;
    var dataHolder;
    var layer = $('div.layer-last');
    $('a.pop').click(function(e){
        if(typeof $('div.resopts') != 'undefined'){
            $('div.resopts').fadeOut(1500);
            if(typeof clicked != 'undefined')
                clicked = !clicked;
        }
        $(layer).css('display','block');
        var parent = $(layer).children('div.layer-cen:first');
        dataHolder = $(parent).children('div.layer-data');
        $(dataHolder).html($('div.spinner').html());                
        var spinner = $('div#bowlG');
        $(spinner).css('top','49%');
        $(spinner).children('div#bowl_ringG').css('left','49%');
        var cls = $(this).attr('class');
        cls = cls.split(' ')[0];
        $('body').css('overflow-y','hidden');
        $('body').css('overflow','hidden');
        switch(cls.toLowerCase()){
            case 'login':
                $.ajax({
                    url:baseUrl()+'form/login/',
                    method:'post',
                    dataType:'html',
                    success:function(data){
                        $(dataHolder).html(data);
                        $('div.loginform').css('margin','0 auto');
                        wid = $('div.loginform').css('width');
                        hig = $('div.loginform').css('height');
                        updateMargins(parent,wid,hig);
                        loginListener(false);
                    }
                });
                break;
            case 'ebook':
                if(typeof id == 'undefined'){
                    id = get();
                }
                if(typeof id != 'undefined')                    
                    $.ajax({
                        url:baseUrl()+'form/ebook/'+id,
                        method:'post',
                        dataType:'html',
                        success:function(data){
                            $(dataHolder).html(data);
                            $('div.ebook').css('margin','0 auto');
                            wid = $('div.ebook').css('width');
                            hig = $('div.ebook').css('height');
                            updateMargins(parent,wid,hig);
                            ajaxListener(dataHolder);
                        }
                    });
                break;
            case 'message':
                if(typeof id != 'undefined')
                    $.ajax({
                        url:baseUrl()+'form/message/'+id,
                        method:'post',
                        dataType:'html',
                        success:function(data){
                            $(dataHolder).html(data);
                            $('div.message').css('margin','0 auto');
                            wid = $('div.message').css('width');
                            hig = $('div.message').css('height');
                            updateMargins(parent,wid,hig);
                        }
                    });
                break;
            case 'subscribe':
                if(typeof id != 'undefined')
                    $.ajax({
                        url:baseUrl()+'form/subscribe/'+id,
                        method:'post',
                        dataType:'html',
                        success:function(data){
                            $(dataHolder).html(data);
                            $('div.subscribe').css('margin','0 auto');
                            wid = $('div.subscribe').css('width');
                            hig = $('div.subscribe').css('height');
                            updateMargins(parent,wid,hig);
                        }
                    });
                break;
            case 'review':
                if(typeof id != 'undefined')
                    $.ajax({
                        url:baseUrl()+'form/review/'+id,
                        method:'post',
                        dataType:'html',
                        success:function(data){
                            $(dataHolder).html(data);
                            $('div.review').css('margin','0 auto');
                            wid = $('div.review').css('width');
                            hig = $('div.reivew').css('height');
                            updateMargins(parent,wid,hig);
                            ajaxListener(dataHolder);
                        }
                    });
                break;
            case 'register':
                $.ajax({
                    url:baseUrl()+'form/register?type=user',
                    method:'post',
                    dataType:'html',
                    success:function(data){
                        $(dataHolder).html(data);
                        $(dataHolder+' div.register').css('margin','0 auto');
                        wid = $(dataHolder+' div.register').css('width');
                        hig = $(dataHolder+' div.register').css('height');
                        updateMargins(parent,wid,hig);
                    }
                });
                break;
            case 'share':
                if(typeof id == 'undefined'){
                    id = get();
                }
                if(typeof id != 'undefined')                    
                    $.ajax({
                        url:baseUrl()+'form/share/'+id,
                        method:'post',
                        dataType:'html',
                        success:function(data){
                            $(dataHolder).html(data);
                            $('div.share').css('margin','0 auto');
                            wid = $('div.share').css('width');
                            hig = $('div.share').css('height');
                            updateMargins(parent,wid,hig);
                            //ajaxListener(dataHolder);
                        }
                    });
                break;
                break;
            case 'tell':
                if(typeof id == 'undefined'){
                    id = get();
                }
                if(typeof id != 'undefined')                    
                    $.ajax({
                        url:baseUrl()+'form/tell/'+id,
                        method:'post',
                        dataType:'html',
                        success:function(data){
                            $(dataHolder).html(data);
                            $('div.tell').css('margin','0 auto');
                            wid = $('div.tell').css('width');
                            hig = $('div.tell').css('height');
                            updateMargins(parent,wid,hig);
                            ajaxListener(dataHolder);
                        }
                    });
                break;
                break;
            default:
                $('div.layer-last').hide();
        }
        return false;
    });
    $('a.close').click(function(){
        $('div.layer-last').css('display','none');
        $('body').css('overflow-y','scroll');
        return false; 
    });
}
/*function get(){
   return '123';
}*/
function showHide(control,target){
    $(control).click(function(){
        $(target).show(); 
        return false;
    });
}