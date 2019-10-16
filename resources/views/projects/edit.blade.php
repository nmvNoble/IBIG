@extends ('layout_main')

@section('banner')
	<section id="main" class="wrapper">
	<div class="container">
		<header class="major special">
			<h2>Editing Project: {{$project->title}}</h2>
			<p>Fill in the details bellow to edit your own project</p>
		</header>

		<!-- Form -->
			<section>
				<h3>Edit Project Form</h3>
				<form method="POST" action="\projects\{{$project->id}}">
					@csrf
					@method('PUT')
					<div class="row uniform 50%">
						<div class="6u$ 12u$(xsmall)">
							<input 
								type="text" 
								autocomplete="off" 
								name="title" 
								id="title"  
								value=" {{old('title', $project->title)}} " 
								placeholder="Title" />
                            @error('title')
                                <p class="help is-danger">{{$errors->first('title')}}</p>
                            @enderror
						</div>

						<div class="6u$ 12u$(xsmall)">							
							<input 
								type="text" 
								autocomplete="off" 
								name="goal" 
								id="goal"  
								value=" {{old('goal', $project->goal)}} " 
								placeholder="Goal in Philippine Pesos" />
                            @error('goal')
                                <p class="help is-danger">{{$errors->first('goal')}}</p>
                            @enderror
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input 
								type="text" 
								autocomplete="off" 
								name="image" 
								id="image"  
								value=" {{old('image', $project->image)}} " 
								placeholder="Image File Name" />
						</div>
						<div class="12u$">
							<textarea 
								name="description" 
								id="description" 
								placeholder="Enter your Projects description here" 
								rows="6"> {{old('description', $project->description)}} </textarea>
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