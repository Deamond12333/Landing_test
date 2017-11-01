<script>
	function check()
	{
		var inp = $("#cities");
		for (var i = 0; i < inp.length; i++)
		{
			if (inp[i].type == "radio" && inp[i].checked)
			{
				return inp[i].value;
			}
		}
		return null;
	};

	$("#selectCity").click(function()
	{
		var city =  check();
		if (city != null)
		{
			alert(city);
		}
	});
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="../">
		<img src="content/logo.png" height'"60" width="60" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		
			<?php
				for ($i = 0; $i < count($menu); ++$i)
					echo '<li class="nav-item"><a class="nav-link '.$menu[$i]['isActive'].'" href="'.$menu[$i]['Link'].'">'.$menu[$i]['Text'].'</a></li>';
			?>
			
			<li class="nav-item">
				<a class="nav-link active" href="get_city" data-toggle="modal" data-target="#modalWindow">Выбрать город...</a>
			</li>
		</ul>
		
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
			<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Поиск</button>
		</form>
	</div><!--collapse-->
</nav>

<div class="modal fade" id="modalWindow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Выберите свой город:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<div class="d-flex flex-column justify-content-center">
					<?php
						include "cities.php";
						echo '<div class="btn-group-vertical" data-toggle="buttons">';
						foreach ($alphabet as $abc)
						{
							if (count($cities[$abc]) > 0)
							{
								echo '<h5>'.$abc.'</h5>';
								foreach ($cities[$abc] as $city)
								{
									echo '<label class="btn btn-secondary">';
									echo '<input type="radio" name="cities" value="'.$city.'" autocomplete="off">'.$city.'</label>';
								}
								echo '<hr>';
							}
						}
						echo '</div>';
					?>
				</div>
			</div>
			
			<div class="modal-footer">
				<button id="selectCity" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>