/********************************************************************************************************
 * D-ImageChange
 *----------------------------------------------------------------------------------------------------
 * @Desc 鍥剧墖杞崲鎻掍欢
 *----------------------------------------------------------------------------------------------------
 * @Author D.澶忎害鐭ラ潪
 * @Email DeclanZhang@gmail.com
 * @QQ 29540200
 * @Blog http://onblur.javaeye.com
 * @Date 2009-10-19
 * @Version V1.3@2010-03-16
 * @JQueryVersion 1.3.2+ (寤鸿浣跨敤1.4浠ヤ笂鐗堟湰)
 * 
 * @update v1.1 澧炲姞娓呯┖鍘熷鍐呭鍔熻兘,浠ュ厤椤甸潰鍔犺浇瀹屾垚涔嬪墠鏄剧ず澶х墖绌虹櫧
 * 		   v1.2 淇IE6姣忔浠庢湇鍔″櫒璇诲彇鑳屾櫙鍥剧墖鐨凚UG
 *         v1.3 淇浜嗗搴﹁繃澶т骇鐢熺殑BUG, 鍏煎JQ1.4.1, 寤鸿浣跨敤JQ1.4+, 鏁堢巼鏇撮珮
 **/

// 淇IE6姣忔浠庢湇鍔″櫒璇诲彇鑳屾櫙鍥剧墖鐨凚UG
try {
	document.execCommand('BackgroundImageCache', false, true);
}catch(e){

}


