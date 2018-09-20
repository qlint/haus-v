		<div class="sidebar">
            <aside class="left-nav" id="leftMenu">
    			<ul>
					<li><a href="#">COLLECTION</a></li>
					<li class="active">
					   <ul class="level-2 open">
							 @foreach($categories as $category)
								 <li><a href="#" >{{ $category->category_name }}</a></li>
							 @endforeach
					   </ul>
					</li>
					<li>
					   <a href="#">BLOG</a>
					   <ul class="level-2">
					      <li><a href="#" >Title</a></li>
					      <li><a href="#" >Title</a></li>
					      <li><a href="#" >Title</a></li>
					      <li><a href="#" >Title</a></li>
					      <li><a href="#" >Title</a></li>
					      <li><a href="#" >Title</a></li>
					      <li><a href="#" >Title</a></li>
					   </ul>
					</li>
				</ul>
			</aside>

			<div class="category-description">
            	Trends this season say one thing: blouses again returned to favour. The larger and more oversize your preference, the better. Will it be a sweatshirt with a hood, kangaroo, college, or zip-up varsity jacket??? it's up to you. Haus Valeriaa will find patterns that make you stand out among the gray crowd.
            </div>
		</div>
