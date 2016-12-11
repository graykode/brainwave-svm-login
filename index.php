<html>
 
	<head>   
		<link href="css/dropzone.min.css" type="text/css" rel="stylesheet" />
		<script src="dropzone.js"></script>
		
		<!-- 부트 스트랩 -->
		<link href="css/app.css" rel="stylesheet">
		
		<!-- jQuery -->
		<script src="app.js"></script>
		
	</head>
	 
	<body>

		
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label">뇌파 csv</label>
				<input type="file" name="file"></input>
			</div>
			
			<div class="form-group">
				<label class="control-label">사용자 이름</label>
				<select name="user" class="form-control">
					<option value="t">태환</option>
					<option value="w">원석</option>
					<option value="g">기범</option>
				</select>
			</div>
			
			<button  type="submit">로그인</button>
		</form>
		
		
		<div>
			뇌파 데이터
			<div>
				<br/>태환<br/>
				<a href="http://211.249.50.30/~brain/data/t/t1.csv">태환1.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t2.csv">태환2.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t3.csv">태환3.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t4.csv">태환4.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t5.csv">태환5.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t6.csv">태환6.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t7.csv">태환7.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t8.csv">태환8.csv</a>
				<a href="http://211.249.50.30/~brain/data/t/t9.csv">태환9.csv</a>
			</div>
			<div>
				<br/>원석<br/>
				<a href="http://211.249.50.30/~brain/data/w/w1.csv">원석1.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w2.csv">원석2.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w3.csv">원석3.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w4.csv">원석4.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w5.csv">원석5.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w6.csv">원석6.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w7.csv">원석7.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w8.csv">원석8.csv</a>
				<a href="http://211.249.50.30/~brain/data/w/w9.csv">원석9.csv</a>
			</div>
			<div>
				<br/>기범<br/>
				<a href="http://211.249.50.30/~brain/data/g/g1.csv">기범1.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g2.csv">기범2.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g3.csv">기범3.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g4.csv">기범4.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g5.csv">기범5.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g6.csv">기범6.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g7.csv">기범7.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g8.csv">기범8.csv</a>
				<a href="http://211.249.50.30/~brain/data/g/g9.csv">기범9.csv</a>
			</div>
		</div>
		
		
	</body>
 
</html>