(function($){

jQuery.fn.extend({
	
	d_imagechange:function(setting){
		
		var config = $.extend({
			bg:true,						// 鏄惁鑳屾櫙鑹�
			title:true,						// 鏄惁鏈夋爣棰�
			desc:true,						// 鏄惁鏈夋弿杩�
			btn:true,						// 鏄惁鏄剧ず鎸夐挳
			repeat:'no-repeat',				// 閲嶅瑙勫垯 'no-repeat' 'repeat-x' 'repeat-y' 'repeat'
			
			bgColor:'#000',					// 鑳屾櫙鑹�
			bgOpacity:.5,					// 鑳屾櫙閫忔槑搴�
			bgHeight:40,					// 鑳屾櫙楂�
			
			titleSize:14,					// 鏍囬鏂囧瓧澶у皬
			titleFont:'Verdana,瀹嬩綋',		// 鏍囬鏂囨湰瀛椾綋
			titleColor:'#FFF',				// 鏍囬鏂囨湰棰滆壊
			titleTop:4,						// 鏍囬涓婅竟璺�
			titleLeft:4,					// 鏍囬宸﹁竟璺�
			
			descSize:12,					// 鎻忚堪鏂囧瓧澶у皬
			descFont:'Verdana,瀹嬩綋',			// 鎻忚堪鏂囨湰瀛椾綋
			descColor:'#FFF',				// 鎻忚堪鏂囨湰棰滆壊
			descTop:2,						// 鎻忚堪涓婅竟璺�
			descLeft:4,						// 鎻忚堪宸﹁竟璺�
			
			btnColor:'#FFF',				// 鎸夐挳棰滆壊1 
			btnOpacity:.5,					// 鏈€変腑鎸夐挳閫忔槑搴�
			btnFont:'Verdana',				// 鎸夐挳鏂囨湰瀛椾綋
			btnFontSize:12,					// 鎸夐挳鏂囧瓧澶у皬(娉ㄦ剰:Chrome鏈夐粯璁ゆ渶灏忓瓧鍙风殑闄愬埗)
			btnFontColor:'#000',			// 鎸夐挳鏂囨湰棰滆壊
			btnText:true,					// 鏄惁鏄剧ず鏂囨湰
			btnWidth:15,					// 鎸夐挳瀹�
			btnHeight:15,					// 鎸夐挳楂�
			btnMargin:4,					// 鎸夐挳闂磋窛
			btnTop:4,						// 鎸夐挳涓婅竟璺�
			
			playTime:2000,					// 杞崲闂撮殧鏃堕棿,鍗曚綅(姣)
			animateTime:500,				// 鍔ㄧ敾鎵ц鏃堕棿,鍗曚綅(姣)
			animateStyle:'o',				// 鍔ㄧ敾鏁堟灉:'o':娓愭樉 'x':妯悜婊氬姩 'y':绾靛悜婊氬姩 'show':鍘熷湴鏀剁缉浼稿睍 'show-x':妯悜鏀剁缉浼稿睍 'show-y':绾靛悜鏀剁缉浼稿睍' none':鏃犲姩鐢�
			width:300,						// 瀹�, 涓嶈瀹氬垯浠嶥OM璇诲彇
			height:200						// 楂�, 涓嶈瀹氬垯浠嶥OM璇诲彇
			
		},setting);
		
		return $(this).each(function(){
			var _this = $(this);
			var _w = config.width || _this.width();			// 瀹�
			var _h = config.height || _this.height();		// 楂�
			var _n = config.data.length;					// 鏁扮洰
			var _i = 0;										// 褰撳墠鏄剧ず鐨刬tem搴忓彿
			
			_this.empty()
				 .css('overflow','hidden')
				 .width(_w)
				 .height(_h);
			
			// 鍗婇€忔槑鑳屾櫙
			if(config.bg){
			$('<div />').appendTo(_this)
						.width(_w)
						.height(config.bgHeight)
						.css('background-color',config.bgColor)
						.css('opacity',config.bgOpacity)
						.css('position','absolute')
						.css('marginTop',_h-config.bgHeight)
						.css('zIndex',3333);
			}
			
			// 鏂囧瓧鍖�
			var _textArea = 
			$('<div />').appendTo(_this)
						.width(_w)
						.height(config.bgHeight)
						.css('position','absolute')
						.css('marginTop',_h-config.bgHeight)
						.css('zIndex',6666);
			// 鎸夐挳鍖�
			var _btnArea = 
			$('<div />').appendTo(_this)
						.width(config.data.length * (config.btnWidth + config.btnMargin))
						.height(config.bgHeight)
						.css('position','absolute')
						.css('marginTop',_h-config.bgHeight)
						.css('marginLeft',_w-(config.btnWidth+config.btnMargin)*_n)
						.css('zIndex',9999)
						.css('display',config.btn?'block':'none');
			
			// 鎻掑叆绌篸iv淇IE鐨勭粷瀵瑰畾浣岯UG
			$('<div />').appendTo(_this);
			
			// 鍥剧墖鍖�
			var _imgArea = 
			$('<div />').appendTo(_this)
						.width('x,show-x'.indexOf(config.animateStyle)!=-1?_w*_n:_w)
						.height('y,show-y'.indexOf(config.animateStyle)!=-1?_h*_n:_h);			
	
			// 鍒濆鍖栧浘鐗� 鏂囧瓧 鎸夐挳
			$.each(config.data,function(i,n){
				$('<a />').appendTo(_imgArea)
						  .width(_w)
						  .height(_h)
						  .attr('href',n.href?n.href:'')
						  .attr('target',n.target?n.target:'')
						  .css('display','block')
						  .css('background-image','url('+n.src+')')
						  .css('background-repeat',config.repeat)
						  .css('display','block')
						  .css('float','x,show-x'.indexOf(config.animateStyle)!=-1?'left':'');
						  
				if(config.title){
				$('<b />').appendTo(_textArea)
						  .html(n.title?n.title:'')
						  .css('display',i==0?'block':'none')
						  .css('fontSize',config.titleSize)
						  .css('fontFamily',config.titleFont)
						  .css('color',config.titleColor)
						  .css('marginTop',config.titleTop)
						  .css('marginLeft',config.titleLeft);
				}
				
				if(config.desc){
				$('<p />').appendTo(_textArea)
						  .html(n.desc?n.desc:'')
						  .css('display',i==0?'block':'none')
						  .css('fontSize',config.descSize)
						  .css('fontFamily',config.descFont)
						  .css('color',config.descColor)
						  .css('marginTop',config.descTop)
						  .css('marginLeft',config.descLeft);
				}
				  
						  
				$('<a />').appendTo(_btnArea)
						  .width(config.btnWidth)
						  .height(config.btnHeight)
						  .html(config.btnText?i+1:'')
						  .css('fontSize',config.btnFontSize)
						  .css('fontFamily',config.btnFont)
						  .css('textAlign','center')
						  .css('display','block')
						  .css('float','left')
						  .css('overflow','hidden')
						  .css('marginTop',config.btnTop)
						  .css('marginRight',config.btnMargin)
						  .css('background-color',config.btnColor)
						  .css('opacity',i==0?1:config.btnOpacity)
						  .css('color',config.btnFontColor)
						  .css('cursor','pointer')

			});
			
			// 淇濆瓨鎵€鏈夊厓绱犻泦鍚堢殑寮曠敤,鏂逛究鍦ㄤ簨浠朵腑浣跨敤
			var _bs = _btnArea.children('a');
			var _ts = _textArea.children('b');
			var _ds = _textArea.children('p');
			var _is = _imgArea.children('a');

			// 閽堝涓嶅悓鐨勫姩鐢绘晥鏋滅殑闄勫姞璁剧疆, 涓昏鏄痓lock鐨勯棶棰�, 鑻ュ湪鍒濆鍖栨椂璁剧疆block:none浼氶€犳垚涔嬪悗鏃燽lock鏁堟灉
			if('o,show,none'.indexOf(config.animateStyle)!=-1){
				_is.not(':first').hide();
				_is.css('position','absolute');
			}
			
			// 娣诲姞鎸夐挳浜嬩欢
			_bs.click(function(){
				var ii = _bs.index(this);
				if(ii==_i){return;}
				
				_ts.eq(_i).css('display','none');
				_ts.eq(ii).css('display','block');
				_ds.eq(_i).css('display','none');
				_ds.eq(ii).css('display','block');
				_bs.eq(_i).css('opacity',config.bgOpacity);
				_bs.eq(ii).css('opacity',1)
				
				switch(config.animateStyle){
				case 'o' :
					_is.eq(_i).fadeOut(config.animateTime);
					_is.eq(ii).fadeIn(config.animateTime);
					break;
				case 'x' :
					_imgArea.animate({marginLeft:-ii*_w},config.animateTime);
					break;
				case 'y' :
					_imgArea.animate({marginTop:-ii*_h},config.animateTime);
					break;
				case 'show' :
				case 'show-x' :
				case 'show-y' :
					_is.eq(_i).hide(config.animateTime);
					_is.eq(ii).show(config.animateTime);
					break;				
				case 'none' :
					_is.eq(_i).hide();
					_is.eq(ii).show();
					break;				
				}
				_i = ii;
			});

			// 娣诲姞杞崲浠诲姟
			var _play = setInterval(play,config.playTime);
			
			function play(){
				_bs.eq((_i+1)%_n).click()
			}		
			// 榧犳爣杩涘叆浜嬩欢
			_this.mouseover(function(){
				clearInterval(_play);
			});
						
			// 榧犳爣绂诲紑浜嬩欢
			_this.mouseout(function(){
				_play = setInterval(play,config.playTime);
			});
		});
	}
});












})(jQuery);