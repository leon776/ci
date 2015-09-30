<link href="assets/en/css/contact.css" rel="stylesheet">

<div class="slide page-heading">
     <div class="container">
        <h1>About Us</h1> 
     </div>
</div>
 
<div class="office-address">
     <div class="image"><img src="assets/images/office.jpg" alt="深圳市格蕾医疗公司"></div>
     <div class="content">
         <h3>GREY MEDICAL</h3>
         <span class="address">Address: shenzhen shennan avenue diwang</span>
         <span class="phone">Tel： +86 0755 26008787</span>
         <span class="email">Email：<a href="mailto:info@grey.com">info@grey.com</a></span> 
     </div>
</div>
 
<div id="dituContent" class="slide map-canvas"></div><!-- /.contact -->

 
<div class="slide about">
    <div class="container">     
        <ul class="about_advantage"> <!-- 注意此处列表单双有区别: <li class="list dual"> -->
        <li class="list">
            <p class="pic"><img src="assets/images/about_1.png" alt="优势介绍"></p> 
            <h3>Intro</h3>
            <p>Through Asian hours medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian four small medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circle</p> 
        </li>
        <li class="list dual">
            <p class="pic"><img src="assets/images/about_2.png" alt="医疗资源"></p> 
            <h3>Resource</h3>
            <p>Through Asian hours medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian four small medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circle</p> 
        </li>
        <li class="list">
            <p class="pic"><img src="assets/images/about_3.png" alt="差异化产品"></p> 
            <h3>Product</h3>
            <p>Through Asian hours medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian four small medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circles, open up the Asian 4 hours of medical circle, provide a one-stop travel arrangements and healing speed domestic, through Asian hours medical circle</p> 
        </li>
        </ul> <!-- /.about_advantage -->  
    </div><!-- /.container -->
</div><!-- /.slide.contact-form -->  

<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(114.117799,22.549405);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});
    map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"深圳市格蕾医疗公司",content:"深圳深南大道1002号地王大厦1205<br/>电话：+86&nbsp;0755&nbsp;26008787",point:"114.117138|22.549122",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
            
            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/assets/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script> 