<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>@yield('title') | {{ config('app.name') }}</title>
	<link href="/chatt/img/favicon.png" type="image/png" rel="icon">

	<link rel="stylesheet" href="/chatt/css/bootstrap.min.css">
	<link rel="stylesheet" href="/chatt/css/perfect-scrollbar.min.css" >
	<link rel="stylesheet" href="/chatt/css/themify-icons.css">
	<link rel="stylesheet" href="/chatt/css/emoji.css">
	<link rel="stylesheet" href="/chatt/css/style.css" >
	<link rel="stylesheet" href="/chatt/css/responsive.css" >

</head>
	<body>
		<main>
			<div class="layout">
				<div class="navigation">
					<div class="container">
						<div class="inside">
							<div class="nav nav-tab menu">
								<a href="#settings" data-toggle="tab" title="User Setting">
									<i class="ti-panel"></i>
									Setting
								</a>
								<a href="#members" data-toggle="tab" title="All members">
									<i class="ti-home"></i>
									All Friends
								</a>
								<a href="#discussions" data-toggle="tab" class="active" title="Chat">
									<i class="ti-comment-alt"></i>
									Recent Chat
								</a>
								<a href="#notifications" data-toggle="tab" class="f-grow1" title="Notifications">
									<i class="ti-bell"></i>
									Notifications
								</a>
								<a href="" id="dark" class="dark-theme" title="Use Night Mode">
									<i class="ti-wand"></i>
									Night Mode
								</a>
								<a href="sign-in.html" class="btn power" title="Sign Out"><i class="ti-power-off"></i></a>
							</div>
						</div>
					</div>
				</div><!-- Navigation -->

				<div class="sidebar" id="sidebar">
					<div class="container">
						<div class="col-md-12">
							<div class="tab-content">
								<!-- Start of Contacts -->
								<div class="tab-pane fade" id="members">
									<!-- <figure class="setting">
										<img class="avatar-xl" src="/site/images/logo_nam.png"
											alt="avatar">
									</figure> -->

									<span class="logo">
										<img alt="" src="/site/images/logo_nam.png">
									</span>

									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="people" placeholder="Search for people...">
											<button type="button" class="btn btn-link loop"><i class="ti-search"></i></button>
										</form>
										<button class="btn create" data-toggle="modal" data-target="#exampleModalCenter">
											<i class="ti-user">+</i></button>
									</div>
									<div class="list-group sort">
										<button class="btn filterMembersBtn active show"
											data-toggle="list" data-filter="all">All Chatrooms</button>
									</div>
									<div class="contacts">
										<h1>Contacts</h1>
										<div class="btn-group add-group" role="group">
											<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  Add +
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											  <a class="dropdown-item" href="#">New user</a>
											  <a class="dropdown-item" href="#">New Group +</a>
												<a class="dropdown-item" href="#">Private Chat +</a>
											</div>
										  </div>
										<div class="list-group" id="contacts" role="tablist">
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="/site/images/logo_nam.png" data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Sarah Dalton</h5>
													<p>Sofia, Bulgaria</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Bob Frank" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Bob Frank</h5>
													<p>Washington, USA</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Lucy" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Lucy Grey</h5>
													<p>Shanghai, China</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="james idoms" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>james idoms</h5>
													<p>Helena, Montana</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact"
												data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Linda Gates" alt="avatar">
												<div class="status online"></div>
												<div class="data">
													<h5>Linda gates</h5>
													<p>Indore, India</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Karen joye" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Karen joye</h5>
													<p>Chisinau, Moldova</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Lisa Honey" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Lisa Honey</h5>
													<p>Vienna, Austria</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Daniel Cabral" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Daniel Cabral</h5>
													<p>Oslo, Norway</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="/chatt/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Jhon Doe" alt="avatar">
												<div class="status offline"></div>
												<div class="data">
													<h5>Jhon Doe</h5>
													<p>London, United Kingdom</p>
												</div>
												<div class="person-add">
													<i class="ti-user"></i>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Contacts -->

								<!-- Start of Discussions -->
								<div id="discussions" class="tab-pane fade in active show">
									<a href="/">
										<span class="logo">
											<img src="/site/images/logo_nam.png" alt="">
										</span>
									</a>


									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="conversations"
												placeholder="Search for conversations...">
											<button type="button" class="btn btn-link loop">
												<i class="ti-search"></i>
											</button>
										</form>

										<button class="btn create" data-toggle="modal"
											data-target="#startnewchat">
											<i class="ti-pencil"></i>
										</button>

									</div>
									<div class="list-group sort">
										<button class="btn filterDiscussionsBtn active show"
											data-toggle="list" data-filter="all">All Chat Rooms</button>

									</div>
									<div class="discussions" id="scroller">
										<h1>Chat Rooms</h1>
										<div class="btn-group add-group" role="group">
											<button id="btnGroupDrop2" type="button" class="btn btn-secondary dropdown-toggle"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  Add +
											</button>
											<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											  <a class="dropdown-item" href="#">New user</a>
											  <a class="dropdown-item" href="#">New Group +</a>
												<a class="dropdown-item" href="#">Private Chat +</a>
											</div>
										  </div>
										<div class="list-group" id="chats" role="tablist">
											<a href="#list-chat" class="filterDiscussions all unread single active"
												id="list-chat-list" data-toggle="list" role="tab">

												<img class="avatar-md" src="/images/avatars/user.png"
													data-toggle="tooltip" data-placement="top" title="Sarah" alt="avatar">

												<div class="status online"></div>

												<div class="data">
													<h5>Salt Lake Chats</h5>
													<div class="new bg-yellow">
														<span>500+</span>
													</div>
													<span>Mon</span>
													<p>The last message seen...</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all unread single"
												id="list-empty-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="/images/avatars/user.png"
													data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status offline"></div>

												<div class="data">
													<h5>Cooking Oil Chat</h5>
													<div class="new bg-red">
														<span>9+</span>
													</div>
													<span>Sun</span>
													<p>How can i improve my chances?</p>
												</div>
											</a>

										</div>
									</div>
								</div>
								<!-- End of Discussions -->


							</div>
						</div>
					</div>
				</div><!-- Sidebar -->

				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="requests">
							<div class="title">
								<h1>Add your friends</h1>
								<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
							</div>
							<div class="content">
								<form>
									<div class="form-group">
										<label for="user">Username:</label>
										<input type="text" class="form-control" id="user" placeholder="Add recipient..." required>
										<div class="user" id="contact">
											<img class="avatar-sm" src="/chatt/img/avatars/avatar-female-5.jpg" alt="avatar">
											<h5>Karen joye</h5>
											<button type="reset" class="btn"><i class="ti-close"></i></button>
										</div>
									</div>
									<div class="form-group">
										<label for="welcome">Message:</label>
										<textarea class="text-control" id="welcome" placeholder="Send your welcome message...">Hi Karen joye, I'd like to add you as a contact.</textarea>
									</div>
									<button type="submit" class="btn button w-100">Send Friend Request</button>
								</form>
							</div>
						</div>
					</div>
				</div><!-- Add Friends -->


				@yield('content')
			</div> <!-- Layout -->
		</main>

		<script src="/chatt/js/jquery3.3.1.js"></script>
		<script src="/chatt/js/jquery-slim.min.js"></script>
		<script src="/chatt/js/popper.min.js"></script>
		<script src="/chatt/js/bootstrap.min.js"></script>
		<script src="/chatt/js/perfect-scrollbar.min.js"></script>
		<script src="/chatt/js/script.js"></script>
	</body>
</html>
