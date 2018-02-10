<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>NovaIO | Đăng ký dịch vụ website</title>
		<meta name="description" content="Đăng ký dịch vụ website" />
		<meta name="keywords" content="Thiet ke websit" />
		<meta name="author" content="NovaIO" />
		<link rel="shortcut icon" href="../img/assets/favicon.jpg">
		<link rel="stylesheet" type="text/css" href="form/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="form/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="form/css/component.css" />
		<link rel="stylesheet" type="text/css" href="form/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="form/css/cs-skin-boxes.css" />
		<script src="form/js/modernizr.custom.js"></script>
	</head>
	<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1439065329488554";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap" style="background-color:#efebe9">
				<div class="fs-title">
					<h1>Đăng ký dịch vụ website</h1>
					<div class="codrops-top">
						<a target="_blank"  class="codrops-icon codrops-icon-prev" href="/"><span>Trang chủ</span></a>
						<span class="fb-share-button" data-href="http://www.novaio.com.vn" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank"  class="fb-xfbml-parse-ignore codrops-icon codrops-icon-drop" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.novaio.com.vn%2F&amp;src=sdkpreparse"><span>Chia sẻ</span></a></span>

						<a target="_blank"  class="codrops-icon codrops-icon-info" href="#"><span>Hỗ trợ</span></a>
					</div>
				</div>
				<form action="dang-ky" method="POST" enctype="multipart/form-data" id="myform" class="fs-form fs-form-full" autocomplete="off">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<ol class="fs-fields">
					@if(session('notifi'))	
						<li>
							<label class="fs-field-label fs-anim-upper" style="color: #1f8ceb">{{ session('notifi') }}
							</label>
						</li>
					@endif
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Tên liên lạc?</label>
							<input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="Tên liên lạc" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="Chúng tôi hứa sẽ giữ bí mật...">Địa chỉ email?</label>
							<input class="fs-anim-lower" id="q2" name="email" type="email" placeholder="info@tencongty.com" required/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3">Nhập số điện thoại?</label>
							<input required class="fs-anim-lower" id="q3" name="phone" placeholder="Phone"/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q4" data-info="Giúp chúng tôi biết những dịch vụ bạn đang cung cấp">Những gì bạn cần cho website mới?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q4b" name="content" type="radio" value="Conversion"/><label for="q4b" class="radio-conversion">Giới  thiệu Công ty</label></span>
								<span><input id="q4c" name="content" type="radio" value="Social"/><label for="q4c" class="radio-social">Bán hàng</label></span>
								<span><input id="q4a" name="content" type="radio" value="Mobile"/><label for="q4a" class="radio-mobile">Xây dựng ứng dụng</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="Tông màu phù hợp với thương hiệu của bạn">Màu nào phù hợp cho websit?.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower" name="color">
								<option value="" disabled selected>Chọn 1 màu sau đây</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">Hình tượng về trang web mới của bạn?</label>
							<textarea class="fs-anim-lower" id="q5" name="imagination" placeholder="Mô tả ở đây"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q6">Dự kiến ngân sách?</label>
							<input class="fs-mark fs-anim-lower" id="q6" name="expense" type="number" placeholder="5000000" step="1000000" min="2000000"/>
						</li>
					</ol><!-- /fs-fields -->
					<script>
					  fbq('track', 'CompleteRegistration');
					</script>

					<button class="fs-submit" type="submit">Đăng ký</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			<!-- Related demos -->
			<div class="related">
				<p>Demo sau đây có thể phù hợp:</p>
				<a target="_blank"  href="http://novaio.vn/web/maxhotel">
					<img width="300" src="/form/img/relatedposts/w-2.png" />
					<h3>Phong cách sáng tạo</h3>
				</a>
				<a target="_blank"  href="http://novaio.vn/web/hotely/">
					<img width="300" src="/form/img/relatedposts/w-1.png" />
					<h3>Đằng cấp vượt thờn gian</h3>
				</a>
			</div>

		</div><!-- /container -->
		<script src="form/js/classie.js"></script>
		<script src="form/js/selectFx.js"></script>
		<script src="form/js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>