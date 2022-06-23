<?php 
	echo "<body style='background-image: url(gr.jpg);background-size: cover;'>";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class=" container w-50" >
	<div class=" my-5 p-5 bg-light rounded" style="--bs-bg-opacity: .7;">
		<h2 class="text-center"> Форма </h2>
		<form action="/index.php" method="POST">

            <div class="mr-3">
  				<label for="name1" class="form-label">Имя</label>
  				<input type="text" class="form-control" name="name1" id="name1" placeholder="name">
			</div>

			<div class="mb-3">
  				<label for="email1" class="form-label">Email</label>
  				<input type="email" class="form-control" name="email1" id="email1" placeholder="name@example.com">
			</div>

			<div class="mb-3">
  				<label for="date1" class="form-label">Дата рождения</label>
  				<input type="date" class="form-control" name="date1" id="date1" >
			</div>
			
			<div class="d-flex justify-content-start">
				<div class="container">
					Пол<br />
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="radio1" id="sex1" checked>
  						<label class="form-check-label" for="sex1">Мужской</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="radio1" id="sex2" >
  						<label class="form-check-label" for="sex2">Женский</label>
					</div>
				</div>

				<div class="container">
					Количество конечностей<br />
					<div class="form-check form-check-inline">
  						<input class="form-check-input" type="radio" name="radio2" id="c1" checked>
  						<label class="form-check-label" for="c1">1</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c2" >
  						<label class="form-check-label" for="c2">2</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c3" >
  						<label class="form-check-label" for="c3">3</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c4" >
  						<label class="form-check-label" for="c4">4</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c5" >
  						<label class="form-check-label" for="c5">5</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="radio2" id="c6" >
  						<label class="form-check-label" for="c6">6</label>
					</div>
				</div>
			</div>
			

			<div class="my-3">
				Сверхспособности<br />
				<select class="form-select mt-2" multiple aria-label="Default select example" >
  					<option name="select1" selected>бессмертие</option>
  					<option name="select2" value="1">прохождение сквозь стены</option>
  					<option name="select3" value="2">левитация</option>
				</select>
			</div>

			<div class="mb-3">
  				<label for="bio1" class="form-label">Биография</label>
  				<textarea class="form-control" name ="bio1" id="bio1" rows="3">Расскажите о себе</textarea>
			</div>				
			<div class="form-check mb-3">
  				<input class="form-check-input" name="chek1" type="checkbox" id="chek1">
 				<label class="form-check-label" for="chek1">С контрактом ознакомлен(а)</label>
			</div>				
			<div class="d-grid gap-2" >
    			<button class="btn btn-primary" type="submit">Отправить</button>
  			</div>
		</form>
	</div>
</div>

</body>