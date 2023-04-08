<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Sidebar -->
	<div class="sidebar">

		<nav class="mt-2">

			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{route('admin.user.index')}}" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Users
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="{{route('admin.post.index')}}" class="nav-link">
						<i class="nav-icon fas fa-clipboard"></i>
						<p>
							Posts
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="{{route('admin.category.index')}}" class="nav-link">
						<i class="nav-icon fas fa-list"></i>
						<p>
							Categories
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="{{route('admin.tag.index')}}" class="nav-link">
						<i class="nav-icon fas fa-tags"></i>
						<p>
							Tags
						</p>
					</a>
				</li>

			</ul>

		</nav>

	</div>
	<!-- /.sidebar -->
</aside>