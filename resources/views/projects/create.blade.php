@extends ('layout_main')

@section('banner')
	<section id="main" class="wrapper">
	<div class="container">
		<header class="major special">
			<h2>New Project</h2>
			<p>Fill in the details bellow to create your own project</p>
		</header>

		<!-- Form -->
			<section>
				<h3>New Project Form</h3><hr>
				<form method="POST" action="\projects">
					@csrf

					<div class="row uniform 50%">
						<div class="6u$ 12u$(xsmall)">
							<h4>Title:</h4>
							<input 
							type="text" 
							autocomplete="off" 
							name="title" 
							id="title"  
							value="{!! old('title') !!}" 
							placeholder="" />
                            @error('title')
                                <p class="help is-danger">{{$errors->first('title')}}</p>
                            @enderror
						</div>

						<div class="6u$ 12u$(xsmall)">	
							<h4>Goal in Philippine Pesos:</h4>						
							<input 
								type="text" 
								autocomplete="off" 
								name="goal" 
								id="goal"  
								value="{{old('goal')}}" 
								placeholder="" />
                            @error('goal')
                                <p class="help is-danger">{{$errors->first('goal')}}</p>
                            @enderror
						</div>
						<div class="6u$ 12u$(xsmall)">
							<h4>Image Filename:</h4>
							<input type="text" 
								autocomplete="off" 
								name="image" 
								id="image"  
								value=" {{old('image')}} " 
								placeholder="" />
						</div>
						<div class="12u$">
							<h4>Desciption:</h4>
							<textarea name="description" id="description" placeholder="Enter your Project description here" rows="6">{{old('description')}}</textarea>
                            @error('description')
                                <p class="help is-danger">{{$errors->first('description')}}</p>
                            @enderror
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Publish" class="button special" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</div>
					</div>
				</form>
			</section>
	</div>
@endsection