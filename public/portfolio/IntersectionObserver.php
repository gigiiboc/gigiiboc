<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<style>	
		.example {
			padding-top: 400px;
			padding-bottom: 100px;
			width: 100%;
			background: #eee;
			position: relative;
		}
		.title {
			position: absolute;
			top: 10px;
			left: 50%;
			transform: translateX(-50%);
		}
		.arrow {
			display: inline-block;
			animation: bounce 1s infinite ease;
		}
		.image {
			margin: 20px 0;
			padding: 20px 0;
			display: block;
			height: 100%;
			min-height: 60px;
			width: 100%;
		}
		.image-default {
			padding: 20px 0;
			display: block;
			width: 100%;
		}
	</style>
	<div class="example">
		<img data-src="https://picsum.photos/600/400/?random?1" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?2" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?3" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?4" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?5" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?6" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?7" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?1" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?2" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?3" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?4" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?5" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?6" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?7" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?1" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?2" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?3" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?4" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?5" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?6" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?7" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?1" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?2" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?3" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?4" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?5" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?6" alt="random image" class="image">
		<img data-src="https://picsum.photos/600/400/?random?7" alt="random image" class="image">
	</div>
	<script type="text/javascript">		
		// IntersectionObserver 를 등록한다.
		const io = new IntersectionObserver(entries => {
			entries.forEach(entry => {
				// 관찰 대상이 viewport 안에 들어온 경우 'tada' 클래스를 추가
				if (entry.intersectionRatio > 0) {
					entry.target.src = entry.target.dataset.src;
				}
			})
		})

		// 관찰할 대상을 선언하고, 해당 속성을 관찰시킨다.
		const boxElList = document.querySelectorAll('.image');
		boxElList.forEach((el) => {
			io.observe(el);
		})
	</script>
</body>
</html>

