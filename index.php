<html>
	<body>
		<script>
			var node = new XMLHttpRequest();
			node.open("GET","https://85.25.36.97:7890/account/get?address=NBWKR6HRBCVEC6W7EWIR7IGOSKZKFGVQO3Q6K324");
			node.onload = function(){
				var text = JSON.parse(this.responseText);
				document.write();
				document.write("address："+text.account.address);
				document.write("<br>balanse："+text.account.balance);
				text.account.balance = 200;
				//document.write("<br>fake:"+text.account.balance);
				if(text.account.balance >= 100){
					//document.write("<br><br><img src='1.jpg' height='200'>");
					document.write("一枚目");
				}
				if(text.account.balance >= 200){
					//document.write("<br><br><img src='2.jpg' height='200'>");
					document.write("二枚目");
				}
				if(text.account.balance >= 400){
					//document.write("<br><br><img src='2.jpg' height='200'>");
					document.write("三枚目");
				}
				if(text.account.balance >= 800){
					//document.write("<br><br><img src='2.jpg' height='200'>");
					document.write("四枚目");
				}
			}
			node.send("");
		</script>
	</body>
</html>
