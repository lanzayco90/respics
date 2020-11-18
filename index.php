<!DOCTYPE html>
<html>
<style>
	* {
		box-sizing: border-box;
	}
	h1 {
		text-align: center;
	}
	.outer-grid {
		display: flex;
		flex-wrap: wrap;
		padding: 0 4px;
	}
	.inner-grid {
		flex: 25%;
		max-width: 25%;
		padding: 0 4px;
	}
	.inner-grid img {
		margin-top: 8px;
		width: 100%;
		padding: 10px;
	}
	@media screen and (max-width: 600px) {
		.inner-grid {
			flex: 100%;
			max-width: 100%;
		}
	}
</style>
<body>
	<h1> Responsive Image Grid Example</h1>
	<div class="outer-grid">
	<div class="inner-grid">
		<a href="hoami.html"><img src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/></a>
		<img src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
		<img src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
	</div>
	<div class="inner-grid">
		<img src="https://images.pexels.com/photos/776656/pexels-photo-776656.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
		<img src="https://images.pexels.com/photos/776656/pexels-photo-776656.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
		<img src="https://images.pexels.com/photos/776656/pexels-photo-776656.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
	</div>
	<div class="inner-grid">
		<img src="https://images.pexels.com/photos/1005715/pexels-photo-1005715.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
		<img src="https://images.pexels.com/photos/1005715/pexels-photo-1005715.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
		<img src="https://images.pexels.com/photos/1005715/pexels-photo-1005715.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
	</div>
</div>
</body>
</html>

