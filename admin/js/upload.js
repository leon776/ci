var common = common || html5;
	//绑定事件
	function addDropEvent(obj){
		obj.addEventListener('dragover', function(e) {
			e.stopPropagation();
			e.preventDefault();
		}, false);
		obj.addEventListener('drop',function(e){handleDrop(e,this)}, false);
	}
	
	function handleDrop(e,obj) {
		e.stopPropagation();
　　	e.preventDefault();
		transfer(e.dataTransfer.files,obj);//获取拖拽文件
	}

	function transfer(file, obj){
		if(typeof(obj) == 'string') {
			obj = $('#' + obj)[0];
		}
		var width  = $(obj).attr('data-width') || 0,
			height = $(obj).attr('data-height') || 0,
			nth = obj.getAttribute('nth');
		
		var fileList  = file,
			fileType = fileList[0].type,
　　　　     oImg = document.createElement('img'),
　　　　     reader = new FileReader();
		
		var lastName = getFileLastName(fileList[0].name);
		if(fileList[0].size > 1024*1024) {
			alert('请不要上传大于1m的图片');
			return;
		}
		reader.onload = function(e){
			oImg.src = this.result;
			//obj.getElementsByTagName('label')[0].innerHTML = "<img src='" + oImg.src + "'/>";
		}
		reader.readAsDataURL(fileList[0]);
		uploadFiles(fileList[0], obj.id, nth, width, height, obj, oImg);
		obj.setAttribute("type", lastName);
	}

	function uploadFiles(file, id, nth, w, h, obj, oImg) {
		var xhr = new XMLHttpRequest();
		//var url = '<?php echo base_url("index.php/html5_form/upload/");?>';
		var url = common.baseUrl+'index.php/index/upload/';
		var boundary = '-----------------------' + new Date().getTime();
		if (window.FormData) {
		　var formData = new FormData();
		　formData.append('file', file);
		　data = formData;
		} else{
			alert('您的浏览器不支持h5上传，请使用chrome或者ff浏览器');
		}
		if (xhr.upload /* && file.type == "image/jpeg" && file.size <= $id("MAX_FILE_SIZE").value */) {

		// create progress bar
		var o = common.$("p_"+nth);
		o.parentNode.style.opacity = 1;
		var progress = o.parentNode.getElementsByTagName("span")[0];

		// 监听进度事件
		xhr.upload.addEventListener("progress", function(e) {
			var pc = parseInt(e.loaded / e.total * 100);
			o.value = pc;
		}, false);
		progress.style.display = 'block';
		// file received/failed
		xhr.onreadystatechange = function(e){
			if (xhr.readyState == 4) {
				obj.getElementsByTagName('label')[0].innerHTML = "<img src='" + oImg.src + "'/>";
				o.value = 100;
				//o.parentNode.style.opacity = 0;
				progress.className = (xhr.status == 200 ? "success" : "failure");
				progress.style.display = (xhr.status == 200 ? "block" : "none");
				progress.innerText = (xhr.status == 200 ? "上传成功" : "上传失败");
				var data = eval('(' + xhr.responseText + ')');
				cheakSzie(data, nth, w, h, progress);
			}
		};

		// start upload
		xhr.open("post", url, true);
		xhr.setRequestHeader("X_FILENAME", file.name);
		xhr.send(data);
		}
	} 
	
	function getFileLastName(name) {
		var re = /(\\+)/g; 
		var filename=name.replace(re,"#");
		//对路径字符串进行剪切截取
		var one=filename.split("#");
		//获取数组中最后一个，即文件名
		var two=one[one.length-1];
		//再对文件名进行截取，以取得后缀名
		var three=two.split(".");
		 //获取截取的最后一个字符串，即为后缀名
		var last=three[three.length-1];
		return last;
	}
	
	function countCharacters(str){
		return str.length;
	}
	
	function makeTime(obj){
		var t = String(obj.value);
		if(!(/^\d+$/.test(t))){
			return ;
		}
		h=parseInt(t/60);
		m=t%60;
		m = m>=10 ? m : "0"+m;
		obj.value=h+":"+m+":00"
	}
	//将文件名写入input
	function changePicName(data,nth){
		var name = data.name;
		common.$("pic"+nth).value = name;
	}
	//检测尺寸
	var cheakSzie = function (data, nth, w, h, p) {
		var flag = true;
		var cWidth = data.width,
			cHeight = data.height;
			//console.log(data);
		if ((w != cWidth || h != cHeight)
			&& w != 0) {
			alert('尺寸不对，请上传尺寸为 ' + w + 'x' + h + ' 的图片,您目前上传的图片尺寸为'+ cWidth + 'x' + cHeight);
			flag = false;
			p.innerText = '上传失败';
			$('#dropBox_' + nth)[0].getElementsByTagName('label')[0] . innerHTML = '';
			$('#f'+nth).val('');
			console.log($('#f'+nth).val());
		}
		if (flag) {
			changePicName(data, nth);
		}
	}