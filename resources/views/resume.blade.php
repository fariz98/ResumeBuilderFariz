<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Resume</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	list-style: none;
	box-sizing: border-box;
	font-family: 'Ubuntu', sans-serif;
}

body{
	background: linear-gradient(to right, #3525af, #9153c9);
}

.resume{
	width: 800px;
	background: #fff;
	margin: 25px auto;
	display: flex;
}

.left{
	background: #292b2f;
	width: 250px;
	padding: 0 20px;
}

.right{
	width: calc(100% - 250px);	
}

.left .img_holder{
	text-align: center;
	padding: 20px 0;
}

.left .img_holder img{
	width: 200px;
	border-radius: 30px;
}

.pb{
	padding-bottom: 20px;
}

.title{
	font-size: 24px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 5px;
	padding-bottom: 10px;
	color: #3525af;
	position: relative;
	text-align: right;
	margin-bottom: 15px;
}

.title:before{
	content: "";
	position: absolute;
	top: 35px;
	right: 0;
	width: 50px;
	height: 3px;
	background: #3525af;
}

.left .icon{
	font-size: 20px;
	color: #9153c9;
}

.left .text{
	color: #9153c9;
	text-transform: uppercase;
	font-size: 13px;
}

.contact .li_wrap{
	display: flex;
	align-items: center;
	width: 100%;
	margin-bottom: 15px;
}

.contact .li_wrap .icon{
	width: 40px;
	height: 40px;
	background: #fff;
	border-radius: 15px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-right: 15px;
}

.contact .li_wrap .text{
	width: calc(100% - 50px);
	word-break: break-word;
	color: #fff;
}

.skills ul,
.hobbies ul{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

.skills .li_wrap,
.hobbies .li_wrap{
	width: 100px;
	height: 100px;
	margin-bottom: 15px;
	border-radius: 15px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.skills .li_wrap{
	background: #fff;
}

.skills .li_wrap .text,
.hobbies .li_wrap .text{
	margin-top: 5px;
}

.hobbies .li_wrap{
	border: 2px solid #fff;
}

.hobbies .li_wrap .icon,
.hobbies .li_wrap .text{
	color: #fff;
}

.hobbies .li_wrap:hover{
	background: #fff;
}

.hobbies .li_wrap:hover .icon,
.hobbies .li_wrap:hover .text{
	color: #9153c9;
}

.header{
	background: #292b2f;
	padding: 15px 30px;
	color: #fff;
	height: 240px;
}

.header .name{
	font-size: 52px;
	text-transform: uppercase;
	font-weight: 700;
	color: #3525af;
}

.header .role{
	font-weight: 300;
	font-size: 20px;
}

.header .about{
	margin-top: 10px;
	line-height: 26px;
}

.right_inner{
	padding: 30px;
	color: #292b2f;
}

.right_inner .education{
	margin-top: 30px;
}

.right_inner .li_wrap{
	display: flex;
	margin-bottom: 15px;
}

.right_inner .li_wrap .date {
    width: 125px;
    color: #9153c9;
}

.right_inner .li_wrap .info{
	width: calc(100%  - 125px);
	padding-left: 25px;
	position: relative;
}

.right_inner .li_wrap .info_title{
	text-transform: uppercase;
	font-weight: 700;
	letter-spacing: 2px;
	color: #9153c9;
}

.right_inner .li_wrap .info_com{
	font-weight: 300;
	font-size: 14px;
	margin-top: 3px;
}

.right_inner .li_wrap .info_cont{
	margin-top: 15px;
}

.right_inner .li_wrap .info:before{
	content: "";
	position: absolute;
	top: 3px;
	left: 0;
	width: 10px;
	height: 10px;
	background: #9153c9;
	border-radius: 50%;
}

.right_inner .li_wrap .info:after{
	content: "";
	position: absolute;
	top: 10px;
	left: 4px;
	width: 2px;
	height: 90%;
	background: #9153c9;
}
    </style>
	  {{-- make sure you are using http, and not https --}}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
        function init() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                callback: 'drawChart'
            });
        }

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Pizza');
            data.addColumn('number', 'Populartiy');
            data.addRows([
                ['Pepperoni', 33],
                ['Hawaiian', 26],
                ['Mushroom', 22],
                ['Sausage', 10], // Below limit.
                ['Anchovies', 9] // Below limit.
            ]);

            var options = {
                title: 'Popularity of Types of Pizza',
                sliceVisibilityThreshold: .2
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body onload="init()">
<div class="wrapper">
		<div class="resume" >
			<div class="left">
				<div class="img_holder">
					<img src="{{ asset('uploads/userpic/' . $user->detail->image)}}" class="img-fluid">
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text">{{$user->detail->phone}}</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text">{{$user->detail->email}}</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-weebly" aria-hidden="true"></i></div>
									<div class="text">www.aniabukstein.com</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text">{{$user->detail->address}}</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="contact">
                    @foreach($user->skill as $e)
						<ul>
                        <li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-star" aria-hidden="true"></i></div>
									<div class="text">{{$e->name}} ({{$e->rating}})</div>
								</div>
							</li>
						</ul>
                        @endforeach
					</div>
				</div>
			</div>
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name">
                        {{ucfirst($user->detail->fullname)}}
						</div>
						<div class="role">
							UI UX Developer
						</div>
					</div>
					<div class="about">
                    {{$user->detail->summarry}}
					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
                        @foreach($user->experience as $e)
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
                                        {{$e->start_date}} - {{$e->end_date}}
										</div>
										<div class="info">
											<p class="info_title">
                                            {{$e->job_title}}
											</p>
											<p class="info_com">
                                            {{$e->employer}}, {{$e->city}}
											</p>
											<p class="info_cont">
                                            {{$e->state}}
											</p>
										</div>
									</div>
								</li>
								
							</ul>
                            @endforeach
						</div>
					</div>
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
                        @foreach($user->education as $e)
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
                                        {{$e->graduation_start_date}} - {{$e->graduation_end_date}}
										</div>
										<div class="info">
											<p class="info_title">
                                            {{$e->degree}} in {{$e->field_of_study}}
											</p>
											<p class="info_com">
                                            {{$e->school_name}}, {{$e->school_location}}
											</p>
											<p class="info_cont">
											{{$e->summary}}
											</p>
										</div>
									</div>
								</li>
							</ul>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>